<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colegio Santo Domingo El Líder — Valores</title>
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
    <style>
        /* Styles copied from identidad.php */
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

        #valores {
            background-color: var(--color9);
        }

        #valores h3 {
            font-family: "Montserrat", sans-serif;
            text-align: center;
            padding-top: 1rem;
            color: var(--color5);
        }

        #valores .section-title {
            font-family: "Montserrat", sans-serif;
            color: var(--color5);
            font-weight: 700;
        }

        .content-icon {
            width: 150px;
            border-radius: 64% 36% 48% 52% / 59% 65% 35% 41%;
            transition: .5s all ease-in-out;
        }

        .content-icon:hover {
            border-radius: 15px;
        }

        .content-icon img {
            width: 40%;
            margin: 2rem;
        }

        .card-title {
            font-family: "Inter", sans-serif;
            font-size: 1.25rem;
            color: var(--color5);
            margin-top: 0.75rem;
        }

        .card-text {
            font-family: "Inter", sans-serif;
            font-size: 1rem;
            color: var(--color6);
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

    <!-- Main content -->
    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">
                    Nuestros Valores
                </h2>
            </div>
        </div>
        <img src="./public/img/portadas/portada_interna.png" alt="">
    </section>

    <section id="valores" class="py-5">
        <div class="container">
            <div class="row pt-5 d-flex justify-content-center">
                <div class="col-lg-10 pb-5">
                   <!--  <div class="d-flex justify-content-center">
                        <h2 class="section-title">Valores Institucionales</h2>
                    </div> -->
                    <!-- <p style="color:var(--color5);text-align:center;">Nuestra Institución demanda de sus actores una identificación con CINCO grandes dominios valóricos:</p> -->
                    <p style="color:var(--color5);text-align:center;">En el <b>Colegio Santo Domingo, El Líder,</b> promovemos una formación basada en valores que fortalecen el carácter, la convivencia y el liderazgo de nuestros estudiantes, preparándolos para actuar con responsabilidad en un entorno global.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 pt-5 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="content-icon" style="background-color: var(--color3);">
                            <center><img src="./public/img/icons/respeto.png" alt=""></center>
                        </div>
                    </div>
                    <h3>Responsabilidad</h3>
                </div>
                <div class="col-lg-4 pt-5 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="content-icon" style="background-color: var(--color3);">
                            <center><img src="./public/img/icons/responsabilidad.png" alt=""></center>
                        </div>
                    </div>
                    <h3>Respeto</h3>
                </div>
                <div class="col-lg-4 pt-5 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="content-icon" style="background-color: var(--color3);">
                            <center><img src="./public/img/icons/solidaridad.png" alt=""></center>
                        </div>
                    </div>
                    <h3>Resiliencia</h3>
                </div>
                <div class="col-lg-4 pt-5 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="content-icon" style="background-color: var(--color3);">
                            <center><img src="./public/img/icons/honestidad.png" alt=""></center>
                        </div>
                    </div>
                    <h3>Solidaridad</h3>
                </div>
                <div class="col-lg-4 pt-5 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="content-icon" style="background-color: var(--color3);">
                            <center><img src="./public/img/icons/tolerancia.png" alt=""></center>
                        </div>
                    </div>
                    <h3>Liderazgo</h3>
                    <p class="card-text text-center">Implica Excelencia, Proactividad, Compromiso, y Mística.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="principios">
        <div class="container-fluid">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-12 pb-5">
                        <div class="d-flex justify-content-center">
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

    <script>
        // Prevent FontAwesome from using SVG by default
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        };
    </script>

    <!-- Font Awesome JS -->
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/all.min.js"></script>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
</body>

</html>