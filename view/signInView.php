<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Grupo 2 - Programación Avanzada" />
    <meta name="keywords" content="store, covid, online, clean" />
    <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/css/style.css" />
    <title>Tienda en linea</title>
</head>

<body class="py-5 px-0">
    <main class="container-fluid d-flex align-items-center justify-content-center">
        <form class="container bg-warning form__sign-in" method="post" action="?controller=Customer&action=registerCustomer">
            <div class="container d-flex align-items-center justify-content-center">
                <h1 class="mt-3 text-center">Registrarse</h1>
            </div>
            <div class="container container--one">
                <label class="mb-2">Nombre de usuario</label>
                <input class="form-control" type="text" name="userNameCustomer" placeholder="Ingrese nombre de usuario" required>
            </div>
            <div class="container container--one">
                <label class="mb-2">Primer Nombre</label>
                <input class="form-control" type="text" name="firstName" placeholder="Ingrese nombre" required>
            </div>
            <div class="container container--one">
                <label class="mb-2">Apellido</label>
                <input class="form-control" type="text" name="lastName" placeholder="Ingrese apellido" required>
            </div>
            <div class="container container--one">
                <label class="mb-2">Fecha Nacimiento</label>
                <input class="form-control" type="date" name="dateBirth" placeholder="Ingrese fecha de nacimiento" required>
            </div>
            <div class="container container--one">
                <label class="mb-2">Dirección</label>
                <input class="form-control" type="text" name="address" placeholder="ingrese Dirección" required>
            </div>
            <div class="container container--two">
                <label class="mb-2">Contraseña</label>
                <input type="password" class="form-control" name="passwordCustomer" placeholder="ingrese Contraseña" required>
            </div>
            <div class="container container--three-sign-in">
                <label class="mb-2">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="passwordConfirmedCustomer" placeholder="confirme Contraseña" required>
            </div>
            <div class="container d-flex justify-content-center container--four">
                <a href="?controller=Index&action=showIndexView" class="btn btn-danger">Regresar</a>
                <button type="submit" class="btn btn-primary mx-2">Registrar</button>
            </div>
        </form>
    </main>
    </div>
    <script src="public/js/bootstrap.bundle.min.js"></script>
</body>