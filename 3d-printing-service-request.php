<?php
$title = "3D Printing Service Request";
$description = "Request 3D printing services from Precise3DM. Upload your design for expert DFM analysis, multiple technology options, and wide material selection.";
$keywords = "3D Printing, Service Request, Precise3DM, DFM Analysis, Rapid Prototyping";
$dev_step = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Precise3DM</title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Site-Wide CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/3d-printing-service-request.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>

    <?php include('includes/header.php'); ?>

    <!-- =========================================================
         3D PRINTING SERVICE REQUEST SECTION
         ========================================================= -->
    <section class="print-service-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <!-- Step 1 Container -->
            <div id="step1-container" style="display: <?php echo ($dev_step == 1) ? 'block' : 'none'; ?>;">
                <div class="row align-items-start">
                    
                    <!-- Left Div -->
                    <div class="col-lg-5 pe-lg-5 mb-5 mb-lg-0">
                        <div class="left-print-header">
                            <h1 class="left-print-title">3D Printing Service<br>Request</h1>
                        </div>
                        <p class="left-print-subtitle">Upload your design and our team will analyze and recommend the best technology and material for your part.</p>

                        <ul class="left-print-list">
                            <li>
                                <i class="fa-solid fa-circle-check print-check-icon"></i>
                                <span>Expert DFM Analysis</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check print-check-icon"></i>
                                <span>Multiple Technology Options</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check print-check-icon"></i>
                                <span>Wide Material Selection</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check print-check-icon"></i>
                                <span>Competitive Pricing</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-circle-check print-check-icon"></i>
                                <span>Fast Turnaround</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Right Side Form Div -->
                    <div class="col-lg-7">
                        <div class="print-form-card">
                            <div class="step-progress-text">Step 1 of 7</div>
                            <h2 class="print-form-title">Contact Information</h2>
                            <p class="print-form-subtitle">Tell us about yourself,</p>

                            <form id="printStep1Form">
                                <!-- Full Name & Company Name Row -->
                                <div class="row g-4">
                                    <div class="col-md-6 pb-4">
                                        <div class="custom-input-group mb-0">
                                            <label class="custom-floating-label">Full Name <span>*</span></label>
                                            <input type="text" class="custom-print-input" id="fullName" placeholder="Enter your full name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-4">
                                        <div class="custom-input-group mb-0">
                                            <label class="custom-floating-label">Company Name <span>*</span></label>
                                            <input type="text" class="custom-print-input" id="companyName" placeholder="Enter your company name" required>
                                        </div>
                                    </div>
                                </div>

                                <!-- Designation & Email Row -->
                                <div class="row g-4">
                                    <div class="col-md-6 pb-4">
                                        <div class="custom-input-group mb-0">
                                            <label class="custom-floating-label">Designation <span>*</span></label>
                                            <input type="text" class="custom-print-input custom-print-input-icon" id="designation" placeholder="Enter your designation" required>
                                            <i class="fa-regular fa-envelope input-icon-right"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-4">
                                        <div class="custom-input-group mb-0">
                                            <label class="custom-floating-label">E-mail <span>*</span></label>
                                            <input type="email" class="custom-print-input custom-print-input-icon" id="emailAddress" placeholder="Enter email address" required>
                                            <i class="fa-regular fa-envelope input-icon-right"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Mobile Number Row -->
                                <div class="custom-input-group">
                                    <label class="custom-floating-label">Mobile Number <span>*</span></label>
                                    <div class="mobile-phone-container">
                                        <div class="country-select-wrapper">
                                            <img src="https://flagcdn.com/w20/in.png" alt="India Flag" id="selectedFlag" class="me-2" style="width: 24px; height: 16px; object-fit: cover; border-radius: 2px;">
                                            <i class="fa-solid fa-chevron-down ms-1 me-2" style="font-size: 0.8rem; color: #666;"></i>
                                            <span id="selectedDialCode" style="font-weight: 600; font-size: 1.05rem; color: #333;">+91</span>
                                            <select class="country-code-select" id="mobileCountrySelect" onchange="updateCountryCode(this)">
                                                <option value="+91" data-flag="in">+91 (India)</option>
                                                <option value="+1" data-flag="us">+1 (USA/Canada)</option>
                                                <option value="+44" data-flag="gb">+44 (UK)</option>
                                                <option value="+61" data-flag="au">+61 (Australia)</option>
                                                <option value="+49" data-flag="de">+49 (Germany)</option>
                                                <option value="+33" data-flag="fr">+33 (France)</option>
                                                <option value="+81" data-flag="jp">+81 (Japan)</option>
                                                <option value="+86" data-flag="cn">+86 (China)</option>
                                                <option value="+971" data-flag="ae">+971 (UAE)</option>
                                                <option value="+966" data-flag="sa">+966 (Saudi Arabia)</option>
                                                <option value="+65" data-flag="sg">+65 (Singapore)</option>
                                                <option value="+60" data-flag="my">+60 (Malaysia)</option>
                                            </select>
                                        </div>
                                        <input type="tel" class="mobile-phone-input flex-grow-1" id="mobileNumber" placeholder="5550000000" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="15" required>
                                        <i class="fa-solid fa-phone input-icon-right"></i>
                                    </div>
                                </div>

                                <!-- Country & City Row -->
                                <div class="row g-4">
                                    <div class="col-md-6 pb-4">
                                        <div class="custom-input-group mb-0">
                                            <label class="custom-floating-label">Country <span>*</span></label>
                                            <i class="fa-solid fa-location-dot input-icon-left"></i>
                                            <select class="custom-print-select" id="countrySelect" required>
                                                <option value="" disabled selected>Select country</option>
                                                <option value="India">India</option>
                                                <option value="United States">United States</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Canada">Canada</option>
                                                <option value="France">France</option>
                                                <option value="Japan">Japan</option>
                                                <option value="UAE">UAE</option>
                                                <option value="Singapore">Singapore</option>
                                            </select>
                                            <i class="fa-solid fa-chevron-down select-arrow-right"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pb-4">
                                        <div class="custom-input-group mb-0">
                                            <label class="custom-floating-label">City <span>*</span></label>
                                            <i class="fa-solid fa-location-dot input-icon-left"></i>
                                            <select class="custom-print-select" id="citySelect" required>
                                                <option value="" disabled selected>Select city</option>
                                                <option value="Mumbai">Mumbai</option>
                                                <option value="Pune">Pune</option>
                                                <option value="Bengaluru">Bengaluru</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Chennai">Chennai</option>
                                                <option value="New York">New York</option>
                                                <option value="London">London</option>
                                                <option value="Berlin">Berlin</option>
                                                <option value="Sydney">Sydney</option>
                                                <option value="Toronto">Toronto</option>
                                                <option value="Dubai">Dubai</option>
                                                <option value="Singapore">Singapore</option>
                                            </select>
                                            <i class="fa-solid fa-chevron-down select-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>

                                <!-- Industry Dropdown Row -->
                                <div class="custom-input-group">
                                    <label class="custom-floating-label">Industry</label>
                                    <select class="custom-print-select custom-print-select-no-left" id="industrySelect" required>
                                        <option value="" disabled selected>Select industry</option>
                                        <option value="Automotive">Automotive</option>
                                        <option value="Aerospace">Aerospace</option>
                                        <option value="Die & Mold / Die Casting">Die & Mold / Die Casting</option>
                                        <option value="Heavy Machinery">Heavy Machinery</option>
                                        <option value="Power & Energy">Power & Energy</option>
                                        <option value="Foundry & Forging">Foundry & Forging</option>
                                        <option value="Defense">Defense</option>
                                        <option value="Electric Vehicles (EV)">Electric Vehicles (EV)</option>
                                        <option value="Mining & Construction">Mining & Construction</option>
                                        <option value="Medical & Healthcare">Medical & Healthcare</option>
                                        <option value="Consumer Goods & Electronics">Consumer Goods & Electronics</option>
                                        <option value="Agriculture">Agriculture</option>
                                        <option value="Architecture & Sculpture">Architecture & Sculpture</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="fa-solid fa-chevron-down select-arrow-right"></i>
                                </div>

                                <!-- Continue Button -->
                                <div class="mt-4 pt-2">
                                    <button type="submit" id="btnStep1Continue" class="btn-print-continue w-100" disabled>Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Step 2 Container -->
            <div id="step2-container" style="display: <?php echo ($dev_step == 2) ? 'block' : 'none'; ?>;">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="print-form-card">
                            <div class="step-progress-text">Step 2 of 7</div>
                            <h2 class="print-form-title">Upload Your Design</h2>
                            <p class="print-form-subtitle">Upload your 3D model, drawing or any reference files</p>

                            <form id="printStep2Form">
                                <!-- Upload Dotted Box -->
                                <div class="upload-dotted-box" onclick="document.getElementById('printModelUpload').click()">
                                    <input type="file" id="printModelUpload" multiple accept=".stl,.step,.stp,.iges,.igs,.obj,.3mf,.pdf,.jpg,.png,.zip" style="display: none;" onchange="handlePrintFileUpload(event)">
                                    <i class="fa-solid fa-cloud-arrow-up upload-icon"></i>
                                    <h4 class="upload-title">Drag & Drop your files here or click to browse</h4>
                                    <p class="upload-subtitle mb-1">Supported files:<br>STEP, STP, IGES, STL, OBJ, 3MF, Parasolid<br>SolidWorks, CATIA, NX, PDF, JPG, PNG</p>
                                    <p class="upload-subtitle fw-semibold mt-2">Maximum: 50MB per file</p>
                                </div>

                                <!-- Design Requirements Title & Cards -->
                                <h3 class="design-req-title mt-2 mb-4">What are you uploading?</h3>
                                <input type="hidden" id="selectedDesignRequirement" name="designRequirement" value="">

                                <div class="row gy-4 gx-4 mb-5">
                                    <div class="col-md-4 py-3">
                                        <div class="design-req-card" onclick="selectDesignReq(this, '3D CAD Model')">
                                            <img src="assets/images/3d-printing-service-request/design1.svg" alt="3D CAD Model" class="design-req-icon">
                                            <h4 class="design-req-card-title">3D CAD Model</h4>
                                            <p class="design-req-card-text">(STEP,STP,IGES)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 py-3">
                                        <div class="design-req-card" onclick="selectDesignReq(this, 'STL File')">
                                            <img src="assets/images/3d-printing-service-request/design2.svg" alt="STL File" class="design-req-icon">
                                            <h4 class="design-req-card-title">STL File</h4>
                                            <p class="design-req-card-text">(STL)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 py-3">
                                        <div class="design-req-card" onclick="selectDesignReq(this, 'Engineering Drawing')">
                                            <img src="assets/images/3d-printing-service-request/design3.svg" alt="Engineering Drawing" class="design-req-icon">
                                            <h4 class="design-req-card-title">Engineering Drawing</h4>
                                            <p class="design-req-card-text">PDF</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 py-3">
                                        <div class="design-req-card" onclick="selectDesignReq(this, 'Existing Sample')">
                                            <img src="assets/images/3d-printing-service-request/design4.svg" alt="Existing Sample" class="design-req-icon">
                                            <h4 class="design-req-card-title">Existing Sample</h4>
                                            <p class="design-req-card-text">Photos</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 py-3">
                                        <div class="design-req-card" onclick="selectDesignReq(this, 'Concept Sketch')">
                                            <img src="assets/images/3d-printing-service-request/design5.svg" alt="Concept Sketch" class="design-req-icon">
                                            <h4 class="design-req-card-title">Concept Sketch</h4>
                                            <p class="design-req-card-text">(JPG, PNG)</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 py-3">
                                        <div class="design-req-card" onclick="selectDesignReq(this, 'Not Sure')">
                                            <img src="assets/images/3d-printing-service-request/design6.svg" alt="Not Sure" class="design-req-icon">
                                            <h4 class="design-req-card-title mb-0">Not Sure</h4>
                                        </div>
                                    </div>
                                </div>

                                <!-- Uploaded Files Preview Container -->
                                <h3 class="design-req-title mt-5 mb-4" id="uploadedFilesTitle" style="display: none;">Uploaded Files</h3>
                                <div id="printFilePreviewContainer" class="row g-3 mb-5"></div>

                                <!-- Navigation Buttons -->
                                <div class="d-flex justify-content-between align-items-center mt-4 pt-2">
                                    <button type="button" class="btn-print-back" onclick="showStep(1)">Back</button>
                                    <button type="button" id="btnStep2Continue" class="btn-print-continue-next" onclick="validateStep2AndContinue()">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 Container -->
            <div id="step3-container" style="display: <?php echo ($dev_step == 3) ? 'block' : 'none'; ?>;">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="print-form-card">
                            <div class="step-progress-text">Step 3 of 7</div>
                            <h2 class="print-form-title">Part Requirements</h2>
                            <p class="print-form-subtitle mb-4">Tell us more about your part and requirements</p>

                            <form id="printStep3Form">
                                <!-- Part Application Heading -->
                                <h3 class="design-req-title mb-2" style="font-size: 1.4rem;">Part Application <span style="font-weight: 500; font-size: 1.15rem; color: #666;">(select all the apply)</span></h3>
                                <h4 class="design-req-title mt-4 mb-4">What are you uploading?</h4>

                                <div class="row gy-4 gx-4 mb-5">
                                    <?php 
                                    $part_apps = [
                                        ['id' => 'app_1', 'title' => 'Functional End Use Part', 'icon' => 'part1.svg'],
                                        ['id' => 'app_2', 'title' => 'Prototype', 'icon' => 'part2.svg'],
                                        ['id' => 'app_3', 'title' => 'Fitment Verification', 'icon' => 'part3.svg'],
                                        ['id' => 'app_4', 'title' => 'Marketing Model', 'icon' => 'part4.svg'],
                                        ['id' => 'app_5', 'title' => 'Tooling', 'icon' => 'part5.svg'],
                                        ['id' => 'app_6', 'title' => 'Jig & Fixture', 'icon' => 'part6.svg'],
                                        ['id' => 'app_7', 'title' => 'Aerospace', 'icon' => 'part7.svg'],
                                        ['id' => 'app_8', 'title' => 'Automotive', 'icon' => 'part8.svg'],
                                        ['id' => 'app_9', 'title' => 'Medical', 'icon' => 'part9.svg'],
                                        ['id' => 'app_10', 'title' => 'Consumer Product', 'icon' => 'part10.svg'],
                                        ['id' => 'app_11', 'title' => 'R&D', 'icon' => 'part11.svg'],
                                        ['id' => 'app_12', 'title' => 'Other', 'icon' => 'part12.svg'],
                                    ];
                                    foreach ($part_apps as $app): ?>
                                        <div class="col-md-6 col-lg-3 py-2">
                                            <div class="part-app-card" onclick="togglePartApp(this, '<?php echo $app['id']; ?>')">
                                                <input type="checkbox" id="<?php echo $app['id']; ?>" name="partApplication[]" value="<?php echo $app['title']; ?>" style="display: none;">
                                                <div class="part-app-header">
                                                    <img src="assets/images/3d-printing-service-request/<?php echo $app['icon']; ?>" alt="<?php echo $app['title']; ?>" class="part-app-icon">
                                                    <div class="card-custom-checkbox"><i class="fa-solid fa-check"></i></div>
                                                </div>
                                                <h5 class="part-app-card-title"><?php echo $app['title']; ?></h5>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Approximate Part Size -->
                                <h3 class="design-req-title mt-3 mb-4">Approximate Part Size</h3>
                                <input type="hidden" id="selectedPartSize" name="partSize" value="">
                                
                                <div class="row gy-4 gx-4 mb-5">
                                    <div class="col-md-6 col-lg-3 py-2">
                                        <div class="part-size-card" onclick="selectPartSize(this, 'Small (<100 mm)')">
                                            <i class="fa-solid fa-up-right-and-down-left-from-center part-size-icon"></i>
                                            <h4 class="part-size-title">Small</h4>
                                            <p class="part-size-text">&lt;100 mm</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 py-2">
                                        <div class="part-size-card" onclick="selectPartSize(this, 'Medium (100 mm - 500 mm)')">
                                            <i class="fa-solid fa-up-right-and-down-left-from-center part-size-icon"></i>
                                            <h4 class="part-size-title">Medium</h4>
                                            <p class="part-size-text">100 mm - 500 mm</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 py-2">
                                        <div class="part-size-card" onclick="selectPartSize(this, 'large (500 mm - 1000 mm)')">
                                            <i class="fa-solid fa-up-right-and-down-left-from-center part-size-icon"></i>
                                            <h4 class="part-size-title">large</h4>
                                            <p class="part-size-text">500 mm - 1000 mm</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 py-2">
                                        <div class="part-size-card" onclick="selectPartSize(this, 'Very Large (1m +)')">
                                            <i class="fa-solid fa-up-right-and-down-left-from-center part-size-icon"></i>
                                            <h4 class="part-size-title">Very Large</h4>
                                            <p class="part-size-text">1m +</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Quantity Required -->
                                <h3 class="design-req-title mt-3 mb-4">Quantity Required</h3>
                                <input type="hidden" id="selectedQuantityRequired" name="quantityRequired" value="">

                                <div class="row gy-3 gx-3 mb-5">
                                    <div class="col-6 col-md">
                                        <div class="qty-req-card" onclick="selectQtyReq(this, '1')">1</div>
                                    </div>
                                    <div class="col-6 col-md">
                                        <div class="qty-req-card" onclick="selectQtyReq(this, '2 – 5')">2 – 5</div>
                                    </div>
                                    <div class="col-6 col-md">
                                        <div class="qty-req-card" onclick="selectQtyReq(this, '5 – 20')">5 – 20</div>
                                    </div>
                                    <div class="col-6 col-md">
                                        <div class="qty-req-card" onclick="selectQtyReq(this, '20 – 100')">20 – 100</div>
                                    </div>
                                    <div class="col-6 col-md">
                                        <div class="qty-req-card" onclick="selectQtyReq(this, '100+')">100+</div>
                                    </div>
                                </div>

                                <!-- Need Assembly? -->
                                <h3 class="design-req-title mt-3 mb-2">Need Assembly?</h3>
                                <div class="custom-radio-group">
                                    <label class="custom-radio-label">
                                        <input type="radio" name="needAssembly" value="Yes" class="custom-radio-input">
                                        <div class="custom-radio-circle"><div class="custom-radio-inner"></div></div>
                                        Yes
                                    </label>
                                    <label class="custom-radio-label">
                                        <input type="radio" name="needAssembly" value="No" class="custom-radio-input">
                                        <div class="custom-radio-circle"><div class="custom-radio-inner"></div></div>
                                        No
                                    </label>
                                </div>

                                <!-- Navigation Buttons -->
                                <div class="d-flex justify-content-between align-items-center mt-4 pt-2">
                                    <button type="button" class="btn-print-back" onclick="showStep(2)">Back</button>
                                    <button type="button" id="btnStep3Continue" class="btn-print-continue-next" onclick="validateStep3AndContinue()">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 Container -->
            <div id="step4-container" style="display: <?php echo ($dev_step == 4) ? 'block' : 'none'; ?>;">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="print-form-card">
                            <div class="step-progress-text">Step 4 of 7</div>
                            <h2 class="print-form-title">Material Requirements</h2>
                            <p class="print-form-subtitle mb-2">Help us understand the performance and material needs.</p>
                            <p class="print-form-subtitle mb-4"><strong style="color: #111;">What is most important?</strong> (Select up to 3)</p>

                            <form id="printStep4Form">
                                <!-- Material Requirements 15 Cards -->
                                <h4 class="design-req-title mt-4 mb-4">What are you uploading?</h4>

                                <div class="row gy-4 gx-4 mb-5">
                                    <?php 
                                    $material_reqs = [
                                        ['id' => 'mat_1', 'title' => 'High Strength', 'icon' => 'material1.svg'],
                                        ['id' => 'mat_2', 'title' => 'Heat Resistance', 'icon' => 'material2.svg'],
                                        ['id' => 'mat_3', 'title' => 'Chemical Resistance', 'icon' => 'material3.svg'],
                                        ['id' => 'mat_4', 'title' => 'Lightweight', 'icon' => 'material4.svg'],
                                        ['id' => 'mat_5', 'title' => 'Flexible', 'icon' => 'material5.svg'],
                                        ['id' => 'mat_6', 'title' => 'Rubber Like', 'icon' => 'material6.svg'],
                                        ['id' => 'mat_7', 'title' => 'Transparent', 'icon' => 'material7.svg'],
                                        ['id' => 'mat_8', 'title' => 'High Accuracy', 'icon' => 'material8.svg'],
                                        ['id' => 'mat_9', 'title' => 'Excellent Surface Finish', 'icon' => 'material9.svg'],
                                        ['id' => 'mat_10', 'title' => 'Food Safe', 'icon' => 'material10.svg'],
                                        ['id' => 'mat_11', 'title' => 'Medical Use', 'icon' => 'material11.svg'],
                                        ['id' => 'mat_12', 'title' => 'UV Resistance', 'icon' => 'material12.svg'],
                                        ['id' => 'mat_13', 'title' => 'Outdoor Use', 'icon' => 'material13.svg'],
                                        ['id' => 'mat_14', 'title' => 'Flame Retardant', 'icon' => 'material14.svg'],
                                        ['id' => 'mat_15', 'title' => 'Metal Appearance', 'icon' => 'material15.svg'],
                                    ];
                                    foreach ($material_reqs as $mat): ?>
                                        <div class="col-md-6 col-lg-3 py-2">
                                            <div class="part-app-card" onclick="toggleMaterialReq(this, '<?php echo $mat['id']; ?>')">
                                                <input type="checkbox" id="<?php echo $mat['id']; ?>" name="materialRequirements[]" value="<?php echo $mat['title']; ?>" style="display: none;">
                                                <div class="part-app-header">
                                                    <img src="assets/images/3d-printing-service-request/<?php echo $mat['icon']; ?>" alt="<?php echo $mat['title']; ?>" class="part-app-icon">
                                                    <div class="card-custom-checkbox"><i class="fa-solid fa-check"></i></div>
                                                </div>
                                                <h5 class="part-app-card-title"><?php echo $mat['title']; ?></h5>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Operating Temperature -->
                                <h3 class="design-req-title mt-3 mb-4">Operating Temperature</h3>
                                <input type="hidden" id="selectedOperatingTemp" name="operatingTemp" value="">

                                <div class="row gy-4 gx-4 mb-5">
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="temp-req-card" onclick="selectOperatingTemp(this, 'Room Temperature')">Room Temperature</div>
                                    </div>
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="temp-req-card" onclick="selectOperatingTemp(this, 'Up to 80°C')">Up to 80°C</div>
                                    </div>
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="temp-req-card" onclick="selectOperatingTemp(this, 'Up to 120°C')">Up to 120°C</div>
                                    </div>
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="temp-req-card" onclick="selectOperatingTemp(this, 'Up to 200°C')">Up to 200°C</div>
                                    </div>
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="temp-req-card" onclick="selectOperatingTemp(this, 'Above 200°C')">Above 200°C</div>
                                    </div>
                                </div>

                                <!-- Existing Material (if replacing) -->
                                <h3 class="design-req-title mt-3 mb-3"><strong style="color: #111;">Existing Material</strong> <span style="font-weight: 500; font-size: 1.2rem; color: #666;">(if replacing)</span></h3>
                                <div class="row mb-5">
                                    <div class="col-lg-12">
                                        <select name="existingMaterial" id="existingMaterialSelect" class="existing-material-select">
                                            <option value="" disabled selected>Enter existing material name (if any)</option>
                                            <option value="None">None / Not Applicable</option>
                                            <option value="Figure 4 Rigid White">Figure 4 Rigid White</option>
                                            <option value="Figure 4 RUBBER-BLK 10">Figure 4 RUBBER-BLK 10</option>
                                            <option value="Figure 4 TOUGH-GRY 10">Figure 4 TOUGH-GRY 10</option>
                                            <option value="Figure 4 TOUGH-GRY 15">Figure 4 TOUGH-GRY 15</option>
                                            <option value="Figure 4 FLEX-BLK 20">Figure 4 FLEX-BLK 20</option>
                                            <option value="Figure 4 PRO-BLK 10">Figure 4 PRO-BLK 10</option>
                                            <option value="Figure 4 HI-TEMP 300-AMB">Figure 4 HI-TEMP 300-AMB</option>
                                            <option value="Figure 4 MED-WHT 10">Figure 4 MED-WHT 10</option>
                                            <option value="Figure 4 MED-AMB 10">Figure 4 MED-AMB 10</option>
                                            <option value="Figure 4 EGGSHELL-AMB 10">Figure 4 EGGSHELL-AMB 10</option>
                                            <option value="Figure 4 JEWELRY">Figure 4 JEWELRY</option>
                                            <option value="Accura ClearVue">Accura ClearVue</option>
                                            <option value="Accura Xtreme">Accura Xtreme</option>
                                            <option value="Accura 25">Accura 25</option>
                                            <option value="Nylon 12 (PA12)">Nylon 12 (PA12)</option>
                                            <option value="ABS">ABS</option>
                                            <option value="PLA">PLA</option>
                                            <option value="PETG">PETG</option>
                                            <option value="TPU">TPU</option>
                                            <option value="Resin (SLA/DLP)">Resin (SLA/DLP)</option>
                                            <option value="Aluminium (AlSi10Mg)">Aluminium (AlSi10Mg)</option>
                                            <option value="Titanium (Ti6Al4V)">Titanium (Ti6Al4V)</option>
                                            <option value="Stainless Steel (316L)">Stainless Steel (316L)</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Navigation Buttons -->
                                <div class="d-flex justify-content-between align-items-center mt-4 pt-2">
                                    <button type="button" class="btn-print-back" onclick="showStep(3)">Back</button>
                                    <button type="button" id="btnStep4Continue" class="btn-print-continue-next" onclick="validateStep4AndContinue()">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 5 Container -->
            <div id="step5-container" style="display: <?php echo ($dev_step == 5) ? 'block' : 'none'; ?>;">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="print-form-card">
                            <div class="step-progress-text">Step 5 of 7</div>
                            <h2 class="print-form-title">Commercial Requirements</h2>
                            <p class="print-form-subtitle mb-4">Help us plan your project better.</p>

                            <form id="printStep5Form">
                                <!-- Required Timeline -->
                                <h3 class="design-req-title mt-4 mb-4">Required Timeline</h3>
                                <input type="hidden" id="selectedRequiredTimeline" name="requiredTimeline" value="">

                                <div class="row gy-4 gx-4 mb-5">
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="commercial-req-card timeline-card" onclick="selectRequiredTimeline(this, 'Urgent (<48 Hours)')">Urgent (<48 Hours)</div>
                                    </div>
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="commercial-req-card timeline-card" onclick="selectRequiredTimeline(this, '1 Week')">1 Week</div>
                                    </div>
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="commercial-req-card timeline-card" onclick="selectRequiredTimeline(this, '2 Weeks')">2 Weeks</div>
                                    </div>
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="commercial-req-card timeline-card" onclick="selectRequiredTimeline(this, '1 Month')">1 Month</div>
                                    </div>
                                    <div class="col-md-6 col-lg py-2">
                                        <div class="commercial-req-card timeline-card" onclick="selectRequiredTimeline(this, 'Flexible')">Flexible</div>
                                    </div>
                                </div>

                                <!-- Budget Expectation (INR) -->
                                <h3 class="design-req-title mt-3 mb-4"><strong style="color: #111;">Budget Expectation</strong> <span style="font-weight: 500; font-size: 1.2rem; color: #666;">(INR)</span></h3>
                                <input type="hidden" id="selectedBudgetExpectation" name="budgetExpectation" value="">

                                <div class="row gy-4 gx-3 mb-5">
                                    <div class="col-6 col-md-4 col-lg py-2">
                                        <div class="commercial-req-card budget-card" onclick="selectBudgetExpectation(this, 'Under ₹10,000')">Under<br>₹10,000</div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg py-2">
                                        <div class="commercial-req-card budget-card" onclick="selectBudgetExpectation(this, '₹10,000-50,000')">₹10,000-<br>50,000</div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg py-2">
                                        <div class="commercial-req-card budget-card" onclick="selectBudgetExpectation(this, '₹50,000-1 Lakh')">₹50,000-<br>1 Lakh</div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg py-2">
                                        <div class="commercial-req-card budget-card" onclick="selectBudgetExpectation(this, '1-5 Lakhs')">1-5 Lakhs</div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg py-2">
                                        <div class="commercial-req-card budget-card" onclick="selectBudgetExpectation(this, 'Above 5 Lakhs')">Above<br>5 Lakhs</div>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg py-2">
                                        <div class="commercial-req-card budget-card" onclick="selectBudgetExpectation(this, 'Not Sure')">Not Sure</div>
                                    </div>
                                </div>

                                <!-- Need NDA & Need Shipping Radio Groups -->
                                <div class="row mb-5 gy-4">
                                    <div class="col-md-6">
                                        <h3 class="design-req-title mb-3">Need NDA?</h3>
                                        <div class="custom-radio-group mb-0">
                                            <label class="custom-radio-label">
                                                <input type="radio" name="needNDA" value="Yes" class="custom-radio-input">
                                                <span class="custom-radio-circle"><span class="custom-radio-inner"></span></span>
                                                Yes
                                            </label>
                                            <label class="custom-radio-label">
                                                <input type="radio" name="needNDA" value="No" class="custom-radio-input">
                                                <span class="custom-radio-circle"><span class="custom-radio-inner"></span></span>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="design-req-title mb-3">Need Shipping?</h3>
                                        <div class="custom-radio-group mb-0">
                                            <label class="custom-radio-label">
                                                <input type="radio" name="needShipping" value="Yes" class="custom-radio-input">
                                                <span class="custom-radio-circle"><span class="custom-radio-inner"></span></span>
                                                Yes
                                            </label>
                                            <label class="custom-radio-label">
                                                <input type="radio" name="needShipping" value="No" class="custom-radio-input">
                                                <span class="custom-radio-circle"><span class="custom-radio-inner"></span></span>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Additional Notes/Special Instructions -->
                                <h3 class="design-req-title mb-3">Additional Notes/Special Instructions</h3>
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <textarea name="additionalNotes" id="additionalNotesInput" class="custom-textarea" placeholder="Tell us anything else we should know about your project..."></textarea>
                                    </div>
                                </div>

                                <!-- Navigation Buttons -->
                                <div class="d-flex justify-content-between align-items-center mt-4 pt-2">
                                    <button type="button" class="btn-print-back" onclick="showStep(4)">Back</button>
                                    <button type="button" id="btnStep5Continue" class="btn-print-continue-next" onclick="validateStep5AndContinue()">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 6 Container -->
            <div id="step6-container" style="display: <?php echo ($dev_step == 6) ? 'block' : 'none'; ?>;">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="print-form-card">
                            <div class="step-progress-text">Step 6 of 7</div>
                            <h2 class="print-form-title">Our Manufacturing Capabilities</h2>
                            <p class="print-form-subtitle mb-4">Based on your requirements, our team will evaluate and recommend the best technologies.</p>

                            <form id="printStep6Form">
                                <h3 class="design-req-title mt-4 mb-4">Possible Technologies</h3>

                                <div class="row gy-4 gx-3 mb-4">
                                    <?php 
                                    $technologies = [
                                        ['id' => 'tech_1', 'title' => 'Industrial FDM', 'sub' => '(PLA, ABS, Nylon, PC)', 'img' => 'assets/images/3d-printing-service-request/technology-1.png'],
                                        ['id' => 'tech_2', 'title' => 'PEEK/PEKK', 'sub' => '(High Performance)', 'img' => 'assets/images/3d-printing-service-request/technology-2.png'],
                                        ['id' => 'tech_3', 'title' => 'SLA/DLP', 'sub' => '(High Detail Resin)', 'img' => 'assets/images/3d-printing-service-request/technology-3.png'],
                                        ['id' => 'tech_4', 'title' => 'SLS', 'sub' => '(Nylon, PA12)', 'img' => 'assets/images/3d-printing-service-request/technology-4.png'],
                                        ['id' => 'tech_5', 'title' => 'MJF', 'sub' => '(High Strength Nylon)', 'img' => 'assets/images/3d-printing-service-request/technology-5.png'],
                                        ['id' => 'tech_6', 'title' => 'Carbon Fiber<br>Reinforced', 'sub' => '', 'img' => 'assets/images/3d-printing-service-request/technology-6.png'],
                                        ['id' => 'tech_7', 'title' => 'CNC Machining', 'sub' => '(Plastic & Metal)', 'img' => 'assets/images/3d-printing-service-request/technology-7.png'],
                                        ['id' => 'tech_8', 'title' => 'Vacuum Casting', 'sub' => '(Silicone Molding)', 'img' => 'assets/images/3d-printing-service-request/technology-8.png'],
                                        ['id' => 'tech_9', 'title' => 'PolyJet', 'sub' => '(Multi-material)', 'img' => 'assets/images/3d-printing-service-request/technology-9.png'],
                                        ['id' => 'tech_10', 'title' => 'Metal 3D Printing', 'sub' => '(Direct Metal)', 'img' => 'assets/images/3d-printing-service-request/technology-10.png'],
                                        ['id' => 'tech_11', 'title' => 'Other Processes', 'sub' => '(On Request)', 'img' => 'assets/images/3d-printing-service-request/technology11.png'],
                                    ];
                                    foreach ($technologies as $tech): ?>
                                        <div class="col-6 col-md-4 col-lg-3 py-2">
                                            <div class="tech-capability-card" onclick="toggleTechCapability(this, '<?php echo $tech['id']; ?>')">
                                                <input type="checkbox" id="<?php echo $tech['id']; ?>" name="selectedTechnologies[]" value="<?php echo str_replace('<br>', ' ', $tech['title']); ?>" style="display: none;">
                                                <div class="tech-card-img-wrapper">
                                                    <img src="<?php echo $tech['img']; ?>" alt="<?php echo str_replace('<br>', ' ', $tech['title']); ?>" class="tech-card-img">
                                                </div>
                                                <h4 class="tech-card-title"><?php echo $tech['title']; ?></h4>
                                                <?php if ($tech['sub']): ?>
                                                    <p class="tech-card-subtext"><?php echo $tech['sub']; ?></p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <!-- Notice Box -->
                                <div class="notice-info-box">
                                    Our engineering team will analyze your files and recommend the most suitable technology, material and finishing for your application.
                                </div>

                                <!-- Navigation Buttons -->
                                <div class="d-flex justify-content-between align-items-center mt-4 pt-2">
                                    <button type="button" class="btn-print-back" onclick="showStep(5)">Back</button>
                                    <button type="button" id="btnStep6Continue" class="btn-print-continue-next" onclick="validateStep6AndContinue()">Continue</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 7 Container -->
            <div id="step7-container" style="display: <?php echo ($dev_step == 7) ? 'block' : 'none'; ?>;">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="print-form-card">
                            <div class="step-progress-text">Step 7 of 7</div>
                            <h2 class="print-form-title">Review & Submit</h2>
                            <p class="print-form-subtitle mb-4">Please review your information before submission.</p>

                            <!-- Summary Label & Container -->
                            <h3 class="design-req-title mt-4 mb-3">Summary</h3>
                            <div class="summary-container">
                                <div class="summary-row">
                                    <div class="summary-label">Contact Information</div>
                                    <a class="summary-edit-link" onclick="showStep(1)">Edit</a>
                                </div>
                                <div class="summary-row">
                                    <div class="summary-label">Uploaded Files</div>
                                    <a class="summary-edit-link" onclick="showStep(2)">Edit</a>
                                </div>
                                <div class="summary-row">
                                    <div class="summary-label">Part Application</div>
                                    <a class="summary-edit-link" onclick="showStep(3)">Edit</a>
                                </div>
                                <div class="summary-row">
                                    <div class="summary-label">Part Size</div>
                                    <a class="summary-edit-link" onclick="showStep(3)">Edit</a>
                                </div>
                                <div class="summary-row">
                                    <div class="summary-label">Quantity</div>
                                    <a class="summary-edit-link" onclick="showStep(3)">Edit</a>
                                </div>
                                <div class="summary-row">
                                    <div class="summary-label">Material Priorities</div>
                                    <a class="summary-edit-link" onclick="showStep(4)">Edit</a>
                                </div>
                                <div class="summary-row">
                                    <div class="summary-label">Timeline</div>
                                    <a class="summary-edit-link" onclick="showStep(5)">Edit</a>
                                </div>
                                <div class="summary-row">
                                    <div class="summary-label">Budget</div>
                                    <a class="summary-edit-link" onclick="showStep(5)">Edit</a>
                                </div>
                                <div class="summary-row">
                                    <div class="summary-label">Shipping</div>
                                    <a class="summary-edit-link" onclick="showStep(5)">Edit</a>
                                </div>
                            </div>

                            <!-- What Happens Next Section -->
                            <h3 class="design-req-title mt-4 mb-3">What Happens Next?</h3>
                            <div class="happens-next-container">
                                <div class="row gy-4 justify-content-center">
                                    <?php 
                                    $happens_steps = [
                                        ['title' => 'File Review &<br>DFM Analysis', 'icon' => 'happens1.svg'],
                                        ['title' => 'Technology<br>Selection', 'icon' => 'happens2.svg'],
                                        ['title' => 'Material<br>Recommendation', 'icon' => 'happens3.svg'],
                                        ['title' => 'Commercial<br>Proposal', 'icon' => 'happens4.svg'],
                                        ['title' => 'Delivery<br>Schedule', 'icon' => 'happens5.svg'],
                                    ];
                                    foreach ($happens_steps as $hstep): ?>
                                        <div class="col-6 col-md">
                                            <div class="happens-next-item">
                                                <div class="happens-next-circle">
                                                    <img src="assets/images/3d-printing-service-request/<?php echo $hstep['icon']; ?>" alt="<?php echo strip_tags($hstep['title']); ?>" class="happens-next-icon">
                                                </div>
                                                <p class="happens-next-text"><?php echo $hstep['title']; ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Confirmation Checkbox -->
                            <div class="confirmation-box-wrapper">
                                <input type="checkbox" id="chkConfirmSubmission" class="confirmation-checkbox" onchange="checkStep7Form()">
                                <label for="chkConfirmSubmission" class="confirmation-label">I confirm that all the information provided above is correct and ready for engineering evaluation.</label>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="d-flex justify-content-between align-items-center mt-4 pt-2">
                                <button type="button" class="btn-print-back" onclick="showStep(6)">Back</button>
                                <button type="button" id="btnStep7Continue" class="btn-print-continue-next" onclick="submitPrintServiceRequest()" disabled>Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 8 Container (Thank You Page) -->
            <div id="step8-container" style="display: <?php echo ($dev_step == 8) ? 'block' : 'none'; ?>;">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="print-form-card py-5">
                            <!-- Concentric Circles with Checkmark -->
                            <div class="concentric-outer">
                                <div class="concentric-middle">
                                    <div class="concentric-inner">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Title & Subtitle -->
                            <h2 class="thank-you-title">Thank You!</h2>
                            <h3 class="thank-you-subtitle">Your Request Has Been<br>Submitted Successfully.</h3>
                            <p class="thank-you-desc">Our team will get in touch with you shortly.<br>You will receive an email confirmation with your request details.</p>

                            <!-- What Happens Next Checklist -->
                            <h4 class="thank-you-section-title">What Happens Next?</h4>
                            <div class="thank-you-checklist">
                                <div class="checklist-wrapper">
                                    <div class="checklist-item">
                                        <div class="checklist-icon"><i class="fa-solid fa-check"></i></div>
                                        <span>We will review your files and requirements</span>
                                    </div>
                                    <div class="checklist-item">
                                        <div class="checklist-icon"><i class="fa-solid fa-check"></i></div>
                                        <span>Our engineers will analyze and recommend the best solution</span>
                                    </div>
                                    <div class="checklist-item">
                                        <div class="checklist-icon"><i class="fa-solid fa-check"></i></div>
                                        <span>We will share the quotation and delivery timeline</span>
                                    </div>
                                    <div class="checklist-item">
                                        <div class="checklist-icon"><i class="fa-solid fa-check"></i></div>
                                        <span>You can discuss and finalize the order</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Box -->
                            <div class="thank-you-contact-box">
                                <h4 class="thank-you-section-title mb-4">What Happens Next?</h4>
                                <div class="row gy-4">
                                    <div class="col-md-4">
                                        <div class="contact-part">
                                            <div class="contact-icon-circle">
                                                <img src="assets/images/3d-printing-service-request/mail.svg" alt="Email Us" class="contact-icon">
                                            </div>
                                            <div class="contact-info-content">
                                                <div class="contact-info-title">Email Us</div>
                                                <a href="mailto:sm@precise3dm.com" class="contact-link">sm@precise3dm.com</a>
                                                <a href="mailto:sales@precise3dm.com" class="contact-link">sales@precise3dm.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="contact-part">
                                            <div class="contact-icon-circle">
                                                <img src="assets/images/3d-printing-service-request/phone.svg" alt="Call Us" class="contact-icon">
                                            </div>
                                            <div class="contact-info-content">
                                                <div class="contact-info-title">Call us</div>
                                                <a href="tel:+919840478347" class="contact-link">+91 98404 78347</a>
                                                <a href="tel:+917395972777" class="contact-link">+91 73959 72777</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="contact-part">
                                            <div class="contact-icon-circle">
                                                <img src="assets/images/3d-printing-service-request/globe.svg" alt="Website" class="contact-icon">
                                            </div>
                                            <div class="contact-info-content">
                                                <div class="contact-info-title">Website</div>
                                                <a href="https://precise3dm.com" target="_blank" class="contact-link">precise3dm.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Back To Home Button -->
                            <div class="text-center mt-2">
                                <button type="button" class="btn-back-home" onclick="resetAndGoToStart()">Back To Home</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        // Global object to store country -> cities mapping
        let countryCitiesMap = {};

        // Global array to store uploaded files for Step 2
        let uploadedPrintFiles = [];

        // Update Country Code & Flag in Mobile Input Group
        function updateCountryCode(select) {
            const selectedOption = select.options[select.selectedIndex];
            const flagCode = selectedOption.getAttribute('data-flag');
            const dialCode = selectedOption.value;

            document.getElementById('selectedFlag').src = `https://flagcdn.com/w20/${flagCode}.png`;
            document.getElementById('selectedDialCode').innerText = dialCode;
        }

        // Check form validity for Step 1
        function checkStep1Form() {
            const fullName = $('#fullName').val()?.trim();
            const companyName = $('#companyName').val()?.trim();
            const designation = $('#designation').val()?.trim();
            const emailAddress = $('#emailAddress').val()?.trim();
            const mobileNumber = $('#mobileNumber').val()?.trim();
            const country = $('#countrySelect').val();
            const city = $('#citySelect').val();
            const industry = $('#industrySelect').val();

            const emailValid = emailAddress && /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailAddress);
            const mobileValid = mobileNumber && mobileNumber.length >= 7;

            const isValid = fullName && companyName && designation && emailValid && mobileValid && country && city && industry;

            $('#btnStep1Continue').prop('disabled', !isValid);
        }

        // Check form validity for Step 2
        function checkStep2Form() {
            $('#btnStep2Continue').prop('disabled', false);
        }

        // Step 2 File Upload Handling
        function handlePrintFileUpload(event) {
            const files = event.target.files;
            const maxFileSize = 50 * 1024 * 1024; // 50 MB

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (file.size > maxFileSize) {
                    alert(`File size exceeds 50 MB limit: ${file.name}`);
                    continue;
                }
                // Check if file already exists
                if (!uploadedPrintFiles.some(f => f.name === file.name)) {
                    uploadedPrintFiles.push(file);
                }
            }
            renderPrintFilePreviews();
            // Reset file input so same file can be re-uploaded if removed
            event.target.value = '';
        }

        function renderPrintFilePreviews() {
            const container = $('#printFilePreviewContainer');
            const title = $('#uploadedFilesTitle');
            container.empty();

            if (uploadedPrintFiles.length > 0) {
                title.show();
            } else {
                title.hide();
            }

            uploadedPrintFiles.forEach(file => {
                const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
                let mediaElement = '';
                if (file.type.startsWith('image/')) {
                    mediaElement = `<img src="${URL.createObjectURL(file)}" class="rounded me-3 border" style="width: 50px; height: 50px; object-fit: cover;" alt="${file.name}">`;
                } else {
                    mediaElement = `<div class="d-flex align-items-center justify-content-center bg-light border rounded me-3" style="width: 50px; height: 50px;"><i class="fa-solid fa-file-lines text-secondary" style="font-size: 1.6rem;"></i></div>`;
                }

                container.append(`
                    <div class="col-md-6 col-lg-4 file-preview-item py-2" id="file_prev_${file.name.replace(/[^a-zA-Z0-9]/g, '_')}">
                        <div class="file-preview-card d-flex align-items-center justify-content-between p-3 border rounded bg-white shadow-sm">
                            <div class="d-flex align-items-center overflow-hidden">
                                ${mediaElement}
                                <div class="text-truncate">
                                    <div class="file-name fw-semibold text-truncate" style="font-size: 0.95rem; color: #111;">${file.name}</div>
                                    <div class="file-size text-muted small" style="font-size: 0.85rem;">${fileSizeMB} MB</div>
                                </div>
                            </div>
                            <button type="button" class="btn-close-custom ms-2" onclick="removePrintFile('${file.name}')"><i class="fa-solid fa-xmark"></i></button>
                        </div>
                    </div>
                `);
            });
            checkStep2Form();
        }

        function removePrintFile(fileName) {
            uploadedPrintFiles = uploadedPrintFiles.filter(f => f.name !== fileName);
            renderPrintFilePreviews();
        }

        // Select Design Requirement Card
        function selectDesignReq(element, reqValue) {
            $('.design-req-card').removeClass('active');
            $(element).addClass('active');
            $('#selectedDesignRequirement').val(reqValue);
            checkStep2Form();
        }

        // Validate Step 2 & Proceed to Step 3
        function validateStep2AndContinue() {
            showStep(3);
        }

        // Check form validity for Step 3
        function checkStep3Form() {
            $('#btnStep3Continue').prop('disabled', false);
        }

        // Step 3 Click & Validation Handlers
        function togglePartApp(cardEl, inputId) {
            const input = document.getElementById(inputId);
            input.checked = !input.checked;
            if (input.checked) {
                $(cardEl).addClass('active');
            } else {
                $(cardEl).removeClass('active');
            }
            checkStep3Form();
        }

        function selectPartSize(element, sizeValue) {
            $('.part-size-card').removeClass('active');
            $(element).addClass('active');
            $('#selectedPartSize').val(sizeValue);
            checkStep3Form();
        }

        function selectQtyReq(element, qtyValue) {
            $('.qty-req-card').removeClass('active');
            $(element).addClass('active');
            $('#selectedQuantityRequired').val(qtyValue);
            checkStep3Form();
        }

        function validateStep3AndContinue() {
            showStep(4);
        }

        // Check form validity for Step 4
        function checkStep4Form() {
            $('#btnStep4Continue').prop('disabled', false);
        }

        // Step 4 Click & Validation Handlers
        function toggleMaterialReq(cardEl, inputId) {
            const input = document.getElementById(inputId);
            if (!input.checked) {
                // Check if already 3 selected
                if ($('input[name="materialRequirements[]"]:checked').length >= 3) {
                    alert('You can select up to 3 material requirements.');
                    return;
                }
                input.checked = true;
                $(cardEl).addClass('active');
            } else {
                input.checked = false;
                $(cardEl).removeClass('active');
            }
            checkStep4Form();
        }

        function selectOperatingTemp(element, tempValue) {
            $('.temp-req-card').removeClass('active');
            $(element).addClass('active');
            $('#selectedOperatingTemp').val(tempValue);
            checkStep4Form();
        }

        function validateStep4AndContinue() {
            showStep(5);
        }

        // Check form validity for Step 5
        function checkStep5Form() {
            $('#btnStep5Continue').prop('disabled', false);
        }

        // Step 5 Click & Validation Handlers
        function selectRequiredTimeline(element, timelineValue) {
            $('.timeline-card').removeClass('active');
            $(element).addClass('active');
            $('#selectedRequiredTimeline').val(timelineValue);
            checkStep5Form();
        }

        function selectBudgetExpectation(element, budgetValue) {
            $('.budget-card').removeClass('active');
            $(element).addClass('active');
            $('#selectedBudgetExpectation').val(budgetValue);
            checkStep5Form();
        }

        function validateStep5AndContinue() {
            showStep(6);
        }

        // Check form validity for Step 6
        function checkStep6Form() {
            $('#btnStep6Continue').prop('disabled', false);
        }

        // Step 6 Click & Validation Handlers
        function toggleTechCapability(cardEl, inputId) {
            const input = document.getElementById(inputId);
            input.checked = !input.checked;
            if (input.checked) {
                $(cardEl).addClass('active');
            } else {
                $(cardEl).removeClass('active');
            }
            checkStep6Form();
        }

        function validateStep6AndContinue() {
            showStep(7);
        }

        // Check form validity for Step 7
        function checkStep7Form() {
            const isConfirmed = $('#chkConfirmSubmission').is(':checked');
            $('#btnStep7Continue').prop('disabled', !isConfirmed);
        }

        // Show specific step in the 8-step wizard
        function showStep(stepNumber) {
            for (let i = 1; i <= 8; i++) {
                let step = document.getElementById('step' + i + '-container');
                if (step) step.style.display = 'none';
            }
            let targetStep = document.getElementById('step' + stepNumber + '-container');
            if (targetStep) targetStep.style.display = 'block';
            window.scrollTo(0, 0);

            if (stepNumber === 8 && typeof triggerConfetti === 'function') {
                setTimeout(triggerConfetti, 100);
            }
        }

        // Submit Form Data & Attachments via SMTP
        function submitPrintServiceRequest() {
            const btn = $('#btnStep7Continue');
            btn.prop('disabled', true).text('Submitting...');

            const formData = new FormData();

            // Step 1
            formData.append('fullName', $('#fullName').val() || '');
            formData.append('companyName', $('#companyName').val() || '');
            formData.append('designation', $('#designation').val() || '');
            formData.append('emailAddress', $('#emailAddress').val() || '');
            formData.append('mobileNumber', ($('#selectedDialCode').text() || '') + ' ' + ($('#mobileNumber').val() || ''));
            formData.append('country', $('#countrySelect').val() || '');
            formData.append('city', $('#citySelect').val() || '');
            formData.append('industry', $('#industrySelect').val() || '');

            // Step 2
            formData.append('designRequirement', $('#selectedDesignRequirement').val() || '');
            uploadedPrintFiles.forEach((fileObj) => {
                formData.append('files[]', fileObj);
            });

            // Step 3
            let partApps = [];
            $('input[name="partApplication[]"]:checked').each(function() {
                partApps.push($(this).val());
            });
            formData.append('partApplications', partApps.join(', '));
            formData.append('partSize', $('#selectedPartSize').val() || '');
            formData.append('qtyReq', $('#selectedQuantityRequired').val() || '');
            formData.append('needAssembly', $('input[name="needAssembly"]:checked').val() || '');

            // Step 4
            let matReqs = [];
            $('input[name="materialRequirements[]"]:checked').each(function() {
                matReqs.push($(this).val());
            });
            formData.append('materialRequirements', matReqs.join(', '));
            formData.append('operatingTemp', $('#selectedOperatingTemp').val() || '');
            formData.append('existingMaterial', $('#existingMaterialSelect').val() || '');

            // Step 5
            formData.append('requiredTimeline', $('#selectedRequiredTimeline').val() || '');
            formData.append('budgetExpectation', $('#selectedBudgetExpectation').val() || '');
            formData.append('needNDA', $('input[name="needNDA"]:checked').val() || '');
            formData.append('needShipping', $('input[name="needShipping"]:checked').val() || '');
            formData.append('customNotes', $('#additionalNotesInput').val() || '');

            // Step 6
            let techCaps = [];
            $('input[name="selectedTechnologies[]"]:checked').each(function() {
                techCaps.push($(this).val());
            });
            formData.append('selectedTechnologies', techCaps.join(', '));

            // Send via fetch
            fetch('process-3d-printing-service-request.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === 'success') {
                    showStep(8);
                } else {
                    alert('Error submitting request: ' + (data.message || 'Unknown error'));
                    btn.prop('disabled', false).text('Continue');
                }
            })
            .catch(err => {
                console.error(err);
                alert('Error submitting request. Please check your network connection.');
                btn.prop('disabled', false).text('Continue');
            });
        }

        // Reset Form and Go to Step 1
        function resetAndGoToStart() {
            window.location.href = window.location.pathname + '?reset=1';
        }

        $(document).ready(function() {
            if (window.location.search.includes('reset=1')) {
                document.querySelectorAll('form').forEach(form => form.reset());
                document.querySelectorAll('input, textarea, select').forEach(el => {
                    if (el.type === 'checkbox' || el.type === 'radio') {
                        el.checked = false;
                    } else if (el.type !== 'hidden' && el.type !== 'button' && el.type !== 'submit') {
                        el.value = '';
                    }
                });
                window.history.replaceState({}, document.title, window.location.pathname);
            }

            // Perform an immediate initial check of Step 1 form validity to handle cached values/back navigation
            checkStep1Form();

            // Attach validation events for radio groups and Step 1 form inputs
            $('#printStep1Form').on('input change', 'input, select', checkStep1Form);
            $('input[name="needAssembly"]').on('change', checkStep3Form);
            $('input[name="needNDA"], input[name="needShipping"]').on('change', checkStep5Form);

            // 1. Fetch all international country dial codes & flags via RestCountries API
            fetch('https://restcountries.com/v3.1/all?fields=name,cca2,idd')
                .then(res => res.json())
                .then(data => {
                    // Sort alphabetically by country name
                    data.sort((a, b) => a.name.common.localeCompare(b.name.common));
                    
                    const mobileSelect = $('#mobileCountrySelect');
                    mobileSelect.empty();

                    data.forEach(country => {
                        if (country.idd && country.idd.root) {
                            const suffix = (country.idd.suffixes && country.idd.suffixes.length === 1) ? country.idd.suffixes[0] : '';
                            const dialCode = country.idd.root + suffix;
                            const flagCode = country.cca2.toLowerCase();
                            const countryName = country.name.common;

                            const isSelected = (dialCode === '+91' && flagCode === 'in') ? 'selected' : '';
                            mobileSelect.append(`<option value="${dialCode}" data-flag="${flagCode}" ${isSelected}>${dialCode} (${countryName})</option>`);
                        }
                    });
                })
                .catch(err => console.error('Error fetching dial codes:', err));

            // 2. Fetch all countries and their cities via CountriesNow API
            fetch('https://countriesnow.space/api/v0.1/countries')
                .then(res => res.json())
                .then(response => {
                    if (!response.error) {
                        const countrySelect = $('#countrySelect');
                        countrySelect.empty();
                        countrySelect.append('<option value="" disabled selected>Select country</option>');

                        response.data.forEach(item => {
                            countryCitiesMap[item.country] = item.cities;
                            countrySelect.append(`<option value="${item.country}">${item.country}</option>`);
                        });
                    }
                })
                .catch(err => console.error('Error fetching countries/cities:', err));

            // 3. Handle Country selection change to populate cities dynamically
            $('#countrySelect').on('change', function() {
                const selectedCountry = $(this).val();
                const citySelect = $('#citySelect');
                citySelect.empty();
                
                if (countryCitiesMap[selectedCountry] && countryCitiesMap[selectedCountry].length > 0) {
                    citySelect.append('<option value="" disabled selected>Select city</option>');
                    countryCitiesMap[selectedCountry].forEach(city => {
                        citySelect.append(`<option value="${city}">${city}</option>`);
                    });
                } else {
                    citySelect.append('<option value="N/A" selected>No cities available</option>');
                }
                
                document.getElementById('citySelect').dispatchEvent(new Event('change'));
                checkStep1Form();
            });

            // Handle Step 1 Form Submission
            $('#printStep1Form').on('submit', function(e) {
                e.preventDefault();
                showStep(2);
            });
        });
    </script>

    <!-- Canvas Confetti CDN -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.3/dist/confetti.browser.min.js"></script>
    <script>
        function triggerConfetti() {
            if (typeof confetti === 'function') {
                confetti({
                    particleCount: 150,
                    spread: 90,
                    origin: { y: 0, x: 0.5 },
                    gravity: 1.2,
                    scalar: 1.2,
                    ticks: 300
                });
            }
        }

        // Trigger confetti animation immediately on page load for Thank You page
        window.addEventListener('DOMContentLoaded', function() {
            <?php if ($dev_step == 8): ?>
            setTimeout(triggerConfetti, 100);
            <?php endif; ?>
        });
    </script>
</body>
</html>
