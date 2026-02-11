<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder — Galería</title>
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
        .portada h2 { font-family: "Montserrat", sans-serif; }
        .portada { position: relative; }
        .portada .titleContainer { background: rgb(0 0 0 / 40%); position: absolute; padding-left: 10%; left: 0; right: 0; display: flex; justify-content: start; align-items: flex-end; height: 100%; padding-bottom: 3%; }
        .portada .titleContainer .title1 { font-size: 3rem; color: #fff; padding-left: 10px; }
        .portada img { width: 100%; height: 350px; object-fit: cover; object-position: center 25%; }
        @media (max-width: 768px) { .portada .titleContainer .title1 { font-size: 2rem; } }
    </style>
</head>
<body>
    <?php include './partials/header.php'; ?>
    <?php include './partials/redes.php'; ?>
    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">Galería</h2>
            </div>
        </div>
        <img src="./public/img/portadas/portada_interna.png" alt="">
    </section>
    <section class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card shadow">
                    <div class="card-body py-5">
                        <h3 class="mb-4" style="color:var(--color5);font-family: 'Montserrat', sans-serif;">Próximamente</h3>
                        <p class="lead" style="color:var(--color5);">La sección de galería estará disponible pronto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include './partials/footer.php'; ?>
    <script>
        window.FontAwesomeConfig = { autoReplaceSvg: false };
    </script>
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/all.min.js"></script>
    <script src="./public/js/bootstrap.bundle.min.js"></script>
</body>
</html>
