var path = window.location.href.split( '/' );
var baseURL = path[0]+ "//" +path[2]+'/'+path[3] + '/' + path[4] + '/';

$(function(){
	
	total_pedidos_piezas();

});

function getMes(fecha){
    var mes=["Enero","Febrero","Marzo","Abril","Mayo","Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var dt = new Date(fecha + ' 12:00:00');
    return mes[dt.getMonth()]; 
};

function total_pedidos_piezas(){

					$login = $.ajax({
    				  type: "GET",
                      url: "http://localhost/MULTI/Indicadores_Estadisticos/total_pedidos_piezas",
                      contentType: "application/json; charset=utf-8",
                      dataType: "json"

				    }); 

				    $login.done(function(response) {

				    	pieChart(response.data);	
			
				    });

				    $login.fail(function(response) {
				       
				    });

}//END dataPiezasProducidas

/****** PIE ******/

function pieChart(dataResponse){

var pieTotal = document.getElementById("chart-total-pedidos");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var pieData = {
    labels: dataLabelsChart(dataResponse),
    datasets: [
        {
            data: datasetsChart(dataResponse),
            backgroundColor: [
                window.chartColors.purple,
                window.chartColors.orange,
                window.chartColors.green,
                window.chartColors.red
            ]
        }]
};

var pieChart = new Chart(pieTotal, {
  type: 'pie',
  data: pieData
});

}

function dataLabelsChart(dataResponse){
   var arrayLabel = [];	

   for (var i in dataResponse) {
      arrayLabel.push(dataResponse[i].tipo_pieza);
   }
   return arrayLabel
}

function datasetsChart(dataResponse){

   var arrayDatasets = [];	

   for (var i in dataResponse) {
      arrayDatasets.push(dataResponse[i].cantidad);
   }
   return arrayDatasets

}

/******/


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

