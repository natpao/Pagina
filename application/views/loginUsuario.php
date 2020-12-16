<div class="container container-fluid">
<div class="container bg-light border border-secondary" style=" width:50%;margin-bottom: 8%; margin-top: 8%;">
  <h2 class="text-center" style="margin-top: 2%;" >Iniciar Sesión </h2>
  <img class="mx-auto d-block" width="40%" src="<?php echo base_url();?>/assests/img/teacher.png" alt="">
  <?php if($this->session->flashdata('error')):?>
  <div class="alert alert-danger" style="margin: auto;">
  <p class="text-center form-control-danger"><?php echo $this->session->flashdata('error')?></p>
  </div>
  <?php endif; ?>
  <form action="<?php echo base_url();?>iniciarSesionCliente/loginSesionCliente" method='post'>
    <div class="form-group">
      <label for="text"style="font-size: 20px;"><b>Usuario</b></label>
      <input style="font-size: 20px;" type="text" class="form-control" id="txtusuario" placeholder="Insertar Usuario" name="txtusuario">
    </div>
    <div class="form-group">
      <label for="pwd" style="font-size: 20px;"><b>Contraseña:</b></label>
      <input style="font-size: 20px;" type="password" class="form-control" id="txtcontra" placeholder="Insertar Contraseña" name="txtcontra">
    </div><br>
    <button type="submit" style="font-size: 20px; opacity: 0.9; margin-bottom: 5%;" class="btn bg-danger text-white container-fluid"><b>Ingresar</b></span></button>
  </form>
  <a href="<?php base_url();?>iniciarSesionCliente/crearCuenta " type="submit" style="font-size: 20px; opacity: 0.9; margin-bottom: 5%;" class="btn bg-success text-white container-fluid"><b>Crear cuenta</b></span></a>
</div>
</div>
