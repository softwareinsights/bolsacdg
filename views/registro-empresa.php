<!--Login-->
<form class="form-signin" action="server/registro-empresa.php" method="post">
  <h2 class="form-signin-heading">Registro Empresa</h2>
  <label for="inputnombre" class="sr-only">Nombre Empresa</label>
  <input type="text" id="nombre" class="form-control" name= "nombre" placeholder="Nombre Competo" required autofocus>
  <label for="inputEmail" class="sr-only">Correo Electronico</label>
  <input type="email" id="inputEmail" class="form-control" name= "email" placeholder="Correo Electronico" required autofocus>
  <label for="inputdireccion" class="sr-only">Direccion</label>
  <input type="text" id="inputdireccion" class="form-control" name= "direccion" placeholder="Direccion" required autofocus>
  <label for="inputpassword" class="sr-only">Descripcion</label>
  <input type="text" id="inputdescripcion" class="form-control" name= "descripcion" placeholder="descripcion" required autofocus>
  <label for="inputpassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputpassword" class="form-control" name= "password" placeholder="Contraseña" required autofocus>
  <label for="inputcpassword" class="sr-only">Confirmar Contraseña</label>
  <input type="password" id="cpassword" class="form-control" name= "repassword" placeholder="Confirmar Contraseña" required autofocus>
  <div class="checkbox">



  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Regístrame</button>

</form>
