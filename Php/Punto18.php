<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 18</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N18#</h1>
    <p>    
    En una universidad los estudiantes pueden pagar el valor de su matrícula en cuatro cuotas de la siguiente forma <br> 
    Primera cuota: 40% <br>
    Segunda cuota: 25% <br>
    Tercera cuota: 20%  <br>
    Cuarta cuota: 15% <br>


    </p>

    <div>
    <form  name="punto18" action="../Php/Punto18.php" method="POST">


        
        <input type="number" name="cuota" id="" placeholder="Ingre valor de la cuota" min="1" >
      
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
      $cuota1=0;
      $cuota2=0;
      $cuota3=0;
      $cuota4=0;
         if(isset($_POST['calcular'])){
            
           
            $cuota = $_POST["cuota"];
            $cuota1=$cuota*0.40;
            $cuota2=$cuota*0.25;
            $cuota3=$cuota*0.20;
            $cuota4=$cuota*0.15;
        
         
           
        }
        
    ?>
     <br><br>
    
        <h3>cuota 1  : <?php echo $cuota1;?> </h3><br><br>
        <h3>cuota 2  : <?php echo $cuota2;?> </h3><br><br>
        <h3>cuota 3 : <?php echo $cuota3;?> </h3><br><br>
        <h3>cuota 4  : <?php echo $cuota4;?> </h3><br><br>

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>