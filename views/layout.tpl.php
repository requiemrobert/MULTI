
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
						
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
						     <a class="dropdown-item" href="<?= BASE_URL ?>logout"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
					</div>

					<div class="clear"></div>
						
			</header>

						<section class="container">
						
							<?= $tpl_content; ?>

					    </section>
			
		
		</main>

		<?= render_footer() ?>

	</div>
</div>

<?=loadScript($data_head);?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->

</body>
</html>
