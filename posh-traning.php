<?php $page="posh-training"; include("includes/second-header.php"); ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');


    .accordion-container {
        width: 80%;
        max-width: 600px;
    }

    .accordion-item {
        background-color: #FFFFFF;
        /* White background for items */
        border: 1px solid #E0E0E0;
        /* Light border */
        border-radius: 8px;
        margin-bottom: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        /* Softer shadow */
    }

    .accordion-header {
        background-color: #1c1945;
        /* Soft purple */
        color: #FFFFFF;
        /* White text */
        padding: 15px;
        font-size: 18px;
        border: none;
        width: 100%;
        text-align: left;
        cursor: pointer;
        outline: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 8px 8px 8px 8px;
        transition: background-color 0.3s ease;
    }

    .accordion-header:hover {
        background-color: #1c1945;
        color: #f4f4f4;
    }

    .accordion-content {
        background-color: #FAFAFA;
        /* Very light grey for content */
        overflow: hidden;
        padding: 0 15px;
        max-height: 0;
        transition: max-height 0.3s ease;
        border-radius: 8px;
    }

    .accordion-content p {
        margin: 15px 0;
        line-height: 1.5;
    }

    .icon {
        transition: transform 0.3s ease;
    }

    .active .icon {
        transform: rotate(45deg);
    }

    .about__area-four {
        padding: 0 0px;
    }
</style>
<section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="breadcrumb__content">
                    <h2 class="title">POSH Training</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href='/'>Home</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href='/'>Our Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">POST Traning</li>
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


<section class="about__area-six">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="about__img-wrap-six">
                    <img
                        src="assets/img/images/our services -POSH Training - Anti-Sexual Harassment POSH Training In India (POSH Act).png">

                    <div class="shape">
                        <img src="assets/img/images/h4_about_img_shape.png" alt="" class="alltuchtopdown">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content-six">
                    <div class="section-title mb-25">

                        <h2 class="title">Anti-Sexual Harassment POSH Training In India (POSH Act)</h2>
                    </div>
                    <p>Humantroop Ventures Services regularly holds awareness and gender sensitization sessions mandated
                        by the Sexual Harassment of Women at the Workplace (Prevention, Prohibition and Remediation) Act
                        2013. These sessions, colloquially called "POSH training or POSH Act training", help employees
                        gain the necessary clarity between acceptable and unacceptable behavior in the context of the
                        law.</p>


                </div>
            </div>
        </div>
    </div>
    <div class="about__shape-wrap-four">
        <img src="assets/img/images/h4_about_shape01.png" alt="">
        <img src="assets/img/images/h4_about_shape02.png" alt=""
            data-parallax="{&quot;x&quot; : -80 , &quot;y&quot; : -80 }"
            style="transform:translate3d(-55.066px, -55.066px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(-55.066px, -55.066px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
    </div>
</section>









<section class="services__area-three services__bg-three" style="background-color: #1c1945;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title white-title text-center mb-50">
                </div>
            </div>
        </div>
        <div class="row justify-content-center gutter-24">
            <div class="col-lg-6 col-md-6">
                <div class="services__item-three">
                    <div class="services__item-top">
                        <div class="services__icon-three">
                            <div class="imgg">
                                <img style="height:80px;" src="assets/img/images/posh_awareness.png">
                            </div>
                        </div>
                        <div class="services__item-top-title">
                            <h2 class="title">POSH Training for Employee Awareness</h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>Manage the entire workforce of the organization. Every employee will have a clear
                            understanding of the POSH Act, what constitutes sexual harassment, tips to prevent
                            online/virtual sexual harassment, complainant and respondent rights, and more.</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="services__item-three">
                    <div class="services__item-top">
                        <div class="services__icon-three">
                            <div class="imgg">
                                <img style="height:80px;" src="assets/img/images/hr.png">
                            </div>
                        </div>
                        <div class="services__top-title">
                            <h2 class="title">POSH Training for In-House HR Professionals</h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>Train them in the issue of sexual harassment and create awareness of the criminal
                            consequences of the Act on POSH. HR staff are trained to report incidents and explain sexual
                            harassment policies to new hires.</p>
                        <br>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="services__item-three">
                    <div class="services__item-top">
                        <div class="services__icon-three">
                            <div class="imgg">
                                <img style="height:80px;" src="assets/img/images/comitee.png">
                            </div>
                        </div>
                        <div class="services__top-title">
                            <h2 class="title">POSH Training for Internal Committee (IC)</h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>Trains IC members on their roles and responsibilities to ensure they are informed about the
                            nuances of sexual harassment investigations. We equip IC members with knowledge of the
                            procedures set out in the POSH Act, including conducting investigations and submitting the
                            annual POSH report.</p>
                        <br>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="services__item-three">
                    <div class="services__item-top">
                        <div class="services__icon-three">
                            <div class="imgg">
                                <img style="height:80px;" src="assets/img/images/team_leader.png">
                            </div>
                        </div>
                        <div class="services__top-title">
                            <h2 class="title">POSH Training for Managers / Team Leaders</h2>
                        </div>
                    </div>
                    <div class="services__content-three">
                        <p>enable them to effectively manage and manage cases of sexual harassment. We empower leaders
                            to build and sustain a culture that inspires trust, respect and gender equality. We also
                            equip them to take proactive measures to prevent incidents, objectively document a complaint
                            and cooperate with the IC in an investigation.</p>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>





