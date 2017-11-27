<?php
require 'helpers/resolve_opcion.php';
	
class Indicadores_EstadisticosController
{
	public function indexAction()
	{	
		
		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = '';
	    } 

		$data_style = [	
						'css/normalize', 
						'css/font-awesome', 
						'bootstrap/css/bootstrap.min', 
						'css/style', 
						'css/consulta', 
						'data_table/css/jquery-ui', 
						'data_table/datatables.min'];

		$data_javascript = [
							'graficos/jquery-graficos', 
							'bootstrap/js/popper.min',
							'bootstrap/js/bootstrap.min',
							'graficos/chart.min', 
							'graficos/Chart.bundle.min',
							'js/estadisticas',
							'js/Indicadores_Estadisticos'];

		$data_head = array(

				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return new View('Indicadores_Estadisticos',[
										  'titulo' => 'Indicadores Estadísticos', 
										  'data_head' => $data_head
									  ]);
	}
	
	public function consultar_piezasAction()
	{	
		$strJson = json_encode([ 'rc' => 'consultar_piezas']);

		return getWS( $strJson , BASE_URL_WS );//Call WS return JSON
	}
}