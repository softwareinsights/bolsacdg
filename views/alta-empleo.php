<!--Login-->
<form class="form-signin">
  <h2 class="form-signin-heading">Please sign up</h2>
  <label for="inputdescripcion" class="sr-only">Descripcion</label>
  <input type="text" id="descripcion" class="form-control" placeholder="descripcion" required autofocus>
  <label for="inputsueldo" class="sr-only">Sueldo</label>
  <input type="number" id="inputsueldo" class="form-control" placeholder="Sueldo" required autofocus>
  <label for="inputdireccion" class="sr-only">Direccion</label>
  <input type="email" id="inputdireccion" class="form-control" placeholder="Direccion" required autofocus>
  <label for="inputfecha" class="sr-only">Fecha</label>
  <input type="date" id="inputfecha" class="form-control" placeholder="Fecha de Nacimiento" required>

  <label for="Horario Dias">****DIAS****</label>
  <select class="form-control" name="Dias" id="Dias">

      <option value="Lunes-Viernes">Lunes-Viernes</option>
      <option value="Lunes-Sabado">Lunes-Sabado</option>

  </select>

  <label for="Horario Horas">****Horas****</label>
  <select class="form-control" name="Horas" id="Horas">

      <option value="08:00-15:00">08:00-15:00</option>
      <option value="09:00-16:00">09:00-16:00</option>
      <option value="07:00-14:00">07:00-14:00</option>

  </select>


  <label for="Carrera">Carrera</label>
  <select  multiple class="form-control" name="Carrera" id="Carrera">
      <option value="Telemtica">Telemtica</option>
      <option value="Sistemas Biologicos">Sistemas Biologicos</option>
      <option value="Agrobiotecnologia">Agrobiotecnologia</option>
      <option value="Informatica">Informatica</option>
      <option value="Psicologia">Psicologia</option>
  </select>

<button class="btn btn-lg btn-primary btn-block" type="submit">Crear</button>
