<?php
/**
 * Main Layout Template
 * Based on Chain App Dev Template
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $meta_description ?? 'App Landing Page' ?>">
    <meta name="author" content="<?= $meta_author ?? 'Your Name' ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title><?= $title ?? 'App Landing Page' ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/templatemo-chain-app-dev.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/animated.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
    
    <?= $this->renderSection('styles') ?>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <?= $this->include('partials/header') ?>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Login Modal ***** -->
    <?= $this->include('partials/login_modal') ?>
    <!-- ***** End Login Modal ***** -->
    
    <!-- ***** Flash Messages ***** -->
    <?= $this->include('partials/flash_messages') ?>
    <!-- ***** End Flash Messages ***** -->

    <!-- ***** Main Content Start ***** -->
    <?= $this->renderSection('content') ?>
    <!-- ***** Main Content End ***** -->

    <!-- ***** Footer Start ***** -->
    <?= $this->include('partials/footer') ?>
    <!-- ***** Footer End ***** -->

    <!-- Scripts -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/owl-carousel.js') ?>"></script>
    <script src="<?= base_url('assets/js/animation.js') ?>"></script>
    <script src="<?= base_url('assets/js/imagesloaded.js') ?>"></script>
    <script src="<?= base_url('assets/js/popup.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
    
    <?= $this->renderSection('scripts') ?>
</body>

</html>