<div class="container container-fluid">
<div class="container bg-light border border-secondary" style="width:50%;margin-bottom: 8%; margin-top: 8%;">
  <h4 class="text-center bg-light" style="margin-top: 2%;" >INGRESA TUS DATOS PERSONALES</h4>
  <img class="mx-auto d-block" width="40%" src="<?php echo base_url();?>/assests/img/teacher.png" alt="">
  <?php if($this->session->flashdata('error')):?>
  <div class="alert alert-danger" style="margin: auto;">
  <p class="text-center form-control-danger"><?php echo $this->session->flashdata('error')?></p>
<?php endif; ?>

<form action="<?php echo base_url();?>iniciarSesionCliente/insertarCliente" method='post'>
    <div class="form-group">
      <label for="text"style="font-size: 20px;"><b>Nombre (S):</b></label>
      <input style="font-size: 20px;" type="text" class="form-control" id="txtnombre" placeholder="Insertar nombres completos" name="txtnombre">
    </div>
    <div class="form-group">
      <label for="text" style="font-size: 20px;"><b>Apellido Paterno:</b></label>
      <input style="font-size: 20px;" type="text" class="form-control" id="txtapellidoPaterno" placeholder="Insertar apellido completo" name="txtapellidoPaterno">
    </div>
    <div class="form-group">
      <label for="text" style="font-size: 20px;"><b>Apellido Materno:</b></label>
      <input style="font-size: 20px;" type="text" class="form-control" id="txtapellidoMaterno" placeholder="Insertar apellido completo" name="txtapellidoMaterno">
    </div>
    <div class="form-group">
      <label for="text" style="font-size: 20px;"><b>Numero telefonico:</b></label>
      <input style="font-size: 20px;" type="text" class="form-control" id="txtcelular" placeholder="Insertar numero telefonico completo" name="txtcelular">
    </div>
     <div class="form-group">
      <label for="text" style="font-size: 20px;"><b>Dirección:</b></label>
      <input style="font-size: 20px;" type="text" class="form-control" id="txtDireccion" placeholder="Insertar domicilio completo" name="txtDireccion">
    </div>
     <div class="form-group">
      <label for="text" style="font-size: 20px;"><b>Usuario:</b></label>
      <input style="font-size: 20px;" type="text" class="form-control" id="txtusuario" placeholder="Insertar su alias" name="txtusuario">
    </div>
     <div class="form-group">
      <label for="pwd" style="font-size: 20px;"><b>Contraseña:</b></label>
      <input style="font-size: 20px;" type="password" class="form-control" id="txtcontra" placeholder="Insertar su contraseña" name="txtcontra">
    </div>
  
    <button type="submit" style="font-size: 20px; opacity: 0.9; margin-bottom: 5%;" class="btn bg-danger text-white container-fluid"><b>Registrarte</b></span>
  </form>
</div>
</div>







