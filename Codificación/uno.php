<?php
//iniciar la sesion
session_start();
$var='';
if(isset($_POST['bt1'])){
	//validar usuario y registrar variable de sesion
	//conectarse a la BD y extraer info del usuario
	if($_POST['n']=="nico" && $_POST['c']=="123"){
		$_SESSION['usuario']='nico';
		//echo '<a href="dos.php"> siguiente pagina</a>';
		header("Location:dos.php");
	}else{
		$var='<br><b> Acceso incorrecto  </b><br>';
		echo '<link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
		    <img src="arauco.jpg" width="300">
		<html>
				<head></head>
				<body>
				'.$var.'
					<form name="f1" action="uno.php" method="post">
						nombre<input type="text" name="n" ><br>
						clave<input type="text" name="c"><br>
						<input type="submit" name="bt1" value="Iniciar">
					</form>
				</body>
				</html>';
	}

}else{
 	echo'<html>
	<link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
    <img src="arauco.jpg" width="300">

			<head></head>
			<body>
				<form name="f1" action="uno.php" method="post">
				    nombre: <input type="text" name="n" ><br>
				    clave: <input type="text" name="c"><br>
					<input type="submit" name="bt1" value="Iniciar">
				</form>
			</body>
		</html>';

}
?>