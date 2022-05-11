<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 1</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N1#</h1>
    <p>Lea tres números y calcule el resultado de su suma.</p>

    <div>
    <form  name="punto1" action="../Php/Punto1.php" method="POST">


        
        <input type="number" name="num1" id="" placeholder="INGRESE NUM1" min="1" >
        <input type="text" name="num2" id="" placeholder="INGRESE NUM2" min="1">
        <input type="text" name="num3" id="" placeholder="INGRESE NUM3" min="1">
        <button type="submit" class="btn btn-primary" value="sumar" name="sumar">Sumar</button>
        <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
    </form>
    </div>
    <?php 
         if(isset($_POST['sumar'])){
            
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $num3=$_POST['num3'];
            $suma=$num1+$num2+$num3;
        }
    ?>
    <label>La suma de los numeros es : <b><?php echo $suma ?></b></label>
</body>
</html>