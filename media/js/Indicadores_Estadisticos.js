var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3] + '/' + path[4] + '/';

$(function(){
	
	dataPiezasProducidas();

});

function getMes(fecha){
    var mes=["Enero","Febrero","Marzo","Abril","Mayo","Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var dt = new Date(fecha + ' 12:00:00');
    return mes[dt.getMonth()]; 
};

function renderGraficas(dataResponse){

	var AgostoRetrovisor     = 0;
	var SeptiembreRetrovisor = 0;
	var OctubreRetrovisor    = 0; 
	var NoviembreRetrovisor  =0;
	var DiciembreRetrovisor  = 0;

	var AgostoParachoque     = 0;
	var SeptiembreParachoque = 0;
	var OctubreParachoque    = 0; 
	var NoviembreParachoque  = 0;
	var DiciembreParachoque  = 0;

	var AgostoCapo  = 0;
	var SeptiembreCapo = 0;
	var OctubreCapo    = 0; 
	var NoviembreCapo  = 0;
	var DiciembreCapo  = 0;
	
	var AgostoTecho  = 0;
	var SeptiembreTecho = 0;
	var OctubreTecho    = 0; 
	var NoviembreTecho  = 0;
	var DiciembreTecho  = 0;

	for (var i = 0; i < dataResponse.length; i++) {

		if (getMes(dataResponse[i].mes_pedido) == 'Agosto' && dataResponse[i].tipo_pieza == "Retrovisor" ) {

			SeptiembreRetrovisor = dataResponse[i].cantidad;

		}

		if (getMes(dataResponse[i].mes_pedido) == 'Septiembre' && dataResponse[i].tipo_pieza == "Retrovisor" ) {

			SeptiembreRetrovisor = dataResponse[i].cantidad;

		}
			
		if (getMes(dataResponse[i].mes_pedido) == 'Octubre' && dataResponse[i].tipo_pieza == "Retrovisor" ) {

			OctubreRetrovisor = dataResponse[i].cantidad;

		}

		if (getMes(dataResponse[i].mes_pedido) == 'Noviembre' && dataResponse[i].tipo_pieza == "Retrovisor" ) {

			NoviembreRetrovisor = dataResponse[i].cantidad;
		}

		if (getMes(dataResponse[i].mes_pedido) == 'Diciembre' && dataResponse[i].tipo_pieza == "Retrovisor" ) {

			DiciembreRetrovisor = dataResponse[i].cantidad;

		}

		//FIN RETROVISOR

		if (getMes(dataResponse[i].mes_pedido) == 'Agosto' && dataResponse[i].tipo_pieza == "Parachoques" ) {

			SeptiembreParachoque = dataResponse[i].cantidad;

		}

		if (getMes(dataResponse[i].mes_pedido) == 'Septiembre' && dataResponse[i].tipo_pieza == "Parachoques" ) {

			SeptiembreParachoque = dataResponse[i].cantidad;

		}
			
		if (getMes(dataResponse[i].mes_pedido) == 'Octubre' && dataResponse[i].tipo_pieza == "Parachoques" ) {

			OctubreParachoque = dataResponse[i].cantidad;

		}
		if (getMes(dataResponse[i].mes_pedido) == 'Noviembre' && dataResponse[i].tipo_pieza == "Parachoques" ) {

			NoviembreParachoque = dataResponse[i].cantidad;

		}
		if (getMes(dataResponse[i].mes_pedido) == 'Diciembre' && dataResponse[i].tipo_pieza == "Parachoques" ) {

			DiciembreParachoque = dataResponse[i].cantidad;

		}

		// FIN PARA CHOQUES

		if (getMes(dataResponse[i].mes_pedido) == 'Agosto' && dataResponse[i].tipo_pieza == "Capo" ) {

			SeptiembreCapo = dataResponse[i].cantidad;

		}

		if (getMes(dataResponse[i].mes_pedido) == 'Septiembre' && dataResponse[i].tipo_pieza == "Capo" ) {

			SeptiembreCapo = dataResponse[i].cantidad;

		}
			
		if (getMes(dataResponse[i].mes_pedido) == 'Octubre' && dataResponse[i].tipo_pieza == "Capo" ) {

			OctubreCapo = dataResponse[i].cantidad;

		}
		if (getMes(dataResponse[i].mes_pedido) == 'Noviembre' && dataResponse[i].tipo_pieza == "Capo" ) {

			NoviembreCapo = dataResponse[i].cantidad;

		}
		if (getMes(dataResponse[i].mes_pedido) == 'Diciembre' && dataResponse[i].tipo_pieza == "Capo" ) {

			DiciembreCapo = dataResponse[i].cantidad;

		}
		// FIN CAPO

		if (getMes(dataResponse[i].mes_pedido) == 'Agosto' && dataResponse[i].tipo_pieza == "Techo" ) {

			SeptiembreTecho = dataResponse[i].cantidad;

		}

		if (getMes(dataResponse[i].mes_pedido) == 'Septiembre' && dataResponse[i].tipo_pieza == "Techo" ) {

			SeptiembreTecho = dataResponse[i].cantidad;

		}
			
		if (getMes(dataResponse[i].mes_pedido) == 'Octubre' && dataResponse[i].tipo_pieza == "Techo" ) {

			OctubreTecho = dataResponse[i].cantidad;

		}
		if (getMes(dataResponse[i].mes_pedido) == 'Noviembre' && dataResponse[i].tipo_pieza == "Techo" ) {

			NoviembreTecho = dataResponse[i].cantidad;

		}
		if (getMes(dataResponse[i].mes_pedido) == 'Diciembre' && dataResponse[i].tipo_pieza == "Techo" ) {

			DiciembreTecho = dataResponse[i].cantidad;

		}	

			
	}

	var DataPiezasSemanal = {

			labels : ["Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
			datasets : [
				{
					label: "Retrovisor",
					backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
					data : [ AgostoRetrovisor, SeptiembreRetrovisor, OctubreRetrovisor, NoviembreRetrovisor, DiciembreRetrovisor]
				}
				,
				{
					label: "Parachoques",
					backgroundColor: window.chartColors.orange,
                    borderColor: window.chartColors.orange,
					data : [ AgostoParachoque, SeptiembreParachoque, OctubreParachoque, NoviembreParachoque, DiciembreParachoque]
				}
				,
				{
					label: "Capo",
					backgroundColor: window.chartColors.green,
                    borderColor: window.chartColors.green,
					data : [ AgostoCapo, SeptiembreCapo, OctubreCapo, NoviembreCapo, DiciembreCapo]
				}
				,
				{
					label: "Techo",
					backgroundColor: window.chartColors.purple,
                    borderColor: window.chartColors.purple,
					data : [ AgostoTecho, SeptiembreTecho, OctubreTecho, NoviembreTecho, DiciembreTecho]
				}
			]

		}

	var piezas = $("#piezas-line-chart");		

	var barGraph = new Chart(piezas, {
		type: 'bar',
		data: DataPiezasSemanal
	});

}

function dataPiezasProducidas(baseURL_Action){

					$login = $.ajax({
    				  type: "GET",
                      url: "http://localhost/MULTI/Indicadores_Estadisticos/indicadores_piezas_mes",
                      contentType: "application/json; charset=utf-8",
                      dataType: "json"

				    }); 

				    $login.done(function(response) {

				    	renderGraficas(response.data);	
			
				    });

				    $login.fail(function(response) {
				       
				    });

}//END dataPiezasProducidas


/************** COLORES ****************/
window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(201, 203, 207)'
};

