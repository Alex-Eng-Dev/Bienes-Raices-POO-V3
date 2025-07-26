<?php

require '../../includes/app.php';

use App\Propiedad;
use App\Vendedor;
use Intervention\Image\ImageManager as Image;
// use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Drivers\Gd\Driver;


//Codigo para que el admin tenga acceso
estaAutenticado();


$propiedad = new Propiedad;

//Consulta para obtener los vendedores
$vendedores = Vendedor::getAll();



//Arreglo con mensjes de errores
    $errores = Propiedad::getErrores();

   

//Ejecutar el codigo despues de que el usuario envie el formulario
if($_SERVER["REQUEST_METHOD"] === 'POST'){

    //?Crea una nueva instancia de la clase Propiedad
    $propiedad = new Propiedad($_POST['propiedad']);
    // debuguear($_FILES['propiedad']);
   

    //Generar nombre unico 
    $nombreImagen = md5(uniqid(rand(), true)) ;
    //Setear la imagen
    if($_FILES['propiedad']['tmp_name']['imagen']){
        $manager = new Image(Driver::class);
        $imagen = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->cover(800, 600);
        $propiedad->setImagen($nombreImagen);
    }

    $errores = $propiedad -> validar();

   
    //Revisar que el array este vacio
    if(empty($errores)){


        /* Subida de Archivos */
        //Crear carpeta

        if(!is_dir(CARPETA_IMAGENES)){
            mkdir(CARPETA_IMAGENES);
        }

        //Guarda la imagen en el servidor
        $imagen->save(CARPETA_IMAGENES . $nombreImagen . ".jpg");
        
        $propiedad ->  guardar();

        
        

    }

    
}



incluirTemplate('header', $start = null);
?>

    <!-- Main -->
    <main class="container seccion">
        <h1>Crear</h1>

        <a href="/admin" class="button button-green">Volver</a>

        <!-- mostrar errores -->

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error ?>
            </div>
        <?php endforeach ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">

            <?php include '../../includes/templates/formulario_propiedades.php'; ?>

        <input type="submit" value="Crear Propiedad" class="button button-green">
        </form>
    </main>

<!-- Footer -->
<?php

incluirTemplate('footer'); 
?>