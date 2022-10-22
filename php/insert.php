<?php
    include("connection.php");

    $conn = connect();

    $id = null;
    $nombre = $_POST['name'];
    $apellido = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $password_enc = hash('sha512', $password);

    $sql = "INSERT INTO register2(ID , Nombre , Apellido , Usuario , Contraseña , Mail) 
    VALUES ('$id','$nombre','$apellido','$username','$password_enc','$email')";
    
   
    $verificarUser = mysqli_query($conn,"SELECT * FROM register2 WHERE Usuario = '$username'");

        if(mysqli_num_rows($verificarUser)> 0) {
        echo "<script>
        alert('Este usuario ya existe');
        window.location(register.php);
        </script>
    "   ;
        exit();

    }
    $conteo_pal = str_word_count($username);

    if($conteo_pal >= 2) {
        echo "<script>
        alert('No se permite el uso de espacio en blanco');
        window.location(register.php);
        </script>
    "   ;
    exit();
    }



    if (strlen($nombre)>0 && strlen($nombre) < 5) {
        echo "<script>
        alert('El nombre posee menos de 5 caracteres');
        window.location(register.php);
        </script>
    "   ;
        exit();
        
    }

    $patron = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";


    for($i = 0; $i < strlen($username); $i++) {
        if(strpos($patron , substr($username , $i , 1))=== false) {
            echo "<script>
            alert('No se permiten caracteres especiales');
            window.location(register.php);
            </script>
        "   ;
        exit();
        } 
    }


    $queryInsert = mysqli_query($conn , $sql);
    if($queryInsert == true) {
        header("Location: login.php");

    }else {
        echo "<h3>Ha ocurrido un error</h3>";

    }

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
        
</body>
</html>