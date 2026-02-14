<style>
    header .barsup {
        font-size: 13px;
        padding: 0px 7%;
        background: var(--color2);
    }

    header .barsup .contact-item a {
        color: #FCFCFC;
    }

    header .barsup .contact-item a i {
        font-size: 2rem;
    }

    header .barsup .mininav a {
        color: #f4f4f4;
        display: flex;
    }

    header .barsup .mininav a i {
        font-size: 1.2rem;
    }

    header .barsup .mininav .mininav-item {
        margin: 0 10px;
    }

    /* Responsive Styles */
    @media (max-width: 991px) {
        header .barsup .mininav a span {
            display: none;
        }

        header .barsup {
            padding: 0px 3%;
        }

        header .barsup .mininav .mininav-item {
            margin: 0 5px;
        }
    }

    @media (max-width: 767px) {

        /* Ajustar barra superior en móviles - mantener solo iconos */
        header .barsup {
            padding: 0px 2%;
        }

        header .barsup .mininav .mininav-item {
            margin: 0 3px;
        }

        header .barsup .mininav a i {
            font-size: 1rem;
        }

        /* Ajustar logo y brand */
        .site-logo {
            width: 40px !important;
        }

        .brand {
            font-size: 1.1rem !important;
        }

        .brand-text {
            font-size: 0.9rem;
        }

        .header-inner {
            padding: 0.5rem 1rem !important;
        }
    }

    @media (max-width: 576px) {
        .site-logo {
            width: 36px !important;
        }

        .brand {
            font-size: 1rem !important;
        }
    }

    /* Estilos para dropdowns en modo responsive */
    @media (max-width: 991px) {
        .navbar-collapse .dropdown-menu {
            position: static !important;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            box-shadow: none;
        }

        .navbar-collapse .dropdown-item {
            /*  padding: 0.5rem 1.5rem 0.5rem 3rem; */
            color: var(--color6);
            border-left: 3px solid var(--color9);
            /*  margin-left: 1rem; */
        }

        .navbar-collapse .dropdown-item:hover {
            background-color: var(--color9);
            color: var(--color1);
        }

        header .navbar .nav-item {
            margin: 7px 5px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    }
</style>
<header>
    <div class="barsup">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-6 d-flex justify-content-start mininav">

                    <div class="mininav-item my-2"><a href="<?= $dataEmpresa['facebook'] ?>" target="_blank"> <i class="fab fa-facebook"></i> <span class="ms-2">Facebook</span></a></div>
                    <div class="mininav-item my-2"><a href="<?= $dataEmpresa['instagram'] ?>" target="_blank"> <i class="fab fa-instagram"></i> <span class="ms-2">Instagram</span> </a></div>
                    <div class="mininav-item my-2"><a href="<?= $dataEmpresa['youtube'] ?>" target=" _blank"> <i class="fab fa-youtube"></i> <span class="ms-2">Youtube</span> </a></div>
                    <div class="mininav-item my-2"><a href="<?= $dataEmpresa['tiktok'] ?>" target="_blank"> <i class="fab fa-tiktok"></i> <span class="ms-2">Tik Tok</span> </a></div>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center mininav">
                    <div class="mininav-item my-2"><a href="mailto:<?= $dataEmpresa['correo1'] ?>" target="_blank"> <i class="far fa-envelope"></i> <span class="ms-2"><?= $dataEmpresa['correo1'] ?></span> </a></div>
                    <div class="mininav-item my-2"><a href="https://wa.me/<?= $dataEmpresa['whatsapp1'] ?>" target="_blank"> <i class="fab fa-whatsapp"></i> <span class="ms-2">951 352 404</span> </a></div>
                    <div class="mininav-item my-2"><a href="<?= $dataEmpresa['intranet'] ?>" target="_blank"> <img src="<?= PATH_PUBLIC ?>/img/icons/cubo2.png" alt="logo-cubicol" width="20"> <span class="ms-2">Intranet</span> </a></div>
                </div>

            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg" aria-label="Navegación principal">
        <div class="container-fluid header-inner">
            <a class="navbar-brand brand" href="./">
                <img class="site-logo" src="<?= PATH_PUBLIC ?>/img/icons/escudo.png" alt="Santo Domingo El Líder logo" width="56" height="56">
                <span class="brand-text">Santo Domingo <span>, El Líder</span></span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#propuesta" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nosotros
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/historia">Reseña Histórica</a></li>
                            <li><a class="dropdown-item" href="/identidad">Nuestra Identidad</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#propuesta" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Propuesta educativa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/metodologia">Metodología</a></li>
                            <li><a class="dropdown-item" href="/valores">Valores</a></li>
                            <li><a class="dropdown-item" href="/principios">Principios Institucionales</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#niveles" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Niveles
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/inicial">Inicial</a></li>
                            <li><a class="dropdown-item" href="/primaria">Primaria</a></li>
                            <li><a class="dropdown-item" href="/secundaria">Secundaria</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#niveles" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Publicaciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/comunicados">Comunicados</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/galerias">Galería</a>
                    </li>

                    <li class="nav-item mx-2">
                        <a href="/admision" class="cta">Admisión 2026</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>