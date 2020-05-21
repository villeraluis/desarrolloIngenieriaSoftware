<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../css/estilos.css" />
    <title>AppDesarrollo</title>
</head>

<body>

    <div class="container col-12">

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
            <a class="navbar-brand" href="principal.php"><img src="../imagenes/unicordoba_logo1.png"></img></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  " id="navbarNavAltMarkup">
                <div class="navbar-nav ">
                    <a class="nav-item nav-link " href="principal.php">
                        <h4>Inicio</h4>
                    </a>
                    <a class="nav-item nav-link" href="proyectos.php">
                        <h4>Proyectos</h4>
                    </a>
                    <a class="nav-item nav-link" href="videos.php">
                        <h4>Videos</h4>
                    </a>




                </div>


            </div>

            <div>

                <?php include "form_login.php" ?>
                <a class="nav-item nav-link  " data-toggle="modal" data-target="#ventana_modal" href="" role="button">
                    <h4>Registrarse</h4>
                </a>

            </div>


        </nav>

    </div>