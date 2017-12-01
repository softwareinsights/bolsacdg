<?php
    include "../coneccion.php";

    if (isset ($_POST["submit"])) {
      if($_POST["password"]===$_POST["repassword"]){


        #Reistrar Usuario
        $query = "INSERT INTO usuario (idusuario, nombre, email, password, direccion, descripcion, tipo) VALUES (NULL, '".$_POST['nombre']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['direccion']."', '".$_POST['descripcion']."', 'EMPRESA');";
        $db->exec($query);

        $lastInsert= $db->lastInsertId();

        if($lastInsert>=0){
          ?>

          <script type="text/javascript">
            alert("El registro fue correcto");
          </script>

          <?php
        } else {
          ?>

          <script type="text/javascript">
            alert("El registro fue incorrecto");
          </script>

          <?php
        }

    }else{
      ?>
    <script type="text/javascript">
     alert("La contraseña no coincide");
     </script>
     <?php
    }
   }
?>
<script type="text/javascript">
  window.history.back();
</script>
