<?php
require '../../includes/app.php';

use App\Vendedor;


estaAutenticado();

$vendedor = new Vendedor;

//Arreglo con mensaje de errores
$errores = Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    //Crear una nueva instancia
    $vendedor = new Vendedor($_POST['vendedor']);

    //Validar que no haya campos vacios
   $errores = $vendedor->validar();

   //No exitan errores
   if(empty ($errores)){
    $vendedor->guardar();
   }

}

incluirTemplate('header', $start = null);

?>

<!-- Main -->
    <main class="container seccion">
        <h1>Registrar Vendedor(a)</h1>

        <a href="/admin" class="button button-green">Volver</a>

        <!-- mostrar errores -->

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach ?>

        <form class="formulario" method="POST" action="/admin/vendedores/crear.php">

            <?php include '../../includes/templates/formulario_vendedores.php'; ?>

        <input type="submit" value="Registrar Vended@r" class="button button-green">
        </form>
    </main>

<!-- Footer -->
<?php

incluirTemplate('footer'); 
?>