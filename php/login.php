<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_login.css">
    <title>Document</title>
</head>
<body>
        <div class="div-form">
            <form class="form-class" action="page.php" method="post">
                
            <div class="div-title">
                <h1>Inicia Sesión</h1>
                <div class="container-message1">
                <p class="p-message-register">¿Desea registrarse? <a class="a-message-register" href="register.php">Regístrate</a></p>
                </div>
                <hr>
            </div>
            
            <div class="container-input">
                <label for="lblUsername">Nombre de usuario</label>
                <input type="text" name="username" placeholder="Ingrese el nombre de usuario correspondiente">

                <label for="lblPassword">Contraseña</label>
                <input type="text" name="password" placeholder="Ingrese la contraseña correspondiente">
                </div>

                <div class="container-button">
                
                <input type="submit" value="Ingresar" class="btn-submit">
            </div>
            </form>

        </div>
</body>
</html>

