var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3] + '/' + path[4] + '/';

$(function(){
	
	dataPiezasProducidas(baseURL + "consultar_piezas");

});

function getMes(fecha){
    var mes=["Enero","Febrero","Marzo","Abril","Mayo","Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var dt = new Date(fecha + ' 12:00:00');
    return mes[dt.getMonth()]; 
};

function renderGraficas(data){

	var EneroRetrovisor	  = 0;
	var FebreroRetrovisor = 0;
	var MarzoRetrovisor   = 0; 
	var AbrilRetrovisor   = 0;
	var MayoRetrovisor    = 0;
	var JunioRetrovisor   = 0;
	var JulioRetrovisor   = 0;
	var AgostoRetrovisor  = 0;
	var SeptiembreRetrovisor = 0;
	var OctubreRetrovisor    = 0; 
	var NoviembreRetrovisor  =0;
	var DiciembreRetrovisor  = 0;

	var EneroParachoque	  = 0;
	var FebreroParachoque = 0;
	var MarzoParachoque   = 0; 
	var AbrilParachoque   = 0;
	var MayoParachoque    = 0;
	var JunioParachoque   = 0;
	var JulioParachoque   = 0;
	var AgostoParachoque  = 0;
	var SeptiembreParachoque = 0;
	var OctubreParachoque    = 0; 
	var NoviembreParachoque  =0;
	var DiciembreParachoque  = 0;

	var EneroCapo	= 0;
	var FebreroCapo = 0;
	var MarzoCapo   = 0; 
	var AbrilCapo   = 0;
	var MayoCapo    = 0;
	var JunioCapo   = 0;
	var JulioCapo   = 0;
	var AgostoCapo  = 0;
	var SeptiembreCapo = 0;
	var OctubreCapo    = 0; 
	var NoviembreCapo  = 0;
	var DiciembreCapo  = 0;
	
	var EneroTecho	= 0;
	var FebreroTecho = 0;
	var MarzoTecho   = 0; 
	var AbrilTecho   = 0;
	var MayoTecho    = 0;
	var JunioTecho   = 0;
	var JulioTecho   = 0;
	var AgostoTecho  = 0;
	var SeptiembreTecho = 0;
	var OctubreTecho    = 0; 
	var NoviembreTecho  = 0;
	var DiciembreTecho  = 0;

	for (var i = 0; i < data.length; i++) {

		if (getMes(data[i].fec_produccion) == 'Septiembre' && data[i].tipo_pieza == "Retrovisor" ) {

			SeptiembreRetrovisor = data[i].cantidad;

		}
			
		if (getMes(data[i].fec_produccion) == 'Octubre' && data[i].tipo_pieza == "Retrovisor" ) {

			OctubreRetrovisor = data[i].cantidad;

		}
		if (getMes(data[i].fec_produccion) == 'Noviembre' && data[i].tipo_pieza == "Retrovisor" ) {

			NoviembreRetrovisor = data[i].cantidad;

		}
		if (getMes(data[i].fec_produccion) == 'Diciembre' && data[i].tipo_pieza == "Retrovisor" ) {

			DiciembreRetrovisor = data[i].cantidad;

		}
		if (getMes(data[i].fec_produccion) == 'Septiembre' && data[i].tipo_pieza == "Parachoques" ) {

			SeptiembreParachoque = data[i].cantidad;

		}
			
		if (getMes(data[i].fec_produccion) == 'Octubre' && data[i].tipo_pieza == "Parachoques" ) {

			OctubreParachoque = data[i].cantidad;

		}
		if (getMes(data[i].fec_produccion) == 'Noviembre' && data[i].tipo_pieza == "Parachoques" ) {

			NoviembreParachoque = data[i].cantidad;

		}
		if (getMes(data[i].fec_produccion) == 'Diciembre' && data[i].tipo_pieza == "Parachoques" ) {

			DiciembreParachoque = data[i].cantidad;

		}

		if (getMes(data[i].fec_produccion) == 'Septiembre' && data[i].tipo_pieza == "Capo" ) {

			SeptiembreCapo = data[i].cantidad;

		}
			
		if (getMes(data[i].fec_produccion) == 'Octubre' && data[i].tipo_pieza == "Capo" ) {

			OctubreCapo = data[i].cantidad;

		}
		if (getMes(data[i].fec_produccion) == 'Noviembre' && data[i].tipo_pieza == "Capo" ) {

			NoviembreCapo = data[i].cantidad;

		}
		if (getMes(data[i].fec_produccion) == 'Diciembre' && data[i].tipo_pieza == "Capo" ) {

			DiciembreCapo = data[i].cantidad;

		}

		if (getMes(data[i].fec_produccion) == 'Septiembre' && data[i].tipo_pieza == "Capo" ) {

			SeptiembreTecho = data[i].cantidad;

		}
			
		if (getMes(data[i].fec_produccion) == 'Octubre' && data[i].tipo_pieza == "Techo" ) {

			OctubreTecho = data[i].cantidad;

		}
		if (getMes(data[i].fec_produccion) == 'Noviembre' && data[i].tipo_pieza == "Techo" ) {

			NoviembreTecho = data[i].cantidad;

		}
		if (getMes(data[i].fec_produccion) == 'Diciembre' && data[i].tipo_pieza == "Techo" ) {

			DiciembreTecho = data[i].cantidad;

		}	

			
	}

	var DataPiezasSemanal = {

			labels : ["Enero","Febrero","Marzo","Abril","Mayo","Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
			datasets : [
				{
					label: "Retrovisor",
					backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
					data : [EneroRetrovisor, FebreroRetrovisor, MarzoRetrovisor, AbrilRetrovisor, MayoRetrovisor, JunioRetrovisor, JulioRetrovisor, AgostoRetrovisor, SeptiembreRetrovisor, OctubreRetrovisor, NoviembreRetrovisor, DiciembreRetrovisor]
				}
				,
				{
					label: "Parachoques",
					backgroundColor: window.chartColors.orange,
                    borderColor: window.chartColors.orange,
					data : [EneroParachoque, FebreroParachoque, MarzoParachoque, AbrilParachoque, MayoParachoque, JunioParachoque, JulioParachoque, AgostoParachoque, SeptiembreParachoque, OctubreParachoque, NoviembreParachoque, DiciembreParachoque]
				}
				,
				{
					label: "Capo",
					backgroundColor: window.chartColors.green,
                    borderColor: window.chartColors.green,
					data : [EneroCapo, FebreroCapo, MarzoCapo, AbrilCapo, MayoCapo, JunioCapo, JulioCapo, AgostoCapo, SeptiembreCapo, OctubreCapo, NoviembreCapo, DiciembreCapo]
				}
				,
				{
					label: "Techo",
					backgroundColor: window.chartColors.purple,
                    borderColor: window.chartColors.purple,
					data : [EneroTecho, FebreroTecho, MarzoTecho, AbrilTecho, MayoTecho, JunioTecho, JulioTecho, AgostoTecho, SeptiembreTecho, OctubreTecho, NoviembreTecho, DiciembreTecho]
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

				console.log(baseURL_Action);

					$login = $.ajax({
    				  type: "GET",
                      url: baseURL_Action,
                      contentType: "application/json; charset=utf-8",
                      dataType: "json"

				    }); 

				    $login.done(function(response) {

				    	renderGraficas(response.data);	
			

				    });

				    $login.fail(function(response) {
				        console.log(response);
				    });

}//END dataPiezasProducidas


window.chartColors = {
	red: 'rgb(255, 99, 132)',
	orange: 'rgb(255, 159, 64)',
	yellow: 'rgb(255, 205, 86)',
	green: 'rgb(75, 192, 192)',
	blue: 'rgb(54, 162, 235)',
	purple: 'rgb(153, 102, 255)',
	grey: 'rgb(201, 203, 207)'
};