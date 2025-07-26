<?php

    use App\Propiedad;

    

    if($_SERVER['SCRIPT_NAME'] === '/anuncios.php') {
        $propiedades = Propiedad::getAll();
        
    }else{
        $propiedades = Propiedad::getLimit(3);
        
    }
   

?>
<div class="container-ads">
    <?php foreach($propiedades as $propiedad){ ?>

        <div class="ads">

            <img loading="lazy" src="/imagenes/<?php echo $propiedad->imagen . ".jpg" ;?>" alt="anuncio">

            <div class="content-ads">
                <h3><?php echo $propiedad->titulo; ?></h3>
                <p><?php echo $propiedad->descripcion; ?></p>
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
                <a href="anuncio.php?id=<?php echo $propiedad->id; ?>" class="button-yellow-block">
                    Ver Propiedad
                </a>
            </div> <!-- Contenido Anuncios -->
        </div><!-- Anuncios -->
    <?php } ?>
</div><!-- Contenedor Anuncios -->

