<?php

    include("connection.php");

    $conn = connect();

    $id = $_POST['id'];
    $nombre = $_POST['name'];
    $apell = $_POST['apell'];
    $user = $_POST['user'];

    $sql = "UPDATE register2 SET Nombre = '$nombre', Apellido = '$apell' WHERE ID ='$id'";

    $executeQuery = mysqli_query($conn,$sql);

    if($executeQuery == true) {
        echo "<h1>Se han modificado los datos correctamente</h1>";
    }else {
        echo "<h1>Ha courrido un error</h1>";
    }




?>