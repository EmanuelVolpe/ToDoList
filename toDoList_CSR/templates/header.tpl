
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
            <a class="navbar-brand">ToDoList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="listar">TAREAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listar-csr">TAREAS CSR</a>
                    </li>
                    {if isset($smarty.session.nombre)}
                        <li class="nav-item ml-auto">
                            <a class="nav-link" href="logout">{$smarty.session.nombre} (LOGOUT)</a>
                        </li>
                    {/if}
                </ul>
            </div>
        </nav>
    </header>

    <br/>