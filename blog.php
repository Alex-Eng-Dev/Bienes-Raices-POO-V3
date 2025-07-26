<?php
require 'includes/app.php';
incluirTemplate('header', $start = null);
?>

    <!-- Main -->
    <main class="container seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entry-blog">
                <div class="imag">
                    <picture >
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Entrada Blog">
                    </picture>
                </div>
                <div class="text-entry">
                    <a href="entrada.php">
                    <h4>Terraza en el Techo de tu casa</h4>
                </a>
                    <p class="info-meta">Escrito el: <span>28/05/2025</span>por: <span>Admin</span></p>
                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                </div>
            </article>

            <article class="entry-blog">
                <div class="imag">
                    <picture >
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Entrada Blog">
                    </picture>
                </div>
                <div class="text-entry">
                    <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                </a>
                    <p class="info-meta">Escrito el: <span>28/05/2025</span>por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </div>
            </article>
            <article class="entry-blog">
                <div class="imag">
                    <picture >
                        <source srcset="build/img/blog3.webp" type="image/webp">
                        <source srcset="build/img/blog3.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog3.jpg" alt="Entrada Blog">
                    </picture>
                </div>
                <div class="text-entry">
                    <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                </a>
                    <p class="info-meta">Escrito el: <span>28/05/2025</span>por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </div>
            </article>
            <article class="entry-blog">
                <div class="imag">
                    <picture >
                        <source srcset="build/img/blog4.webp" type="image/webp">
                        <source srcset="build/img/blog4.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog4.jpg" alt="Entrada Blog">
                    </picture>
                </div>
                <div class="text-entry">
                    <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                </a>
                    <p class="info-meta">Escrito el: <span>28/05/2025</span>por: <span>Admin</span></p>
                    <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                </div>
            </article>
    </main>

<!-- Footer -->
  <?php

incluirTemplate('footer');  
?>