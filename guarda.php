<?php 
	require 'cone.php';

	$nombres = $_POST['nombre'];
	$apell_pat = $_POST['apell_pat'];
	$apell_mat = $_POST['apell_mat'];
	$rut = $_POST['rut'];

	$sql = "INSERT INTO alumno(nombres, apell_pat, apell_mat, rut) VALUES('$nombres', '$apell_pat', '$apell_mat'; '$rut')";
	

	$query = $conn->prepare("INSERT INTO alumno (nombres, apell_pat, apell_mat, rut) VALUES (:names, :surname1, :surname2, :rut)");
	$query->bindParam(':names', $nombres);
	$query->bindParam(':surname1', $apell_pat);
	$query->bindParam(':surname2', $apell_mat);
	$query->bindParam(':rut', $rut);
	$query->execute();
 ?>