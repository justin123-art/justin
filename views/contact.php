<?php
include 'nav/header.php';
?>

  <!-- Contact us -->
  <div id="contact-us" class="overflow-hidden py-7 py-sm-8">
        <div class="container">
            <div class="row gy-5 gx-sm-5">
                <div class="col-12 col-xl-5 pt-4">
                    <div class="mx-auto max-w-xl text-center text-xl-start">
                        <h2 class="m-0 text-primary-emphasis text-base leading-7 fw-semibold">
                            Get in touch
                        </h2>
                        <p class="m-0 mt-2 text-body-emphasis text-3xl tracking-tight leading-10 fw-bold">
                            Have any questions or need assistance? Contact us today!
                        </p>
                    </div>

                    <div class="mx-auto max-w-2xl mt-6">
                        <form class="row g-4 needs-validation" id="myForm" novalidate>
                            <div class="col-md-6">
                                <label for="nameForm" class="form-label text-sm">
                                    Full name
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="nameForm" id="nameForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your full name.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="emailForm" class="form-label text-sm">
                                    Email address
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="email" class="form-control form-control-sm" name="emailForm" id="emailForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your email address.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="phoneForm" class="form-label text-sm">
                                    Phone number
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="phoneForm" id="phoneForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter your phone number.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="subjectForm" class="form-label text-sm">
                                    Subject
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" name="subjectForm" id="subjectForm" required>
                                <div class="invalid-feedback text-xs">
                                    Please enter a subject for your message.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="messageForm" class="form-label text-sm">
                                    Your message
                                    <span class="text-danger-emphasis">*</span>
                                </label>
                                <textarea class="form-control form-control-sm" name="messageForm" id="messageForm" rows="3" required></textarea>
                                <div class="invalid-feedback text-xs">
                                    Please enter a message.
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label text-sm" for="gridCheck">
                                        I agree to the terms &amp; conditions and privacy policy
                                        <span class="text-danger-emphasis">*</span>
                                    </label>
                                    <div class="invalid-feedback text-xs">
                                        Please agree to the terms &amp; conditions and privacy policy.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12 text-center pt-3">
                                <button type="submit" class="btn btn-lg btn-primary text-white text-sm fw-semibold" id="sendMessage">
                                    Send message
                                </button>
                            </div>

                            <!-- Alert message  -->
                            <div class="col-12" id="yourMessageIsSent"></div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-xl-7 pt-7 pt-xl-0" style="min-height: 450px;">
                    <div class="h-100 position-relative ms-xxl-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1003355.1435673393!2d124.77683794999999!3d10.78402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33079748942072a9%3A0x26e609fddaa0d714!2sLeyte!5e0!3m2!1sen!2sph!4v1733812401300!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
