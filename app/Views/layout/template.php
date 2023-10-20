<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Load Stylesheet -->
    <link href="css/styles.css" rel="stylesheet" />

    <title><?= $title; ?></title>
</head>

<body>
    <!-- Navigation-->
    <?= $this->include('layout/navbar'); ?>

    <!-- Content -->
    <?= $this->renderSection('content'); ?>

    <!-- Footer-->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                    <p class="text-muted small mb-4 mb-lg-0">&copy; PN Payakumbuh 2023. Hak Cipta Dilindungi.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-4">
                            <a href="https://pn-payakumbuh.go.id/" target="_blank"><i class="bi-globe fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="https://www.facebook.com/pagespnpayakumbuh/" target="_blank"><i class="bi-facebook fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="https://www.instagram.com/pn.payakumbuh/" target="_blank"><i class="bi-instagram fs-3"></i></a>
                        </li>
                        <li class="list-inline-item me-4">
                            <a href="https://www.youtube.com/channel/UC2vMREl8FkR_UxYmYrOj0vA" target="_blank"><i class="bi-youtube fs-3"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

<body>