<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

    <title>Marrón Sena | Agregar producto</title>
    <meta name="descripcion" content="Sena Cento de diseño y manofactura del cuero">
    <meta name="autor" content="Juan Mejia">
    <link rel="shortcut icon" href="../img/sombrero.png" type="image/x-icon">

	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/agregar-producto.css">
</head>  
<body>
    <form class="formulario" method="POST" action="agregar_producto.php" enctype="multipart/form-data">
        <h1>Agregar un producto</h1>
        <div class="contenedor">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input class="form-control form-control-lg" id="nombre" name="nombre" placeholder="Ingresa un nombre" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input class="form-control form-control-lg" id="descripcion" name="descripcion" placeholder="Descripcion del producto" required>
            </div>

            <div class="form-group">
                <label for="precio">Descripción</label>
                <input type="number" class="form-control form-control-lg" id="precio" name="precio" placeholder="Precio" required>
            </div>

            <div class="form-group">
                <label for="material">Material</label>
                <select class="form-control form-control-lg" id="material" name="material" required>
                    <option value="" selected hidden></option>
                    <option value="Cuero">Cuero</option>
                    <option value="Cuerina">Cuerina</option>
                    <option value="Tela">Tela</option>
                </select>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen</label> <br />
                <input type="file" class="form-control-file form-control-sm" name="imagen" id="imagen" required>
            </div>

            <button type="submit" class="button" name="boton-agregar">Agregar producto</button>
            
            <a class="link" href="../home.php">
                <button type="button" class="button button-cancel mt-16">Cancelar</button>
            </a>
        </div>
    </form>
</body>
</html>