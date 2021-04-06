<?php
require("conexion1/conexion1.php");

$usuario=$_POST['usuario'];
$password=$_POST['password'];
$_SESSION['usuario']='hola';
$consulta="SELECT* FROM admin where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);


$filas=mysqli_num_rows($resultado);

if($filas>0){ header("Location:index.php");
    header("location:/nomina proyecto/inicio.php");
}else
    echo "Error Verifique Usuario y Contraseña" ;
mysqli_free_result($resultado);
mysqli_close($conexion);
?>