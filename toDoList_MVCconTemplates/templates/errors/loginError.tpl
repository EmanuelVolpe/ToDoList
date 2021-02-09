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
    <title>{$pagina}</title>
</head>
{include "header.tpl"}

    <h1>{$error}</h1>
    <h2>{$msgError}</h2>

    <a class='btn btn-primary btn-sm float-right' href='login'>VOLVER</a>

{include "footer.tpl"}