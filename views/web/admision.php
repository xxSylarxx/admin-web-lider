<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder — Admisión</title>
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
        .btn-inscribete:hover,
        .btn-inscribete:focus {
            background: var(--color3);
            color: #fff;
            text-decoration: none;
        }
        .btn-inscribete{
            width: auto;
            animation: scaleEffect 4s infinite ease-in-out;
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
                <h2 class="title1">Admisión</h2>
            </div>
        </div>
        <img src="./public/img/portadas/portada_interna.png" alt="">
    </section>
    <section class="admision-section py-5">
        <div class="container pb-5">
            <div class="row pt-5">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <h2 class="section-title">Proceso de Admisión 2026</h2>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <p class="lead" style="color:var(--color5);">Sigue estos sencillos pasos para formar parte de nuestra familia educativa</p>
                </div>
            </div>
            <div class="row g-4">
                <!-- Paso 1 -->
                <div class="col-lg-4">
                    <div class="admision-card h-100">
                        <div class="admision-card-header">
                            <span class="paso-badge" style="background:var(--color1);">Paso 1</span>
                            <div class="icon-circle" style="border-color:var(--color1);">
                                <i class="fas fa-user-plus fa-2x" style="color:var(--color1);"></i>
                            </div>
                        </div>
                        <div class="admision-card-body">
                            <h4 class="admision-title text-center" style="color:var(--color1);">INSCRIPCIÓN <br> SEPARACIÓN DE VACANTE </h4>
                            <ul class="admision-list">
                                <li><i class="fas fa-check-circle me-2" style="color:var(--color1);"></i>
                                    <span>Completa la inscripción con los datos del padre de familia o apoderado, del alumno y grado.</span>
                                </li>
                                <li><i class="fas fa-check-circle me-2" style="color:var(--color1);"></i>
                                    <span>Copia del DNI del padre de familia y alumno</span>
                                </li>
                                <li><i class="fas fa-check-circle me-2" style="color:var(--color1);"></i>
                                    <span>Se programará la entrevista con el departamento psicopedagógico y se le estará informando al padre de familia la fecha de la entrevista. (enero 2026)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Paso 2 -->
                <div class="col-lg-4">
                    <div class="admision-card h-100">
                        <div class="admision-card-header">
                            <span class="paso-badge" style="background:var(--color3);">Paso 2</span>
                            <div class="icon-circle" style="border-color:var(--color3);">
                                <i class="fas fa-file-alt fa-2x" style="color:var(--color3);"></i>
                            </div>
                        </div>
                        <div class="admision-card-body">
                            <h4 class="admision-title" style="color:var(--color3);">Documentación</h4>
                            <p class="mb-2" style="color:#0DCAF0;"><em><i class="fas fa-info-circle me-1 text-info"></i> Constancia de Vacante: Se entrega después de la entrevista.</em></p>
                            <p class="fw-bold mb-2" style="color:var(--color5);">Requisitos Matrícula 2026:</p>
                            <div class="requisitos-box mb-3">
                                <p class="mb-1 fw-semibold" style="color:var(--color3);"><i class="fas fa-child me-1" style="color:var(--color3);"></i> Inicial 3 años</p>
                                <ul class="admision-sublist">
                                    <li>Tarjeta de vacuna.</li>
                                    <li>Foto de DNI del alumno y PP.FF. (ambos lados).</li>
                                </ul>
                            </div>
                            <div class="requisitos-box mb-3">
                                <p class="mb-1 fw-semibold" style="color:var(--color3);"><i class="fas fa-child me-1" style="color:var(--color3);"></i> Inicial 4 y 5 años</p>
                                <ul class="admision-sublist">
                                    <li>Foto de DNI del alumno y PP.FF. (ambos lados).</li>
                                    <li>Constancia de matrícula del SIAGIE 2025.</li>
                                    <li>Certificado de estudios.</li>
                                    <li>Libreta de notas del último período académico cursado.</li>
                                    <li>Tarjeta de Control de Vacunas.</li>
                                </ul>
                            </div>
                            <div class="requisitos-box">
                                <p class="mb-1 fw-semibold" style="color:var(--color3);"><i class="fas fa-graduation-cap me-1" style="color:var(--color3);"></i>Primaria – Secundaria</p>
                                <ul class="admision-sublist">
                                    <li>Foto de DNI del alumno y PP.FF. (ambos lados).</li>
                                    <li>Constancia de matrícula del SIAGIE 2025.</li>
                                    <li>Certificado de estudios.</li>
                                    <li>Libreta de notas del último período académico cursado.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Paso 3 -->
                <div class="col-lg-4">
                    <div class="admision-card h-100">
                        <div class="admision-card-header">
                            <span class="paso-badge" style="background:var(--color5);">Paso 3</span>
                            <div class="icon-circle" style="border-color:var(--color5);">
                                <i class="fas fa-calendar-check fa-2x" style="color:var(--color5);"></i>
                            </div>
                        </div>
                        <div class="admision-card-body">
                            <h4 class="admision-title" style="color:var(--color5);">Matrícula</h4>
                            <ul class="admision-list">
                                <li><i class="fas fa-check-circle me-2" style="color:var(--color5);"></i>
                                    <span>En el mes de <b> Enero </b> se inicia el proceso de Matrícula 2026.</span>
                                </li>
                                <li><i class="fas fa-check-circle me-2" style="color:var(--color5);"></i>
                                    <span>Se procede a realizar el pago (efectivo o cuenta bancaria).</span>
                                </li>
                            </ul>
                            <div class="text-center mt-4">
                                <i class="fas fa-school fa-4x" style="color:var(--color5);opacity:0.2;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <!--a href="https://wa.me/+51951352404" class="btn btn-lg btn-primary btn-inscribete mt-4" style="background:var(--color1);border:none;font-weight:600;font-size:1.2rem;padding:0.9rem 2.5rem;border-radius:2rem;box-shadow:0 4px 18px rgba(50,125,215,0.10);transition:background 0.2s;" target="_blank">Inscríbete Aquí</a-->
                    <a href="https://lidersd.cubicol.pe/visitante/registro-interesados" class="btn btn-lg btn-primary btn-inscribete mt-4" style="background:var(--color1);border:none;font-weight:600;font-size:1.2rem;padding:0.9rem 2.5rem;border-radius:2rem;box-shadow:0 4px 18px rgba(50,125,215,0.10);transition:background 0.2s;" target="_blank">Inscríbete Aquí</a>
                </div>
            </div>
        </div>
    </section>
    <style>
        .admision-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, .05);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .admision-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(50, 125, 215, 0.15);
        }

        .admision-card-header {
            padding: 2rem 1.5rem 1rem;
            text-align: center;
            position: relative;
            background: linear-gradient(135deg, #f8fafc 0%, #fff 100%);
        }

        .paso-badge {
            display: inline-block;
            padding: 0.4rem 1.2rem;
            border-radius: 20px;
            color: #fff;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            background: #fff;
        }

        .admision-card-body {
            padding: 1.5rem;
        }

        .admision-title {
            font-weight: 700;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .admision-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .admision-list li {
            padding: 0.6rem 0;
            font-size: 1rem;
            color: #444;
            display: flex;
            align-items: flex-center;
            justify-content: start;
        }

        .admision-list li>span {
            margin-top: -5px;
        }

        .admision-sublist {
            list-style: none;
            padding-left: 1rem;
            margin: 0.5rem 0;
        }

        .admision-sublist li {
            font-size: 0.95rem;
            padding: 0.3rem 0;
            color: #555;
            position: relative;
            padding-left: 1rem;
        }

        .admision-sublist li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: var(--color3);
        }

        @media (max-width: 992px) {
            .admision-card {
                margin-bottom: 1.5rem;
            }
        }
    </style>
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