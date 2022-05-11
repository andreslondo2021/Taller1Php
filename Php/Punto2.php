<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 2</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N2#</h1>
    <p>Lea dos números y calcule el resultado de su suma, resta, multiplicación y división.</p>

    <div>
    <form  name="punto2" action="../Php/Punto2.php" method="POST">


        
        <input type="number" name="num1" id="" placeholder="INGRESE NUM1" min="1" >
        <input type="text" name="num2" id="" placeholder="INGRESE NUM2" min="1">
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
        <select name="operacion">
           <option value="Sumar">Sumar</option>
           <option value="Restar">Restar</option>
           <option value="Multiplicar">Multiplicar</option>
           <option value="Dividir">Dividir</option>
        </select>
     
      
    </form>
    </div>
    <?php 
         if(isset($_POST['calcular'])){
            
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $operacion=$_POST['operacion'];
           switch($operacion){
            case 'Sumar':
                function SUMAR($num1,$num2){$resultado=$num1+$num2; return $resultado;}
                $resultado=$num1+$num2;
                break;
            case 'Restar':
               $resultado=$num1-$num2;
                break;
            case 'Multiplicar':
                $resultado=$num1*$num2;
                break;
            case 'Dividir':
                $resultado=$num1/$num2;
                break;
           }
        }
    ?>
    <label>el resultado  es : <b><?php echo $resultado ?></b></label><br><br>



    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>