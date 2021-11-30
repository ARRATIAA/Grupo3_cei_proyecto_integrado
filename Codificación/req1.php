<?php

?>
<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
<img src="arauco.jpg" width="300">
<html>
<head>
  <title>Unidad Operativa</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <body background="lo.jpg" > 
</head>
<body>

<form method="POST" action="conex.php" name="formulario">

<table align="center">

<tr><td colspan="2"><h2>Unidad operativa</h2></td></tr>

  <tr>
    <td>
    <h3> Clave: </h3>
    </td>
    <td>
      <input type="text" name="clave" required placeholder="Ingrese clave " >
    </td>
  </tr>

  <tr>
    <td>
    <h3> Integrante: </h3>
    </td>
    <td>
      <input type="text" name="integrante"  placeholder="Ingrese nombre completo">
    </td>
  </tr>
  
  <tr>
    <td>
    <h3> Rol: </h3>
    </td>
    <td>
    <select type="select" name="rol"  required placeholder  value="rol">
    <option value="Brigadista">Brigadista</option>
    <option value="Motosierrista">Motosierrista</option>
    <option value="Conductor">Conductor</option>
    </select>
    </td>
  </tr>

  <tr>
    <td>
    <h3> Fecha: </h3>
    </td>
    <td>
      <input type="date" name="fecha"  >
    </td>
  </tr>

  <tr>
    <td>
    <h3> Hora de inicio: </h3>
    </td>
    <td>
      <input type="time" name="hora_inicio"  >
    </td>
  </tr>

  <tr>
    <td>
    <h3> Equipamiento: </h3>
    </td>
    <td>
    <select type="select" name="equipamiento"  required placeholder  value="equipamiento">
    <option value="Motobomba">Motobomba</option>
    <option value="Motosierra">Motosierra</option>
    <option value="Stock Combustible ">Stock Combustible</option>
    <option value="Stock Espuma ">Stock Espuma</option>
    <option value="Kit Meteorologico ">Kit Meteorologico</option>
    </select>
    </td>
  </tr>

  <tr>
    <td>
    <h3> Patente/Matricula: </h3>
    </td>
    <td>
    <select type="select" name="movil_patente"  required placeholder  value="movil_patente">
    <option value="BR-1289">BR-1289 - Camión</option>
    <option value="DF-3435">DF-3435 - Camioneta</option>
    <option value="ST-7993">ST-7993 - Camioneta</option>
    <option value="BC-2302">BC-2302 - Camión</option>
    <option value="AAA-ZZZ">AAA-ZZZ - Aeronave</option>
    <option value="DED-NMN">DED-NMN - Aeronave</option>
    </select>
    </td>
  </tr>

  <tr>
    <td>
    <h3> Actividad: </h3>
    </td>
    <td>
    <select type="select" name="actividad_codigo"  required placeholder  value="actividad_codigo">
    <option value="1">Inspección</option>
    <option value="2">Tala de arboles</option>
    <option value="3">Fumigación</option>
    <option value="4">Plantar</option>
    </select>
    </td>
  </tr>

  <tr>
    <td>
    <h3> Unidad: </h3>
    </td>
    <td>
    <select type="select" name="unidad_clave"  required placeholder  value="unidad_clave">
    <option value="1">Colcura</option>
    <option value="2">Cerro Alto</option>
    <option value="3">Santa Juana</option>
    <option value="4">Cañete</option>
    <option value="5">San Pedro</option>
    </select>
    </td>
  </tr>

 


<tr><td colspan="2" align="center"><input type="submit" value="Registrar" name="Registrar" >


</table>
 

</form>
</body>
</html>


<form name="f1" action="tres.php" method="post">
		<input type="submit" name="bt1" value= "Cerrar sesion" >
</form>
<?php

