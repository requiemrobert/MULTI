var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3] + '/' + path[4] + '/';

$(function(){

    $("#registo_pieza").on('click', function(event){

      event.preventDefault();
      var $form = $("#form_registrar_pieza");
        
      var dataJson = getFormData($form);

      sendRequest("registro_pieza", dataJson);

    }); 


});//end main function

function sendRequest(action, dataJson){

    console.log(baseURL + action);
    $login = $.ajax({
                      type: "POST",
                      url: baseURL + action,
                      data: dataJson,
                      contentType: "application/json; charset=utf-8",
                      dataType: "json"

    }); $login.done(function(response) {

        mensajeResponse(response);

    });

    $login.fail(function(response) {
        mensajeResponse(response);
    });

    /*
    
    $login.always(function(data) {
       console.log(data);
    });

    */

}

function mensajeResponse(response){

    switch(response.rc) {
          case 200:

              alert(response.mensaje);
        
              break;
          case -200:
              
              alert(response.mensaje)
              break;
          default:
              alert("sin respuesta");
    }

}

function getFormData($form){
    var unindexed_array = $form.serializeArray();

    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return JSON.stringify(indexed_array);
}

function changeValueL(dropdown) {
        var option = dropdown.options[dropdown.selectedIndex].value,
            field = document.getElementById('txtLicense');

        if (option == 'J' || option == 'G' ) {
          field.maxLength = 9;
        } else if (option == 'V' || option == 'E') {
          field.value = field.value.substr(0, 8); // before reducing the maxlength, make sure it contains at most 8 characters; you could also reset the value altogether
          field.maxLength = 8;
        }
}

function alpha(e) {
    var k;
    document.all ? k = e.keyCode : k = e.which;
    return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k == 209 ) || (k == 241 ) || (k >= 48 && k <= 57));
}