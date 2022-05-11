<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 15</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N15#</h1>
    <p>    
    Suponga que tiene Ud. una tienda y desea registrar las ventas en una computadora.
     Diseñe un algoritmo en pseudocódigo que lea por cada cliente: 

    </p>

    <div>
    <form  name="punto15" action="../Php/Punto15.php" method="POST">


        
        <input type="number" name="valor" id="" placeholder="Valor Compra" min="1" >
      <input type="number" name="ingreso" id="" placeholder="Con cuanto paga ?" min="1" >
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
       $totalIva=0;
       $total=0;
     
         if(isset($_POST['calcular'])){
            
           
            $valor=$_POST['valor'];
            $ingreso=$_POST['ingreso'];
            $totalIva=($valor*1.19);
            $total=$ingreso-$totalIva;


         
           
        }
        
    ?>
     <br><br>
    
        <h3>el cambio es de  : <?php echo $total;?> </h3>

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>