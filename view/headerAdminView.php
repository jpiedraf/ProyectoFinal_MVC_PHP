<header class="container-fluid page-header m-0 p-0 page-header">
    <nav class="navbar navbar-expand-md navbar-light bg-warning flex-row flex-nowrap">
        <div class="mx-2">
            <a href="?controller=Session&action=logOut" class="btn btn-primary me-auto"><i class="fas fa-arrow-left"></i></a>
        </div>
        <div class="container-fluid justify-content-end">
            <div class="dropdown d-none d-md-flex d-lg-flex">
                <button class="btn btn-secondary dropdown-toggle btn-dropdow text-dark" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Administrador
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li class="nav-item">
                        <a href="?controller=Admin&action=showAdminRegisterView" class="dropdown-item text-dark">Registrar administrador</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=Admin&action=showAdminManageView" class="dropdown-item text-dark">Mantenimiento administrador</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown d-none d-md-flex d-lg-flex">
                <button class="btn btn-secondary dropdown-toggle btn-dropdow text-dark" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li class="nav-item">
                        <a href="?controller=Product&action=showProductRegisterView" class="dropdown-item text-dark">Registrar Producto</a>
                    </li>
                    <li class="nav-item">
                        <a href="?controller=Product&action=showProductManageView" class="dropdown-item text-dark">Administrar Productos</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown d-none d-md-flex d-lg-flex">
                <button class="btn btn-secondary dropdown-toggle btn-dropdow text-dark" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Promociones
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li class="nav-item">
                        <a href="?controller=Promotion&action=showPromotionView" class="dropdown-item text-dark">Registrar Promocion</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown d-none d-md-flex d-lg-flex">
                <button class="btn btn-secondary dropdown-toggle btn-dropdow text-dark" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    Categorias
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li class="nav-item">
                        <a href="?controller=Category&action=showCategoryRegisterView" class="dropdown-item text-dark">Registrar Categoria</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-end align-items-center flex-column">
                <div class="container d-flex justify-content-end">
                <button class="navbar-toggler text-right" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
                <div class="collapse navbar-collapse flex-column" id="toggleMobileMenu">
                    <ul class="nav ms-auto text-dark flex-column flex-md-row align-items-end justify-content-evenly">
                        <li class="nav-item d-flex d-md-none d-lg-none">
                            <a href="?controller=Admin&action=showAdminRegisterView" class="nav-link text-dark">Registrar administrador</a>
                        </li>
                        <li class="nav-item d-flex d-md-none d-lg-none">
                            <a href="?controller=Product&action=showProductRegisterView" class="nav-link text-dark">Registrar Productos</a>
                        </li>
                        <li class="nav-item d-flex d-md-none d-lg-none">
                            <a href="?controller=Category&action=showCategoryRegisterView" class="nav-link text-dark">Crear Categoria</a>
                        </li>
                        <li class="nav-item d-flex d-md-none d-lg-none">
                            <a href="?controller=Promotion&action=showPromotionView" class="nav-link text-dark">Crear promociones</a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=Report&action=showReportView" class="nav-link text-dark">Reportes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>