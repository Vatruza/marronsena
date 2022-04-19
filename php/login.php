<?php
include("con_db.php");





if (isset($_POST['login_boton'])) {

    $CORREO = $_POST["correo"];
    $CONTRASENA = $_POST["contrasena"];

    $consulta = "SELECT * FROM datos WHERE correo ='$CORREO' and contrasena = '$CONTRASENA'";
    $resultado = mysqli_query($conex, $consulta);

    $filas =  mysqli_num_rows($resultado);



    if ($filas) {
        header("location:home.php");
    } else {

        ?> 
        <h3 class="bad">¡Usuario o Contraseña Incorrecta!</h3>
       <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conex);

}
        ?>