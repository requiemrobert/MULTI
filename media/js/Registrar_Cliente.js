var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3] + '/' + path[4] + '/';

"use strict";

$(function(){

    $("#registrar").on('click', function(event){

      event.preventDefault();
      var $form = $("form");
        
      var dataJson = getFormData($form);

      registrarCliente(dataJson);

    }); 

});////END MAIM

function registrarCliente(dataJson){

    $login = $.ajax({
                      type: "POST",
                      url: baseURL + 'registrar_Cliente',
                      data: dataJson,
                      contentType: "application/json; charset=utf-8",
                      dataType: "json"

    }); 

    $login.done(function(response) {

       mensajeResponse(response);
       //$('form')[0].reset();
        
    });

    $login.fail(function(response) {
      console.error(response); 
    });

    $login.always(function(data) {
       
    });

}

function mensajeResponse(response){

    switch(response.rc) {
          case 200:

              alert(response.mensaje);
        
              break;

          case -200:

              alert(response.mensaje);
              break;
          default:
              alert("sin respuesta");
    }

}

