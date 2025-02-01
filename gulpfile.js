import { src, dest, watch, parallel } from 'gulp'

// SASS
import * as dartSass from 'sass'
import sourcemaps from 'gulp-sourcemaps'
import gulpSass from 'gulp-sass'
import autoprefixer from 'autoprefixer'
import cssnano from 'cssnano'
import postcss from 'gulp-postcss'
import sassCompiler from 'sass'


// JAVASCRIPT
import terser from 'gulp-terser-js'
import concat from 'gulp-concat'
import rename from 'gulp-rename'

import webpack from 'webpack-stream'

const sass = gulpSass(dartSass)
const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
};
export function javascript( done ) {
    src(paths.js)
        .pipe( webpack({
            module: {
                rules: [
                    {
                        test: /\.css$/i,
                        use: ['style-loader', 'css-loader']
                    }
                ]
            },
            mode: 'production',
            watch: true,
            entry:'./src/js/app.js'
        }))
        .pipe(sourcemaps.init())
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(dest('./public/build/js'))
}

export function css( done ) {
    
    src(paths.scss)
        .pipe(sourcemaps.init())
        .pipe( sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(sourcemaps.write('.'))
        .pipe( dest('public/build/css') );
        done();
}

export function dev() {
    watch(paths.scss, css);
    watch(paths.js, javascript);
}
export default parallel(css, javascript, dev);