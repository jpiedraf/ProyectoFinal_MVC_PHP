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

<body>
    <main class="container-fluid vh-100 d-flex align-items-center justify-content-center page-main">
        <form class="container bg-warning form__log-in"  method="POST"  action="?controller=Session&action=showViewByRole">
            <div class="container">
                <h1 class="mt-3 text-center">Bienvenidos a la tienda Grupo 2</h1>
            </div>
            <div class="container container--one">
                <label class="mb-2">Nombre de usuario</label>
                <input id="userName" class="form-control" type="text" name="userName" placeholder="Ingrese nombre de usuario" required>
            </div>
            <div class="container container--two">
                <label class="mb-2">Contraseña</label>
                <input id="password" type="password" class="form-control" name="password" placeholder="Ingrese contraseña" required>
            </div>
            <div class="container container--three">
                <a href="?controller=Customer&action=showSignInView">Registrar Usuario</a>
            </div>
            <div class="container d-flex justify-content-center container--four">
                <button type="submit" class="btn btn-primary">Acceder</button>
            </div>
        </form>
    </main>
    <script src="public/js/bootstrap.bundle.min.js"></script>
</body>