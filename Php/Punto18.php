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


        
        <input type="number" name="salario" id="" placeholder="salario" min="1" >
        <input type="number" name="ahorros" id="" placeholder="ahorros mensual" min="1" >
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
      
         if(isset($_POST['calcular'])){
            
           
            $Salario = $_POST["salario"];
            $AhorroM = $_POST["ahorros"];
        
         
           
        }
        
    ?>
     <br><br>
    
        <h3>salario : <?php echo $Salario;?> </h3><br><br>


    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>