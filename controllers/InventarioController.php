<?php 
require 'model/ClientesModel.php';
require 'helpers/resolve_opcion.php';

class InventarioController extends ClientesModel
{
	public function indexAction()
	{	

		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = [];
	       $data_javascript = [];
	    } 

		$data_style = ['css/normalize', 'css/font-awesome', 'bootstrap/css/bootstrap.min', 'css/style', 'css/registro'];

		$data_javascript = [
							'js/jquery-3.2.1.min','bootstrap/js/popper.min', 'bootstrap/js/bootstrap.min','bootstrap/js/bootstrap-datepicker',
							'js/custom', 'js/registro_pieza'];	

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);
		
		return new View('inventario', [
									  'titulo' => 'Inventario', 
									  'data_head' => $data_head
									]);
	}

	public static function registro_piezaAction(){

		$data = json_decode(file_get_contents("php://input"));

		$strJson = json_encode([ 'rc' => 'registro_pieza', 'data' => $data]);

		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

}