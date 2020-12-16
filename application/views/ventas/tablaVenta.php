<div class="table-responsive container container-fluid"> 
            <?php if($this->session->flashdata('Correcto')):?>
              <div class="alert alert-success" style="margin: auto;">
                <p class="text-center form-control-danger"><?php echo $this->session->flashdata('correcto')?></p>
              </div>  
              <?php endif; ?>      
  			<table id="example1" class="table table-light table-hover">
    			<thead>
      				<tr>
        				<th class="text-secondary text-center">#</th>
        				<th class="text-secondary text-center">Nombre del cliente</th>
                <th class="text-secondary text-center">Apellido Paterno</th>
                <th class="text-secondary text-center">Apellido Materno</th>
                <th class="text-secondary text-center">Direccion</th>
        				<th class="text-secondary text-center">Nombre del platillo</th>
        				<th class="text-secondary text-center">Fecha del pedido</th>
        				<th class="text-secondary text-center">Cantidad</th>
        				<th class="text-secondary text-center">Total a pagar</th>
                <th class="text-secondary text-center" >Seleccione la opción</th>
      				</tr>
    			</thead>
    			<tbody>
              <?php if(!empty($ventasindex)): ?>
              <?php foreach($ventasindex as $atributos):?>
      				<tr>
        				<td class="text-dark text-center"><b><?php echo $atributos->idVenta?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->nombreCliente?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->apellidoPaterno?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->apellidoMaterno?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->direccion?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->nombrePlatillo?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->fecha?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->cantidad?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->total?></b></td>

                 <td>
                   <div class="btn-group">
                     <a href="<?php echo base_url();?>ventas/editarVenta/<?php echo $atributos->idVenta;?>" class="btn text-white bg-info" ><span class="icon-write"><b>Actualizar</b></span></a>
                     
                     <a href="<?php echo base_url()?>ventas/deleteVenta/<?php echo $atributos->idVenta;?>" class="btn text-white bg-danger"><span class="icon-squared-cross"><b>Eliminar</b></span></a>
                   </div>
                 </td>
      				</tr>
            <?php endforeach ?>
          <?php endif; ?>
    			</tbody>
  			</table>
		</div>
  	</div>
