<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <title>ADMIN - <?= mb_strtoupper(EMPRESA, 'UTF-8') ?></title>
    <link rel="shortcut icon" href="<?= PATH_PUBLIC ?>/img/icons/escudo.png" type="image/png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/admin.css">
    <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/sweetalert2.min.css">
</head>

<body>

    <script async src="<?= PATH_PUBLIC ?>/js/sweetalert2.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            height: 100%;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            height: 100%;
            margin: 0;
            overflow: hidden;
            position: relative;
            background: linear-gradient(135deg, #1f2725 0%, #1e3a8a 100%);
        }

        /* Animated gradient background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg,
                    #1f2725 0%,
                    #1e3a8a 50%,
                    #2563eb 100%);
            animation: gradientShift 15s ease infinite;
            z-index: 0;
        }

        @keyframes gradientShift {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }
        }

        /* Floating shapes */
        .shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.3;
            animation: float 20s ease-in-out infinite;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.2);
            top: -100px;
            left: -100px;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.15);
            bottom: -150px;
            right: -150px;
            animation-delay: 5s;
        }

        .shape-3 {
            width: 250px;
            height: 250px;
            background: rgba(255, 255, 255, 0.1);
            top: 50%;
            right: 10%;
            animation-delay: 10s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -30px) scale(1.1);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        /* Login card with glassmorphism */
        div.card-login {
            width: 400px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 2.5em 2.8em;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.2) inset;
            z-index: 10;
            animation: slideIn 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translate(-50%, -45%);
            }

            to {
                opacity: 1;
                transform: translate(-50%, -50%);
            }
        }

        /* Logo container */
        .logo-container {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .logo-container img {
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.1));
            animation: logoFloat 3s ease-in-out infinite;
        }

        @keyframes logoFloat {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        .card-login h4 {
            background: linear-gradient(135deg, #1f2725 0%, #1e3a8a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
            font-size: 1.5rem;
            margin: 1rem 0 2rem 0;
            letter-spacing: -0.5px;
        }

        /* Form styling */
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .card-login label {
            display: block;
            font-weight: 600;
            font-size: 0.875rem;
            color: #4a5568;
            margin-bottom: 0.5rem;
            letter-spacing: 0.3px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
            font-size: 1rem;
            transition: color 0.3s ease;
            z-index: 1;
        }

        .card-login input.form-control {
            width: 100%;
            padding: 0.875rem 1rem 0.875rem 2.75rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: #ffffff;
            font-family: 'Inter', sans-serif;
        }

        .card-login input.form-control:focus {
            outline: none;
            border-color: #1e3a8a;
            box-shadow: 0 0 0 4px rgba(30, 58, 138, 0.15);
            background: #ffffff;
        }

        .card-login input.form-control:focus+.input-icon {
            color: #1e3a8a;
        }

        /* Button styling */
        .card-login button.btn-primary {
            width: 100%;
            padding: 0.875rem;
            background: linear-gradient(135deg, #1f2725 0%, #1e3a8a 100%);
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(30, 58, 138, 0.4);
            margin-top: 0.5rem;
            letter-spacing: 0.3px;
        }

        .card-login button.btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(30, 58, 138, 0.5);
        }

        .card-login button.btn-primary:active {
            transform: translateY(0);
        }

        .card-login button.btn-primary i {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .card-login button.btn-primary:hover i {
            transform: translateX(3px);
        }

        /* Footer */
        section.fixed-bottom {
            z-index: 5;
        }

        section.fixed-bottom span {
            color: rgba(255, 255, 255, 0.7) !important;
            font-weight: 500;
            font-size: 0.875rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            letter-spacing: 0.5px;
        }

        /* Responsive */
        @media (max-width: 480px) {
            div.card-login {
                width: 90%;
                padding: 2em;
            }
        }
    </style>

    <!-- Floating shapes -->
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>

    <div class="card card-login">
        <div class="text-center logo-container">
            <img src="/public/img/icons/escudo.png" height="90">
            <h4>Web Admin</h4>
        </div>
        <form id="formLogin" onsubmit="verifyUsuario(event)">
            <div class="form-group">
                <label>Usuario</label>
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="nombre" value="admin" autocomplete="off" required>
                    <i class="fas fa-user input-icon"></i>
                </div>
            </div>
            <div class="form-group">
                <label>Contraseña</label>
                <div class="input-wrapper">
                    <input type="password" class="form-control" name="pass" value="admin" required>
                    <i class="fas fa-lock input-icon"></i>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Ingresar<i class="fas fa-sign-in-alt"></i></button>
        </form>
    </div>

    <!-- <section class="fixed-bottom text-center pb-3">
        <span>AdminWeb. 5.0</span>
    </section> -->

    <script>
        const sweetAlert = (mensaje, icon) => {
            Swal.fire({
                icon: icon,
                text: mensaje,
            });
        }

        const verifyUsuario = (e) => {
            e.preventDefault();
            const data = new FormData(document.getElementById('formLogin'));
            fetch('/admin/login/auth', {
                method: 'POST',
                body: data,
                headers: new Headers({
                    'Access-Control-Allow-Origin': '*',
                    'Acces-Control-Allow-Methods': 'GET,POST'
                })
            }).then(function(res) {
                return res.text();
            }).then(function(res) {
                if (res.trim() == 'OK')
                    location.href = '/admin/empresa';
                else
                    sweetAlert(res, "warning");
            }).catch(error => sweetAlert(res, "error"));
        }
    </script>
</body>

</html>