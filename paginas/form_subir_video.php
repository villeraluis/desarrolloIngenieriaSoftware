<div class="modal" id="ventana_modal_vid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subir Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="formGroupExampleInput">Numero de Unidad</label>
                        <input type="number" required class="form-control" name="numero_u" placeholder="Escribe El numero de la unidad correspodiente">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre de Integrantes</label>
                        <input type="text" required class="form-control" name="nombres_integrantes" placeholder="Escribe los nombres de los integrantes">
                    </div>


                    <div class="form-group">
                        <label for="formGroupExampleInput2">Link del Video</label>
                        <input type="text" class="form-control" required name="link" placeholder="puedes pegar el link del video">
                    </div>






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="guardar" class="btn btn-primary">Subir Video</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "conexionbd.php";

if (isset($_POST['guardar'])) {

    $numero_u = $_POST['numero_u'];
    $nombres_integrantes = $_POST['nombres_integrantes'];
    $link = $_POST['link'];




    if (!$conexiones) {
        die("Conneccion fallo: " . mysqli_connect_error());
    }
    $consulta1 = "INSERT INTO datos_video (numero_u, Nombres_integrantes,  link)
       VALUES ('$numero_u', '$nombres_integrantes', '$link')";

    if (mysqli_query($conexiones, $consulta1)) {

        echo "&nbsp;&nbsp;&nbsp;&nbsp;los datos fueron ingresados  satisfaftoriamente";
    } else {
        echo " &nbsp;&nbsp;no se a guardado el regitro correctamente por favor intentelo de nuevo";
    }

    mysqli_close($conexiones);
}
