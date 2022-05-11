<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 17</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N17#</h1>
    <p>    
    Desarrollar un algoritmo que permita generar la colilla de pago de los empleados de una empresa. La colilla debe mostrar:
    El Salario del Empleado <br>
    El Valor de Ahorro mensual programado.<br>
    La suma a deducir por aporte a la Salud (EPS) 12,5 % <br>
    La suma a deducir por aporte al Fondo de Pensiones 16% <br>
    Total a Recibir <br>
    Toda la información que debe proveer el usuario del programa es el Salario del Empleado y el Valor de Ahorro mensual programado.<br>
    El programa debe calcular y devolver el resto de los datos.4


    </p>

    <div>
    <form  name="punto17" action="../Php/Punto17.php" method="POST">


        
        <input type="number" name="salario" id="" placeholder="salario" min="1" >
        <input type="number" name="ahorros" id="" placeholder="ahorros mensual" min="1" >
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
        $totalRecibir=0;
       
        $salarioDecrementado=0;
        $salud=0;
         if(isset($_POST['calcular'])){
            
           
            $salario=$_POST['salario'];
            $ahorros=$_POST['ahorros'];
           $salarioDecrementado=$salario-$ahorros;
            $salud=$salarioDecrementado*0.875;

         
           
        }
        
    ?>
     <br><br>
    
        <h3>salario : <?php echo $total;?> </h3><br><br>
        <h3>valor ahorro : <?php echo $salarioDecrementado;?> </h3><br><br>
        <h3>aporte salud : <?php echo $salud;?> </h3><br><br>
        <h3>aporte pensiones : <?php echo $total;?> </h3><br><br>
        <h3>salario : <?php echo $total;?> </h3><br><br>
        <h3>total recibir : <?php echo $totalRecibir;?> </h3><br><br>

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>