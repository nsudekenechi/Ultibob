<?php
    $title = "Contact us";
    require_once("./includes/header.php");
?>
<section class="section py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-sm-12 col-md-5">
                <div data-aos="fade-in" data-aos-duration="4000">
                    <h3 class="quoted">
                        We would like to hear from you! Drop us a message, contact us today.
                    </h3>
                </div>
            </div>

            <div class="col-sm-12 col-md-7">
                <div data-aos="fade-left" data-aos-duration="4000">
                    <small class="text-sm text-muted">Fields marked with an <span class="text-danger">*</span> are
                        required</small>
                    <form action="contact_handler.php" method="POST" class="w-100 mt-4">
                        <div class="form-group">
                            <label for="name" class="contact-label">your name <span class="text-danger">*</span></label>
                            <input type="text" data-length="3" class="contact-input" name="name" required>
                            <small class="error-message">Required</small>
                        </div>
                        <div class="form-group">
                            <label for="name" class="contact-label">company name <span
                                    class="text-danger">*</span></label>
                            <input type="text" data-length="3" class="contact-input" name="companyName" required>
                            <small class="error-message">Required</small>
                        </div>
                        <div class="form-group">
                            <label for="name" class="contact-label">email address <span
                                    class="text-danger">*</span></label>
                            <input type="email" data-length="7" class="contact-input" name="emailAddress" required>
                            <small class="error-message">Required</small>
                        </div>
                        <div class="form-group">
                            <label for="name" class="contact-label">phone number <span
                                    class="text-danger">*</span></label>
                            <input type="tel" data-length="11" class="contact-input" name="phoneNumber" required>
                            <small class="error-message">Required</small>
                        </div>
                        <div class="form-group">
                            <label for="name" class="contact-label">purpose of contact <span
                                    class="text-danger">*</span></label>
                            <textarea data-length="15" style="resize: none;" class="contact-input" name="message"
                                required></textarea>
                            <small class="error-message">Required</small>
                        </div>

                        <div class="mt-4">
                            <button class="contact-btn" type="submit" name="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<?php
    require_once("./includes/footer.php");
?>