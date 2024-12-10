<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>DASHBOARD</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../assets/dist/css/styles2.css" rel="stylesheet">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet" />
    
    <!-- Favicons -->
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="../assets/css/main.css" rel="stylesheet">

    <style>
    </style>
</head>

<body class="index-page">

    <!-- Navigation -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center me-auto me-lg-0">
                <h1 class="sitename">CARWASH</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownThemeMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    Theme
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownThemeMenu">
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center rounded-1" data-bs-theme-value="light" aria-pressed="false">
                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                            Light
                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center rounded-1 my-1" data-bs-theme-value="dark" aria-pressed="false">
                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                            Dark
                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
                        </button>
                    </li>
                    <li>
                        <button type="button" class="dropdown-item d-flex align-items-center rounded-1 active" data-bs-theme-value="auto" aria-pressed="true">
                            <svg fill="currentColor" class="bi me-2 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
                            Auto
                            <svg fill="currentColor" class="bi ms-auto d-none active-check" width="1em" height="1em"><use href="#check2"></use></svg>
                        </button>
                    </li>
                </ul>
            </div>

            <a class="btn-getstarted" href="index.html#about">Get Started</a>
            <form action="../page/authentication.php" class="d-flex">
                <button class="btn btn-outline-success <?= isset($_SESSION['loggedin']) ? 'd-none' : '' ?>" type="submit">Login</button>
            </form>
            <a href="../page/logout.php" class="btn btn-outline-success <?= !isset($_SESSION['loggedin']) ? 'd-none' : '' ?>" type="submit">Log out</a>
        </div>
    </header>

    <!-- Bootstrap Bundle with Popper -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional: Your custom scripts -->
    <script src="../assets/dist/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
    <!-- Vendor JS Files -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <!-- Main JS File -->
    <script src="../assets/js/main.js"></script>
    <script>
        AOS.init(); // Initialize AOS
    </script>
</body>

</html>