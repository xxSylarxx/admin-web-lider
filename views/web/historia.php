<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder — Historia</title>
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

        .card-body {
            padding: 1rem 6rem 6rem 6rem;
        }

        #historia-colegio p {
            color: var(--color5);
            text-align: justify;
        }

        @media (max-width: 768px) {
            .portada .titleContainer .title1 {
                font-size: 2rem;
            }
            .card-body {
            padding: 1rem 1.5rem 1.5rem 1.5rem;
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
                    Reseña Histórica
                </h2>
            </div>
        </div>
        <img src="./public/img/portadas/portada_interna.png" alt="">
    </section>
    <!-- Aquí puedes agregar el contenido nuevo de la sección histórica -->
    <!-- Sección Historia del Colegio -->
    <section id="historia-colegio" style="padding: 4rem 0;">
        <div class="container">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10">
                        <div class="card  shadow">
                            <div class="card-body text-justify">
                                <br>
                                <br>
                                <div class="row d-flex justify-content-center py-4">
                                    <div class="col-lg-12">
                                        <div style="text-align:center;">
                                            <span style="color:var(--color5);font-weight:bold;font-size:1.5rem;">INSTITUCIÓN EDUCATIVA PRIVADA<br> "ASOCIACIÓN EDUCATIVA SANTO DOMINGO, EL LIDER"</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-12">
                                        <p>
                                            La Institución <b>Educativa Privada “Asociación Educativa Santo Domingo, El Líder”</b> nace bajo la promotoría de la Asociación Educativa del mismo nombre y el liderazgo del <b>Magíster Carlos Bernardo Ruiz De La Cruz,</b> iniciando el servicio educativo en los niveles de Inicial, Primaria y Secundaria de Educación Básica Regular en el año 2026, en el distrito de Carabayllo.
                                        </p>
                                        <p>El nombre <b>“Santo Domingo, El Líder”</b> se inspira en los principios y valores del Consorcio Santo Domingo de Guzmán y de su patrono, reflejando una propuesta educativa que busca responder de manera innovadora a las necesidades y demandas del <b>contexto educativo local y global,</b> en coherencia con la visión institucional.</p>
                                        <p>Nuestra institución promueve <b>valores como la integridad, la responsabilidad y el compromiso,</b> orientados a la formación de líderes del futuro. En un entorno educativo competitivo, fomentamos una cultura de superación y excelencia continua, motivando a toda la comunidad educativa a dar lo mejor de sí misma y a comprometerse con la misión y visión institucional, asegurando la calidad de los aprendizajes.</p>
                                        <p>De esta manera, la <b>I.E.P. Santo Domingo, El Líder</b> se consolida como una institución educativa con identidad, propósito y proyección, orientada a <b>la formación de ciudadanos líderes, innovadores y comprometidos,</b> que contribuyen activamente al desarrollo del país.</p>
                                        <p>Atentamente,  </p>
                                        <br>
                                        <p class="text-center">
                                            <b style="font-size:1.4rem;">LA DIRECCIÓN</b>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <?php include './partials/footer.php'; ?>
    <script>
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        };
    </script>
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/all.min.js"></script>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
</body>

</html>