
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


    $queryDates = mysqli_query($conn , "SELECT ID ,Nombre , Apellido ,Usuario, Mail FROM register2");

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style_page.css">
</head>
<body>

    <div class="container-title">
        <h2 class="h-class">Usuarios registrados</h2>
        <hr>
    </div>

    <div class="container-table">

    <table class="table">

    <tr class="first-row">
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Usuario</th>
    <th>Mail</th>
    </tr>

    <?php
    while($row = mysqli_fetch_array($queryDates)):
    ?>


    <tr>
        <td><?=$row['ID']?></td>
        <td><?=$row['Nombre']?></td>
        <td><?=$row['Apellido']?></td>
        <td><?=$row['Usuario']?></td>
        <td><?=$row['Mail']?></td>
        <td><a class="a-update" href="modificar_usuario.php?id=<?=$row['ID']?>">Modificar</a></td>
        <td><a class="a-delete" href="<?=$row['ID']?>">Eliminar</a></td>
    </tr>
    

    <?php endwhile?>
    </table>
    </div>
</body>
</html>

