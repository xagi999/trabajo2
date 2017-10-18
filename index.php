<?php 
	require 'cone.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
	<div class="row">
	

		<div class="container">
	
	<div class="row">
		<div class="col-md-6 well">
			<form class="form-horizontal" action="guarda.php" method="POST">
				<h3>Alumno</h3>
				Nombre: <input type="text" name="nombre"><br>
				Apellido Paterno: <input type="text" name="apell_pat"><br>
				Apeliido Materno: <input type="text" name="apell_mat"><br>
				Rut: <input type="text" name="rut"><br>	
			<input type="submit" name="Enviar" class="btn btn-success">
			</form>
		</div>
		
		<div class="col-md-6 well">
		<table class='table  table-striped'>
	<th>rut</th>
	<th>Nombres</th>
	<th>apellido paterno</th>
	<th>apellido materno</th>
	</table>
			<button class="btn btn-success" onclick="ejecutarAjax('action')">
		Mostrar Alumnos
	</button>
	<br>
	<div id="resultado"></div>


	<script src="js/jquery-3.2.1.min.js"></script>

	<script>
		function ejecutarAjax(universidad) {
			$.ajax({
				url: 'procesar.php',
				method: "GET",
				data: {},
				beforeSend: function() {
					// $( "#resultado" ).html('');
					// $( "#resultado" ).append( "Enviando");
				},
			})
			.done(function( dattaaaaa ) {
				// $( "#resultado" ).html('');
				$( "#resultado" ).append( dattaaaaa );
				// if (dattaaaaa == '1') {
				// 	alert("si es la upla");
				// 	alert(dattaaaaa);
				// }else{
				// 	alert("esto no es la upla!!!!!!");
				// 	alert(dattaaaaa);
				// }

			})
			.fail(function() {
				$( "#resultado" ).html('');
				$( "#resultado" ).append( "<span>Error</span>");
			})
			

			
		}
	</script>
		</div>
		
	</div>
</div>
</body>
</html>