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
    <link rel="stylesheet" href="../css/apply.css">

    <style>
        .carousel-item {
        display: flex;              /* Enable flexbox layout */
        justify-content: center;    /* Center horizontally */
        align-items: center;       /* Center vertically */
        height: 55vh;              /* Ensure the carousel takes full viewport height */
    }

    .container.img-text {
        text-align: center;         /* Center the text inside the container */
        z-index: 2;
        color: white !important;            /* Ensure the text is above other elements if necessary */
    }
    .form-control{
        border-radius: 5px !important;
        background-color: whitesmoke !important;
        border-radius: 5px !important;
        color: #234342;
    }
    .form-apply, .career-btn{
        border-radius: 5px !important;
    }
    .form-check-input:focus{
    box-shadow: none !important;
    }
    .form-control:focus{
        border: 1px solid #234342 !important;
    }
    .get-in-touch{
        background-color: #66b4b1!important;
        font-size: 15px !important;
        letter-spacing: 1px;
        border-radius: 3px !important;
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
                        <a class="nav-link me-4 ms-lg-0 ms-5" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 ms-lg-0 ms-5" href="index.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-4 ms-lg-0 ms-5" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active me-4 ms-lg-0 ms-5" href="apply.php">Career</a>
                    </li>
                    <form class="d-flex align-content-center" role="search">
                        <a href="get-a-quote.php" class="get-in-touch btn btn-primary pt-2 ms-lg-0 px-4 py-2">CONTACT US</a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end nav -->

    <div class="body">
        <!-- hero-section -->
        <div id="" class="carousel slide">
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
                                        <li class="breadcrumb-item active" aria-current="page" style="color:#8bf2ee !important">Career</li>
                                    </ol>
                                </nav> -->
                                <div class="fade-in">
                                    <h4 class="fw-bold" style="font-size: 3rem;">Career</h4>
                                    <p style="color:#8bf2ee">Join Our team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end hero-section -->

        <section>
            <div class="container px-lg-5 px-4 py-5">
                <div class="row text-center justify-content-center py-4">
                    <div class="col-lg-7 col-md-10 text-center">
                        <p class="">At Kemof Nigeria LTD, our people are our strength. We hire skilled, passionate professionals who demonstrate integrity, persistence, and confidence, while offering continuous training to meet global standards.</p>
                    </div>
                </div>

                <!-- contact -->
                <!-- <div class="container">
                    <div class="d-flex justify-content-center align-items-center text-center d-none d-lg-flex pb-5">

                        <div class="d-flex justify-content-center align-items-center">
                            <i class="bi bi-telephone me-3" style="font-size: 1.4rem; color: #66b4b1;"></i>
                            <div>
                                <span class="d-block fw-bold text-start" style="font-size: 15px;">CALL US</span>
                                <span class="fw-light" style="font-size: 15px">+123 456 678 890</span>
                            </div>
                        </div>


                        <div class="vr mx-4"></div>


                        <div class="d-flex justify-content-center align-items-center">
                            <i class="bi bi-envelope me-3" style="font-size: 1.4rem; color: #66b4b1;"></i>
                            <div>
                                <span class="d-block fw-bold text-start" style="font-size: 15px;">E-MAIL</span>
                                <span class="fw-light" style="font-size: 15px">info@mysite.com</span>
                            </div>
                        </div>


                        <div class="vr mx-4"></div>


                        <div class="d-flex justify-content-center align-items-center">
                            <i class="bi bi-clock me-3" style="font-size: 1.4rem; color: #66b4b1;"></i>
                            <div>
                                <span class="d-block fw-bold text-start" style="font-size: 15px;">WORKING HOURS</span>
                                <span class="fw-light" style="font-size: 15px">Mon. - Fri. 11AM - 19PM</span>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div class="row justify-content-center">
                    <div class="col-lg-10 col-sm-12">
                    <form action="includes/apply.inc.php" method="POST" enctype="multipart/form-data" class="shadow p-lg-5 py-5 px-4 mt-md-5 mt-4 mb-5 form-apply needs-validation" style="background-color: white; border-bottom: 3px solid #66b4b1;" novalidate>
                                    <!-- First Name and Last Name in one row -->
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-md-3">
                                            <!-- <input type="hidden" name="access_key" value="b5d85b7c-d36c-4956-8ee1-570b937821fd"> -->
                                            <input type="text" name="apply_fn" class="form-control " id="firstname" placeholder="First Name" required>
                                            <div class="invalid-feedback">
                                                Please provide your first name.
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <input type="text" name="apply_ln" class="form-control mt-3 mt-md-0" id="lastName" placeholder="Last Name"  style="background-color:whitesmoke !important;" required>
                                            <div class="invalid-feedback" >
                                                Please provide you last name.
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Phone Number and Country in one row -->
                                    <div class="row mb-3">
                                        <div class="col-12 mb-md-3">
                                            <input type="text" name="apply_address" class="form-control" id="address" placeholder="Address" required>
                                            <div class="invalid-feedback">
                                                Please provide your address.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- phone -->
                                    <div class="row mb-3">
                                        <div class="col-12 mb-md-3">
                                            <input type="text" name="apply_phone" class="form-control " id="phone" placeholder="Phone" required>
                                            <div class="invalid-feedback" >
                                                Please provide your phone number.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Email field -->
                                    <div class="row mb-3">
                                        <div class="col-12  mb-md-3">
                                            <input type="email" name="apply_email" class="form-control" id="email" placeholder="Email address" required>
                                            <div class="invalid-feedback" >
                                                Please provide your email address.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- place of birth and date -->
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-md-3">
                                            <input type="text" name="apply_pob" class="form-control" id="POB" placeholder="Place of Birth" required>
                                            <div class="invalid-feedback" >
                                                Please provide your place of birth.
                                            </div>
                                        </div>

                                        <label class="d-block d-md-none mt-3">Date of birth</label>
                                        <div class="col-md-6">
                                        <input type="date" name="apply_dob" class="form-control mt-0 mt-md-0" 
                                        id="date" required>

                                            <div class="invalid-feedback" >
                                            Please provide your date of birth.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Nationality -->
                                    <div class="row mb-3">
                                        <div class="col-md-12 mb-md-3">
                                            <select class="form-control" name="apply_country" form-select=" id="nationality style="color: #6c757d !important" required>
                                                <option value="" disabled selected>Country</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Brunei">Brunei</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cabo Verde">Cabo Verde</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                                                <option value="Congo, Republic of the">Congo, Republic of the</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Eswatini">Eswatini</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, North">Korea, North</option>
                                                <option value="Korea, South">Korea, South</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Laos">Laos</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia">Micronesia</option>
                                                <option value="Moldova">Moldova</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="North Macedonia">North Macedonia</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syria">Syria</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania">Tanzania</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Timor-Leste">Timor-Leste</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City">Vatican City</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                            <div class="invalid-feedback" >
                                                Please select your country.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="d-flex justify-content-center">
                                                <div id="loadingSpinner" class="spinner-border spinner-border-lg text-dark" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div> -->

                                    <!-- gender ans salary -->
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-md-3">
                                            <select class="form-control form-select" name="apply_gender" id="gender" required style="color: #6c757d !important" required>
                                                <option value="" disabled selected>Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="prefer_not_to_say">Prefer not to say</option>
                                            </select>
                                            <div class="invalid-feedback" >
                                                Please select your gender.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="apply_salary" class="form-control mt-3 mt-md-0" id="salary" placeholder="Expected Salary e.g 13000" required>
                                            <div class="invalid-feedback" >
                                                Please provide expected salary.
                                            </div>
                                        </div>
                                    </div>


                                    <!-- upload cv and cover letter -->
                                    <div class="row mb-3">
                                        <div class="col-md-6 pb-3 pb-lg-0">
                                            <label for="cvUpload" class="form-label">Upload CV</label>
                                            <input type="file" name="apply_cv" class="form-control" id="cv" accept=".pdf,.doc,.docx,.txt" style="color: #6c757d !important" required>
                                            <div class="invalid-feedback" >
                                                Please upload your cv.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="coverLetterUpload" class="form-label">Upload Cover Letter</label>
                                            <input type="file" name="apply_cl" class="form-control" id="coverletter" accept=".pdf,.doc,.docx,.txt" style="color: #6c757d !important" required>
                                            <div class="invalid-feedback" >
                                                Please upload your cover letter.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- link to profile -->
                                    <div class="row mb-5">
                                        <div class="col-md-12 mb-md-3 mt-lg-3 mt-2">
                                            <input type="url" name="apply_link" class="form-control" id="linkedin" placeholder="Enter LinkedIn URL" required>
                                            <div class="invalid-feedback" >
                                                Please provide your linkedin link.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
                                        <label class="form-check-label" for="">
                                            I have read and agree to the <a href="../html/terms&condition.html" target="_blank">Terms and Conditions</a>.
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div>
                                    </div>

                                    <!-- Submit button -->
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <button type="submit" name="submit" class="btn-body career-btn btn btn-primary px-5 py-2" style="background-color: #66b4b1 !important;">Submit</button>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered container">
                <div class="modal-content " style="background-color: whitesmoke !important;">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <i class="bi bi-check-circle fs-1" style="color:#66b4b1 !important"></i>
                    <p class="fs-4" style="font-weight: 600;">Thank you for applying with us!</p>
                    <p>Your application has been received, and we will get back to you as soon as possible</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-dark border-0" data-bs-dismiss="modal" style="background-color: #66b4b1 !important;">Close</button>
                </div>
                </div>
            </div>
        </div>
        <!-- end modal -->



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
    </div>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-danger btn-floating btn-lg"  id="btn-back-to-top" style="background-color: #66b4b1 !important;"><i class="fas fa-arrow-up" style="border-radius: 2px important;"></i></button>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="../javascript/javascript.js"></script>
  <script>
        (() => {
            'use strict'

            
            const forms = document.querySelectorAll('.needs-validation')

            
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()
    </script>
    <!-- js to trigger modal -->
    <script>
    // Check if URL contains 'submitted=success'
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('submitted') === 'success') {
        // Trigger the modal using Bootstrap's modal API
        const successModal = new bootstrap.Modal(document.getElementById('exampleModal'));
        successModal.show();

        // remove success tag and go back to original page
        window.history.replaceState(null, '', window.location.pathname);
    }
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
  </body>
</html>