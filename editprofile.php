<div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <h3>Editar perfil</h3>
                <img class="fotoperfil" src="https://icon-library.com/images/default-profile-icon/default-profile-icon-16.jpg" alt="foto perfil" width="100"></a>
                <br>
                <form action="" method="post">
                    <div class="form-group">
                    <label>Editar foto</label>

                    <div class="input-group">
                      <div class="custom-file">
                        <!-- <input type="file" name="avatar" id="inputGroupFile01"> -->
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>

                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="firstname" id="firstName"  maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" name="lastname" id="lastName"  maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Mail</label>
                        <input type="email" class="form-control" name="mail" id="mail"  maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input type="text" class="form-control" placeholder="<?php echo "$myusername"?>" name="username" id="username" disabled maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" class="form-control" name="mobilenumber" id="mobilenumber" disabled  maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Debe contener al menos un número y una letra mayúscula y minúscula, y un máximo de 30"  maxlength="30" />
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-outline-info btn-lg btn-block">Editar perfil</button>
                </form>

                <?php
          if(isset($_POST['actualizar']))
          {
            $firstname=$_POST["firstname"];
            $lastname=$_POST["lastname"];
            $mail=$_POST["mail"];
            $username=$_POST["username"];
            $mobilenumber=$_POST["mobilenumber"];
            $password=$_POST["password"];


            $type = 'jpg';
            $rfoto = $_FILES['avatar']['tmp_name'];
            $name = $id.'.'.$type;

            if(is_uploaded_file($rfoto))
            {
              $destino = 'dist/img/'.$name;
              $nombrea = $name;
              copy($rfoto, $destino);
            }
            else
            {
              $nombrea = $use['avatar'];
            }

            $sql = mysqli_query($con,"UPDATE usuarios SET first_name = '$firstname', last_name ='$lastname',  mail = '$mail', username = '$username', phone = '$mobilenumber', password = '$password', rol_id = '2', foto_perfil = '$destino' WHERE username = '$myusername'");

            if($sql) {echo "<script type='text/javascript'>window.location='profile.php?id=$id';</script>";}


          }
          ?>
                
            </div>
        </div>
        
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
  
    

    </div>