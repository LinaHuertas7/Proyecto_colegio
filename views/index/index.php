<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>/public/css/login.css">

    <title>Document</title>
</head>

<body>

    <?php require 'views/header.php'; ?>

    <div class="container_login_page">
        <div class="div_video_login_page">
            <video class="video_login_page" onloadedmetadata="this.muted=true" autoplay loop>
                <source src="../../../proyectoColegio/public/img/video_login.mp4" />
            </video>
        </div>
        <div class="div_form_login_page">
            <i class="fa-solid fa-circle-user"></i>
            <h1>Inicio de Sesión</h1>
            <form class="form_login_page" method="post" action="<?php echo constant('URL'); ?>/views/alertamodal/index.php">
                <label>Usuario:</label>
                <input type="text" id="user" name="user" placeholder="Ingresa tu usuario" />
                <label>Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" />
                <input type="submit" value="ingresar" class="btn_login_page" />
            </form>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>

</body>

</html>