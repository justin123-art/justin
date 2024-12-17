<?php
include 'nav/header.php';
?>

<!-- services -->
<div class="overflow-hidden py-7 py-sm-8 py-xl-9 bg-body-tertiary">
	    <div class="container">
	        <div>
	            <div class="mx-auto max-w-2xl text-center">
					<h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
						Our Product
					</h2>
	            </div>
	        </div>
	        <div>
			<div class="row row-cols-1 row-cols-xl-3 gy-5 gx-xl-4 mt-1 justify-content-center justify-content-xl-between">
    <?php foreach ($product as $prod) { ?>
        <div class="col pt-5 pt-xl-4">
            <div class="card h-100" data-aos="fade" data-aos-delay="0" data-aos-duration="1000">
                <div class="ratio" style="--bs-aspect-ratio: 66.66%;">
                    <img src="../images/product/<?= htmlspecialchars($prod['prod_img']) ?>" class="object-fit-cover rounded-3" alt="<?= htmlspecialchars($prod['prod_name']) ?>" loading="lazy">
                </div>
                <div class="card-body text-center">
                    <h3 class="m-0 mt-3 text-warning fw-semibold"><?= htmlspecialchars($prod['prod_name']) ?></h3>
                    <h4 class="m-0 mt-2 text-danger fw-semibold">$ <?= htmlspecialchars($prod['prod_price']) ?></h4> 
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
      				
      				