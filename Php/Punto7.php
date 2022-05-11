<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 7</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N7#</h1>
    <p>Dada una cantidad de tiempo medida en horas, minutos y segundos, diga a cuántos segundos equivale.</p>

    <div>
    <form  name="punto7" action="../Php/Punto7.php" method="POST">


        
        <input type="number" name="horas" id="" placeholder="Horas" min="1" >
        <input type="number" name="minutos" id="" placeholder="Minutos" min="1" >
        <input type="number" name="segundos" id="" placeholder="Segundos" min="1" >
      
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
        $conver=0;
         if(isset($_POST['calcular'])){
            
            $horas=$_POST['horas'];
            $minutos=$_POST['minutos'];
            $segundos=$_POST['segundos'];
           
            $conver=(($horas*60)*60+($minutos*60)+$segundos);
            echo "Los segundos calculados fueron ".$conver;
        }
    ?>
     <br><br>



    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>