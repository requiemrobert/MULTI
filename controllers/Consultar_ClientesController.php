<?php 
require 'model/ClientesModel.php';
require 'helpers/resolve_opcion.php';

class Consultar_ClientesController extends ClientesModel
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
						'data_table_style/datatables.min',
						'css/style',
						'css/data-table-per'];

		$data_javascript = [
							'data_table_style/jquery-3.2.1.min',
							'bootstrap/js/popper.min', 
							'bootstrap/js/bootstrap.min',
							'bootstrap-datepicker/js/bootstrap-datepicker',
							'data_table_style/datatables.min',
							'js/header',
							'js/Consultar_Clientes'];

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return new View('Consultar_Clientes', [
									  'titulo' => 'Consultar Clientes', 
									  'data_head' => $data_head
									]);
	}

	public static function listar_ClientesAction(){

		$strJson = json_encode([ 'rc' => 'listar_Clientes']);
		
		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

	public static function modificar_ClienteAction(){

		$data = json_decode(file_get_contents("php://input"));

		$strJson = json_encode([ 'rc' => 'modificar_Cliente', 'data' => (array)$data]);

		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

}