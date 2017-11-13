
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
	  				
	  		<div class="center-logout">
	  			<a href="<?= BASE_URL ?>logout" class="logout-button"><em class="fa fa-power-off"></em> Salir </a>
	  		</div>
		</nav> 
		
		<main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2">
			<header class="page-header row justify-center">
					
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left"><?= $titulo ?></h1>
					</div>

					<div class="dropdown user-dropdown">
						<a class="btn-stripped dropdown-toggle image-profile" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

							<div class="ico-profile">
							 		<span><i class="fa fa-user-o fa-5" aria-hidden="true"></i></span>	
							</div>

							<div class="username">
								<h4 class="mb-1"><?= usuario() ?></h4>
								
								<h6 class="text-muted">Super Admin</h6>
							</div>
						</a>
						
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> Ver Perfil</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferencias</a>
						     <a class="dropdown-item" href="<?= BASE_URL ?>logout"><em class="fa fa-power-off mr-1"></em> Salir</a></div>
					</div>

					<div class="clear"></div>
						
			</header>

					<section class="container">
						
						<?= $tpl_content; ?>

					</section>
			
		</main>

	</div>
</div>

	<?= loadScript($data_head); ?>

</body>
</html>
