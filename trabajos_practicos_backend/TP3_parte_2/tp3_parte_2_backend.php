<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3: parte 2</title>
</head>
<body>
    <h1>Tarea N°4: estructuras de control parte 2</h1>
    <h3>1. Mostrar los números del 1 al 100</h3>
    
    <?php
    for ($i = 1 ; $i<=100; $i++) {
        echo $i . "-\n"; 
    }
    ?>
    
    <h3>2. Mostrar los números del 100 al 1</h3>
    
    <?php
    for ($i = 100 ; $i>=1; $i--) {
        echo $i . "-\n"; 
    }
    ?>
    
    <h3>3. Mostrar los números pares del 1 al 100</h3>
    
    <?php
    for ($i = 2 ; $i<=100; $i = $i + 2) {
        echo $i . "-\n"; 
    }
    ?>
    
    <h3>4. Mostrar los números impares del 1 al 100</h3>
    
    <?php
    for ($i = 1 ; $i<=100; $i = $i + 2) {
        echo $i . "-\n"; 
    }
    ?>
    
    <h3>5. Mostrar la suma de los números de 1 a 20</h3>
    
    <?php
    $i = 1;
    while ($i <= 20  ) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        echo "<br>" . $i . "-\n" . "$num1 +" . "\n" . "$num2" . "\n" . "= " . $num1 + $num2. "<br />"; 
         $i++;
    }
    ?>
    <!-- Alternativa usando FOR -->
          <?php
            for ($i=1; $i<=20; $i++) {
             $num1 = rand(1,20);
             $num2 = rand(1,20);
            //  echo "<br />" . $i . "-\n" . "$num1 +" . "\n" . "$num2" . "\n" . "= " . $num1 + $num2 . "<br />";
             }
          ?>

    <h3>6. Mostrar la suma de números pares de 1 a 20</h3>
    
    <?php
    $i = 1;
    while ($i <= 20  ) {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        if ($num1%2 == 0 && $num2%2 == 0) {
        echo "<br>". $i . "-\n" . "$num1 + " . "\n" . " $num2" . "\n" . "= " . $num1 + $num2. "<br />"; 
         $i++;
        }
    }
    ?>
    
</body>
</html>