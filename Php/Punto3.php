<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 3</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N3#</h1>
    <p>Dadas las 3 notas de un aprendiz, calcule la definitiva de la asignatura.</p>

    <div>
    <form  name="punto2" action="../Php/Punto3.php" method="POST">


        
        <input type="number" name="nota1" id="" placeholder="NOTA 1" min="1" >
        <input type="number" name="nota2" id="" placeholder="NOTA  2" min="1">
        <input type="number" name="nota3" id="" placeholder="NOTA 3" min="1">
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
         if(isset($_POST['calcular'])){
            
            $nota1=$_POST['nota1'];
            $nota2=$_POST['nota2'];
            $nota3=$_POST['nota3'];
            $definitiva=($nota1+$nota2+$nota3)/3;
            if($definitiva<3.5){
                echo "la nota no alcanzo el promedio minimo";
            }
            else echo"la nota alcanzo o supero el promedio minimo, <b>  felicitaciones !!!!!!!!</b>";
       
        }
    ?>
    <label>el resultado  es : <b><?php echo $definitiva ?></b></label><br><br>



    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>