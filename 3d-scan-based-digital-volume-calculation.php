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
    <title>3D Scan-Based Digital Volume Calculation | Precise3DM</title>
    <meta name="description" content="Calculate accurate digital volume using 3D scanning.">
    <meta name="keywords" content="3D Scan, Digital Volume Calculation, Volume Calculation, 3D Scanning, Precise3DM">
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
    <link rel="stylesheet" href="assets/css/3d-scan-based-digital-volume-calculation.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include('includes/header.php'); ?>

    <!-- Main Content Starts Here -->

    <!-- Hero Section Starts -->
    <section class="dvc-hero-section position-relative">
        <div class="dvc-hero-bg"></div>
        <div class="dvc-container container-fluid">
            <!-- Top Right Contact -->
            <div class="row">
                <div class="col-12 d-flex justify-content-end align-items-center mb-5 position-relative z-index-1">
                    <img src="assets/images/digital-volume-calculation/phone-icon.png" alt="Phone" class="dvc-top-phone-icon">
                    <div class="ms-3 text-white">
                        <div class="dvc-top-phone-title">Call us now</div>
                        <div class="dvc-top-phone-numbers">
                            <a href="tel:+919840478347">+91 98404 78347</a> <span class="mx-1">|</span>
                            <a href="tel:+919025700192">+91 90257 00192</a> <span class="mx-1">|</span>
                            <a href="tel:+919940352575">+91 99403 52575</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Content -->
            <div class="row">
                <div class="col-lg-7 position-relative z-index-1">
                    <h1 class="dvc-hero-title-part1">3D Scan-Based</h1>
                    <h2 class="dvc-hero-title-part2"><span class="text-white">Digital</span> <span class="dvc-text-orange">Volume Calculation</span></h2>

                    <p class="dvc-hero-subtitle">Accurate &bull; Fast &bull; Reliable &bull; Traceable</p>

                    <div class="dvc-hero-text">
                        <p>Scan anything &ndash; small plastic parts, complex castings, or large objects and calculate accurate digital volume.</p>
                        <p>Create watertight meshes and measure total volume, cross-sectional volume, or partial volumes with industry-leading reverse engineering and inspection software.</p>
                    </div>

                    <!-- Features -->
                    <div class="row dvc-features-row my-5">
                        <div class="col-6 col-sm-3 dvc-feature-item">
                            <img src="assets/images/digital-volume-calculation/hero-stat-1.png" alt="Any Size, Any Shape">
                            <p>Any Size, Any<br>Shape</p>
                        </div>
                        <div class="col-6 col-sm-3 dvc-feature-item">
                            <img src="assets/images/digital-volume-calculation/hero-stat-2.png" alt="High Accuracy">
                            <p>High Accuracy</p>
                        </div>
                        <div class="col-6 col-sm-3 dvc-feature-item">
                            <img src="assets/images/digital-volume-calculation/hero-stat-3.png" alt="Watertight Mesh">
                            <p>Watertight<br>Mesh</p>
                        </div>
                        <div class="col-6 col-sm-3 dvc-feature-item">
                            <img src="assets/images/digital-volume-calculation/hero-stat-4.png" alt="Cross Section Volume">
                            <p>Cross Section<br>Volume</p>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="dvc-hero-buttons d-flex flex-wrap gap-3 mb-5" >
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="dvc-btn">Book a Live Demo</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="dvc-btn">Request Quote</a>
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="dvc-btn">Talk to Experts</a>
                    </div>

                    <!-- Email Block -->
                    <div class="dvc-email-block d-flex align-items-center mt-5">
                        <img src="assets/images/digital-volume-calculation/mail-logo.png" alt="Email" class="dvc-email-icon">
                        <div class="ms-3">
                            <div class="dvc-email-title">Email Us</div>
                            <div class="dvc-email-address">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> <span class="mx-1">|</span>
                                <a href="mailto:service@precise3dm.com">service@precise3dm.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->

    <!-- Measure Volume Section Starts -->
    <section class="dvc-measure-section py-3">
        <div class="dvc-container container-fluid py-4">
            <h2 class="dvc-measure-title text-center mb-5">
                <span class="dvc-measure-text-orange">Measure</span> 
                <span class="dvc-measure-text-dark">Volume of Anything &ndash;</span> 
                <span class="dvc-measure-text-orange">Big or Small</span>
            </h2>
            
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 mt-2">
                <!-- Card 1 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-1.png" alt="Measure 1">
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-2.png" alt="Measure 2">
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-3.png" alt="Measure 3">
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-4.png" alt="Measure 4">
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-5.png" alt="Measure 5">
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-6.png" alt="Measure 6">
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-7.png" alt="Measure 7">
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-8.png" alt="Measure 8">
                    </div>
                </div>
                <!-- Card 9 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-9.png" alt="Measure 9">
                    </div>
                </div>
                <!-- Card 10 -->
                <div class="col py-3">
                    <div class="dvc-measure-card">
                        <img src="assets/images/digital-volume-calculation/measure-10.png" alt="Measure 10">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Measure Volume Section Ends -->

    <!-- How It Works & Key Capabilities Section Starts -->
    <section class="dvc-how-section">
        <div class="dvc-container container-fluid py-4">
            <div class="row g-4">
                <!-- Left Column (8 cols) -->
                <div class="col-lg-9 py-3">
                    <div class="dvc-how-left-box p-4 h-100">
                        <h2 class="dvc-how-title text-center mb-5">How Digital Volume Calculation Works</h2>
                        
                        <div class="dvc-how-steps-container">
                            
                            <!-- Step 1 -->
                            <div class="dvc-how-step">
                                <div class="dvc-how-img-container">
                                    <div class="dvc-how-number">1</div>
                                    <img src="assets/images/digital-volume-calculation/how-1.png" alt="Step 1">
                                </div>
                                <div class="dvc-how-step-title">3D Scan Any Object</div>
                                <div class="dvc-how-step-text">Capture the object using industrial 3D scanning systems.</div>
                                <div class="dvc-how-arrow-wrapper">
                                    <div class="dvc-how-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 17 5-5-5-5"/><path d="m13 17 5-5-5-5"/></svg>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Step 2 -->
                            <div class="dvc-how-step">
                                <div class="dvc-how-img-container">
                                    <div class="dvc-how-number">2</div>
                                    <img src="assets/images/digital-volume-calculation/how-2.png" alt="Step 2">
                                </div>
                                <div class="dvc-how-step-title">Generate Watertight Mesh</div>
                                <div class="dvc-how-step-text">Convert scan data into a clean, watertight mesh model.</div>
                                <div class="dvc-how-arrow-wrapper">
                                    <div class="dvc-how-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 17 5-5-5-5"/><path d="m13 17 5-5-5-5"/></svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="dvc-how-step">
                                <div class="dvc-how-img-container">
                                    <div class="dvc-how-number">3</div>
                                    <img src="assets/images/digital-volume-calculation/how-3.png" alt="Step 3">
                                </div>
                                <div class="dvc-how-step-title">Compute Total Volume</div>
                                <div class="dvc-how-step-text">Automatically calculate the total enclosed volume.</div>
                                <div class="dvc-how-arrow-wrapper">
                                    <div class="dvc-how-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 17 5-5-5-5"/><path d="m13 17 5-5-5-5"/></svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="dvc-how-step">
                                <div class="dvc-how-img-container">
                                    <div class="dvc-how-number">4</div>
                                    <img src="assets/images/digital-volume-calculation/how-4.png" alt="Step 4">
                                </div>
                                <div class="dvc-how-step-title">Cross Section Analysis</div>
                                <div class="dvc-how-step-text">Create custom section planes and analyze partial volumes.</div>
                                <div class="dvc-how-arrow-wrapper">
                                    <div class="dvc-how-arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 17 5-5-5-5"/><path d="m13 17 5-5-5-5"/></svg>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Step 5 -->
                            <div class="dvc-how-step">
                                <div class="dvc-how-img-container">
                                    <div class="dvc-how-number">5</div>
                                    <img src="assets/images/digital-volume-calculation/how-5.png" alt="Step 5">
                                </div>
                                <div class="dvc-how-step-title">Export & Report</div>
                                <div class="dvc-how-step-text">Generate reports and export results.</div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <!-- Right Column (4 cols) -->
                <div class="col-lg-3 py-3">
                    <div class="dvc-capabilities-box h-100">
                        <h3 class="dvc-capabilities-title">Key Capabilities</h3>
                        <ul class="dvc-capabilities-list">
                            <li><span class="dvc-tick">&#10004;</span> Total Volume Calculation</li>
                            <li><span class="dvc-tick">&#10004;</span> Cross Section Volume</li>
                            <li><span class="dvc-tick">&#10004;</span> Partial Volume Analysis</li>
                            <li><span class="dvc-tick">&#10004;</span> Custom Plane Sections</li>
                            <li><span class="dvc-tick">&#10004;</span> Multiple Volume Comparisons</li>
                            <li><span class="dvc-tick">&#10004;</span> Watertight Mesh Creation</li>
                            <li><span class="dvc-tick">&#10004;</span> High Accuracy Measurement</li>
                            <li><span class="dvc-tick">&#10004;</span> Volume Deviation Analysis</li>
                            <li><span class="dvc-tick">&#10004;</span> Export to PDF / Excel / CSV</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works & Key Capabilities Section Ends -->

    <!-- Software Used & Cross Section Section Starts -->
    <section class="dvc-software-section py-3">
        <div class="dvc-container container-fluid">
            <div class="row g-4">
                <!-- Left Column (4 cols) -->
                <div class="col-lg-5">
                    <div class="dvc-software-left-box p-4 h-100">
                        <h3 class="dvc-software-title text-start mb-4">Software Used</h3>
                        <div class="dvc-software-logos d-flex justify-content-between align-items-center mb-4">
                            <img src="assets/images/digital-volume-calculation/software-1.png" alt="Software 1" class="img-fluid">
                            <img src="assets/images/digital-volume-calculation/software-2.png" alt="Software 2" class="img-fluid">
                            <img src="assets/images/digital-volume-calculation/software-3.png" alt="Software 3" class="img-fluid">
                        </div>
                        <div class="text-center">
                            <ul class="dvc-software-list list-unstyled d-inline-flex flex-column align-items-start m-0 text-start">
                                <li><span class="dvc-tick">&#10004;</span> Watertight Mesh Creation</li>
                                <li><span class="dvc-tick">&#10004;</span> Volume Calculation</li>
                                <li><span class="dvc-tick">&#10004;</span> Cross Section Analysis</li>
                                <li><span class="dvc-tick">&#10004;</span> Deviation & Comparison</li>
                                <li><span class="dvc-tick">&#10004;</span> Reporting & Export</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right Column (8 cols) -->
                <div class="col-lg-7">
                    <div class="dvc-cross-section-box p-4 h-100 d-flex flex-column align-items-center justify-content-center">
                        <h3 class="dvc-cross-section-title text-center mb-4">Cross Section and Partial Volume Analysis</h3>
                        <img src="assets/images/digital-volume-calculation/cross-section-and-partial-volume-analysis.png" alt="Cross Section Analysis" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Software Used & Cross Section Section Ends -->

    <!-- Scanners & Why Section Starts -->
    <section class="dvc-scanners-section py-5">
        <div class="dvc-container container-fluid">
            <div class="row g-4">
                <!-- Left Column (8 cols) -->
                <div class="col-lg-8">
                    <div class="dvc-scanners-left-box p-4 h-100">
                        <h3 class="dvc-scanners-title text-center mb-5">Industrial 3D Scanners</h3>
                        
                        <div class="dvc-scanners-container">
                            <!-- Scanner 1 -->
                            <div class="dvc-scanner-item">
                                <div class="dvc-scanner-img-container">
                                    <img src="assets/images/digital-volume-calculation/scanner-1.png" alt="FreeScan Combo">
                                    <div class="dvc-scanner-name">FreeScan Combo</div>
                                </div>
                                <a href="FreeScan-Combo.php" class="dvc-scanner-btn">Know More</a>
                            </div>
                            <!-- Scanner 2 -->
                            <div class="dvc-scanner-item">
                                <div class="dvc-scanner-img-container">
                                    <img src="assets/images/digital-volume-calculation/scanner-2.png" alt="FreeScan Omni">
                                    <div class="dvc-scanner-name">FreeScan Omni</div>
                                </div>
                                <a href="freescan-omni.php" class="dvc-scanner-btn">Know More</a>
                            </div>
                            <!-- Scanner 3 -->
                            <div class="dvc-scanner-item">
                                <div class="dvc-scanner-img-container">
                                    <img src="assets/images/digital-volume-calculation/scanner-3.png" alt="FreeScan UE Pro 2">
                                    <div class="dvc-scanner-name">FreeScan UE Pro 2</div>
                                </div>
                                <a href="freescan-ue-pro2.php" class="dvc-scanner-btn">Know More</a>
                            </div>
                            <!-- Scanner 4 -->
                            <div class="dvc-scanner-item">
                                <div class="dvc-scanner-img-container">
                                    <img src="assets/images/digital-volume-calculation/scanner-4.png" alt="FreeScan Trio">
                                    <div class="dvc-scanner-name">FreeScan Trio</div>
                                </div>
                                <a href="freescan-trio-triple-camera-handheld-laser-3D-scanner.php" class="dvc-scanner-btn">Know More</a>
                            </div>
                            <!-- Scanner 5 -->
                            <div class="dvc-scanner-item">
                                <div class="dvc-scanner-img-container">
                                    <img src="assets/images/digital-volume-calculation/scanner-5.png" alt="FreeScan Track Nova">
                                    <div class="dvc-scanner-name">FreeScan Track Nova</div>
                                </div>
                                <a href="freescan-track-nova.php" class="dvc-scanner-btn">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column (4 cols) -->
                <div class="col-lg-4">
                    <div class="dvc-why-box p-4 h-100 d-flex flex-column justify-content-center">
                        <h3 class="dvc-why-title text-center mb-5">Why 3D Scan Based Volume Calculation?</h3>
                        <ul class="dvc-why-list list-unstyled m-0">
                            <li><span class="dvc-tick">&#10004;</span> Non-contact measurement</li>
                            <li><span class="dvc-tick">&#10004;</span> Fast and accurate</li>
                            <li><span class="dvc-tick">&#10004;</span> Works on any material</li>
                            <li><span class="dvc-tick">&#10004;</span> Handles complex geometries</li>
                            <li><span class="dvc-tick">&#10004;</span> Ideal for internal & external shapes</li>
                            <li><span class="dvc-tick">&#10004;</span> Repeatable and traceable results</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Scanners & Why Section Ends -->

    <!-- OPEX & CAPEX Section Starts -->
    <section class="dvc-opex-capex-section py-5">
        <div class="dvc-container container-fluid">
            <div class="row g-4">
                <!-- OPEX Card (6 cols) -->
                <div class="col-lg-6">
                    <div class="dvc-opex-card p-4 p-md-5 h-100 position-relative">
                        <div class="dvc-opex-content position-relative" style="z-index: 2; width: 65%;">
                            <h3 class="dvc-opex-title mb-3">OPEX - Outsource Your Volume Analysis</h3>
                            <p class="dvc-opex-subtitle mb-4">Need volume calculations but don't want to invest in equipment?</p>
                            <ul class="dvc-opex-list list-unstyled mb-0">
                                <li><i class="fas fa-check-circle"></i> Total Volume Reports</li>
                                <li><i class="fas fa-check-circle"></i> Cross Section Reports</li>
                                <li><i class="fas fa-check-circle"></i> Deviation Reports</li>
                                <li><i class="fas fa-check-circle"></i> Custom Analysis</li>
                            </ul>
                        </div>
                        <img src="assets/images/digital-volume-calculation/opex.png" alt="OPEX Background" class="dvc-card-bg-img dvc-opex-img">
                        <a href="Get-3d-scan-service-quote.php" class="dvc-opex-btn">Outsource Your Project</a>
                    </div>
                </div>

                <!-- CAPEX Card (6 cols) -->
                <div class="col-lg-6">
                    <div class="dvc-capex-card p-4 p-md-5 h-100 position-relative">
                        <div class="dvc-capex-content position-relative" style="z-index: 2; width: 65%;">
                            <h3 class="dvc-capex-title mb-3">CAPEX - Build Your In-House Solution</h3>
                            <p class="dvc-capex-subtitle mb-4">Complete Scan, Reverse Engineering & Volume Analysis Workflow</p>
                            <ul class="dvc-capex-list list-unstyled mb-0">
                                <li><i class="fas fa-check-circle"></i> Industrial 3D Scanner</li>
                                <li><i class="fas fa-check-circle"></i> Software</li>
                                <li><i class="fas fa-check-circle"></i> Training</li>
                                <li><i class="fas fa-check-circle"></i> Implementation</li>
                                <li><i class="fas fa-check-circle"></i> Technical Support</li>
                            </ul>
                        </div>
                        <img src="assets/images/digital-volume-calculation/capex.png" alt="CAPEX Background" class="dvc-card-bg-img dvc-capex-img">
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="dvc-capex-btn">Build Your Lab</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OPEX & CAPEX Section Ends -->

    <!-- Industries We Serve Section Starts -->
    <section class="dvc-industries-section py-5">
        <div class="dvc-container container-fluid">
            <h2 class="dvc-industries-title text-center mb-5">
                <span class="text-dark-blue">Industries</span> <span class="text-orange">We serve</span>
            </h2>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                    <div class="dvc-industry-card">
                        <img src="assets/images/digital-volume-calculation/industries-1.png" alt="Tire Inspection" class="img-fluid w-100 dvc-industry-img">
                        <h4 class="dvc-industry-name">Tire Inspection</h4>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                    <div class="dvc-industry-card">
                        <img src="assets/images/digital-volume-calculation/industries-2.png" alt="Casting Part Inspection" class="img-fluid w-100 dvc-industry-img">
                        <h4 class="dvc-industry-name">Casting Part Inspection</h4>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                    <div class="dvc-industry-card">
                        <img src="assets/images/digital-volume-calculation/industries-3.png" alt="Plastic Part Inspection" class="img-fluid w-100 dvc-industry-img">
                        <h4 class="dvc-industry-name">Plastic Part Inspection</h4>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                    <div class="dvc-industry-card">
                        <img src="assets/images/digital-volume-calculation/industries-4.png" alt="Metal Part Inspection" class="img-fluid w-100 dvc-industry-img">
                        <h4 class="dvc-industry-name">Metal Part Inspection</h4>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                    <div class="dvc-industry-card">
                        <img src="assets/images/digital-volume-calculation/industries-5.png" alt="Part of Defense Industry" class="img-fluid w-100 dvc-industry-img">
                        <h4 class="dvc-industry-name">Part of Defense Industry</h4>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                    <div class="dvc-industry-card">
                        <img src="assets/images/digital-volume-calculation/industries-6.png" alt="Turbine Blade Inspection" class="img-fluid w-100 dvc-industry-img">
                        <h4 class="dvc-industry-name">Turbine Blade Inspection</h4>
                    </div>
                </div>
                <!-- Card 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                    <div class="dvc-industry-card">
                        <img src="assets/images/digital-volume-calculation/industries-7.png" alt="Aero Parts" class="img-fluid w-100 dvc-industry-img">
                        <h4 class="dvc-industry-name">Aero Parts</h4>
                    </div>
                </div>
                <!-- Card 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                    <div class="dvc-industry-card">
                        <img src="assets/images/digital-volume-calculation/industries-8.png" alt="Watch" class="img-fluid w-100 dvc-industry-img">
                        <h4 class="dvc-industry-name">Watch</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Industries We Serve Section Ends -->

    <!-- Contact Section Starts -->
    <section class="dvc-contact-section py-5 text-center">
        <div class="container py-5">
            <h2 class="dvc-contact-title mb-3">Get Accurate, Reliable and Repeatable Digital Volume Results</h2>
            <p class="dvc-contact-subtitle mb-5">Scan anything. Calculate volume anywhere. Make confident engineering decisions.</p>
            <div class="dvc-contact-btns d-flex justify-content-center gap-4 flex-column flex-md-row">
                <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="dvc-contact-btn">Talk To An Expert</a>
                <a href="Book-demo-get-quote-for-3D-scanner.php" class="dvc-contact-btn">Request a Quote</a>
            </div>
        </div>
    </section>
    <!-- Contact Section Ends -->

    <!-- FAQ Section Starts -->
    <section class="dvc-faq-section py-5">
        <div class="container py-4">
            <h2 class="dvc-faq-title mb-5">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="accordion dvc-faq-accordion" id="dvcFaqAccordion">
                
                <!-- FAQ 1 -->
                <div class="accordion-item dvc-faq-item">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button collapsed dvc-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                            What is the cost of handheld colour 3D scanning services?
                        </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#dvcFaqAccordion">
                        <div class="accordion-body dvc-faq-body">
                            The cost varies depending on the size and complexity of the object. Please contact us for a detailed quote.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item dvc-faq-item">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed dvc-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                            What is colour 3D Scanning, and how does it differ from industrial 3D Scanning?
                        </button>
                    </h2>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#dvcFaqAccordion">
                        <div class="accordion-body dvc-faq-body">
                            Colour 3D scanning captures both the geometry and the colour/texture of the object, while industrial 3D Scanning only captures the shape.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item dvc-faq-item">
                    <h2 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed dvc-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                            How long does it take when you do a 3D Scan with colour?
                        </button>
                    </h2>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#dvcFaqAccordion">
                        <div class="accordion-body dvc-faq-body">
                            Scanning time depends on the object's dimensions and details, typically ranging from a few minutes to a few hours.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item dvc-faq-item">
                    <h2 class="accordion-header" id="faqHeading4">
                        <button class="accordion-button collapsed dvc-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                            Who benefits from Precise3DM's Handheld Color 3D Scanning Services?
                        </button>
                    </h2>
                    <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#dvcFaqAccordion">
                        <div class="accordion-body dvc-faq-body">
                            Industries such as heritage preservation, healthcare, consumer products, and entertainment greatly benefit from accurate colour 3D models.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item dvc-faq-item">
                    <h2 class="accordion-header" id="faqHeading5">
                        <button class="accordion-button collapsed dvc-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                            Is your Colour 3D scanning service available for outdoor or indoor objects?
                        </button>
                    </h2>
                    <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#dvcFaqAccordion">
                        <div class="accordion-body dvc-faq-body">
                            Our handheld scanners are versatile and can be used for both indoor and outdoor objects, adapting to various lighting conditions.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- FAQ Section Ends -->

    <!-- Main Content Ends Here -->

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

</body>

</html>