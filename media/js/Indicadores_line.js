        var config = {
            type: 'line',
            data: {
                labels: ["Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                datasets: [{
		                    label: "Pendientes",
		                    fill: false,
		                    backgroundColor: window.chartColors.blue,
		                    borderColor: window.chartColors.blue,
		                    data: [1,3,0,7,5]
		               	   }, 
		               	   {
		                    label: "Listos",
		                    fill: false,
		                    backgroundColor: window.chartColors.green,
		                    borderColor: window.chartColors.green,
		                    borderDash: [5, 5],
		                    data: [1,2,3,4,5],
               			   }]
            },
            options: {
                responsive: true,
                title:{
                    display:true,
                    /*text:'Chart.js Line Chart'*/
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById("chart-estatus-pedidos").getContext("2d");
            window.myLine = new Chart(ctx, config);
        };