
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CARWASH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assets/libraries/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
   <link rel="stylesheet" href="../assets/css/style.css">
</head><!-- Sidebar Start -->

<?php
// Determine the current page
$current_page = basename($_SERVER['PHP_SELF']); // Get the currently running script's filename
?>

<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">
                <!-- SVG and branding goes here -->
            </h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="../assets/img//bg/prof.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Justin Catanoy</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="admin_dashboard.php" class="nav-item nav-link <?php if($current_page == 'admin_dashboard.php') echo 'active'; ?>"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown <?php if($current_page == 'admin_product.php' || $current_page == 'admin_sales.php') echo 'active'; ?>">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-receipt-cutoff"></i>Inventory</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="admin_product.php" class="nav-item nav-link <?php if($current_page == 'admin_product.php') echo 'active'; ?>"><i class="fa fa-tag icon"></i>Product</a>
                    <a href="admin_sales.php" class="nav-item nav-link <?php if($current_page == 'admin_sales.php') echo 'active'; ?>"><i class="fa fa-shopping-cart icon"></i>Sales</a>
                </div> 
            </div>
            <a href="admin_booking.php" class="nav-item nav-link <?php if($current_page == 'admin_booking.php') echo 'active'; ?>"><i class="fa fa-calendar"></i>Bookings</a>
            <a href="admin_feedback.php" class="nav-item nav-link <?php if($current_page == 'admin_feedback.php') echo 'active'; ?>"><i class="bi bi-chat-right-text-fill me-2"></i>Feedback</a>
            <a href="admin_service.php" class="nav-item nav-link <?php if($current_page == 'admin_charts.php') echo 'active'; ?>"><i class="fa fa-chart-bar me-2"></i>Services</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
        <!-- Sidebar End -->
           <!-- JavaScript Libraries -->
            <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libraries/chart/chart.min.js"></script>
    <script src="../assets/libraries/easing/easing.min.js"></script>
    <script src="../assets/libraries/waypoints/waypoints.min.js"></script>
    <script src="../assets/libraries/owlcarousel/owl.carousel.min.js"></script>
    <script src="../assets/libraries/tempusdominus/js/moment.min.js"></script>
    <script src="../assets/libraries/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../assets/libraries/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
    
</body>

</html>
