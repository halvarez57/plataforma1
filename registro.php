
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylo/css/stylo2/style2.css">
    <title>Registros</title>
</head>
<body>
<header>
    <img src="img/chiquimundi.png">
        <a href="/nomina proyecto/inicio.php">Inicio</a>
        <a href="/nomina proyecto/registro.php">Registrar Empleado</a>
        <a href="/nomina proyecto/asistencia.php">Asistencias</a>
        <a href="/registro.php">Horas Laborables</a>
        <a href="/nomina proyecto/index_fpdf.php">Roles de Pago</a>
        <a href="/nomina proyecto/index.php">Cerrar Sesion</a>
        </header>
    <div class="contenedor-add">
 <form action="insertar.php" class="formulario" id="formulario" name="formulario" method="post">



 <label for="" class="container__label"> Cedula:</label>
 <input  type="text" name="cedula" class="container__input">

 <label for="" class="container__label"> Primer Nombre:</label>
 <input  type="text" name="primer_nombre" class="container__input">

 
 
 <label for="" class="container__label"> Segundo Nombre:</label>
 <input type="text" name="segundo_nombre" class="container__input">
 
 <label for="" class="container__label"> Primer Apellidos:</label>
 <input type="text" name="primer_apellido" class="container__input">
 
 <label for="" class="container__label"> Segundo Apellidos:</label>
 <input type="text" name="segundo_apellido" class="container__input">
 
 <label for="" class="container__label"> Direccion:</label>
 <input type="text" name="direccion" class="fcontainer__input">
 
 <label for="" class="container__label"> Fecha de Nacimiento:</label>
 <input type="date" name="fecha_de_nacimiento" class="container__input">
 
 <label for="" class="container__label"> Informacion del Contacto:</label>
 <input type="text" name="informacion_del_contacto" class="container__input">
 
 <label for="" class="container__label"> Genero:</label>
 <input type="text" name="genero" class="container__input">
 
 <label for="" class="container__label"> Posicion laboral:</label>
 <input type="text" name="posicion_id" class="container__input">

 <label  for="" class="container__label">Salario:</label>
 <input  class="control" type="text" name="salario" class="container__input">
 
 
<input  class="container__submit"  name="Guardar" type="submit" value="registrate">

</form>
</div>
  
</body>
</html>
