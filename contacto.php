<?php
require 'includes/app.php';
incluirTemplate('header', $start = null);
?>

    <!-- Main -->
    <main class="container seccion">
        <h1>Contacto</h1>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2>Llene el formulario de Contacto</h2>
        
        <form class="formulario" action="">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">
                
                <label for="email">Correo</label>
                <input type="email" placeholder="correo@correo.com" id="email">
                
                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="No.Cel" id="telefono">
                
                <label for="mensaje">Mensaje: </label>
                <textarea name="mensaje" id="mensaje"></textarea>
            </fieldset>
            
            <fieldset>
                <legend>Información sobre la propiedad</legend>
                
                <label for="opciones">Vende o Compra: </label>
                <select name="" id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>Como gustaria que nos comuniquemos con usted</p>
                
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
                    
                    <label for="contactar-email">Correo</label>
                    <input name="contacto" type="radio" value="correo" id="contactar-email">
                </div>
                <p>Si eligio telefono, elija fecha y hora para comunicarnos</p>
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">
                
                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00" step="3600">
                
            </fieldset>
            <input type="submit" value="Enviar" class="button-green">
        </form>
    </main>

<!-- Footer -->
 <?php

incluirTemplate('footer');  
?>