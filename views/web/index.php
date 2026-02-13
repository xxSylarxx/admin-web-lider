<?php

use Admin\Models;

$objModal = new Models\ModalModel;
$objBanner = new Models\BannerModel;
$objEmpresa = new Models\EmpresaModel;
$objPublicaciones = new Models\PublicacionModel;
$objSuscripciones = new Models\SuscripcionesModel;

$dataEmpresa = $objEmpresa->listEmpresa()[1];
$dataBanner = $objBanner->listBannerInWeb();
$dataModal = $objModal->obtenerPopUp();
$dataPublicaciones = $objPublicaciones->listPublicacionesInWeb(0, 3);


?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colegio Santo Domingo El Líder — Inicio</title>
    <meta name="description" content="<?= $dataEmpresa['metades'] ?>">
    <meta name="keywords" content="colegio santo domingo, colegio carabayllo, colegio lima norte, escuela, educación, primaria, secundaria, admisiones, bachillerato, actividades extracurriculares">
    <link rel="canonical" href="https://lidersd.edu.pe/">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:locale" content="es_PE">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Colegio Santo Domingo El Líder — Educación de Excelencia | Inicio">
    <meta property="og:description" content="Educación integral y personalizada en Carabayllo, Lima. Académicos, arte, deportes y formación humana. Conoce nuestros programas y admisiones.">
    <meta property="og:url" content="https://lidersd.edu.pe/">
    <meta property="og:site_name" content="Colegio Santo Domingo El Líder">
    <meta property="og:image" content="https://lidersd.edu.pe/public/img/icons/escudo.png">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Colegio Santo Domingo El Líder — Educación de Excelencia">
    <meta name="twitter:description" content="Programas académicos, cultura, deporte y admisiones. Educación que forma líderes del mañana.">
    <meta property="twitter:image" content="https://lidersd.edu.pe/public/img/icons/escudo.png">

    <!-- Icons -->
    <link rel="icon" href="<?= PATH_PUBLIC ?>/img/icons/escudo.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/web.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/networks.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/modal-contacto.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/fonts/font-awesone/css/all.min.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/fonts/font-awesone/css/brands.min.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/fonts/font-awesone/css/solid.min.css">


    <style>
        /* Estilos personalizados para controles del carousel */
        #carouselExampleIndicators .carousel-controls-bottom {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            gap: 20px;
            z-index: 15;
        }

        #carouselExampleIndicators .carousel-indicators {
            background: white;
            border-radius: 20px;
            padding: 10px;
            position: relative;
            bottom: 0;
            margin: 0;
            display: flex;
            gap: 10px;
        }

        #carouselExampleIndicators .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: 2px solid white;
            background-color: var(--color2);
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        #carouselExampleIndicators .carousel-indicators button.active {
            background-color: var(--color1);
            opacity: 1;
            transform: scale(1.2);
        }

        #carouselExampleIndicators .carousel-control-custom {
            width: 45px;
            height: 45px;
            background: white;
            border: 2px solid white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        #carouselExampleIndicators .carousel-control-custom:hover {
            transform: scale(1.1);
        }

        #carouselExampleIndicators .carousel-control-custom .carousel-control-prev-icon,
        #carouselExampleIndicators .carousel-control-custom .carousel-control-next-icon {
            width: 20px;
            height: 20px;
        }

        /* Ocultar controles predeterminados de Bootstrap */
        #carouselExampleIndicators .carousel-control-prev,
        #carouselExampleIndicators .carousel-control-next {
            display: none;
        }

        /* Altura del carousel responsive */
        #carouselExampleIndicators .carousel-item img {
            height: 600px;
            object-fit: cover;
        }

        @media (max-width: 991px) {
            #carouselExampleIndicators .carousel-item img {
                height: auto;
                object-fit: initial;
            }

            #carouselExampleIndicators .carousel-controls-bottom {
                bottom: 25px;
                gap: 18px;
            }
        }

        @media (max-width: 768px) {
            #carouselExampleIndicators .carousel-item img {
                height: auto;
                object-fit: initial;
            }

            #carouselExampleIndicators .carousel-controls-bottom {
                bottom: 20px;
                gap: 15px;
            }

            #carouselExampleIndicators .carousel-control-custom {
                width: 38px;
                height: 38px;
            }
        }

        @media (max-width: 576px) {
            #carouselExampleIndicators .carousel-item img {
                height: auto;
                object-fit: initial;
            }

            #carouselExampleIndicators .carousel-controls-bottom {
                bottom: 15px;
                gap: 12px;
            }

            #carouselExampleIndicators .carousel-control-custom {
                width: 35px;
                height: 35px;
            }

            #carouselExampleIndicators .carousel-indicators {
                padding: 8px;
                gap: 8px;
            }

            #carouselExampleIndicators .carousel-indicators button {
                width: 10px;
                height: 10px;
            }
        }

        /* Estilos de Niveles */
        div.crop {
            height: 240px;
            max-height: 240px;
        }

        div.crop>img {
            height: 240px;
            object-fit: cover;
        }

        #pNiveles div.bg-fade {
            position: absolute;
            width: 100%;
            height: 242px;
            background-color: rgba(36, 36, 36, 0.8);
            text-align: center;
            visibility: hidden;
            -webkit-transition: opacity 900ms, visibility 900ms;
            transition: opacity 900ms, visibility 900ms;
            opacity: 0;
            padding-left: 8px;
            padding-right: 8px;
        }

        #pNiveles div.card {
            box-shadow: 0 0 9px rgba(184, 184, 184, 0.8);
        }

        #pNiveles div.crop:hover div.bg-fade {
            visibility: visible;
            opacity: 1;
        }

        #pNiveles div.bg-fade span {
            color: white;
            font-size: 15px;
            font-weight: bold;
        }

        #pNiveles div.bg-fade a.btn {
            font-size: 14px;
            font-weight: bold;
        }
    </style>

    <!-- JSON-LD: EducationalOrganization + WebSite + Breadcrumb -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@graph": [{
                    "@type": "EducationalOrganization",
                    "@id": "https://lidersd.edu.pe/#organization",
                    "name": "Colegio Santo Domingo El Líder",
                    "url": "https://lidersd.edu.pe/",
                    "logo": "https://lidersd.edu.pe/assets/logo.png",
                    "sameAs": [
                        "https://www.facebook.com/colegiosantodomingolider",
                        "https://www.instagram.com/colegiosantodomingolider"
                    ],
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "Mz. N lote 4 Urbanización Los Ficus de Carabayllo, 5ta Etapa carabayllo",
                        "addressLocality": "Carabayllo",
                        "addressRegion": "Lima",
                        "postalCode": "15121",
                        "addressCountry": "PE"
                    }
                },
                {
                    "@type": "WebSite",
                    "@id": "https://lidersd.edu.pe/#website",
                    "url": "https://lidersd.edu.pe/",
                    "name": "Colegio Santo Domingo El Líder",
                    "potentialAction": {
                        "@type": "SearchAction",
                        "target": "https://lidersd.edu.pe/?s={search_term_string}",
                        "query-input": "required name=search_term_string"
                    }
                },
                {
                    "@type": "BreadcrumbList",
                    "@id": "https://lidersd.edu.pe/#breadcrumbs",
                    "itemListElement": [{
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Inicio",
                        "item": "https://lidersd.edu.pe/"
                    }]
                }
            ]
        }
    </script>

