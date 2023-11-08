<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Tables -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <!-- Load Stylesheet -->

    <link href="<?= base_url() ?>css/styles.css" rel="stylesheet" />
    <link href="<?= base_url() ?>css/loading.css" rel="stylesheet" />

    <!-- Loading Javascript -->
    <!-- <script src="<?= base_url() ?>js/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <title><?= $title; ?></title>
</head>

<body onload="hide_loading();">
    <!-- Loading Page -->
    <div class="loading overlay">
        <div class="lds-spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Navigation-->
    <?= $this->include('layout/navbar'); ?>

    <!-- Content -->
    <?= $this->renderSection('content'); ?>

    <!-- Footer-->
    <footer class="footer bg-light fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-30 text-center text-lg-start my-auto">
                    <p class="text-muted small mb-4 mb-lg-0">&copy; PN Payakumbuh 2023. Hak Cipta Dilindungi.</p>
                </div>
                <div class="col-lg-6 h-30 text-center text-lg-end my-auto">
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

    <script>
        new DataTable('#apm-item');
        new DataTable('#zi-item');

        let fadeTarget = $(".loading");

        function show_loading() {
            fadeTarget.css("display", "block");
        }

        function hide_loading() {
            let counter = fadeTarget.css("opacity");
            let fadeEffect = setInterval(() => {
                if (!counter) {
                    fadeTarget.css("opacity") = 1;
                }
                if (counter > 0) {
                    counter = counter - 0.1;
                    fadeTarget.css("opacity", counter);
                } else {
                    clearInterval(fadeEffect);
                    fadeTarget.css("display", "none");
                }
            }, 100);
        }
    </script>
</body>

</html>

<body>