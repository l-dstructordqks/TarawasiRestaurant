(function() {
    const horas = document.querySelector('#calendar')

    if(horas) {
        const diners = document.querySelector(".diner-value");
        const hours = document.querySelectorAll(".button-service");

        const inputHiddenCustomer = document.querySelector('[name="customers"]')
        const inputHiddenHour = document.querySelector('[name="hours"]')

        inputHiddenCustomer.addEventListener('change', function() {
            console.log('holaaa');
        });
        //dias.forEach( dia => dia.addEventListener('change', terminoBusqueda));
        if(inputHiddenHour) {
            console.log('todo bien prrin con la hora ');
        }
        function terminoBusqueda() {

            console.log('holaaa');
            /*
            busqueda[e.target.name] = e.target.value;
            console.log(busqueda);
            // Reiniciar los campos ocultos y el selector de horas
            inputHiddenHora.value = '';
            inputHiddenDia.value = '';
            const horaPrevia = document.querySelector('.horas__hora--seleccionada');
            if(horaPrevia) {
                horaPrevia.classList.remove('horas__hora--seleccionada');
            }

            // Previene ejecutar el codigo si algun elemento de la busqueda esta vacio
            if(Object.values(busqueda).includes('')) {
                return;
            }
            //console.log('tu puta mama');

            buscarEventos();*/
        }

    console.log(diners);
    }
    /*
    if(horas) {
        const categoria = document.querySelector('[name="categoria_id"]');
        const dias = document.querySelectorAll('[name="dia"]');
        const inputHiddenDia = document.querySelector('[name="dia_id"]');
        const inputHiddenHora = document.querySelector('[name="hora_id"]');

        categoria.addEventListener('change', terminoBusqueda)
        dias.forEach( dia => dia.addEventListener('change', terminoBusqueda));

        let busqueda = { // añadimos el signo + para convertir nuestro string en un numero
            categoria_id: +categoria.value || '',
            dia: +inputHiddenDia.value || ''
        }

        if(!Object.values(busqueda).includes('')) {

            (async () => {
                await buscarEventos();
                const id = inputHiddenHora.value;
                //Resaltar la hora actual
                const horaSeleccionada = document.querySelector(`[data-hora-id="${id}"]`);
            
                horaSeleccionada.classList.remove('horas__hora--deshabilitada');
                horaSeleccionada.classList.add('horas__hora--seleccionada');
        
                horaSeleccionada.onclick = seleccionarHora;
            })()
        }

        function terminoBusqueda(e) {
            busqueda[e.target.name] = e.target.value;
            console.log(busqueda);
            // Reiniciar los campos ocultos y el selector de horas
            inputHiddenHora.value = '';
            inputHiddenDia.value = '';
            const horaPrevia = document.querySelector('.horas__hora--seleccionada');
            if(horaPrevia) {
                horaPrevia.classList.remove('horas__hora--seleccionada');
            }

            // Previene ejecutar el codigo si algun elemento de la busqueda esta vacio
            if(Object.values(busqueda).includes('')) {
                return;
            }
            //console.log('tu puta mama');

            buscarEventos();
        }

        async function buscarEventos() {
            const { categoria_id, dia} = busqueda;
            const url = `/api/eventos-horario?dia_id=${dia}&categoria_id=${categoria_id}`;

            const resultado = await fetch(url);
            const eventos = await resultado.json();
            

            obtenerHorasDisponibles(eventos);
        }

        function obtenerHorasDisponibles(eventos) {
            console.log(eventos);
            // Reiniciar las horas
            const listadoHoras = document.querySelectorAll('#horas li');
            listadoHoras.forEach(li => li.classList.add('horas__hora--deshabilitada'));

            // Comprobar eventos ya tomados, y quitar la variable deshabilitada
            const horasTomadas = eventos.map( evento => evento.hora_id);
            const listadoHorasArray = Array.from(listadoHoras); // Convertimos un NodeList en un Array
            
            const resultado = listadoHorasArray.filter( li => !horasTomadas.includes(li.dataset.horaId));
            resultado.forEach( li => li.classList.remove('horas__hora--deshabilitada'));
          
            
            const horasDisponibles = document.querySelectorAll('#horas li:not(.horas__hora--deshabilitada)');
            horasDisponibles.forEach( hora => hora.addEventListener('click', seleccionarHora));
        }

        function seleccionarHora(e) {
            
            // Deshabilitar la hora previa, si hay un nuevo click
            const horaPrevia = document.querySelector('.horas__hora--seleccionada');
            if(horaPrevia) {
                horaPrevia.classList.remove('horas__hora--seleccionada');
            }
            

            // Agregar clase de seleccionado
            e.target.classList.add('horas__hora--seleccionada');

            inputHiddenHora.value = e.target.dataset.horaId;

            // Llenar el campo oculto de dia
            inputHiddenDia.value = document.querySelector('[name="dia"]:checked').value;
        }

    }*/
})();