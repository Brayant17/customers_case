<!-- views/layouts/main.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Mi sitio PHP' ?></title>
    <!-- <link rel="stylesheet" href="/assets/style.css"> -->
    <!-- JQueryUI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- Bootstrap CSS vía CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS vía CDN (opcional, para modales, tooltips, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>

    <body>
        <div class="d-flex">
            <!-- Aside -->
            <!-- Sidebar -->
            <aside class="bg-light border-end p-3 d-flex flex-column justify-content-between" style="width: 250px; min-height: 100vh;">
                <div>
                    <h4 class="mb-4">Menú</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/customers_case/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/customers_case/user/1">Usuario</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/customers_case/about">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Otra opción</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="http://localhost/<?= BASE_PATH ?>/logout" type="button" class="btn btn-dark flex-fill">Log out</a>
                </div>

            </aside>

            <main class="p-4">
                <?= $content ?>
            </main>
        </div>
        <!-- posibles scripts -->
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    </body>

</html>