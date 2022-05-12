<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Punto 24</title>
</head>
<body>
    <h1>Bienvenidos al ejercicio N24#</h1>
    <p>    
    Un estudiante realiza un préstamo a un plazo de 5 años, donde la tasa fija de interés es del 5% anual, <br>
     se debe solicitar el monto del préstamo y se desea calcular la siguiente información. <br>

 Cuanto dinero se ha pagado de intereses en un año. <br>
 Cuanto dinero se ha pagado de intereses en el tercer trimestre del año.  <br>
 Cuanto dinero se ha pagado de intereses en el primer mes.  <br>
 Cuanto dinero se paga en total del préstamo solicitado incluyendo intereses. <br>





    </p>

    <div>
    <form  name="punto24" action="../Php/Punto24.php" method="POST">


        
        <input type="number" name="monto" id="" placeholder="Ingrese el monto" min="1" >
      
        <br><br><br>
        
        <button type="submit" class="btn btn-primary" value="calcular" name="calcular">Calcular</button>
     
     
      
    </form>
    </div>
    <?php 
      
        $tasaAno=0;
        $tasaTrimestre=0;
        $tasaMes=0;
        $tasaFinal=0;
        
         if(isset($_POST['calcular'])){
            
           
            $monto = $_POST["monto"];

           $tasaAno=$monto+$monto*0.5;
            $tasaTrimestre=(((0.5/9)*$monto)+$monto);
            $tasaMes=(((0.5/12)*$monto)+$monto);
            $tasaFinal=(((0.5*5)*$monto)+$monto);

            echo"<br> La tasa anual es de : ".$tasaAno;
            echo"<br> La tasa trimestral  es de : ".$tasaTrimestre;
            echo" <br> La tasa por mes  es de : ".$tasaMes;
            echo" <br>La tasa de 5 años es de : ".$tasaFinal;
        }
        
    ?>
     <br><br>

    <a href="../Index.html" class="btn btn-danger">Volver</a> <br><br>
</body>
</html>