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
       $notafinal=0;
         if(isset($_POST['calcular'])){
            
            $nota1=$_POST['nota1'];
            $nota2=$_POST['nota2'];
            $nota3=$_POST['nota3'];
            $examen=$_POST['examen'];
            $trabajofinal=$_POST['trabajofinal'];

            $promnotas=($nota1+$nota2+$nota3)*0.55;
            $promexamen=$examen*0.30;
            $promtrabajo=$trabajofinal*0.15;
            
            $notafinal=$promnotas+$promexamen+$promtrabajo;

           
           
        }
        
    ?>
     <br><br>
     <h2>La nota final es de : <?php echo $notafinal?></h2>



    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>