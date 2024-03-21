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

<div class="contact-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-contact-card">
                            <div class="icon">
                                <i class="flaticon-mail"></i>
                            </div>
                            <h3>Email Address:</h3>
                            <a href="mailto:support@humantroop.in">support@humantroop.in</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-contact-card">
                            <div class="icon">
                                <i class="flaticon-placeholder"></i>
                            </div>
                            <h3>Address:</h3>
                            <span>HumanTroop Ventures office 807, Realtech Park, Sector 30A, Near Vashi Railway Station, Vashi, Navi Mumbai - 400703.Maharashtra</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-contact-card">
                            <div class="icon">
                                <i class="flaticon-phone-call-1"></i>
                            </div>
                            <h3>Phone Number:</h3>
                            <a href="tel:+919137655589">+919137655589</a>
                        </div>
                    </div>
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
            <form id="contactForm" method="post" action="contact.php" novalidate="true">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Enter Name" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter Email" class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="tel" name="phone"  placeholder="Phone Number"  class="form-control" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
    
                    <div class="col-lg-12 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
    
                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Message" cols="30" rows="6" required></textarea>
                            <div class="help-block with-errors"></div>
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