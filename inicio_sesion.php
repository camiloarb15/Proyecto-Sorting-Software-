<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/back.svg">
        </div>
        <div class="login-content">
            <form action="evaluar.php" method="post">
                <img src="img/icon1.svg">
                <h2 class="title">Bienvenido</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Documento</h5>
                        <input type="text" name="documento" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Contraseña</h5>
                        <input type="password" name="contrasena" class="input">
                    </div>
                </div>
                <a href="#" id="abrir">Olvido su contraseña?</a>
                <input type="submit" class="btn" value="Iniciar sesion">
                <?php
                @$error = $_GET["error"];
                if ($error == "error") {

                    echo "<p style='color:red'>Error en los datos de acceso</p>";
                }

                ?>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>