<?php 
require 'model/ClientesModel.php';
require 'helpers/resolve_opcion.php';


class Registrar_ClienteController extends ClientesModel
{
	public function indexAction()
	{	

		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = [];
	       $data_javascript = [];
	    } 

		$data_style = [ 'css/normalize', 
						'css/font-awesome', 
						'bootstrap/css/bootstrap.min', 
						'bootstrap-datepicker/css/datepicker', 
						'css/style'];

		$data_javascript = [
							'js/jquery-1.11.3.min',
							'bootstrap/js/popper.min', 
							'bootstrap/js/bootstrap.min',
							'bootstrap-datepicker/js/bootstrap-datepicker',
							'js/header',
							'js/Registrar_Cliente'];

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return new View('Registrar_Cliente', [
									  'titulo' => 'Registrar Cliente', 
									  'data_head' => $data_head
									]);
	}

	public static function registrar_ClienteAction(){

		$data = json_decode(file_get_contents("php://input"));

		$strJson = json_encode([ 'rc' => 'registrar_Cliente', 'data' => (array)$data]);

		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

}