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



    $queryInsert = mysqli_query($conn , $sql);
    if($queryInsert == true) {
        echo "<h3>Se han agregado los datos correctamente</h3>";
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