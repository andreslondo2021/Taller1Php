<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 8</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N8#</h1>
    <p>Suponga que un individuo desea invertir su capital en un banco y desea saber cuánto dinero ganará después de un mes si el banco paga a razón de 2% mensual.
</p>

    <div>
    <form  name="punto8" action="../Php/Punto8.php" method="POST">


        
        <input type="number" name="capital" id="" placeholder="Ingrese capital" min="1" >
       
      
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
       $interes=0;
         if(isset($_POST['calcular'])){
            
            $capital=$_POST['capital'];
          
            $interes=$capital*1.02;
            echo"el valor ganado por la inversion es de  ".$interes;
           
        }
        
    ?>
     <br><br>



    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>