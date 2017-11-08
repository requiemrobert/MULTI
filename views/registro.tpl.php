
<section class="main">
		
<h1><?= $titulo ?></h1>	

<form>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="email" class="form-control" id="nombre_cliente" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="exampleSelect1">Example select</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Example textarea</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
  </div>
  <fieldset class="form-group">
    <legend>Radio buttons</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Option one is this and that&mdash;be sure to include why it's great
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
        Option three is disabled
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
		
		<form id="registrar-cliente">
			
			<fieldset>
			<legend>Datos</legend>
				
				<div class="row">
					
					<!-- <div class="col col-quarter">
						<div class="content">
							<label for="nombre_cliente">*Nombre</label>
						 	<input type="text" name="nombre_cliente" id="nombre_cliente" required>
						</div>
					</div> -->

					<div class="col col-quarter">
						<div class="content">
							<label for="apellido_cliente">Apellido</label>
						 	<input type="text" name="apellido_cliente" id="apellido_cliente">
						</div>
					</div>

					<div class="col col-quarter">
						<div class="content">
							<label for="ci_cliente">*Documento de Identidad</label>
							<select name="pre_doc_cliente" id="pre_doc_cliente" onchange="changeValueL(this);" class="valid">
			                        <option selected="selected" value="V">V</option>
									<option value="E">E</option>   
									<option value="J">J</option> 
									<option value="G">G</option> 
											                           
			                </select>
			                <input name="doc_cliente" id="doc_cliente" type="text" maxlength="8" value="" onpaste="return alpha(event)" onkeypress="return alpha(event)" required>
						</div>
					</div>

				</div>

				<div class="row">
					
					<div class="col col-quarter">
						<div class="content">
							<label for="rason_social_cliente">Nombre Razon Social</label>
						 	<input type="text" name="rason_social_cliente" id="rason_social_cliente">
						</div>
					</div>

					<div class="col col-half">
                       <div class="content">
                       		<label for="direccion_cliente">Direccion</label>
						 	<textarea rows="4" cols="50" id="direccion_cliente" name="direccion_cliente" class="text-area-direccion"></textarea>
                       </div>
                	</div>
					
				</div>

				<div class="row">
					
					<div class="col col-half">
                       <div class="content">
                       		<label for="telf_cliente">*Telefonos</label>
						 	<input type="tel" name="telf_cliente" id="telf_cliente" required>
						 	<label for="otro_telf_cliente">+Telefonos</label>
						 	<input type="tel" name="otro_telf_cliente" id="otro_telf_cliente">
                       </div>
                	</div>

                	<div class="col col-quarter">
						<div class="content">
							<label for="email_cliente">*Email</label>
						 	<input type="email" name="email_cliente" id="email_cliente" required>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col col-quarter">
						<div class="content">
							<label for="tipo_cliente">Tipo Cliente</label>
						 	<input type="text" name="tipo_cliente" id="tipo_cliente">
						</div>
					</div>
				</div>

			</fieldset>

			<input type="submit" id="sub_registrar_cliente" value="Registrar">
		</form>

	
</section>