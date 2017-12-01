<?php
    include "../coneccion.php";

    if (isset ($_POST["submit"])) {
      if($_POST["password"]===$_POST["repassword"]){


        #Acceso del Usuario
  $query = "INSERT INTO usuario (idusuario, email, password) VALUES (NULL, '".$_POST['email']."', '".$_POST['password']."',);";
  db->exec($query);

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
