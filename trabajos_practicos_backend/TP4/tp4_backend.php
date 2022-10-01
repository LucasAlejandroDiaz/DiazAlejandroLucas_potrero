<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>TP4 Tarea N°5</h1>
    <h3>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h3>
    <?php
     $array = [1,2,3,4,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20];
     print "array par" . "</ br>";
     foreach($array as $n_par) {
        if($n_par % 2 == 0) {
            print "<br>" . $n_par . "</ br>";

        }
     }
    
    ?>
    <h3>2.Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. Mostrar el esquema del array con print_r().</h3> 
    <?php
     $datos = ["Pedro","Ana",34,1];
     print "<pre>";
     print_r($datos);
     print "<pre>";
    ?>
    
    <h3>3. Crear un array asociativo e introducir los siguientes valores:
        Nombre: Pedro
        Apellido: Torres
        Dirección: Av. Mayor 3703
        Teléfono: 1122334455</h3>
     <?php
     $datos = [
        'Nombre'=> "Pedro",
        'Apellido'=> "Torres",
        'Dirección'=> "Av.Mayor 3703",
        'Teléfono'=> "1122334455",
        ];
       foreach ($datos as $indice => $datos_asoc ){
        print "\n" . "$indice: $datos_asoc" . "\n";
       }
     ?>
    
    <h3>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</h3>
    <?php
    $city = ["Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago"];
    foreach($city as $indice => $cities){
        print "\n" . "La ciudad con el índice $indice tiene el nombre de $cities" . "\n";
    }
    ?>
    
    <h3>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.Ejemplo: El índice de Madrid es MD.</h3>
    <?php
    $city = [
        'MD' => "Madrid",
        'BCL' => "Barcelona",
        'LD' => "Londres",
        'NY' => "New York",
        'LA' => "Los Ángeles",
        'CCG' => "Chicago"

        ];
    foreach($city as $indice => $cities) {
        print "\n" . "El índice de $cities es $indice" . "\n";
    }
    ?>
</body>
</html>
