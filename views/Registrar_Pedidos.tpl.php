
<form id="form" class="content-register">

	<fieldset class="fields">
		<div class="form-group row">
		  <label for="tipo_pieza" class="col-2 col-form-label">Numero de Orden</label>
		  <div class="input-group col-sm-3">
			  <input type="text" class="form-control" id="precio_pieza" name="precio_pieza" aria-label="Amount (to the nearest dollar)" onpaste="return alpha(event)" onkeypress="return number(event)" maxlength="10" required>
		  </div>

		</div>

		<div class="form-group row">
	   	 	<label for="precio_pieza" class="col-2 col-form-label">Nombre Cliente</label>
	    	<div class="input-group col-sm-3">
			  <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" aria-label="Amount (to the nearest dollar)">
			</div>
			
	  	</div>	

	  	<div class="form-group row">
	  		<label for="nombre_pieza" class="col-2 col-form-label">Teléfono Contacto</label>
		  	<div class="input-group col-sm-3">
		    	<input class="form-control" type="text" id="telf" name="telf" onpaste="return alpha(event)" onkeypress="return number(event)" maxlength="10">
		  	</div>

		  	<div class="input-group col-sm-3">
		    	<input class="form-control" type="text" id="otro_telf" name="otro_telf" placeholder="Otro Teléfono" onpaste="return alpha(event)" onkeypress="return number(event)" maxlength="10">
		  	</div>
		</div>	

	  	<div class="form-group row">
	    	<label for="descripcion_pieza" class="col-2 col-form-label">Direccion</label>
	    	<div class="input-group col-sm-6">
	    		<input class="form-control" type="text" id="direccion_cliente" name="direccion_cliente">
	    	</div>
	    </div>

	    <div class="form-group row">
	       <label for="descripcion_pieza" class="col-2 col-form-label">Fecha</label>
		   <div class="input-group col-sm-3">	
		   		<input class="form-control" id="fec_registro_pedido" name="fec_registro_pedido" placeholder="YYY/MM/DD" type="text"/>
		   		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	       </div>
	    </div>

	 	<button type="submit" id="registo_pieza" class="btn btn-primary">Registrar</button>
  </fieldset>
</form>
		
