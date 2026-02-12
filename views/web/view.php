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
    <?php include './partials/header.php'; ?>
    <?php include './partials/redes.php'; ?>

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
            border:none;
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
    </style>

    <!-- header -->
    <?php include_once './partials/header.php'; ?>


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
        <!-- <div>
            <ol class="breadcrumb bg-white pl-0">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Entrevista</a></li>
            </ol>
        </div> -->
        <div class="row justify-content-between">
            <div class="col-md-8">
                <?php include_once './comunicados_files/comunicado' . $_GET['id'] . '.php' ?>
                <div class="col-md text-center pt-5">
                    
                    <a href="./comunicados.php"><button class="button5">Ver Más</button></a>
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
    <?php include_once './partials/footer.php'; ?>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src=".<?= PATH_PUBLIC ?>/fonts/font-awesone/js/all.min.js"></script>
    <script src=".<?= PATH_PUBLIC ?>/fonts/font-awesone/js/brands.min.js"></script>
    <script src=".<?= PATH_PUBLIC ?>/fonts/font-awesone/js/solid.min.js"></script>
    <script src="<?= PATH_PUBLIC ?>/js/bootstrap.bundle.min.js"></script>
</body>


</html>