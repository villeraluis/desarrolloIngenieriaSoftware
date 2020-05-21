<?php include "header.php" ?>



<!-- seccion de bienvenida-->

<div class=" mt-5 ">

    <div class="jumbotron text-center">
        <h1 class="display-5 font-weight-bold text-center pb-1 pt-3">Bienvenidos a la Seccion de Proyectos</h1>
        <p class="lead">desde aqui podras visualizar toda la documentacio de los proyectos desarrollados por los estudiantes</p>
        <hr class="my-2">
        <?php include "form_subir_archivo.php" ?>
        <p class="lead ">
            <a class="btn btn-primary btn-lg" href="#proyectos" role="button">ver Proyectos</a>
            <a class="btn btn-primary btn-lg"   data-toggle="modal" data-target="#ventana_modal_ar"  href=""  role="button">Subir nuevo Proyecto</a>
        </p>

    </div>

</div>
</section>


<!-- SECCION PROYECTOS -->
<section class="py-0" id="proyectos">
    <div class="container">
    <h1 class="display-5 font-weight-bold text-center pb-1 pt-3">Lista de Proyectos</h1>
        <div class="row text-md-center">
            <article class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                <div class="card">
                    <img class="card-img-top h-100" src="images/proyecto1.png" alt="imagen del proyecto">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Del Proyecto</h5>
                        <p class="card-text">
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                        </p>
                        <a href="#" class="btn btn-primary">Ver proyecto</a>
                    </div>
                </div>
            </article>
            <article class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                <div class="card">
                    <img class="card-img-top h-100" src="images/proyecto1.png" alt="imagen del proyecto">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Del Proyecto</h5>
                        <p class="card-text">
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                        </p>
                        <a href="#" class="btn btn-primary">Ver proyecto</a>
                    </div>
                </div>
            </article>

            <article class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                <div class="card">
                    <img class="card-img-top h-100" src="images/proyecto1.png" alt="imagen del proyecto">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Del Proyecto</h5>
                        <p class="card-text">
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                        </p>
                        <a href="#" class="btn btn-primary">Ver proyecto</a>
                    </div>
                </div>
            </article>

            <article class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                <div class="card">
                    <img class="card-img-top h-100" src="images/proyecto1.png" alt="imagen del proyecto">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Del Proyecto</h5>
                        <p class="card-text">
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                            descripcion corta del proyecto
                        </p>
                        <a href="#" class="btn btn-primary">Ver proyecto</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<br>

<!-- seccion de pdf del proyectos-->

<section class="container-fluid">
        <h1 class="display-5 font-weight-bold text-center pb-1 pt-3">Documentacion de proyecto #1</h1>

    <div  >
        <iframe class="embed-responsive" width="600" height=600 src="http://cic.puj.edu.co/wiki/lib/exe/fetch.php?media=materias:is1:01_lectura_ingenieria_software.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
    </div>

</section>







<?php
include "footer.php";

?>