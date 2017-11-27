
	<div class="form-group row">
			<label for="precio_pieza" class="col-2 col-form-label">Documento Cliente</label>
			<div class="input-group col-sm-3">
		    	<input id="doc_cliente" class="form-control mr-sm-2" type="text" placeholder="Cedula o Rif" aria-label="Search" onkeypress="return number(event)" maxlength="9">
		    	<input type="button" class="btn btn-outline-success my-2 my-sm-0" id="buscar_cliente" value="Buscar">
			</div>
	</div>


<form id="form" method="POST" class="content-register">


		<div class="form-group row">
	   	 	<label for="precio_pieza" class="col-2 col-form-label">Nombre Cliente</label>
	    	<div class="input-group col-sm-3">
			  <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" readonly>
			</div>
			<label for="precio_pieza" class="col-2 col-form-label">Código de cliente</label>
	    	<div class="input-group col-sm-3">
			  <input type="text" class="form-control" id="cod_cliente_fk" name="cod_cliente_fk" readonly>
			</div>			
	  	</div>	

	  	<div class="form-group row">
		  <label for="tipo_pieza" class="col-2 col-form-label">Nombre Pieza</label>
		  <div class="input-group col-sm-3">
			  <select class="custom-select mb-6 mr-sm-2 mb-sm-0" id="tipo_pieza" name="tipo_pieza">
				    <option selected>Seleccione Tipo de Pieza...</option>
				    <option value="Retrovisor" >retrovisor</option>
				    <option value="Parachoques">parachoques</option>
				    <option value="Capo">Capó</option>
				    <option value="Techo">Techo</option>
			  </select>
		  </div>
		  <label for="tipo_pieza" class="col-2 col-form-label">Marca Fabricante</label>
		  <div class="input-group col-sm-3">
			  <select class="custom-select mb-6 mr-sm-2 mb-sm-0" id="marca_fabricante" name="marca_fabricante">
				    <option selected>Seleccione Fabricante...</option>
				    <option value="toyota">Toyota</option>
				    <option value="bmw" disabled>BMW</option>
				    <option value="audi" disabled>AUDI</option>
			  </select>
		  </div>
		</div>

	<!--<div class="form-group row">
	  		<label for="nombre_pieza" class="col-2 col-form-label">Código de Pieza</label>
		  	<div class="input-group col-sm-3">
		    	<input class="form-control" type="text" id="cod_pieza" name="cod_pieza">
		  	</div>
		</div>	 -->

		<div class="form-group row">
	  		<label for="nombre_pieza" class="col-2 col-form-label">Descripcion</label>
		  	<div class="input-group col-sm-8">
		    	<input class="form-control" type="text" id="descripcion" name="descripcion">
		  	</div>
		</div>	

	    <div class="form-group row">
	       <label for="descripcion_pieza" class="col-2 col-form-label">Fecha</label>
		   <div class="input-group col-sm-3">	
		   		<input class="form-control" id="fecha_pedido" name="fecha_pedido" placeholder="YYY/MM/DD" type="text"/>
		   		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
	       </div>
	    </div>

	 	<button type="submit" id="registo_pieza" class="btn btn-primary">Registrar</button>

</form>
		
