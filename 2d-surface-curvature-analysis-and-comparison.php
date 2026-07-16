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
    <title>2D Surface Curvature Analysis & Comparison | Precise3DM</title>
    <meta name="description" content="Validate Surface Flow and Ensure Perfect Continuity using 2D Curvature Analysis & Comparison.">
    <meta name="keywords" content="2D Curvature Analysis, Surface Flow Validation, Cross Section Comparison, Precise3DM">
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
    <link rel="stylesheet" href="assets/css/header-footer.css">
    <link rel="stylesheet" href="assets/css/2d-surface-curvature-analysis-and-comparison.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include('includes/header.php'); ?>

    <!-- Main Content Starts Here -->

    <!-- Hero Section Starts -->
    <section class="sca-hero-section position-relative overflow-hidden">
        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/hero-bg.png" alt="Hero Background" class="sca-hero-bg">

        <div class="container-fluid sca-container">
            <!-- Top Right Contact -->
            <div class="row pt-4 pb-2">
                <div class="col-12 d-flex justify-content-end align-items-center">
                    <div class="sca-top-contact d-flex align-items-center">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/phone-icon.png" alt="Phone" class="me-3 sca-phone-icon">
                        <div class="sca-top-contact-text text-end">
                            <div class="sca-call-now">Call us now</div>
                            <div class="sca-phone-number">
                                <a href="tel:+919840478347" style="color: inherit; text-decoration: none;">+91 98404 78347</a> | 
                                <a href="tel:+919025700192" style="color: inherit; text-decoration: none;">+91 90257 00192</a> | 
                                <a href="tel:+919940352575" style="color: inherit; text-decoration: none;">+91 99403 52575</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Hero Content -->
            <div class="row align-items-center py-4 pb-5">
                <div class="col-lg-7 col-xl-6 position-relative" style="z-index: 2;">
                    <h1 class="sca-hero-title mb-3">2D Curvature Analysis<br>& Comparison</h1>
                    <h3 class="sca-hero-subtitle mb-4">Validate Surface Flow. Ensure Perfect Continuity.</h3>
                    <p class="sca-hero-desc mb-5">
                        Extract cross sections from 3D scan data and compare profile curves against
                        CAD or another scan to evaluate surface flow, detect deviations, and ensure
                        styling and manufacturing quality.
                    </p>

                    <!-- Stats / Features Grid -->
                    <div class="row text-center mb-5 gx-3 gy-4">
                        <div class="col-6 col-sm-3">
                            <div class="sca-stat-card">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/hero-stat-1.png" alt="Surface Flow Validation" class="img-fluid mb-3 sca-stat-img">
                                <p class="sca-stat-text">Surface Flow Validation</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="sca-stat-card">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/hero-stat-2.png" alt="Waviness & Deviation Detection" class="img-fluid mb-3 sca-stat-img">
                                <p class="sca-stat-text">Waviness & Deviation Detection</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="sca-stat-card">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/hero-stat-3.png" alt="Cross Section Comparison" class="img-fluid mb-3 sca-stat-img">
                                <p class="sca-stat-text">Cross Section Comparison</p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3">
                            <div class="sca-stat-card">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/hero-stat-4.png" alt="Engineering Reports" class="img-fluid mb-3 sca-stat-img">
                                <p class="sca-stat-text">Engineering Reports</p>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex flex-wrap gap-3 mb-5" style="gap: 12px;">
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="sca-hero-btn">Book a Live Demo</a>
                        <a href="Get-3d-scan-service-quote.php" class="sca-hero-btn">Request Quote</a>
                    </div>

                    <!-- Email Section -->
                    <div class="d-flex align-items-center sca-email-section mt-4 pb-2">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/mail-logo.png" alt="Email Logo" class="me-3 sca-mail-icon">
                        <div class="sca-email-text">
                            <div class="sca-email-title">Email Us</div>
                            <div class="sca-email-address">
                                <a href="mailto:sm@precise3dm.com" style="color: inherit; text-decoration: none;">sm@precise3dm.com</a> | 
                                <a href="mailto:service@precise3dm.com" style="color: inherit; text-decoration: none;">service@precise3dm.com</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->

    <!-- When Used Section Starts -->
    <section class="sca-when-used-section pb-3">
        <div class="container-fluid sca-container py-4">
            <h2 class="sca-when-used-title mb-5 text-center text-uppercase">WHEN IS 2D CURVATURE ANALYSIS USED?</h2>

            <div class="row justify-content-center g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="sca-when-card h-100">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/when-1.png" alt="Scan to CAD Comparison" class="img-fluid mb-4 w-100">
                        <h4 class="sca-when-card-title">Scan to CAD Comparison</h4>
                        <p class="sca-when-card-desc">Compare scanned parts against CAD to validate surface continuity, styling accuracy, and manufacturing deviations.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="sca-when-card h-100">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/when-2.png" alt="Surface Flow Evaluation" class="img-fluid mb-4 w-100">
                        <h4 class="sca-when-card-title">Surface Flow Evaluation</h4>
                        <p class="sca-when-card-desc">Analyze how smoothly a surface transitions across critical regions. Essential for styling-driven industries.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="sca-when-card h-100">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/when-3.png" alt="Scan to Scan Comparison" class="img-fluid mb-4 w-100">
                        <h4 class="sca-when-card-title">Scan to Scan Comparison</h4>
                        <p class="sca-when-card-desc">Compare two scans when CAD is unavailable. Used for before vs after testing, prototype comparisons, wear studies, and deformation analysis.</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="sca-when-card h-100">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/when-4.png" alt="Tool & Mold Validation" class="img-fluid mb-4 w-100">
                        <h4 class="sca-when-card-title">Tool & Mold Validation</h4>
                        <p class="sca-when-card-desc">Verify mold and tool surfaces against approved geometry for injection molds, casting dies, compression molds, and forming tools.</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4 py-3">
                    <div class="sca-when-card h-100">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/when-5.png" alt="Deformation Studies" class="img-fluid mb-4 w-100">
                        <h4 class="sca-when-card-title">Deformation Studies</h4>
                        <p class="sca-when-card-desc">Measure shape changes under load, thermal conditions, vibration testing, and long-term usage.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- When Used Section Ends -->

    <!-- Typical Workflow Section Starts -->
    <section class="sca-workflow-section pb-3">
        <div class="container-fluid sca-container py-4">
            <h2 class="sca-workflow-title mb-5 text-center text-uppercase">TYPICAL WORKFLOW</h2>

            <div class="sca-workflow-box">
                <div class="sca-workflow-steps-container">

                    <!-- Step 1 -->
                    <div class="sca-workflow-step text-center">
                        <div class="sca-step-img-container mx-auto">
                            <div class="sca-step-number">1</div>
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/workflow-1.png" alt="Capture 3D Scan Data" class="img-fluid sca-step-img">
                            <div class="sca-how-arrow-wrapper">
                                <div class="sca-separator-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 17 5-5-5-5" />
                                        <path d="m13 17 5-5-5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h4 class="sca-step-title mt-2">Capture 3D Scan Data</h4>
                        <p class="sca-step-desc">Collect accurate surface geometry using a metrology-grade 3D scanner.</p>


                    </div>

                    <!-- Step 2 -->
                    <div class="sca-workflow-step text-center">
                        <div class="sca-step-img-container mx-auto">
                            <div class="sca-step-number">2</div>
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/workflow-2.png" alt="Align Scan to CAD or Scan to Scan" class="img-fluid sca-step-img">
                            <div class="sca-how-arrow-wrapper">
                                <div class="sca-separator-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 17 5-5-5-5" />
                                        <path d="m13 17 5-5-5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h4 class="sca-step-title mt-2">Align Scan to CAD or Scan to Scan</h4>
                        <p class="sca-step-desc">Align the 3D scan data to the CAD model or reference scan accurately.</p>


                    </div>

                    <!-- Step 3 -->
                    <div class="sca-workflow-step text-center">
                        <div class="sca-step-img-container mx-auto">
                            <div class="sca-step-number">3</div>
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/workflow-3.png" alt="Create Critical Cross Sections" class="img-fluid sca-step-img">
                            <div class="sca-how-arrow-wrapper">
                                <div class="sca-separator-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 17 5-5-5-5" />
                                        <path d="m13 17 5-5-5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h4 class="sca-step-title mt-2">Create Critical Cross Sections</h4>
                        <p class="sca-step-desc">Extract sections at engineering-defined locations.</p>


                    </div>

                    <!-- Step 4 -->
                    <div class="sca-workflow-step text-center">
                        <div class="sca-step-img-container mx-auto">
                            <div class="sca-step-number">4</div>
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/workflow-4.png" alt="Extract 2D Profile Curves" class="img-fluid sca-step-img">
                            <div class="sca-how-arrow-wrapper">
                                <div class="sca-separator-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 17 5-5-5-5" />
                                        <path d="m13 17 5-5-5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h4 class="sca-step-title mt-2">Extract 2D Profile Curves</h4>
                        <p class="sca-step-desc">Generate profile curves from each cross section.</p>


                    </div>

                    <!-- Step 5 -->
                    <div class="sca-workflow-step text-center">
                        <div class="sca-step-img-container mx-auto">
                            <div class="sca-step-number">5</div>
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/workflow-5.png" alt="Compare Curve Flow" class="img-fluid sca-step-img">
                            <div class="sca-how-arrow-wrapper">
                                <div class="sca-separator-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 17 5-5-5-5" />
                                        <path d="m13 17 5-5-5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h4 class="sca-step-title mt-2">Compare Curve Flow</h4>
                        <p class="sca-step-desc">Compare profile continuity and geometry.</p>


                    </div>

                    <!-- Step 6 -->
                    <div class="sca-workflow-step text-center">
                        <div class="sca-step-img-container mx-auto">
                            <div class="sca-step-number">6</div>
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/workflow-6.png" alt="Analyze Deviation Zones" class="img-fluid sca-step-img">
                            <div class="sca-how-arrow-wrapper">
                                <div class="sca-separator-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 17 5-5-5-5" />
                                        <path d="m13 17 5-5-5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <h4 class="sca-step-title mt-2">Analyze Deviation Zones</h4>
                        <p class="sca-step-desc">Identify areas with shape variation and waviness.</p>


                    </div>

                    <!-- Step 7 -->
                    <div class="sca-workflow-step text-center">
                        <div class="sca-step-img-container mx-auto">
                            <div class="sca-step-number">7</div>
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/workflow-7.png" alt="Generate Engineering Report" class="img-fluid sca-step-img">
                        </div>
                        <h4 class="sca-step-title mt-2">Generate Engineering Report</h4>
                        <p class="sca-step-desc">Create technical reports with plots, deviation maps, and recommendations.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Typical Workflow Section Ends -->

    <!-- Reveal Section Starts -->
    <section class="sca-reveal-section pb-3">
        <div class="container-fluid sca-container py-4">
            <h2 class="sca-reveal-title text-center text-uppercase mb-5">WHAT DOES 2D CURVATURE ANALYSIS REVEAL?</h2>

            <div class="row g-4 mt-2">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="sca-reveal-card">
                        <h3 class="sca-reveal-card-title"><span class="text-dark">Cross Section</span> <span style="color: #F7941D;">Location</span></h3>
                        <p class="sca-reveal-card-desc">Critical sections extracted across the component for analysis.</p>
                        <div class="text-center mt-4">
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/what-1.png" alt="Cross Section Location" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="sca-reveal-card">
                        <h3 class="sca-reveal-card-title"><span class="text-dark">Curve </span> <span style="color: #F7941D;">Comparison (2D)</span></h3>
                        <p class="sca-reveal-card-desc">Compare CAD profile curves with scanned profile curves.</p>
                        <div class="text-center mt-4">
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/what-2.png" alt="Curve Comparison" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="sca-reveal-card">
                        <h3 class="sca-reveal-card-title"><span class="text-dark">Deviation </span> <span style="color: #F7941D;">Map (2D)</span></h3>
                        <p class="sca-reveal-card-desc">Visualize positive and negative deviations between profiles.</p>
                        <div class="text-center mt-4">
                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/what-3.png" alt="Deviation Map" class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Card 4 (Benefits) -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="sca-reveal-card">
                        <h3 class="sca-reveal-card-title text-center text-dark" style="font-size: 1.5rem;">KEY BENEFITS</h3>
                        <ul class="sca-benefits-list mt-4">
                            <li><span class="sca-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg></span> Understand true surface flow and continuity</li>
                            <li><span class="sca-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg></span> Detect subtle shape deviations and waviness</li>
                            <li><span class="sca-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg></span> Validate styling surfaces and Class-A quality</li>
                            <li><span class="sca-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg></span> Identify manufacturing and tooling issues</li>
                            <li><span class="sca-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg></span> Improve product quality and fitment</li>
                            <li><span class="sca-tick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg></span> Generate detailed engineering reports</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 5 (Applications) -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="sca-reveal-card">
                        <h3 class="sca-reveal-card-title text-center text-dark">APPLICATIONS</h3>
                        <div class="row g-2 mt-4">
                            <div class="col-4 text-center">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/application-1.png" alt="Automotive" class="img-fluid mb-2" style="max-height: 60px;">
                                <h4 class="sca-app-title">Automotive Body Panels</h4>
                                <p class="sca-app-desc">Validate panel quality, styling surfaces, and assembly fit.</p>
                            </div>
                            <div class="col-4 text-center">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/application-2.png" alt="Aerospace" class="img-fluid mb-2" style="max-height: 60px;">
                                <h4 class="sca-app-title">Aerospace Components</h4>
                                <p class="sca-app-desc">Inspect aerodynamic surfaces and structural components.</p>
                            </div>
                            <div class="col-4 text-center">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/application-3.png" alt="Tooling & Molds" class="img-fluid mb-2" style="max-height: 60px;">
                                <h4 class="sca-app-title">Tooling & Molds</h4>
                                <p class="sca-app-desc">Validate molds, dies, and production tooling.</p>
                            </div>
                            <div class="col-4 text-center mt-3">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/application-4.png" alt="Industrial Parts" class="img-fluid mb-2" style="max-height: 60px;">
                                <h4 class="sca-app-title">Industrial Parts</h4>
                                <p class="sca-app-desc">Evaluate dimensional consistency and surface flow.</p>
                            </div>
                            <div class="col-4 text-center mt-3">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/application-5.png" alt="Consumer Products" class="img-fluid mb-2" style="max-height: 60px;">
                                <h4 class="sca-app-title">Consumer Products</h4>
                                <p class="sca-app-desc">Maintain cosmetic quality and product appearance.</p>
                            </div>
                            <div class="col-4 text-center mt-3">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/application-6.png" alt="Reverse Engineering" class="img-fluid mb-2" style="max-height: 60px;">
                                <h4 class="sca-app-title">Reverse Engineering</h4>
                                <p class="sca-app-desc">Compare physical products when CAD data is unavailable.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 (Use Cases) -->
                <div class="col-lg-4 col-md-6 py-3">
                    <div class="sca-reveal-card">
                        <h3 class="sca-reveal-card-title text-center text-dark">CURVATURE ANALYSIS USE CASES</h3>
                        <div class="sca-usecase-list mt-4">
                            <div class="d-flex align-items-start mb-3 gap-3" style="gap: 8px;">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/analysis-1.png" alt="Icon" width="50" class="mt-1 flex-shrink-0">
                                <div>
                                    <h4 class="sca-usecase-title">Surface Flow Analysis</h4>
                                    <p class="sca-usecase-desc">Evaluate smooth transitions and overall surface flow.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3 gap-3" style="gap: 8px;">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/analysis-2.png" alt="Icon" width="50" class="mt-1 flex-shrink-0">
                                <div>
                                    <h4 class="sca-usecase-title">Waviness Detection</h4>
                                    <p class="sca-usecase-desc">Identify subtle manufacturing variations invisible in standard inspection.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3 gap-3" style="gap: 8px;">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/analysis-3.png" alt="Icon" width="50" class="mt-1 flex-shrink-0">
                                <div>
                                    <h4 class="sca-usecase-title">Gap Analysis</h4>
                                    <p class="sca-usecase-desc">Measure distance between two profile curves.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3 gap-3" style="gap: 8px;">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/analysis-4.png" alt="Icon" width="50" class="mt-1 flex-shrink-0">
                                <div>
                                    <h4 class="sca-usecase-title">Shape Consistency</h4>
                                    <p class="sca-usecase-desc">Verify repeated parts follow the same geometry.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start mb-3 gap-3" style="gap: 8px;">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/analysis-5.png" alt="Icon" width="50" class="mt-1 flex-shrink-0">
                                <div>
                                    <h4 class="sca-usecase-title">Tool Wear Detection</h4>
                                    <p class="sca-usecase-desc">Monitor changes in tooling surfaces over time.</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-3" style="gap: 8px;">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/analysis-6.png" alt="Icon" width="50" class="mt-1 flex-shrink-0">
                                <div>
                                    <h4 class="sca-usecase-title">Load Deformation Study</h4>
                                    <p class="sca-usecase-desc">Measure shape changes after load or environmental testing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Reveal Section Ends -->

    <!-- Software & Scanners Section Starts -->
    <section class="sca-software-scanners-section pb-3" style="background-color: #f6f6fa;">
        <div class="container-fluid sca-container py-4">
            <div class="row g-4">

                <!-- Left Div (Software) -->
                <div class="col-lg-4">
                    <div class="sca-software-container">
                        <h3 class="sca-section-title text-center mb-4">SOFTWARE COMMONLY USED</h3>
                        <div class="d-flex flex-column gap-3" style="gap: 20px;">
                            <!-- Software 1 -->
                            <div class="sca-software-card">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/software-1.png" alt="Geomagic Control X" class="sca-software-img img-fluid">
                                <div class="sca-software-text">
                                    <h4 class="sca-software-name">Geomagic Control X</h4>
                                    <p class="sca-software-desc">Industry-leading software for scan-to-CAD and scan-to-scan curve comparison.</p>
                                </div>
                            </div>
                            <!-- Software 2 -->
                            <div class="sca-software-card">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/software-2.png" alt="PolyWorks Inspector" class="sca-software-img img-fluid">
                                <div class="sca-software-text">
                                    <h4 class="sca-software-name">PolyWorks Inspector</h4>
                                    <p class="sca-software-desc">Advanced metrology platform for manufacturing inspection and validation.</p>
                                </div>
                            </div>
                            <!-- Software 3 -->
                            <div class="sca-software-card">
                                <img src="assets/images/2d-surface-curvature-analysis-and-comparison/software-3.png" alt="SHINING 3D Inspect" class="sca-software-img img-fluid">
                                <div class="sca-software-text">
                                    <h4 class="sca-software-name">SHINING 3D Inspect</h4>
                                    <p class="sca-software-desc">Professional inspection software for analysis, reporting, and quality control.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Div (Scanners) -->
                <div class="col-lg-8">
                    <div class="sca-scanner-container">
                        <h3 class="sca-section-title text-center mb-4">RECOMMENDED 3D SCANNERS</h3>
                        <div class="row g-4">
                            <!-- Card 1 -->
                            <div class="col-12 col-md-6 col-lg-3 py-2">
                                <div class="sca-scanner-card">
                                    <div class="sca-scanner-header">Small Precision Components</div>
                                    <div class="sca-scanner-body d-flex flex-column gap-3 p-2" style="gap: 10px;">
                                        <div class="sca-scanner-item">
                                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/scanner-small-1.png" alt="OptimScan Q12" class="img-fluid">
                                            <h4 class="sca-scanner-name">OptimScan Q12</h4>
                                        </div>
                                        <div class="sca-scanner-item">
                                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/scanner-small-2.png" alt="AutoScan Inspec" class="img-fluid">
                                            <h4 class="sca-scanner-name">AutoScan Inspec</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-12 col-md-6 col-lg-3 py-2">
                                <div class="sca-scanner-card">
                                    <div class="sca-scanner-header">Medium Components</div>
                                    <div class="sca-scanner-body d-flex flex-column gap-3 p-2" style="gap: 10px;">
                                        <div class="sca-scanner-item">
                                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/scanner-medium-1.png" alt="FreeScan Combo" class="img-fluid">
                                            <h4 class="sca-scanner-name">FreeScan Combo</h4>
                                        </div>
                                        <div class="sca-scanner-item">
                                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/scanner-medium-2.png" alt="FreeScan UE Pro 2" class="img-fluid">
                                            <h4 class="sca-scanner-name">FreeScan UE Pro 2</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-12 col-md-6 col-lg-3 py-2">
                                <div class="sca-scanner-card">
                                    <div class="sca-scanner-header">Large Industrial Parts</div>
                                    <div class="sca-scanner-body d-flex flex-column gap-3 p-2" style="gap: 10px;">
                                        <div class="sca-scanner-item">
                                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/scanner-large-1.png" alt="FreeScan Trio" class="img-fluid">
                                            <h4 class="sca-scanner-name">FreeScan Trio</h4>
                                        </div>
                                        <div class="sca-scanner-item">
                                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/scanner-large-2.png" alt="FreeScan Omni" class="img-fluid">
                                            <h4 class="sca-scanner-name">FreeScan Omni</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-12 col-md-6 col-lg-3 py-2">
                                <div class="sca-scanner-card d-flex flex-column">
                                    <div class="sca-scanner-header">Large Assemblies</div>
                                    <div class="sca-scanner-body d-flex flex-column p-2 flex-grow-1">
                                        <div class="sca-scanner-item flex-grow-1">
                                            <img src="assets/images/2d-surface-curvature-analysis-and-comparison/scanner-large-assemblies.png" alt="FreeScan Trak Nova" class="img-fluid">
                                            <h4 class="sca-scanner-name">FreeScan Trak Nova</h4>
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
    <!-- Software & Scanners Section Ends -->

    <!-- Deliverables Section Starts -->
    <section class="sca-deliverables-section pb-3" style="background-color: #f6f6fa;">
        <div class="container-fluid sca-container py-4">
            <h2 class="sca-deliverables-title text-center text-uppercase mb-5">DELIVERABLES</h2>

            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-6 col-lg-2 py-2">
                    <div class="sca-deliverables-card">
                        <h4 class="sca-deliverables-card-title">Complete 3D Scan Data</h4>
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/deliverables-1.png" alt="Complete 3D Scan Data" class="img-fluid sca-deliverables-img">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-6 col-lg-2 py-2">
                    <div class="sca-deliverables-card">
                        <h4 class="sca-deliverables-card-title">2D Curvature Analysis (PASS/FAIL) Report</h4>
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/deliverables-2.png" alt="2D Curvature Analysis Report" class="img-fluid sca-deliverables-img">
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-6 col-lg-2 py-2">
                    <div class="sca-deliverables-card">
                        <h4 class="sca-deliverables-card-title">Inspection Report</h4>
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/deliverables-3.png" alt="Inspection Report" class="img-fluid sca-deliverables-img">
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-6 col-lg-2 py-2">
                    <div class="sca-deliverables-card">
                        <h4 class="sca-deliverables-card-title">Report (PDF Format)</h4>
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/deliverables-4.png" alt="Report PDF" class="img-fluid sca-deliverables-img">
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-6 col-lg-2 py-2">
                    <div class="sca-deliverables-card">
                        <h4 class="sca-deliverables-card-title">Report (PPT Format)</h4>
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/deliverables-5.png" alt="Report PPT" class="img-fluid sca-deliverables-img">
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-6 col-lg-2 py-2">
                    <div class="sca-deliverables-card">
                        <h4 class="sca-deliverables-card-title">Report (Excel Format)</h4>
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/deliverables-6.png" alt="Report Excel" class="img-fluid sca-deliverables-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deliverables Section Ends -->

    <!-- Industries We Serve Section Starts -->
    <section class="sca-industries-section pb-3" style="background-color: #f6f6fa;">
        <div class="container-fluid sca-container py-4">
            <h2 class="sca-industries-title text-center mb-5">
                <span class="text-dark-blue">INDUSTRIES</span> <span class="text-orange">WE SERVE</span>
            </h2>

            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="sca-industry-card py-2">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/industries-1.png" alt="Tire Inspection" class="img-fluid sca-industry-img">
                        <h4 class="sca-industry-name mt-3">Medical Stent</h4>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="sca-industry-card py-2">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/industries-2.png" alt="Casting Part Inspection" class="img-fluid sca-industry-img">
                        <h4 class="sca-industry-name mt-3">Automotive Bracket</h4>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="sca-industry-card py-2">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/industries-3.png" alt="Defense Industry" class="img-fluid sca-industry-img">
                        <h4 class="sca-industry-name mt-3">Tire Inspection</h4>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="sca-industry-card py-2">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/industries-4.png" alt="Turbine Blade Inspection" class="img-fluid sca-industry-img">
                        <h4 class="sca-industry-name mt-3">Casting Part Inspection</h4>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="sca-industry-card py-2">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/industries-5.png" alt="Aero Parts" class="img-fluid sca-industry-img">
                        <h4 class="sca-industry-name mt-3">Part of Defense Industry</h4>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="sca-industry-card py-2">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/industries-7.png" alt="Watch" class="img-fluid sca-industry-img">
                        <h4 class="sca-industry-name mt-3">Turbine Blade Inspection</h4>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="sca-industry-card py-2">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/industries-8.png" alt="Medical" class="img-fluid sca-industry-img">
                        <h4 class="sca-industry-name mt-3">Aero Parts</h4>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="col-12 col-md-6 col-lg-3 py-3">
                    <div class="sca-industry-card py-2">
                        <img src="assets/images/2d-surface-curvature-analysis-and-comparison/industries-8.png" alt="Automotive" class="img-fluid sca-industry-img">
                        <h4 class="sca-industry-name mt-3">Watch</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Industries We Serve Section Ends -->

    <!-- Solution Delivery Models Section Starts -->
    <section class="sca-delivery-models-section pb-3" style="background-color: #f6f6fa;">
        <div class="container-fluid sca-container py-4">
            <div class="row g-4">
                <!-- Left Div (CAPEX) -->
                <div class="col-lg-6">
                    <div class="sca-delivery-card sca-capex-card p-4 p-md-5">
                        <div class="d-flex flex-column flex-grow-1">
                            <h3 class="sca-delivery-title">INVEST IN YOUR OWN<br>SOLUTION (CAPEX)</h3>
                            <p class="sca-delivery-desc mt-3">Purchase a complete curvature analysis solution for your in-house metrology requirements.</p>
                            
                            <div class="d-flex flex-wrap flex-md-nowrap mt-4 flex-grow-1">
                                <div class="w-100" style="flex: 1 1 65%;">
                                    <ul class="sca-delivery-list">
                                        <li>
                                            <div class="sca-tick d-flex align-items-center justify-content-center flex-shrink-0">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            </div>
                                            <span>Metrology Grade 3D Scanner</span>
                                        </li>
                                        <li>
                                            <div class="sca-tick d-flex align-items-center justify-content-center flex-shrink-0">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            </div>
                                            <span>Inspection Software</span>
                                        </li>
                                        <li>
                                            <div class="sca-tick d-flex align-items-center justify-content-center flex-shrink-0">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            </div>
                                            <span>Training & Installation</span>
                                        </li>
                                        <li>
                                            <div class="sca-tick d-flex align-items-center justify-content-center flex-shrink-0">
                                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                            </div>
                                            <span>Technical Support</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-end justify-content-end ms-md-3 mt-3 mt-md-0" style="flex: 0 0 35%; max-width: 35%;">
                                    <img src="assets/images/2d-surface-curvature-analysis-and-comparison/capex-bg.png" alt="CAPEX Image" class="img-fluid sca-delivery-img">
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <a href="Book-demo-get-quote-for-3D-scanner.php" class="sca-delivery-btn w-100">GET A QUOTE</a>
                        </div>
                    </div>
                </div>

                <!-- Right Div (OPEX) -->
                <div class="col-lg-6">
                    <div class="sca-delivery-card sca-opex-card p-4 p-md-5">
                        <h3 class="sca-delivery-title">OUTSOURCE AS A SERVICE<br>(OPEX)</h3>
                        <p class="sca-delivery-desc mt-3">Let our experts handle your scanning, analysis, and reporting so your team can focus on engineering and manufacturing.</p>
                        
                        <ul class="sca-delivery-list mt-4">
                            <li>
                                <div class="sca-tick d-flex align-items-center justify-content-center flex-shrink-0">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>3D Scanning</span>
                            </li>
                            <li>
                                <div class="sca-tick d-flex align-items-center justify-content-center flex-shrink-0">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>Scan-to-CAD Alignment</span>
                            </li>
                            <li>
                                <div class="sca-tick d-flex align-items-center justify-content-center flex-shrink-0">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>Cross Section Analysis</span>
                            </li>
                            <li>
                                <div class="sca-tick d-flex align-items-center justify-content-center flex-shrink-0">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>2D Curvature Analysis</span>
                            </li>
                            <li>
                                <div class="sca-tick d-flex align-items-center justify-content-center flex-shrink-0">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </div>
                                <span>Inspection Reports</span>
                            </li>
                        </ul>
                        
                        <div class="mt-5 position-relative" style="z-index: 2;">
                            <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="sca-delivery-btn w-100">TALK TO OUR EXPERTS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Solution Delivery Models Section Ends -->

    <!-- FAQ Section Starts -->
    <section class="sca-faq-section py-5">
        <div class="container py-4">
            <h2 class="sca-faq-title mb-5">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="accordion sca-faq-accordion" id="scaFaqAccordion">
                
                <!-- FAQ 1 -->
                <div class="accordion-item sca-faq-item">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button collapsed sca-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                            What is the cost of handheld colour 3D scanning services?
                        </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#scaFaqAccordion">
                        <div class="accordion-body sca-faq-body">
                            The cost varies depending on the size and complexity of the object. Please contact us for a detailed quote.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item sca-faq-item">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed sca-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                            What is colour 3D Scanning, and how does it differ from industrial 3D Scanning?
                        </button>
                    </h2>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#scaFaqAccordion">
                        <div class="accordion-body sca-faq-body">
                            Colour 3D scanning captures both the geometry and the colour/texture of the object, while industrial 3D Scanning only captures the shape.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item sca-faq-item">
                    <h2 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed sca-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                            How long does it take when you do a 3D Scan with colour?
                        </button>
                    </h2>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#scaFaqAccordion">
                        <div class="accordion-body sca-faq-body">
                            Scanning time depends on the object's dimensions and details, typically ranging from a few minutes to a few hours.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item sca-faq-item">
                    <h2 class="accordion-header" id="faqHeading4">
                        <button class="accordion-button collapsed sca-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                            Who benefits from Precise3DM's Handheld Color 3D Scanning Services?
                        </button>
                    </h2>
                    <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#scaFaqAccordion">
                        <div class="accordion-body sca-faq-body">
                            Industries such as heritage preservation, healthcare, consumer products, and entertainment greatly benefit from accurate colour 3D models.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item sca-faq-item">
                    <h2 class="accordion-header" id="faqHeading5">
                        <button class="accordion-button collapsed sca-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                            Is your Colour 3D scanning service available for outdoor or indoor objects?
                        </button>
                    </h2>
                    <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#scaFaqAccordion">
                        <div class="accordion-body sca-faq-body">
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