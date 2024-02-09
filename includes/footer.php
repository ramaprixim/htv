<!-- footer area -->
</main>
<footer>
    <div class="footer-area">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="fw-logo mb-25">
                                <a href="index.html"><img src="assets/img/logo/1 humantroop iso black.png" alt=""></a>
                            </div>
                            <div class="footer-content">
                                <p>Humantroop Ventures is a leading HR consulting firm focused on team building and
                                    leadership development for businesses of all sizes.Humantroop Ventures is a leading
                                    HR consulting firm focused on team building and leadership development for
                                    businesses of all sizes.</p>
                                <div class="footer-social">
                                    <ul class="list-wrap">
                                        <li><a href="https://www.facebook.com/Humantroop"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/humantroop_v"><i class="fab fa-x-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/humantroop_v"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/company/humantroop"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title"><a href="index.php">Home</a></h4>
                            <h4 class="fw-title">Who we are</h4>
                            <div class="footer-info-list">
                                <ul class="list-wrap">
                                    <li><a href="vision-values.php">Vision & Values</a></li>
                                    <li><a href="code-of-conduct.php">Code Of Conduct</a></li>
                                    <li><a href="our-approach.php">Our Approach</a></li>
                                </ul>
                            </div>
                            <br>
                            <h4 class="fw-title"><a href="current-openings.php">Current Openings</a></h4>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Our Services</h4>
                            <div class="footer-link-list">
                                <ul class="list-wrap">
                                    <li><a href="staffing.php">Staffing</a></li>
                                    <li><a href="payroll.php">Payroll</a></li>
                                    <li><a href="compliance.php">Compliance</a></li>
                                    <li><a href="traning.php">Training</a></li>
                                    <li><a href="outsourcing.php">Outsourcing</a></li>
                                    <li><a href="bgv-screening.php">BGV Screening</a></li>
                                    <li><a href="posh-traning.php">POSH Training</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h4 class="fw-title"><a href="our-clients.php">Our Clients</a></h4>
                            <h4 class="fw-title">Work With Us</h4>
                            <div class="footer-info-list">
                                <ul class="list-wrap">
                                    <li><a href="join-us.php">Join Us</a></li>
                                    <li><a href="channel-partners.php">Channel Partners</a></li>
                                </ul>
                            </div>
                            <br>
                            <h4 class="fw-title"><a href="contact-us.php">Contact Us</a></h4>
                            <h4 class="fw-title"><a href="blog.php">Blogs</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 order-0 order-lg-2">
                        <div class="copyright pull-left">
                            <div class="copyright-text">
                                <ul class="footer-nav pull-right">
                                <li><a href="terms-conditions.php">Terms &amp; Conditions</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <li><a href="disclaimer.php">Disclaimer</a></li>
                                <li><a href="refund-policy.php">Refunds Policy</a></li>
                            </ul>
                                </div>
                            
                        </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="footer-nav">
                                <p>© Copyright 2022-2023 by <a href="index.html">HumanTroop Ventures | All Rights
                                    Reserved.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</footer>
<!-- footer-area-end -->


<!-- JS here -->
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.odometer.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/gsap.js"></script>
<script src="assets/js/ScrollTrigger.js"></script>
<script src="assets/js/SplitText.js"></script>
<script src="assets/js/gsap-animation.js"></script>
<script src="assets/js/jquery.parallaxScroll.min.js"></script>
<script src="assets/js/swiper-bundle.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/main.js"></script>
<script>
    const text = document.querySelector('.circle');
    text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");

    const element = document.querySelectorAll('.circle span');
    for (let i = 0; i < element.length; i++) {
        element[i].style.transform = "rotate(" + i * 17 + "deg)"
    }
</script>
<script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "<?php echo $name ?>",
          "alternateName": "<?php echo $alternateName ?>",
          "url": "<?php echo $url ?>",
          "logo": "https://humantroop.in/assets/images/logo.png",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+919137655589",
        "contactType": "customer service",
        "availableLanguage": "en"
          },
          "sameAs": [
            "https://twitter.com/humantroop_v",
            "https://www.instagram.com/humantroop_v/",
            "https://www.linkedin.com/company/humantroop/",
            "https://www.facebook.com/Humantroop"
          ]
        }
        </script>
</body>

</html>