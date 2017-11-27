<?php 
require 'model/ClientesModel.php';
require 'helpers/resolve_opcion.php';

class Registro_PiezasController extends ClientesModel
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
						'css/Pedidos',
						'css/data-table-per'];

		$data_javascript = [
							'data_table_style/jquery-3.2.1.min',
							'bootstrap/js/popper.min', 
							'bootstrap/js/bootstrap.min',
							'bootstrap-datepicker/js/bootstrap-datepicker',
							'data_table_style/datatables.min',
							'js/header',
							'js/Registro_Piezas'];


		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return new View('Registro_Piezas', [
									  'titulo' => 'Estatus Pedidos', 
									  'data_head' => $data_head
									]);
	}


	public static function actualizar_estatus_piezaAction(){

		$data = json_decode(file_get_contents("php://input"));

		$strJson = json_encode([ 'rc' => 'actualizar_estatus_pieza', 'data' => $data]);
	
		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

}