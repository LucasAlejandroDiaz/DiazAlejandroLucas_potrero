<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzos</title>
</head>
<body>
<h1>Tienda de ropa</h1>
    <button type="submit"><a href="index.html">Inicio</a></button>
    <button type="submit"><a href="listar.php">Listar ropa</a></button>
    <button type="submit"><a href="buzo.php">buzos</a></button>
    <button type="submit"><a href="nike.php">Nike</a></button>
    <button type="submit"><a href="mayor_a_500.php">Precios mayores a 500</a></button>

    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
    </tr>
    
    <?php
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "tienda_de_ropa");
    
    $consulta = "SELECT * FROM ropa WHERE tipo_de_prenda = 'buzo'";
    
    $datos = mysqli_query($conexion, $consulta);

    while ( $reg = mysqli_fetch_array($datos) ) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['tipo_de_prenda']; ?></td>
        <td><?php echo $reg['marca']; ?></td>
        <td><?php echo $reg['talle']; ?></td>
        <td><?php echo $reg['precio']; ?></td>
        </tr>
    <?php } ?>
    </table>
    
</body>
</html>