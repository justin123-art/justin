<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Your Page Title</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="../assets/dist/css/style.css" rel="stylesheet">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        /* Optional: Add any custom styles here */
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    </ul>
                    <form action="../page/authentication.php" class="d-flex">
				
							<button class="btn btn-outline-success <?= isset($_SESSION['loggedin'])? 'd-none': ''?>" type="submit">Login</button>
						</form>
						<a href="../page/logout.php" class="btn btn-outline-success <?= !isset($_SESSION['loggedin'])? 'd-none': ''?>" type="submit">Log out</a>
						</form>
                </div>
            </div>
        </nav>
        
    <!-- Bootstrap Bundle with Popper -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Optional: Your custom scripts -->
    <script src="../assets/dist/js/custom.js"></script>
</body>
</html>