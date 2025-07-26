<?php

    require 'includes/app.php';

    use App\Propiedad;

// Validar el ID de la propiedad
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);
    if(!$id){
        header('Location: /');
    }

    $propiedad = Propiedad::find($id);
   
   
   




incluirTemplate('header', $start = null);
?>

    <!-- Main -->
    <main class="container seccion contenido-centrado">
        <h1><?php echo $propiedad->titulo; ?></h1>

            <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen . ".jpg"; ?>" alt="imagen de la propiedad">
        

        <div class="resume-propiety">
            <p class="price">$ <?php echo $propiedad->precio; ?></p>
            <ul class="icons-characteristics">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="Icono WC">
                    <p><?php echo $propiedad->wc; ?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="Icono icono_estacionamiento">
                    <p><?php echo $propiedad->estacionamiento; ?></p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="Icono dormitorio">
                    <p><?php echo $propiedad->habitaciones; ?></p>
                </li>

            </ul>
            <p> <?php echo $propiedad->descripcion; ?></p>

        </div>
    </main>

    <!-- Footer -->
<?php
incluirTemplate('footer'); 
?>