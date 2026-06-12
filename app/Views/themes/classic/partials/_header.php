<!DOCTYPE html>
<html lang="<?= $activeLang->short_form ?>">


<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--twitter og-->
    <meta name="twitter:site" content="BintangData">
    <meta name="twitter:creator" content="BintangData">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="BintangData - Indonesia IT Company: Innovating Today, Securing Tomorrow.">
    <meta name="twitter:description" content="BintangData is an Indonesian IT company specializing in innovation and cybersecurity, ensuring secure and efficient digital solutions">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="BintangData - Indonesia IT Company: Innovating Today, Securing Tomorrow.">
    <meta property="og:description" content="BintangData is an Indonesian IT company specializing in innovation and cybersecurity, ensuring secure and efficient digital solutions">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description" content="BintangData is an Indonesian IT company specializing in innovation and cybersecurity, ensuring secure and efficient digital solutions">
    <meta name="author" content="BintangData">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>BintangData - Indonesia IT Company: Innovating Today, Securing Tomorrow.</title>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lily+Script+One&display=swap" rel="stylesheet">
    <!-- Font -->

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--custom css end-->

</head>




<body class="<?= $darkMode == true ? 'dark-mode' : ''; ?> <?= $activeLang->text_direction == 'rtl' ? 'rtl-mode' : ''; ?>">

    <!--preloader start-->
    <div id="preloader" class="bg-light-subtle">
        <div class="preloader-wrap">
            <img src="<?= base_url('assets/img/favicon.png'); ?>" alt="logo" class="img-fluid preloader-icon">
            <div class="loading-bar"></div>
        </div>
    </div>
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">

        <!--header section start-->
        <header class="main-header w-100 z-10">
            <nav class="navbar navbar-expand-xl navbar-light sticky-header">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="<?= langBaseUrl(); ?>" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="<?= base_url('assets/logo-white.png'); ?>" alt="logo" class="img-fluid logo-white" style="width:250px;" />
                        <img src="<?= base_url('assets/logo.png'); ?>" alt="logo" class="img-fluid logo-color" style="width:250px;" />
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <i class="flaticon-menu"
                             data-bs-toggle="offcanvas"
                             data-bs-target="#offcanvasWithBackdrop"
                             aria-controls="offcanvasWithBackdrop"></i>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-center">
                        <ul class="nav col-12 col-md-auto justify-content-center main-menu">

                            <li>
                                <a href="<?= langBaseUrl(); ?>" class="nav-link">Home</a>
                            </li> 
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Services</a>
                                <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                    <div class="dropdown-grid rounded-custom width-full-3">
                                        <?php include FCPATH . 'include/menu.php'; ?>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <a href="contact" class="nav-link">Contact Us</a>
                            </li> 

                        </ul>
                    </div>
                    <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                        <a href="javascript:void(0)" class="btn btn-link p-1 tt-theme-toggle">
                            <div class="tt-theme-light" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Light"><i
                                         class="flaticon-sun-1 fs-lg"></i></div>
                            <div class="tt-theme-dark" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Dark"><i
                                         class="flaticon-moon-1 fs-lg"></i></div>
                        </a> <a href="login.php" class="btn btn-link text-decoration-none me-2">Sign In</a>
                        <a href="login.php" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </nav>
            <!--offcanvas menu start-->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                <div class="offcanvas-header d-flex align-items-center mt-4">
                    <a href="<?= langBaseUrl(); ?>" class="d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="<?= base_url('assets/logo.png'); ?>" alt="logo" class="img-fluid ps-2" />
                    </a>
                    <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="flaticon-cancel"></i>
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="nav col-12 col-md-auto justify-content-center main-menu">
                        <li>
                            <a href="<?= langBaseUrl(); ?>" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Our Services</a>
                            <div class="dropdown-menu border-0 rounded-custom shadow py-0 bg-white">
                                <div class="dropdown-grid rounded-custom width-full-3">
                                    <?php include FCPATH . 'include/menu.php'; ?>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="contact-us.php" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="action-btns mt-4 ps-3">
                        <a href="login.php" class="btn btn-outline-primary me-2">Sign In</a>
                        <a href="request-demo.php" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
            </div>
            <!--offcanvas menu end-->
        </header> <!--header section end-->

