var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3] + '/' + path[4] + '/';

$(function(){
	
	var table = $('#table-pedidos').DataTable({
	 	"scrollY":        "600px",
        "scrollCollapse": true,
        "ajax": "http://localhost/MULTI/Pedidos/consultar_pedidos",
        "columns": [
            { "data": "Numero_Pedido" },
            { "data": "Nombre_Cliente" },
            { "data": "Codigo_Cliente" },
            { "data": "Tipo_Pieza" },
            { "data": "Codigo_Pieza" },
            { "data": "Marca_Fabricante" },
            { "data": "Descripcion" },
            { "data": "Fecha_Pedido" },
            { "data": "Estatus" },
			  { "render": function () {
						  var btn_edit = '<button type="button" class="registrar" data-toggle="modal" data-target="#modificar"><span class="fa fa-wrench"></span></button>';
    					  return '<div class="cont-btn-table">'+btn_edit+'</div>';
						   }
				},
        ],
		        "language": {
	            "lengthMenu": "Mostrar _MENU_ registro por página",
	            "zeroRecords": "No se encontraron resultados",
	            "info": "Mostrando del _PAGE_ de _PAGES_",
	            "infoEmpty": "Ningún dato disponible en esta tabla",
	            "infoFiltered": "(filtrado desde _MAX_ total records)",
	           	"sSearch": "Buscar:",
			    	"sUrl": "",
			    	"sInfoThousands": ",",
			    	"sLoadingRecords": "Por favor espere - cargando...",
			   		"oPaginate": {
			        			   "sFirst":    "Primero",
			        			   "sLast":     "Último",
			        			   "sNext":     "Siguiente",
			        			   "sPrevious": "Anterior"
			   		  }
	          }

	 });//END DATA TABLE

	 table.on( 'click', '.registrar', function () {

	 	  var row = $(this).parent().parent().parent();
    	var table = $('#table-pedidos').DataTable();
    	var field = table.row( row ).data();

      $("#numero_pedido").val(field.Numero_Pedido);
  	 	$("#nombre_cliente").val(field.Nombre_Cliente);
  	 	$("#cod_cliente_fk").val(field.Codigo_Cliente);
  	 	$("#tipo_pieza").val(field.Tipo_Pieza);
  	 	$("#marca_fabricante").val(field.Marca_Fabricante);
      $("#codigo_pieza").val(field.Codigo_Pieza);

	 });

	 $("#actualizar_estatus").on('click', function(){

	 	    event.preventDefault();
        
      	var $form = $("#form-actualizar-pieza");
        
      	var dataJson = getFormData($form);

      	var estatus = $("#estatus").val();

      	if(estatus == 0 || estatus.lengt == 0 ){

      		alert("debe seleccionar un estatus");

      	}else{

      		actualizarEstatus(dataJson);	

      	}

	 });

});///END MAIN


function actualizarEstatus(dataJson){

    $login = $.ajax({
                      type: "POST",
                      url: 'http://localhost/MULTI/Registro_Piezas/actualizar_estatus_pieza',
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
