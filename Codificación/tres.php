<?php
session_start();
if(isset($_SESSION['usuario'])){
	//Acciones a realizar para sesión válida
?>	
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
<img src="arauco.jpg" width="300">
<br>


<?php
    echo '<br>';
	echo 'Acceso permitido... cerrando sesión';
	header("Location:uno.php");
	//cerrar sesion
	session_destroy();
	//borrado explicito
	//unset($_SESSION['usuario']);
	echo '<br>';
	echo '<br> ADIOS';

}else{
	//Acciones a realizar para sesión no iniciada
	echo 'Acceso denegado :P';
	header("Location:uno.php");
}
?>