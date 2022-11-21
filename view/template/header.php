<head>
    <link rel="stylesheet" href="public/styles/estilos/frtv.css">
</head>

<a class="header-posicion" href="./?op=vprincipal">
    <img class="logoutp" src="public/Images/imagesPP/logo_utp.jpg" alt="Logo utp">
    <h1>Asistencia UTP</h1>
</a>
    
<a class="header-posicion" href="./?op=<?php echo md5("vperfil") ?>">
    <img class="icono-user" src="public/Images/imagesPP/icon-user.png" alt="icono de usuario">
    <p class="nombre-prof"><?php echo $_SESSION['user_name']; ?></p>
</a>