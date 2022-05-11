<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 13</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N13#</h1>
    <p>    
    Dada las horas trabajadas de una persona y el valor por hora. Calcular su salario e imprimirlo. 
    </p>

    <div>
    <form  name="punto13" action="../Php/Punto13.php" method="POST">


        
        <input type="number" name="h" id="" placeholder="Horas T" min="1" >
        <input type="number" name="valor" id="" placeholder="Valor" min="1" >
      
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
       $total=0;
     
         if(isset($_POST['calcular'])){
            
            $h=$_POST['h'];
            $valor=$_POST['valor'];

           $total=$h*$valor;
           
        }
        
    ?>
     <br><br>
    
        <h3>el valor a pagar es de : <?php echo $total;?> </h3>

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>