<?php

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManager as Image;
// use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Drivers\Gd\Driver;

require '../../includes/app.php';

    estaAutenticado();

    

//Validar la URL por el ID
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
if(!$id){
    header('Location: /admin');
}
    

//Obtener los datos de la propiedad

$propiedad = Propiedad::find($id);

//Consulta para obtener los vendedores
$vendedores = Vendedor::getAll();

//Arreglo con mensjes de errores
$errores = Propiedad::getErrores();


//Ejecutar el codigo despues de que el usuario envie el formulario
if($_SERVER["REQUEST_METHOD"] === 'POST'){
    
    
    
    //Asignar los atributos de la propiedad
    $args = $_POST['propiedad']; 

    $propiedad->sincronizar($args);

    //Validacion
    $errores = $propiedad->validar();

    //Subida de archivos

    //Generar nombre unico 
    $nombreImagen = md5(uniqid(rand(), true)) ;
    //Setear la imagen
    if($_FILES['propiedad']['tmp_name']['imagen']){
        $manager = new Image(Driver::class);
        $image = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->cover(800, 600);
        $propiedad->setImagen($nombreImagen);
    }

    if(empty($errores)){
        if($_FILES['propiedad']['tmp_name']['imagen']){
            //Almacenar la imagen
        $image->save(CARPETA_IMAGENES . $nombreImagen . ".jpg");
        }
     $propiedad->guardar();
    }    
}



incluirTemplate('header', $start = null);
?>

    <!-- Main -->
    <main class="container seccion">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin" class="button button-green">Volver</a>

        <!-- mostrar errores -->

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">

        <?php include '../../includes/templates/formulario_propiedades.php'; ?>

        <input type="submit" value="Actualizar Propiedad" class="button button-green">
        </form>
    </main>

<!-- Footer -->
<?php

incluirTemplate('footer'); 
?>