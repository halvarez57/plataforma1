<?php
include("conexion1/conexion1.php");
$empleados="SELECT *FROM empleados";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tutorial DataTables</title>
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    
    <link rel="stylesheet" href="stylo/css/stylo4/style4.css">
    
  </head>
    
  <body> 
  <header>
    <img src="img/chiquimundi.png">
        <a href="/nomina proyecto/inicio.php">Inicio</a>
        <a href="/nomina proyecto/registro.php">Registrar Empleado</a>
        <a href="/nomina proyecto/asistencia.php">Asistencias</a>
        <a href="/nomina proyecto/registro.php">Horas Laborables</a>
        <a href="/nomina proyecto/index_fpdf.php">Roles de Pago</a>
        <a href="/nomina proyecto/index.php">Cerrar Sesion</a>
    </header>
    
         <h1 class="text-center ">Chiquimundi</h1>
         <h2 class="text-center ">Registros</h2>

        
                
                         <div class="container-table">
                                <div class="table--header">Cedula</div>
                                <div class="table--header">Primer Nombre</div>
                                <div class="table--header">Segundo Nombre</div>
                                <div class="table--header">Primer apellido</div>
                                <div class="table--header">Segundo Apellido</div>
                                <div class="table--header">Direccion</div>
                                <div class="table--header">Fecha de Nacimiento</div>
                                <div class="table--header">Informacion del Contacto</div>
                                <div class="table--header">Genero</div>
                                <div class="table--header">Posicion laboral</div>
                                <div class="table--header">Salario</div>
                            
                            
                         <?php
                         $resultado=mysqli_query($conexion,$empleados);
                         while($row=mysqli_fetch_assoc($resultado)){?>
                        <div type="hidden" class="table__item" value="><?php echo $row["id_empleado"];?>"</div>
                         <div class="table__item"><?php echo $row["cedula"];?></div>
                         <div class="table__item"><?php echo $row["primer_nombre"];?></div>
                         <div class="table__item"><?php echo $row["segundo_nombre"];?></div>
                         <div class="table__item"><?php echo $row["primer_apellido"];?></div>
                         <div class="table__item"><?php echo $row["segundo_apellido"];?></div>
                         <div class="table__item"><?php echo $row["direccion"];?></div>
                         <div class="table__item"><?php echo $row["fecha_de_nacimiento"];?></div>
                         <div class="table__item"><?php echo $row["informacion_del_contacto"];?></div>
                         <div class="table__item"><?php echo $row["genero"];?></div>
                         <div class="table__item"><?php echo $row["posicion_id"];?></div>
                         <div class="table__item"><?php echo $row["salario"];?></div>
                       <?php } mysqli_free_result($resultado);?>
                       
                       </div>
                           
                    
                 
                   
                    

                    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#tablaUsuarios').DataTable(); 
      });
    </script>
      
    
      
    <!--Ejemplo tabla con bootstrap 4-->    
    <!--<div style="height:50px"></div>               
    <div class="container">
    <h3>Tabla con <span class="badge badge-secondary">BOOTSTRAP 4</span></h3>
    <div class="row">
            <div class="col-lg-12">                    
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <th>Nombre</th>
                        <th>País</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Perez</td>
                            <td>Argentina</td>
                        </tr>
                        <tr>
                            <td>María Pía</td>
                            <td>Venezuela</td>
                        </tr>
                        <tr>
                            <td>Juan Caros</td>
                            <td>Perú</td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
    </div>-->    
    </body>   
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    