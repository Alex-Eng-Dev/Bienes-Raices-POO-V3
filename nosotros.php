<?php
require 'includes/app.php';
incluirTemplate('header', $start = null);
?>

    <!-- Main -->
    <main class="container seccion">
        <h1>Conoce Sobre Nosotros</h1>
        <div class="content-us">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Imagen sobre nosotros">
                </picture>
            </div>
            <div class="text-us">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, soluta assumenda nam recusandae ipsum
                    nostrum saepe quod iusto expedita consequuntur molestias beatae delectus vero laborum magnam
                    quibusdam vitae nihil impedit?
                    Earum et, consectetur illo enim ex explicabo nulla quasi, architecto cum harum deserunt libero nihil
                    atque voluptas vero eos veritatis reprehenderit incidunt. Deleniti, quibusdam ratione exercitationem
                    quos ut voluptas impedit.
                    Necessitatibus debitis quia illum ex animi ab tempore, voluptas fugiat, odio neque quas autem
                    voluptatibus et, eos obcaecati unde dolor nihil! Asperiores, quasi debitis sed obcaecati magni
                    eligendi fugit reiciendis.</p>
                
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nesciunt voluptas iste mollitia
                    possimus? Iure soluta quo rem facilis autem, recusandae odio vitae ea libero accusamus sapiente
                    ipsum nisi pariatur.
                    Ipsa, amet. Placeat totam natus corrupti impedit eum voluptas aspernatur et assumenda tempore,
                    tenetur corporis qui, veritatis velit dolorum enim hic sequi? Magni vero ratione fugit quidem vitae
                    vel? Laborum.</p>
            </div>
        </div>
    </main>

    <section class="container seccion">
        <h1>Mas Sobre Nosotros</h1>
        <!-- Iconos -->
        <div class="icons-us">
            <!-- Candado -->
            <div class="icon">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum voluptate ut laboriosam in vel
                    nisi, incidunt, asperiores sit vero quis ullam dolore voluptas? Rerum ratione dolorum autem
                    reiciendis. Dolores, laboriosam?</p>
                </div>
                <!-- Billete -->
                <div class="icon">
                    <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                    <h3>Precio</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum voluptate ut laboriosam in vel
                        nisi, incidunt, asperiores sit vero quis ullam dolore voluptas? Rerum ratione dolorum autem
                        reiciendis. Dolores, laboriosam?</p>
                    </div>
                    <!-- reloj -->
            <div class="icon">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum voluptate ut laboriosam in vel
                    nisi, incidunt, asperiores sit vero quis ullam dolore voluptas? Rerum ratione dolorum autem
                    reiciendis. Dolores, laboriosam?</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
<?php

incluirTemplate('footer'); 
?>