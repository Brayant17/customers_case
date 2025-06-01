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
    <style>
        .button-menu {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 5px;
            width: 100%;
            padding: .4rem .5rem;
            border-radius: .5rem;
            color: #222;
            text-decoration: none;
            font-weight: 500;
            transition: .95s ease;
        }

        .button-menu:hover {
            background-color: #222;
            color: #f6f6f8;
        }

        .title-menu h4 {
            font-weight: 500;
            margin: 0;
        }

        .title-menu p {
            font-size: .9rem;
            margin: 0;
        }

        .user-info-menu {
            background-color: #f6f6f8;
            padding: .7rem .5rem;
            margin: 1rem 0;
            border-radius: .5rem;
            border: 1px solid;
            border-color: hsl(214, 34%, 91%, 1);
        }

        .user-info-menu p {
            font-weight: 500;
            font-size: 1rem;
            line-height: .9;
            margin: 0;
        }

        .user-info-menu span {
            font-size: .875rem;
        }
    </style>
</head>


<body style="background-color: #f6f6f8;">
    <div class="d-flex">
        <!-- Aside -->
        <!-- Sidebar -->
        <aside class="bg-light border-end p-3 d-flex flex-column justify-content-between" style="min-width: 250px; min-height: 100vh; background-color: #fdfdfd;">
            <div>
                <div class="title-menu">
                    <h4>Customers Case</h4>
                    <p>Cartera de clientes simple</p>
                </div>
                <div class="user-info-menu">
                    <p><?= $user = currentUser()['name']; ?></p>
                    <span class="m-0"><?= $user = currentUser()['email']; ?></span>
                </div>
                <ul class="nav flex-column gap-3">
                    <li class="nav-item">
                        <a class="button-menu" role="button" href="/customers_case/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-smart-home">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M19 8.71l-5.333 -4.148a2.666 2.666 0 0 0 -3.274 0l-5.334 4.148a2.665 2.665 0 0 0 -1.029 2.105v7.2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-7.2c0 -.823 -.38 -1.6 -1.03 -2.105" />
                                <path d="M16 15c-2.21 1.333 -5.792 1.333 -8 0" />
                            </svg>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-menu" href="/customers_case/user/1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg>
                            <span>Usuario</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-menu" href="/customers_case/about">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-layout-list">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                <path d="M4 14m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                            </svg>
                            <span>Acerca de</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="button-menu" href="/customers_case/deals/config">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-transfer-up-down">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 21v-6" />
                                <path d="M20 6l-3 -3l-3 3" />
                                <path d="M10 18l-3 3l-3 -3" />
                                <path d="M7 3v2" />
                                <path d="M7 9v2" />
                                <path d="M17 3v6" />
                                <path d="M17 21v-2" />
                                <path d="M17 15v-2" />
                            </svg>
                            <span>Deals Stage</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <a href="http://localhost/<?= BASE_PATH ?>/logout" type="button" class="button-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M9 12h12l-3 -3" />
                        <path d="M18 15l3 -3" />
                    </svg>
                    <span>Log out</span>
                </a>
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