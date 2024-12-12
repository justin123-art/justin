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
</html>