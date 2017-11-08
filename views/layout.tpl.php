
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="UTF-8">
	<meta name="description" content="Service" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta HTTP-EQUIV="Pragma" CONTENT="no-cache">

	<?php
		  loadCss($data_head);
		  loadScript($data_head);
	?>

	<title><?= $titulo ?></title>
</head>

<body>

<div class="container-fluid" id="wrapper">
	<div class="row">

		<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
		    <h1 class="site-title"><a href="index.html"><em class="fa fa-cogs"></em> Multi911.</a></h1>

		    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>

	  		<?= render_menu();?>
	  		<a href="<?= BASE_URL ?>logout" class="logout-button"><em class="fa fa-power-off"></em> Salir </a>
		</nav> 
		
		<main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
			<header class="page-header row justify-center">
					
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left"><?= $titulo ?></h1>
					</div>

					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right">
						<a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<!-- <img src="media/images/profile_photo/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto"> -->
							<div class="circle float-left profile-photo"><i class="fa fa-user-o" aria-hidden="true"></i></div>
							
							
							<div class="username mt-1">
								<h4 class="mb-1"><?= user_name() ?></h4>
								
								<h6 class="text-muted">Super Admin</h6>
							</div>
						</a>
						
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						    <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
						    <a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Logout</a>
						</div>
					</div>

					<div class="clear"></div>
						
				</header>

						<section class="row">
							<div class="container">

								<?= $tpl_content; ?>

							</div>
					    </section>
			
			</div>
		</main>
	<?= render_footer() ?>

</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script type="text/javascript">

    window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart2 = document.getElementById("bar-chart").getContext("2d");
	window.myBar = new Chart(chart2).Bar(barChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	var chart3 = document.getElementById("doughnut-chart").getContext("2d");
	window.myDoughnut = new Chart(chart3).Doughnut(doughnutData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	var chart5 = document.getElementById("radar-chart").getContext("2d");
	window.myRadarChart = new Chart(chart5).Radar(radarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.05)",
	angleLineColor: "rgba(0,0,0,.2)"
	});
	var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
};

</script>


</body>
</html>
