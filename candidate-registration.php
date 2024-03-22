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
            <form id="upload_form" action="candidate-registration-form.php" method="post" enctype="multipart/form-data" >
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name *" class="form-control"
                                required >
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email*" class="form-control"
                                required >
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="form-group">
                            <input type="tel" name="phone" id="phone_number" placeholder="Number*" required
                               class="form-control">
                        </div>
                    </div>


                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="position" placeholder="position Applied For *" 
                                class="form-control" required >
                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="number" name="years"  placeholder="Total Years of Experience*"
                                class="form-control" required >
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="number" name="ectc" placeholder="Expected CTC *" class="form-control"
                                required >
                        </div>

                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="number" name="cctc" placeholder="Current CTC*" class="form-control"
                                required >
                        </div>
                    </div>




                    <div class="col-lg-6 col-sm-3">
                        <div class="form-group">
                            <input type="text" name="remark" class="form-control"
                                placeholder="Subject*" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                        <input type="file" name="file1" id="file1" onchange="uploadFile()"><br>
                        <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
                        <h3 id="status"></h3>
                        <p id="loaded_n_total"></p>
                    </div>


                    <div class="col-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Message*" cols="30"
                                rows="6" required ></textarea>
                        </div>
                    </div>

                  

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn active disabled"
                            style="pointer-events: all; cursor: pointer;">
                            <span>Submit</span>
                        </button>
                    </div>

            </form>
       
        </div>
    </div>
</div>
<br>
<script>
    function _(el) {
    return document.getElementById(el);
  }

  function uploadFile() {
    var file = _("file1").files[0];
    // alert(file.name+" | "+file.size+" | "+file.type);
    var formdata = new FormData();
    formdata.append("file1", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.addEventListener("load", completeHandler, false);
    ajax.addEventListener("error", errorHandler, false);
    ajax.addEventListener("abort", abortHandler, false);
    ajax.open("POST", "file_upload_parser.php"); // http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP
    //use file_upload_parser.php from above url
    ajax.send(formdata);
  }

  function progressHandler(event) {
    _("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
    var percent = (event.loaded / event.total) * 100;
    _("progressBar").value = Math.round(percent);
    _("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
  }

  function completeHandler(event) {
    _("status").innerHTML = event.target.responseText;
    _("progressBar").value = 0; //wil clear progress bar after successful upload
  }

  function errorHandler(event) {
    _("status").innerHTML = "Upload Failed";
  }

  function abortHandler(event) {
    _("status").innerHTML = "Upload Aborted";
  }
</script>
<?php include("footer.php") ?>