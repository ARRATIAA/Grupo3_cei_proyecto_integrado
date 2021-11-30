<?php
$servidor='localhost';
$usuario='root';
$clave='';
$bd='registro_brigada';
if(isset($_POST['bt1'])){
    // registrar
    #conectarse a la BD
    $conexion=mysqli_connect($servidor,$usuario,$clave,$bd);
    #tomar datos del formulario
    $user=$_POST['usuario'];
    $pass=$_POST['c1'];
    #encriptacion
    $segurito=password_hash($pass,PASSWORD_DEFAULT);
    #la consulta ...
    $sql="INSERT INTO usuarios VALUES('$user','$segurito')";
    mysqli_query($conexion,$sql);
    #validar
    if(mysqli_affected_rows($conexion)>0){
        //bien
        echo 'Ususario registrado exitosamente';
            
        

    }
    else{
        echo 'no registro';
        //mal
    }
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<img src="arauco.jpg" width="300">
		<meta charset="utf-8">	
		<title>Registro</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <body background= "lo.jpg" > 
		<script>
				function mensaje(){
					  if (document.f1.c1.value!=document.f1.c2.value){
						document.f1.c1.value="";
						document.f1.c2.value="";
						document.f1.c1.focus();
					   alert("Error: Clave mal escrita");}
						   }
		</script>  	
</head>
<body >
    <form name="f1" action="encriptacion.php" method="post">
        <table align="center">
            <tr>
                <td><h2><p style="color:rgb(255,255,255);">usuario</h2></td>
                <td><input type="text" name="usuario" size="15" required></td>
            </tr>
            <tr>
                <td><h2><p style="color:rgb(255,255,255);">contraseña</h2></td>
                <td><input type="password" name="c1" size="15" required></td>
            </tr>
			<tr>
                <td><h2><p style="color:rgb(255,255,255);">repita contraseña </h2></td>
                <td><input type="password" name="c2" size="15" required OnChange=mensaje();></td>
            </tr>
         
            <tr>
               <td colspan="2"><input type="submit" name="bt1" value="Registrar"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
}
?>
