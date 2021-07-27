<?php

    session_start();
    include 'conexion.php';

    $correo = $_POST['correo'];
    $pass = $_POST['password'];
    $pass = hash("sha512", $pass);

    $verificar = mysqli_query($conexion, "SELECT * FROM usuariosdm WHERE correo ='$correo' and password='$pass'");


    if(mysqli_num_rows($verificar)>0){
        $_SESSION['usuario'] = $correo;
        header("location: ../index.php");
        exit();
    }else{
        echo'<script>
            alert("Usuario y contraseña incorrecto");
            window.location = "../login.php";
        </script>';
        exit();
    }
    

?>