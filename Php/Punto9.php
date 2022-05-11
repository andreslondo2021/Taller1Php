<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 9</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N9#</h1>
    <p>Un vendedor recibe un sueldo base más un 10% extra por comisión de sus ventas, el vendedor desea saber cuánto dinero obtendrá por concepto de comisiones por las tres ventas que realiza en el mes y el total que recibirá en el mes tomando en cuenta su sueldo base y comisiones.</p>

    <div>
    <form  name="punto8" action="../Php/Punto9.php" method="POST">


        
        <input type="number" name="base" id="" placeholder="base ingreso" min="1" >
       
      
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
       $comision=0;
         if(isset($_POST['calcular'])){
            
            $base=$_POST['base'];
          
            $comision=$base*1.10;
            echo"el sueldo incluyendo la comision es de :   ".$comision;
           
        }
        
    ?>
     <br><br>



    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>