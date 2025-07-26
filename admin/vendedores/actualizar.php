<?php
require '../../includes/app.php';

use App\Vendedor;

estaAutenticado();

//Validar que sea un ID valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);


if(!$id){
    header('Location: /admin');
}

//Obtener el arreglo de vendedor
$vendedor = Vendedor::find($id);


//Arreglo con mensaje de errores
$errores = Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Asignar los valores
    $args = $_POST['vendedor'];
    // sincronizar objeto en memoria
    $vendedor->sincronizar($args);

    //validacion
    $errores = $vendedor->validar();

    if(empty($errores)){
        $vendedor->guardar();
    }

}

incluirTemplate('header', $start = null);

?>

<!-- Main -->
    <main class="container seccion">
        <h1>Actualizar Vendedor(a)</h1>

        <a href="/admin" class="button button-green">Volver</a>

        <!-- mostrar errores -->

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach ?>

        <form class="formulario" method="POST">

            <?php include '../../includes/templates/formulario_vendedores.php'; ?>

        <input type="submit" value="Guardar Cambios" class="button button-green">
        </form>
    </main>

<!-- Footer -->
<?php

incluirTemplate('footer'); 
?>