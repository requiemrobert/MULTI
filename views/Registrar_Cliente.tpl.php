
<form id="form" class="content-register">

	<fieldset class="fields">
		<div class="form-group row">
		  <label for="nombre" class="col-2 col-form-label">Nombre</label>
		  <div class="input-group col-sm-3">
			  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="15" letter>
		  </div>

	      <div class="input-group col-sm-3">
			  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" letter>
		  </div>

		</div>

		<div class="form-group row"></div>	

	  	<div class="form-group row">

	  		<label for="telf" class="col-2 col-form-label">Cedula</label>

		  	<div class="input-group col-sm-3">
		  		<select class="form-control" id="pref_ci_rif" name="pref_ci_rif">
		  				<option selected="selected" value="V">V</option>
						<option value="E">E</option>   
						<option value="J">J</option> 
						<option value="G">G</option> 
				</select>			
		    	<input class="form-control" type="text" id="ci_rif" name="ci_rif" onpaste="return alpha(event)" onkeypress="return number(event)" maxlength="9">
		  	</div>

		  	<div class="input-group col-sm-3">
		    	<input class="form-control" type="text" id="telefono" name="telefono" placeholder="telefono" onpaste="return alpha(event)" onkeypress="return number(event)" maxlength="11">
		  	</div>

		</div>	

		<div class="form-group row">
			<label for="correo" class="col-2 col-form-label">Correo</label>
		  	<div class="input-group col-sm-6">
		    	<input class="form-control" type="email" id="correo" name="correo" email>
		  	</div>
		</div>	

	  	<div class="form-group row">
	    	<label for="descripcion_pieza" class="col-2 col-form-label">Direccion</label>
	    	<div class="input-group col-sm-6">
	    		<input class="form-control" type="text" id="direccion" name="direccion">
	    	</div>
	    </div>

	 	<button type="submit" id="registrar" class="btn btn-primary">Registrar</button>
  </fieldset>
</form>
		
