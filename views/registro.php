
      <!--Login-->
      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign up</h2>
        <label for="inputnombre" class="sr-only">Nombre Completo</label>
        <input type="text" id="nombre" class="form-control" placeholder="Nombre Competo" required autofocus>
        <label for="inputEmail" class="sr-only">Correo Electronico</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electronico" required autofocus>
        <label for="inputciudad" class="sr-only">Ciudad</label>
        <input type="email" id="inputciudad" class="form-control" placeholder="Ciudad" required autofocus>
        <label for="inputfecha" class="sr-only">Fecha de Nacimiento</label>
        <input type="date" id="inputfecha" class="form-control" placeholder="Fecha de Nacimiento" required>
        <label for="inputpassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputpassword" class="form-control" placeholder="Contraseña" required autofocus>
        <label for="inputcpassword" class="sr-only">Confirmar Contraseña</label>
        <input type="password" id="cpassword" class="form-control" placeholder="Confirmar Contraseña" required autofocus>
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
        <button class="btn btn-lg btn-primary btn-block" type="submit">Regístrame</button>

      </form>
