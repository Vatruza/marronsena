<?php
    include("../php/con_db.php");
    
    $nombre = trim($_POST['nombre']);
    $descripcion = trim($_POST['descripcion']);
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $precio = trim($_POST['precio']);
    $material = trim($_POST['material']);

    $consulta = "INSERT INTO productos ( nombre, descripcion, imagen, precio, material ) VALUES ('$nombre','$descripcion','$imagen','$precio','$material')";
    $resultado = mysqli_query($conex,$consulta);

    if ($resultado) {
        echo "<script> alert('¡Te has inscripto correctamente!') </script>";
        header("Location: ../home.php");
    } else {
        echo "<script> alert('¡Ups ha ocurrido un error!') </script>";
        header("Location: ./index.php");
    }
?>