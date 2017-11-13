<?php 
require 'model/ClientesModel.php';
require 'helpers/resolve_opcion.php';

class RegistroController extends ClientesModel
{
	public function indexAction()
	{	

		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = [];
	       $data_javascript = [];
	    } 

		$data_style = ['css/normalize', 'css/font-awesome', 'bootstrap/css/bootstrap.min', 'css/style'];

		$data_javascript = ['js/jquery-3.2.1.min', 'bootstrap/js/bootstrap.min','js/bootstrap-datepicker','js/chart.min','js/chart-data', 'js/custom', 'js/registro'];
		//'js/registro'
		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		$sub_menu = resolve_sub_opcion(get_class($this),$_SESSION['menu_opciones']);
	
		return new View('registro', [
									  'titulo' => 'Registro Cliente', 
									  'data_head' => $data_head, 
									  'opciones_sub_menu' => $sub_menu
									]);
	}

	public static function registrarAction(){

		$data = json_decode(file_get_contents("php://input"));
		$strJson = json_encode([ 'rc' => 'registrar_cliente', 'data' => $data]);
		
		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

}