<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 21</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N21#</h1>
    <p>    
    Realice un algoritmo que permita realizar el cálculo del siguiente enunciado, <br>
    se solicita el año de nacimiento del aprendiz, el nombre, la dirección, <br>
     se requiere conocer la edad de la persona y la información completa ingresada. <br> 
    </p>

    <div>
    <form  name="punto21" action="../Php/Punto21.php" method="POST">


       
        <br><br>
        <input type="date" name="aprendiz[]" id="" >
        <input type="text" name="aprendiz[]" id="" placeholder="nombre" min="1" >
        <input type="text" name="aprendiz[]" id="" placeholder="direccion" min="1" >
        <input type="number" name="aprendiz[]" id="" placeholder="edad" min="1" >
        <br><br><br>
      
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
 
      
         if(isset($_POST['calcular'])){
            
              
            foreach ($_POST['aprendiz'] as $e) {
                echo "    ".$e;
                
            }


         
           
        }
        
    ?>
     <br><br>
    
      

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>