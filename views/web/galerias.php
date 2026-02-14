<?php

use Admin\Models;

$objEmpresa = new Models\EmpresaModel;
$objGalerias = new Models\GaleriasModel;
$objPortada = new Models\PortadasModel;
$objCategorias = new Models\CategoriasGaleriasModel;

$dataEmpresa = $objEmpresa->listEmpresa()[1];
$dataPortada = $objPortada->obtenerPortada('galerias');
$listCategorias = $objCategorias->listCategoriasInWeb();

// Filtro y paginación similar a publicaciones
$filter = isset($URI[1]) ? $URI[1] : 'all';
$pagina = isset($URI[2]) ? $URI[2] : '1';
$initGal = (GAL_MAX_WEB * $pagina) - GAL_MAX_WEB;

if ($filter !== 'all') {
    $dataCategoria = $objCategorias->buscarCategoria($filter, true);
    if ($dataCategoria) {
        $idCateg = $dataCategoria['idcatg'];
        $nameCategoria = $dataCategoria['nombre'];
    } else {
        $idCateg = '%';
        $nameCategoria = 'Todas';
        $filter = 'all';
    }
    $dataGalerias = $objGalerias->listGaleriasInWeb($initGal, GAL_MAX_WEB, $idCateg);
} else {
    $idCateg = '%';
    $nameCategoria = 'Todas';
    $dataGalerias = $objGalerias->listGaleriasInWeb($initGal, GAL_MAX_WEB, $idCateg);
}

// Total de galerías
$total = $objGalerias->totalGalerias($idCateg, true);

?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder — Galerías</title>
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

        @media (max-width: 768px) {
            .portada .titleContainer .title1 {
                font-size: 2rem;
            }
        }

        /* Cards de Galerías */
        .galerias-section {
            padding: 80px 0;
        }

        .gallery-card {
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            background: white;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .gallery-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        }

        .gallery-card .img-container {
            position: relative;
            width: 100%;
            height: 280px;
            overflow: hidden;
        }

        .gallery-card .img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-card:hover .img-container img {
            transform: scale(1.1);
        }

        .gallery-card .img-container .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.7));
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .gallery-card:hover .img-container .overlay {
            opacity: 1;
        }

        .gallery-card .img-container .overlay i {
            font-size: 3rem;
            color: white;
        }

        .gallery-card .card-body {
            padding: 25px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .gallery-card .categoria {
            color: var(--color2);
            font-size: 13px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 10px;
        }

        .gallery-card h3 {
            font-family: "Poppins", sans-serif;
            color: var(--color1);
            font-weight: 600;
            font-size: 18px;
            margin: 10px 0 15px 0;
        }

        .gallery-card .detalle {
            color: #666;
            font-size: 14.5px;
            line-height: 1.6;
            margin-bottom: 15px;
            flex: 1;
        }

        .gallery-card .meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 15px;
            border-top: 1px solid #e9ecef;
            color: #999;
            font-size: 13px;
        }

        .gallery-card .ver-galeria {
            color: var(--color3);
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .gallery-card .ver-galeria:hover {
            color: var(--color2);
            padding-left: 5px;
        }

        .empty-state {
            text-align: center;
            padding: 100px 0;
        }

        .empty-state i {
            font-size: 5rem;
            color: #ddd;
            margin-bottom: 20px;
        }

        .empty-state h3 {
            color: #999;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <?php include_once PATH_ROOT . '/views/web/partials/header.php'; ?>
    <?php include_once PATH_ROOT . '/views/web/partials/redes.php'; ?>
    <?php if (!empty($dataPortada)) { ?>
        <section class="container-fluid portada px-0">
            <div class="titleContainer">
                <div class="animate__animated animate__fadeInLeft">
                    <h2 class="title1"><?= !empty($dataPortada['titulo']) ? $dataPortada['titulo'] : 'Titulo' ?></h2>
                </div>
            </div>
            <img src="<?= $dataPortada['imagen'] ?>" alt="">
        </section>
    <?php } ?>
    <section class="container py-5">
        <!-- <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <div class="card shadow">
                    <div class="card-body py-5">
                        <h3 class="mb-4" style="color:var(--color5);font-family: 'Montserrat', sans-serif;">Próximamente</h3>
                        <p class="lead" style="color:var(--color5);">La sección de galería estará disponible pronto.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <?php if (count($dataGalerias) > 0) : ?>
                <div class="row g-4">
                    <?php foreach ($dataGalerias as $galeria) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="gallery-card animate__animated animate__fadeInUp">
                                <div class="img-container">
                                    <img src="<?= !empty($galeria['portada']) ? $galeria['portada'] : PATH_PUBLIC . '/img/icons/portada_galeria.jpg' ?>"
                                        alt="<?= $galeria['titulo'] ?>">
                                    <div class="overlay">
                                        <i class="fas fa-images"></i>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <?php if (!empty($galeria['categoria'])) : ?>
                                        <div class="categoria"><?= $galeria['categoria'] ?></div>
                                    <?php endif; ?>
                                    <h3><?= $galeria['titulo'] ?></h3>
                                    <?php if (!empty($galeria['detalle'])) : ?>
                                        <div class="detalle"><?= $galeria['detalle'] ?></div>
                                    <?php endif; ?>
                                    <div class="meta">
                                        <span>
                                            <i class="far fa-calendar-alt"></i>
                                            <?= date('d/m/Y', strtotime($galeria['fecreg'])) ?>
                                        </span>
                                        <a href="/galeria/<?= $galeria['idgaleria'] ?>" class="ver-galeria">
                                            Ver galería <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="card shadow text-center">
                            <div class="card-body py-5">
                                <h3 class="mb-4" style="color:var(--color5);font-family: 'Montserrat', sans-serif;">Próximamente</h3>
                                <p class="lead" style="color:var(--color5);">La sección de galería estará disponible pronto.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Paginación -->
            <div class="row pt-5 ">
                <div class="col-lg">
                    <ul class="pagination justify-content-center">
                        <?= $objGalerias->paginationWeb($filter, $total, $pagina, "/galerias/"); ?>
                    </ul>
                </div>
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