<div class="container container-fluid">
<div class="container bg-light border border-secondary" style="width:50%;margin-bottom: 8%; margin-top: 8%;">
  <h4 class="text-center bg-light" style="margin-top: 2%;" >INGRESE LA INFORMACIÓN PERSNAL DEL EMPLEADO</h4>
  <img class="mx-auto d-block" width="40%" src="<?php echo base_url();?>/assests/img/empleado.png" alt="">


  <?php if($this->session->flashdata('error')):?>
  <div class="alert alert-danger" style="margin: auto;">
  <p class="text-center form-control-danger"><?php echo $this->session->flashdata('error')?></p>
<?php endif; ?>

<form action="<?php echo base_url();?>ventas/updateVenta" method='post'>

    <div class="form-group">
    <input type="hidden" value="<?php echo $ventaEdit->idVenta?>" class="form-control bg-light" placeholder="Id del producto" name="txtidPlatillo" id="txtidPlatillo">
   </div>

  <div class="form-group">
    <label for="nombre" class="text-dark"><b>Seleccione el cliente:</b></label>
    <select name="txtcliente"id="txtcliente"class="form-control selectpicke"data-live-search="true">
      <option value="">....</option>
      <?php foreach ($comboClientes as $atributos): ?>
        <option value="<?php echo $atributos->idCliente;?>"><?php echo $atributos->nombre; ?> </option>
      <?php endforeach ?>
    </select>
  </div>

  <div class="form-group">
    <label for="nombre" class="text-dark"><b>Seleccione el platillo:</b></label>
    <select name="txtplatillo"id="txtplatillo"class="form-control selectpicke"data-live-search="true">
      <option value="">....</option>
      <?php foreach ($comboPlatillos as $atributos): ?>
        <option value="<?php echo $atributos->idPlatillo;?>"><?php echo $atributos->nombre; ?> </option>
      <?php endforeach ?>
    </select>
  </div>

    <div class="form-group">
      <label for="date" style="font-size: 20px;"><b>Fecha en que se efectua el pedido:</b></label>
      <input style="font-size: 20px;" type="date" class="form-control" id="txtfecha" placeholder="Inserta la fecha del dia de hoy" name="txtfecha" value="<?php echo $ventaEdit->fecha?>">
    </div>
    <div class="form-group">
      <label for="text" style="font-size: 20px;"><b>cantidad:</b></label>
      <input style="font-size: 20px;" type="text" class="form-control" id="txtcantidad" placeholder="Inserta la cantidad e productoss a comprar" name="txtcantidad" value="<?php echo $ventaEdit->cantidad?>">
    </div>
    <div class="form-group">
      <label for="text" style="font-size: 20px;"><b>Total a pagar:</b></label>
      <input style="font-size: 20px;" type="text" class="form-control" id="txtpagar" placeholder="Inserta el total a pagar" name="txtpagar" value="<?php echo $ventaEdit->total?>">
    </div>
     
    <button type="submit" style="font-size: 20px; opacity: 0.9; margin-bottom: 5%;" class="btn bg-danger text-white container-fluid"><b>Actualizar venta</b></span>
  </form>
</div>
</div>
