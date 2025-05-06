<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/services.css">

    <style>
        .carousel-item {
        display: flex;              /* Enable flexbox layout */
        justify-content: center;    /* Center horizontally */
        align-items: center;       /* Center vertically */
        height: 55vh;              /* Ensure the carousel takes full viewport height */
    }

    .services-btn{
    font-weight: 500;
    text-transform: uppercase;
    border: 1px solid #66b4b1 !important;
    letter-spacing: 1px;
    background-color: transparent!important;
    color: #66b4b1;
}
    .services-btn:hover{
        font-weight: 500;
        text-transform: uppercase;
        border: 1px solid #66b4b1 !important;
        letter-spacing: 1px;
        background-color: #66b4b1 !important;
        color: white;
    }

    .services-btn:focus{
        font-weight: 500;
        text-transform: uppercase;
        border: 1px solid #66b4b1 !important;
        letter-spacing: 1px;
        background-color: #66b4b1 !important;
        color: white;
    }

    .container.img-text {
        text-align: center;         /* Center the text inside the container */
        z-index: 2;
        color: white !important;            /* Ensure the text is above other elements if necessary */
    }
    .get-in-touch{
        background-color: #66b4b1!important;
        font-size: 15px !important;
        letter-spacing: 1px;
        border: none !important;
        border-radius: 3px !important;
        font-weight: 600;
    }
    @media (max-width: 768px) { /* Adjusts for tablets and smaller screens */
    h4.fw-bold {
        font-size: 2.4rem !important;
    }
    }

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
        /* endnav bar */
    /* brak wvmb lrad hiei */
    </style>
  </head>
  <body>
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
                        <a class="nav-link  me-4 ms-lg-0 ms-5" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 ms-lg-0 ms-5" href="index.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-4 ms-lg-0 ms-5" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 ms-lg-0 ms-5" href="apply.php">Career</a>
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
                    <div class="container img-text px-5 text-center ">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <!-- breadcrumb -->
                                <!-- <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb justify-content-center">
                                        <li class="breadcrumb-item"><a href="index.php" style="color:#8bf2ee !important">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page" style="color:#8bf2ee !important">Get a Quote</li>
                                    </ol>
                                </nav> -->
                                <div class="fade-in">
                                    <h4 class="fw-bold" style="font-size: 3rem;">Our Services</h4>
                                    <p style="color:#8bf2ee">What we offer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end hero-section -->

        <section>
            <div class="container p-5">
                <div class="row text-center justify-content-center py-md-5 py-4">
                    <div class="col-lg-7 col-md-10 col-12 text-center">
                        <p class="pt-1">At Kemof Nigeria LTD, we deliver excellence by best Engineering practices and strict adherance to International standards at all time</p>
                        <p class="pt-1">At Kemof Nigeria LTD, saftey is our over-riding priority</p>
                    </div>
                </div>
            </div>
        </section>

    
        <section>
            <div class="container px-lg-5 px-3">
                <div class="row">
                    <!-- Card 1: Image left, text right -->
                    <div class="col-12 mb-3">
                        <div class="card mb-3 border-0" style="max-width: 100%;">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <img src="../img/quality_2.png" class="img-fluid" alt="Image 1">
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2 px-0 px-md-3">
                                    <div class="card-body">
                                        <h2 class="card-title" style="font-weight:600;">Quality</h2>
                                        <p class="card-text pt-3 text-wrap" style="font-size: 16px; line-height: 30px">
                                        We provide comprehensive manufacturing surveillance services to ensure your equipment meets all specifications before leaving the manufacturer’s yard. Our team verifies materials, dimensions, and compliance through factory acceptance tests and pre-shipment inspections, ensuring all required As-Built documents are in place.</p>

                                        <p class="card-text pt-3" style="font-size: 16px; line-height: 30px">With our dual nationality status and European Passport, we have seamless access to global manufacturing hubs, making inspections more efficient. We also review Manufacturing Inspection Test Plans (MITP) and establish the necessary Hold and Witness Points to guarantee the highest quality standards, helping you avoid costly surprises upon delivery.
                                        </P>

                                        <div class="mt-4">
                                            <a href="get-a-quote.php" class="btn btn-primary services-btn px-5 py-2" style="border-radius: 3px !important" tabindex="-1" role="button" aria-disabled="true">CONTACT US</a>
                                        </div>
                                        
                                        <!-- <p>Modules or Equipment should be independently checked before leaving the manufacturer’s
                                        yard; to confirm that ordered specifications are met, correct materials were used,
                                        dimensional checks are correct. We can witness factory acceptance test and pre-shipment
                                        inspection; ensure that all required As-Built documents are in place
                                        
                                        In this way you can avoid unpleasant surprises when your equipment arrives at site, far
                                        away from the OEM’s yard and therefore far away from quick remedial action.</p>

                                        We can leverage on our dual nationality status, with a European Passport which gives us
                                        easy access to any country where manufacturing surveillance inspection is required.
                                        We can review Manufacturing Inspection Test Plan ( MITP) and include adequate ‘Hold
                                        Point’ and ‘Witness Point’ to ensure that specified quality is achieved.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="w-75 mx-auto mt-4 mb-5">

                    <!-- Card 2: Text left, image right -->
                    <div class="col-12 mb-3">
                        <div class="card mb-3 border-0" style="max-width: 100%;">
                            <div class="row g-4 flex-row-reverse">
                                <div class="col-md-6">
                                    <img src="../img/engineeing_inter.png" class="img-fluid" alt="Image 1">
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2 px-0 px-md-3">
                                    <div class="card-body">
                                        <h2 class="card-title" style="font-weight:600;">Engineering Integrity</h2>
                                        <p class="card-text pt-3" style="font-size: 16px;  line-height: 30px">We prioritize operational excellence by proactively preventing unplanned downtime. This commitment enhances the safety of our personnel, ensuring a secure working environment, while also protecting the ecosystem from potential industrial hazards. By reducing costly reactive maintenance, we help our clients optimize resources and extend the lifespan of critical assets. Our approach guarantees continuous production efficiency, driving increased revenue and long-term sustainability for our partners.</p>

                                        <div class="mt-5">
                                            <a href="get-a-quote.php" class="btn btn-primary services-btn px-5 py-2" style="border-radius: 3px !important" tabindex="-1" role="button" aria-disabled="true">CONTACT US</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="w-75 mx-auto mt-4 mb-5">

                    <!-- Card 3: Image left, text right -->
                    <div class="col-12 mb-3">
                        <div class="card mb-3 border-0" style="max-width: 100%;">
                            <div class="row g-4">
                                <div class=" col-md-6">
                                    <img src="../img/optimal_planning.png" class="img-fluid" alt="Image 3">
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2 px-0 px-md-3">
                                <div class="card-body">
                                        <h2 class="card-title" style="font-weight:600;">Optimal inspection planning</h2>
                                        <p class="card-text pt-3" style="font-size: 16px;  line-height: 30px">
                                        By implementing advanced methodologies such as Reliability-Centered Maintenance (RCM) and Risk-Based Inspections (RBI), we strategically determine the most effective inspection techniques to optimize asset performance while minimizing costs throughout the entire life cycle. Our approach involves carefully evaluating each asset to select the most suitable maintenance strategy, whether it be decay management, reactive repairs, planned servicing, proactive interventions, or predictive maintenance, ensuring operational efficiency, extended asset longevity, and cost-effective resource utilization.
                                        </p>

                                        <div class="mt-5">
                                            <a href="get-a-quote.php" class="btn btn-primary services-btn px-5 py-2" style="border-radius: 3px !important" tabindex="-1" role="button" aria-disabled="true">CONTACT US</a>
                                        </div>
                                        <!-- <p>By applying methodologies like Reliability Centered Maintenance (RCM) and Risk based
                                        Inspections (RBI), we select the right inspection techniques to achieve optimum life-cycle
                                        cost. Per asset choices are made between decay, reactive, planned, proactive and predictive
                                        maintenance strategies. </p> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="w-75 mx-auto mt-4 mb-5">

                    <!-- Card 4: Text left, image right -->
                    <div class="col-12 mb-3">
                        <div class="card mb-3 border-0" style="max-width: 100%;">
                            <div class="row g-4 flex-row-reverse">
                                <div class="col-md-6">
                                    <img src="../img/inspection.png" class="img-fluid"alt="Image 4">
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2 px-0 px-md-3">
                                    <div class="card-body">
                                        <h2 class="card-title" style="font-weight:600">Inspection</h2>
                                        <p class="card-text pt-3" style="font-size: 16px;  line-height: 30px">
                                            We pride ourselves on our number of expert Inspection Engineers with sound knowledge of damage mechanisms and failure modes. 
                                            We can make a visual assessment of the condition of your equipment and make recommendations that will improve the life of the item. 
                                            Our large number of API inspectors can provide you with Inspection support during turnarounds.
                                        </p>
                                        <p class="card-text" style="font-size: 16px;  line-height: 30px">
                                        We can provide you support with inspection scoping, identifying locations with high damage susceptibility and recommend an effective inspection technique to detect damage prior to failure.
                                        </p>

                                        <div class="mt-5">
                                            <a href="get-a-quote.php" class="btn btn-primary services-btn px-5 py-2" style="border-radius: 3px !important" tabindex="-1" role="button" aria-disabled="true">CONTACT US</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="w-75 mx-auto mt-4 mb-5">

                    <!-- Card 5: Image left, text right -->
                    <div class="col-12 mb-3">
                        <div class="card mb-3 border-0" style="max-width: 100%;">
                            <div class="row g-4 ">
                                <div class="col-md-6">
                                    <img src="../img/heat exchnager.png" class="img-fluid" alt="Image 5">
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2 px-0 px-md-3">
                                <div class="card-body">
                                        <h2 class="card-title" style="font-weight:600">Exchanger Bundles</h2>
                                        <p class="card-text pt-3" style="font-size: 16px;  line-height: 30px">
                                        We take great pride in delivering comprehensive services that cover every stage of heat exchanger maintenance, from bundle pulling and pushing to high-pressure jetting for thorough bundle cleaning. Additionally, our expertise extends to detailed bundle tube inspections using IRIS technology, ensuring optimal performance and reliability. To further support our clients, we collaborate with trusted partners who specialize in retubing fixed exchangers, providing a seamless solution for extending the lifespan of critical equipment.
                                        </p>
                                            
                                        <div class="mt-5">
                                            <a href="get-a-quote.php" class="btn btn-primary services-btn px-5 py-2" style="border-radius: 3px !important" tabindex="-1" role="button" aria-disabled="true">CONTACT US</a>
                                        </div>
                                        <!-- <p>We pride ourselves in providing services from bundle pulling and pushing, bundle cleaning - (High Pressure Jetting) to bundle tubes inspection (IRIS). We also have partners that can retube fixed exchangers.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="w-75 mx-auto mt-4 mb-5">

                    <!-- Card 6: Text left, image right -->
                    <div class="col-12 mb-3">
                        <div class="card mb-3 border-0" style="max-width: 100%;">
                            <div class="row g-4 flex-row-reverse">
                                <div class="col-md-6">
                                    <img src="../img/NDT.png" class="img-fluid" alt="Image 6">
                                </div>
                                <div class="col-md-6 mt-md-0 mt-2 px-0 px-md-3">
                                <div class="card-body">
                                        <h2 class="card-title" style="font-weight:600">Non-Destructive Testing (NDT)</h2>
                                        <p class="card-text pt-3" style="line-height: 30px">
                                        To ensure the highest level of support for our customers, we offer a comprehensive range of Non-Destructive Testing (NDT) capabilities tailored to meet various inspection and maintenance needs. Our expertise includes Magnetic Particle Inspection (MPI), Dye Penetrant Inspection (DPI), Ultrasonic Testing (UT), Eddy Current Testing (ET), Automated Ultrasonic Testing (AUT), and Internal Rotary Inspection System (IRIS). Additionally, we leverage cutting-edge technology such as drones and robotics to enhance inspection accuracy, improve safety, and minimize downtime in complex and hard-to-reach areas.
                                        </p>
                                            
                                        <div class="mt-5">
                                            <a href="get-a-quote.php" class="btn btn-primary services-btn px-5 py-2" style="border-radius: 3px !important" tabindex="-1" role="button" aria-disabled="true">CONTACT US</a>
                                        </div>

                                        <!-- <p>To effectively support our customers, we have a range of NDT capabilities : MPI, DPI, UT, ET, AUT, IRIS, Drones and Robotics.
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- footer -->
        
        <footer class="" style="background-color:#fcfffe">
            <div class="container p-5">
                <div class="row justify-content-center text-lg-start text-center">
                    <div class="col-lg-5 col-md-6 mb-4 mb-md-0 pt-5">
                        <h6 class="mb-4" style="font-size: 15px;">
                        <img src="../img/logo.png" class="me-3" style="width:40px">KEMOG NIG LIMITED
                        </h6>
                        <p class="text-secondary">Expert Solutions in Inspection, Asset integrity and <br>Performance Optimization</p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 pt-5 text-lg-start text-center">
                        <h6 class="mb-4">Useful links</h6>
                        <div class="text-secondary" style="font-size: 14.4px;">
                            <p><a href="index.php" class="text-reset">Home</a></p>
                            <p><a href="index.php" class="text-reset">About</a></p>
                            <p><a href="apply.php" class="text-reset">Apply</a></p>
                            <p><a href="services.php" class="text-reset">Services</a></p>
                            <p><a href="get-a-quote.php" class="text-reset">contact</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0 pt-5 text-lg-start text-center">
                        <h6 class="mb-4">Information</h6>
                        <div class="text-secondary" style="font-size: 14.4px;">
                            <p><i class="fas fa-home me-3" style="color:#66b4b1"></i><b>Nigerian : </b> Plot 24, Road 5, Off Ada George/Location Road Port Harcourt. <br> <b>UK : </b>186 Westorn Road Grangemouth FK3 9EZ, United Kingdom.</p>
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
    <!-- end js for no scroll on hambuger menu -->

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
    <!-- end js to close the menu-bar when a click is clicked -->

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
    <!-- end script to show cancel in menu -->

  <script src="../javascript/javascript.js"></script>
  </body>
</html>