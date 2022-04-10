 
  <form method="POST" id="add_user_form" >   
   <div class="modal-body h-100">  

        <div class="row"> 
            <label for="newuser_username" class="col-form-label">Usuario</label>
            <input type="text" name="user" id="newuser_username" class="form-control" required="" > 
            <div class="invalid-feedback" id="feedback-newuser_username"></div>
        </div> 
 
        <div class="row"> 
            <label for="newuser_name" class="col-form-label">Nombre</label>
            <input type="text" name="name" id="newuser_name" class="form-control" required="" >
            <div class="invalid-feedback" id="feedback-newuser_name"></div>
        </div>

        <div class="row"> 
            <label for="newuser_lastname" class="col-form-label">Apellido</label>
            <input type="text" name="last_name" id="newuser_lastname" class="form-control" required="" >
            <div class="invalid-feedback" id="feedback-newuser_lastname"></div>
        </div> 

        <div class="row"> 
            <label for="newuser_email" class="col-form-label">Correo electrónico</label>
            <input type="email" name="email" id="newuser_email" class="form-control" required="" >
            <div class="invalid-feedback" id="feedback-newuser_email"></div>
        </div>

        <div class="row"> 
            <label for="newuser_rolid" class="col-form-label">Rol de Usuario</label>
                    <select class="form-control" name="rol" id="rol">
            <?php 

            foreach($roles as $row)
            { 
              echo '<option value="'.$row->id_rol.'">'.$row->name.'</option>';
            }
            ?>
            </select>

            <div class="invalid-feedback" id="feedback-newuser_rolid"></div>        
        </div>


        <div class="row"> 
            <label for="newuser_password" class="col-form-label">Contraseña </label>
            <input type="password" name="password" id="newuser_password" class="form-control" required="" >
            <div class="invalid-feedback" id="feedback-newuser_pass"></div>
        </div>

        <div class="row"> 
            <label for="confirmpassword" class="col-form-label">Confirma contraseña</label>
            <input type="password" name="password1" id="newuser_confirmpassword" class="form-control" required="" >            
            <div class="invalid-feedback" id="feedback-newuser_confirmpass"></div>
        </div> 

    </div> 
    <div class="modal-footer">
        <a type="button" class="btn btn-danger openside reset_form" data-reset="reset_user" href="<?=base_url()?>/">Salir</a>
</button>
            <button class="btn btn-primary" type="button" onclick="add_user()"  > Ingresar </button>
</form>  
