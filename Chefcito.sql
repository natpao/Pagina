CREATE DATABASE Chefcito;
USE Chefcito;

CREATE TABLE cliente(
	idCliente int(3) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nombre varchar(30),
	apellidoPaterno varchar(30),
	apellidoMaterno varchar(30),
	telefono varchar(10),
	direccion varchar(100),
	usuario varchar(30),
	password varchar(20)
);
CREATE TABLE empleado(
	idEmpleado int(3) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nombre varchar(30),
	apellidoPaterno varchar(30),
	apellidoMaterno varchar(30),
	telefono varchar(10),
	direccion varchar(100),
	horaEntrada time,
	horaSalida time,
	usuario varchar(30),
	password varchar(20)
);
CREATE TABLE platillo(
	idPlatillo int(3) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nombre varchar(30),
	descripcion varchar(100),
	precio float(10,2)
	
);

CREATE TABLE venta(
	idVentaint(3) PRIMARY KEY AUTO_INCREMENT NOT NULL,
	idCliente int(3),
	idPlatillo int(3)
	
);
