<div class="modal" id="ventana_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subir Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">

                <form method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Numero de Unidad</label>
                        <input type="number" require class="form-control" id="Titulo_pro" placeholder="Escribe El numero de la unidad correspodiente">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre de Integrantes</label>
                        <input type="text" require class="form-control" id="Nombres_integrantes" placeholder="Escribe los nombres de los integrantes">
                    </div>


                    <div class="form-group">
                        <label for="formGroupExampleInput2">Link del Video</label>
                        <input type="text" class="form-control" id="link" placeholder="puedes pegar el link del video">
                    </div>


                    
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Subir Video</button>
            </div>
        </div>
    </div>
</div>