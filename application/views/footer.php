<footer style="background: #000; opacity: 0.9;">
		<div class="contenedor">
			<p class="text-white" style="font-size: 22px;" > Nuestro logo nos distingue </p>
			
		</div>
	</footer>
		<script src="<?php echo base_url();?>/assests/js/jquery-3.4.1.min.js"></script>
    <script src="<?php echo base_url();?>/assests/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assests/js/sweetalert2.min.js"></script>
    <script src="<?php echo base_url();?>/assests/js/carrito.js"></script>
    <script src="<?php echo base_url();?>/assests/js/compra.js"></script>
    <script src="<?php echo base_url();?>/assests/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>/assests/js/jquery.min.js"></script>
    <script type="text/javascript"  src="<?php echo base_url();?>/assests/datatables.net-bs/js/jquery.dataTables.min.js"></script>
   	<script type="text/javascript" src="<?php echo base_url();?>/assests/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
   		<script type="text/javascript">
   		$(document).ready(function () {
  			$('#example1').DataTable({
             "language": {
                 "lengthMenu": "Mostrar _MENU_ registros por pagina",
                 "zeroRecords": "No se encontraron resultados en su busqueda",
                 "searchPlaceholder": "Buscar registros",
                 "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
                 "infoEmpty": "No existen registros",
                 "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                 "search": "Buscar:",
                 "paginate": {
                     "first": "Primero",
                     "last": "Último",
                     "next": "Siguiente",
                     "previous": "Anterior"
                 },
             }
        });
 })
</script>
	</body>
</html>