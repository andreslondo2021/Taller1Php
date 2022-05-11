<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 12</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N12#</h1>
    <p>    
    Un maestro desea saber qué porcentaje de hombres y qué porcentaje de mujeres hay en un grupo de alumnos.
    </p>

    <div>
    <form  name="punto12" action="../Php/Punto12.php" method="POST">


        
        <input type="number" name="h" id="" placeholder="hombres" min="1" >
        <input type="number" name="m" id="" placeholder="mujeres" min="1" >
      
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
       $porcentaje=0;
       $PcantidadH=0;
       $PcantidadM=0;
       $cantidadTotal=0;
         if(isset($_POST['calcular'])){
            
            $h=$_POST['h'];
            $m=$_POST['m'];

            $cantidadTotal=$h+$m;
           $PcantidadH=round((100*$h)/$cantidadTotal);
           $PcantidadM=round((100*$m)/$cantidadTotal);

            
            echo "El porcentaje de hombres es :".$PcantidadH ;
            echo "<br>El porcentaje de mujeres es :  ".$PcantidadM;
           
           
        }
        
    ?>
     <br><br>
    


    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>