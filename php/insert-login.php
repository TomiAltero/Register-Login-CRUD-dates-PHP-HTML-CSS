<?php
    include("connection.php");
    $conn = connect();
    

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($conn , "SELECT * FROM register2 WHERE Usuario = '$username' and Contraseña = '$password'");

    $num_fila = mysqli_num_rows($login);
    if($num_fila > 0) {
        
    }else {
        echo "<h3>Ocurrio un problema</h3>";
        exit();
    }
?>
