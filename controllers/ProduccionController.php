<?php 
require 'model/ClientesModel.php';
require 'helpers/resolve_opcion.php';


class ProduccionController extends ClientesModel
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

		$data_javascript = ['js/jquery-3.2.1.min','js/clientes'];

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return new View('produccion', [
									  'titulo' => 'Produccion', 
									  'data_head' => $data_head
									]);
	}

	public static function registrarAction(){

		$data = json_decode(file_get_contents("php://input"));
		$strJson = json_encode([ 'rc' => 'registrar_cliente', 'data' => $data]);
		
		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

}