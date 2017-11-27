<div class="content-table">

			<table id="table-pedidos" class="table table-striped table-bordered" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		            	<th>Numero_Pedido</th>
		                <th>Nombre_Cliente</th>
		                <th>Codigo_Cliente</th>
		                <th>Tipo_Pieza</th>
		                <th>Codigo_Pieza</th>
		                <th>Marca_Fabricante</th>
		                <th>Descripcion</th>
		                <th>Fecha_Pedido</th>
		                <th>Estatus</th>
		                <th></th>
		            </tr>
		        </thead>
		
		        <tbody>
		        </tbody>
		        <tfoot>
		        	<tr></tr>
		        </tfoot>
		    </table>   

<!-- Modal Modificar -->
<div class="modal fade bd-example-modal-lg" id="modificar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Estatus de Produccion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      	<div class="container-fluid">
      		<form method="POST" id="form-actualizar-pieza">
				<div class="row">

					<div class="form-group col-md-3">
				   	 	<label for="numero_pedido" class="">Número de Orden</label>
				    	<div class="input-group">
						  <input type="text" class="form-control" id="numero_orden" name="numero_orden" readonly>
						</div>		
				    </div>	

				    <div class="form-group col-md-3">
				   	 	<label for="nombre_cliente" class="">Nombre Cliente</label>
				    	<div class="input-group">
						  <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" readonly>
						</div>		
				    </div>		
					
				    <div class="form-group col-md-4">	
				 		<label for="cod_cliente_fk" class="">Código de cliente</label>
				    	<div class="input-group col-md-9">
						  <input type="text" class="form-control" id="cod_cliente_fk" name="cod_cliente_fk" readonly>
						</div>	
					</div>	

				</div> 

				<div class="row">

					<div class="form-group col-md-3">
				   	 	<label for="tipo_pieza" class="">Tipo de Pieza</label>
				    	<div class="input-group">
						  <input type="text" class="form-control" id="tipo_pieza" name="tipo_pieza" readonly>
						</div>		
				    </div>	

				    <div class="form-group col-md-3">
				   	 	<label for="marca_fabricante" class="">Marca Fabricante</label>
				    	<div class="input-group">
						  <input type="text" class="form-control" id="marca_fabricante" name="marca_fabricante" readonly>
						</div>		
				    </div>	

				    <div class="form-group col-md-3">
				   	 	<label for="codigo_pieza" class="">Código de pieza</label>
				    	<div class="input-group">
						  <input type="text" class="form-control" id="codigo_pieza" name="codigo_pieza" readonly>
						</div>		
				    </div>		

				</div>

				<div class="row">

					<div class="form-group col-md-3">
				   	 	<label for="estatus_pieza" class="">Estatus de Pieza</label>
				    	 <select class="form-control" id="estatus" name="estatus">
						    <option value="0" selected>Seleccione...</option>
						    <option value="en proceso">En proceso</option>
						    <option value="listo">Listo</option>
						    <option value="en espera de repuestos">En espera de Repuestos</option>
						    <option value="pausado">Pausado</option>
						 </select>	
				    </div>			

				    <div class="form-group col-md-6">
				   	 	<label for="descripcion" class="">Descripción</label>
				    	<div class="input-group">
						  <input type="text" class="form-control" id="descripcion" name="descripcion">
						</div>
				    </div>

				</div>

				<div class="row">
					<div class="form-group col-md-3">
				   	 	<label for="precio_pieza" class="">Precio</label>
				    	<div class="input-group">
				    	  <span class="input-group-addon">$</span>	
						  <input type="text" class="form-control" id="precio_pieza" name="precio_pieza">
						</div>		
				    </div>	
				</div>
			</form>	
	    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="actualizar_estatus">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Eliminar -->
<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>


</div>

