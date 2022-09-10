<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estructuras de control: parte 1</h1>
     <h2>Ejercicios</h2>
      <h3>1.Crear una variable n y validar que sea un número positivo</h3>
       <?php
        $n = rand(15, -5);
         if ($n >= 0) {
            echo "El número $n es positivo" . "<br />";
        }
        else
        {
            echo "El número $n no es positivo" . "<br />";
        }
       ?>  
      <h3>2.Crear una variable n y validar que sea un número mayor a 1 y menor que 10</h3>
       <?php
        if ($n > 1 && $n < 10) {
            echo "El número $n cumple con la condición" . "<br />";
        }
        else
            echo "El número $n no cumple con la condición" . "<br />"
       ?>
      <h3>3.Crear una variable n y validar que sea un número mayor a 10 o menor que 2</h3>
       <?php
         if ($n > 10 || $n < 2) {
            echo "El número $n cumple con la condición" . "<br />";
        }
        else
            echo "El número $n no cumple con la condición" . "<br />"
       ?>
      <h3>4.Crear 2 variables, una con nombre <i>numero1</i> y otra con el nombre de <i>numero2</i>. Si <i>numero1</i> es mayor a <i>numero2</i>, mostrar por pantalla la suma y la resta. Si <i>numero2</i> es mayor a <i>numero1</i>, mostrar por pantalla la multiplicacion, la división entera y el resto de la división. Si <i>numero1</i> y <i>numero2</i> son iguales, mostrar el siguiente mensaje <i>"Los números ingresados son iguales".</i></h3>
       <?php
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
         echo "num1 es $num1" . "<br />";
         echo "num2 es $num2" . "<br />";

         if ($num1 > $num2) {
            echo "<br>" . "$num1 es mayor que $num2" . "<br />";
            echo "<br>" . "La suma es " . $num1 + $num2 . " y la resta es " . $num1 - $num2 . "<br />";
         }
        elseif ($num2 > $num1) {
            echo "<br>" . "$num2 es mayor que $num1" . "<br />";
            echo "<br>" . "La multiplicación es " . $num2 * $num1 . ", la división es " . $num2 / $num1 . " y el resto es " . $num2 % $num1 . "<br />";
        }
        elseif ($num1 == $num2) {
            echo "<br>" . "Los números ingresados son iguales" . "<br />";
        }
       ?>
    
</body>
</html>