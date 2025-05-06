<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kemof Nig Ltd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        .card{
            border-radius: 0 !important;
            border: none !important;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
        }
        .card-link:hover{
            color:#66b4b1!important;
        }
        .carousel-item {
            display: flex;                 /* Enable flexbox layout */
            justify-content: center;       /* Center horizontally */
            align-items: center;           /* Center vertically */
            height: 100vh;                 /* Full viewport height */
            position: relative;            /* Make sure the text appears above other content */
        }

        .container.img-text {
            position: relative;
            z-index: 2;                    /* Ensure the text container is above other elements */
            text-align: center;  
            color:#001f3f   !important;       /* Center the text horizontally */
        }
        .apply-btn{
        background-color:#8bf2ee!important;
        text-transform: capitalize !important;
        color: white !important;
        font-size: 15px !important;
        letter-spacing: 1px;
        border-radius: 3px !important;
        padding: 13px 26px 13px 26px !important;
        font-weight: 600;
        }
        .reveal{
        position: relative;
        transform: translateY(150px);
        opacity: 0;
        transition: 1s all ease;
    }
    .get-in-touch{
        background-color: #66b4b1!important;
        font-size: 15px !important;
        letter-spacing: 1px;
        border-radius: 3px !important;
        border: 0 !important;
        font-weight: 600;
    }
    /* text on hero-section */
    @media (max-width: 768px) { 
    h1.fade-in {
        font-size: 2.4rem !important;
    }
    }
    /* }end text on hero section */

    /* navbar */
    @media (max-width: 991px) {
            .navbar-collapse {
                position: absolute;
                padding-top: 0px !important;
                top: 100%;
                left: 0;
                width: 100%;
                background: white; /* Change as needed */
                z-index: 1000;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                height: 100vh;
                max-height: 100vh;
            }
            ul.navbar-nav{
                padding-top: 1.5rem !important;
            }
            body.no-scroll {
            overflow: hidden;
            height: 100vh;
            }

            .nav-link{
            color: black !important;
            padding-bottom: 2.5rem !important;
            font-weight: 400 !important;
            margin-left: 1.5rem !important;
            font-size: 20px;
            }
            
            .get-in-touch{
                margin-left: 1.5rem !important;
                margin-top: 1rem;
            }

            a.nav-link::before{
            content: "";
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 1px;
            background-color: #ededed !important;
            }
            
            header.info{
                display: none;
            }
        }

        /* link border-color */
        /* @media (min-width: 991px){
        a.nav-link::before{
            content: "";
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background-color: #8bf2ee;
            visibility: hidden;
            transition: 0.3s ease-in-out;
        }
        a.nav-link:hover::before, a.nav-link.active::before{
            width: 100%;
            visibility: visible;
        }
        } */

        /* endnav bar */
    </style>
  </head>
  <body>
    <header class="info py-3" style="background-color: whitesmoke;">
        <div class="container px-5">
            <div class="d-flex justify-content-center align-items-center text-center d-none d-lg-flex">
                <!-- Call Us Section -->
                <div class="d-flex justify-content-center align-items-center">
                    <i class="bi bi-telephone me-3" style="font-size: 1.3rem; color: #f0b400;"></i>
                    <div>
                        <span class="d-block fw-bold text-start" style="font-size: 11px;">CALL US</span>
                        <span class="fw-light" style="font-size: 14px">+447534447673</span>
                    </div>
                </div>

                <!-- Divider Line -->
                <div class="vr mx-4"></div>

                <!-- Email Section -->
                <div class="d-flex justify-content-center align-items-center">
                    <i class="bi bi-envelope me-3" style="font-size: 1.3rem; color: #f0b400;"></i>
                    <div>
                        <span class="d-block fw-bold text-start" style="font-size: 11px;">E-MAIL</span>
                        <span class="fw-light" style="font-size: 14px">info@kemof-ng.com</span>
                    </div>
                </div>

                <!-- Divider Line -->
                <div class="vr mx-4"></div>

                <!-- Working Hours Section -->
                <div class="d-flex justify-content-center align-items-center">
                    <i class="bi bi-clock me-3" style="font-size: 1.3rem; color: #f0b400;"></i>
                    <div>
                        <span class="d-block fw-bold text-start" style="font-size: 11px;">LOCATION</span>
                        <span class="fw-light" style="font-size: 14px">Plot 24, Road 5, Off Ada George/Locaton Rd Portharcour</span>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- nav -->
    <nav id="navbar-example2" class="navbar navbar-expand-lg border-body py-3 bg-white">
        <div class="container px-lg-5 px-3">
            <a class="navbar-brand" href="#">
                <img src="../img/logo.png" alt="" width="80" height="70">
            </a>
            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span id="menu-icon"><i class="fa-solid fa-bars border-0"></i></span>
            </button>

            <!-- Collapsing Dropdown -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav justify-content-end flex-grow-1 fw-bold text-dark">
                    <li class="nav-item">
                        <a class="nav-link active me-4 ms-lg-0 ms-5" aria-current="page" href="#scrollspyHeading1">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 ms-lg-0 ms-5" href="#scrollspyHeading2">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 ms-lg-0 ms-5" href="#scrollspyHeading3">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 ms-lg-0 ms-5" href="#scrollspyHeading4">Career</a>
                    </li>
                    <form class="d-flex align-content-center" role="search">
                        <a href="get-a-quote.php" class="get-in-touch btn btn-primary pt-2 ms-lg-0 px-4 py-2">CONTACT US</a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->

    <div class="body" data-bs-spy="scroll" data-bs-target="#navbar-example2">
        <!-- hero-section -->
        <div id="scrollspyHeading1" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-image-wrapper">
                        <div class="image-container">
                            
                        </div>
                    </div>
                    <div class="container px-5 text-lg-start text-center pt-5">
                        <div class="row pt-5">
                            <div class="col-lg-4 pt-5">
                                <div class="pt-5"></div>
                                <h1 class="fade-in" style="font-size: 3.5rem; font-weight:bold;">Kemof<br> Nig  Limited</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 py-3">
                                <p class="fade-in">Expert Solutions in Inspection, Asset integrity and Performance Optimization</p>
                                <a href="#scrollspyHeading2" class="btn bg-img-btn fade-in mt-2" style="font-weight:600 !important; color: black !important; color: white !important">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end hero-section -->


         <!-- <section class="py-3 pt-4 mt-0" style="background-color: #ebf5f4">
            <div class="container px-5 text-white text-center text-lg-start">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h5 class="fw-bold" style="text-transform:uppercase; color:#001f3f">Welcome to Kemof Nig Limited</h5>
                        <p style="color:#001f3f">Solutions to Asset integrity and Performance Optimization for the Energy</p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <a href="#" class="btn btn-primary py-2" style="background-color:#001f3f; color:white; border:none !important; border-radius: 3px !important">See Our Services</a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row floating-card text-lg-start text-center shadow px-5 py-4">
                        <div class="col-lg-6">
                            <h4 style="font-weight:600; color:#001f3f">Welcome To Kemof Nig Limited</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, id!</p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end">
                            <a href="#" class="btn btn-primary py-2 mt-2" style="background-color: #8bf2ee; border:none !important">See Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

      
        <section id="scrollspyHeading2" class="py-5">
            <!-- about us -->
            <div class="container px-lg-5 pt-lg-5 pt-2 pb-5 px-4">
                <div class="row py-lg-5 py-0 g-5">
                    <div class="col-lg-6 fade-in-left">
                        <p style="color:#8bf2ee; font-size: 18px">About Us</p>
                        <h2 class="pb-3" style="font-weight: 600;">Expert Solutions in Asset integrity and Performance Optimization for the Energy</h2>
                        <p class="lh-lg">Kemof Nig Limited, formed by a group of Nigerian Diaspora Experts in the Energy Sector with
                        expertise cutting across the Oil &amp; gas (Upstream and Downstream), Chemicals, Power Generation
                        (Nuclear, Oil/Gas) and Business Consulting and Management
                        We have extensive experience in manging the integrity of new build, aging, late-life and life
                        extension of assets.</p>
                    </div>
                    <div class="col-lg-6 fade-in-right">
                        <img src="../img/oil-and-Gas-1.jpg" class="w-100" alt="">
                    </div>
                </div>
            </div>
            <!-- end about us -->
        </section>

        <section id="scrollspyHeading3" class="py-5" style="background-color: whitesmoke;">
            <div class="container px-lg-5 py-5 px-4">
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                        <p class="text-center" style="color:#8bf2ee; font-size: 17px">What we offer</p>
                        <h4 class="pb-5 text-center" style="font-weight: 600;">Our Services</h4>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card p-3" style="background-color: #f9fefe; border-radius: 6px !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-content-center">
                                            <i class="bi bi-shield border border-light bg-light py-2 px-3 rounded shadow"  style="color: #66b4b1 !important; font-size: 27px"></i>
                                            <h5 class="card-title pt-3 ps-3" style="font-weight: 650;">Quality</h5> 
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="padding-left: 10px !important">
                                                    
                                                <p class="card-text text-dark pt-3">Equipments must be inspected at the manufacturer's yard to ensure it meets specifications. We withness tests, verify documents on-site</p>

                                                <a href="services.php" class="card-link" style="color:#66b4b1; font-size:15px; font-weight:500">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card p-3" style="background-color: white; border-radius: 6px !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-content-center">
                                            <i class="fa-regular fa-handshake border border-light bg-light py-3 px-3 rounded"  style="color: white !important; font-size: 27px; background-color:#66b4b1 !important"></i>
                                            <h5 class="card-title pt-3 ps-3" style="font-weight: 650;">Engineering Integrity</h5> 
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="padding-left: 10px !important">
                                                    
                                                <p class="card-text text-dark pt-3">We prioritize minimizing unplanned downtime to ensure the highest standards of safety, protect the environment, and enhance operational efficiency.</p>

                                                <a href="services.php" class="card-link" style="color:#66b4b1; font-size:15px; font-weight:500">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card p-3" style="background-color: #f9fefe; border-radius: 6px !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-content-center">
                                            <i class="bi bi-calendar-check border border-light bg-light  py-2 px-3 rounded shadow"  style="color: #66b4b1 !important; font-size: 27px"></i>
                                            <h5 class="card-title pt-3 ps-3" style="font-weight: 650;"> Inspection Planning</h5> 
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="padding-left: 10px !important">
                                                    
                                                <p class="card-text text-dark pt-3">Using Methodologies like RCM and RBI, we select optimal inspection techniques and maintenance strategies to reduces life-cycle costs</p>

                                                <a href="services.php" class="card-link" style="color:#66b4b1; font-size:15px; font-weight:500">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card p-3" style="background-color: white; border-radius: 6px !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-content-center">
                                            <i class="bi bi-search border border-light bg-light py-2 px-3 rounded"  style="color: white !important; font-size: 27px; background-color:#66b4b1 !important"></i>
                                            <h5 class="card-title pt-3 ps-3" style="font-weight: 650;">Inspection</h5> 
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="padding-left: 10px !important">
                                                    
                                                <p class="card-text text-dark pt-3">Our expert inspectors assess equipment conditions, recommend improvements, and provide API support during turnarounds to ensure safety, and optimal performance</p>

                                                <a href="services.php" class="card-link" style="color:#66b4b1; font-size:15px; font-weight:500">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card p-3" style="background-color: #f9fefe; border-radius: 6px !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-content-center">
                                            <i class="bi bi-robot border border-light bg-light py-2 px-3 rounded shadow"  style="color: #66b4b1 !important; font-size: 27px"></i>
                                            <h5 class="card-title pt-3 ps-3" style="font-weight: 650;">NDT</h5> 
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="padding-left: 10px !important">
                                                    
                                                <p class="card-text text-dark pt-3">We offer a comprehensive have a full range of Non-Destructive Testing (NDT) tools raning from MPI, DPI, UT, ET, AUT, drones and robotics</p>

                                                <a href="services.php" class="card-link" style="color:#66b4b1; font-size:15px; font-weight:500">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 6 -->
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card p-3" style="background-color: white; border-radius: 6px !important;">
                                    <div class="card-body">
                                        <div class="d-flex align-content-center">
                                            <i class="bi bi-bar-chart  border border-light bg-light py-2 px-3 rounded"  style="color: white !important; font-size: 27px; background-color:#66b4b1 !important"></i>
                                            <h5 class="card-title pt-3 ps-3" style="font-weight: 650;">Engineering Integrity</h5> 
                                        </div>
                                        <div class="row">
                                            <div class="col-12" style="padding-left: 10px !important">
                                                    
                                                <p class="card-text text-dark pt-3">We provide thermographic inspections with the FLIR E96 camera and real-time monitoring for corrosion, vibration and critical paramters on rotating equipment</p>

                                                <a href="services.php" class="card-link" style="color:#66b4b1; font-size:15px; font-weight:500">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
        <!-- <section id="scrollspyHeading3" class="py-5" style="background-color: whitesmoke;">
            <div class="container px-5 py-5">
                <div class="row">
                    <div class="col-12 justify-content-center text-center pb-5">
                        <h5 class="about-heading pb-2" style="font-weight: 600; color:#001f3f">What We Offer</h5>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center pb-4 text-center">
                        <div class="card py-3" style="width: 20rem; border-bottom: 3px solid #66b4b1 !important">
                            <div class="card-body">
                                <i class="bi bi-shield-check" style="color: #66b4b1 !important; font-size: 2.5rem"></i>
                                <h5 class="card-subtitle mb-2 pt-3 fw-bold" style="color: #001f3f !important;">Quality</h5>
                                <p class="card-text text-secondary text-secondary py-3" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="services.php" class="card-link" style="color:#66b4b1">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center pb-4 text-center">
                        <div class="card py-3" style="width: 20rem; border-bottom: 3px solid #66b4b1 !important">
                            <div class="card-body">
                                <i class="fa-regular fa-handshake" style="color: #66b4b1 !important; font-size: 2.5rem"></i>
                                <h6 class="card-subtitle mb-2 pt-3 fw-bold" style="color: #001f3f !important;">Engineering Integrity</h6>
                                <p class="card-text text-secondary py-3" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="services.php" class="card-link" style="color:#66b4b1">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center pb-4 text-center">
                        <div class="card py-3" style="width: 20rem; border-bottom: 3px solid #66b4b1 !important">
                            <div class="card-body">
                                <i class="bi bi-calendar-check"  style="color: #66b4b1 !important; font-size: 2.5rem"></i>
                                <h6 class="card-subtitle mb-2 pt-3 fw-bold" style="color: #001f3f !important;">Optimal inspection planning</h6>
                                <p class="card-text text-secondary py-3" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="services.php" class="card-link" style="color:#66b4b1">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center pb-4 text-center">
                        <div class="card py-3" style="width: 20rem; border-bottom: 3px solid #66b4b1 !important">
                            <div class="card-body">
                                <i class="bi bi-search"  style="color: #66b4b1 !important; font-size: 2.5rem"></i>
                                <h6 class="card-subtitle mb-2 pt-3 fw-bold" style="color: #001f3f !important;">Inspection</h6>
                                <p class="card-text text-secondary py-3" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="services.php" class="card-link" style="color:#66b4b1">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center pb-4 text-center">
                        <div class="card py-3" style="width: 20rem; border-bottom: 3px solid #66b4b1 !important">
                            <div class="card-body">
                                <i class="bi bi-robot" style="color: #66b4b1 !important; font-size: 2.5rem"></i>
                                <h6 class="card-subtitle mb-2 pt-3 fw-bold" style="color: #001f3f !important;">NDT</h6>
                                <p class="card-text text-secondary py-3" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="services.php" class="card-link" style="color:#66b4b1">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-center pb-4 pb-4 text-center text-center">
                        <div class="card py-3" style="width: 20rem; border-bottom: 3px solid #66b4b1 !important">
                            <div class="card-body">
                                <i class="bi bi-bar-chart" style="color: #66b4b1 !important; font-size: 2.5rem"></i>
                                <h6 class="card-subtitle mb-2 pt-3 fw-bold" style="color: #001f3f !important;">Condition Monitoring</h6>
                                <p class="card-text text-secondary py-3" style="font-size: 15px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="services.php" class="card-link" style="color:#66b4b1">Learn more <i class="bi bi-arrow-right" style="color:#66b4b1 !important"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-image"></div>
            end services -->
        </section> 
        <!-- Back to top button -->

        <section id="scrollspyHeading4" class="career py-5" style="background-color: white;">
        <!-- #fcfffe -->
            <div class="container px-lg-5 py-5 px-4">
                <div class="row justify-content-center d-flex g-5 flex-column flex-sm-row-reverse">
                    <div class="col-lg-6">
                        <p style="color:#8bf2ee">Work with Us</p>
                        <h2 class="" style="font-weight:600;">We are Hiring</h2>
                        <div class="col-lg-10 col-12">
                            <p style="font-size: 16px; letter-spacing: 0.1px" class="pt-3 text-dark">A career at Kemof Nigeria LTD is more than just employment; it is a chance to be part of a team that brings vision to life with a commitment to excellence.</p>
                        </div>
                        
                        <!-- <ul class="list-unstyled text-dark lh-lg pt-0" style="font-size: 15px; letter-spacing: 0.1px">
                            <li><i class="bi bi-check-lg fs-5"></i><span class="ps-4">We hire skilled, passionate professionals with integrity and confidence.</li></span>
                            <li><i class="bi bi-check-lg fs-5"></i><span class="ps-4">We believe our people are our greatest strength.</li></span>
                            <li><i class="bi bi-check-lg fs-5"></i><span class="ps-4">Continuous training is essential here with us</li></span>
                            <li><i class="bi bi-check-lg fs-5"></i><span class="ps-4">We believe Career advancement is based on performance</li></span>
                        </ul> -->
                        <div class="list my-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-lg fs-5"></i>
                                <span class="ps-3" style="font-size: 15px; letter-spacing: 0.1px;">We hire skilled, passionate professionals with integrity and confidence.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-lg fs-5"></i>
                                <span class="ps-3" style="font-size: 15px; letter-spacing: 0.1px;">We believe our people are our greatest strength.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-lg fs-5"></i>
                                <span class="ps-3" style="font-size: 15px; letter-spacing: 0.1px;">Continuous training is essential here with us.</span>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-check-lg fs-5"></i>
                                <span class="ps-3" style="font-size: 15px; letter-spacing: 0.1px;">We believe Career advancement is based on performance.</span>
                            </div>
                        </div>

                        <div class="col-lg-10 col-12">
                            <p>We cultivate a supportive, family-oriented environment to keep our team motivated.</p>

                            <p class="pt-1">If you are ready to join a world-class team, explore our open positions and apply</p>
                            
                        </div>
                        
                        <!-- <a href="apply.php" class="apply-btn px-4 py-3 text-decoration-none" style="text-transform: capitalize !important;">Apply now</a> -->

                        <a href="apply.php" class="get-in-touch btn btn-primary pt-2 mt-3  px-4 py-2" style="background-color:#66b4b1 !important">Apply Now</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="../img/apply.png"  class="w-100 h-100 rounded">
                    </div>
                </div>
                <!-- <div class="col-12 justify-content-center text-center pb-3">
                    </div>
                <div class="row pt-3 d-flex justify-content-center">
                    
                    <div class="col-lg-6 form-section">
                        <p style="color:#8bf2ee">Work with Us</p>
                        <h3 class="fw-bold about-heading">We are Hiring</h3>
                        <p style="font-size: 15px;" class="py-3 text-secondary">A career at Kemof Nigeria LTD is more than just employment; it is a chance to be part of a team that brings vision to life with a commitment to excellence.</p>

                        <p style="font-size: 15px;" class="text-secondary">At Kemof Nigeria LTD, we believe our people are our greatest strength.
                        We hire and retain skilled, passionate, and dedicated professionals who exemplify integrity, persistence, and confidence. Continuous training is essential here, as joining our team means being part of a Nigerian organization that meets global standards.
                        </p>

                        <p style="font-size: 15px;" class="text-secondary pb-4">Career advancement is based on performance, and we cultivate a supportive, family-oriented environment to keep our team motivated.
                        If you are ready to join a world-class team, explore our open positions and apply
                        </p>

                        <a href="apply.php" class="apply-btn px-5 py-2 text-decoration-none">APPLY NOW</a>
                    </div>

                    
                    <div class="col-lg-6 pt-lg-5 form-text-section">
                        <img src="../img/White and Blue Modern Oil and Gas Services Flyer.png" class="img-hiring img-responsive" style="width: 120%; height: 100%" alt="">
                    </div>
                </div> -->
            </div>
        </section>

        
        <!-- <section id="scrollspyHeading5" style="background-color: whitesmoke;">
            <div class="container px-lg-5 py-5 px-4">
                <p style="color:#8bf2ee" class="pt-5">Have any Questions?</p>
                <h3 class="fw-bold about-heading">Contact Us</h3>

                <div class="row py-5">
                    <div class="col-lg-7 pe-lg-5">
                        <form action=""class="shadow py-5 px-4" style="background-color: white; border-bottom: 3px solid #8bf2ee">
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control form-control-contact form-control-contact-f mb-3" id="firstName" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control form-control-contact form-control-contact-s mb-3 border-0" id="lastName" placeholder="Last Name"  style="background-color:whitesmoke !important;">
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <input type="text" class="form-control form-control-contact mb-3" id="phone" placeholder="Phone Number">
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <input type="email" class="form-control form-control-contact mb-3" id="email" placeholder="Email Address">
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <textarea class="form-control form-control-contact mb-3" id="message" rows="4" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>

                                    
                                    <div class="row mb-3 justify-content-end">
                                        <div class="col-12">
                                            <button type="submit" class="btn-body career-btn btn btn-primary px-5 py-2">Submit</button>
                                        </div>
                                    </div>
                        </form>
                    </div>

                    <div class="col-1">
                        <div class="vr h-75 d-none d-lg-flex ms-lg-3" style="color: whitesmoke"></div>
                    </div>
                    <div class="col-lg-4 ps-lg-5 pt-5">
                        <div class="contact-info">
                            <div class="info-section">
                                <h6 class="fw-bold" style="color:#001f3f">Call Us</h6>
                                <i class="bi bi-telephone-outbound me-3" style="font-size: 1.3rem; color: #f0b400;"></i>
                                <span class="fw-light" style="font-size: 14px">+123 456 678 890</span>
                            </div>
                            <div class="info-section my-4">
                                <h6 class="fw-bold" style="color:#001f3f">Location</h6>
                                <i class="bi bi-geo-alt me-3" style="font-size: 1.3rem; color: #f0b400;"></i>
                                <span class="fw-light" style="font-size: 14px">1234 Street Rd, #105, San Francisco, CA</span>
                            </div>
                            <div class="info-section">
                                <h6 class="fw-bold" style="color:#001f3f">Opening Hours</h6>
                                <i class="bi bi-alarm me-3" style="font-size: 1.3rem; color: #f0b400;"></i>
                                <span class="fw-light" style="font-size: 14px">Mon. - Fri. 11AM - 19PM</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section> -->
        
        

        <!-- footer -->
        <footer class="" style="background-color:#fcfffe">
            <div class="container p-5">
                <div class="row justify-content-center text-start">
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0 pt-5 col-12">
                        <h6 class="mb-2 mb-md-4" style="font-size: 15px;">
                        <img src="../img/logo.png" class="me-3" style="width:40px">KEMOG NIG LIMITED
                        </h6>
                        <p class="text-secondary">Expert Solutions in Inspection, Asset integrity and Performance Optimization</p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 col-sm-6 mb-md-0 pt-0 pt-md-5 text-start">
                        <h6 class="mb-2 mb-md-4">Useful links</h6>
                        <div class="text-secondary" style="font-size: 14.4px;">
                            <p><a href="#scrollspyHeading1" class="text-reset">Home</a></p>
                            <p><a href="#scrollspyHeading2" class="text-reset">About</a></p>
                            <p><a href="apply.php" class="text-reset">Apply</a></p>
                            <p><a href="services.php" href="#!" class="text-reset">Services</a></p>
                            <p><a href="get-a-quote.php" class="text-reset">contact</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 col-sm-6 pt-0 pt-md-5 text-start">
                        <h6 class="mb-2 mb-md-4">Information</h6>
                        <div class="text-secondary" style="font-size: 14.4px;">
                            <p><i class="fa-solid fa-location-dot me-3" style="color:#66b4b1; font-size: 14.4px"></i><b>Nigeria : </b> Plot 24, Road 5, Off Ada George/Location Road Port Harcourt. <br> <b>UK : </b>186 Westorn Road Grangemouth FK3 9EZ, United Kingdom.</p>
                            <p><i class="fas fa-envelope me-3" style="color:#66b4b1"></i>info@kemof-ng.com</p>
                            <p><i class="fas fa-phone me-3" style="color:#66b4b1"></i>+447534447673, (+234) 7032130104</p>
                        </div>
                        
                    </div>
                </div>
                
                <!-- <div class="text-center pt-5 text-secondary">
                    <hr style="width: 100% !important">
                    <div class=""></div>
                    © 2020 Copyright:
                    <a class="text-decoration-none text-secondary" href="#">kemof</p>
                </div> -->

                <hr style="width: 100% !important">
                <div class="text-center">
                    © 2025 Copyright:
                    <a class="text-reset" href="#">kemof Nig Limited</a>
                </div>
            </div>
        </footer>

