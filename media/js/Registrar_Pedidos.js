var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3] + '/' + path[4] + '/';

"use strict";

$(function(){


	$("#buscar_cliente").on('click', function(event){

		event.preventDefault();

		var doc_cliente = $("#doc_cliente").val();

		if (doc_cliente == '' || doc_cliente.length == 0){

			alert("Debe ingresar número de cédula o de rif parala búsqueda");

		}else{
			buscarCliente(doc_cliente);
		}

	});


    $("#registo_pieza").on('click', function(event){

      event.preventDefault();

      var $form = $("form");
        
      var dataJson = getFormData($form);
      
      console.log(dataJson);

      registrarPedido(dataJson);

    }); 

    $('#fecha_pedido').datepicker({
                                     format: 'yyyy/mm/dd',
                                     todayHighlight: true,
                                     autoclose: true,
                                    });

    var fecha_orden = new Date();
	var day = fecha_orden.getDate();

});////END MAIM



function registrarPedido(dataJson){

    $login = $.ajax({
                      type: "POST",
                      url: "http://localhost/MULTI/Registrar_Pedidos/" + 'registrar_pedido',
                      data: dataJson,
                      contentType: "application/json; charset=utf-8",
                      dataType: "json"

    }); 

    $login.done(function(response) {

        mensajeResponse(response);
    });

    $login.fail(function(response) {
      console.error(response); 
    });

    $login.always(function(data) {
       
    });

}

function buscarCliente(doc_cliente){

	var dataJson = JSON.stringify({ci_rif : doc_cliente});

    $login = $.ajax({
                      type: "POST",
                      url: "http://localhost/MULTI/Registrar_Pedidos/" + 'buscar_Cliente',
                      data: dataJson,
                      contentType: "application/json; charset=utf-8",
                      dataType: "json"

    }); 

    $login.done(function(response) {

    	var nombre_cliente ='';
    	var	codigo_Cliente = '';

		if (response.rc == -200){
			
			alert("Cliente no registrado en el Sistema");

		}else{

			nombre_cliente = response.data[0].nombre_cliente;
			codigo_Cliente = response.data[0].Codigo_Cliente;
		}    
        
       $("#nombre_cliente").val(nombre_cliente);
       $("#cod_cliente_fk").val(codigo_Cliente);
        
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

