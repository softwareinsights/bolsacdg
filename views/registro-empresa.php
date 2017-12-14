<!--Login-->
<form class="form-signin" action="server/registro-empresa.php" method="post">
  <h2 class="form-signin-heading">Registro Empresa</h2>
  <label for="inputnombre">Nombre Empresa</label>
  <input type="text" id="nombre" class="form-control" name= "nombre" placeholder="Nombre Competo" required autofocus>
  <label for="inputEmail">Correo Electronico</label>
  <input type="email" id="inputEmail" class="form-control" name= "email" placeholder="Correo Electronico" required>
  <label for="inputdireccion">Direccion</label>
  <input type="text" id="inputdireccion" class="form-control" name= "direccion" placeholder="Direccion" required>
  <label for="inputpassword">Descripcion</label>
  <input type="text" id="inputdescripcion" class="form-control" name= "descripcion" placeholder="descripcion" required>
  <label for="inputpassword">Contraseña</label>
  <input type="password" id="inputpassword" class="form-control" name= "password" placeholder="Contraseña" required>
  <label for="inputrepassword">Confirmar Contraseña</label>
  <input type="password" id="repassword" class="form-control" name= "repassword" placeholder="Confirmar Contraseña" required>
  <label for="inputciudad">Ciudad</label>
  <select id="inputciudad" class="form-control" name= "idciudad" required>
  <?php
    $consulta =$db->prepare("SELECT idciudad, nombre FROM ciudad");
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultado as $key => $value) {
      echo "<option value='".$resultado[$key]['idciudad']."'>'".$resultado[$key]['nombre']."</option>";
    }
  ?>
  </select>

  <br>

  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Regístrame</button>

</form>
