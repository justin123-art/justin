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

        <!-- Service Cards -->
        <div>
            <div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
                
                <!-- Shiny Tires Service -->
                <div class="col pt-5 pt-xl-4">
                    <div class="max-w-xl mx-auto mx-xl-0">
                        <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                            <img src="../assets/img/bg/shiny.jpg" class="object-fit-cover rounded-3" alt="Shiny Tires Service" loading="lazy">
                        </div>
                        <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">SHINY TIRES</h3>
                        <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                            We use a superior water-based silicone product that delivers a glistening shine while reducing any sling that ends up on the vehicle.
                        </p>
                    </div>
                    <!-- Booking Button for Shiny Tires -->
                    <button type="button" class="btn btn-warning booking-button" data-bs-toggle="modal" data-bs-target="#shinyTiresModal">
                        Booking
                    </button>
                </div>

                <!-- Go Wax Service -->
                <div class="col pt-5 pt-xl-4">
                    <div class="max-w-xl mx-auto mx-xl-0">
                        <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                            <img src="../assets/img/bg/wax.jpg" class="object-fit-cover rounded-3" alt="Go Wax Service" loading="lazy">
                        </div>
                        <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">GO WAX</h3>
                        <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                            Go Wax is made up of special formulated polymers. These fill the microscopic pores in the car's paints and glass to provide advanced protection and long-lasting crystal-like shine.
                        </p>
                    </div>
                    <!-- Booking Button for Go Wax -->
                    <button type="button" class="btn btn-warning booking-button" data-bs-toggle="modal" data-bs-target="#goWaxModal">
                        Booking
                    </button>
                </div>

                <!-- Prime Dry Service -->
                <div class="col pt-5 pt-xl-4">
                    <div class="max-w-xl mx-auto mx-xl-0">
                        <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                            <img src="../assets/img/bg/dry.jpg" class="object-fit-cover rounded-3" alt="Prime Dry Service" loading="lazy">
                        </div>
                        <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">PRIME DRY</h3>
                        <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                            A low pH foam that helps prep the surface of the vehicle to aid in the beading and grouping of water molecules to promote water repellency and help produce an extremely dry car.
                        </p>
                    </div>
                    <!-- Booking Button for Prime Dry -->
                    <button type="button" class="btn btn-warning booking-button" data-bs-toggle="modal" data-bs-target="#primeDryModal">
                        Booking
                    </button>
                </div>

                <!-- Go Bath Service -->
                <div class="col pt-5 pt-xl-4">
                    <div class="max-w-xl mx-auto mx-xl-0">
                        <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                            <img src="../assets/img/bg/carwash2.jpg" class="object-fit-cover rounded-3" alt="Go Bath Service" loading="lazy">
                        </div>
                        <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">GO BATH</h3>
                        <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                            Speed and Convenience: The service is quick, so you don't have to wait long to have your car cleaned.
                        </p>
                    </div>
                    <!-- Booking Button for Go Bath -->
                    <button type="button" class="btn btn-warning booking-button" data-bs-toggle="modal" data-bs-target="#goBathModal">
                        Booking
                    </button>
                </div>

                <!-- Triple Foam Service -->
                <div class="col pt-5 pt-xl-4">
                    <div class="max-w-xl mx-auto mx-xl-0">
                        <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                            <img src="../assets/img/bg/foam.jpg" class="object-fit-cover rounded-3" alt="Triple Foam Service" loading="lazy">
                        </div>
                        <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">TRIPLE FOAM</h3>
                        <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                            A Triple Foam Car Wash is a specialized, multi-step car wash process that uses three different types of foam to thoroughly clean, protect, and shine your vehicle.
                        </p>
                    </div>
                    <!-- Booking Button for Triple Foam -->
                    <button type="button" class="btn btn-warning booking-button" data-bs-toggle="modal" data-bs-target="#tripleFoamModal">
                        Booking
                    </button>
                </div>

                <!-- Ceramic Shield Service -->
                <div class="col pt-5 pt-xl-4">
                    <div class="max-w-xl mx-auto mx-xl-0">
                        <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                            <img src="../assets/img/bg/ceramic.jpg" class="object-fit-cover rounded-3" alt="Ceramic Shield Service" loading="lazy">
                        </div>
                        <h3 class="m-0 mt-4 text-body-emphasis text-lg leading-6 fw-semibold">CERAMIC SHIELD</h3>
                        <p class="m-0 mt-3 text-body-secondary line-clamp-2 text-sm leading-6">
                            A Ceramic Shield Car Wash refers to a car wash service that includes the application of a ceramic coating or ceramic protection.
                        </p>
                    </div>
                    <!-- Booking Button for Ceramic Shield -->
                    <button type="button" class="btn btn-warning booking-button" data-bs-toggle="modal" data-bs-target="#ceramicShieldModal">
                        Booking
                    </button>
                </div>

            </div>
        </div>
    </div>      
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

<!-- Go Wax Modal -->
<div class="modal fade" id="goWaxModal" tabindex="-1" aria-labelledby="goWaxModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="goWaxModalLabel">Booking Go Wax Service</h5>
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

<!-- Prime Dry Modal -->
<div class="modal fade" id="primeDryModal" tabindex="-1" aria-labelledby="primeDryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="primeDryModalLabel">Booking Prime Dry  Service</h5>
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