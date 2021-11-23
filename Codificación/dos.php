<?php
session_start();
if(isset($_SESSION['usuario'])){
	//todo el codigo funcional ira aqui
?>
<!DOCTYPE html>


<link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
<img src="arauco.jpg" width="300">

<td><h1>Registro</h1></td>
<html>
<head>
  <title>Formulario de registro</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <body background="n.jpg" >

</head>
<body >
<br>
<form method="POST" action="conexion.php" name="formulario">


<h4> <td> <h3>Cargo : Jefe de Brigada</h3>/td> </h4>



<table align="center">
  <tr><td colspan="2"><h2>Registro de Brigada</h2></td></tr>
  <tr>
    <td>
    <h3> Rut: </h3>
    </td>
    <td>
      <input type="text" name="rut" required placeholder="Ingrese su RUT" >
    </td>
  </tr>

  <tr>
    <td>
    <h3> Nombre: </h3>
    </td>
    <td>
      <input type="text" name="nombre" required placeholder="Ingrese nombre completo">
    </td>
  </tr>
  
  <tr>
    <td>
    <h3> Empresa: </h3>
    </td>
    <td>
    <select type="select" name="empresa_codigo" value="empresa_codigo">
    <option value="1">Agesa</option>
    <option value="2">Agrifor</option>
    <option value="3">Bagaro</option>
    <option value="4">Codema</option>
    <option value="5">Arauco</option>
    </select>

    </td>
  </tr>

  <tr>
    <td>
    <h3> Telefono: </h3>
    </td>
    <td>
      <input type="number" name="fono" required placeholder="912345678">
    </td>
  </tr>

 


<tr><td colspan="2" align="center"><input type="submit" name="Registrar_Datos" ></td></tr>


</table>



</form>
</body>
</html>
	

	<form name="f1" action="tres.php" method="post">
		<input type="submit" name="bt1" value="Cerrar sesion...">
	</form>
<?php
}else{
	//informes de sesión invalida

	echo 'Acceso denegado :P';
	//header("Location:uno.php");
}


?>