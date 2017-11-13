<?php 

session_start();

function usuario(){
	
	//return ucfirst (substr($_SESSION['user_name'], 0 , 1));
	return ucfirst($_SESSION['usuario']);
}

function render_menu(){

	$render =  '<ul class="nav nav-pills flex-column sidebar-nav">';	
	$render .= '<li class="nav-item"><a class="nav-link" href='.BASE_URL.'>';
	$render .= '<em class="fa fa-home fa-me" aria-hidden="true"></em>Inicio';
	$render .= '</a></li>';

	if ( !empty($_SESSION['menu_opciones']) ) {
		
			foreach ($_SESSION['menu_opciones'] as $key => $value) {

				$render .= "<li class='nav-item'><a class='nav-link' href='". $value->descripcion ."'>";
				$render .= "<em class='fa ". menu_ico($value->descripcion) ." fa-me' aria-hidden='true'></em>";
				$render .=  $value->descripcion . "</a></li>";

			}	
	}

	$render .= '</ul>';

	return $render;

}

function menu_ico($menu=''){

	switch (strtolower($menu)) {
		case 'produccion':
			 return 'fa-wrench';
			break;
		case 'inventario':
			 return 'fa-pencil-square-o';
			break;	
		
		case 'ventas':
			 return 'fa-line-chart';
			break;	
		case 'estadisticas':
			 return 'fa-pie-chart';
			break;	
		case 'usuarios':
			 return 'fa-user-circle-o';
			break;

		case 'clientes':
			 return 'fa-address-book-o';
			break;

		default:
			return 'fa-file-o';
			break;
	}

}

function render_footer(){

	$footer  = '<footer>';
	$footer .= '<section class="social-media">';
	$footer .= '<ul>';
	$footer .= '	<li><a href="#" class=""><i class="fa fa-facebook fa-lg hi-icon" aria-hidden="true"></i></a></li>';
	$footer .= '	<li><a href="#" class=""><i class="fa fa-twitter fa-lg hi-icon" aria-hidden="true"></i></a></li>';
	$footer .= '	<li><a href="#" class=""><i class="fa fa-google-plus fa-lg hi-icon" aria-hidden="true"></i></a></li>';
	$footer .= '</ul>';
	$footer .= '</section>';
	$footer .= '<section class="policy">';
	$footer .= '<ul>';
	$footer .= '<li><a href="#">Política de Privacidad</a></li>';
	$footer .= '<li><a href="#">Información Legal</a></li>';
	$footer .= '<li><a href="#">Términos y Condiciones</a></li>';
	$footer .= '</ul>';
	$footer .= '</section>';
	$footer .= '<section class="Copyright">';
	$footer .= '<p>© Copyright, Ona</p>';
	$footer .= '</section>';
	$footer .= '</footer>';

	return $footer; 	

}



