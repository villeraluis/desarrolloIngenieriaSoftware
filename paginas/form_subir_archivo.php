

<div class="modal" id="ventana_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subir Archivos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <form method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Titulo del Proyecto</label>
                        <input type="text" require class="form-control" id="Titulo_pro" placeholder="Escribe El nombre del Proyecto">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre de Integrantes</label>
                        <input type="text" require class="form-control" id="Nombres_integrantes" placeholder="Escribe los nombres de los integrantes">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Descripcion Corta del Proyecto</label>
                        <input type="text" require class="form-control" id="descripcion" placeholder="Relata una corta descripcion del proyecto">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Link de tu Archivo</label>
                        <input type="text" class="form-control" id="link" placeholder="puedes pegar el link del archivo">
                    </div>


                    <div class="form-group">
                        <input type="file" class="form-control-file" id="archivo" placeholder="selecciona el archivo">
                    </div>

                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Subir Archivos</button>
            </div>
        </div>
    </div>
</div>