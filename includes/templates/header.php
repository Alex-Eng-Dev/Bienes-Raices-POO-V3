<?php 


    if(!isset($_SESSION)){
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">

</head>
<body>
    <!-- Header -->
    <header class="header <?php echo $start ? 'start' : ''; ?>">
        <div class="container content-header">

            <div class="bar">
                <a href="/">
                    <img src="/build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>
                 <!-- Menu Hamburguesa -->
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>
                <!-- Navegacion -->
                 <div class="dere">
                    <img class="dark-mode-button" src="/build/img/dark-mode.svg" alt="oscurecer">
                     <nav class="navigation ">
                         <a href="nosotros.php">Nosotros</a>
                         <a href="anuncios.php">Anuncios</a>
                         <a href="blog.php">Blog</a>
                         <a href="contacto.php">Contacto</a>
                         
                         <?php if($auth): ?>
                            <a href="cerrar-sesion.php">Cerrar Sesion</a>

                         <?php endif; ?>


                     </nav>

            </div>
        </div>
        <?php echo $start ? '<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>' : '' ?>
    </header>