<?php include("header.php") ?>

<div class="page-header-area bg-f4fbf6">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="page-header-content">
                    <h1>Candidate Registration</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Candidate Registration</li>
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
<br>
<div class="contact-form-area pb-100">
    <div class="container">
        <div class="section-title">
            <span>Contact with Us</span>
            <h2>Candidate Registration</h2>
            <p>Take a few minutes to create a registration profile. Apply for jobs online and send us your resume and
                we'll find a job for you.</p>
        </div>
        <div class="contacts-form">
            <form id="contactForm" novalidate="true" action="candidate-registration-form.php" method="post">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name *" id="name" class="form-control"
                                required="" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Email*" class="form-control"
                                required="" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="tel" name="phone" id="phone_number" placeholder="Number*" required=""
                               class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="position" placeholder="position Applied For *" id="name"
                                class="form-control" required="" >
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="number" name="years" id="email" placeholder="Total Years of Experience*"
                                class="form-control" required="" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>





                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="number" name="ectc" placeholder="Expected CTC *" id="name" class="form-control"
                                required="" >
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="number" name="cctc" id="email" placeholder="Current CTC*" class="form-control"
                                required="" >
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>




                    <div class="col-lg-6 col-sm-3">
                        <div class="form-group">
                            <input type="text" name="remark" id="msg_subject" class="form-control"
                                placeholder="Subject*" required="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <input type="text" placeholder="Resume Upload Here" style="display:none;">
                        <input type="file" name="file" id="file" style="display:none;">
                        <label for="file"
                            style="height: 70px;/* width: 40px; */background-color: #28aa4a;
                            color: white;display: flex;justify-content: center;align-items: center; cursor:pointer">Upload
                            Resume</label>
                    </div>


                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Message*" id="message" cols="30"
                                rows="6" required="" ></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                  

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn active disabled"
                            style="pointer-events: all; cursor: pointer;">
                            <span>Submit</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>

            </form>
       
        </div>
    </div>
</div>
<br>
<?php include("footer.php") ?>