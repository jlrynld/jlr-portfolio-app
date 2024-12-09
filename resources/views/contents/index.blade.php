@extends('layouts.app')

@section('content')

<div class="container-fluid" style="max-width: 1200px;">

    <div class="col-md-6 mx-auto mt-2">
        <div class="card mt-3 animated-card portfolio-card shadow rounded">
            <div class="card-body text-color">
                <h5 class="card-title fw-light">Hi, my name is</h5>
                <h3 class="card-text">John Louie B. Reynaldo</h3>
                <h6>Aspiring Web Developer</h6>
                <a href="https://github.com/jlrynld" class="text-decoration-none">
                    <i class='bx bxl-github text-end text-color' style="font-size: 35px;"></i>
                </a>

                <a href="https://www.linkedin.com/in/jlr7619" class="text-decoration-none">
                    <i class='bx bxl-linkedin-square text-end text-color' style="font-size: 35px;"></i>
                </a>
            </div>
            <section id="about"></section>
        </div>
    </div>

    <br><br><br><br><br>

    <div class="col-md-12 mx-auto mt-2">
        <div class="card mt-3 animated-card portfolio-card shadow rounded">
            <div class="card-body text-color">
                <h3 class="card-title">/ about</h3>
                <p class="card-text mt-3 fw-light" style="font-size: 18px;">I'm an Aspiring Web Developer based in the Philippines.
                    Currently focused on enhancing my skills in Web Development.
                    I graduated with a Bachelor of Science in Information Technology from AMA Computer College on September 10, 2024.</p>
            </div>
            <section id="history"></section>
        </div>
    </div>

    <br>

    <div class="col-md-12 mx-auto mt-5">
        <div class="card animated-card portfolio-card shadow rounded">
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
                    <div class="timeline-item mt-4">
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

    <br>

    <div class="col-md-12 mx-auto mt-5">
        <div class="card mt-3 animated-card portfolio-card shadow rounded">
            <div class="card-body text-color">
                <h3 class="card-title">/ skills & tools</h3>

                <div class="mt-2 mx-2">
                    <h5 class="card-text mt-4">Web Development</h5>
                </div>

                <div class="d-flex justify-content-start mt-4">
                    <i class='bx bxs-file-html text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxs-file-css text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-php text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-javascript text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                </div>

                <div class="d-flex justify-content-start mt-2">
                    <i class='bx bxl-java text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-wordpress text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-bootstrap text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-visual-studio text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                </div>

                <div class="d-flex justify-content-start mt-2">
                    <img src="/css/images/Laravel-icon.png" class="text-color border rounded mx-2 text-center img-icon" style="height: 100px; object-fit: contain;">
                    <img src="/css/images/SQL-icon.png" class="text-color border rounded mx-2 text-center img-icon" style="height: 100px; object-fit: contain;">
                    <i class='bx bxl-github text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                    <i class='bx bxl-git text-color border rounded mx-2 text-center icon' style="font-size: 100px;"></i>
                </div>

                <h6 class="card-text mt-4 mx-2 fw-light">
                    I have a strong background in web development, particularly using Laravel to build dynamic websites. <br> I mainly use Visual Studio Code as my Text Editor or IDE.
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

        <br>



        <div class="col-md-12 mt-5">
            <div class="card mt-3 animated-card portfolio-card shadow rounded">
                <div class="card-body text-color">
                    <h3 class="card-title">/ Projects</p> </h3>
                    <div class="d-flex mt-2 mx-1">

                        <div class="d-flex justify-content-start mt-4 text-color border rounded mx-1 p-2" style="width: fit-content;">
                            <a href="https://drive.google.com/drive/folders/1in5DDsjzqYgYbv0b9gnGjWEZ-MXUCBKZ?usp=drive_link" class="text-color text-decoration-none">
                                <i class='bx bxs-book' style="font-size: 90px;"></i>
                                <p class="align-self-center mx-4" style="font-weight: bold;">
                                    School Management System <br>
                                    <span class="fw-light">
                                    Bangkal Elementary School Main
                                    </span>
                                </a>
                                </p>
                        </div>

                        <div class="d-flex justify-content-start mt-4 text-color border rounded mx-1 p-2" style="width: fit-content;">
                            <a href="https://github.com/jlrynld/EternalPlans-DTR" class="text-color text-decoration-none">
                                <i class='bx bx-code-alt' style="font-size: 90px;"></i>
                                <p class="align-self-center mx-4" style="font-weight: bold;">
                                    Daily Time Record System <br>
                                    <span class="fw-light">
                                        Eternal Plans, Inc.
                                    </span>
                                </a>
                                </p>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>

</div>

@endsection
