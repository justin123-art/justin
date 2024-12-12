

<?php
            include 'nav/sidebar.php';
            include 'nav/topnav.php'; ?>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>CustomerName</th>
                        <th></th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookingInfo as $info) { ?>
                        <tr>
                            <td><?= $info['book_id'] ?></td>
                            <td><?= $info['book_customername'] ?></td>
                            <td><?= $info['book_serv_id'] ?></td>
                            <td><?= $info['book_date'] ?></td>
                            <td><?= $info['book_status'] ?></td>
                            <td>
                                <a href="booking.php?function=editBooking&&sub_page=editBooking&&id=<?= $info['book_id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="booking.php?function=deleteBooking&&sub_page=deleteBooking&&id=<?= $info['book_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this booking?')">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>