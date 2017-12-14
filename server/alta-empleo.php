<?php
    include "../coneccion.php";

    if (isset ($_POST["submit"])) {

        $query = "INSERT INTO `empleo` (`idempleo`, `nombre`, `descripcion`, `sueldo`, `dias`, `horas`, `fecha`) VALUES (NULL, '".$_POST['nombre']."', '".$_POST['descripcion']."', '".$_POST['sueldo']."', '".$_POST['dias']."', '".$_POST['horas']."', '".$_POST['fecha']."')";
        $db->exec($query);

        
        $lastInsert= $db->lastInsertId();

        if($lastInsert>=0){

            foreach ($_POST['idcarrera'] as $value) {
                
                # INSERTA RELACIÓN EMPLEO CARRERA
                $query = "INSERT INTO `empleo_has_carrera` (`empleo_idempleo`, `carrera_idcarrera`) VALUES ('".$lastInsert."', '".$value."')";
                $db->exec($query);

            }

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
?>
<script type="text/javascript">
  window.history.back();
</script>
