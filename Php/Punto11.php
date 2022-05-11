<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 11</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N11#</h1>
    <p>
        
        Un alumno desea saber cuál será su calificación final en la materia de Algoritmos. <br>
         Dicha calificación se compone de los siguientes porcentajes: <br>
        55% del promedio de sus tres calificaciones parciales. <br>
        30% de la calificación del examen final. <br>
        15% de la calificación de un trabajo final <br>

    </p>

    <div>
    <form  name="punto11" action="../Php/Punto11.php" method="POST">


        <label for=""> calificaciones</label>
        <input type="number" name="nota1" id="" placeholder="nota 1" min="1" >
        <input type="number" name="nota2" id="" placeholder="nota 2" min="1" >
        <input type="number" name="nota3" id="" placeholder="nota 3" min="1" >
        <br><br><br>
        <label for="">Examen final</label>
        <input type="number" name="examen" id="" placeholder="examen" min="1" >
        <br><br><br>
        <label for="">Trabajo Final</label>
        <input type="number" name="trabajofinal" id="" placeholder="trabajo final" min="1" >
      
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