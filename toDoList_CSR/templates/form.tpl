<form id="formAlta" action="insertar" method="POST" class="container row g-3">
    <div class="row">
        <div class="col-md-9">
            <label for="inputAddress" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo"/>
        </div>

        <div class="col-md-3">
            <label for="inputState" class="form-label">Prioridad</label>
            <select name="prioridad" id="prioridad" class="form-select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
    </div>

    <div class="col-11">
        <label for="inputAddress2" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" />
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>