<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 16</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N16#</h1>
    <p>    
    Suponga que un conductor le pide a usted que le haga un algoritmo para calcular cuánto le corresponde en un día 
    trabajado, teniendo en cuenta que tiene derecho a el 19% del total recaudado.
 

    </p>

    <div>
    <form  name="punto16" action="../Php/Punto16.php" method="POST">


        
        <input type="number" name="recaudo" id="" placeholder="Valor recaudado" min="1" >
      
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
        $total=0;
         if(isset($_POST['calcular'])){
            
           
            $valor=$_POST['recaudo'];
            $total=$valor*0.19;

         
           
        }
        
    ?>
     <br><br>
    
        <h3>Al trabajador le toca el total de : <?php echo $total;?> </h3>

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>