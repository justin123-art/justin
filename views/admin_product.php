<?php
            include 'nav/sidebar.php';
            include 'nav/topnav.php';
            include_once '../model/admin_model.php';
           $admin = new AdminModel(); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Carwash Bookings</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div> -->

        <!--------------------------Content Here!-------------------------->

        <main class=" ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Add Carwash Product</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>

            <!-- Service Addition Form -->
            <form action="../page/admin_product.php?function=addProduct&&sub_page=addProduct" method="POST" enctype="multipart/form-data" class="mb-4">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Product Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="col-md-12 mb-3">
                    <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input class="form-control" type="number" name="prices" placeholder="Price" required>
                    </div>
                    <div class="col-md-12 text-right">
                        <button class="btn btn-sm btn-primary mt-2">
                            <span class="fas fa-save"></span> Save
                        </button>
                    </div>
                </div>
            </form>

            <!-- Services Table -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="text-align:center">No.</th>
                            <th style="text-align:center">Product Name</th>
                            <th style="text-align:center">Image</th>
                            <th style="text-align:center">Date</th>
                            <th style="text-align:center">Price</th>
                            <th style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $n = 0;
                            foreach ($product as $prod){
                                $n++;
                        ?>
                            <tr>
                                <td style="text-align:center"><?= $n; ?></td>
                                <td style="text-align:center"><?= $prod['prod_name'] ?></td>
                                <td style="text-align:center">
                                    <img src="../images/product/<?= $prod['prod_img'] ?>" width="50px" height="50px" />
                                </td>
                                <td style="text-align:center"><?= $prod['prod_price'] ?></td>
                                <td style="text-align:center"><?=$prod['prod_date'] ?></td>
                              
                                <td style="text-align:center">
                                    <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?=$prod['prod_id'] ?>">Edit</a>  
                                    <a class="btn btn-sm btn-warning" href="../page/admin_product.php?sub_page=product_delete&&function=product_delete&&prod_id=<?=$prod['prod_id'] ?>">Delete</a>
                                </td>
                            </tr>
 
                            <!-- Edit Modal -->
                            <form action="../page/admin_product.php?function=updateprod&&sub_page=updateprod" method="post">    
                                <input type="hidden" name="prod_id" value="<?= $prod['prod_id'] ?>"> 
                                <div class="modal fade" id="edit<?= $prod['prod_id'] ?>" tabindex="-1" aria-labelledby="editLabel<?= $prod['prod_id'] ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editLabel<?=$prod['prod_id'] ?>">Edit Service</h5>
                                            </div>
                                            <div class="modal-body">
                                                <label for="service_name">Product Name:</label>
                                                <input type="text" name="service_name" class="form-control" value="<?= $prod['prod_name'] ?>"><br>
                                                <label for="service_name">Date:</label>
                                                <input type="date" name="date" class="form-control" value="<?= $prod['prod_date'] ?>"><br>
                                                <label for="service_price">Price:</label><br>
                                                <input type="number" name="service_price" class="form-control" value="<?= $prod['prod_price'] ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-warning" data-bs-dismiss="modal">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>

    </div>
    <!-- /.container-fluid -->
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