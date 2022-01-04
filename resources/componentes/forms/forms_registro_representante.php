<div class="container">
  <div class="mb-5">
    <h6>Registro de representante</h6>
  </div>

  <form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nombre</label>
      <input type="text" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Rut</label>
      <input type="text" maxlength="12" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Sexo</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          Masculino
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Femenino
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          misceláneo
        </label>
      </div>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Domicilio</label>
      <input type="text" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Ciudad</label>
      <input type="text" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nacionalidad</label>
      <input type="text" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Telefono</label>
      <input type="number" min="0" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Estado Civil</label>
      <input type="number" min="0" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Profesion</label>
      <input type="number" min="0" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-dark">Guardar</button>
  </form>

</div>
