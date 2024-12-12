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
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal<?= $info['book_id'] ?>">
                                    Delete
                                </button>
                            </td>
                        </tr>

                        <!-- Delete Modal -->
                        <div class="modal fade" id="deleteModal<?= $info['book_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Delete Booking</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this booking?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <a href="booking.php?function=deleteBooking&&sub_page=deleteBooking&&id=<?= $info['book_id'] ?>" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </tbody>
            </table>