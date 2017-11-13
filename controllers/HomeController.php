<?php 
require 'helpers/resolve_opcion.php';

class HomeController
{
	public function indexAction()
	{	

		if(isset($data_style))
		{
	       unset($data_style);
	       $data_style = '';
	    } 

		$data_style = ['css/normalize', 'css/font-awesome', 'bootstrap/css/bootstrap.min', 'css/style'];

		$data_javascript = ['js/jquery-3.2.1.min','bootstrap/js/popper.min', 'bootstrap/js/bootstrap.min','bootstrap/js/bootstrap-datepicker','bootstrap/js/chart.min','bootstrap/js/chart-data', 'js/custom'];

		$data_head = array(
				'data_style' => $data_style,
				'data_javascript' => $data_javascript
		);

		return new View('home', [
								  'titulo' => 'Home', 
								  'data_head' => $data_head
							    ]);
	}
}