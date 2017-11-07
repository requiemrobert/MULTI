var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3];

$(function(){

  	$('#ingresar').on('click',function(event){

   		event.preventDefault();

   		login($('#login-form'));

  	});

});

function login(form){

  var dataJson = getFormData(form);

  $login = $.ajax({
                      type: "POST",
                      url: baseURL + '/controllers/login.php',
                      data: dataJson,
                      contentType: "application/json; charset=utf-8",
                      dataType: "json"

   }); $login.done(function(response) {

        console.log(response);

        switch(response.rc) {
          case 200:

              window.location.href = baseURL;
        
              break;
          case -200:
              mensajeResponse();
              title_alerts = "Notificación";
              alertaResponse(title_alerts, icon_danger, alerClassDanger, response.mensaje, directionShowCenter,3000);
              break;
          default:
              alert("sin respuesta");
        }

    });

    $login.fail(function(response) {
      console.log(response); 
      mensajeResponse();
      var title_alerts = "Notificación";
      var mensaje = "No se puede atender su solicitud momento, Consulte con el Departamento de Sistema";
      alertaResponse( title_alerts, icon_danger, alerClassDanger, mensaje, directionShowCenter,3000 );
    });
    
    //$login.always(function(data) {
    //   console.log(data);
    //});

}//Fin function login

function callWebService(){

   var $form = $('form');
   var dataJson = getFormData($form);
   var $login;
   $.wait( function(){  timeAjax(dataJson)  }, 3);

}

function mensajeResponse(){

 
}

function getFormData($form){

    var unindexed_array = $form.serializeArray();

    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return JSON.stringify(indexed_array);
}

function blokSpace(e, campo)
{
    ///key es una variable que recoge el valor ASCII de la tecla pulsada.
    key = e.keyCode ? e.keyCode : e.which
    /// Validamos la tecla backspace
    if (key == 32) return false

}
