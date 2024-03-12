<?php include("header.php") ?>

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h1>Contact us</h1>
                    <ul>
                        <li><a href="index.html">Contact Us</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="page-header-image">
                    <img src="assets/images/banner/banner-img-3.png" alt="Image">
                </div>
            </div>
        </div>

        <div class="page-header-shape">
            <img src="assets/images/shape/shape-8.png" alt="Image">
            <img src="assets/images/shape/shape-9.png" alt="Image">
            <img src="assets/images/shape/shape-10.png" alt="Image">
        </div>
    </div>
</div>

<div class="contact-form-area pb-100">
    <div class="container">
        <div class="section-title">
            <span>Get In Touch</span>
            <h2>Send Your Query</h2>
            <p>Want to share something with us or want to discuss something with us? Click here to contact us. Responses from our team are usually within 24 hours.</p>
        </div>
        <div class="contacts-form">
            <form id="contactForm" novalidate="true">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name *" id="name" class="form-control" required="" data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email*" class="form-control" required="" data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" placeholder="Number*" required="" data-error="Please enter your number" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
    
                    <div class="col-lg-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Subject*" required="" data-error="Please enter your subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
    
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Message*" id="message" cols="30" rows="6" required="" data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required="">
                            <label class="form-check-label" for="gridCheck">
                                I agree to the <a href="terms-conditions.html">terms</a> and <a href="privacy-policy.html">privacy policy</a>
                            </label>
                            <div class="help-block with-errors gridCheck-error"></div>
                        </div>
                    </div>
    
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn active disabled" style="pointer-events: all; cursor: pointer;">
                            <span>Submit</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include("footer.php") ?>