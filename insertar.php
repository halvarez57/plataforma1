<?php
require("conexion1/conexion1.php");

$cedula=$_POST['cedula'];
$primer_nombre=$_POST['primer_nombre'];
$segundo_nombre=$_POST['segundo_nombre'];
$primer_apellido=$_POST['primer_apellido'];
$segundo_apellido=$_POST['segundo_apellido'];
$direccion=$_POST['direccion'];
$fecha_de_nacimiento=$_POST['fecha_de_nacimiento'];
$informacion_del_contacto=$_POST['informacion_del_contacto'];
$genero=$_POST['genero'];
$posicion_id=$_POST['posicion_id'];
$salario=$_POST['salario'];

$centinela = false;

if(strlen($cedula) == 10 && strlen($genero) == 1 && strlen($primer_nombre) < 45){
 $centinela = true;
}

if($centinela){
$insertar="INSERT INTO nomina2.empleados(cedula,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,direccion,fecha_de_nacimiento,informacion_del_contacto,genero,posicion_id,salario)VALUES('$cedula','$primer_nombre','$segundo_nombre','$primer_apellido','$segundo_apellido','$direccion','$fecha_de_nacimiento','$informacion_del_contacto','$genero',$posicion_id,$salario)";

$resultado=mysqli_query($conexion,$insertar);

	if($resultado){
	   echo"<script>alert('Registrado Correctamente');window.location.href='/nomina proyecto/registro.php';</script>";
	}else{
	    echo"<script>alert('Error al Registrar datos2');windoww.history.go(-1)</script>";
	}

}else{
	echo"<script>alert('Por Favor Ingrese los datos correctamente');window.location.href='/nomina proyecto/registro.php';</script>";

}


?>