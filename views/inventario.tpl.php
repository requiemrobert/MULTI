<h3>Registro de Pieza</h3>

<form id="form_registrar_pieza" class="content-register">

	<fieldset class="fields">
		<div class="form-group row">
		  <label for="tipo_pieza" class="col-2 col-form-label">Nombre Pieza</label>
		  <div class="input-group col-sm-3">
			  <select class="custom-select mb-6 mr-sm-2 mb-sm-0" id="tipo_pieza" name="tipo_pieza">
				    <option selected>Seleccione Tipo...</option>
				    <option value="Retrovisor" >retrovisor</option>
				    <option value="Parachoques">parachoques</option>
				    <option value="Capo">Capó</option>
				    <option value="Techo">Techo</option>
			  </select>
		  </div>
		  <div class="input-group col-sm-3">
			  <select class="custom-select mb-6 mr-sm-2 mb-sm-0" id="fabricante" name="fabricante">
				    <option selected>Seleccione Fabricante...</option>
				    <option value="toyota" selected>Toyota</option>
				    <option value="bmw">BMW</option>
				    <option value="audi">AUDI</option>
			  </select>
		  </div>
		</div>

		<div class="form-group row">
	   	 	<label for="precio_pieza" class="col-2 col-form-label">Precio</label>
	    	<div class="input-group col-sm-3">
			  <span class="input-group-addon">$</span>
			  <input type="text" class="form-control" id="precio_pieza" name="precio_pieza" aria-label="Amount (to the nearest dollar)">
			  <span class="input-group-addon">.00</span>
			</div>
			
	  	</div>	

	  	<div class="form-group row">
	  		<label for="nombre_pieza" class="col-2 col-form-label">Numero de Pieza</label>
		  	<div class="input-group col-sm-3">
		    	<input class="form-control" type="text" id="numero_pieza" name="numero_pieza">
		  	</div>
		</div>	

	  	<div class="form-group row">
	    	<label for="descripcion_pieza" class="col-2 col-form-label">Descripcion</label>
	    	<div class="input-group col-sm-6">
	    		<input class="form-control" type="text" id="descripcion_pieza" name="descripcion_pieza">
	    	</div>
	    </div>

	    <div class="form-group row">
	       <label for="descripcion_pieza" class="col-2 col-form-label">Fecha</label>
		   <div class="input-group col-sm-3">	
		   		<input class="form-control" id="fec_produccion" name="fec_produccion" placeholder="YYY/MM/DD" type="text"/>
		   		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	       </div>
	    </div>

	 	<button type="submit" id="registo_pieza" class="btn btn-primary">Registrar</button>
  </fieldset>
</form>
		
