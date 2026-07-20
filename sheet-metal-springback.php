<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sheet Metal Springback | Precise3DM</title>
    <meta name="description" content="Understand, Quantify & Compensate Springback Before It Impacts Your Production">
    <meta name="keywords" content="Sheet Metal Springback, 3D Inspection, Geomagic Control X">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="revisit-after" content="7 days" />

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
    <link rel="stylesheet" href="assets/css/sheet-metal-springback.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include('includes/header.php'); ?>

    <!-- Main Content Starts Here -->

    <!-- Hero Section Starts -->
    <section class="smsb-hero-section position-relative py-3">
        <!-- Call Info (Top Right) -->
        <div class="smsb-hero-contact d-flex">
            <div class="smsb-hero-contact-item">
                <img src="assets/images/sheet-metal-springback/phone-icon.png" alt="Phone" class="img-fluid me-3">
                <div class="smsb-hero-contact-text">
                    <h4 class="mb-1">Call us now</h4>
                    <p class="mb-0">
                        <a href="tel:+919840478347" class="text-white text-decoration-none">+91 98404 78347</a> | 
                        <a href="tel:+916374406179" class="text-white text-decoration-none">+91 63744 06179</a>
                    </p>
                </div>
            </div>
            <div class="smsb-hero-contact-item">
                <img src="assets/images/sheet-metal-springback/mail-logo.png" alt="Email" class="img-fluid me-3">
                <div class="smsb-hero-contact-text">
                    <h4 class="mb-1">Email us</h4>
                    <p class="mb-0">
                        <a href="mailto:sm@precise3dm.com" class="text-white text-decoration-none">sm@precise3dm.com</a> | 
                        <a href="mailto:sales@precise3dm.com" class="text-white text-decoration-none">sales@precise3dm.com</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-7 col-md-12">
                    <div class="smsb-hero-content mb-5">
                        <h1 class="smsb-hero-title mb-4">
                            <span class="text-white">SHEET METAL SPRINGBACK STUDY USING</span><br>
                            <span class="text-orange">3D INSPECTION SOFTWARE CONTROL X</span>
                        </h1>
                        <h3 class="smsb-hero-subtitle mb-4">Understand, Quantify & Compensate Springback Before It Impacts Your Production</h3>
                        <p class="smsb-hero-text mb-3">
                            Accurately measure springback in formed sheet metal parts by comparing the manufactured component against the nominal CAD model using industrial 3D scanning and Geomagic Control X.
                        </p>
                        <p class="smsb-hero-text mb-5">
                            Identify profile deviations, boundary movement, flange distortion, bending angle variation, and tooling compensation requirements before releasing parts into production.
                        </p>

                        <div class="smsb-hero-btns d-flex flex-wrap gap-4">
                            <a href="contact-us.php" class="smsb-btn-primary">Request Technical Consultation</a>
                            <a href="contact-us.php" class="smsb-btn-outline">
                                <img src="assets/images/sheet-metal-springback/upload-icon.png" alt="Upload" class="smsb-btn-icon me-2"> Upload CAD Model
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->

    <!-- What is SMSB Section Starts -->
    <section class="smsb-what-is-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row">
                <div class="col-12">
                    <h2 class="smsb-what-is-title">What is Sheet Metal Springback Study?</h2>
                    <div class="smsb-what-is-content">
                        <p class="mb-3">Springback is the natural tendency of sheet metal to return to its original shape after forming.</p>
                        <p class="mb-0">Using 3D scanning and Geomagic Control X, we compare the actual formed part boundary with the nominal CAD boundary to measure springback deviation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What is SMSB Section Ends -->

    <!-- Workflow Section Starts -->
    <section class="smsb-workflow-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row g-4 justify-content-center">
                
                <!-- Step 1 -->
                <div class="col-lg-2 col-md-4 col-sm-6 py-3">
                    <div class="smsb-workflow-item">
                        <div class="smsb-workflow-icon-box">
                            <img src="assets/images/sheet-metal-springback/workflow-1.png" alt="Nominal CAD" class="img-fluid">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="smsb-workflow-arrow d-none d-lg-block"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <h4 class="smsb-workflow-title">1. Nominal CAD</h4>
                        <p class="smsb-workflow-text">Import nominal flat CAD model</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-2 col-md-4 col-sm-6 py-3">
                    <div class="smsb-workflow-item">
                        <div class="smsb-workflow-icon-box">
                            <img src="assets/images/sheet-metal-springback/workflow-2.png" alt="Scan Formed Part" class="img-fluid">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="smsb-workflow-arrow d-none d-lg-block"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <h4 class="smsb-workflow-title">2. Scan Formed Part</h4>
                        <p class="smsb-workflow-text">3D scan the formed sheet metal part</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-2 col-md-4 col-sm-6 py-3">
                    <div class="smsb-workflow-item">
                        <div class="smsb-workflow-icon-box">
                            <img src="assets/images/sheet-metal-springback/workflow-3.png" alt="Alignment" class="img-fluid">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="smsb-workflow-arrow d-none d-lg-block"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <h4 class="smsb-workflow-title">3. Alignment</h4>
                        <p class="smsb-workflow-text">Align scan data to CAD using datum or RPS</p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-2 col-md-4 col-sm-6 py-3">
                    <div class="smsb-workflow-item">
                        <div class="smsb-workflow-icon-box">
                            <img src="assets/images/sheet-metal-springback/workflow-4.png" alt="Boundary Extraction" class="img-fluid">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="smsb-workflow-arrow d-none d-lg-block"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <h4 class="smsb-workflow-title">4. Boundary Extraction</h4>
                        <p class="smsb-workflow-text">Extract outer boundary of CAD and scan</p>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="col-lg-2 col-md-4 col-sm-6 py-3">
                    <div class="smsb-workflow-item">
                        <div class="smsb-workflow-icon-box">
                            <img src="assets/images/sheet-metal-springback/workflow-5.png" alt="Springback Analysis" class="img-fluid">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="smsb-workflow-arrow d-none d-lg-block"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
                        <h4 class="smsb-workflow-title">5. Springback Analysis</h4>
                        <p class="smsb-workflow-text">Compare boundaries and calculate deviation</p>
                    </div>
                </div>

                <!-- Step 6 -->
                <div class="col-lg-2 col-md-4 col-sm-6 py-3">
                    <div class="smsb-workflow-item">
                        <div class="smsb-workflow-icon-box">
                            <img src="assets/images/sheet-metal-springback/workflow-6.png" alt="Report" class="img-fluid">
                        </div>
                        <h4 class="smsb-workflow-title">6. Report</h4>
                        <p class="smsb-workflow-text">Generate springback analysis report</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Workflow Section Ends -->

    <!-- Why Analyze Section Starts -->
    <section class="smsb-why-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row">
                <div class="col-12">
                    <h2 class="smsb-why-title">Why Analyze Springback?</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4 justify-content-center">
                
                <!-- Card 1 -->
                <div class="col py-3">
                    <div class="smsb-why-card">
                        <img src="assets/images/sheet-metal-springback/why-1.svg" alt="Reduce Trial & Error" class="smsb-why-card-icon img-fluid">
                        <h4 class="smsb-why-card-title">Reduce Trial & Error</h4>
                        <p class="smsb-why-card-text">Minimize tryout iterations and tooling modifications.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col py-3">
                    <div class="smsb-why-card">
                        <img src="assets/images/sheet-metal-springback/why-2.svg" alt="Improve Part Accuracy" class="smsb-why-card-icon img-fluid">
                        <h4 class="smsb-why-card-title">Improve Part Accuracy</h4>
                        <p class="smsb-why-card-text">Ensure parts meet design intent after forming.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col py-3">
                    <div class="smsb-why-card">
                        <img src="assets/images/sheet-metal-springback/why-3.svg" alt="Optimize Tooling" class="smsb-why-card-icon img-fluid">
                        <h4 class="smsb-why-card-title">Optimize Tooling</h4>
                        <p class="smsb-why-card-text">Compensate springback in die design.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col py-3">
                    <div class="smsb-why-card">
                        <img src="assets/images/sheet-metal-springback/why-4.svg" alt="Save Time & Cost" class="smsb-why-card-icon img-fluid">
                        <h4 class="smsb-why-card-title">Save Time & Cost</h4>
                        <p class="smsb-why-card-text">Faster development and lower production cost.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col py-3">
                    <div class="smsb-why-card">
                        <img src="assets/images/sheet-metal-springback/why-5.svg" alt="Better Quality" class="smsb-why-card-icon img-fluid">
                        <h4 class="smsb-why-card-title">Better Quality</h4>
                        <p class="smsb-why-card-text">Reduce assembly issues and customer rejects.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Why Analyze Section Ends -->

    <!-- How It Works Section Starts -->
    <section class="smsb-how-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row">
                <div class="col-12">
                    <h2 class="smsb-how-title">How Springback Analysis Works in Geomagic Control X</h2>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="smsb-how-card">
                        <div class="smsb-how-card-number">1</div>
                        <div class="smsb-how-card-img-box">
                            <img src="assets/images/sheet-metal-springback/how-1.png" alt="Import Data" class="img-fluid">
                        </div>
                        <h4 class="smsb-how-card-title">Import Data</h4>
                        <p class="smsb-how-card-text">Import the reference CAD model (nominal flat) and scanned point cloud/mesh (formed part).</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="smsb-how-card">
                        <div class="smsb-how-card-number">2</div>
                        <div class="smsb-how-card-img-box">
                            <img src="assets/images/sheet-metal-springback/how-2.png" alt="Initial Alignment" class="img-fluid">
                        </div>
                        <h4 class="smsb-how-card-title">Initial Alignment</h4>
                        <p class="smsb-how-card-text">Perform a best-fit (Initial) alignment to get CAD and scan data generally overlapping.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="smsb-how-card">
                        <div class="smsb-how-card-number">3</div>
                        <div class="smsb-how-card-img-box">
                            <img src="assets/images/sheet-metal-springback/how-3.png" alt="Refined Alignment" class="img-fluid">
                        </div>
                        <h4 class="smsb-how-card-title">Refined Alignment</h4>
                        <p class="smsb-how-card-text">Apply a Reference Point System (RPS) or datum-based alignment. This locks tooling holes or flat faces.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="smsb-how-card">
                        <div class="smsb-how-card-number">4</div>
                        <div class="smsb-how-card-img-box">
                            <img src="assets/images/sheet-metal-springback/how-4.png" alt="3D Compare" class="img-fluid">
                        </div>
                        <h4 class="smsb-how-card-title">3D Compare</h4>
                        <p class="smsb-how-card-text">Generate a 3D Compare deviation color map (CAD vs. Scan) to visualize where the part is warped.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="smsb-how-card">
                        <div class="smsb-how-card-number">5</div>
                        <div class="smsb-how-card-img-box">
                            <img src="assets/images/sheet-metal-springback/how-5.png" alt="Boundary Deviation Analysis" class="img-fluid">
                        </div>
                        <h4 class="smsb-how-card-title">Boundary Deviation Analysis</h4>
                        <p class="smsb-how-card-text">Use the Boundary Deviation tool to isolate edges and identify bending angle discrepancies.</p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="smsb-how-card">
                        <div class="smsb-how-card-number">6</div>
                        <div class="smsb-how-card-img-box">
                            <img src="assets/images/sheet-metal-springback/how-6.png" alt="Reporting" class="img-fluid">
                        </div>
                        <h4 class="smsb-how-card-title">Reporting</h4>
                        <p class="smsb-how-card-text">Measure profiles, radii and angles. Document exact magnitude of deviation and generate report.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- How It Works Section Ends -->

    <!-- Typical Springback Section Starts -->
    <section class="smsb-typical-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row">
                <div class="col-12">
                    <h2 class="smsb-typical-title">Typical Springback Deviation on Boundary</h2>
                </div>
            </div>
            <div class="row g-4">
                
                <!-- Left Image -->
                <div class="col-lg-3 py-2">
                    <div class="smsb-typical-left">
                        <img src="assets/images/sheet-metal-springback/typical-bg.png" alt="Typical Springback Deviation">
                    </div>
                </div>

                <!-- Middle List -->
                <div class="col-lg-6 py-2">
                    <div class="smsb-typical-middle">
                        <div class="smsb-typical-middle-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <p class="smsb-typical-middle-text">Positive Deviation (Red) – Part opens up more than CAD</p>
                        </div>
                        <div class="smsb-typical-middle-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <p class="smsb-typical-middle-text">Negative Deviation (Blue) – Part shrinks inwards</p>
                        </div>
                        <div class="smsb-typical-middle-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <p class="smsb-typical-middle-text">Measure deviation along entire boundary</p>
                        </div>
                        <div class="smsb-typical-middle-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check"><circle cx="12" cy="12" r="10"/><path d="m9 12 2 2 4-4"/></svg>
                            <p class="smsb-typical-middle-text">Identify critical areas requiring tooling compensation</p>
                        </div>
                    </div>
                </div>

                <!-- Right List -->
                <div class="col-lg-3 py-2">
                    <div class="smsb-typical-right">
                        <h4 class="smsb-typical-right-title">Deliverables</h4>
                        <ul class="smsb-typical-right-list">
                            <li><span>Boundary deviation map</span></li>
                            <li><span>Deviation graph (X, Y, Z)</span></li>
                            <li><span>Max / Min / Avg deviation</span></li>
                            <li><span>Critical point callouts</span></li>
                            <li><span>Section view analysis</span></li>
                            <li><span>Springback recommendation</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Typical Springback Section Ends -->

    <!-- Contact Section Starts -->
    <section class="smsb-contact-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row">
                <!-- Left Content -->
                <div class="col-lg-9 col-md-12">
                    <h2 class="smsb-contact-title">Need Help with Springback Issues?</h2>
                    <p class="smsb-contact-text">Let our experts help you understand, measure, and reduce springback with 3D scanning & Control X.</p>
                    
                    <div class="d-flex flex-column flex-wrap smsb-contact-info-wrapper">
                        <div class="smsb-contact-info-item">
                            <img src="assets/images/sheet-metal-springback/phone-icon.png" alt="Call us" class="smsb-contact-info-icon">
                            <div class="smsb-contact-info-text">
                                <h4>Call us now</h4>
                                <p><a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374406179">+91 63744 06179</a></p>
                            </div>
                        </div>
                        <div class="smsb-contact-info-item">
                            <img src="assets/images/sheet-metal-springback/mail-logo.png" alt="Email us" class="smsb-contact-info-icon">
                            <div class="smsb-contact-info-text">
                                <h4>Email us</h4>
                                <p><a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="col-lg-3 col-md-12 d-flex flex-column justify-content-center smsb-contact-right-wrapper py-2">
                    <a href="contact-us.php" class="smsb-btn-contact-primary">Request Consultation</a>
                    <a href="contact-us.php" class="smsb-btn-contact-outline">
                        <img src="assets/images/sheet-metal-springback/upload-icon.png" alt="Upload Icon">
                        Upload CAD Model
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section Ends -->

    <!-- Main Content Ends Here -->

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    
    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    
    <script src="assets/js/main.js"></script>

</body>
</html>
