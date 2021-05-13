<?php
 include 'conexion_be.php';

 $nombre_completo = $_POST['nombre_completo'];
 $correo = $_POST ['correo'];
 $usuario = $_POST ['usuario'];
 $contraseña = $_POST ['contraseña'];
 $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,contraseña)       VALUES('$nombre_completo','$correo','$usuario','$contraseña')";

 $ejecutar = mysqli_query($conexion,$query);
 if ($ejecutar){
     ?>
     <h3 class="ok">¡estas registrado correctamente!</h3>
     <?php
 } else{
     ?>
     <h3 class="bad">¡ups ha ocurrido un error¡</h3>
     <?php
 } 
?>