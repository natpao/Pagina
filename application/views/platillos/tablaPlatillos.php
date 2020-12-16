<div class="table-responsive container-fluid"> 
            <?php if($this->session->flashdata('Correcto')):?>
              <div class="alert alert-success" style="margin: auto;">
                <p class="text-center form-control-danger"><?php echo $this->session->flashdata('correcto')?></p>
              </div>  
              <?php endif; ?>      
  			<table id="example1" class="table table-light table-hover"style="background:#F7BFBE; opacity: 0.9;">
    			<thead>
      				<tr>
        				<th class="text-secondary text-center">#</th>
        				<th class="text-secondary text-center">Nombre del producto</th>
        				<th class="text-secondary text-center">Descripción</th>
        				<th class="text-secondary text-center">Precio del producto</th>
                <th class="text-secondary text-center">Stock</th>
                <th class="text-secondary text-center" >Seleccione la opción</th>
      				</tr>
    			</thead>
    			<tbody>
              <?php if(!empty($platillosindex)): ?>
              <?php foreach($platillosindex as $atributos):?>
      				<tr>
        				<td class="text-dark text-center"><b><?php echo $atributos->idPlatillo?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->nombre?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->descripcion?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->precio?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->stock?></b></td>

                 <td>
                   <div class="btn-group">
                     <a href="<?php echo base_url();?>platillos/editarPlatillo/<?php echo $atributos->idPlatillo;?>" class="btn text-white bg-info" ><span class="icon-write"><b>Actualizar</b></span></a>
                     
                     <a href="<?php echo base_url()?>platillos/deletePlatillo/<?php echo $atributos->idPlatillo;?>" class="btn text-white bg-danger"><span class="icon-squared-cross"><b>Eliminar</b></span></a>
                   </div>
                 </td>
      				</tr>
            <?php endforeach ?>
          <?php endif; ?>
    			</tbody>
  			</table>
		</div>
  	</div>
