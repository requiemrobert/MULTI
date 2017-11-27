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
			
        ],
        /*** configure PDF ***/
        dom: 'Bfrtip',
        buttons: [
            'copy', 'pdf', 'excel', 'print'
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


});