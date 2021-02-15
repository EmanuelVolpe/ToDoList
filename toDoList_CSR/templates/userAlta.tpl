<!DOCTYPE html>
<html lang="en">
<head>
<base href="{BASE_URL}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
        crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>{$pagina}</title>
</head>

<body>

      <h1>{$titulo}</h1>
      <br>
      <main class="container">
            <form action="insertarUsuario" method="POST" class="container row g-3">
                  <div class="row">
                        <div class="col-md-6">
                              <label for="inputAddress" class="form-label">Usuario</label>
                              <input type="text" class="form-control" name="user" />
                        </div>
                        <div class="col-md-6">
                              <label for="inputAddress" class="form-label">Contraseña</label>
                              <input type="text" class="form-control" name="pass" />
                        </div>
                  </div>
                  <div class="6">
                        <button type="submit" class="btn btn-primary">Alta</button>
                  </div>
            </form>
            <br>
      </main>

      {include "footer.tpl"}