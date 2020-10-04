<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Web 1</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand text white">
             
            Taller Web 1
            </a>
            <button class="navbar-toggler" data-target="#menu" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"id="menu">
        
        <ul class="navbar-nav mr-auto">
         <li class="navbar-item active">
            <a href="index.php" class="nav-link">Inicio</a>
         </li>
         <li class="navbar-item active">
            <a href="ejercicio1.php" class="nav-link">Calculadora</a>
         </li>
         <li class="navbar-item active">
            <a href="ejercicio2.php" class="nav-link">IndMasC</a>
         </li>
         <li class="navbar-item active">
            <a href="ejercicio3.php" class="nav-link">Tienda Spring Step</a>
         </li>
         <li class="navbar-item active">
            <a href="ejercicio4.php" class="nav-link">Salario Semanal</a>
         </li>
         
        </ul>
        </div>
    </nav>
<br><br><br>
<h1 class="text-center">¿Cuanto Ganaste?</h1>
<form class= "mt-3" action="ejercicio3.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1"> </label>
    <input type="number" class="form-control" placeholder="Horas Trabajadas" name="horas" required>
  </div >
  <center>
  <button type="submit" class="btn btn-dark" name="Calculo">Calcular </button></center>
</form>

<?php

$horas=0;
if (isset($_POST["Calculo"])){
$horas=$_POST["horas"];
$salario=0;
}
?>

<?php
if ($horas<=40){
    $salario=$horas*20000;
  }
elseif ($horas>40) {
  $salario=$horas * 25000;    
    }

?>

  <h4 class="text-center">
         <?php echo("El resultado es: ". $salario); ?>
   </h4>

  
<br><br><br><br><br><br><br>

    <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

              

                

                

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 AFCM | <a href="#">  </a>
                    </div>

                   
                </div>

            </div>
        
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>


