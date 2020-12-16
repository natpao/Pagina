<div class="table-responsive container-fluid"> 
            <?php if($this->session->flashdata('Correcto')):?>
              <div class="alert alert-success" style="margin: auto;">
                <p class="text-center form-control-danger"><?php echo $this->session->flashdata('correcto')?></p>
              </div>  
              <?php endif; ?>      
  			<table id="example1" class="table table-light table-hover" style="background:#F7BFBE; opacity: 0.9;">
    			<thead>
      				<tr>
        				<th class="text-secondary text-center">#</th>
        				<th class="text-secondary text-center">Nombre completo</th>
        				<th class="text-secondary text-center">ApellidoPaterno</th>
        				<th class="text-secondary text-center">ApellidoMaterno</th>
        				<th class="text-secondary text-center">Telefono</th>
        				<th class="text-secondary text-center">Direccion donde radica</th>
                <th class="text-secondary text-center" >horaEntrada</th>
                <th class="text-secondary text-center">horaSalida</th>
                <th class="text-secondary text-center">usuario</th>
                <th class="text-secondary text-center" >Seleccione la opción</th>
      				</tr>
    			</thead>
    			<tbody>
              <?php if(!empty($empleadosindex)): ?>
              <?php foreach($empleadosindex as $atributos):?>
      				<tr>
        				<td class="text-dark text-center"><b><?php echo $atributos->idEmpleado?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->nombre?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->apellidoPaterno?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->apellidoMaterno?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->telefono?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->direccion?></b></td>
        				<td class="text-dark text-center"><b><?php echo $atributos->horaEntrada?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->horaSalida?></b></td>
                <td class="text-dark text-center"><b><?php echo $atributos->usuario?></b></td>

                 <td>
                   <div class="btn-group">
                     <a href="<?php echo base_url();?>empleados/editarEmpleado/<?php echo $atributos->idEmpleado;?>" class="btn text-white bg-info" ><span class="icon-write"><b>Actualizar</b></span></a>
                     
                     <a href="<?php echo base_url()?>empleados/deleteEmpleado/<?php echo $atributos->idEmpleado;?>" class="btn text-white bg-danger"><span class="icon-squared-cross"><b>Eliminar</b></span></a>
                   </div>
                 </td>
      				</tr>
            <?php endforeach ?>
          <?php endif; ?>
    			</tbody>
  			</table>
		</div>
  	</div>
