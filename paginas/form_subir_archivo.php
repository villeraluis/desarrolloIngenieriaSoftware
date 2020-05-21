<div class="modal" id="ventana_modal_ar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subir Archivos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="formGroupExampleInput">Titulo del Proyecto</label>
                        <input type="text" required class="form-control" name="Titulo_pro" placeholder="Escribe El nombre del Proyecto">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre de Integrantes</label>
                        <input type="text" required class="form-control" name="Nombres_integrantes" placeholder="Escribe los nombres de los integrantes">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Descripcion Corta del Proyecto</label>
                        <input type="text" required class="form-control" name="descripcion" placeholder="Relata una corta descripcion del proyecto">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Link de tu Archivo</label>
                        <input type="text" required class="form-control" name="link" placeholder="puedes pegar el link del archivo">
                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="guardar" class="btn btn-primary" role="button">Subir Archivos</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php
include("conexionbd.php");

if (isset($_POST['guardar'])) {

    $Titulo_pro = $_POST['Titulo_pro'];
    $Nombres_integrantes = $_POST['Nombres_integrantes'];
    $descripcion = $_POST['descripcion'];
    $link = $_POST['link'];




    if (!$conexiones) {
        die("Conneccion fallo: " . mysqli_connect_error());
    }
    $consulta1 = "INSERT INTO datos_proyecto (Titulo_pro, Nombres_integrantes, descripcion, link)
       VALUES ('$Titulo_pro', '$Nombres_integrantes', '$descripcion', '$link')";

    if (mysqli_query($conexiones, $consulta1)) {

        echo "&nbsp;&nbsp;&nbsp;&nbsp;los datos fueron ingresados  satisfaftoriamente";
    } else {
        echo " &nbsp;&nbsp;no se a guardado el regitro correctamente por favor intentelo de nuevo";
    }

    mysqli_close($conexiones);
}
