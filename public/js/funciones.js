/****************************************
***funcion para barra lateral menu mobile*
******************************************/
$(document).ready(function(){
     $(".button-collapse").sideNav();
    
     $('select').material_select();
     //$('.modal-trigger').leanModal();    
 });

$.respuesta = function(url, dato, div){
    $.get(url, { num : dato }, function(data){
            $("#formulario").html(data);
        }
    );
}
/************************************************
***animacion de preloader para la pagina pricipal
*************************************************/
 $(window).load(function(){
    $('#preloader').fadeOut('slow');
    $('body').css({'overflow':'visible'});
  })
 /*********************************************
 animation icons table admins***************
 *****************************************/
 $(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
 /*****************************************
 **** funcion para los modals***************
 *****************************************/
 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
 /*******************************************
 *****funcion para los selects del formulario
 ********************************************/
  $(document).ready(function() {
    $('select').material_select();
  });
  /*********************************
  ******funcion para le calendario***
  ***********************************/
  $(document).ready(function(){
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
       
  });
    