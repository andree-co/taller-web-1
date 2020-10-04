<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Web 1 </title>

    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="ejercicio3">
    
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

<div class="container">
    <div class="row justify-content-center">
         <div class="col-4">
<br><br><br>
         <h1 class="mt-4 text-center"> TIENDA SPRING STEP </h1>

<br><br>

<form class= "mt-3" action="ejercicio3.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1"> </label>
    <input type="number" class="form-control" placeholder="Cantidad de zapatos comprados" name="cantidadZapatos" required>
  </div>
  <button type="submit" class="btn btn-light mt-3 btn-block" name="botonCalcular">Costo </button>
</form>

<hr>
<br>

</div>
    </div>
        </div>


    <?php if(isset($_POST["botonCalcular"])): ?>
            
    <h4 class="text-center">
    <?php 

    
$cantidad = $_POST["cantidadZapatos"]; 
$precio= 90000;




if ($cantidad <=2){
  echo("El precio de cada par de zapatos es: " .$precio);
  echo("<br>");
  $totalcompra=($cantidad)*($precio);
  echo("El valor total de la compra es: ".$totalcompra);
  echo("<br>");
  echo("No tiene descuento");
 
 }

elseif($cantidad ==3){
  echo("El precio de cada par de zapatos es: " .$precio);
  echo("<br>");
  $totalcompra=($cantidad)*($precio);
  echo("El valor total de la compra sin descuento es: ".$totalcompra); 
  echo("<br>");
  $totaldescuento=$totalcompra-($totalcompra*0.10);
  echo ("El valor de compra con un descuento del 10% es: ".$totaldescuento);
  

}elseif (($cantidad >=4) and($cantidad <=8)){
  echo("El precio de cada par de zapatos es: " .$precio);
  echo("<br>");
  $totalcompra=($cantidad)*($precio);
  echo("El valor total de la compra sin descuento es: ".$totalcompra); 
  echo("<br>");
  $totaldescuento=$totalcompra-($totalcompra*0.20);
   echo ("El valor de compra con un descuento del 20% es: ".$totaldescuento);
 }

elseif ($cantidad >=9){
  echo("El precio de cada par de zapatos es: " .$precio);
  echo("<br>");
  $totalcompra=($cantidad)*($precio);
  echo("El valor total de la compra sin descuento es: ".$totalcompra);
  echo("<br>");
  $totaldescuento=$totalcompra-($totalcompra*0.50);
   echo ("El valor de compra con un descuento del 50% es: ".$totaldescuento);
 }

     ?>
    </h4>
    <?php endif ?>


    <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                

                

                

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 AFCM | <a href="#"> </a>
                    </div>

                    
                </div>

            </div>
        
    </footer>

</body>
</html>