</head>

<body>

    <?php include_once PATH_ROOT . '/views/web/partials/header.php'; ?>
    <?php include_once PATH_ROOT . '/views/web/partials/redes.php'; ?>

    <div class="container-fluid content-banner px-0">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-controls-bottom">
                <button class="carousel-control-custom" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <i class="fas fa-arrow-left" style="font-size:1rem;color:var(--color1);"></i>
                    <span class="visually-hidden">Previous</span>
                </button>

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>

                <button class="carousel-control-custom" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <i class="fas fa-arrow-right" style="font-size:1rem;color:var(--color1);"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= PATH_PUBLIC ?>/img/portadas/slider1.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?= PATH_PUBLIC ?>/img/portadas/slider2.jpg" class="d-block w-100">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <main id="main">

        <!-- Sección de Bienvenidos -->
        <section class="bienvenidos-section py-5">
            <div class="container py-4">
                <div class="row g-5 align-items-center">
                    <!-- Columna de Contenido -->
                    <div class="col-lg-6">
                        <!-- Badge decorativo -->
                        <!-- <div class="welcome-badge d-inline-flex align-items-center gap-2 mb-3">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Educación de Excelencia</span>
                        </div> -->

                        <!-- Título con efecto -->
                        <h2 class="section-title">
                            Bienvenidos
                            <span class="title-decoration"></span>
                        </h2>

                        <!--  <p class="welcome-intro">
                            Señores Padres de Familia y Compañeros de la Vida que nos honran con su visita.
                        </p> -->

                        <!-- Contenido principal -->
                        <div class="welcome-content">
                            <p>
                                La Institución Educativa Privada <b>Asociación Educativa Santo Domingo, El Líder</b> forma parte del Consorcio Educativo Santo Domingo, con 45 años de trayectoria brindando educación de calidad.
                            </p>
                            <p>Nuestra institución tiene como propósito la formación integral de estudiantes de los niveles de Inicial, Primaria y Secundaria, en un entorno educativo basado en la calidad académica, la inclusión y la equidad, garantizando el logro de aprendizajes de acuerdo al Perfil de Egreso.</p>
                            <p>En el Colegio <b>Santo Domingo, El Líder</b> promovemos la práctica de valores, la convivencia armónica y una cultura democrática, formando estudiantes con liderazgo, responsabilidad social y visión global.</p>
                        </div>

                        <!-- Botón de acción -->
                        <a href="/historia" class="cta cta-welcome">
                            <span>Conoce Más Sobre Nosotros</span>
                            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </a>
                    </div> <!-- Columna de Imagen -->
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <!-- Elementos decorativos -->
                            <div class="decoration-circle decoration-1"></div>
                            <div class="decoration-circle decoration-2"></div>

                            <!-- Card de imagen -->
                            <div class="welcome-image-card d-flex justify-content-center align-items-center">

                                <img src="<?= PATH_PUBLIC ?>/img/web/bienvenidos2.jpg" alt="Colegio Santo Domingo El Líder" class="welcome-image">


                                <!-- Badge flotante -->
                                <!--  <div class="floating-badge">
                                    <div class="badge-icon">
                                        <i class="fas fa-quote-left"></i>
                                    </div>
                                    <div class="badge-text">
                                        <strong>Formando Líderes</strong>
                                        <p>Del Mañana</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="niveles-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <h2 class="section-title">Niveles</h2>
                        </div>
                        <p style="color:var(--color5);text-align:center;padding-top:.5rem;font-size:1.3rem;">
                            Conoce nuestra propuesta por niveles.
                        </p>
                    </div>
                </div>
                <div class="row px-2  mt-4" id="pNiveles">
                    <div class="col-md-4 px-2">
                        <div class="card">
                            <div class="crop">
                                <div class="bg-fade">
                                    <br><br><br>
                                    <span>
                                        Disponemos de docentes tituladas y especialistas en educación inicial, además de auxiliares que se encuentran en permanente proceso de capacitación.
                                    </span><br><br>
                                    <a class="btn btn-warning text-white" href="/inicial">
                                        Ver más &nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <img src="<?= PATH_PUBLIC ?>/img/web/portada_inicial.jpg" class="w-100">
                            </div>
                            <div class="card-body text-center">
                                <a href="/inicial" class=" color-prim font-weight-bold" style="color:var(--color1);font-weight: bold;">
                                    NIVEL INICIAL
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-2">
                        <div class="card">
                            <div class="crop">
                                <div class="bg-fade">
                                    <br><br><br>
                                    <span>
                                        Contamos con docentes y auxiliares especializados en educación primaria, además de un sistema tutorial orientado al fortalecimiento de los valores.
                                    </span><br><br>
                                    <a class="btn btn-warning text-white" href="/primaria">
                                        Ver más &nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <img src="<?= PATH_PUBLIC ?>/img/web/portada_primaria.jpg" class="w-100">
                            </div>
                            <div class="card-body text-center">
                                <a href="/primaria" class="color-prim font-weight-bold" style="color:var(--color1);font-weight: bold;">
                                    NIVEL PRIMARIA
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 px-2">
                        <div class="card">
                            <div class="crop">
                                <div class="bg-fade">
                                    <br><br><br>
                                    <span>
                                        Docentes titulados y espcializados en educación secundaria. Enfoque orientado al
                                        desarrollo de las inteligencias múltiples.
                                    </span><br><br>
                                    <a href="/secundaria" class="btn btn-warning text-white">
                                        Ver más &nbsp;<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <img src="<?= PATH_PUBLIC ?>/img/web/portada_secundaria.jpg" class="w-100">
                            </div>
                            <div class="card-body text-center">
                                <a href="/secundaria" class="color-prim font-weight-bold" style="color:var(--color1);font-weight: bold;">
                                    NIVEL SECUNDARIA
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="publicaciones-section">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <h2 class="section-title">Publicaciones</h2>

                        </div>
                    </div>
                </div>
                <div class="row cards d-flex justify-content-center align-items-center" style="position:relative;">
                    <div class="decoration-circle decoration-1"></div>
                    <div class="decoration-circle decoration-2"></div>
                    <div class="col-lg-4 pt-5">
                        <div class="card-galeria card3">
                            <div class="container-galeria">
                                <img id="portada-galeria" src="<?= PATH_PUBLIC ?>/img/galeria/visitas_guiadas.jpg" alt="galeria">
                            </div>
                            <div class="details">
                                <div class="row d-flex">
                                    <div class="col-8">
                                        <div class="mx-3" style="display:flex;justify-content:center;flex-direction:column;">
                                            <h3>Visitas Guiadas</h3>
                                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p> -->
                                            <a class="btn-pub" href="view.php?id=1">Ver Más</a>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end align-items-start">
                                        <img class="d-block mx-4 escudo-badge" src="<?= PATH_PUBLIC ?>/img/icons/escudo.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-5">
                        <div class="card-galeria card3">
                            <div class="container-galeria">
                                <img id="portada-galeria" src="<?= PATH_PUBLIC ?>/img/galeria/fachada.jpeg" alt="galeria">
                            </div>
                            <div class="details">
                                <div class="row d-flex">
                                    <div class="col-8">
                                        <div class="mx-3" style="display:flex;justify-content:center;flex-direction:column;">
                                            <h3>Matrícula 2026</h3>
                                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p> -->
                                            <a class="btn-pub" href="view.php?id=2">Ver Más</a>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end align-items-start">
                                        <img class="d-block mx-4 escudo-badge" src="<?= PATH_PUBLIC ?>/img/icons/escudo.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 pt-5">
                        <div class="card-galeria card3">
                            <div class="container-galeria">
                                <img id="portada-galeria" src="<?= PATH_PUBLIC ?>/img/galeria/p-boletin.jpg" alt="galeria">
                            </div>
                            <div class="details">
                                <div class="row d-flex">
                                    <div class="col-8">
                                        <div class="mx-3" style="display:flex;justify-content:center;flex-direction:column;">
                                            <h3>Boletín Informativo</h3>
                                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p> -->
                                            <a class="btn-pub" href="view.php?id=3">Ver Más</a>
                                        </div>
                                    </div>
                                    <div class="col-4 d-flex justify-content-end align-items-start">
                                        <img class="d-block mx-4 escudo-badge" src="<?= PATH_PUBLIC ?>/img/icons/escudo.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ubicacion-section">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-start">
                            <h2 class="section-title">Ubicación<span class="title-decoration"></span></h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.779788907862!2d-77.0550177892052!3d-11.850682238232707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d9fa896d1159%3A0x9db2e5394a9046f8!2sColegio%20Santo%20Domingo%20El%20Lider!5e0!3m2!1ses!2spe!4v1766056405325!5m2!1ses!2spe" width="100%" height="500" style="border: 20px solid #fff; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!--  <iframe class="shadow-lg" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d487.5100393186484!2d-76.9940203!3d-12.1749352!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b9cc99ff9ae1%3A0xba239e2482b3a265!2sAv.%20Guardia%20Civil%20Sur%20867%2C%20Chorrillos%2015056!5e0!3m2!1ses-419!2spe!4v1700495464385!5m2!1ses-419!2spe" width="100%" height="500" style="border: 20px solid #fff; border-radius: 5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    </div>
                </div>
            </div>
        </section>



    </main>

    <?php include_once PATH_ROOT . '/views/web/partials/footer.php'; ?>

    <script>
        //Para que fontaawesone no ponga svg por default y use la etiqueta i por default
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        };
    </script>

    <!-- Font Awesome JS -->
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/all.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/brands.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/solid.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/js/bootstrap.bundle.min.js"></script>

</body>

</html>