<!-- Footer -->
    
    </div>


    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-floating btn-lg"  id="btn-back-to-top" style="background-color: #66b4b1 !important;"><i class="fas fa-arrow-up" style="border-radius: 2px important;"></i></button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- <script src="../javascript/home1.js"></script> -->
  <!-- js for links border-bottom -->
  
  <script>
      function reveal() {
       var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
        } else {
        reveals[i].classList.remove("active");
        }
    }
    }
    window.addEventListener("scroll", reveal);
    </script>


    <!-- js for no scroll on hambuger menu -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const navbarToggler = document.querySelector(".navbar-toggler");
            const navbarCollapse = document.querySelector("#navbarSupportedContent");

            navbarToggler.addEventListener("click", function () {
                document.body.classList.toggle("no-scroll", navbarCollapse.classList.contains("show"));
            });

            navbarCollapse.addEventListener("shown.bs.collapse", function () {
                document.body.classList.add("no-scroll"); // Disable scrolling when menu is open
            });

            navbarCollapse.addEventListener("hidden.bs.collapse", function () {
                document.body.classList.remove("no-scroll"); // Enable scrolling when menu is closed
            });
        });
    </script>

  <!-- js to close the menu-bar when a click is clicked -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbarToggler = document.querySelector(".navbar-toggler");
        const navbarCollapse = document.querySelector("#navbarSupportedContent");
        const navLinks = document.querySelectorAll(".navbar-nav .nav-link"); // Select all nav links

        function toggleNoScroll() {
            if (navbarCollapse.classList.contains("show")) {
                document.body.classList.add("no-scroll"); // Disable scrolling
            } else {
                document.body.classList.remove("no-scroll"); // Enable scrolling
            }
        }

        // Close navbar when a link is clicked
        navLinks.forEach(link => {
            link.addEventListener("click", function () {
                if (navbarCollapse.classList.contains("show")) {
                    new bootstrap.Collapse(navbarCollapse, { toggle: true }); // Close navbar
                }
            });
        });

        // Toggle scrolling when menu is opened or closed
        navbarToggler.addEventListener("click", toggleNoScroll);
        navbarCollapse.addEventListener("shown.bs.collapse", () => document.body.classList.add("no-scroll"));
        navbarCollapse.addEventListener("hidden.bs.collapse", () => document.body.classList.remove("no-scroll"));
    });
    </script>

    <!-- script to show cancel in menu -->
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbarToggler = document.querySelector(".navbar-toggler");
        const navbarCollapse = document.querySelector("#navbarSupportedContent");
        const menuIcon = document.querySelector("#menu-icon");

        function toggleIcon() {
            if (navbarCollapse.classList.contains("show")) {
                menuIcon.innerHTML = '<i class="fa-solid fa-bars"></i>'; // Show hamburger when closed
            } else {
                menuIcon.innerHTML = '<i class="fa-solid fa-times"></i>'; // Show cancel icon when opened
            }
        }

        // Listen for navbar toggle clicks
        navbarToggler.addEventListener("click", toggleIcon);

        // Ensure icon updates correctly when menu is closed
        navbarCollapse.addEventListener("hidden.bs.collapse", function () {
            menuIcon.innerHTML = '<i class="fa-solid fa-bars"></i>'; // Reset to hamburger
        });

        navbarCollapse.addEventListener("shown.bs.collapse", function () {
            menuIcon.innerHTML = '<i class="fa-solid fa-times"></i>'; // Show cancel icon
        });
    });
    </script>
    <script src="../javascript/javascript.js"></script>
  </body>
</html>