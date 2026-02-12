<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder — Nivel Primaria</title>
    <link rel="icon" href="<?= PATH_PUBLIC ?>/img/icons/escudo.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/web.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/networks.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/card-animation.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/modal-contacto.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/fonts/font-awesone/css/all.min.css">
    <!-- OwlCarousel CSS necesario para el carrusel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .portada h2 {
            font-family: "Montserrat", sans-serif;
        }

        .portada {
            position: relative;
        }

        .portada .titleContainer {
            background: rgb(0 0 0 / 40%);
            position: absolute;
            padding-left: 10%;
            left: 0;
            right: 0;
            display: flex;
            justify-content: start;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 3%;
        }

        .portada .titleContainer .title1 {
            font-size: 3rem;
            color: #fff;
            padding-left: 10px;
        }

        .portada img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            object-position: center 25%;
        }

        /* Card de imagen */
        .welcome-image2-card {
            position: relative;
            z-index: 1;
            transition: all 0.4s ease;
        }

        .welcome-image2 {
            width: 90%;
            height: auto;
            display: block;
            object-fit: cover;
            border-radius: 15px;
            transition: transform 0.4s ease;
        }

        .welcome-image2-card:hover .welcome-image2 {
            transform: scale(1.05);
        }

        /* Estilos del carousel */
        .blog_section .blog_content .blog_item {
            margin-bottom: 30px;
            position: relative;
            border-radius: 2px;
            overflow: hidden;
        }

        .blog_section .blog_content .blog_item:hover .blog_image img {
            transform: scale(1.1);
            border-radius: 12px;
        }

        .blog_section .blog_content .blog_item .blog_image {
            overflow: hidden;
            padding: 0 7px;
            border-radius: 12px;
        }

        .blog_section .blog_content .blog_item .blog_image img {
            width: 100%;
            height: 330px;
            transition: transform 0.5s ease-in-out;
            border-radius: 12px;
        }

        .blog_section .blog_content .owl-nav {
            display: block;
        }

        .blog_section .blog_content .owl-nav .owl-prev {
            position: absolute;
            left: -27px;
            top: 40%;
            border: 5px solid #fff;
            text-align: center;
            z-index: 5;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            outline: 0;
            background: var(--color1);
            transition: all 0.3s;
            color: #fff;
        }

        .blog_section .blog_content .owl-nav .owl-prev span {
            font-size: 25px;
            margin-top: -5px;
            display: inline-block;
        }

        .blog_section .blog_content .owl-nav .owl-next {
            position: absolute;
            right: -27px;
            top: 40%;
            border: 5px solid #fff;
            text-align: center;
            z-index: 5;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            outline: 0;
            background: var(--color1);
            color: #fff;
            transition: all 0.3s;
        }

        .blog_section .blog_content .owl-nav .owl-next span {
            font-size: 25px;
            margin-top: -5px;
            display: inline-block;
        }

        #infraestructura h2::after {
            background: white;
        }

        #propuesta {
            padding-top: 4rem;
            padding-bottom: 5rem;
            padding-left: 4%;
            padding-right: 4%;
        }

        #propuesta img {
            width: 100%;
        }

        #propuesta p {
            text-align: justify;
        }

        #propuesta .card {
            transition: ease-in-out .9s;
        }

        #propuesta .card:hover {
            transform: scale(1.05);
        }

        @media only screen and (max-width: 577px) {
            .blog_section .owl-nav .owl-prev {
                left: -17px !important;
            }

            .blog_section .owl-nav .owl-next {
                right: -17px !important;
            }
        }

        @media (max-width: 768px) {
            .portada .titleContainer .title1 {
                font-size: 2rem;
            }
            #propuesta img {
                width: 40%;
            }
            #propuesta h4 {
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <?php include_once PATH_ROOT . '/views/web/partials/header.php'; ?>
    <?php include_once PATH_ROOT . '/views/web/partials/redes.php'; ?>
    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">Nivel Primaria</h2>
            </div>
        </div>
        <img src="<?= PATH_PUBLIC ?>/img/portadas/portada_interna.png" alt="">
    </section>
    <section class="bienvenidos-section py-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <!-- Columna de Contenido -->
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <p>
                            En el Nivel Primaria del Colegio <b>Santo Domingo, El Líder</b> acompañamos a nuestros estudiantes en una etapa fundamental de su formación, fortaleciendo de manera progresiva sus aprendizajes académicos, así como su desarrollo personal y social.
                        </p>
                        <p>Nuestra propuesta educativa está orientada al aprendizaje significativo, promoviendo el pensamiento crítico, la autonomía y la responsabilidad, en un entorno que fomenta la participación, el trabajo colaborativo y la convivencia armónica. A través de una formación integral basada en valores, sentamos bases sólidas para el liderazgo y una visión global, preparando a nuestros estudiantes para los retos de las siguientes etapas educativas.</p>
                    </div>
                </div>
                <!-- Columna de Imagen -->
                <div class="col-lg-6 order-1 order-lg-2 my-auto">
                    <div class="image-wrapper">
                        <div class="decoration-circle decoration-1"></div>
                        <div class="decoration-circle decoration-2"></div>
                        <div class="welcome-image2-card d-flex justify-content-center align-items-center">
                            <img src="<?= PATH_PUBLIC ?>/img/web/portada_primaria.jpg" alt="Colegio Santo Domingo El Líder" class="welcome-image2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="horario" class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-4">
                    <div class="d-flex justify-content-center">
                        <h2 class="section-title">Horario de Clases</h2>
                    </div>
                    <!-- <p style="color:var(--color5);text-align:center;padding-top:.5rem;">
                        Nuestros horarios están diseñados para garantizar un equilibrio entre aprendizaje, juego y descanso.
                    </p> -->
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0" style="border-radius: 10px; overflow: hidden;">
                        <div class="card-header text-white text-center py-3" style="background-color: var(--color2);">
                            <h4 class="mb-0"><i class="fas fa-baby me-2"></i>Turno Mañana</h4>
                        </div>
                        <div class="card-body p-4">
                            <p style="text-align: center;color:var(--color5);font-weight:bold;">Lunes a Viernes</p>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex justify-content-center">
                                    <i class="fas fa-clock text-primary me-2 mt-1"></i>
                                    <!-- <strong>Entrada:</strong>  -->De 8:10 AM. a 01:45 PM.
                                </li>
                                <!--  <li class="mb-3">
                                    <i class="fas fa-door-open text-danger me-2"></i>
                                    <strong>Salida:</strong> 01:45 PM.
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="infraestructura">
        <!-- SECCIÓN DEL CARRUSEL -->
        <div class="container-fluid" style="background-color: #327DD7;">
            <br>
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-center">
                            <h2 class="section-title" style="color:white;">Infraestructura</h2>
                        </div>
                    </div>
                </div>
                <section class="blog_section py-5">
                    <div class="blog_content">
                        <div class="owl-carousel owl-theme">
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="<?= PATH_PUBLIC ?>/img/web/infra_primaria1.jpg" onclick="showFoto(0);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="<?= PATH_PUBLIC ?>/img/web/infra_primaria2.jpg" onclick="showFoto(1);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="<?= PATH_PUBLIC ?>/img/web/infra_inicial3.jpg" onclick="showFoto(2);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="<?= PATH_PUBLIC ?>/img/galeria/fachada.jpeg" onclick="showFoto(3);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="<?= PATH_PUBLIC ?>/img/web/grass.jpg" onclick="showFoto(4);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="<?= PATH_PUBLIC ?>/img/web/labingles.jpg" onclick="showFoto(5);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="<?= PATH_PUBLIC ?>/img/web/labcomputo.jpg" onclick="showFoto(6);">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <section id="propuesta">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center pb-4">
                        <h2 class="section-title">Nuestra Propuesta Educativa</h2>
                    </div>

                </div>
            </div>
            <div class="row mx-0 d-flex justify-content-center">
                <div class="col-md-5 pt-5">
                    <div class="card text-white h-100">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="<?= PATH_PUBLIC ?>/img/icons/icon-academico.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color1);font-weight:bold;">DESARROLLO ACADÉMICO</h4>
                                    <p style="color: var(--color6);">Fortalecemos las competencias en comunicación, matemática y ciencias, promoviendo el pensamiento crítico y el aprendizaje significativo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pt-5">
                    <div class="card text-white h-100">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="<?= PATH_PUBLIC ?>/img/icons/icon-acompaniamiento.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color1);font-weight:bold;">ACOMPAÑAMIENTO DOCENTE</h4>
                                    <p style="color: var(--color6);">Brindamos un acompañamiento cercano y personalizado, atendiendo las necesidades de cada estudiante y promoviendo su autonomía y responsabilidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pt-5">
                    <div class="card text-white" style="background-color: white;">
                        <div class="card-body d-flex h-100">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="<?= PATH_PUBLIC ?>/img/icons/icon-equipo.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color: var(--color1);font-weight:bold;">APRENDIZAJE COLABORATIVO</h4>
                                    <p style="color: var(--color6);">Fomentamos el trabajo en equipo y la participación activa, fortaleciendo habilidades sociales y una convivencia respetuosa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pt-5">
                    <div class="card text-white h-100">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="<?= PATH_PUBLIC ?>/img/icons/icon-valores.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color: var(--color1);font-weight:bold;">FORMACIÓN EN VALORES</h4>
                                    <p style="color: var(--color6);">Promovemos valores como el respeto, la responsabilidad y la solidaridad, formando estudiantes comprometidos con su entorno.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pt-5">
                    <div class="card text-white h-100">
                        <div class="card-body d-flex">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-3 my-auto d-flex justify-content-center py-3">
                                    <img src="<?= PATH_PUBLIC ?>/img/icons/icon-liderazgo.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color: var(--color1);font-weight:bold;">BASES PARA EL LIDERAZGO</h4>
                                    <p style="color: var(--color6);">Desarrollamos habilidades personales y sociales que fortalecen el liderazgo y una visión global desde la etapa primaria.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="principios">
        <div class="container-fluid pt-4">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-12 pb-5">
                        <div class="d-flex justify-content-center pb-4">
                            <h2 class="section-title">Principios Institucionales</h2>
                        </div>
                        <p style="color:var(--color5);text-align:center;padding-top:.5rem;">Nuestra Institución Educativa Privada “Asociación Educativa Santo Domingo, el Líder” y se encuentra sustentada en los siguientes principios: </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-balance-scale fa-2x"></i>
                                    <span class="ms-3 fs-4">Ética</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-vote-yea fa-2x"></i>
                                    <span class="ms-3 fs-4">Democracia</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4 ">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-balance-scale-right fa-2x"></i>
                                    <span class="ms-3 fs-4">Equidad</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-11 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-universal-access fa-2x"></i>
                                    <span class="ms-3 fs-4">Inclusión</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-globe-americas fa-2x"></i>
                                    <span class="ms-3 fs-4">Interculturalidad</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-leaf fa-2x"></i>
                                    <span class="ms-3 fs-4">Conciencia Ambiental</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-lightbulb fa-2x"></i>
                                    <span class="ms-3 fs-4">Creatividad e Innovación</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-venus-mars fa-2x"></i>
                                    <span class="ms-3 fs-4">Igualdad de Género</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 px-4">
                        <div class="card card-10 stacked--fan-right" style="font-family: 'Bree Serif', serif; background-color: var(--color3); border: none; border-radius: 7px;">
                            <a class="card-body text-white py-4">
                                <div class="d-flex flex-row align-items-center justify-content-center">
                                    <i class="fas fa-seedling fa-2x"></i>
                                    <span class="ms-3 fs-4">Desarrollo sostenible</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <?php include_once PATH_ROOT . '/views/web/partials/footer.php'; ?>
    <!-- Modal para mostrar la foto ampliada -->
    <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="modalFotoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="padding:0px;">
                <div class="modal-body d-flex justify-content-center">
                    <img class="img-fluid rounded" src="" id="fotoview">
                </div>
            </div>
        </div>
    </div>
    <script>
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        };
    </script>
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/all.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                dots: false,
                nav: true,
                autoplay: true,
                smartSpeed: 2000,
                autoplayTimeout: 9000,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });
        // Función para mostrar la foto en el modal
        function showFoto(item) {
            let list = [
                '<?= PATH_PUBLIC ?>/img/web/infra_primaria1.jpg',
                '<?= PATH_PUBLIC ?>/img/web/infra_primaria2.jpg',
                '<?= PATH_PUBLIC ?>/img/web/infra_inicial3.jpg',
                '<?= PATH_PUBLIC ?>/img/galeria/fachada.jpeg',
                '<?= PATH_PUBLIC ?>/img/web/grass.jpg',
                '<?= PATH_PUBLIC ?>/img/web/labingles.jpg',
                '<?= PATH_PUBLIC ?>/img/web/labcomputo.jpg'
            ];
            $('#fotoview').attr('src', list[item]);
            $('#modalFoto').modal('show');
        }
    </script>
</body>

</html>