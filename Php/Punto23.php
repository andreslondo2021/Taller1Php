<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 23</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N23#</h1>
    <p>    
    Una persona tarda 5 horas en subir una montaña de 7 metros, <br>
     si un escalador desea subir más o menos de la montaña, <br>
      cuanto tiempo tarda en subir. Debe de resolver el ejercicio.  <br>



    </p>

    <div>
    <form  name="punto23" action="../Php/Punto23.php" method="POST">


        
        <input type="number" name="altura" id="" placeholder="Ingrese altura" min="1" >
      
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
      
        $tiempo=5;
        $altura2=7;
         if(isset($_POST['calcular'])){
            
           
            $altura = $_POST["altura"];

            $resultado=round(($altura*$tiempo)/$altura2,2);
            echo "lo que se demora es ".$resultado. "Horas";
        }
        
    ?>
     <br><br>

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>