<?php include_once"./components/head.php" ?>
    <main class="container my-4">
        <section class="row justify-content-center">
            <div class="col-12 col-md-5 col-lg-5">
                <header class="text-center mb-4">
                    <h1 class="fs-4 fw-bold mb-0">To Do App</h1>
                    <p>Aplicación sencilla para gestionar tareas.</p>
                </header>
                <form>
                    <input type="text" class="form-control mb-2" placeholder="Inserta una tarea" aria-label="Insertar una tarea">
                    <div class="input-group">
                        <input type="date" class="form-control" placeholder="Taks" aria-label="Insertar una tarea">
                        <button class="btn btn-success">
                            Crear
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </form>
                <section class="d-flex flex-column gap-2 my-5">
                    <header>
                        <h2 class="fs-5 fw-medium mb-1">Tareas</h2>
                    </header>
                    <article class="border border-1 border-ligth rounded-2 px-3 py-2 d-flex justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <input class="form-check-input m-0" type="checkbox">
                                <div>
                                    <h2 class="fs-6 fw-medium m-0">Pasear al perro en la tarde</h2>
                                    <span class="text-small text-secondary m-0 p-0" style="font-size:14px;"><i class="bi bi-calendar me-1"></i> Lunes, 17 de junio</span>
                                </div>
                            </div>
                            <button class="btn m-0">
                                <i class="bi bi-trash-fill fs-6"></i>
                            </button>
                    </article>
                    <article class="border border-1 border-ligth rounded-2 px-3 py-2 d-flex justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <input class="form-check-input m-0" type="checkbox">
                                <div>
                                    <h2 class="fs-6 fw-medium m-0">Pasear al perro en la tarde</h2>
                                    <span class="text-small text-secondary m-0 p-0" style="font-size:14px;"><i class="bi bi-calendar me-1"></i> Lunes, 17 de junio</span>
                                </div>
                            </div>
                            <button class="btn m-0">
                                <i class="bi bi-trash-fill fs-6"></i>
                            </button>
                    </article>
                    <article class="border border-1 border-ligth rounded-2 px-3 py-2 d-flex justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <input class="form-check-input m-0" type="checkbox">
                                <div>
                                    <h2 class="fs-6 fw-medium m-0">Pasear al perro en la tarde</h2>
                                    <span class="text-small text-secondary m-0 p-0" style="font-size:14px;"><i class="bi bi-calendar me-1"></i> Lunes, 17 de junio</span>
                                </div>
                            </div>
                            <button class="btn m-0">
                                <i class="bi bi-trash-fill fs-6"></i>
                            </button>
                    </article>
                </section>
                <section class="d-flex flex-column gap-2 my-5">
                    <header>
                        <h2 class="fs-5 fw-medium mb-1">Completadas</h2>
                    </header>
                    <article class="border border-1 border-ligth rounded-2 px-3 py-2 d-flex justify-content-between">
                            <div class="d-flex align-items-center gap-3">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div>
                                    <h2 class="fs-6 fw-medium m-0 text-decoration-line-through text-secondary">Pasear al perro en la tarde</h2>
                                    <span class="text-small text-secondary m-0 p-0" style="font-size:14px;"><i class="bi bi-calendar me-1"></i> Lunes, 17 de junio</span>
                                </div>
                            </div>
                            <button class="btn m-0">
                                <i class="bi bi-trash-fill fs-6"></i>
                            </button>
                    </article>
                </section>
            </div>
        </section>
    </main>
<?php include_once"./components/footer.php" ?>
