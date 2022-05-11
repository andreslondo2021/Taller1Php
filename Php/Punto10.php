<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 10</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N10#</h1>
    <p>Una tienda ofrece un descuento del 15% sobre el total de la compra y un cliente desea saber cuánto deberá pagar finalmente por su compra.
</p>

    <div>
    <form  name="punto10" action="../Php/Punto10.php" method="POST">


        
        <input type="number" name="compra" id="" placeholder="total compra" min="1" >
       
      
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
       $valorPagar=0;
         if(isset($_POST['calcular'])){
            
            $compra=$_POST['compra'];
          
            $valorPagar=$compra*0.85;
            echo"el valor a pagar incluyendo descuento es de  :   ".$valorPagar;
           
        }
        
    ?>
     <br><br>



    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>