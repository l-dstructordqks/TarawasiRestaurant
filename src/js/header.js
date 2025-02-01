(function() {
    let header = document.querySelector('.header__container');
    let pathname = window.location.pathname;
    //let open = document.querySelector('.open')
    //console.log(open);

    /*if(open) {
        console.log('si existe')
        header.classList.remove('scroll');
    } else {
        console.log('nno existe')
    }*/
    // HEADER SCROLL
    if(pathname === '/') {
        if(window.scrollY === 0) {
            header.classList.add('scroll');
        }
    
        window.addEventListener('scroll', setHeader);
    
        function setHeader() {
            
            if(window.scrollY === 0) {
                //header.classList.remove('scroll');
                //console.log('estas arriba p babosos');
                /*let open = document.querySelector('.open')
                if(open) {
                    console.log('si existe');
                    header.classList.remove('scroll');
                } else {
                    console.log('no existe');
                    header.classList.add('scroll');
                }*/
                header.classList.add('scroll');
            } else {
                header.classList.remove('scroll');
            }
        }
    }
    
})();