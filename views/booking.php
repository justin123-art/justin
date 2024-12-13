

<?php
            include 'nav/sidebar.php';
            include 'nav/topnav.php'; ?>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>CustomerName</th>
                        <th>Book_serv_id</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookingInfo  as $info) { ?>
                        <tr>
                            <td><?= $info['book_id'] ?></td>
                            <td><?= $info['book_customername'] ?></td>
                            <td><?= $info['book_serv_id'] ?></td>
                            <td><?= $info['book_date'] ?></td>
                            <td><?= $info['book_status'] ?></td>
                            <td>
                                <a href="booking.php?function=editBooking&&sub_page=editBooking&&id=<?= $info['book_id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="admin_booking.php?function=deleteBooking&&sub_page=deleteBooking&&id=<?= $info['book_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
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