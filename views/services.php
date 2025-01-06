<?php
include 'nav/header.php';
?>

<!-- Services Section -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
    <div class="container">
        <div>
            <div class="mx-auto max-w-2xl text-center">
                <!-- Section Heading -->
                <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                    Our services
                </h2>
                <p class="m-0 mt-2 text-body-emphasis text-4xl tracking-tight fw-bold">
                    Shine On, Drive On
                </p>
                <p class="m-0 mt-4 text-body text-lg leading-8">
                    A Car Wash Experience like No Other
                </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
    <?php foreach ($services as $srvc) { ?>
        <div class="col pt-5 pt-xl-4">
            <div class="card h-100" data-aos="fade" data-aos-delay="0" data-aos-duration="1000">
                <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                    <img src="../images/<?= htmlspecialchars($srvc['serv_img']) ?>" class="object-fit-cover rounded-3" alt="<?= htmlspecialchars($srvc['serv_name']) ?>" loading="lazy">
                </div>
                <div class="card-body text-center">
                    <h3 class="m-0 mt-3 text-warning fw-semibold"><?= htmlspecialchars($srvc['serv_name']) ?></h3>
                    <h4 class="m-0 mt-2 text-danger fw-semibold">$ <?= htmlspecialchars($srvc['serv_price']) ?></h4> 
                    <p class="description mt-2"><?= htmlspecialchars($srvc['serv_desc']) ?></p>
                    <div class="booking-button-container mt-3">
                        <button type="button" class="btn btn-warning booking-button" data-bs-toggle="modal" data-bs-target="#shinyTiresModal">
                            Booking
                        </button>
                    </div>
                </div>
            </div>
        </div><!-- End Service Item -->
    <?php } ?>
</div>
<!-- Modals -->
<!-- Shiny Tires Modal -->
<div class="modal fade" id="shinyTiresModal" tabindex="-1" aria-labelledby="shinyTiresModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shinyTiresModalLabel">Booking Shiny Tires Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="admin_booking.php?function=bookingActive&sub_page=addBooking" method="post">
                    <input type="hidden" name="service_id" value="shiny_tires">
                    <div class="mb-3">
                        <label for="customerName1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="customerName1" name="book_customer" required>
                    </div>
                    <div class="mb-3">
                        <label for="date1" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date1" name="book_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="time1" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time1" name="book_time" required>
                    </div>
                    <div class="mb-3">
                        <label for="status1" class="form-label">Status</label>
                        <select class="form-select" id="status1" name="book_status" required>
                            <option value="">Select Status</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Go Wax Modal -->
<div class="modal fade" id="goWaxModal" tabindex="-1" aria-labelledby="goWaxModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="goWaxModalLabel">Booking Go Wax Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="admin_booking.php?function=addbooking" method="post"> <!-- Updated action -->
                    <input type="hidden" name="service_id" value="go_wax"> <!-- Updated service ID -->
                    <div class="mb-3">
                        <label for="customerName1" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customerName1" name="book_customer" required>
                    </div>
                    <div class="mb-3">
                        <label for="date1" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date1" name="book_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="status1" class="form-label">Status</label>
                        <select class="form-select" id="status1" name="book_status" required>
                            <option value="">Select Status</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Go Bath Modal -->
<div class="modal fade" id="goBathModal" tabindex="-1" aria-labelledby="goBathModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="goBathModalLabel">Booking Go Bath Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="admin_booking.php?" method="post">
                    <input type="hidden" name="service_id" value="shiny_tires">
                    <div class="mb-3">
                        <label for="customerName1" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customerName1" name="book_customer" required>
                    </div>
                    <div class="mb-3">
                        <label for="date1" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date1" name="book_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="status1" class="form-label">Status</label>
                        <select class="form-select" id="status1" name="book_status" required>
                            <option value="">Select Status</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Triple Foam Modal -->
<div class="modal fade" id="tripleFoamModal" tabindex="-1" aria-labelledby="tripleFoamModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tripleFoamModalLabel">Booking Triple Foam Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="admin_booking.php?" method="post">
                    <input type="hidden" name="service_id" value="shiny_tires">
                    <div class="mb-3">
                        <label for="customerName1" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customerName1" name="book_customer" required>
                    </div>
                    <div class="mb-3">
                        <label for="date1" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date1" name="book_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="status1" class="form-label">Status</label>
                        <select class="form-select" id="status1" name="book_status" required>
                            <option value="">Select Status</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Ceramic Shield Modal -->
<div class="modal fade" id="ceramicShieldModal" tabindex="-1" aria-labelledby="ceramicShieldModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ceramicShieldModalLabel">Booking ceramics Shield Dry  Service</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="admin_booking.php?" method="post">
                    <input type="hidden" name="service_id" value="shiny_tires">
                    <div class="mb-3">
                        <label for="customerName1" class="form-label">Customer Name</label>
                        <input type="text" class="form-control" id="customerName1" name="book_customer" required>
                    </div>
                    <div class="mb-3">
                        <label for="date1" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date1" name="book_date" required>
                    </div>
                    <div class="mb-3">
                        <label for="status1" class="form-label">Status</label>
                        <select class="form-select" id="status1" name="book_status" required>
                            <option value="">Select Status</option>
                            <option value="pending">Pending</option>
                            <option value="confirmed">Confirmed</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>
</html>