var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3] + '/' + path[4] + '/';

$(function(){
	
	var table = $('#table-pedidos').DataTable({
	 	"scrollY":        "600px",
        "scrollCollapse": true,
        "ajax": "http://localhost/MULTI/Pedidos/consultar_pedidos",
        "columns": [
            { "data": "Numero_Orden" },
            { "data": "Nombre_Cliente" },
            { "data": "Codigo_Cliente" },
            { "data": "Tipo_Pieza" },
            { "data": "Codigo_Pieza" },
            { "data": "Marca_Fabricante" },
            { "data": "Descripcion" },
            { "data": "Fecha_Pedido" },
            { "data": "Estatus" },
            { "data": "Fecha_Estatus" },
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
    	var table = $('#table-pedidos').DataTable();
    	var field = table.row( row ).data();

	 	alert(field.Nombre);

	 });

});