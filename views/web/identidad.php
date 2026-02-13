<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Colegio Santo Domingo El Líder — Nosotros</title>
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
    <style>
        /* portada */
        .portada h2 {
            font-family: "Montserrat", sans-serif;
        }

        .portada {
            position: relative;
        }

        .portada .titleContainer {
            background: rgb(0 0 0 / 40%);
            position: absolute;
            /* left: 10%; */
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

        #identidad {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        #identidad h3 {
            font-family: "Montserrat", sans-serif;
            color: var(--color1);
            text-align: center;
            padding-top: .6rem;
            padding-bottom: .6rem;
        }

        #identidad p {
            color: var(--color5);
            text-align: justify;
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

        #valores {
            background-color: var(--color9);
        }

        #valores h3 {
            font-family: "Montserrat", sans-serif;
            text-align: center;
            padding-top: 1rem;
            color: var(--color5);
        }

        /*   #valores h2 {
            font-family: "Montserrat", sans-serif;
        }
 */
        #valores .section-title {
            font-family: "Montserrat", sans-serif;
            color: var(--color5);
            font-weight: 700;
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            /* background: linear-gradient(135deg, var(--color1), var(--color3)); */
            background-color: var(--color3);
            color: var(--color10);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto;
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

        #principios {
            background-color: var(--color9);
        }

        #principios .section-title {
            font-family: "Montserrat", sans-serif;
            color: var(--color1);
            font-weight: 700;
        }

        #principios span {
            font-family: "Montserrat", sans-serif;
            font-size: 1.2rem !important;
        }

        .principle-box {
            background: #fff;
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .principle-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .principle-title {
            font-family: "Inter", sans-serif;
            font-size: 1.5rem;
            color: var(--color1);
            margin-bottom: 0.5rem;
        }

        .principle-description {
            font-family: "Inter", sans-serif;
            font-size: 1rem;
            color: var(--color6);
        }
    </style>
</head>

<body>
    <?php include_once PATH_ROOT . '/views/web/partials/header.php'; ?>
    <?php include_once PATH_ROOT . '/views/web/partials/redes.php'; ?>

    <!-- Main content will be added here -->
    <!-- Bienvenida Section -->
     
    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">
                    Nuestra Identidad
                </h2>
            </div>
        </div>
        <img src="<?= $dataPortada['imagen'] ?>" alt="">
    </section>
    <section id="presentacion-identidad" style="padding-top:4rem;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <p style="color:var(--color5); text-align:justify;">
                        La <b>Institución Educativa Privada Asociación Educativa Santo Domingo, El Líder</b> orienta su labor a la formación integral de niños, niñas y adolescentes de los niveles de Inicial, Primaria y Secundaria, brindando una <b>educación de calidad, inclusiva y equitativa,</b> acorde con las exigencias del mundo actual.
                    </p>
                    <p style="color:var(--color5); text-align:justify;">Nuestra institución promueve el logro de aprendizajes de acuerdo con el Perfil de Egreso, fortaleciendo la práctica de valores personales y sociales, y fomentando una convivencia basada en el respeto, la responsabilidad y la participación democrática, en un entorno de paz y justicia.</p>
                    <p style="color:var(--color5); text-align:justify;">El compromiso permanente de nuestra comunidad educativa se refleja en la mejora continua, la actualización constante y la aplicación de estrategias pedagógicas que elevan la calidad del servicio educativo. Acompañamos a nuestros estudiantes en su proceso formativo, impulsándolos a desarrollar habilidades académicas, personales y sociales que les permitan construir su proyecto de vida con autonomía y liderazgo.</p>
                    <p style="color:var(--color5); text-align:justify;">Nuestra identidad se sustenta en una educación que forma personas íntegras, reflexivas y preparadas para afrontar los retos del presente y del futuro.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center py-4">
                <div class="col-lg-8">
                    <div style="text-align:center;">
                        <span style="color:var(--color5);font-weight:600;font-size:1.5rem;">SANTO DOMINGO, EL LÍDER <br>
                            FORMANDO LÍDERES GLOBALES
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="identidad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-5 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="content-icon" style="background-color: var(--color2);">
                            <center><img src="<?= PATH_PUBLIC ?>/img/icons/vision.png" alt=""></center>
                        </div>
                    </div>
                    <h3>Visión</h3>
                    <br>
                    <p>Para el 2030, la I.E.P. “Santo Domingo, El Líder” brinda una educación de calidad acorde con los cambios sociales y tecnológicos. Sus estudiantes alcanzan los aprendizajes del Perfil de egreso; los docentes, comprometidos, aplican metodologías activas que impulsan el protagonismo estudiantil; y los directivos ejercen un liderazgo transformador basado en la colaboración y la participación democrática.</p>
                </div>
                <div class="col-lg-5 px-5">
                    <div class="d-flex justify-content-center">
                        <div class="content-icon" style="background-color: var(--color2);">
                            <center><img src="<?= PATH_PUBLIC ?>/img/icons/mision.png" alt=""></center>
                        </div>
                    </div>
                    <h3>Misión</h3>
                    <br>
                    <p>Somos una institución educativa privada que brinda formación integral a estudiantes de inicial, primaria y secundaria, promoviendo valores, convivencia pacífica y actitudes democráticas. Mediante metodologías innovadoras, aseguramos los aprendizajes del Perfil de egreso del Currículo Nacional, respondiendo a los cambios sociales, avances científicos y tecnológicos, y a las necesidades del contexto.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include_once PATH_ROOT . '/views/web/partials/footer.php'; ?>

    <script>
        // Prevent FontAwesome from using SVG by default
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        };
    </script>

    <!-- Font Awesome JS -->
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/all.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/js/bootstrap.bundle.min.js"></script>
</body>

</html>