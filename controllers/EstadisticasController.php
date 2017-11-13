<?php
require 'helpers/resolve_opcion.php';
	
class EstadisticasController
{
	public function indexAction()
	{	
		
		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = '';
	    } 

		$data_style = ['css/normalize', 'css/font-awesome', 'bootstrap/css/bootstrap.min', 'css/style', 'css/consulta', 'data_table/css/jquery-ui', 'data_table/datatables.min'];

		$data_javascript = [
							'js/jquery-3.2.1.min', 
							'bootstrap/js/popper.min',
							'bootstrap/js/bootstrap.min',
							'graficos/chart.min', 
							'graficos/chart-data',
							'js/reportes_graficos'];

		$data_head = array(

				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return new View('estadisticas',[
										  'titulo' => 'Reportes', 
										  'data_head' => $data_head
									  ]);
	}
	
	public function ciudadAction($ciudad)
	{
		exit('contactos ' . $ciudad);
	}
}