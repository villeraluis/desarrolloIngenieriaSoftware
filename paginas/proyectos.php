<?php include "header.php" ?>



<!-- seccion de bienvenida-->

<div class=" mt-5 ">

    <div class="jumbotron text-center">
        <h1 class="display-5 font-weight-bold text-center pb-1 pt-3">Bienvenidos a la Seccion de Proyectos</h1>
        <p class="lead">desde aqui podras visualizar toda la documentacio de los proyectos desarrollados por los estudiantes</p>
        <hr class="my-2">

        <p class="lead  ">
            <a class="btn btn-primary btn-lg" href="#proyectos" role="button">ver Proyectos</a>
            <?php
            if (empty($_SESSION['user'])) {
            ?>
                <a class="btn btn-primary btn-lg my-2" data-toggle="modal" data-target="#ventana_modal" href="" role="button"> Registrate para Subir nuevo Proyecto</a>
            <?php
            } else {
                include "form_subir_archivo.php"
            ?>
                <a class="btn btn-primary btn-lg my-2" data-toggle="modal" data-target="#ventana_modal_ar" href="" role="button">Subir nuevo Proyecto</a>
            <?php
            }
            ?>
        </p>
    </div>

</div>
</section>


<!-- SECCION PROYECTOS -->


<!-- secion de videos -->

<section class="py-0" id="proyectos">
    <div class="container">
        <h1 class="display-5 font-weight-bold text-center pb-1 pt-3">Lista de Proyectos</h1>
        <div class="row text-md-center">

            <?php include("conexionbd.php");
            $consulta = "SELECT  *  FROM datos_proyecto";
            $resultado = mysqli_query($conexiones, $consulta);
           
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0 py-3">
                    <div class="card">
                        <!-- <img class="card-img-top h-100" src="images/proyecto1.png" alt="imagen del proyecto">-->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mostrar['Titulo_pro'] ?></h5>
                            <p class="card-text">
                                <?php echo $mostrar['descripcion'] ?>
                            </p>
                            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden" name="nompro" value ="<?php echo $mostrar['Titulo_pro'] ?>">

                                <input type="hidden" name="coverpro" value ="<?php echo  $mostrar['link'] ?>">
                                <button type="submit" name="verpro" class="btn btn-primary">Ver proyecto</button>


                            </form>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
</section>

<!-- seccion de pdf del proyectos    http://cic.puj.edu.co/wiki/lib/exe/fetch.php?media=materias:is1:01_lectura_ingenieria_software.pdf#toolbar=0&navpanes=0&scrollbar=0-->
<?php

if (isset($_POST['verpro'])) {

    $linkpro = $_POST['coverpro'];
    $titulo = $_POST['nompro'];

   
    
?>
 <script> 
window.location.replace('#documentacion'); 
</script>

    <section class="container-fluid " id="documentacion">

        <h1 class="display-5 font-weight-bold text-center pb-1 pt-3">Documentacion de <?php echo $titulo ?> </h1>

        <div>
            <iframe class="embed-responsive" width="600" height=600 src="<?php echo $linkpro ?>"></iframe>
        </div>

    </section>



<?php
}

mysqli_close($conexiones);
?>



<?php
include "footer.php";

?>