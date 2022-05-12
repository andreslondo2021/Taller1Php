<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 20</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N20#</h1>
    <p>    
    20) Ingresar el precio de compra unitario de un producto y la cantidad de compra de dicho producto y un descuento. <br>
    Calcular y mostrar el subtotal, el monto del IVA que es el 19% del subtotal,  <br>
    y el precio neto (precio parcial con el Monto del IVA).
    </p>

    <div>
    <form  name="punto20" action="../Php/Punto20.php" method="POST">


        <h5><b>descuento del 10%</b></h5>
        <br><br>
        <input type="text" name="producto" id="" placeholder="producto" min="1" >
        <input type="number" name="unitario" id="" placeholder="precio unitario" min="1" >
        <input type="number" name="cantidad" id="" placeholder="cantidad producto" min="1" >
        <br><br><br>
      
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
     $subTotal=0;
     $precioNeto=0;
      
         if(isset($_POST['calcular'])){
            
           
            $producto = $_POST["producto"];
            $cantidad=$_POST["cantidad"];
            $unitario=$_POST["unitario"];

            $subTotal=($cantidad*$unitario)*0.90;
            $precioNeto=$subTotal*1.19;



         
           
        }
        
    ?>
     <br><br>
    
        <h3>Subtotal  : <?php echo $subTotal;?> </h3><br><br>
        <h3>Precio Neto: <?php echo $precioNeto;?> </h3><br><br>
      

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>