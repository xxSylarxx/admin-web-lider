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

        #historia-colegio p {
            color: var(--color5);
            text-align: justify;
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
                            <div class="card-body text-justify" style="padding: 1rem 5rem 5rem 5rem;">
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
                                        <p>La Institución Educativa Privada “Asociación Educativa Santo Domingo, El Líder” nace bajo la promotoría de la Asociación Educativa del mismo nombre, con el liderazgo del Magíster Carlos Bernardo Ruiz De La Cruz. Inicia el servicio educativo en los niveles de Inicial, Primaria y Secundaria de Educación Básica Regular en el 2026 en el distrito de Carabayllo.</p>
                                        <p>Sus fundadores asumen el nombre "Santo Domingo, El líder" inspirados en los principios y valores del Consorcio Santo Domingo de Guzmán, así como de su patrono. De manera que nuestro proyecto refleja con claridad una alternativa disruptiva de servicio educativo que busca atender las necesidades y demandas educativas, tanto local y global, respondiendo a la visión institucional.</p>
                                        Pondremos en práctica valores como la integridad, la responsabilidad y el compromiso con la formación de líderes del futuro.
                                        <p>
                                            Por otro lado, en un contexto educativo competitivo, nuestra institución busca diferenciarse de otras, fomentamos un ambiente de superación y excelencia continua, motivando a todos los miembros de la comunidad educativa a dar lo mejor de sí mismos. Asimismo, afianzamos a la comunidad educativa en su compromiso con la visión y la misión institucional, asegurando calidad de los aprendizajes.</p>
                                        <p>
                                            De esta manera, la I.E.P. “Santo Domingo, El líder” es una institución educativa estratégica que refleja valores, identidad, reconocimiento y una misión clara; ya que busca formar ciudadanos líderes en innovación, práctica de valores y competitivos que contribuyen con el desarrollo del país.</p>
                                        </p>
                                        <p>Fraternalmente,  </p>
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