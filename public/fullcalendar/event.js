
        $(document).ready(function() {
            var currentLangCode = 'es';//cambiar el idioma al español
 
            $('#calendar').fullCalendar({
                eventClick: function(calEvent, jsEvent, view) {
 
                    $(this).css('background', 'red');
                    //al evento click; al hacer clic sobre un evento cambiara de background
                    //a color rojo y nos enviara a los datos generales del evento seleccionado
                },
                 
                header: {
                    left: 'prev,next today myCustomButton',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                 
                lang:currentLangCode,
                editable: true,
                eventLimit: true,
                events:{
                    //para obtener los resultados del controlador y mostrarlos en el calendario
                    //basta con hacer referencia a la url que nos da dicho resultado, en el ejemplo
                    //en la propiedad url de events ponemos el enlace
                    //y listo eso es todo ya el plugin se encargara de acomodar los eventos
                    //segun la fecha.
                    url:"http://localhost:8000/alumno/calendario"

                }
            });
 
        });
   