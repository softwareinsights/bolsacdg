<?php
session_start();
    include "../coneccion.php";

    if (isset ($_POST["submit"])) {


        #Acceso del Usuario
          $consulta = $db->prepare("SELECT * FROM usuario Where email = '".$_POST['email']."'");
          $consulta->execute();
          $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

          if(count($resultado)>=1){
            if($resultado[0]['password']=== $_POST['password']){

              $_SERVER['iduser'] = $resultado[0]['idusuario'];
              ?>

            <script type="text/javascript">
              alert("El acceso fue correcto");
              window.location.href = "../index.php";
              </script>

            <?php
          } else {
            ?>

            <script type="text/javascript">
              alert("El acceso fue incorrecto");
            </script>

            <?php
            }

          } else {
          ?>
          <script type="text/javascript">
          alert("La contraseña no coincide");
          </script>
          <?php
          }

        }
        exit;
        ?>
