<?php
$title = "3D Scan to Parametric CAD Modeling";
$description = "3D Scan to Parametric CAD Modeling - Convert Physical Parts into Fully Editable CAD Models.";
$keywords = "3D Scan, Parametric CAD Modeling, Reverse Engineering, Geomagic Design X, CAD Models";
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
    <link rel="stylesheet" href="assets/css/3d-scan-to-parametric-cad-modeling.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>
    <?php include('includes/header.php'); ?>

    <!-- =========================================================
         HERO SECTION
         ========================================================= -->
    <section class="hero-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">3D Scan to <br><span>Parametric<br>CAD Modeling</span></h1>
                    <h3 class="hero-subtitle1">Convert Physical Parts into Fully Editable CAD Models</h3>
                    <h4 class="hero-subtitle2">Reverse Engineering Services, Geomagic Design X<br>Software & Industrial 3D Scanners</h4>

                    <p class="hero-text">Every product starts as a CAD model.</p>
                    <p class="hero-text">But what happens when the original CAD is lost, outdated,<br>unavailable, or the only thing you have is a physical component?</p>
                    <p class="hero-text">Precise3DM helps manufacturers convert physical parts into fully<br>editable feature-based CAD models using industrial 3D scanning<br>and Geomagic Design X reverse engineering software.</p>

                    <div class="hero-buttons d-flex gap-4 mt-4">
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="hero-btn">Request Technical Consultation</a>
                        <a href="#" class="hero-btn">Upload CAD Models</a>
                        <a href="Book-demo-get-quote-for-3D-scanner.php" class="hero-btn">Book Live Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         WHAT IS SECTION
         ========================================================= -->
    <section class="what-is-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="what-is-title text-center mb-5">What is 3d Scan to Parametric <span>CAD Modeling?</span></h2>

            <div class="row g-4 align-items-stretch">
                <!-- Left Column -->
                <div class="col-lg-5">
                    <div class="process-wrapper">
                        <!-- Step 1 -->
                        <div class="process-step">
                            <h4 class="process-title">Physical<br>Component</h4>
                            <div class="process-card">
                                <img src="assets/images/3d-scan-to-parametric-cad-modeling/what1.png" alt="Physical Component" class="img-fluid rounded">
                            </div>
                        </div>

                        <!-- Arrow -->
                        <div class="process-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <!-- Step 2 -->
                        <div class="process-step">
                            <h4 class="process-title">3D Scan Mesh<br>(STL File)</h4>
                            <div class="process-card">
                                <img src="assets/images/3d-scan-to-parametric-cad-modeling/what2.png" alt="3D Scan Mesh" class="img-fluid rounded">
                            </div>
                        </div>

                        <!-- Arrow -->
                        <div class="process-arrow">
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>

                        <!-- Step 3 -->
                        <div class="process-step">
                            <h4 class="process-title">Parametric CAD<br>Model</h4>
                            <div class="process-card">
                                <img src="assets/images/3d-scan-to-parametric-cad-modeling/what3.png" alt="Parametric CAD Model" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Middle Column -->
                <div class="col-lg-4 d-flex flex-column justify-content-center py-4">
                    <p class="middle-text mb-4">Using a high-accuracy industrial 3D scanner, the physical component is digitized into a 3D mesh or STL model. Advanced reverse engineering software such as Geomagic Design X is then used to convert this scan data into a fully editable parametric CAD model.</p>

                    <div class="features-box">
                        <h5 class="features-title">Unlike STL Files, Parametric CAD Models Contain:</h5>
                        <div class="row mt-3">
                            <div class="col-6">
                                <ul class="custom-check-list">
                                    <li><i class="fa-solid fa-check check-icon"></i> Sketches</li>
                                    <li><i class="fa-solid fa-check check-icon"></i> Constraints</li>
                                    <li><i class="fa-solid fa-check check-icon"></i> Design History</li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul class="custom-check-list">
                                    <li><i class="fa-solid fa-check check-icon"></i> Features</li>
                                    <li><i class="fa-solid fa-check check-icon"></i> Dimensions</li>
                                    <li><i class="fa-solid fa-check check-icon"></i> Parametric Relationships</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-3">
                    <div class="suitable-for-card h-100">
                        <h4 class="suitable-title">Suitable For</h4>
                        <ul class="suitable-list mt-3">
                            <li>Legacy Components</li>
                            <li>Competitor Products</li>
                            <li>Tooling & Molds</li>
                            <li>Castings & Forgings</li>
                            <li>Automotive Parts</li>
                            <li>Aerospace Components</li>
                            <li>Prototype Components</li>
                            <li>And more...</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         HOW THE PROCESS WORKS SECTION
         ========================================================= -->
    <section class="how-process-section">
        <div class="container-fluid" style="padding: 0 3%;">
            <h2 class="how-process-title text-center">How the <span>process works</span></h2>

            <div class="how-process-container">
                <!-- Step 1 -->
                <div class="how-process-step">
                    <div class="how-step-number">1</div>
                    <div class="how-card">
                        <div class="how-card-title">3D Scan Data</div>
                        <img src="assets/images/3d-scan-to-parametric-cad-modeling/how1.png" alt="3D Scan Data">
                    </div>
                </div>

                <div class="how-process-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <!-- Step 2 -->
                <div class="how-process-step">
                    <div class="how-step-number">2</div>
                    <div class="how-card">
                        <div class="how-card-title">Region<br>Segmentation</div>
                        <img src="assets/images/3d-scan-to-parametric-cad-modeling/how2.png" alt="Region Segmentation">
                    </div>
                </div>

                <div class="how-process-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <!-- Step 3 -->
                <div class="how-process-step">
                    <div class="how-step-number">3</div>
                    <div class="how-card">
                        <div class="how-card-title">Feature Extraction</div>
                        <img src="assets/images/3d-scan-to-parametric-cad-modeling/how3.png" alt="Feature Extraction">
                    </div>
                </div>

                <div class="how-process-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <!-- Step 4 -->
                <div class="how-process-step">
                    <div class="how-step-number">4</div>
                    <div class="how-card">
                        <div class="how-card-title">CAD Modeling</div>
                        <img src="assets/images/3d-scan-to-parametric-cad-modeling/how4.png" alt="CAD Modeling">
                    </div>
                </div>

                <div class="how-process-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <!-- Step 5 -->
                <div class="how-process-step">
                    <div class="how-step-number">5</div>
                    <div class="how-card">
                        <div class="how-card-title">Accuracy &<br>Deviation Validation</div>
                        <img src="assets/images/3d-scan-to-parametric-cad-modeling/how5.png" alt="Accuracy & Deviation Validation">
                    </div>
                </div>

                <div class="how-process-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <!-- Step 6 -->
                <div class="how-process-step">
                    <div class="how-step-number">6</div>
                    <div class="how-card">
                        <div class="how-card-title">Step 6</div>
                        <img src="assets/images/3d-scan-to-parametric-cad-modeling/how6.png" alt="Step 6">
                    </div>
                </div>

                <div class="how-process-arrow"><i class="fa-solid fa-arrow-right"></i></div>

                <!-- Step 7 -->
                <div class="how-process-step">
                    <div class="how-step-number">7</div>
                    <div class="how-card">
                        <div class="how-card-title">Step 7</div>
                        <img src="assets/images/3d-scan-to-parametric-cad-modeling/how7.png" alt="Step 7">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         STL VS PARAMETRIC CAD SECTION
         ========================================================= -->
    <section class="stl-vs-cad-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="stl-vs-cad-title text-center mb-5">STL <span>vs</span> Parametric CAD</h2>

            <div class="stl-cad-table-container">
                <table class="table text-center stl-cad-table">
                    <thead>
                        <tr>
                            <th class="stl-header">STL Mesh File</th>
                            <th class="cad-header">Parametric CAD Model</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="image-row">
                            <td><img src="assets/images/3d-scan-to-parametric-cad-modeling/stl.png" alt="STL Mesh"></td>
                            <td><img src="assets/images/3d-scan-to-parametric-cad-modeling/parametric.png" alt="Parametric CAD"></td>
                        </tr>
                        <tr>
                            <td><span class="icon-x">&#10008;</span> Difficult to Edit</td>
                            <td><span class="icon-check">&#10004;</span> Fully Editable</td>
                        </tr>
                        <tr>
                            <td><span class="icon-x">&#10008;</span> No Design History</td>
                            <td><span class="icon-check">&#10004;</span> Complete Feature Tree</td>
                        </tr>
                        <tr>
                            <td><span class="icon-x">&#10008;</span> Limited Modification Capability</td>
                            <td><span class="icon-check">&#10004;</span> Unlimited Modifications</td>
                        </tr>
                        <tr>
                            <td><span class="icon-x">&#10008;</span> No Engineering Features</td>
                            <td><span class="icon-check">&#10004;</span> Contains Engineering Features</td>
                        </tr>
                        <tr>
                            <td><span class="icon-x">&#10008;</span> Difficult for Simulation</td>
                            <td><span class="icon-check">&#10004;</span> Suitable for CAE & FEA</td>
                        </tr>
                        <tr>
                            <td><span class="icon-x">&#10008;</span> Limited Assembly Usage</td>
                            <td><span class="icon-check">&#10004;</span> Assembly Ready</td>
                        </tr>
                        <tr>
                            <td><span class="icon-x">&#10008;</span> Poor Documentation Support</td>
                            <td><span class="icon-check">&#10004;</span> Drawing Creation Ready</td>
                        </tr>
                        <tr>
                            <td><span class="icon-x">&#10008;</span> Not Ideal for Manufacturing</td>
                            <td><span class="icon-check">&#10004;</span> Manufacturing Ready</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- =========================================================
         A QUOTE SECTION
         ========================================================= -->
    <section class="a-quote-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="quote-container">
                <div class="quote-icon-circle">
                    <img src="assets/images/3d-scan-to-parametric-cad-modeling/quotes-icon.png" alt="Quote">
                </div>
                <div class="quote-text-wrapper">
                    <p>A mesh file tells you what the shape looks like.</p>
                    <p>A parametric CAD model tells you how the shape was engineered.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         TYPICAL APPLICATIONS SECTION
         ========================================================= -->
    <section class="typical-applications-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <h2 class="typical-title text-center mb-5">Typical <span>Applications</span></h2>
            
            <div class="row justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="typical-card">
                        <div class="typical-img-wrapper">
                            <img src="assets/images/3d-scan-to-parametric-cad-modeling/typical1.png" alt="Legacy Part Reconstruction">
                        </div>
                        <h4 class="typical-card-title">Legacy Part<br>Reconstruction</h4>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="typical-card">
                        <div class="typical-img-wrapper">
                            <img src="assets/images/3d-scan-to-parametric-cad-modeling/typical2.png" alt="Automotive Reverse Engineering">
                        </div>
                        <h4 class="typical-card-title">Automotive Reverse<br>Engineering</h4>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="typical-card">
                        <div class="typical-img-wrapper">
                            <img src="assets/images/3d-scan-to-parametric-cad-modeling/typical3.png" alt="Tool & Die Reconstruction">
                        </div>
                        <h4 class="typical-card-title">Tool & Die<br>Reconstruction</h4>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="typical-card">
                        <div class="typical-img-wrapper">
                            <img src="assets/images/3d-scan-to-parametric-cad-modeling/typical4.png" alt="Product Improvement & Redesign">
                        </div>
                        <h4 class="typical-card-title">Product Improvement<br>& Redesign</h4>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-lg col-md-4 col-sm-6 mb-4">
                    <div class="typical-card">
                        <div class="typical-img-wrapper">
                            <img src="assets/images/3d-scan-to-parametric-cad-modeling/typical5.png" alt="Competitive Product Benchmarking">
                        </div>
                        <h4 class="typical-card-title">Competitive Product<br>Benchmarking</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         SOFTWARE & SCANNERS SECTION
         ========================================================= -->
    <section class="software-scanners-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row">
                
                <!-- Left Side: Software Used -->
                <div class="col-lg-5 mb-5">
                    <h2 class="section-title text-center mb-5">Software <span>Used</span></h2>
                    
                    <div class="software-logo-wrapper d-flex align-items-center mb-3">
                        <img src="assets/images/3d-scan-to-parametric-cad-modeling/software-logo.png" alt="Software Logo" class="software-logo-img me-3">
                        <h3 class="software-name m-0">Geomagic<sup>®</sup> Design X<sup>™</sup></h3>
                    </div>
                    
                    <p class="software-desc mb-4">The world's leading reverse engineering software for converting scan data into CAD.</p>
                    
                    <div class="row mb-5">
                        <div class="col-sm-6 mb-3">
                            <ul class="custom-check-list mb-0">
                                <li><span class="icon-check">&#10004;</span> Automatic Feature Recognition</li>
                                <li><span class="icon-check">&#10004;</span> Sketch Extraction</li>
                                <li><span class="icon-check">&#10004;</span> Parametric Modeling</li>
                                <li><span class="icon-check">&#10004;</span> Hybrid Modeling</li>
                                <li><span class="icon-check">&#10004;</span> Surface Modeling</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <ul class="custom-check-list mb-0">
                                <li><span class="icon-check">&#10004;</span> Direct CAD Export</li>
                                <li><span class="icon-check">&#10004;</span> Design Intent Recreation</li>
                                <li><span class="icon-check">&#10004;</span> Scan-to-Gold Workflow</li>
                                <li><span class="icon-check">&#10004;</span> And much more...</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="section-title text-start mb-4">Supported <span>CAD Platforms</span></h2>
                    <div class="platforms-wrapper row align-items-center">
                        <div class="col-4 mb-4"><img src="assets/images/3d-scan-to-parametric-cad-modeling/platform1.png" alt="Platform 1" class="img-fluid"></div>
                        <div class="col-4 mb-4"><img src="assets/images/3d-scan-to-parametric-cad-modeling/platform2.png" alt="Platform 2" class="img-fluid"></div>
                        <div class="col-4 mb-4"><img src="assets/images/3d-scan-to-parametric-cad-modeling/platform3.png" alt="Platform 3" class="img-fluid"></div>
                        <div class="col-4 mb-4"><img src="assets/images/3d-scan-to-parametric-cad-modeling/platform4.png" alt="Platform 4" class="img-fluid"></div>
                        <div class="col-4 mb-4"><img src="assets/images/3d-scan-to-parametric-cad-modeling/platform5.png" alt="Platform 5" class="img-fluid"></div>
                    </div>
                </div>

                <!-- Right Side: Industrial Scanners -->
                <div class="col-lg-7">
                    <h2 class="section-title text-center mb-5">Industrial 3D Scanners Available <br>from <span>Precise3DM</span></h2>
                    
                    <div class="row">
                        <!-- Scanner 1 -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="scanner-card h-100">
                                <div class="scanner-img-box">
                                    <img src="assets/images/3d-scan-to-parametric-cad-modeling/scanner1.png" alt="FreeScan Combo" class="img-fluid">
                                </div>
                                <div class="scanner-body">
                                    <h4 class="scanner-title">FreeScan Combo</h4>
                                    <p class="scanner-text">Precision reverse engineering for small to medium parts.</p>
                                    <a href="FreeScan-Combo.php" class="scanner-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Scanner 2 -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="scanner-card h-100">
                                <div class="scanner-img-box">
                                    <img src="assets/images/3d-scan-to-parametric-cad-modeling/scanner2.png" alt="FreeScan Omni" class="img-fluid">
                                </div>
                                <div class="scanner-body">
                                    <h4 class="scanner-title">FreeScan Omni</h4>
                                    <p class="scanner-text">Wireless scan to CAD with built-in inspection.</p>
                                    <a href="freescan-omni.php" class="scanner-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Scanner 3 -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="scanner-card h-100">
                                <div class="scanner-img-box">
                                    <img src="assets/images/3d-scan-to-parametric-cad-modeling/scanner3.png" alt="FreeScan UE Pro 2" class="img-fluid">
                                </div>
                                <div class="scanner-body">
                                    <h4 class="scanner-title">FreeScan UE Pro 2</h4>
                                    <p class="scanner-text">High accuracy for medium to large components.</p>
                                    <a href="freescan-ue-pro2.php" class="scanner-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Scanner 4 -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="scanner-card h-100">
                                <div class="scanner-img-box">
                                    <img src="assets/images/3d-scan-to-parametric-cad-modeling/scanner4.png" alt="FreeScan Trio" class="img-fluid">
                                </div>
                                <div class="scanner-body">
                                    <h4 class="scanner-title">FreeScan Trio</h4>
                                    <p class="scanner-text">Capture fine details and complex geometries.</p>
                                    <a href="freescan-trio-triple-camera-handheld-laser-3D-scanner.php" class="scanner-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Scanner 5 -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="scanner-card h-100">
                                <div class="scanner-img-box">
                                    <img src="assets/images/3d-scan-to-parametric-cad-modeling/scanner5.png" alt="FreeScan Track Nova" class="img-fluid">
                                </div>
                                <div class="scanner-body">
                                    <h4 class="scanner-title">FreeScan Track Nova</h4>
                                    <p class="scanner-text">Optical tracking for large assemblies & marker-free scanning.</p>
                                    <a href="freescan-track-nova.php" class="scanner-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Scanner 6 -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="scanner-card h-100">
                                <div class="scanner-img-box">
                                    <img src="assets/images/3d-scan-to-parametric-cad-modeling/scanner6.png" alt="OptimScan Q12" class="img-fluid">
                                </div>
                                <div class="scanner-body">
                                    <h4 class="scanner-title">OptimScan Q12</h4>
                                    <p class="scanner-text">Structured light metrology for high precision.</p>
                                    <a href="optimscan-q12.php" class="scanner-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- =========================================================
         OPEX & CAPEX SECTION
         ========================================================= -->
    <section class="opex-capex-section">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row g-4">
                
                <!-- Left Card: Opex -->
                <div class="col-lg-6 mb-4">
                    <div class="service-card opex-card">
                        <h2 class="service-title"><span>Opex reverse</span><br>engineering services</h2>
                        <h4 class="service-subtitle">Outsource Your Scan-to-CAD Project</h4>
                        <p class="service-text">Our engineering team delivers complete Scan-to-CAD projects with high accuracy and fast turnaround.</p>
                        <h5 class="service-list-title">Services:</h5>
                        <ul class="service-list">
                            <li><i class="fa-solid fa-circle-check"></i> Parametric CAD Models</li>
                            <li><i class="fa-solid fa-circle-check"></i> STEP / IGES Files</li>
                            <li><i class="fa-solid fa-circle-check"></i> Assembly Models</li>
                            <li><i class="fa-solid fa-circle-check"></i> Surface Models</li>
                            <li><i class="fa-solid fa-circle-check"></i> Manufacturing Drawings</li>
                            <li><i class="fa-solid fa-circle-check"></i> Inspection Ready CAD</li>
                            <li><i class="fa-solid fa-circle-check"></i> Native CAD Files</li>
                            <li><i class="fa-solid fa-circle-check"></i> And more...</li>
                        </ul>
                    </div>
                </div>

                <!-- Right Card: Capex -->
                <div class="col-lg-6 mb-4">
                    <div class="service-card capex-card">
                        <h2 class="service-title"><span>Capex</span> in-house<br>solutions</h2>
                        <h4 class="service-subtitle">Build Your Own Reverse Engineering Lab</h4>
                        <p class="service-text">Complete solutions including scanners, software, training and workflow support to build your in-house capability.</p>
                        <h5 class="service-list-title">Services:</h5>
                        <ul class="service-list">
                            <li><i class="fa-solid fa-circle-check"></i> Industrial 3D Scanners</li>
                            <li><i class="fa-solid fa-circle-check"></i> Geomagic Design X</li>
                            <li><i class="fa-solid fa-circle-check"></i> High Performance Workstations</li>
                            <li><i class="fa-solid fa-circle-check"></i> Installation & Implementation</li>
                            <li><i class="fa-solid fa-circle-check"></i> Training Programs</li>
                            <li><i class="fa-solid fa-circle-check"></i> Workflow Consulting</li>
                            <li><i class="fa-solid fa-circle-check"></i> Technical Support</li>
                            <li><i class="fa-solid fa-circle-check"></i> And more...</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>