<!--Login-->
<form class="form-signin">
    <h2 class="form-signin-heading">Registra un empleo</h2>
    <label for="inputnombre" class="sr-only">Nombre</label>
    <input type="text" name="nombre" id="inputnombre" class="form-control" placeholder="nombre" required autofocus>
    <label for="inputdescripcion" class="sr-only">Descripción</label>
    <input type="text" name="descripcion" id="inputdescripcion" class="form-control" placeholder="descripcion" required>
    <label for="inputsueldo" class="sr-only">Sueldo</label>
    <input type="number" name="sueldo" id="inputsueldo" class="form-control" placeholder="Sueldo" required>
    <label for="inputfecha" class="sr-only">Fecha</label>
    <input type="date" name="fecha" id="inputfecha" class="form-control" placeholder="Fecha de Nacimiento" required>

    <label for="Dias">Días</label>
    <select class="form-control" name="dias" name="" id="Dias">
        <option value="Lunes-Viernes">Lunes-Viernes</option>
        <option value="Lunes-Sabado">Lunes-Sabado</option>
    </select>
    <label for="Horas">Horas</label>
    <select class="form-control" name="Horas" name="horas" id="Horas">
        <option value="08:00-15:00">08:00-15:00</option>
        <option value="09:00-16:00">09:00-16:00</option>
        <option value="07:00-14:00">07:00-14:00</option>
    </select>
    <label for="idcarrera">Carrera</label>
    <select multiple id="idcarrera" class="form-control" name= "idcarrera" required>
    <?php
        $consulta =$db->prepare("SELECT idcarrera, nombre FROM carrera");
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado as $key => $value) {
        echo "<option value='".$resultado[$key]['idcarrera']."'>'".$resultado[$key]['nombre']."</option>";
        }
    ?>
    </select>
    <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Crear</button>
</form>
