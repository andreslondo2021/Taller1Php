<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 5</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N5#</h1>
    <p>Lea la distancia (en kilómetros) recorrida por un auto, el tiempo (en horas) en que la recorrió y calcule la velocidad a la cual se desplazaba el auto (V=D/T).
</p>

    <div>
    <form  name="punto5" action="../Php/Punto5.php" method="POST">


        
        <input type="number" name="distancia" id="" placeholder="Ingrese distancia en KM" min="1" >
        <input type="number" name="tiempo" id="" placeholder="Ingrese tiempo en Horas" min="1">
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
    $velocidad=0;
         if(isset($_POST['calcular'])){
            
            $distancia=$_POST['distancia'];
            $tiempo=$_POST['tiempo'];
            $velocidad=round($distancia/$tiempo,2);         
       
        }
    ?>
    <label>La velocidad que se lleva es de : <b><?php echo $velocidad ?></b></label><br><br>



    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>