<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller Web 1</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="ejercicio1">
    
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



    <div class="container-fluid">
        <h1 class="text-center">Calculadora</h1>
        <form action="ejercicio1.php" method="POST">
            <div class="form-group row mt-3 justify-content-center">
                <label for="num1" class="col-1">Numero 1</label>
                <input type="number" name="num1" id="num1" class="form-control col-2"  placeholder="Número 1">
                <label for="num2" class="col-1">Numero 2</label>
                <input type="number" class="form-control col-2" name="num2" id="num2" placeholder="Número 2">
           </div>
            <div class="form-group row mt-3 justify-content-center">
                <select name="calculo" id="calculo" class="form-control offset-1 col-5">
                    <option value="" selected disabled>Seleccione la operacion aritmetica</option>
                    <option value="suma" selected>Sumar</option>
                    <option value="resta">Restar</option>
                    <option value="multiplication">Multiplicar</option>
                    <option value="division">Dividir</option>
                </select>
            </div>
            
            <div class="form-group row justify-content-center">
                <div class="col-1">
                    <button type="submit" name ="calcular" class="btn btn-dark">Calcular </button>
                </div>
            </div>
        </form>
        
        <?php if(isset($_POST['calcular'])) : ?>
        
        <?php 
            if(!empty($_POST['calculo'])) {
                $calculo = $_POST['calculo'];
                
                $num1 = isset($_POST['num1']);
                $num2 = isset($_POST['num2']);
                
                if ($calculo == "suma") {
                    
                    $resultado = $_POST["num1"] + $_POST["num2"];
                    
                }
                else if ($calculo == "resta") {
                    $resultado = $_POST["num1"] - $_POST["num2"]; 
                }
                else if ($calculo == "multiplication") {
                    $resultado = $_POST["num1"] * $_POST["num2"];
                }
                else {
                    $resultado = $_POST["num1"] / $_POST["num2"];
                }
            }
            else {
                echo 'No se haz seleccionado ';     
            }
        ?>
                
                <h4 class="text-center">
                    <?php echo("Su resultado es: ". $resultado) ?>
                </h4>

                    <h4></h4>
                <?php endif ?>

   
    </div>
    <br><br>

    <footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2020 AFCM| <a href="#">  </a>
                    </div>

                   
                </div>

            </div>
        
    </footer>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>