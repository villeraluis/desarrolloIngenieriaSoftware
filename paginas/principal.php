<?php

include "header.php";

?>



<!-- sccion de imagenes en carrusel-->

<section class="container-fluid col-12 mt-5 py-5">
    <div>
        <h1 class="text-center  py-2 pt-3 my-3 font-weight-bold ">Curso de Ingeniería de Software</h1>
    </div>
    <div id="carouselExampleFade" class=" carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../imagenes/imgDesarrollo.jpg" class=" w-100 " alt="soy una imagen" height="350">
            </div>
            <div class="carousel-item">
                <img src="../imagenes/ingenieriadesoftware-l-.jpg" class="w-100  " alt="soy la segunda imagen" height="350">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
    </div>
</section>




<!-- secion de videos -->

<section class="container-fluid  videos ">
    <div class="row ">
        <?php 
        
        include "conexionbd.php";
        


        $consulta = "SELECT  numero_u,link  FROM datos_video";
        $resultado = mysqli_query($conexiones, $consulta);
        while ($mostrar = mysqli_fetch_array($resultado)) {
        ?>
            <div class="col-12 col-sm-6 col-md-3 pb-5">
                <div class="card pb-4 ">
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

<!-- secion de footer-->

<?php
include "footer.php";

?>