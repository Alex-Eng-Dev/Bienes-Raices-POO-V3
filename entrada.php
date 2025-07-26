<?php
require 'includes/app.php';
incluirTemplate('header', $start = null);
?>

    <!-- Main -->
    <main class="container seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="info-meta" >Escrito el: <span>29/05/2025</span> por: <span>Admin</span></p>
        <div class="resume-propiety">
            
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis minima, delectus aspernatur placeat
                aliquid doloribus consequatur optio ipsam. Quos mollitia suscipit distinctio excepturi voluptates minima
                aut quasi odit fuga labore.
                Soluta ab maiores suscipit, fuga cum voluptates eveniet aperiam cumque ad officia assumenda consequatur
                porro itaque accusantium eum reiciendis iste nesciunt ut cupiditate et sequi mollitia iusto. Illo,
                tempore harum.
                Reiciendis soluta aut iste error commodi maxime rem vero, nihil nulla similique dolor nostrum voluptatem
                quo eaque, officiis amet tenetur numquam laudantium ratione quod. Nemo, perspiciatis. Libero quisquam
                iste numquam.
                Iusto doloribus adipisci earum illum quo accusamus. Id dolor illum autem sequi, exercitationem quidem
                harum nemo mollitia dicta molestias, facere incidunt natus maiores minus earum, quod assumenda fuga
                repellat illo.
                Harum consequuntur tempora in illum omnis, sit ipsam neque odio atque quis id quas accusantium
                reiciendis aliquid, itaque ratione delectus, consequatur exercitationem natus. Minus repudiandae odit
                nisi maiores doloremque! Reprehenderit.
            </p>

        </div>
    </main>

    <!-- Footer -->
<?php

incluirTemplate('footer');  
?>