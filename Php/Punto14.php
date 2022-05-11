<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 14</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N14#</h1>
    <p>    
    Se trata de escribir el algoritmo que permita emitir la factura correspondiente a una compra de varios artículos
     (4) determinados, del que se adquieren una o varias unidades. El IVA es del 19%. 
    </p>

    <div>
    <form  name="punto14" action="../Php/Punto14.php" method="POST">


        
        <input type="number" name="cantidad" id="" placeholder="cantidad" min="1" >
        <input type="number" name="valor" id="" placeholder="valor" min="1" >
       <select name="articulo" id="">
           <option value="banano">BANANO</option>
           <option value="arroz">ARROZ</option>
            <option value="aguacate">AGUACATE</option>
            <option value="mango">MANGO</option>
       </select>
      
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
            $contador=0;
            $totaliva=0;
         if(isset($_POST['calcular'])){
            
            $cantidad=$_POST['cantidad'];
            $valor=$_POST['valor'];
            $articulo=$_POST['articulo'];

           switch ($articulo) {
               case 'banano':
                   $totaliva=($valor*1.19);
                  
                   break;
               
               case'arroz':
                $totaliva=($valor*1.19);
                   break;
                   case'aguacate':
                    $totaliva=($valor*1.19);
                    break;
                    case'mango':
                        $totaliva=($valor*1.19);
                        break;
           }
        }
        
    ?>
     <br><br>
    
        <h3>el valor a pagar es de : <?php echo $totaliva;?> </h3>

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>