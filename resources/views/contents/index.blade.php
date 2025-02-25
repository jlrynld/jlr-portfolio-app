@extends('layouts.app')

@section('contents')

<div class="container-fluid" style="max-width: 1400px; padding-top: 200px;">

    <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom"  class="col-md-8 mx-auto" style="padding-bottom: 100px;">
        <div class="card rounded-5 mt-3 portfolio-card shadow rounded">
            <div class="card-body text-color d-flex flex-column flex-md-row align-items-center">
                <img src="/css/images/1x1.png" class="profile-img mb-3" style="height: 250px; width: 250px; border-radius: 50%; object-fit: cover; margin-right: 20px;">
                <div>
                    <h5 class="card-title fw-light">Hi, my name is</h5>
                    <h3 class="card-text">John Louie B. Reynaldo</h3>
                    <h6>Aspiring IT Professional</h6>
                    <a href="https://github.com/jlrynld" class="text-decoration-none">
                        <i class='bx bxl-github text-end text-color' style="font-size: 35px;"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/jlr7619" class="text-decoration-none">
                        <i class='bx bxl-linkedin-square text-end text-color' style="font-size: 35px;"></i>
                    </a>
                </div>
            </div>
            <section id="about"></section>
        </div>
    </div>

    <div data-aos="zoom-in"  class="col-md-12 mx-auto mt-5">
        <div class="card rounded-5 mt-3 portfolio-card shadow rounded">
            <div class="card-body text-color">
                <h3 class="card-title">/ about</h3>
                <p class="card-text mt-3 fw-normal" style="font-size: 18px;">
                    Hi I'm JL, a recent Bachelor of Science in Information Technology graduate with a passion for building dynamic and functional web applications. <br> <br>
                    My expertise lies in PHP, with a strong focus on Laravel for back-end development and PHP Blade for front-end implementation. I am committed to continuously improving my skills to create efficient, scalable, and user-friendly solutions.</p>
            </div>
            <section id="history"></section>
        </div>
    </div>

    <div data-aos="zoom-in" data-aos-anchor-placement="bottom-bottom" class="col-md-12 mx-auto mt-5">
        <div class="card rounded-5 animated-card portfolio-card shadow rounded">
            <div class="card-body text-color">

                <h3 class="card-title">/ history </h3>
                <div class="timeline mt-5">
                    <div class="timeline-item">
                        <div class="timeline-line"></div>
                        <div class="timeline-content">
                            <h4 class="card-text mt-3">Web System Development Associate Trainee & Tech Support</h4>
                            <h5 class="card-text fw-light">Eternal Plans, Inc. <br>
                                <span class="fst-italic" style="font-size: 15px;">February 2024 - June 2024</span>
                            </h5>
                        </div>
                    </div>
                    <div class="timeline-item mt-5">
                        <div class="timeline-line"></div>
                        <div class="timeline-content">
                            <h4 class="card-text mt-3">SHS Intern Wordpress Web Developer</h4>
                            <h5 class="card-text fw-light">RXM Solutions <br>
                                <span class="fst-italic" style="font-size: 15px;"> November 2019 - March 2020</span>
                            </h5>
                        </div>
                        <section id="skills"></section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div data-aos="zoom-in" data-aos-anchor-placement="center-bottom" class="col-sm-12 mx-auto mt-5">
        <div class="card rounded-5 mt-3 animated-card portfolio-card shadow rounded flex-wrap">
            <div class="card-body text-color">
                <h3 class="card-title">/ skills & tools</h3>

                <div class="mt-2 mx-2">
                    <h5 class="card-text mt-4">Web Development</h5>
                </div>

                <div class="d-flex justify-content-start mt-4 flex-wrap">
                    <i class='bx bxs-file-html text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxs-file-css text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-php text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-javascript text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                </div>

                <div class="d-flex justify-content-start mt-2 flex-wrap">
                    <i class='bx bxl-java text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-wordpress text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-bootstrap text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-visual-studio text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                </div>

                <div class="d-flex justify-content-start mt-2 flex-wrap">
                    <img src="/css/images/Laravel-icon.png" class="text-color border rounded mx-2 text-center img-icon" style="height: 100px; object-fit: contain;">
                    <img src="/css/images/SQL-icon.png" class="text-color border rounded mx-2 text-center img-icon" style="height: 100px; object-fit: contain;">
                    <i class='bx bxl-github text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-git text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                </div>

                <h6 class="card-text mt-4 mx-2 fw-light">
                    My proficiency lies in PHP, with a strong focus on Laravel for back-end development and PHP Blade for front-end implementation. <br> I am committed to continuously improving my skills to create efficient, scalable, and user-friendly solutions.
                </h6>

                <h6 class="card-text mt-4 mx-2 fw-light">
                    For version control and project collaboration, I rely on Git & GitHub, where I manage all my repositories. <br>
                    Additionally, I also have experience in using Hostinger & Vercel for web hosting and domain management, ensuring a smooth deployment process.
                </h6>

                <div class="mx-2 mt-5">
                    <h5 class="card-text mt-4">Tech Support</h5>
                    <h6 class="card-text fw-light">
                        On the tech support side, I’m capable of troubleshooting, OS installations, and building PCs. <br>
                        I can also crimp LAN cables, design LAN setups for multiple PCs connected to a switch, configure routers for both static IPs and DHCP, and set up PCs efficiently.
                    </h6>
                </div>
            </div>
            <section id="projects"></section>
        </div>
    </div>

    <div data-aos="zoom-in" data-aos-anchor-placement="top-bottom" class="col-sm-12 mt-5 mb-5">
        <div class="card rounded-5 mt-3 animated-card portfolio-card shadow rounded">
            <div class="card-body text-color">
                <h3 class="card-title">/ projects</p> </h3>
                <div class="d-flex mt-2 mx-1">

                    <a href="https://drive.google.com/drive/folders/1snLKLYc2XfJshlnUPionhCyR8Z4tYQ91?usp=drive_link" class="text-color text-decoration-none">
                        <div class="d-flex justify-content-start text-color border rounded mx-1 p-2 flex-wrap" style="width: auto;">
                                <i class='bx bxs-book' style="font-size: 100px;"></i>
                                <p class="align-self-center mx-4" style="font-weight: bold;">
                                    School Management System <br>
                                    <span class="fw-light">
                                    Bangkal Elementary School Main
                                    </span>

                                </p>
                        </div>
                    </a>

                    <a href="https://drive.google.com/drive/folders/1yw-jAl-izcl1IIuIiT8RlogZawOM-j5i?usp=drive_link" class="text-color text-decoration-none">
                        <div class="d-flex justify-content-start text-color border rounded mx-1 p-2 flex-wrap" style="width: auto;">
                                <i class='bx bx-code-alt' style="font-size: 100px;"></i>
                                <p class="align-self-center mx-4" style="font-weight: bold;">
                                    Daily Time Record System <br>
                                    <span class="fw-light">
                                        Eternal Plans, Inc.
                                    </span>
                                </p>
                    </div>
                </a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
