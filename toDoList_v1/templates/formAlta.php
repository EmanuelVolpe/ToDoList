<form action="insertar" method="POST" class="container row g-3">
      <div class="row">
            <div class="col-md-8">
                  <label for="inputAddress" class="form-label">Titulo</label>
                  <input type="text" class="form-control" name="titulo">
            </div>

            <div class="col-md-4">
                  <label for="inputState" class="form-label">Prioridad</label>
                  <select name="prioridad" class="form-select">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="3">4</option>
                              <option value="3">5</option>
                  </select>
            </div>
      </div>

      <div class="col-12">
            <label for="inputAddress2" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
      </div>

      <div class="col-12">
            <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
</form>
<br>