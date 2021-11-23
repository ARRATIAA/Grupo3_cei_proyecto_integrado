<?php
include_once "dos.php";


$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="registro_brigada";

$link_conexion = mysqli_connect($servidor, $usuario, $clave,  $baseDeDatos);

if (mysqli_connect_error()){
    printf("Problemas con la Conexion %s", mysqli_connect_error());
    exit;

    return $link_conexion;
}

if(isset($_POST["Registrar_Datos"])){
   $rut=$_POST["rut"];
   $nombre=$_POST["nombre"];
   $fono=$_POST["fono"];
   $empresa_codigo=$_POST["empresa_codigo"];
   

   $sql = "INSERT INTO brigadistas Values ('$rut','$nombre',$fono ,$empresa_codigo )";
  //echo $sql;
   $ejecutarInsertar = mysqli_query($link_conexion, $sql);
 }
 
 ?>