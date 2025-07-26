<?php
require 'includes/app.php';
incluirTemplate('header', $start = null);
?>

    <!-- Main -->
    <main class="container seccion">
        <h1>Casas y Depas en Venta</h1>
        <?php 
    $limite =9; // Limite de anuncios a mostrar
    include 'includes/templates/anuncios.php';
        ?>
    </main>

<!-- Footer -->
<?php

incluirTemplate('footer'); 
?>