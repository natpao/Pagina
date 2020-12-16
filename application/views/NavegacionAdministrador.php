<!DOCTYPE html>
<html lang="es">
<head>
	<title>CHEFCITO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1. minimun-scale=1">
	<link rel="stylesheet" href="<?php echo base_url();?>/assests/css/fontello.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assests/css/estilos.css">
		<link rel="stylesheet" href="<?php echo base_url();?>/assests/css/bootstrap.min.css">

</head>
<body style="background: #F7BFBE;">
	<header>
	<div class="container-fluid">
		<a href="<?php echo base_url();?>administrador" style="color: white;" ><h1 class="icon-fast-food">Chefcito </h1></a>;
			<input type="checkbox" id="menu-bar">

			<label class="icon-menu " for="menu-bar"></label>

			<nav class="menu">
				<a href="<?php echo base_url();?>empleados">Empleados</a>
				<a href="<?php echo base_url();?>platillos">Platillos</a>
				<a href="<?php echo base_url();?>ventas">Ventas</a>
				<a href="<?php echo base_url();?>Inicio"><?php echo $this->session->userdata('nombres')?></a>
	</div>
	</header>