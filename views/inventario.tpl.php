
<form id="form_registrar_pieza">

	<h1>Registro de Pieza</h1>

	<div class="form-group row">
	  <label for="nombre_pieza" class="col-2 col-form-label">Nombre Pieza</label>
	  <div class="col-6">
	    <input class="form-control" type="text" id="nombre_pieza" name="nombre_pieza">
	  </div>

	  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="fabricante" name="fabricante">
		    <option selected>Seleccione Fabricante...</option>
		    <option value="toyota" selected>Toyota</option>
		    <option value="bmw">BMW</option>
		    <option value="audi">AUDI</option>
	  </select>

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
	  	<div class="input-group col-sm-2">
	    	<input class="form-control" type="text" id="numero_pieza" name="numero_pieza">
	  	</div>
	</div>	

  	<div class="form-group row">
    	<label for="descripcion_pieza" class="col-2 col-form-label">Descripcion</label>
    	<div class="input-group col-sm-6">
    		<input class="form-control" type="text" id="descripcion_pieza" name="descripcion_pieza">
    	</div>
    </div>

  <button type="submit" id="registo_pieza" class="btn btn-primary">Submit</button>
</form>
		
