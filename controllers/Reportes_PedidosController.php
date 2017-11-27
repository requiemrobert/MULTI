<?php 
require 'model/ClientesModel.php';
require 'helpers/resolve_opcion.php';

class Reportes_PedidosController extends ClientesModel
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
						'data_table_style/datatables.min',
						'css/style',
						'css/Pedidos',
						'css/data-table-per'];

		$data_javascript = [
							'data_table_style/jquery-3.2.1.min',
							'bootstrap/js/popper.min', 
							'bootstrap/js/bootstrap.min',
							'data_table_style/datatables.min',
							'data_table_style/Buttons/js/buttons.flash.min',
							'data_table_style/pdfmake/pdfmake.min',	
							'data_table_style/pdfmake/vfs_fonts',	

							'js/header',
							'js/Reportes_Pedidos'];

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return new View('Reportes_Pedidos', [
									  'titulo' => 'Pedidos', 
									  'data_head' => $data_head
									]);
	}

	public static function consultar_pedidosAction(){

		$strJson = json_encode([ 'rc' => 'consultar_pedidos']);
		
		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

	public static function modificar_pedidosAction(){

		$data = json_decode(file_get_contents("php://input"));

		$strJson = json_encode([ 'rc' => 'modificar_pedidos', 'data' => (array)$data]);

		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

	public static function eliminar_pedidosAction(){

		$data = json_decode(file_get_contents("php://input"));

		$strJson = json_encode([ 'rc' => 'eliminar_pedidos', 'data' => (array)$data]);

		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON

	}

}