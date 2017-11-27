var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3] + '/' + path[4] + '/';

$(function(){
	
	var table = $('#table-clientes').DataTable({
	 	"scrollY":        "600px",
        "scrollCollapse": true,
        "ajax": baseURL + "/listar_Clientes",
        "columns": [
            { "data": "Codigo_Cliente" },
            { "data": "Nombre" },
            { "data": "Apellido" },
            { "data": "Prefijo" },
            { "data": "Documento" },
            { "data": "Telefono" },
            { "data": "Correo" },
            { "data": "Direccion" },
			  { "render": function () {
						  var btn_edit = '<button type="button" class="update" data-toggle="modal" data-target="#modificar"><span class="fa fa-pencil"></span></button>';
    					  var btn_cancel = '<button type="button" class="delete" data-toggle="modal" data-target="#eliminar"><span class="fa fa-trash-o"></span></button>'; 
    					  return '<div class="cont-btn-table">'+btn_edit + btn_cancel+'</div>';
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

	 table.on( 'click', '.update', function () {

	 	var row = $(this).parent().parent().parent();
    	var table = $('#table-clientes').DataTable();
    	var field = table.row( row ).data();

	 	alert(field.Nombre);

	 });

});