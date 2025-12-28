<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/Proyectos_Edu_Priv/01_Navidad/CSS/estilos.css">
    <title>Recetas - Navidad</title>
</head>

<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
        <a class="navbar-brand" href="#">- 01 - Navidad</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/Proyectos_Edu_Priv/01_Navidad/index.php"
                        aria-current="page">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" aria-current="page">Información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Proyectos_Edu_Priv/01_Navidad/PAGES/PAGE/recetas.php"
                        aria-current="page">Recetas</a>
                </li>
            </ul>
            <div class="d-flex">
                <?php if (isset($_SESSION['id_usuario'])): ?>
                <div class="d-flex align-items-center">
                    <span class="text-white me-2">Sesión iniciada:
                        <strong><?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?></strong></span>
                    <a href="../../PHP/index.php" class="btn btn-light btn-sm ms-2">Mi cuenta</a>
                </div>
                <?php else: ?>
                <a href="../login.php" class="btn login-btn-custom">🎅 Iniciar Sesión</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container mt-3">
        <div class="jumbotron">
            <h1 class="display-4">Vanillekipferl</h1>
            <p class="lead">Los Vanillekipferl son galletas alemanas en forma de media luna, suaves y mantecosa, con
                sabor a vainilla y almendra.</p>
            <hr class="my-4">
            <p>Ahora te mostraremos los pasos para prepararlas.</p>
        </div>
    </div>

    <!-- Cards -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8 mb-3">
                <div class="card">
                    <img src="../../../../IMG/vanillekipferl.jpg" class="card-img-top" alt="Receta3">
                    <div class="card-body">
                        <!-- Ingredientes -->
                        <h5>Ingredientes:</h5>
                        <p><b>-</b> 250 gr. de harina</p>
                        <p><b>-</b> 1 cucharadita levadura en polvo</p>
                        <p><b>-</b> 125 gr azúcar</p>
                        <p><b>-</b> 20 gr azúcar vainilla</p>
                        <p><b>-</b> 3 yemas</p>
                        <p><b>-</b> 200 gr mantequilla</p>
                        <p><b>-</b> 125 gr almendras molidas</p>
                        <p><b>-</b> 100 azúcar glass</p>

                        <!-- Preparación -->
                        <h5>Preparación:</h5>
                        <p><b>1. </b> Separamos las yemas de la claras. Tamizamos la harina y la levadura. En un bol
                            añadimos la harina junto con la levadura, las yemas, la mantequilla,las almendras,
                            el azúcar normal y vainilla. Mezclamos bien, amasamos hasta obtener una masa homogénea,
                            dejamos reposar durante dos
                            horas.
                        </p>
                        <p><b>2. </b> Cortar la masa y vamos dando forma de media luna, colocamos sobre la bandeja.
                            Horneamos a 200ºC horneamos durante 6 minutos o hasta que estén ligeramente doradas.
                            Espolvoreamos con azúcar glasé o azúcar vainilla.
                        </p>

                        <a href="../Alemania.php" class="btn btn-danger">Volver atrás</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5y+5hb7ieS2d3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- Fin contenido de la página -->

    <!-- Footer -->
    <footer class="py-1 mt-3 footer-principal bg-danger">
        <ul class="nav justify-content-center border-bottom pb-1 mb-1">
            <li class="nav-item"><a href="../Proyectos_Edu_Priv/01_Navidad/index.php"
                    class="nav-link px-2 py-0 text-body-secondary footer-link">Inicio</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 py-0 text-body-secondary footer-link">Información
                    general</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 py-0 text-body-secondary footer-link">Sobre
                    nosotros</a></li>
        </ul>

        <p class="text-center text-body-secondary mb-0 footer-texto bg-danger">© 2025 Navidad. Todos los derechos
            reservados.|
            <a rel="license" href="https://creativecommons.org/licenses/by-nc/4.0/"
                class="text-decoration-none text-body-secondary">
                Licencia Creative Commons
            </a>
        </p>
    </footer>

</body>

</html>