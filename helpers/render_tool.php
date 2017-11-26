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

	$render .= "<li class='nav-item'>";
	$render .= "<a class='nav-link' href='". BASE_URL ."Registrar_Cliente'>";
	$render .= "<em class='fa ". menu_ico("registrar_cliente") ." fa-me' aria-hidden='true'></em>Registrar Cliente";
	$render .= "</a></li>";

	$render .= "<li class='nav-item'>";
	$render .= "<a class='nav-link' href='". BASE_URL ."Consultar_Clientes'>";
	$render .= "<em class='fa ". menu_ico("consultar_cliente") ." fa-me' aria-hidden='true'></em>Consultar Clientes";
	$render .= "</a></li>";



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




