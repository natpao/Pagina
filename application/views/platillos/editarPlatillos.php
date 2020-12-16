<div class="container container-fluid">
<div class="container bg-light border border-secondary" style="width:50%;margin-bottom: 8%; margin-top: 8%;">
  <h4 class="text-center bg-light" style="margin-top: 2%;" >INGRESE LA INFORMACIÓN PERSNAL DEL PLATILLO</h4>
  <img class="mx-auto d-block" width="40%" src="<?php echo base_url();?>/assests/img/empleado.png" alt="">

  <?php if($this->session->flashdata('error')):?>
  <div class="alert alert-danger" style="margin: auto;">
  <p class="text-center form-control-danger"><?php echo $this->session->flashdata('error')?></p>
<?php endif; ?>


<form action="<?php echo base_url();?>platillos/updatePlatillo" method='POST'>
  <div class="form-group">
    <input type="hidden" value="<?php echo $platillosEdit->idPlatillo?>" class="form-control bg-light" placeholder="Id del producto" name="txtidPlatillo" id="txtidPlatillo">
  </div>
    <div class="form-group">
      <label for="text"style="font-size: 20px;"><b>Nombre:</b></label>
      <input style="font-size: 20px;" value="<?php echo $platillosEdit->nombre?>" type="text" class="form-control" id="txtnombre" placeholder="Editar el nombre del platillo" name="txtnombre">
    </div>
    <div class="form-group">
      <label for="text" style="font-size: 20px;" ><b>Descripción:</b></label>
      <input style="font-size: 20px;"value="<?php echo $platillosEdit->descripcion?>" type="text" class="form-control" id="txtdescripcion" placeholder="Insertar la descripción" name="txtdescripcion">
    </div>
    <div class="form-group">
      <label for="text" style="font-size: 20px;"><b>Precio:</b></label>
      <input style="font-size: 20px;"value="<?php echo $platillosEdit->precio?>" type="text" class="form-control" id="txtprecio" placeholder="Insertar precio" name="txtprecio">
    </div>
    <div class="form-group">
      <label for="text" style="font-size: 20px;"><b>Stock:</b></label>
      <input style="font-size: 20px;"value="<?php echo $platillosEdit->stock?>" type="text" class="form-control" id="txtstock" placeholder="Insertar el precio del producto" name="txtstock">
    </div>
  
    <button type="submit" style="font-size: 20px; opacity: 0.9; margin-bottom: 5%;" class="btn bg-danger text-white container-fluid"><b>Actualizar platillo</b></span>
  </form>
</div>
</div>
<p></p>






