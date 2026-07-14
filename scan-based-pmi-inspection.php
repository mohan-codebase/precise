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
    <title>Scan Based PMI Inspection | Precise3DM</title>
    <meta name="description" content="Discover professional scan-based PMI inspection services. Reliable measurement and analysis for your parts.">
    <meta name="keywords" content="PMI inspection, scan based inspection, 3D scanning, Precise3DM">
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
    <link rel="stylesheet" href="assets/css/scan-based-pmi-inspection.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include('includes/header.php'); ?>

    <!-- Main Content Starts Here -->

    <!-- Hero Section Starts -->
    <section class="sbpi-hero-section">
        <div class="sbpi-container container-fluid">
            <!-- Top Right: Contact Phone -->
            <div class="sbpi-hero-top-contact d-flex justify-content-end pt-4">
                <div class="sbpi-contact-item d-flex align-items-center">
                    <img src="assets/images/scan-based-pmi-inspection/phone-icon.png" alt="Phone" class="sbpi-contact-icon">
                    <div class="sbpi-contact-text">
                        <strong>Call us now</strong><br>
                        <a href="tel:+919840478347">+91 98404 78347</a> <span class="divider">|</span> <a href="tel:+916374406179">+91 63744 06179</a>
                    </div>
                </div>
            </div>

            <div class="row align-items-center mt-3 position-relative pb-4">
                <!-- Left Side -->
                <div class="col-lg-5 pb-4">
                    <h1 class="sbpi-hero-title">Scan Based PMI Inspection</h1>
                    <h3 class="sbpi-hero-subtitle">(PRODUCT MANUFACTURING INFORMATION)</h3>
                    <p class="sbpi-hero-desc">
                        Use PMI Information From CAD and
                        Quickly Measure Predefined Dimensions
                        on Scan Data
                    </p>

                    <div class="sbpi-hero-buttons d-flex flex-wrap mb-4">
                        <a href="Get-3d-scan-service-quote.php" style="text-decoration: none;">
                            <button type="button" class="sbpi-btn-primary">Request Inspection Service</button>
                        </a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" style="text-decoration: none;">
                            <button type="button" class="sbpi-btn-primary">Schedule Live Demo</button>
                        </a>
                    </div>

                    <!-- Email Section Directly Below Buttons -->
                    <div class="sbpi-contact-item d-flex align-items-center mb-2">
                        <img src="assets/images/scan-based-pmi-inspection/mail-logo.png" alt="Email" class="sbpi-contact-icon">
                        <div class="sbpi-contact-text">
                            <strong>Email us</strong><br>
                            <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> <span class="divider">|</span> <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-lg-7 pb-5">
                    <div class="sbpi-hero-bg-image"></div>
                </div>

                <!-- Absolute Right Stats -->
                <div class="sbpi-absolute-stats">
                    <div class="d-flex justify-content-center align-items-start text-center flex-wrap sbpi-hero-features">
                        <div class="sbpi-feature-item">
                            <img src="assets/images/scan-based-pmi-inspection/hero-stat-1.svg" alt="100% Digital Inspection" class="sbpi-feature-icon">
                            <p class="sbpi-feature-label">100% Digital<br>Inspection</p>
                        </div>
                        <div class="sbpi-feature-item">
                            <img src="assets/images/scan-based-pmi-inspection/hero-stat-2.svg" alt="Automated PMI Measurement" class="sbpi-feature-icon">
                            <p class="sbpi-feature-label">Automated<br>PMI<br>Measurement</p>
                        </div>
                        <div class="sbpi-feature-item">
                            <img src="assets/images/scan-based-pmi-inspection/hero-stat-3.svg" alt="High Accuracy Results" class="sbpi-feature-icon">
                            <p class="sbpi-feature-label">High Accuracy<br>Results</p>
                        </div>
                        <div class="sbpi-feature-item">
                            <img src="assets/images/scan-based-pmi-inspection/hero-stat-4.svg" alt="Consistent Process" class="sbpi-feature-icon">
                            <p class="sbpi-feature-label">Consistent<br>Process</p>
                        </div>
                        <div class="sbpi-feature-item">
                            <img src="assets/images/scan-based-pmi-inspection/hero-stat-5.svg" alt="Detailed Reporting" class="sbpi-feature-icon">
                            <p class="sbpi-feature-label">Detailed<br>Reporting</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->

    <!-- About Section Starts -->
    <section class="sbpi-about-section">
        <div class="sbpi-container container-fluid">
            <div class="sbpi-about-card">
                <p class="sbpi-about-text">
                    Leverage the full power of Product Manufacturing Information (PMI) to automate inspection. Import PMI from your CAD model and instantly measure all defined dimensions, GD&T, and annotations on 3D scan data with high accuracy and speed.
                </p>
            </div>
        </div>
    </section>
    <!-- About Section Ends -->

    <!-- How It Works Section Starts -->
    <section class="sbpi-how-section">
        <div class="sbpi-container container-fluid">
            <h2 class="sbpi-how-section-title">How Scan Based PMI Inspection Works</h2>
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4 mt-2">

                <!-- Card 1 -->
                <div class="col py-4">
                    <div class="sbpi-how-card">
                        <div class="sbpi-how-number">1</div>
                        <h4 class="sbpi-how-title">IMPORT CAD WITH PMI</h4>
                        <p class="sbpi-how-text">Import CAD model containing PMI (dimensions, GD&T, datums, notes).</p>
                        <img src="assets/images/scan-based-pmi-inspection/how-1.png" alt="Import CAD" class="sbpi-how-img">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col py-4">
                    <div class="sbpi-how-card">
                        <div class="sbpi-how-number">2</div>
                        <h4 class="sbpi-how-title">SCAN COMPONENT</h4>
                        <p class="sbpi-how-text">Capture the physical part using a high accuracy 3D scanner.</p>
                        <img src="assets/images/scan-based-pmi-inspection/how-2.png" alt="Scan Component" class="sbpi-how-img">
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col py-4">
                    <div class="sbpi-how-card">
                        <div class="sbpi-how-number">3</div>
                        <h4 class="sbpi-how-title">ALIGN TO CAD</h4>
                        <p class="sbpi-how-text">Align scan data to the CAD model using best-fit alignment.</p>
                        <img src="assets/images/scan-based-pmi-inspection/how-3.png" alt="Align to CAD" class="sbpi-how-img">
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col py-4">
                    <div class="sbpi-how-card">
                        <div class="sbpi-how-number">4</div>
                        <h4 class="sbpi-how-title">MEASURE PMI</h4>
                        <p class="sbpi-how-text">All PMI dimensions and GD&T are automatically measured on scan data.</p>
                        <img src="assets/images/scan-based-pmi-inspection/how-4.png" alt="Measure PMI" class="sbpi-how-img">
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col py-4">
                    <div class="sbpi-how-card">
                        <div class="sbpi-how-number">5</div>
                        <h4 class="sbpi-how-title">GENERATE REPORT</h4>
                        <p class="sbpi-how-text">Generate detailed inspection report with PASS / FAIL results.</p>
                        <img src="assets/images/scan-based-pmi-inspection/how-5.png" alt="Generate Report" class="sbpi-how-img">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- How It Works Section Ends -->

    <!-- What Can Be Measured Section Starts -->
    <section class="sbpi-what-section">
        <div class="sbpi-container container-fluid">
            <h2 class="sbpi-what-title">WHAT CAN BE MEASURED USING PMI?</h2>

            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-4 justify-content-center">

                <!-- Item 1 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-1.svg" alt="LINEAR DIMENSIONS">
                        </div>
                        <h4 class="sbpi-what-text">LINEAR<br>DIMENSIONS</h4>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-2.svg" alt="DIAMETERS & RADII">
                        </div>
                        <h4 class="sbpi-what-text">DIAMETERS<br>& RADII</h4>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-3.svg" alt="HOLE PATTERNS">
                        </div>
                        <h4 class="sbpi-what-text">HOLE<br>PATTERNS</h4>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-4.svg" alt="DATUMS & DATUM TARGETS">
                        </div>
                        <h4 class="sbpi-what-text">DATUMS<br>& DATUM TARGETS</h4>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-5.svg" alt="GD&T">
                        </div>
                        <h4 class="sbpi-what-text">GD&T</h4>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-6.svg" alt="ANGLES">
                        </div>
                        <h4 class="sbpi-what-text">ANGLES</h4>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-7.svg" alt="PROFILE TOLERANCES">
                        </div>
                        <h4 class="sbpi-what-text">PROFILE<br>TOLERANCES</h4>
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-8.svg" alt="POSITION TOLERANCES">
                        </div>
                        <h4 class="sbpi-what-text">POSITION<br>TOLERANCES</h4>
                    </div>
                </div>

                <!-- Item 9 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-9.svg" alt="RUNOUT TOLERANCES">
                        </div>
                        <h4 class="sbpi-what-text">RUNOUT<br>TOLERANCES</h4>
                    </div>
                </div>

                <!-- Item 10 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-8.svg" alt="SYMMETRY">
                        </div>
                        <h4 class="sbpi-what-text">SYMMETRY</h4>
                    </div>
                </div>

                <!-- Item 11 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-8.svg" alt="THICKNESS">
                        </div>
                        <h4 class="sbpi-what-text">THICKNESS</h4>
                    </div>
                </div>

                <!-- Item 12 -->
                <div class="col py-3">
                    <div class="sbpi-what-item">
                        <div class="sbpi-what-icon-circle">
                            <img src="assets/images/scan-based-pmi-inspection/what-8.svg" alt="NOTES & OTHER ANNOTATIONS">
                        </div>
                        <h4 class="sbpi-what-text">NOTES & OTHER<br>ANNOTATIONS</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- What Can Be Measured Section Ends -->

    <!-- Why PMI Section Starts -->
    <section class="sbpi-why-section">
        <div class="sbpi-container container-fluid">
            <div class="row g-5 align-items-center">

                <!-- Left Side -->
                <div class="col-lg-6">
                    <div class="sbpi-why-left-card">
                        <h2 class="sbpi-why-title">WHY USE PMI FOR INSPECTION?</h2>
                        <ul class="sbpi-why-list">
                            <li>Eliminates manual dimension creation</li>
                            <li>100% reliable reference from CAD</li>
                            <li>Faster inspection setup</li>
                            <li>Automatically updates with CAD changes</li>
                            <li>Reduces human error</li>
                            <li>Consistent and repeatable process</li>
                            <li>Complete traceability and documentation</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-lg-6">
                    <h2 class="sbpi-report-title">PMI Inspection Report Example</h2>
                    <div class="table-responsive sbpi-report-table-wrapper">
                        <table class="table sbpi-report-table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th class="bg-dark-header">ID</th>
                                    <th>TYPE</th>
                                    <th>NOMINAL</th>
                                    <th>MEASURED</th>
                                    <th>DEVIATION</th>
                                    <th>TOLERANCE</th>
                                    <th>STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>D1</strong></td>
                                    <td>Ø</td>
                                    <td>12.50</td>
                                    <td>12.48</td>
                                    <td>-0.02</td>
                                    <td>±0.10</td>
                                    <td class="status-pass">PASS</td>
                                </tr>
                                <tr>
                                    <td><strong>D2</strong></td>
                                    <td>Ø</td>
                                    <td>8.00</td>
                                    <td>8.06</td>
                                    <td>+0.06</td>
                                    <td>±0.10</td>
                                    <td class="status-pass">PASS</td>
                                </tr>
                                <tr>
                                    <td><strong>D3</strong></td>
                                    <td>Ø</td>
                                    <td>0.20<br>A B M</td>
                                    <td>0.18</td>
                                    <td>-0.02</td>
                                    <td>0.20</td>
                                    <td class="status-pass">PASS</td>
                                </tr>
                                <tr>
                                    <td><strong>D4</strong></td>
                                    <td>//</td>
                                    <td>0.05 A</td>
                                    <td>0.04</td>
                                    <td>-0.01</td>
                                    <td>0.05</td>
                                    <td class="status-pass">PASS</td>
                                </tr>
                                <tr>
                                    <td><strong>D5</strong></td>
                                    <td>&#x22A5;</td>
                                    <td>0.10 A</td>
                                    <td>0.09</td>
                                    <td>-0.01</td>
                                    <td>0.10</td>
                                    <td class="status-pass">PASS</td>
                                </tr>
                                <tr>
                                    <td><strong>D6</strong></td>
                                    <td>&#x2220;</td>
                                    <td>90.00&deg;</td>
                                    <td>90.02&deg;</td>
                                    <td>+0.02&deg;</td>
                                    <td>±0.20&deg;</td>
                                    <td class="status-pass">PASS</td>
                                </tr>
                                <tr>
                                    <td><strong>D7</strong></td>
                                    <td>&mdash;</td>
                                    <td>18.50</td>
                                    <td>18.48</td>
                                    <td>-0.02</td>
                                    <td>±0.10</td>
                                    <td class="status-pass">PASS</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Why PMI Section Ends -->

    <!-- Software Used Section Starts -->
    <section class="sbpi-software-section">
        <div class="sbpi-container container-fluid">
            <h2 class="sbpi-software-main-title">Software Used</h2>

            <div class="row align-items-center mt-5">
                <!-- Left Side -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h3 class="sbpi-software-subtitle">Geomagic Control X</h3>
                    <ul class="sbpi-software-list mt-4">
                        <li><span class="sbpi-tick-circle">&#10003;</span> Native PMI Support</li>
                        <li><span class="sbpi-tick-circle">&#10003;</span> Automated PMI Measurement</li>
                        <li><span class="sbpi-tick-circle">&#10003;</span> GD&T Evaluation</li>
                        <li><span class="sbpi-tick-circle">&#10003;</span> Scan to CAD Comparison</li>
                        <li><span class="sbpi-tick-circle">&#10003;</span> Inspection Reporting</li>
                        <li><span class="sbpi-tick-circle">&#10003;</span> SPC & Batch Inspection</li>
                    </ul>
                </div>

                <!-- Right Side -->
                <div class="col-lg-7 text-center">
                    <img src="assets/images/scan-based-pmi-inspection/software-used.png" alt="Geomagic Control X" class="img-fluid">
                </div>
            </div>

            <!-- Button Below -->
            <div class="text-center mt-5">
                <a href="geomagic-control-x-3d-inspection-software.php" class="sbpi-know-more-btn">Know More</a>
            </div>
        </div>
    </section>
    <!-- Software Used Section Ends -->

    <!-- Recommended Scanners Section Starts -->
    <section class="sbpi-scanners-section">
        <div class="sbpi-container container-fluid">
            <h2 class="sbpi-scanners-main-title">Recommended 3D Scanners</h2>

            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4 mt-2">
                <!-- Scanner 1 -->
                <div class="col py-3">
                    <div class="sbpi-scanner-card">
                        <h4 class="sbpi-scanner-title">AutoScan Inspec 2</h4>
                        <div class="sbpi-scanner-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/scanner-1.png" alt="AutoScan Inspec 2" class="sbpi-scanner-img">
                        </div>
                        <div class="sbpi-scanner-list-wrapper">
                            <ul class="sbpi-scanner-list">
                                <li>Up to 200 mm</li>
                                <li>High Accuracy</li>
                                <li>Small Parts</li>
                            </ul>
                        </div>
                        <a href="automatic-desktop-3d-scanner.php" class="sbpi-scanner-btn">Know More</a>
                    </div>
                </div>

                <!-- Scanner 2 -->
                <div class="col py-3">
                    <div class="sbpi-scanner-card">
                        <h4 class="sbpi-scanner-title">OptimScan 5M Plus</h4>
                        <div class="sbpi-scanner-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/scanner-2.png" alt="OptimScan 5M Plus" class="sbpi-scanner-img">
                        </div>
                        <div class="sbpi-scanner-list-wrapper">
                            <ul class="sbpi-scanner-list">
                                <li>Up to 200 mm</li>
                                <li>High Accuracy</li>
                                <li>Small Parts</li>
                            </ul>
                        </div>
                        <a href="OptimScan5M-Plus.php" class="sbpi-scanner-btn">Know More</a>
                    </div>
                </div>

                <!-- Scanner 3 -->
                <div class="col py-3">
                    <div class="sbpi-scanner-card">
                        <h4 class="sbpi-scanner-title">FreeScan Combo</h4>
                        <div class="sbpi-scanner-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/scanner-3.png" alt="FreeScan Combo" class="sbpi-scanner-img">
                        </div>
                        <div class="sbpi-scanner-list-wrapper">
                            <ul class="sbpi-scanner-list">
                                <li>Up to 200 mm</li>
                                <li>High Accuracy</li>
                                <li>Small Parts</li>
                            </ul>
                        </div>
                        <a href="FreeScan-Combo.php" class="sbpi-scanner-btn">Know More</a>
                    </div>
                </div>

                <!-- Scanner 4 -->
                <div class="col py-3">
                    <div class="sbpi-scanner-card">
                        <h4 class="sbpi-scanner-title">FreeScan Trio</h4>
                        <div class="sbpi-scanner-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/scanner-4.png" alt="FreeScan Trio" class="sbpi-scanner-img">
                        </div>
                        <div class="sbpi-scanner-list-wrapper">
                            <ul class="sbpi-scanner-list">
                                <li>Up to 200 mm</li>
                                <li>High Accuracy</li>
                                <li>Small Parts</li>
                            </ul>
                        </div>
                        <a href="freescan-trio-triple-camera-handheld-laser-3D-scanner.php" class="sbpi-scanner-btn">Know More</a>
                    </div>
                </div>

                <!-- Scanner 5 -->
                <div class="col py-3">
                    <div class="sbpi-scanner-card">
                        <h4 class="sbpi-scanner-title">FreeScan Omni</h4>
                        <div class="sbpi-scanner-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/scanner-5.png" alt="FreeScan Omni" class="sbpi-scanner-img">
                        </div>
                        <div class="sbpi-scanner-list-wrapper">
                            <ul class="sbpi-scanner-list">
                                <li>Up to 200 mm</li>
                                <li>High Accuracy</li>
                                <li>Small Parts</li>
                            </ul>
                        </div>
                        <a href="freescan-omni.php" class="sbpi-scanner-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recommended Scanners Section Ends -->

    <!-- Deliverables Section Starts -->
    <section class="sbpi-deliverables-section">
        <div class="sbpi-container container-fluid">
            <h2 class="sbpi-deliverables-main-title">Deliverables</h2>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-4 mt-2">
                <!-- Card 1 -->
                <div class="col py-3">
                    <div class="sbpi-deliverables-card">
                        <h4 class="sbpi-deliverables-title">Complete 3D<br>Scan Data</h4>
                        <div class="sbpi-deliverables-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/deliverables-1.png" alt="Complete 3D Scan Data" class="sbpi-deliverables-img">
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col py-3">
                    <div class="sbpi-deliverables-card">
                        <h4 class="sbpi-deliverables-title">PMI Inspection<br>Report</h4>
                        <div class="sbpi-deliverables-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/deliverables-2.png" alt="PMI Inspection Report" class="sbpi-deliverables-img">
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col py-3">
                    <div class="sbpi-deliverables-card">
                        <h4 class="sbpi-deliverables-title">Dimensional<br>Deviation<br>(PASS / FAIL)<br>Report</h4>
                        <div class="sbpi-deliverables-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/deliverables-3.png" alt="Dimensional Deviation Report" class="sbpi-deliverables-img">
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col py-3">
                    <div class="sbpi-deliverables-card">
                        <h4 class="sbpi-deliverables-title">Report<br>(PDF Format)</h4>
                        <div class="sbpi-deliverables-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/deliverables-4.png" alt="Report (PDF Format)" class="sbpi-deliverables-img">
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col py-3">
                    <div class="sbpi-deliverables-card">
                        <h4 class="sbpi-deliverables-title">Report<br>(PPT Format)</h4>
                        <div class="sbpi-deliverables-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/deliverables-5.png" alt="Report (PPT Format)" class="sbpi-deliverables-img">
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="col py-3">
                    <div class="sbpi-deliverables-card">
                        <h4 class="sbpi-deliverables-title">Report<br>(Excel Format)</h4>
                        <div class="sbpi-deliverables-img-wrapper">
                            <img src="assets/images/scan-based-pmi-inspection/deliverables-6.png" alt="Report (Excel Format)" class="sbpi-deliverables-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deliverables Section Ends -->

    <!-- CAPEX / OPEX Section Starts -->
    <section class="sbpi-capex-opex-section">
        <div class="sbpi-container container-fluid">
            <div class="row g-4">
                <!-- Option 1: CAPEX -->
                <div class="col-lg-6">
                    <div class="sbpi-co-card sbpi-capex-card">
                        <h3 class="sbpi-co-title">OPTION 1: CAPEX</h3>
                        <h4 class="sbpi-co-subtitle">BUILD YOUR OWN INSPECTION<br>CAPABILITY</h4>

                        <ul class="sbpi-co-list">
                            <li><span class="sbpi-capex-tick">&#10004;</span> Industrial 3D Scanner</li>
                            <li><span class="sbpi-capex-tick">&#10004;</span> Geomagic Control X Software</li>
                            <li><span class="sbpi-capex-tick">&#10004;</span> Training & Implementation</li>
                            <li><span class="sbpi-capex-tick">&#10004;</span> Technical Support</li>
                            <li><span class="sbpi-capex-tick">&#10004;</span> Long Term ROI</li>
                        </ul>

                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="sbpi-co-btn">Talk to Product Expert</a>
                    </div>
                </div>

                <!-- Option 2: OPEX -->
                <div class="col-lg-6">
                    <div class="sbpi-co-card sbpi-opex-card">
                        <h3 class="sbpi-co-title">OPTION 2: OPEX</h3>
                        <h4 class="sbpi-co-subtitle">OUTSOURCE PMI INSPECTION AS A<br>SERVICE</h4>

                        <ul class="sbpi-co-list">
                            <li><span class="sbpi-capex-tick">&#10004;</span> Send Your Parts</li>
                            <li><span class="sbpi-capex-tick">&#10004;</span> Onsite or In-House Scanning</li>
                            <li><span class="sbpi-capex-tick">&#10004;</span> Expert PMI Inspection</li>
                            <li><span class="sbpi-capex-tick">&#10004;</span> Fast Turnaround Time</li>
                            <li><span class="sbpi-capex-tick">&#10004;</span> No Software Investment</li>
                        </ul>

                        <a href="Get-3d-scan-service-quote.php" class="sbpi-co-btn">Request Inspection Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CAPEX / OPEX Section Ends -->

    <!-- Testimonial Section Starts -->
    <section class="sbpi-testimonial-section">
        <div class="sbpi-container container-fluid">
            <div class="sbpi-testimonial-container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-5 justify-content-center">

                    <!-- Item 1 -->
                    <div class="col">
                        <div class="sbpi-testimonial-item">
                            <img src="assets/images/scan-based-pmi-inspection/Testimonial-1.svg" alt="50+ Industrial 3D Scanners" class="sbpi-testimonial-icon">
                            <div class="sbpi-testimonial-title">50+</div>
                            <div class="sbpi-testimonial-subtitle">INDUSTRIAL 3D<br>SCANNERS</div>
                            <div class="sbpi-testimonial-text">Installed<br>Across India</div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col">
                        <div class="sbpi-testimonial-item">
                            <img src="assets/images/scan-based-pmi-inspection/testimonial-2.svg" alt="5000+ Components Inspected" class="sbpi-testimonial-icon">
                            <div class="sbpi-testimonial-title">5000+</div>
                            <div class="sbpi-testimonial-subtitle">COMPONENTS<br>INSPECTED</div>
                            <div class="sbpi-testimonial-text">Across<br>Multiple<br>Industries</div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col">
                        <div class="sbpi-testimonial-item">
                            <img src="assets/images/scan-based-pmi-inspection/testimonial-3.svg" alt="100+ Manufacturing Customers" class="sbpi-testimonial-icon">
                            <div class="sbpi-testimonial-title">100+</div>
                            <div class="sbpi-testimonial-subtitle">MANUFACTURING<br>CUSTOMERS</div>
                            <div class="sbpi-testimonial-text">Trusted by<br>OEMs &<br>Suppliers</div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col">
                        <div class="sbpi-testimonial-item">
                            <img src="assets/images/scan-based-pmi-inspection/testimonial-4.svg" alt="Pan India Support" class="sbpi-testimonial-icon">
                            <!-- No title for this one -->
                            <div class="sbpi-testimonial-subtitle" style="margin-top: 10px;">PAN INDIA<br>SUPPORT</div>
                            <div class="sbpi-testimonial-text">Sales, service<br>& Training<br>Network</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section Ends -->

    <!-- Contact Section Starts -->
    <section class="sbpi-contact-section">
        <div class="sbpi-container container-fluid">
            <div class="row">
                <!-- Left Side -->
                <div class="col-lg-7">
                    <h2 class="sbpi-contact-title">Ready to Convert Complex 3D Shapes into Accurate 2D Cutting Patterns?</h2>
                    <p class="sbpi-contact-text">
                        Whether you need outsourced pattern development services or want to establish a complete in-house scan-to-pattern workflow using ExactFlat and professional 3D scanners, Precise3DM can help.
                    </p>

                    <div class="sbpi-contact-info-block">
                        <img src="assets/images/scan-based-pmi-inspection/phone-icon.png" alt="Phone" class="sbpi-contact-icon">
                        <div class="sbpi-contact-details">
                            <span class="sbpi-contact-label">Call us now</span>
                            <span><a href="tel:+919840478347" style="color:inherit; text-decoration:none;">+91 98404 78347</a> <span style="color:#ff931e; margin:0 5px;">|</span> <a href="tel:+916374406179" style="color:inherit; text-decoration:none;">+91 63744 06179</a></span>
                        </div>
                    </div>

                    <div class="sbpi-contact-info-block">
                        <img src="assets/images/scan-based-pmi-inspection/mail-logo.png" alt="Mail" class="sbpi-contact-icon">
                        <div class="sbpi-contact-details">
                            <span class="sbpi-contact-label">Email us</span>
                            <span><a href="mailto:sm@precise3dm.com" style="color:inherit; text-decoration:none;">sm@precise3dm.com</a> <span style="color:#ff931e; margin:0 5px;">|</span> <a href="mailto:sales@precise3dm.com" style="color:inherit; text-decoration:none;">sales@precise3dm.com</a></span>
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-lg-5">
                    <div class="sbpi-contact-buttons-wrapper">
                        <a href="#" class="sbpi-contact-btn sbpi-contact-btn-solid">Upload Scan Data</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="sbpi-contact-btn sbpi-contact-btn-outline">Schedule Live Demo</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="sbpi-contact-btn sbpi-contact-btn-solid">Request Technical Consultation</a>
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="sbpi-contact-btn sbpi-contact-btn-outline">Speak to a Pattern Development Expert Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section Ends -->

    <!-- FAQ Section Starts -->
    <section class="sbpi-faq-section">
        <div class="sbpi-container container-fluid">
            <h2 class="sbpi-faq-title">FREQUENTLY ASKED QUESTIONS</h2>
            <div class="accordion sbpi-faq-accordion" id="sbpiFaqAccordion">

                <!-- FAQ 1 -->
                <div class="accordion-item sbpi-faq-item">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button collapsed sbpi-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1">
                            What is the cost of handheld colour 3D scanning services?
                        </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#sbpiFaqAccordion">
                        <div class="accordion-body sbpi-faq-body">
                            Please contact us for a customized quote based on the size and complexity of your project.
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="accordion-item sbpi-faq-item">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed sbpi-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                            What is colour 3D Scanning, and how does it differ from industrial 3D Scanning?
                        </button>
                    </h2>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#sbpiFaqAccordion">
                        <div class="accordion-body sbpi-faq-body">
                            Colour 3D scanning captures both the geometry and the colour/texture of the object, while industrial 3D Scanning only captures the shape.
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="accordion-item sbpi-faq-item">
                    <h2 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed sbpi-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                            How long does it take when you do a 3D Scan with colour?
                        </button>
                    </h2>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#sbpiFaqAccordion">
                        <div class="accordion-body sbpi-faq-body">
                            The time required depends on the size and complexity of the object. Simple objects take a few minutes, while complex ones may take hours.
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="accordion-item sbpi-faq-item">
                    <h2 class="accordion-header" id="faqHeading4">
                        <button class="accordion-button collapsed sbpi-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                            Who benefits from Precise3DM's Handheld Color 3D Scanning Services?
                        </button>
                    </h2>
                    <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#sbpiFaqAccordion">
                        <div class="accordion-body sbpi-faq-body">
                            Various industries including manufacturing, architecture, healthcare, and heritage preservation can benefit from our high-quality scanning services.
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="accordion-item sbpi-faq-item">
                    <h2 class="accordion-header" id="faqHeading5">
                        <button class="accordion-button collapsed sbpi-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                            Is your Colour 3D scanning service available for outdoor or indoor objects?
                        </button>
                    </h2>
                    <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#sbpiFaqAccordion">
                        <div class="accordion-body sbpi-faq-body">
                            Yes, our services are highly flexible and available for both indoor and outdoor objects, depending on environmental conditions like lighting.
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