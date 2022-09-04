<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TP1 </h1>
    <h2>1.Imprima por pantalla Hola Mundo</h2>
    <?php
    echo "Hola Mundo";
    ?>
    <br>
    <hr>
    <h2>2.Cargue en una variable la cadena de caracteres "Hola Mundo" y luego imprima por pantalla</h2>
    <?php
    $world = "Hola Mundo";
    echo $world;
    ?>
    <br>
    <hr>
    <h2>3.Crear 2 variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la divisíon</h2>
    <span>a=20</span>
    <span>b=60</span>
    <br>
    <br>
    <?php
    $a = 20;
    $b = 60;
    $adicion = $a + $b;
    $sustraccion = $b - $a;
    $producto = $a * $b;
    $division = $b / $a;
    $resto = $b % $a;
    echo "El resultado de la suma es: " . $adicion . "<br />";
    echo "El resultado de la resta es: " . $sustraccion . "<br />";
    echo "El resultado de la vision es: " . $producto . "<br />";
    echo "El resultado de la division es: " . $division . "<br />";
    echo "El resultado del resto es: " . $resto . "<br />";
     ?>
    <br>
    <hr>
    <h2>4.Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla</h2>
    <span>La fórmula del pasaje de grados Celsius a Farenheit es °F=°C*1.8+32</span>
    <br>
    <br>
    <span>°F=20°C*1.8+32</span>
    <br>
    <br>
    <?php
    $c = 20;
    $f = $c * 1.8 + 32;
    echo  "El resultado del pasaje de Celsius a Farenheit es: ". $f . "°F";
    ?>
    <h2>5.Implementar algoritmos que permitan:</h2>
    <h3>a.Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura es 12cm</h3>
    <span><strong> La fórmula del perímetro de un rectángulo es: P=2(b+h) donde b es su base y h es la altura</strong></span>
    <br>
    <br>
    <span>P=2(18cm+12cm)</span>
    <br>
    <br>
    <?php
    $b = 18;
    $h = 12;
    $pr = 2*($b+$h);
    echo "El resultado del perímetro del rectángulo es: " . $pr . "cm" ."<br />";
    ?>
    <br>
    <span><strong>La fórmula del área de un rectángulo es: A=b*h donde b es su base y h es la altura</strong></span>
    <br>
    <br>
    <span>A=18cm*12cm</span>
    <br>
    <br>
    <?php
    $ar = $b*$h;
    echo "El resultado del área del rectángulo es: " . $ar . "cm2" . "<br />";
    ?>
    <br>
    <h3>b.Calcular el perímetro y el área de un círculos dado que su radio es 30cm</h3>
    <span><strong>La fórmula del perímetro del círculo es: P=2*pi*r donde pi es igual a 3.14 y r es el radio</strong></span>
    <br>
    <br>
    <span>P=2*3.14*30cm</span>
    <br>
    <br>
    <?php
    $r = 30;
    $pi = 3.14;
    $pc = 2*$pi*$r;
    echo "El resultado del perímetro del círculo es: " . $pc . "cm" . "<br />";
    ?>
    <br>
    <span><strong>La fórmula del área del círculo es: A=pi*r2 donde pi es igual a 3.14 y r es el radio</strong></span>
    <br>
    <br>
    <span>A=pi*r2</span>
    <br>
    <br>
    <?php
    $ac = $pi*$r**2;
    echo "El resultado del área del círculo es: " . $ac . "cm2";
    ?>



    
    
</body>
</html>