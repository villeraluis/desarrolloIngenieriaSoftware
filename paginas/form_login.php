


<div class="modal " id="ventana_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header ">
                <h5 class="modal-title col-11 text-center" id="exampleModalLabel">Iniciar sesion</h5>
                  
            </div>


            <div class="modal-body">

                <form method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Usuario</label>
                        <input type="text" require class="form-control" id="Titulo_pro" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Contraseña</label>
                        <input type="password" require class="form-control" id="pasword" placeholder="">
                    </div>

                   
                </form>


            </div>
            <div class="modal-footer">
            
                <button type="button" data-toggle="modal" data-target="#ventana_modal2" class="btn btn-secondary" data-dismiss="modal">Crear Cuenta</button>
                <button type="submit"  class="btn btn-primary" >Ingresar</button>
            </div>
        </div>
    </div>
</div>

<!-- ventana modal de registro por primera vez -->


<div class="modal" id="ventana_modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title col-11 text-center" id="exampleModalLabel">Iniciar sesion</h5> 
            </div>


            <div class="modal-body">

                <form method="post">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Correo Electronico</label>
                        <input type="text" require class="form-control" id="correo" placeholder="ingerese su correo">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Nombres</label>
                        <input type="text" require class="form-control" id="nombre" placeholder="ingerese al menos uno">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Apellidos</label>
                        <input type="text" require class="form-control" id="apellidos" placeholder="ingerese al menos uno">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Id Estudiante Unicordoba</label>
                        <input type="text" require class="form-control" id="id_estudiante" placeholder="ingerese al menos uno">
                    </div>

                    <div class="form-group">
                        <h4 for="formGroupExampleInput2">Contraseña</h4>
                        <input type="password" require class="form-control" id="pasword" >
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Confirmar Contraseña</label>
                        <input type="password" require class="form-control" id="pasword" >
                    </div>

                   
                </form>


            </div>
            <div class="modal-footer">
            
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button"  class="btn btn-primary" >Registrar</button>
            </div>
        </div>
    </div>
</div>