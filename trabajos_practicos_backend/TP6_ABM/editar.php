<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "tienda_de_ropa");

$id = $_GET['id'];

$consulta = "SELECT * FROM ropa WHERE id = $id";

$respuesta = mysqli_query($conexion, $consulta);

$datos = mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tipo_prenda = $datos['tipo_de_prenda'];
    $marca = $datos['marca'];
    $talle = $datos['talle'];
    $precio = $datos['precio'];
    $imagen = $datos['imagen'];
    ?>

    <h2>modificar</h2>
    <p>Ingrese nuevos datos</p>

    <form action="" method="post" enctype="multipart/form-data">
        <label>Tipo de prenda</label>
        <input type="text" name="tipo_de_prenda" placeholder="tipo de prenda" value="<?php echo "$tipo_prenda"; ?>">
        <label>Marca</label>
        <input type="text" name="marca" placeholder="marca" value="<?php echo "$marca"; ?>">
        <label>Talle</label>
        <input type="text" name="talle" placeholder="talle" value="<?php echo "$talle"; ?>">
        <label>Precio</label>
        <input type="text" name="precio" placeholder="precio" value="<?php echo "$precio"; ?>">
        <label></label>
        <input type="file" name="imagen" placeholder="imagen" value="<?php echo "$imagen"; ?>">
        <input type="submit" name="guardar_cambios" value="Guardar Cambios">
        <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
    </form>

    <?php
    
    if(array_key_exists('guardar_cambios', $_POST)){
        $tipo_prenda = $_POST['tipo_de_prenda'];
        $marca = $_POST['marca'];
        $talle = $_POST['talle'];
        $precio = $_POST['precio'];
        $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $consulta = "UPDATE ropa SET tipo_de_prenda='$tipo_de_prenda', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id='$id'";

    mysqli_query($conexion,$consulta);

    header('location: index.html');
    }

    ?>
    
</body>
</html>