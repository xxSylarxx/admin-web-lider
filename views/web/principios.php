<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder — Nivel Inicial</title>
    <link rel="icon" href="./public/img/icons/escudo.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./public/css/web.css">
    <link rel="stylesheet" href="./public/css/networks.css">
    <link rel="stylesheet" href="./public/css/card-animation.css">
    <link rel="stylesheet" href="./public/css/modal-contacto.css">
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
            /*  border-radius: 20px; */
            /* overflow: hidden; */

            z-index: 1;
            transition: all 0.4s ease;
        }

        /* .welcome-image2-card:hover {
  transform: translateY(-10px);
} */

        .welcome-image2 {
            width: 98%;
            height: auto;
            display: block;
            object-fit: cover;
            border-radius: 15px;
            transition: transform 0.4s ease;
            /*  box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15); */
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
        }
    </style>
</head>

<body>
    <?php include './partials/header.php'; ?>
    <?php include './partials/redes.php'; ?>
    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">
                    Propuesta Educativa
                </h2>
            </div>
        </div>
        <img src="./public/img/portadas/portada_interna.png" alt="">
    </section>
    <!--   <section class="bienvenidos-section py-5">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <p>En el Nivel Inicial del Colegio Santo Domingo – El Líder, acompañamos a nuestros estudiantes en sus primeros años de formación, brindándoles un entorno seguro, afectivo y estimulante, donde cada niño y niña se siente valorado, respetado y motivado a aprender.
                        </p>
                        <p>Nuestra propuesta educativa está orientada al desarrollo integral, fortaleciendo las dimensiones emocional, social, cognitiva y motora, a través de experiencias significativas que parten del juego, la exploración y el descubrimiento.</p>
                        <p>Contamos con docentes especializadas, capacitadas para acompañar cada etapa del desarrollo infantil, promoviendo la autonomía, la creatividad, la curiosidad y el pensamiento crítico desde edades tempranas.</p>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="image-wrapper">
                        <div class="decoration-circle decoration-1"></div>
                        <div class="decoration-circle decoration-2"></div>
                        <div class="welcome-image2-card d-flex justify-content-center align-items-center">
                            <img src="./public/img/web/portada_inicial.jpg" alt="Colegio Santo Domingo El Líder" class="welcome-image2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="horario" class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-4">
                    <div class="d-flex justify-content-center">
                        <h2 class="section-title">Horario de Clases</h2>
                    </div>
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
                                    De 7:40 AM. a 02:20 PM.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section id="infraestructura">
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
                                    <img class="img-fluid border" src="./public/img/web/infra_inicial1.jpg" onclick="showFoto(0);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="./public/img/web/infra_inicial2.jpg" onclick="showFoto(1);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="./public/img/web/infra_inicial3.jpg" onclick="showFoto(2);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="./public/img/galeria/fachada.jpeg" onclick="showFoto(3);">
                                </div>
                            </div>
                            <div class="blog_item">
                                <div class="blog_image">
                                    <img class="img-fluid border" src="./public/img/web/grass.jpg" onclick="showFoto(4);">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section> -->
    <!--  <section id="propuesta">
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
                                    <img src="./public/img/icons/icon-desarrollo.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color1);font-weight:bold;">DESARROLLO INTEGRAL</h4>
                                    <p style="color: var(--color6);">Promovemos el desarrollo emocional, social, cognitivo y motor de nuestros estudiantes, respetando su ritmo de aprendizaje y fortaleciendo su autoestima y autonomía desde los primeros años.
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
                                    <img src="./public/img/icons/icon-juego.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color:var(--color1);font-weight:bold;">APRENDIZAJE A TRAVÉS DEL JUEGO</h4>
                                    <p style="color: var(--color6);">El juego es la base de nuestro aprendizaje. A través de experiencias lúdicas, exploración y actividades creativas, los niños descubren, experimentan y aprenden de manera significativa y natural.</p>
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
                                    <img src="./public/img/icons/icon-valores.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color: var(--color1);font-weight:bold;">FORMACIÓN EN VALORES</h4>
                                    <p style="color: var(--color6);">Fomentamos valores como el respeto, la solidaridad, la responsabilidad y la convivencia, sentando bases sólidas para la formación personal y social de nuestros estudiantes.</p>
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
                                    <img src="./public/img/icons/icon-estimulante.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color: var(--color1);font-weight:bold;">ENTORNO SEGURO Y ESTIMULANTE</h4>
                                    <p style="color: var(--color6);">Brindamos espacios adecuados, seguros y diseñados especialmente para el Nivel Inicial, donde los niños aprenden y juegan en un ambiente de confianza y bienestar.</p>
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
                                    <img src="./public/img/icons/icon-docentes.png" class="mr-3">
                                </div>
                                <div class="col-lg-7 my-auto">
                                    <h4 style="color: var(--color1);font-weight:bold;">DOCENTES ESPECIALIZADAS</h4>
                                    <p style="color: var(--color6);">Contamos con docentes especializadas en educación inicial, capacitadas para acompañar de manera cercana y afectiva el proceso de aprendizaje y desarrollo de cada estudiante.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="principios">
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
    </section>
    <?php include './partials/footer.php'; ?>
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
    <script src="./public/js/bootstrap.bundle.min.js"></script>
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
                './public/img/web/infra_inicial1.jpg',
                './public/img/web/infra_inicial2.jpg',
                './public/img/web/infra_inicial3.jpg',
                './public/img/galeria/fachada.jpeg',
                './public/img/web/grass.jpg'
            ];
            $('#fotoview').attr('src', list[item]);
            $('#modalFoto').modal('show');
        }
    </script>
</body>

</html>