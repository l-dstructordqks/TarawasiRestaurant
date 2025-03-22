(function() {
    document.addEventListener('DOMContentLoaded', function() {
        consultAPI();
    });
    
    async function consultAPI() {

        try {
            const url = 'http://localhost:3008/api/reservations';
            const result = await fetch(url);
            //console.log(result);
            const reservations = await result.json();
            //console.log(reservations);
            showReservations(reservations);
        } catch (error) {
            console.log(error);
        }
    }

    function showReservations(reservations){
        //console.log(reservations); 
        /*reservations.forEach( reservation => {
            const{ date, diners } = reservation;
            if()
            console.log(date);
            console.log(diners);
        })*/
        
        const days = document.querySelectorAll('.cal-day-box');


        const todayday = document.querySelector('.today');
        const todaydayDate = todayday.firstChild;
        const todayDate = todaydayDate.dataset.date;

        let todayparts = todayDate.split("/");
        const currentDay = todayparts[0];
        
        
        days.forEach( day => setClases(day));

        function setClases($value) {
            
            const calendarDate = $value.dataset.date;
            const parentDay = $value.parentNode
            //console.log( calendarDate );
            //let todayparts = todayDate.split("-");
            let parts = calendarDate.split("/");
            //console.log(todayparts)
            //console.log(currentDay);
            /*if(currentDay > parts[0]) {
                
                //console.log(papa);
                parentDay.classList.add('before');
            } */
            let newDate = [parts[2], parts[1], parts[0]];
            let newCalendarDate = newDate.join("-");
            //return newCalendarDate;
            //console.log(newCalendarDate);
            
            for (const [key, value] of Object.entries(reservations)) {
                if(newCalendarDate == `${key}`) {
                    //console.log(newCalendarDate);
                    $value.setAttribute('data-diners' , value);
                    //console.log('puttaa vacalola');
                    if(value == 40) {
                        parentDay.classList.add('reserved');
                    }
                }
                //if()
            }
        }
        
        //function setDiners()
    }
})();