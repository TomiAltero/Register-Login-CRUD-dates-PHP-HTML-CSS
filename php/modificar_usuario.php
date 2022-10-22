<?php
include("connection.php");
$conn = connect();

$id = $_GET['id'];

$sql = "SELECT ID, Nombre , Apellido , Usuario , Mail FROM register2 WHERE ID = '$id'";

$executeQuery = mysqli_query($conn , $sql);

$row = mysqli_fetch_array($executeQuery);

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
    <div>
        <h1>Modificar usuario</h1>
        <hr>
    </div>
        <div>
            <form action="update-dates.php" method="POST">

                <label for="">ID</label>
                <input type="text" name="id" value="<?=$row['ID']?>">

                <label for="lblName">Nombre completo</label>
                <input name="name" type="text" value="<?=$row['Nombre']?>">

                <label for="lblApellido">Apellido completo</label>
                <input name="apell" type="text" value="<?=$row['Apellido']?>">

                <label for="lblUsuario">Usuario</label>
                <input name="user" type="text" value="<?=$row['Usuario']?>">


                <input type="submit" value="Modificar">

            </form>
        </div>
</body>
</html>