<section class="about__area-four">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9 col-sm-10">
                <div class="about__img-wrap-four">

                    <img src="assets/img/images/our services -POSH Training - POSH Act Compliance And Training.png">

                    <div class="shape">
                        <img src="assets/img/images/inner_about_shape.jpg" alt="" class="alltuchtopdown">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content-four">
                    <div class="section-title mb-30">

                        <h2 class="title">POSH Act Compliance And Training</h2>
                        <br>
                        <h6>The Government of India introduced the Workplace Sexual Harassment of Women Act (also
                            colloquially known as the "POSH Act"), 2013 in India to effectively deal with matters
                            related to sexual harassment of women in their workplace.</h6>
                    </div>

                    <p>The POSH Act mandates that every organization with more than 10 employees must establish an
                        Internal Committee (IC) that can facilitate complaints about sexual harassment of women in the
                        workplace. Another critical requirement is coaching ICs on their responsibilities as well as
                        creating awareness among staff and through regular POSH training. Our POSH trainings have helped
                        employers identify potential areas of sexual harassment of women in the workplace and address
                        them effectively. These sessions aim to educate IC members and staff about the various forms of
                        sexual harassment and the redressal mechanism, thereby instilling confidence in them to speak up
                        if they witness any inappropriate behavior with a sexual overtone.</p>

                </div>
            </div>
        </div>
    </div>
</section>
<section style="    background-color: #f7f7f7;
    padding: 60px;">
    <div class="section-title text-center mb-50">

        <h2 class="title">FAQ's</h2>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <img src="assets/img/images/FAQ.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="accordion-container">
                    <div class="accordion-item">
                        <button class="accordion-header">
                            Where does the POSH Act apply?<span class="icon"></span>
                        </button>
                        <div class="accordion-content">
                            <p>All workplaces within India including public or private sector, government, or
                                non-government organizations.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            When does it become mandatory for the Employer to constitute an Internal Committee (IC)?
                            <span class="icon"></span>
                        </button>
                        <div class="accordion-content">
                            <p>When the number of employees crosses 10 in an organization (and that has female
                                employees), it is mandatory for the Employer to constitute an Internal Committee.</p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            Does the POSH Act apply to organizations employing less than 10 employees? <span
                                class="icon"></span>
                        </button>
                        <div class="accordion-content">
                            <p>Yes, POSH Act applies to workplaces with less than ten employees. However, in such a
                                scenario formation of IC is not mandatory.</p>
                        </div>

                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                            Who would be responsible for non-compliance towards the provisions of the POSH Act?<span
                                class="icon"></span>
                        </button>
                        <div class="accordion-content">
                            <p>CEO, Managing Director, Proprietor, Managing Partner, Directors, owners of business and
                                all
                                such parties who construe as ‘Employers’ would be held responsible for POSH
                                non-compliance.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="call-back-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="call-back-content">
                    <div class="section-title white-title mb-10">
                        <h2 class="title">Are you a Job Seeker, Looking for Openings ?</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <a href="candidate-registration.php" type="submit" class="btn btn-dark">Register Here</a>
            </div>
        </div>
    </div>
</section>
<script>
    document.querySelectorAll('.accordion-header').forEach(button => {
        button.addEventListener('click', () => {
            const accordionContent = button.nextElementSibling;

            button.classList.toggle('active');

            if (button.classList.contains('active')) {
                accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
            } else {
                accordionContent.style.maxHeight = 0;
            }

            // Close other open accordion items
            document.querySelectorAll('.accordion-header').forEach(otherButton => {
                if (otherButton !== button) {
                    otherButton.classList.remove('active');
                    otherButton.nextElementSibling.style.maxHeight = 0;
                }
            });
        });
    });

</script>
<?php include("includes/footer.php"); ?>