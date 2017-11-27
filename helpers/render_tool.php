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

	$render .= "<li class='nav-item'>";
	$render .= "<a class='nav-link' href='". BASE_URL ."Registrar_Pedidos'>";
	$render .= "<em class='fa ". menu_ico("registrar_pedidos") ." fa-me' aria-hidden='true'></em>Registrar Pedidos";
	$render .= "</a></li>";

	$render .= "<li class='nav-item'>";
	$render .= "<a class='nav-link' href='". BASE_URL ."Pedidos'>";
	$render .= "<em class='fa ". menu_ico("consultar_pedidos") ." fa-me' aria-hidden='true'></em>Consultar Pedidos";
	$render .= "</a></li>";

	$render .= "<li class='nav-item'>";
	$render .= "<a class='nav-link' href='". BASE_URL ."Registro_Piezas'>";
	$render .= "<em class='fa ". menu_ico("registro_piezas") ." fa-me' aria-hidden='true'></em>Registro Piezas";
	$render .= "</a></li>";

	$render .= "<li class='nav-item'>";
	$render .= "<a class='nav-link' href='". BASE_URL ."Piezas'>";
	$render .= "<em class='fa ". menu_ico("pedidos_atendidos") ." fa-me' aria-hidden='true'></em>Pedidos Atendidos";
	$render .= "</a></li>";

	$render .= "<li class='nav-item'>";
	$render .= "<a class='nav-link' href='". BASE_URL ."Indicadores_Estadisticos'>";
	$render .= "<em class='fa ". menu_ico("indicadores") ." fa-me' aria-hidden='true'></em>Indicadores";
	$render .= "</a></li>";

	$render .= '</ul>';

	return $render;

}

function menu_ico($menu=''){

	switch (strtolower($menu)) {
		case 'registrar_cliente':
			 return 'fa-address-book-o';
			break;
		case 'consultar_cliente':
			 return 'fa-search';
			break;	
		
		case 'registrar_pedidos':
			 return 'fa-pencil-square-o';
			break;	
		case 'registro_piezas':
			 return 'fa-cogs';
			break;	
		case 'consultar_pedidos':
			 return 'fa-book';
			break;

		case 'pedidos_atendidos':
			 return 'fa-check';
			break;	

		case 'indicadores':
			 return 'fa-line-chart';
			break;

		default:
			return 'fa-file-o';
			break;
	}

}




