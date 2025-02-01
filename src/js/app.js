//const { container } = require("webpack");
//RESOURCES 
// NAVEGACION FIJA: https://www.udemy.com/course/desarrollo-web-completo-con-html5-css3-js-php-y-mysql/learn/lecture/43493298#overview
import './navigation.js';
import './header.js';
import './calendar.js';

(function() {

    //PREBA FONDO TARAWASI
    const bgProve = document.querySelector('.bg-start-prove');
    const bgProveImage = document.querySelector('.bg-start-prove-image');

    bgProve.addEventListener('click', (function() { 
        console.log('gaaaaaaaaaaaaaaato');
        bgProve.classList.add('started');
        bgProveImage.classList.add('started');
    }));

    
    //FIN PRUEBA 

    const button_service = Array.from(document.querySelectorAll('.button-service'));

    const button_decrement = document.getElementById("decrement");
    const button_increment = document.getElementById("increment");

    const diners_container = document.querySelector('.diners');
    const diners = document.querySelector('.diner-value');

    const people_container = document.querySelector('.people__counter-container');
    const people = document.querySelector('.counter-value');
    let i = parseInt(people.innerHTML);

    const inputHiddenCustomer = document.querySelector('[name="customers"]')

    //darkMode();

    //console.log('avvavaa')
    // SELECT SERVICE HOUR
    //button_service.addEventListener("click", (function() {
       /* button_service.addEventListener('click', selection);
        function selection(e) {
            const selected = document.querySelector('.selected');
            if( selected ) {
                selected.classList.remove('selected');
            } 
            e.target.classList.toggle('selected');
        };
*/

    button_service.forEach( button => {button.onclick = function() {
        const selected = document.querySelector('.selected');
        if( selected ) {
            selected.classList.remove('selected');
        } 
        button.classList.add('selected'); 
        console.log('gaa');
        };
    });

    /*diners_container.addEventListener("click",() => {
        alert('tu puta madereeee');
    })*/
    // BUTTTONS PEOPLE
    diners_container.addEventListener("click", (function() {
        //alert('tu puta madereeee');
        const show = document.querySelector('.show');
        if( show ) {
            show.classList.remove('show');
        } else {
            //console.log(show);
            people_container.classList.add('show');
        }
    }));


    button_decrement.onclick = (function() {
        if(i > 1) {
            i--;
        people.innerHTML = i;
        diners.innerHTML = i;
        inputHiddenCustomer.value = i;
        }
    });

    button_increment.onclick = (function() {
        if(i < 40) {
            i++;
        people.innerHTML = i;
        diners.innerHTML = i;
        inputHiddenCustomer.value = i;
        }
    });

    /* DARKMODE
    function darkMode() {
        // Activate the darkmode if the user preferences is on DarkMode
        const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
        if(prefersDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
        prefersDarkMode.addEventListener('change', function () {
            if(prefersDarkMode.matches) {
                document.body.classList.add('dark-mode');
            } else {
                document.body.classList.remove('dark-mode');
            }
        });

        // DarkMode button
        const botonDarkMode = document.querySelector('.dark-mode-button');
        botonDarkMode.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
        });
    }
    */

    /*PROBE

    document.addEventListener('click', function(e) {
        console.log(e.target);
        console.log(e.target.textContent);

    }); */

    //const day = querySelectorAll('.cal-day-box');
    //day.addEventListener('click')
    /*
    const horasDisponibles = document.querySelectorAll('#horas li:not(.horas__hora--deshabilitada)');
    horasDisponibles.forEach( hora => hora.addEventListener('click', seleccionarHora));
    
    selected.onclick = function() {
        console.log('si funciona hdprrrrrrrraaaaaa');
        selected.classList.add('selected');
    }

    const horasDisponibles = document.querySelectorAll('#horas li:not(.horas__hora--deshabilitada)');
    horasDisponibles.forEach( hora => hora.addEventListener('click', seleccionarHora));

    //formularioRegistro.addEventListener('click', submitFormulario);*/


})();
