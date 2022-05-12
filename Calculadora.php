<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora en php</h1>
    <div class="Contenedor">
        <form method="POST">
        Numero 1: <input type="Number" name="numero1" value="0"max="1000" min="-1000">    
        Numero 2: <input type="Number" name="numero2" value="0"max="1000" min="-1000">
        <hr>
        <input type="radio" name="opcion" value="Sumar">Sumar
        <input type="radio" name="opcion" value="Dividir">Dividir
        <input type="radio" name="opcion" value="Multiplicar">Multiplicar
        <input type="radio" name="opcion" value="Restar">Restar
        <input type="radio" name="opcion" value="Concatenar">Concatenar
        <input type="radio" name="opcion" value="Potencializar">Potencializar
        <hr>
        <input type="submit"class="btn btn-success w-25" value="Calcular">    
        <input type="reset"class="btn btn-primary w-25" value="AC">  
    </form>
    <div>
        <?php
        if ($_POST){
            $n1 = $_POST['numero1'];
            $n2 = $_POST['numero2'];
            $opcions = $_POST['opcion'];
              
            function suma($n1,$n2){
                $sumar= $n1+$n2; 
                echo $sumar;
                echo "<br>";
            }


            function resta($n1,$n2){
                $resta= $n1-$n2; 
                echo $resta;
                echo "<br>";
            }
          
           
            function multiplicacion($n1,$n2){
                $multiplicacion= $n1*$n2; 
                echo $multiplicacion;
                echo "<br>";
            }
          


            function Division($n1,$n2){
                $division= $n1/$n2; 
                echo $division;
                echo "<br>";
            }

            function Potencializar($n1,$n2){
                $Potencial= $n1^$n2; 
                echo $Potencial;
                echo "<br>";
            }

            function Concatenar($n1,$n2){
                $concate= $n1.$n2; 
                echo $concate;
                echo "<br>";
            }
            
            switch ($opcions){
            case"Sumar":
            echo"El resultado es: ",suma($n1,$n2);
            break;
            case"Restar":
            echo"El resultado es: ",resta($n1,$n2);
            break;
            case"Multiplicar":
            echo"El resultado es: ",multiplicacion($n1,$n2);
            break;
            case"Dividir":
            echo"El resultado es: ",Division($n1,$n2);
            break;
            case"Concatenar":
            echo"El resultado es: ",Concatenar($n1,$n2);
            break;
            case"Potencializar":
            echo"El resultado es: ",Potencializar($n1,$n2);
            break;
            }

        }
        
    ?>
    </div>
    </div>
</body>
</html>