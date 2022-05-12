<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 19</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N19#</h1>
    <p>    
    Ingresar, para un estudiante, sus 5 notas de un curso, nombre, programa, ficha.  Hacer un algoritmo que:
    Muestre el nombre



    </p>

    <div>
    <form  name="punto19" action="../Php/Punto19.php" method="POST">


        
        <input type="text" name="estudiante[]" id="nombre" placeholder="Nombre" min="1" >
        <input type="text" name="estudiante[]" id="" placeholder="Curso" min="1" >
        <input type="text" name="estudiante[]" id="" placeholder="programa" min="1" >
        <input type="number" name="estudiante[]" id="" placeholder="ficha" min="1" ><br><br>

        <input type="number" name="nota[]" id="" placeholder="Nota1" min="1" >
        <input type="number" name="nota[]" id="" placeholder="Nota2" min="1" >
        <input type="number" name="nota[]" id="" placeholder="Nota3" min="1" >
        <input type="number" name="nota[]" id="" placeholder="Nota 4" min="1" >
        <input type="number" name="nota[]" id="" placeholder="Nota 5" min="1" >
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
        $suma=0;
        $nota=0;
         if(isset($_POST['calcular'])){
            
          foreach ($_POST['estudiante'] as $e) {
              echo "    ".$e;
          }
          $prom=0;
            foreach ($_POST['nota'] as $n) {
                $suma =$suma+$n;

            }
            echo "resultado".$nota;
            $prom=$suma/5;
            echo"EL PROMEDIO ES DE ".$prom;
          
               
             
        }

        
    ?>
     <br><br>

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>