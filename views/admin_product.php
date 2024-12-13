<?php
            include 'nav/sidebar.php';
            include 'nav/topnav.php'; ?>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Date</th>
        </tr>
        <?php foreach ($productInfo as $product) { ?>
            <tr>
                <td><?php echo $product['prod_name']; ?></td>
                <td><?php echo $product['prod_price']; ?></td>
                <td><?php echo $product['prod_date']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
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


    