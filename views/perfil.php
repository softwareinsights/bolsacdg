

    <!--Login-->
    <form method="post" action="server/actualiza-perfil.php" class="form-signin"> <!--Class "form-singnin es para que la table la de angosta, multipart/form-data es para subir archivos"-->
      <h1 class="form-signin-heading">Perfil</h1>
      <label for="inputnombre" class="sr-only">Nombre Completo</label>
      <input type="text" id="nombre" class="form-control" placeholder="Nombre Competo" required autofocus>
      <label for="inputEmail" class="sr-only">Correo Electronico</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electronico" required autofocus>
      <label for="inputciudad" class="sr-only">Ciudad</label>
      <input type="text" id="inputciudad" class="form-control" placeholder="Ciudad" required autofocus>
      <label for="inputfecha" class="sr-only">Fecha de Nacimiento</label>
      <input type="date" id="inputfecha" class="form-control" placeholder="Fecha de Nacimiento" required>

      <div class="checkbox">
        <label>
          <input name="estudiante" type="radio"> Estudiante
          <input name="egresado" type="radio"> Egresado
        </label>
      </div>

      <label for="Carrera">Carrera</label>
      <select class="form-control" name="Carrera" id="Carrera">
          <option value="Telemtica">Telemtica</option>
          <option value="Sistemas Biologicos">Sistemas Biologicos</option>
          <option value="Agrobiotecnologia">Agrobiotecnologia</option>
      </select>
        <input class="btn btn-primary" type="submit"value="Guardar">
      </form>
      <form method="post" enctype="multipart/form-data" action="server/actualiza-logoempresa.php" class="form-signin">
          <hr>
          <h1>Curriculum</h1>
          <table class="table table-bordered">
            <tr>
            <td>
              <i class="fa fa-file"></i>
            </td>
            <td>
              Mi_Curriculum
            </td>
            <td>
              <button class="btn btn-danger" type="button" name="button">
                <i class="fa fa-trash"></i>
              </button>
              </td>
            </tr>
          </table>
          <input name="curriculum" type"file">
          <input class="btn btn-success"type="submit" value="Cargar Archivo">
        </form>
