<?php include('header.php') ?>

<div id="seccion2">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Listado de usuarios</h1>
			</div>
			<div class="col-sm-12 table-buttons">
				<a class="btn btn-success" href="<?php echo base_url(); ?>Usuario/AgregarUsuario"><span class="glyphicon glyphicon-plus"></span> Agregar</a>
			</div>
			<div class="col-sm-12 table-responsive">
				<table id="lista_usuarios" class="table table-hover table-striped table-bordered" width="100%" cellspacing="0">
					<thead>
						<th>Nº</th>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Especialidad</th>
						<th>Estatus</th>
						<th> </th>
					</thead>
					<tfoot>
						<th>Nº</th>
						<th>Cédula</th>
						<th>Nombre</th>
						<th>Especialidad</th>
						<th>Estatus</th>
						<th> </th>						
					</tfoot>
					<tbody>
						<?php 
							$cont = 1;

							if ($usuarios->num_rows() > 0) {
								
								foreach ($usuarios->result_array() as $key => $usuario) {
									
									echo "<tr>";
									echo "<td>".$cont++."</td>";
									echo "<td>".$usuario["cedula"]."</td>";
									echo "<td>".$usuario["nombre1"]." ".$usuario["apellido1"]."</td>";
									echo "<td>".$usuario["especialidad"]."</td>";
									echo "<td>";
									echo ($usuario["status"] == 't') ? "Activo":"Inactivo";
									echo "</td>";
									echo "<td> </td>";
									echo "</tr>";
								}
							}
						?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#lista_usuarios").DataTable( {
        "language": {
            	"sProcessing":     "Procesando...",
				"sLengthMenu":     "Mostrar _MENU_ registros",
				"sZeroRecords":    "No se encontraron resultados",
				"sEmptyTable":     "Ningún dato disponible en esta tabla",
				"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				"sInfoPostFix":    "",
				"sSearch":         "Buscar:",
				"sUrl":            "",
				"sInfoThousands":  ",",
				"sLoadingRecords": "Cargando...",
				"oPaginate": {
					"sFirst":    "Primero",
					"sLast":     "Último",
					"sNext":     "Siguiente",
					"sPrevious": "Anterior"
				},
				"oAria": {
					"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
					"sSortDescending": ": Activar para ordenar la columna de manera descendente"
				}
        	}
        });
	});
</script>
<?php include('footer.php') ?>