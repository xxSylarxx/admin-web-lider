<?php

use Admin\Models;

$objEmpresa = new Models\EmpresaModel;
$objCategorias = new Models\CategoriasModel;
$objPublicaciones = new Models\PublicacionModel;
$objPortada = new Models\PortadasModel;
$dataPortada = $objPortada->obtenerPortada('comunicados');
$dataEmpresa = $objEmpresa->listEmpresa()[1];

$filter = isset($URI[1]) ? $URI[1] : 'all';
$pagina = isset($URI[2]) ? $URI[2] : '1';
$initPub = (PUB_MAX_WEB * $pagina) - PUB_MAX_WEB;

if ($filter !== 'all') {
    $dataCategoria = $objCategorias->buscarCategoria($URI[1], false);
    $idCateg = $dataCategoria['idcatg'];
    $nameCategoria = $dataCategoria['nombre'];
    $dataPublicaciones = $objPublicaciones->listPublicacionesInWeb($initPub, PUB_MAX_WEB, $idCateg);
} else {
    $idCateg = '%';
    $nameCategoria = 'All';
    $dataPublicaciones = $objPublicaciones->listPublicacionesInWeb($initPub, PUB_MAX_WEB, $idCateg);
}

// total de publicaciones
$total = $objPublicaciones->totalPublicaciones($idCateg, true);

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder — Comunicados</title>
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
        .publicaciones-section{
            padding-top: 1rem;
            padding-bottom: 3rem;
        }
        
        @media (max-width: 768px) {
            .portada .titleContainer .title1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <?php include_once PATH_ROOT . '/views/web/partials/header.php'; ?>
    <?php include_once PATH_ROOT . '/views/web/partials/redes.php'; ?>
    <?php if(!empty($dataPortada)){ ?>
    <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1"><?= !empty($dataPortada['titulo']) ? $dataPortada['titulo'] : 'Titulo' ?></h2>
            </div>
        </div>
        <img src="<?= $dataPortada['imagen'] ?>" alt="">
    </section>
       <?php } ?>
    <section class="publicaciones-section">
        <div class="container">
            <div class="row pt-5">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <h2 class="section-title">Comunicados</h2>
                    </div>
                </div>
            </div>
            <div class="row cards d-flex justify-content-center align-items-center" style="position:relative;">
                <div class="decoration-circle decoration-1"></div>
                <div class="decoration-circle decoration-2"></div>
                 <?php foreach ($dataPublicaciones as $key => $pub) : ?>
                <div class="col-lg-4 pt-5">
                    <div class="card-galeria card3">
                        <div class="container-galeria">
                            <img id="portada-galeria" src="<?= $pub['portada'] ?>" alt="galeria">
                        </div>
                        <div class="details">
                            <div class="row d-flex">
                                <div class="col-8">
                                    <div class="mx-3" style="display:flex;justify-content:center;flex-direction:column;">
                                        <h3><?= $pub['titulo'] ?></h3>
                                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dignissimos, minus aperiam adipisci exercitationem.</p> -->
                                        <a class="btn-pub" href="/pub/<?= $pub['tagname'] ?>">Ver Más</a>
                                    </div>
                                </div>
                                <div class="col-4 d-flex justify-content-end align-items-start">
                                    <img class="d-block mx-4" src="<?= PATH_PUBLIC ?>/img/icons/escudo.png" width="60%" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php include_once PATH_ROOT . '/views/web/partials/footer.php'; ?>
    <script>
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        };
    </script>
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/all.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/js/bootstrap.bundle.min.js"></script>
</body>

</html>