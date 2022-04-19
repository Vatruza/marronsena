<?php
    include("con_db.php");
    

if (isset($_POST['register'])) {

    if (strlen($_POST['name']) >= 1 and strlen($_POST['email']) >= 1 and  strlen($_POST['contrasena']) >=  1  ) {
    $name= trim($_POST['name']);
    $correo= trim($_POST['email']);
    $contrasena= trim($_POST['contrasena']);
    $fechaReg=date("d/m/y");
    $consulta="INSERT INTO datos( nombre, correo, contrasena, fechaReg) VALUES ('$name','$correo','$contrasena','$fechaReg')";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        ?> 
        <h3 class="ok">¡Te has inscripto correctamente!</h3>
       <?php
    } else {
        ?> 
        <h3 class="bad">¡Ups ha ocurrido un error!</h3>
       <?php
    }
}   else {
        ?> 
        <h3 class="bad">¡Por favor complete los campos!</h3>
       <?php
}
}




?>