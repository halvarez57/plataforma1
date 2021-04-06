<?php
include("conexion1/conexion1.php");
$empleados="SELECT *FROM asistencias";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylo/css/stylo5/stylo5.css">
    <title>Asistencia</title>
    

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
    
    <div class="container-table">
                             
                                <div class="table--header">Empleaado ID</div>
                                <div class="table--header">Fecha</div>
                                <div class="table--header">Tiempo de entrada</div>

                                <div class="table--header">Status</div>
                                
                                <div class="table--header">Tiempo de salida</div>
                                <div class="table--header">Numero de horas</div>
                                <?php
                         $resultado=mysqli_query($conexion,$empleados);
                         while($row=mysqli_fetch_assoc($resultado)){?>
                        <div type="hidden" class="table__item" value="><?php echo $row["id_asistencias"];?>"</div>
                         <div class="table__item"><?php echo $row["empleados_id"];?></div>
                         <div class="table__item"><?php echo $row["date"];?></div>
                         <div class="table__item"><?php echo $row["time_in"];?></div>
                         <div class="table__item"><?php echo $row["status"];?></div>
                         <div class="table__item"><?php echo $row["time_out"];?></div>
                         <div class="table__item"><?php echo $row["num_hr"];?></div>
                         
                         
                       <?php } mysqli_free_result($resultado);?>
                       </div>
</body>
</html>