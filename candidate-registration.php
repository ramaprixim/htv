<?php $page="candidate-registration"; include("includes/second-header.php"); ?>
<style>
    .contact__info .list-wrap li{
        margin-bottom:0px;
    }
</style>
<section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title">Candidate Registration</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Candidate Registration</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape">
                <img src="assets/img/images/breadcrumb_shape01.png" alt="">
                <img src="assets/img/images/breadcrumb_shape02.png" alt="" class="rightToLeft">
                <img src="assets/img/images/breadcrumb_shape03.png" alt="">
                <img src="assets/img/images/breadcrumb_shape04.png" alt="">
                <img src="assets/img/images/breadcrumb_shape05.png" alt="" class="alltuchtopdown">
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact__content">
                            <div class="section-title mb-35">
                            <span>Contact with Us</span>
                                <h2 class="title">Candidate Registration</h2>
                                
                            </div>
                            <div class="contact__info">
                                <ul class="list-wrap">
                                    <li>
                                       <p>Take a few minutes to create a registration profile. Apply for jobs online and send us your resume and we'll find a job for you.</p>
                                    </li>
                                    <li>
                                    <div class="footer-social">
                                    <ul class="list-wrap">
                                        <li><a href="https://www.facebook.com/Humantroop"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="https://twitter.com/humantroop_v"><i class="fab fa-x-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/humantroop_v"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/humantroop"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact__form-wrap">
                            <h2 class="title">Get in touch</h2>
                            <br>
                            <form id="consult" method="post" action="candidate-registration-form.php" class="default-form" enctype="multipart/form-data">
                                <div class="row clearfix" style="margin-top:0px">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-grp">
                                        <input type="text" name="name" placeholder="Full Name*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-grp">
                                        <input type="email" name="email" placeholder="Email Id*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-grp">
                                        <input type="text" name="phone" required="" placeholder="Contact Number*">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-grp">
                                        <input type="text" name="position" placeholder="Position Applied For*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-grp">
                                        <input type="text" name="years" placeholder="Total Years of Experience*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-grp">
                                        <input type="text" name="cctc" placeholder="Current CTC*" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-grp">
                                        <input type="text" name="ectc" placeholder="Expected CTC*" required="">
                                    </div>


                                    <div class="col-lg-6 col-md-12 col-sm-12 form-grp">
                                        <input type="text" placeholder="Resume Upload Here" style="display:none;">
                                        <input type="file" name="file" id="file" style="display:none;">
                                        <label for="file" style="height: 48px;background-color: white;color: black;display: flex;justify-content: center;align-items: center;cursor: pointer;border-radius: 10px;">Upload Resume</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-grp">
                                        <textarea type="text" name="remark" placeholder="Remark" required=""></textarea>
                                    </div>
                                    <div class="form-grp" style="padding: 10px 15px;">
                                        <div class="g-recaptcha" data-sitekey="6LcqVg4jAAAAAFlIdhGjJ7-F0xnZxN-LqhmfiNij"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-eotbb41z6twn" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcqVg4jAAAAAFlIdhGjJ7-F0xnZxN-LqhmfiNij&amp;co=aHR0cHM6Ly9odW1hbnRyb29wLmluOjQ0Mw..&amp;hl=en&amp;v=yiNW3R9jkyLVP5-EEZLDzUtA&amp;size=normal&amp;cb=v8740ofnpd3c"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" required="" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                    </div>
                                    <!-- <div class="col-lg-6 col-md-12 col-sm-12 form-grp">
                                        <input type="text" placeholder="Cover Letter">
                                        <input type="file" name="cover" required="" placeholder="Choose File">
                                    </div> -->

                                    <div class="col-lg-12 col-md-12 col-sm-12 form-grp message-btn">
                                        <button class="btn" style="margin-top: 20px;" type="submit" value="Send">Submit</button>
                                    </div>
                                </div>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>       
         <?php include("includes/footer.php"); ?>