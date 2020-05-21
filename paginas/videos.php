<?php include "header.php" ?>


<!-- seccion de bienvenida-->

<div class="  mt-5">
    
    <div class="jumbotron text-center">
        <h1    class="display-5 font-weight-bold text-center pb-1 pt-3">Bienvenidos a la Seccion de Videos</h1>
        <p class="lead">desde aqui podras visualizar  y gestionar los videos de las unidades del curso</p>
        <hr class="my-2">
        <p class="lead">
        <?php include "form_subir_video.php" ?>

            <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ventana_modal_vid" href="" role="button">Subir nuevo Video</a>
        </p>
       
    </div>

</div>

<!-- secion de videos -->

<section class="container-fluid  videos ">
    <div class="row ">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card ">
                <div class="card-body text-center"> Video Unidad 1 </div>
                <iframe src="https://www.youtube.com/embed/YFin8nNnARA" frameborder="2" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="card ">
                <div class="card-body text-center"> Video Unidad 2</div>
                <iframe src="https://www.youtube.com/embed/fHPs6NwNAe4" frameborder="2" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="card ">
                <div class="card-body text-center"> Video Unidad 3 </div>
                <iframe src="https://www.youtube.com/embed/-76-MOkIYfE" frameborder="2" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="card ">
                <div class="card-body text-center"> Video Unidad 3 </div>
                <iframe src="https://www.youtube.com/embed/nIhWq9x6WXw" frameborder="2" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="card ">
                <div class="card-body text-center"> Video Unidad 5</div>
                <iframe src="https://www.youtube.com/embed/iCpRJKTfhjU" frameborder="2" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="card ">
                <div class="card-body text-center"> Video Unidad 6 </div>
                <iframe src="https://www.youtube.com/embed/-76-MOkIYfE" frameborder="2" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3">
            <div class="card ">
                <div class="card-body text-center"> Video Unidad 7 </div>
                <iframe src="https://www.youtube.com/embed/-76-MOkIYfE" frameborder="2" allowfullscreen="allowfullscreen"></iframe>
            </div>
        </div>
    </div>
</section>



<?php
include "footer.php";

?>