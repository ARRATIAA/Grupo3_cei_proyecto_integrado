<?php
$brigadistas = array();

//$inicio = new ControladorInicio();
//$brigadistas= $inicio->leerPersonas();
?>
<table class="table table-bordered table-striped text-center mt-5">
  <thead>
    <tr>
      <th>#</th>
      <th>Rut</th>
      <th>Nombre</th>
      <th>Empresa</th>
      <th>Fono</th>
      <th>Codigo</th>
      <th>Rol</th>
    </tr>
  </thead>
  <tbody>
  <?php
  for ($i=0; $i < count($brigadistas); $i++) {
    ?>
    <tr>
      <td> <?=$i+1?> </td>
      <td> <?=$brigadistas[$i]["rut"]?> </td>
      <td> <?=$brigadistas[$i]["nombre"]?></td>
      <td> <?=$brigadistas[$i]["empresa"]?></td>
      <td> <?=$brigadistas[$i]["fono"]?></td>
      <td> <?=$brigadistas[$i]["codigo"]?></td>
      <td> <?=$brigadistas[$i]["rol"]?></td>
    </tr>

    <?php
  }
  ?>
  </tbody>
</table>
