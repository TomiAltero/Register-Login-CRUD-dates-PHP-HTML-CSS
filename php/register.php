<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style-register.css">
    <title>Document</title>
</head>
<body>

        
    <div class="modal">
        <div class="container">
            <h1>Registrar Usuario</h1>
            <div class="message-div">
            <p class="p-message">Ya tienes una cuenta? <a class="a-message" href="login.php">Inicia sesión</a></p>
            </div>
            <div class="model-inputs">
            <hr>

            <form action="insert.php" action="page.php" method="POST" class="modal-content">
            <label for="lblName"><b>Nombre Completo:</b></label>
            <input type="text" placeholder="Ingrese su nombre completo" name="name" required>

            <label for="lblApellido"><b>Apelllido completo: </b></label>
            <input type="text" placeholder="Ingrese su apellido completo" name="lastname" required>

            <label for="lblUsername"><b>Nombre de usuario:</b></label>
            <input type="text" name="username" placeholder="Ingrese su nombre de usuario" required>

            <label for="lblPassword"><b>Contraseña</b></label>
            <input type="password" name="password" placeholder="Ingrese su contraseña" required>

            <label for="lblMail"><b> Mail:</b></label>
            <input type="text" name="email" placeholder="Ingrese su mail" required>

            <div class="container-button">
                <input type="submit" value="Ingresar" class="btn-submit">
                <input type="submit" value="Cancelar registro" class="btn-delete">

            </div>


            </form>
            </div>
        </div>
        </div>
</body>
</html>
