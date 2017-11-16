

    <!--Login-->
    <form method="post" action="server/actualiza-perfilempresa.php" class="form-signin"> <!--Class "form-singnin es para que la table la de angosta, multipart/form-data es para subir archivos"-->
      <h2 class="form-signin-heading">Perfil Empresa</h2>
      <label for="inputnombre" class="sr-only">Nombre de la Empresa</label>
      <input type="text" id="nombre" class="form-control" placeholder="Nombre de la Empresa" required autofocus>
      <label for="inputciudad" class="sr-only">Ciudad</label>
      <input type="text" id="inputciudad" class="form-control" placeholder="Ciudad" required autofocus>
      <label for="inputdireccion" class="sr-only">Direccion</label>
      <input type="text" id="inputdireccion" class="form-control" placeholder="Direccion" required autofocus>
      <label for="inputdescripcion" class="sr-only">Descripcion</label>
      <input type="text" id="inputfecha" class="form-control" placeholder="Descripcion" required>
        <input class="btn btn-primary" type="submit"value="Guardar">
    </form>

    <hr>
    <form method="post" enctype="multipart/form-data" action="server/actualiza-logoempresa.php" class="form-signin"> <!--Class "form-singnin es para que la table la de angosta, multipart/form-data es para subir archivos"-->

      <h2 class="form-signin-heading">Logo</h2>
        <input name="logo" type="file">
        <input class="btn btn-success"type="submit" value="Cargar Logo">
    </form>
