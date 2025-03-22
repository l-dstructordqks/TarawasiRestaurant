//const { container } = require("webpack");
//RESOURCES 
// NAVEGACION FIJA: https://www.udemy.com/course/desarrollo-web-completo-con-html5-css3-js-php-y-mysql/learn/lecture/43493298#overview
import './navigation.js';
import './header.js';
import './calendar.js';
import './api.js';

(function() {

    //PREBA FONDO TARAWASI
    /*const bgProve = document.querySelector('.bg-start-prove');
    const bgProveImage = document.querySelector('.bg-start-prove-image');

    bgProve.addEventListener('click', (function() { 
        console.log('gaaaaaaaaaaaaaaato');
        bgProve.classList.add('started');
        bgProveImage.classList.add('started');
    }));*/

    
    //FIN PRUEBA 

    const button_service = Array.from(document.querySelectorAll('.button-service'));

    const button_decrement = document.getElementById("decrement");
    const button_increment = document.getElementById("increment");

    const diners_container = document.querySelector('.diners');
    const diners = document.querySelector('.diner-value');

    const people_container = document.querySelector('.people__counter-container');
    const people = document.querySelector('.counter-value');
    let i = parseInt(people.innerHTML);

    const inputHiddenCustomer = document.querySelector('[name="diners"]');
    const inputHiddenDate = document.querySelector('[name="date"]');
    //const dinersCalendar = document.querySelectorAll([diners]);
    const daysCalendar = document.querySelectorAll('.cal-day-box');
    const tdDaysCalendar = document.querySelectorAll('.day');
    inputHiddenCustomer.value = 1;
    

    
    //daysCalendar.forEach( dayCalendar => dinerDisplay(dayCalendar));

    


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
        //console.log('gaaaaaaaaaatito');
        const selected = document.querySelector('.selected');
        if( selected ) {
            selected.classList.remove('selected');
        } 
        button.classList.add('selected'); 
        //console.log('gaa');
        };
    });

    /*diners_container.addEventListener("click",() => {
        
    })*/
    // BUTTTONS PEOPLE
    diners_container.addEventListener('click', (function() {
        
        //document.querySelector('.diner-value')
        const show = document.querySelector('.show');
        if( show ) {
            show.classList.remove('show');
        } else {
            //console.log(show);
            people_container.classList.add('show');
           
        }
    }));
    
    const dinervalue = document.querySelector('.diner-value')
        //console.log(dinervalue);
        
        if (dinervalue) {
            //console.log(inputHiddenCustomer.value);
            setDiners();
            //console.log('puttttttttttttttttaaaaaaaaa');
        }

    function setDiners() {
        daysCalendar.forEach( dayCalendar => dinerDisplay(dayCalendar));
        //console.log('chupetin trujillo');
    }

    function dinerDisplay($value) {
        //console.log($value);
        const dinerDayCalendar = $value.dataset.diners;
        //console.log(dinerDayCalendar);
        //const dinerDayCalendar = $value.getAttribute('diners');
        
        const aviableDiners = Number(dinerDayCalendar) + Number(inputHiddenCustomer.value);
        
        //console.log(dinerDayCalendar);
        //console.log('chupetin trujillo');
        //console.log(aviableDiners);
        
        const notAviable = $value.parentNode;
        if (aviableDiners == 41) {
            notAviable.classList.add('reserved');
        } else if (aviableDiners > 40) {
            //console.log('puta');
            
            notAviable.classList.add('reserved');
            //console.log(notAviable);
        } else {
            notAviable.classList.remove('reserved');
        }
        
    }

    //document.addEventListener('click', (function() {
        
        /*inputHiddenCustomer.value = 1;
        setDiners();
        if(inputHiddenCustomer.value == 1) {
            setDiners();
            console.log('si existe');
        }*/
    //}));
    

    button_decrement.onclick = (function() {
        if(i > 1) {
            i--;
        people.innerHTML = i;
        diners.innerHTML = i;
        inputHiddenCustomer.value = i;
        setDiners();
        }
        //dinersUpdate();
    });

    button_increment.onclick = (function() {
        if(i < 40) {
            i++;
        people.innerHTML = i;
        diners.innerHTML = i;
        inputHiddenCustomer.value = i;
        setDiners();
        }
        //dinersUpdate();
    });
    /*
    function setDiners() {
        daysCalendar.forEach( dayCalendar => dinerDisplay(dayCalendar));
        //console.log('puta');
    }

    function dinerDisplay($value) {
        //console.log($value);
        const dinerDayCalendar = $value.dataset.diners;
        //const dinerDayCalendar = $value.getAttribute('diners');
        
        const aviableDiners = Number(dinerDayCalendar) + Number(inputHiddenCustomer.value);
        //console.log(aviableDiners);
        const notAviable = $value.parentNode;
        if (aviableDiners >= 40) {
            console.log('puta');
            
            notAviable.classList.add('reserved');
            console.log(notAviable);
        } else {
            notAviable.classList.remove('reserved');
        }
        
    }*/
        
    

    tdDaysCalendar.forEach( tdDayCalendar => dateSelection(tdDayCalendar));

    function dateSelection($value) {
        $value.addEventListener('click', (function() {
            const aviable = $value.classList.contains('today');
            const reserved = $value.classList.contains('reserved');
            const before = $value.classList.contains('before');
            //console.log(before);
            if(!(aviable || reserved || before)) {
                const selectedBefore = document.querySelector('.selected');
                //console.log(selectedBefore);
                if(selectedBefore) {
                    selectedBefore.classList.remove('selected');
                }
                $value.classList.toggle('selected');
                //console.log('no se puede seleccionar prra');
                const selectedDay = document.querySelector('.selected')
                if(selectedDay) {
                    
                    console.log(selectedDay.childNodes[0]);
                    const dateSelected = selectedDay.childNodes[0].dataset.date;
                    let partsSelected = dateSelected.split("/");
                    let newDate = [partsSelected[2], partsSelected[1], partsSelected[0]];
                    let newSelectedDate = newDate.join("-");
                    //console.log(newSelectedDate);
                    inputHiddenDate.value = newSelectedDate;
                    //console.log(inputHiddenDate);
                }
            }
            
            //console.log($value);
        }))
        const aviable = $value.classList.contains('today');
        //if($value)
        console.log(aviable);
    }

    tdDaysCalendar.forEach( tdDayCalendar => beforeDays(tdDayCalendar));
    function beforeDays($value) {
        const today = $value.classList.contains('today')
        const foundToday = false;
        if(today) {
            foundToday = true;
        }  
        if(!foundToday) {
            $value.classList.add('before');
        }
    }
    
    

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
