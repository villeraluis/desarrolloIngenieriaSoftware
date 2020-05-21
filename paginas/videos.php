<?php include "header.php" ?>


<!-- seccion de bienvenida-->

<div class="  mt-5">

    <div class="jumbotron text-center">
        <h1 class="display-5 font-weight-bold text-center pb-1 pt-3">Bienvenidos a la Seccion de Videos</h1>
        <p class="lead">desde aqui podras visualizar y gestionar los videos de las unidades del curso</p>
        <hr class="my-2">
        <p class="lead">
            <?php



            if (empty($_SESSION['user'])) {
                ?>
                <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventana_modal" href="" role="button"> Registrate para Subir nuevo Video</a>
                <?php  
            
            } else {
                include "form_subir_video.php";
            


            ?>
            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventana_modal_vid" href="" role="button">Subir nuevo Video</a>

            <?php
            }
            ?>
        </p>


    </div>

</div>

<!-- secion de videos -->

<section class="container-fluid  videos ">
    <div class="row ">
        <?php include("conexionbd.php");

        $consulta = "SELECT  numero_u,link  FROM datos_video";
        $resultado = mysqli_query($conexiones, $consulta);




        while ($mostrar = mysqli_fetch_array($resultado)) {

        ?>


            <div class="col-12 col-sm-6 col-md-3 pb-3">
                <div class="card pb-4">
                    <div class="card-body text-center font-weight-bold"> Video Unidad <?php echo $mostrar['numero_u'] ?> </div>
                    <iframe src="<?php echo $mostrar['link'] ?>" frameborder="2" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>





        <?php
        }

        mysqli_close($conexiones);
        ?>
    </div>
</section>

<?php
include "footer.php";

?>