class Carrito{

	comprarProducto(e){
		e.peventDefault();
		if(e.target.classlist.contenedor(boton)){
			conts producto =e.target.paretElement.paretElement;
			this.leerDatosProducto(producto);
		}
	}
}