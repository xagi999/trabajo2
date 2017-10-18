<?php
$usuario = 'root';
$contraseña = '';
$db_name = 'ezequiel-chan';
$server = 'localhost';

$conn = new PDO("mysql:host=$server;dbname=$db_name", $usuario, $contraseña);
/*try{
 	
}catch(exception){

}*/
?>