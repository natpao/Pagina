<div   style=" font-size: 20px; width: 100%; padding-top: 5%; padding-bottom: 15%; ">
  <h3 class="text-center">BIENVENIDO, QUE TENGAS UN EXCELENTE DIA</h3>
    <div class="container container-fluid" style="margin-left: -25%; margin-top: 5%;">
      <img id="imagenUsuario"class="mx-auto d-block" width="30%" src="<?php echo base_url();?>/assests/img/teacher.png" >
    </div>
    <div class="container container-fluid" style="margin-top: -25%; margin-left: 25%;" >
      <div class="container container-fluid">
      <p class="container-fluid"><b>Nombre:</b><p class="text-success" style="margin-left: 40%; margin-top: -4.5%;"><b><?php echo $this->session->userdata('nombre') ?></b></p> </p>
      <hr class=" border border-2">
    </div>
    <div class="container container-fluid">
      <p class="container-fluid "><b>Apellido Paterno:</b><p class="text-success" style="margin-left: 40%; margin-top: -4.5%;"><b><?php echo $this->session->userdata('apellidoPaterno') ?></b></p> </p>
      <hr class=" border border-2">
    </div>
    <div class="container container-fluid">
      <p class="container-fluid"><b>Apellido Materno:</b><p class="text-success" style="margin-left: 40%; margin-top: -4.5%;"><b><?php echo $this->session->userdata('apellidoMaterno') ?></b></p></p>
      <hr class=" border border-2">
    </div>
    <div class="container container-fluid">
      <p class="container-fluid"><b>Telefono:</b><p class="text-success" style="margin-left: 40%; margin-top: -4.5%;"><b><?php echo $this->session->userdata('telefono')?></b></p></p>
      <hr class=" border border-2">
    </div>
     <div class="container container-fluid">
      <p class="container-fluid"><b>Dirección:</b><p class="text-success" style="margin-left: 40%; margin-top: -4.5%;"><b><?php echo $this->session->userdata('direccion') ?> </b></p></p>
      <hr class=" border border-2">
    </div>
    <div class="container container-fluid">
      <p class="container-fluid"><b>Usuario:</b><p class="text-success" style="margin-left: 40%; margin-top: -4.5%;"><b><?php echo $this->session->userdata('usuario') ?></b></p> </p>
      <hr class=" border border-2">
    </div>
    </div>

</div>
