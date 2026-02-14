<?php

use Admin\Models;

$objEmpresa = new Models\EmpresaModel;
$objCategorias = new Models\CategoriasModel;
$objPublicacion = new Models\PublicacionModel;
$dataEmpresa = $objEmpresa->listEmpresa()[1];
$dataCategorias = $objCategorias->listCategoriasInWeb();
$listPublicaciones = $objPublicacion->listPublicacionesInWeb(0, 5);
if (isset($URI[1])) {
    if ($URI[1] == 'preview') {
        $idcateg = $_POST['idcatg'];
        $dataPub = $_POST;
        $dataPub['categoria'] = $dataCategorias[$idcateg]['nombre'];
    } else {
        $tagname = $URI[1];
        $dataPub = $objPublicacion->buscarPublicacionxTag($tagname);
        $idcateg = $dataPub['idcatg'];
        $dataPub['categoria'] = $dataCategorias[$idcateg]['nombre'];
    }
} else {
    header('Location: /404');
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Colegio Santo Domingo El Líder</title>
    <link rel="icon" href="<?= PATH_PUBLIC ?>/img/icons/escudo.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/web.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/networks.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/modal-contacto.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/fonts/font-awesone/css/all.min.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/fonts/font-awesone/css/brands.min.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/fonts/font-awesone/css/solid.min.css">

</head>

<body>


    <style>
        .button5 {
            background-color: var(--color1);
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
            border: none;
            border-radius: 50px;
        }

        .button5:hover {
            background-color: var(--color1);
            transform: scale(1.06);
        }

        .lista {
            margin-top: 3rem;
            margin-bottom: 5rem;
        }

        .lista .card {
            transition: transform .3s ease-in-out;
        }

        .lista .card:hover {
            transform: scale(1.06);
        }

        .list-group .list-group-item:hover {
            background: var(--color2);
            /* color: #fff; */
        }

        .text {
            margin-top: 1rem;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-align: justify;
            color: #555;
            font-size: 17px;
            line-height: 1.6;
        }

        .btn1 {
            background-color: var(--color1);
            padding: .8rem 1rem;
            font-weight: 600;
            border-radius: 0;
            width: 200px;
            text-align: center;
        }

        .btn1 a {
            color: #FFF;
        }

        .btn1:hover {
            background-color: var(--color2);
            color: var(--color2);
        }

        .btn1:hover a {
            color: #000;
        }

        strong {
            font-weight: bold;
        }

        video {
            width: 100%;
            height: auto;
        }

        @media (max-width: 750px) {
            .redes iframe {
                display: none;
            }
        }

        .svg-inline--fa {
            box-sizing: content-box;
            display: var(--fa-display, inline-block);
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
            width: var(--fa-width, 1.25em);
        }
    </style>
    <?php include_once PATH_ROOT . '/views/web/partials/header.php'; ?>
    <?php include_once PATH_ROOT . '/views/web/partials/redes.php'; ?>
    <!-- <section class="container-fluid portada px-0">
        <div class="titleContainer">
            <div class="animate__animated animate__fadeInLeft">
                <h2 class="title1">
                    Inicial
                </h2>
            </div>
        </div>
        <img src="<?= PATH_PUBLIC ?>/img/web/inicial-portada.jpg" alt="">
    </section> -->


    <section class="container lista">
        <div class="row justify-content-between">
            <div class="col-md-8">
                <div class="card-header">
                    <div class="px-2 pt-4">
                        <h3 class="text-uppercase fw-bold" style="color: var(--color1);font-family: 'Montserrat', sans-serif;"><?= $dataPub['titulo'] ?></h3>
                        <div>
                            <p style="color: var(--color1);"> <span class="mr-3"> <svg class="svg-inline--fa fa-calendar-days" aria-hidden="true" data-prefix="fas" data-icon="calendar-days" role="img" viewBox="0 0 448 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 32 0c35.3 0 64 28.7 64 64l0 288c0 35.3-28.7 64-64 64L64 480c-35.3 0-64-28.7-64-64L0 128C0 92.7 28.7 64 64 64l32 0 0-32c0-17.7 14.3-32 32-32zM64 240l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 368l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z"></path>
                                    </svg></span><?= date('M d, Y', strtotime($dataPub['fecpub'])) ?></p>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="cuerpo-pub" class="card-body p-1">
                    <?= $dataPub['cuerpo'] ?>
                </div>
                <div class="col-md text-center pt-5">

                    <a href="/comunicados"><button class="button5">Ver Más</button></a>
                </div>

            </div>

            <div class="col-md-4 my-2">
                <div class="mx-4 sticky-col">

                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsantodomingolider&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=928526382184489" width="100%" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>

        </div>

    </section>


    <!-- footer -->
    <?php include_once PATH_ROOT . '/views/web/partials/footer.php'; ?>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        //Para que fontaawesone no ponga svg por default y use la etiqueta i por default
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        };
    </script>
     <!-- Font Awesome JS -->
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/all.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/brands.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/fonts/font-awesone/js/solid.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contentHtml = document.querySelector('#cuerpo-pub');

            if (contentHtml) {
                const iframes = contentHtml.querySelectorAll('iframe');
                let pdfCounter = 0;

                iframes.forEach(iframe => {
                    const initialSrc = iframe.src;

                    if (initialSrc && initialSrc.toLowerCase().includes('.pdf')) {
                        pdfCounter++;
                        const pdfJsViewerUrl = "/lib/pdfjs/web/viewer.html?file=";
                        const newSrc = pdfJsViewerUrl + encodeURIComponent(initialSrc);

                        iframe.id = 'pdfViewer' + pdfCounter;
                        iframe.src = newSrc;
                        iframe.frameBorder = "0";

                        let width = iframe.style.width || iframe.getAttribute('width');

                        if (width) {
                            const widthInPixels = parseInt(width);
                            if (!isNaN(widthInPixels)) {
                                const containerWidth = contentHtml.offsetWidth;
                                const percentage = (widthInPixels / containerWidth) * 100;


                                if (percentage >= 90) {
                                    iframe.style.width = "100%";
                                } else if (percentage >= 70) {
                                    iframe.style.width = "80%";
                                } else if (percentage >= 40) {
                                    iframe.style.width = "50%";
                                }

                            }
                        } else {

                            iframe.style.width = "100%";
                        }

                        if (!iframe.style.height && !iframe.getAttribute('height')) {
                            iframe.style.height = "600px";
                        }

                        const parent = iframe.parentElement;
                        if (parent) {
                            const parentAlign = window.getComputedStyle(parent).textAlign
                            if (parentAlign === 'center' || iframe.getAttribute('align') === 'center') {
                                iframe.style.display = 'block';
                                iframe.style.margin = '0 auto';
                            }
                        }
                    }
                });
            }
        });
    </script>
</body>


</html>