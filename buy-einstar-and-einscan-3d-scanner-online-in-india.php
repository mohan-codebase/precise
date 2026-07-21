<?php
ob_start();
include('sql_folder/connect.php');

$title = "Buy Einstar & Einscan 3D Scanner Online in India";
$description = "Buy EinScan 3D Scanner online in India from Precise3DM. Explore high-accuracy 3D scanners for reverse engineering, inspection, design, and manufacturing.";
$keywords = "Buy Einstar, Einscan 3D Scanner, Online in India, SHINING 3D, Precise3DM";

// ======================== PREPARE CHECKOUT HANDLER ========================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'prepare_checkout') {
    ob_clean(); // Clear any output from connect.php (e.g. "Connected successfully")
    header('Content-Type: application/json');

    // Scanner mapping: scanner key => [db_id in einscan hx, checkout page, display name]
    $scannerMap = [
        'einstar-2'          => ['db_id' => 15, 'checkout' => 'direct-checkout-einstar-2-online.php',         'name' => 'Einstar 2'],
        'einstar-vega'       => ['db_id' => 16, 'checkout' => 'direct-checkout-einstar-vega-online.php',      'name' => 'Einstar Vega'],
        'einstar-rock-it'    => ['db_id' => 17, 'checkout' => 'direct-checkout-einstar-rockit-online.php',    'name' => 'Einstar Rock It'],
        'einscan-rigil-lite' => ['db_id' => 18, 'checkout' => 'direct-checkout-einscan-rigil-lite-online.php','name' => 'EinScan Rigil Lite'],
        'einscan-rigil'      => ['db_id' => 19, 'checkout' => 'direct-checkout-einscan-rigil-online.php',     'name' => 'EinScan Rigil'],
    ];

    // Base prices (before GST) for each scanner
    $basePrices = [
        'einstar-2'          => 161017,
        'einstar-vega'       => 296610,
        'einstar-rock-it'    => 271186,
        'einscan-rigil-lite' => 338983,
        'einscan-rigil'      => 593220,
    ];

    $scanner  = $_POST['scanner'] ?? '';
    $package  = $_POST['package'] ?? 'scanner-only';
    $software = isset($_POST['software']) ? json_decode($_POST['software'], true) : [];

    if (!isset($scannerMap[$scanner])) {
        echo json_encode(['error' => 'Invalid scanner']);
        exit();
    }

    $info     = $scannerMap[$scanner];
    $dbId     = $info['db_id'];
    $checkout = $info['checkout'];
    $displayName = $info['name'];

    // Calculate base price
    $basePrice = $basePrices[$scanner];

    // Add training cost if selected (₹15,000 before GST = round(15000/1.18))
    $trainingCost = 0;
    if ($package === 'training') {
        $trainingCost = round(15000 / 1.18);
        $displayName .= ' (+ Training & Onboarding)';
    }

    // Add software costs (these are GST-inclusive values from the page, convert to base)
    $softwareCost = 0;
    $softwareNames = [];
    if (is_array($software)) {
        $softwareLabels = [
            35000  => 'SHINING 3D Inspect',
            120000 => 'Geomagic Design X',
            150000 => 'Geomagic Control X',
            25000  => 'Reverse Engineering Training',
            20000  => 'Inspection Training',
        ];
        foreach ($software as $val) {
            $val = (int)$val;
            if ($val > 0) {
                $softwareCost += round($val / 1.18);
                if (isset($softwareLabels[$val])) {
                    $softwareNames[] = $softwareLabels[$val];
                }
            }
        }
    }

    if (count($softwareNames) > 0) {
        $displayName .= ' + ' . implode(', ', $softwareNames);
    }

    $finalBasePrice = $basePrice + $trainingCost + $softwareCost;

    // Update the einscan hx table row
    $titleEsc = mysqli_real_escape_string($con, $displayName);
    $priceEsc = mysqli_real_escape_string($con, (string)$finalBasePrice);
    $gstTotal = round($finalBasePrice * 1.18);
    $mrpEsc   = mysqli_real_escape_string($con, (string)$gstTotal);

    mysqli_query($con, "UPDATE `einscan hx` SET title='$titleEsc', price='$priceEsc', mrp='$mrpEsc', quantity='1' WHERE id='$dbId'");

    echo json_encode([
        'success'  => true,
        'redirect' => $checkout . '?qty=1',
        'title'    => $displayName,
        'total'    => $gstTotal,
    ]);
    exit();
}

// ======================== ADD TO CART HANDLER ========================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add_to_cart') {
    ob_clean();
    header('Content-Type: application/json');

    // Scanner mapping
    $scannerImages = [
        'einstar-2'          => 'einstar-2-image1.png',
        'einstar-vega'       => 'einstar-vega-image1.png',
        'einstar-rock-it'    => 'einstar-rock-it-image-1.png',
        'einscan-rigil-lite' => 'einscan-rigil-lite-image1.png',
        'einscan-rigil'      => 'einscan-rigil-image1.png',
    ];
    $scannerNames = [
        'einstar-2'          => 'Einstar 2',
        'einstar-vega'       => 'Einstar Vega',
        'einstar-rock-it'    => 'Einstar Rock It',
        'einscan-rigil-lite' => 'EinScan Rigil Lite',
        'einscan-rigil'      => 'EinScan Rigil',
    ];
    $basePricesCart = [
        'einstar-2'          => 161017,
        'einstar-vega'       => 296610,
        'einstar-rock-it'    => 271186,
        'einscan-rigil-lite' => 338983,
        'einscan-rigil'      => 593220,
    ];

    $scanner  = $_POST['scanner'] ?? '';
    $package  = $_POST['package'] ?? 'scanner-only';
    $software = isset($_POST['software']) ? json_decode($_POST['software'], true) : [];

    if (!isset($scannerNames[$scanner])) {
        echo json_encode(['error' => 'Invalid scanner']);
        exit();
    }

    $displayName = $scannerNames[$scanner];
    $image = $scannerImages[$scanner];
    $basePrice = $basePricesCart[$scanner];

    // Add training
    $trainingCost = 0;
    if ($package === 'training') {
        $trainingCost = round(15000 / 1.18);
        $displayName .= ' (+ Training & Onboarding)';
    }

    // Add software
    $softwareCost = 0;
    $softwareLabelsCart = [
        35000  => 'SHINING 3D Inspect',
        120000 => 'Geomagic Design X',
        150000 => 'Geomagic Control X',
        25000  => 'Reverse Engineering Training',
        20000  => 'Inspection Training',
    ];
    $softwareNamesArr = [];
    if (is_array($software)) {
        foreach ($software as $val) {
            $val = (int)$val;
            if ($val > 0) {
                $softwareCost += round($val / 1.18);
                if (isset($softwareLabelsCart[$val])) {
                    $softwareNamesArr[] = $softwareLabelsCart[$val];
                }
            }
        }
    }
    if (count($softwareNamesArr) > 0) {
        $displayName .= ' + ' . implode(', ', $softwareNamesArr);
    }

    $finalPrice = $basePrice + $trainingCost + $softwareCost;
    $titleEsc = mysqli_real_escape_string($con, $displayName);
    $imageEsc = mysqli_real_escape_string($con, $image);
    $priceEsc = mysqli_real_escape_string($con, (string)$finalPrice);

    // Check if already in cart
    $exists = mysqli_query($con, "SELECT id FROM `cart` WHERE title='$titleEsc' LIMIT 1");
    if ($exists && mysqli_num_rows($exists) > 0) {
        echo json_encode(['success' => true, 'message' => 'Product already in the Cart', 'status' => 'exists']);
    } else {
        mysqli_query($con, "INSERT INTO `cart` (image, title, quantity, price) VALUES ('$imageEsc', '$titleEsc', '1', '$priceEsc')");
        echo json_encode(['success' => true, 'message' => 'Product Added to the Cart', 'status' => 'added']);
    }
    exit();
}
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
    <link rel="stylesheet" href="assets/css/buy-einstar-and-einscan-3d-scanner-online-in-india.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>

    <?php include('includes/header.php'); ?>

    <!-- =========================================================
         HERO SECTION
         ========================================================= -->
    <section class="buy-einstar-hero" style="background-image: url('assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/hero-bg.png');">
        <div class="container-fluid" style="padding: 0 5%;">
            <div class="row align-items-center">
                <!-- Left Content -->
                <div class="col-lg-7">
                    <h1 class="hero-title">Buy Einstar &amp; Einscan<br><span>3D Scanner</span> Online in India</h1>
                    <h3 class="hero-subtitle">Free Delivery Across The Country</h3>

                    <p class="hero-desc">Buy SHINING 3D entry-level scanners directly from <span>Precise3DM</span> with:</p>

                    <ul class="hero-list">
                        <li>Live support</li>
                        <li>EMI options</li>
                        <li>Installation assistance</li>
                        <li>Premium warranty</li>
                    </ul>

                    <div class="hero-btn-group">
                        <button class="btn-buy-now">BUY NOW</button>
                        <button class="btn-schedule-demo"><i class="fa-regular fa-circle-play"></i> SCHEDULE LIVE DEMO</button>
                    </div>
                </div>

                <!-- Right Empty Space (Image is embedded in background) -->
                <div class="col-lg-5">
                    <!-- Right side content is part of the background image -->
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================
         HERO STATS SECTION
         ========================================================= -->
    <section class="hero-stats-section">
        <div class="container-fluid" style="padding: 25px 5%;">
            <div class="row align-items-center justify-content-between text-center">

                <!-- Stat 1 -->
                <div class="col-md-2 col-sm-4 col-6 mb-md-0 mb-4">
                    <div class="stat-item">
                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/hero-stat1.png" alt="200+ Scanners Sold">
                        <p>200+ Entry Level<br>Scanners Sold</p>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="col-md-2 col-sm-4 col-6 mb-md-0 mb-4">
                    <div class="stat-item">
                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/hero-stat2.png" alt="India-Wide Support">
                        <p><br>India-Wide Support</p>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="col-md-2 col-sm-4 col-6 mb-md-0 mb-4">
                    <div class="stat-item">
                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/hero-stat3.png" alt="Live Online Demo">
                        <p><br>Live Online Demo</p>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="col-md-2 col-sm-4 col-6 mb-md-0 mb-4">
                    <div class="stat-item">
                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/hero-stat4.png" alt="Local Training">
                        <p><br>Local Training</p>
                    </div>
                </div>

                <!-- Stat 5 -->
                <div class="col-md-2 col-sm-4 col-6 mb-sm-0 mb-4">
                    <div class="stat-item">
                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/hero-stat5.png" alt="OEM Warranty">
                        <p><br>OEM Warranty</p>
                    </div>
                </div>

                <!-- Stat 6 -->
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="stat-item">
                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/hero-stat6.png" alt="24-Hour Backup Scanner Support">
                        <p>24-Hour Backup<br>Scanner Support</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- =========================================================
         ORDER SECTION
         ========================================================= -->
        <section class="order-section" style="background-color: #f6f6fa; padding: 60px 0;">
            <div class="container-fluid" style="padding: 0 5%;">
                <div class="order-container">
                    <div class="row">

                        <!-- Left Column: Gallery -->
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="product-gallery">
                                <div class="primary-image-box">
                                    <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image1.png" alt="Einstar 2" id="mainProductImage">
                                </div>
                                <div class="thumbnail-row">
                                    <div class="thumbnail-box active" onclick="changeImage('assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image1.png', this)">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image1.png" alt="Thumb 1">
                                    </div>
                                    <div class="thumbnail-box" onclick="changeImage('assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image2.png', this)">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image2.png" alt="Thumb 2">
                                    </div>
                                    <div class="thumbnail-box" onclick="changeImage('assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image3.png', this)">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image3.png" alt="Thumb 3">
                                    </div>
                                    <div class="thumbnail-box" onclick="changeImage('assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image4.png', this)">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image4.png" alt="Thumb 4">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Middle Column: Product Details -->
                        <div class="col-lg-5 mb-4 mb-lg-0">
                            <div class="product-details">
                                <p class="step-title">Select Your Scanner</p>
                                <select class="form-select scanner-select mb-4" id="scannerSelect">
                                    <option value="einstar-2">Einstar 2</option>
                                    <option value="einstar-vega">Einstar Vega</option>
                                    <option value="einstar-rock-it">Einstar Rock It</option>
                                    <option value="einscan-rigil-lite">EinScan Rigil Lite</option>
                                </select>

                                <h2 class="product-name" id="productName">Einstar 2</h2>
                                <h4 class="product-tagline" id="productTagline">Cost-Effective Wireless Laser 3d scanner</h4>

                                <p class="product-desc">High-performance wireless handheld 3D scanner built for speed, accuracy and versatility.</p>

                                <div class="features-grid">
                                    <div class="feature-item">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/scanner-icon1.png" alt="Best For">
                                        <div class="feature-text">
                                            <strong>Best For</strong>
                                            <span id="feat1">Small to Medium Objects</span>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/scanner-icon2.png" alt="Recommended For">
                                        <div class="feature-text">
                                            <strong>Recommended For</strong>
                                            <span id="feat2">Design Manufacturing Education</span>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/scanner-icon3.png" alt="Accuracy">
                                        <div class="feature-text">
                                            <strong>Accuracy</strong>
                                            <span id="feat3">Up to 0.1 mm</span>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/scanner-icon4.png" alt="Technology">
                                        <div class="feature-text">
                                            <strong>Technology</strong>
                                            <span id="feat4">Laser + Infrared Light</span>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/scanner-icon5.png" alt="Connectivity">
                                        <div class="feature-text">
                                            <strong>Connectivity</strong>
                                            <span id="feat5">Wireless</span>
                                        </div>
                                    </div>
                                    <div class="feature-item">
                                        <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/scanner-icon6.png" alt="Included Software">
                                        <div class="feature-text">
                                            <strong>Included Software</strong>
                                            <span id="feat6">EXModel</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Price Card -->
                        <div class="col-lg-3">
                            <div class="price-card">
                                <p class="price-label">Price</p>
                                <h2 class="price-amount" id="productPrice">₹1,90,000</h2>
                                <p class="price-tax">(Incl. GST)</p>

                                <button class="btn-emi" id="emiButton">EMI Starting from<br>₹3,XXX / month</button>

                                <div class="payment-methods">
                                    <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/payment1.png" alt="Visa">
                                    <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/payment2.png" alt="Mastercard">
                                    <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/payment3.png" alt="UPI">
                                    <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/payment4.png" alt="RuPay">
                                </div>

                                <hr class="price-divider">

                                <ul class="benefits-list">
                                    <li><i class="fa-regular fa-circle-check"></i> Secure Payment Guarantee</li>
                                    <li><i class="fa-regular fa-circle-check"></i> GST Invoice for ITC Benefits</li>
                                    <li><i class="fa-regular fa-circle-check"></i> 1 Year Full OEM Warranty</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- NEW: 02: Choose Your Package & Software -->
                <div class="package-container mt-5">
                    <div class="row" id="packageSectionRow">
                        <div class="col-lg-12" id="packageCol">
                            <h3 class="step-title-large">02: Choose Your Package</h3>

                            <label class="package-option selected" onclick="selectPackage(this)">
                                <div class="radio-wrap">
                                    <input type="radio" name="package" value="scanner-only" checked>
                                    <span class="custom-radio"></span>
                                    <span>Scanner Only</span>
                                </div>
                                <span class="package-price" id="pkgPrice1">₹1,90,000</span>
                            </label>

                            <label class="package-option" onclick="selectPackage(this)">
                                <div class="radio-wrap">
                                    <input type="radio" name="package" value="training">
                                    <span class="custom-radio"></span>
                                    <span>+ Training & Onboarding</span>
                                </div>
                                <span class="package-price" id="pkgPrice2">+ ₹15,000</span>
                            </label>
                        </div>

                        <div class="col-lg-6" id="softwareCol" style="display: none;">
                            <h3 class="step-title-large">03: Add Software & Services <span style="color: #888; font-weight: 400; font-size: 18px;">(Optional)</span></h3>
                            <div class="software-options-box">
                                <label class="software-option">
                                    <input type="checkbox" value="35000">
                                    <span>SHINING 3D Inspect</span>
                                    <span class="soft-price">₹35,000</span>
                                </label>
                                <label class="software-option">
                                    <input type="checkbox" value="120000">
                                    <span>Geomagic Design X</span>
                                    <span class="soft-price">₹1,20,000</span>
                                </label>
                                <label class="software-option">
                                    <input type="checkbox" value="150000">
                                    <span>Geomagic Control X</span>
                                    <span class="soft-price">₹1,50,000</span>
                                </label>
                                <label class="software-option">
                                    <input type="checkbox" value="25000">
                                    <span>Reverse Engineering Training</span>
                                    <span class="soft-price">₹25,000</span>
                                </label>
                                <label class="software-option">
                                    <input type="checkbox" value="20000">
                                    <span>Inspection Training</span>
                                    <span class="soft-price">₹20,000</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> <!-- End container -->

            <!-- Checkout Bar (Full Width) -->
            <div class="checkout-bar-wrapper">
                <div class="container-fluid" style="padding: 0 5%;">
                    <div class="row align-items-center">
                        <!-- Left Side: Image & Title -->
                        <div class="col-lg-4 d-flex align-items-center">
                            <div class="checkout-img-box">
                                <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image1.png" alt="Scanner" id="checkoutImg">
                            </div>
                            <div class="checkout-title-box">
                                <h3 id="checkoutName">Einstar 2</h3>
                                <p>SCANNER ONLY</p>
                            </div>
                        </div>

                        <!-- Middle: Total Price -->
                        <div class="col-lg-4 text-center">
                            <p class="checkout-label">Total Price</p>
                            <h2 class="checkout-price" id="checkoutPrice">₹1,90,000</h2>
                            <p class="checkout-tax">(Incl. GST)</p>
                        </div>

                        <!-- Right Side: Buttons -->
                        <div class="col-lg-4">
                            <!-- Layout for Products 1-4 -->
                            <div id="checkoutButtonsNormal">
                                <button class="btn-checkout-primary w-100 mb-2"><i class="fa-solid fa-bolt"></i> Buy Now</button>
                                <div class="d-flex gap-2" style="gap: 10px;">
                                    <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-checkout-secondary w-50"><i class="fa-regular fa-file-lines"></i> Request Quote</a>
                                    <button class="btn-checkout-secondary btn-add-to-cart w-50"><i class="fa-solid fa-cart-plus"></i> Add to Cart</button>
                                </div>
                            </div>

                            <!-- Layout for Product 5 -->
                            <div id="checkoutButtonsRigil" style="display: none;">
                                <div class="d-flex gap-2 mb-2" style="gap: 10px;">
                                    <button class="btn-checkout-secondary btn-add-to-cart w-50"><i class="fa-solid fa-cart-plus"></i> Add to Cart</button>
                                    <button class="btn-checkout-primary w-50"><i class="fa-solid fa-bolt"></i> Buy Now</button>
                                </div>
                                <div class="d-flex gap-2" style="gap: 10px;">
                                    <a href="Book-demo-get-quote-for-3D-scanner.php" class="btn-checkout-secondary w-50"><i class="fa-regular fa-file-lines"></i> Request Quote</a>
                                    <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="btn-checkout-secondary w-50"><i class="fa-solid fa-video"></i> Book live demo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================
             COMPARE SCANNERS SECTION
             ========================================================= -->
        <section class="compare-section" style="background-color: #f6f6fa; padding: 60px 0;">
            <div class="container-fluid" style="padding: 0 5%;">
                <h2 class="compare-title">Compare Our Entry-Level 3D Scanners</h2>
                
                <div class="compare-table-wrapper">
                    <div class="table-responsive border-0">
                        <table class="table compare-table mb-0">
                            <thead>
                                <tr>
                                    <th class="header-dark">Scanner</th>
                                    <th class="header-orange">Einstar 2</th>
                                    <th class="header-orange">Einstar Vega</th>
                                    <th class="header-orange">EinScan Rock It</th>
                                    <th class="header-orange">EinScan Rigil Lite</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="feature-label">Price</td>
                                    <td>₹1,90,000 Including GST</td>
                                    <td>₹3,50,000 Including GST</td>
                                    <td>₹3,20,000 Including GST</td>
                                    <td>₹4,00,000 Including GST</td>
                                </tr>
                                <tr>
                                    <td class="feature-label">Accuracy</td>
                                    <td>Up to 0.1 mm</td>
                                    <td>Up to 0.05 mm</td>
                                    <td>Up to 0.05 mm</td>
                                    <td>Up to 0.04 mm</td>
                                </tr>
                                <tr>
                                    <td class="feature-label">Wireless</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                </tr>
                                <tr>
                                    <td class="feature-label">Best For</td>
                                    <td>Small to Medium Objects</td>
                                    <td>Medium Large Objects</td>
                                    <td>Medium to Large Objects</td>
                                    <td>Large Objects</td>
                                </tr>
                                <tr>
                                    <td class="feature-label">Technology</td>
                                    <td>Laser +Infrared Light</td>
                                    <td>Laser +Infrared Light</td>
                                    <td>Laser +Infrared Light</td>
                                    <td>Laser +Infrared Light</td>
                                </tr>
                                <!-- Extra Content Rows -->
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Resolution</td>
                                    <td>0.05~10 mm (Laser HD), 0.2~10 mm (IR Mode)</td>
                                    <td>In HD Mode: 0.05 mm to 3 mm point distance; in Fast Mode: 0.5 to 10 mm</td>
                                    <td>0.05~10 mm (Laser HD), 0.2~10 mm (IR Mode)</td>
                                    <td>0.05~10 mm (Laser HD), 0.2~10 mm (IR Mode)</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Speed</td>
                                    <td>Laser HD (25,00,000 point/s), IR Mode (14,40,000)</td>
                                    <td>Frame rate: ~15 fps in HD mode; ~20 fps in Fast mode</td>
                                    <td>Laser HD (28,00,000 point/s), IR Mode (48,00,000)</td>
                                    <td>Laser HD (29,40,000 point/s), IR Mode (16,000,000)</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Light Source</td>
                                    <td>17+17 crossed laser lines,7 blue laser parallel lines(Laser HD), IR VCSEL(IR Rapid)</td>
                                    <td>Infrared MEMS + VCSEL (two IR modes)</td>
                                    <td>19+19 crossed laser lines, 7 blue laser parallel lines(Laser HD), IR VCSEL(IR Rapid)</td>
                                    <td>17+17 crossed laser lines, 7 blue laser parallel lines(Laser HD), IR VCSEL(IR Rapid)</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Work Mode</td>
                                    <td>PC-Wired</td>
                                    <td>Wireless Standalone</td>
                                    <td>PC- Wireless / PC-Wired</td>
                                    <td>Wireless Standalone/ PC- Wireless / PC-Wired</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Working distance</td>
                                    <td>400 mm</td>
                                    <td>HD mode: 100~350 mm,Fast mode: 270~1500 mm</td>
                                    <td>100 ~ 600 mm(Laser HD), 160 ~ 1400 mm(IR Rapid)</td>
                                    <td>170 ~ 550 mm(Laser HD), 160 ~ 1500 mm(IR Rapid)</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Alignment Mode</td>
                                    <td>Feature Alignment/Hybrid Alignment/ Texture Alignment/ Global Markers</td>
                                    <td>Global Markers / Markers / Features</td>
                                    <td>Global Markers / Markers / Features / Hybrid Alignment(Laser HD),<br>Global Markers / Markers / Features / Texture / Hybrid Alignment(IR Rapid)</td>
                                    <td>Global Markers / Markers / Features / Hybrid Alignment(Laser HD),<br>Global Markers / Markers / Features / Texture / Hybrid Alignment(IR Rapid)</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Device architecture</td>
                                    <td>Infrared VCSEL Structured Light(wired mode)</td>
                                    <td>Infrared (MEMS + VCSEL) based, fully wireless mode built in, with optional PC support (but many tasks done on device)</td>
                                    <td>Hybrid (blue laser + IR) + optional PC connection (wired or wireless)</td>
                                    <td>Hybrid (blue laser + IR) + optional PC connection (wired or wireless)</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Output formats</td>
                                    <td>OBJ, STL, PLY, P3, 3MF</td>
                                    <td>STL, OBJ, PLY</td>
                                    <td>STL, OBJ, PLY, 3MF, ASC</td>
                                    <td>STL, OBJ, PLY, 3MF, ASC</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Operation Condition</td>
                                    <td>Temperature -0 ~ 40C</td>
                                    <td>Temperature -10 ~ 40C</td>
                                    <td>Temperature -10 ~ 40C</td>
                                    <td>Temperature -10 ~ 40C</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Net Weight</td>
                                    <td>500g</td>
                                    <td>535 g (regular version)Built-in</td>
                                    <td>425g (Batteries included)</td>
                                    <td>870 g (batteries included)</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Interface / connectivity</td>
                                    <td>USB-C, wired mode</td>
                                    <td>USB-C, Wi-Fi 6, wireless mode built in</td>
                                    <td>USB-C, Wi-Fi (wireless PC mode)</td>
                                    <td>USB-C, Wi-Fi (wireless PC mode)</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Cameras / texture</td>
                                    <td>2 MP color camera for textures</td>
                                    <td>48 MP color camera for textures</td>
                                    <td>5 MP full Color texture camera</td>
                                    <td>5 MP full Color texture camera; separate 3D cameras</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Hardware / onboard compute</td>
                                    <td>-</td>
                                    <td>Also has onboard compute: 8-core CPU, 32 GB RAM, 32 GB eMMC + 512 GB SSD</td>
                                    <td>-</td>
                                    <td>CPU: 8-core, 2.4GHz; RAM: 24GB LPDDR5; Storage: 64GB eMMC + 512GB SSD; 6.4-inch 2K AMOLED Touchscreen</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Outdoor / sunlight use</td>
                                    <td>Below 110,000 Lux (Laser Mode), Below 70,000 Lux(IR Mode)</td>
                                    <td>Also claims ability to scan outdoors, handle dark surfaces; somewhat less proven in practice.</td>
                                    <td>Below 110,000 Lux (Laser Mode), Below 70,000 Lux(IR Mode)</td>
                                    <td>Supports scanning even outdoors / in sunlight, claims robust against ambient light, reflective/dark</td>
                                </tr>
                                <tr class="extra-content-row" style="display: none;">
                                    <td class="feature-label">Recommended Configuration</td>
                                    <td>Win10/11, 64 bit; Graphics card: NVIDIA RTX3060; Video memory: 8GB; Processor: I7- 13700H; Memory: 64GB</td>
                                    <td>Win10/11, 64 bit; Graphics card: NVIDIA RTX3060; Video memory: 8GB; Processor: I7- 13700H; Memory: 64GB</td>
                                    <td>Win10/11, 64 bit; Graphics card: NVIDIA RTX3060; Video memory: 8GB; Processor: I7- 13700H; Memory: 64GB</td>
                                    <td>Win10/11, 64 bit; Graphics card: NVIDIA RTX3060; Video memory: 8GB; Processor: I7- 13700H; Memory: 64GB</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center mt-4">
                        <button id="knowMoreBtn" class="px-4 py-2" style="border-radius: 5px; font-weight: 600; color: #fff; background-color: #f89b2b; border: none; transition: background 0.3s;" onclick="toggleExtraContent()">Know More <i class="fa-solid fa-chevron-down ms-2"></i></button>
                    </div>
                    <script>
                        function toggleExtraContent() {
                            const rows = document.querySelectorAll('.extra-content-row');
                            const btn = document.getElementById('knowMoreBtn');
                            let isHidden = true;
                            if (rows.length > 0) {
                                isHidden = rows[0].style.display === 'none';
                            }
                            
                            rows.forEach(row => {
                                row.style.display = isHidden ? 'table-row' : 'none';
                            });
                            
                            if (isHidden) {
                                btn.innerHTML = 'Show Less <i class="fa-solid fa-chevron-up ms-2"></i>';
                            } else {
                                btn.innerHTML = 'Know More <i class="fa-solid fa-chevron-down ms-2"></i>';
                            }
                        }
                    </script>
                </div>
            </div>
        </section>

        <!-- =========================================================
             WHY BUY FROM PRECISE3DM SECTION
             ========================================================= -->
        <section class="why-buy-section" style="background-color: #fff; padding: 80px 0;">
            <div class="container-fluid" style="padding: 0 5%;">
                <h2 class="why-title">WHY BUY FROM PRECISE3DM?</h2>
                
                <div class="d-flex align-items-center justify-content-center mb-5 why-subtitle-wrapper">
                    <div class="why-dash"></div>
                    <div class="why-subtitle">YOUR COMPLETE 3D METROLOGY PARTNER</div>
                    <div class="why-dash"></div>
                </div>

                <div class="row g-5">
                    <!-- Card 1 -->
                    <div class="col-lg-4 col-md-6 py-3">
                        <div class="why-card">
                            <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/why1.png" alt="200+ Entry level scanners sold" class="img-fluid">
                            <h3 class="why-card-title">200+ ENTRYLEVEL<br>3D SCANNERS SOLD</h3>
                            <p class="why-card-text">Trusted by manufacturing industries across India with 200+ entry level 3D scanners successfully deployed.</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-lg-4 col-md-6 py-3">
                        <div class="why-card">
                            <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/why2.png" alt="Live Demo and POC" class="img-fluid">
                            <h3 class="why-card-title">LIVE DEMO & POC AT YOUR<br>FACILITY</h3>
                            <p class="why-card-text">Real application proof-of-concept scanning at your site using your actual components.</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-lg-4 col-md-6 py-3">
                        <div class="why-card">
                            <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/why3.png" alt="Right 3D Inspection Software" class="img-fluid">
                            <h3 class="why-card-title">RIGHT 3D INSPECTION<br>SOFTWARE FOR YOUR<br>WORKFLOW</h3>
                            <p class="why-card-text">We help you choose the correct inspection and reverse engineering workflow software for your exact application.</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="col-lg-4 col-md-6 py-3">
                        <div class="why-card">
                            <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/why4.png" alt="Premium Warranty" class="img-fluid">
                            <h3 class="why-card-title">PREMIUM WARRANTY<br>WITH 24-HOUR BACKUP<br>SCANNER SUPPORT</h3>
                            <p class="why-card-text">Premium peace-of-mind warranty with rapid backup scanner support to reduce production downtime.</p>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="col-lg-4 col-md-6 py-3">
                        <div class="why-card">
                            <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/why5.png" alt="Local Support" class="img-fluid">
                            <h3 class="why-card-title">6+ LOCATIONS WITH<br>DIRECT LOCAL SUPPORT</h3>
                            <p class="why-card-text">Fast local application and service support from multiple regional offices across India.</p>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="col-lg-4 col-md-6 py-3">
                        <div class="why-card">
                            <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/why6.png" alt="Training & SOP" class="img-fluid">
                            <h3 class="why-card-title">TRAINING & SOP SETUP IN<br>LOCAL LANGUAGE</h3>
                            <p class="why-card-text">Complete operator training, workflow setup, and SOP guidance in your local language.</p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Banner -->
                <div class="why-bottom-banner mt-5">
                    <div class="row align-items-center">
                        <!-- Left Side -->
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="d-flex align-items-center" style="gap: 10px;">
                                <div class="banner-icon-box flex-shrink-0">
                                    <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/testimony1.png" alt="Shield Icon" class="img-fluid">
                                </div>
                                <div class="banner-text ms-4">
                                    From scanning to inspection to training and support Precise3DM helps Industries successfully adopt metrology - grade 3D workflows with confidence.
                                </div>
                            </div>
                        </div>
                        
                        <!-- Right Side -->
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center justify-content-lg-end justify-content-center feature-items-wrapper">
                                <!-- Feature 1 -->
                                <div class="banner-feature text-center">
                                    <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/testimony2.png" alt="Trusted Partner" class="img-fluid">
                                    <p>TRUSTED<br>PARTNER</p>
                                </div>
                                <div class="banner-separator"></div>
                                <!-- Feature 2 -->
                                <div class="banner-feature text-center">
                                    <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/testimony3.png" alt="Precise Solutions" class="img-fluid">
                                    <p>PRECISE<br>SOLUTIONS</p>
                                </div>
                                <div class="banner-separator"></div>
                                <!-- Feature 3 -->
                                <div class="banner-feature text-center">
                                    <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/testimony4.png" alt="Better Outcomes" class="img-fluid">
                                    <p>BETTER<br>OUTCOMES</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =========================================================
             CALL TO ACTION SECTION
             ========================================================= -->
        <section class="cta-section" style="background-color: #f6f6fa; padding: 60px 0;">
            <div class="container-fluid" style="padding: 0 5%;">
                <div class="cta-container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 cta-content">
                            <h2 class="cta-title">
                                Ready to Start Your<br>
                                <span>3D Scanning Journey?</span>
                            </h2>
                            <p class="cta-text">
                                Our experts are ready to help you choose the right<br>
                                scanner for your application
                            </p>
                            <div class="cta-buttons">
                                <button class="btn-cta-primary">BUY NOW</button>
                                <button class="btn-cta-secondary">TALK TO EXPERT</button>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-end text-center mt-4 mt-lg-0 pe-lg-0">
                            <img src="assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/ready-to-start-image.png" alt="Ready to start 3D scanning" class="img-fluid cta-image">
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
        <script>
            const scannerData = {
                'einstar-2': {
                    name: 'Einstar 2',
                    tagline: 'Cost-Effective Wireless Laser 3d scanner',
                    price: '₹1,90,000',
                    feat1: 'Small to Medium Objects',
                    feat2: 'Design Manufacturing Education',
                    feat3: 'Up to 0.1 mm',
                    feat4: 'Laser + Infrared Light',
                    feat5: 'Wireless',
                    feat6: 'EXModel',
                    images: [
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image1.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image2.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image3.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-2-image4.png'
                    ]
                },
                'einstar-vega': {
                    name: 'Einstar Vega',
                    tagline: 'Wireless All-In-One 3D Scanner',
                    price: '₹3,50,000',
                    feat1: 'Medium Large Objects',
                    feat2: 'Design Manufacturing Education',
                    feat3: 'Up to 0.05 mm',
                    feat4: 'Laser +Infrared Light',
                    feat5: 'Wireless & Inbuilt display',
                    feat6: 'EXModel',
                    images: [
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-vega-image1.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-vega-image2.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-vega-image3.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-vega-image4.png'
                    ]
                },
                'einstar-rock-it': {
                    name: 'Einstar Rock It',
                    tagline: 'Affordable Pocket-Size 3D Scanner',
                    price: '₹3,20,000',
                    feat1: 'Medium to Large Objects',
                    feat2: 'Design Manufacturing Education',
                    feat3: 'Up to 0.05 mm',
                    feat4: 'Laser +Infrared Light',
                    feat5: 'Wired & Wireless',
                    feat6: 'EXModel',
                    images: [
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-rock-it-image-1.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-rock-it-image2.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-rock-it-image3.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einstar-rock-it-image4.png'
                    ]
                },
                'einscan-rigil-lite': {
                    name: 'EinScan Rigil Lite',
                    tagline: 'Portable 3D Scanner for Reverse Engineering & Design',
                    price: '₹4,00,000',
                    feat1: 'Large Objects',
                    feat2: 'Design Manufacturing Education',
                    feat3: 'Up to 0.04 mm',
                    feat4: 'Laser + Infrared Light',
                    feat5: 'Standalone Wireless PC Wired PC',
                    feat6: 'Rigil EXScan & EXModel',
                    images: [
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einScan-rigil-lite-image1.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einScan-rigil-lite-image2.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einScan-rigil-lite-image3.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einScan-rigil-lite-image4.png'
                    ]
                },
                'einscan-rigil': {
                    name: 'EinScan Rigil',
                    tagline: 'Wireless 3D Scanner',
                    price: '₹7,00,000',
                    feat1: 'Large Objects',
                    feat2: 'Design Manufacturing Education',
                    feat3: 'Up to 0.04 mm',
                    feat4: 'IR VCSEL',
                    feat5: 'Wired',
                    feat6: 'EXScan Pro',
                    images: [
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einscan-rigil-image1.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einscan-rigil-image2.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einscan-rigil-image3.png',
                        'assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einscan-rigil-image4.png'
                    ]
                }
            };

            document.getElementById('scannerSelect').addEventListener('change', function() {
                const val = this.value;
                const data = scannerData[val];

                if (data) {
                    document.getElementById('productName').innerText = data.name;
                    document.getElementById('productTagline').innerText = data.tagline;
                    document.getElementById('productPrice').innerText = data.price;

                    document.getElementById('feat1').innerText = data.feat1;
                    document.getElementById('feat2').innerText = data.feat2;
                    document.getElementById('feat3').innerText = data.feat3;
                    document.getElementById('feat4').innerText = data.feat4;
                    document.getElementById('feat5').innerText = data.feat5;
                    document.getElementById('feat6').innerText = data.feat6;

                    // Update images
                    const mainImg = document.getElementById('mainProductImage');
                    mainImg.src = data.images[0];

                    const thumbnails = document.querySelectorAll('.thumbnail-box img');
                    const thumbBoxes = document.querySelectorAll('.thumbnail-box');
                    const primaryBox = document.querySelector('.primary-image-box');

                    // Apply white background specifically for EinScan Rigil images
                    const imgBgCol = (val === 'einscan-rigil' || val === 'einscan-rigil-lite') ? '#fff' : 'transparent';
                    mainImg.style.backgroundColor = imgBgCol;

                    for (let i = 0; i < 4; i++) {
                        if (thumbnails[i]) {
                            thumbnails[i].src = data.images[i];
                            thumbnails[i].style.backgroundColor = imgBgCol;

                            // Also update the onclick attribute to pass the new image URL
                            thumbBoxes[i].setAttribute('onclick', `changeImage('${data.images[i]}', this)`);

                            // Reset active class to the first one
                            thumbBoxes[i].classList.remove('active');
                        }
                    }
                    if (thumbBoxes.length > 0) thumbBoxes[0].classList.add('active');

                    // Update Package 1 Price
                    document.getElementById('pkgPrice1').innerText = data.price;

                    // Update Checkout Bar details
                    document.getElementById('checkoutName').innerText = data.name;
                    document.getElementById('checkoutPrice').innerText = data.price;
                    document.getElementById('checkoutImg').src = data.images[0];

                    const btnNormal = document.getElementById('checkoutButtonsNormal');
                    const btnRigil = document.getElementById('checkoutButtonsRigil');

                    // Toggle Software column for Einscan Rigil
                    const packageCol = document.getElementById('packageCol');
                    const softwareCol = document.getElementById('softwareCol');

                    if (val === 'einscan-rigil') {
                        packageCol.className = 'col-lg-6';
                        softwareCol.style.display = 'block';
                        btnNormal.style.display = 'none';
                        btnRigil.style.display = 'block';
                    } else {
                        packageCol.className = 'col-lg-12';
                        softwareCol.style.display = 'none';
                        btnNormal.style.display = 'block';
                        btnRigil.style.display = 'none';
                    }
                }
            });

            function changeImage(src, element) {
                document.getElementById('mainProductImage').src = src;

                // Remove active class from all thumbnails
                var thumbnails = document.querySelectorAll('.thumbnail-box');
                thumbnails.forEach(function(thumb) {
                    thumb.classList.remove('active');
                });

                // Add active class to clicked thumbnail
                element.classList.add('active');
            }

            function selectPackage(el) {
                // Remove selected class from all
                document.querySelectorAll('.package-option').forEach(opt => opt.classList.remove('selected'));
                // Add to clicked
                el.classList.add('selected');
                // Check the radio input
                el.querySelector('input').checked = true;
                // Recalculate price
                updateTotalPrice();
            }

            // ==================== DYNAMIC PRICING ====================
            // Base prices (GST inclusive) matching the scannerData
            const scannerBasePrices = {
                'einstar-2': 190000,
                'einstar-vega': 350000,
                'einstar-rock-it': 320000,
                'einscan-rigil-lite': 400000,
                'einscan-rigil': 700000
            };

            const TRAINING_COST = 15000; // GST inclusive

            function getSelectedScanner() {
                return document.getElementById('scannerSelect').value;
            }

            function getSelectedPackage() {
                const checked = document.querySelector('input[name="package"]:checked');
                return checked ? checked.value : 'scanner-only';
            }

            function getSelectedSoftwareTotal() {
                let total = 0;
                document.querySelectorAll('.software-option input[type="checkbox"]:checked').forEach(cb => {
                    total += parseInt(cb.value, 10) || 0;
                });
                return total;
            }

            function formatINR(num) {
                return '₹' + num.toLocaleString('en-IN');
            }

            function updateTotalPrice() {
                const scanner = getSelectedScanner();
                const pkg = getSelectedPackage();
                let total = scannerBasePrices[scanner] || 0;

                if (pkg === 'training') {
                    total += TRAINING_COST;
                }

                // Only add software for einscan-rigil (since software column is only visible for it)
                if (scanner === 'einscan-rigil') {
                    total += getSelectedSoftwareTotal();
                }

                const formatted = formatINR(total);

                // Update checkout bar price
                document.getElementById('checkoutPrice').innerText = formatted;

                // Update checkout bar subtitle
                const checkoutSubtitle = document.querySelector('.checkout-title-box p');
                if (checkoutSubtitle) {
                    checkoutSubtitle.innerText = pkg === 'training' ? 'SCANNER + TRAINING' : 'SCANNER ONLY';
                }

                // Update EMI Button
                const emiBtn = document.getElementById('emiButton');
                if (emiBtn) {
                    const emiAmount = Math.round(total / 12);
                    emiBtn.innerHTML = 'EMI Starting from<br>' + formatINR(emiAmount) + ' / month';
                }
            }

            // Listen for package changes
            document.querySelectorAll('input[name="package"]').forEach(radio => {
                radio.addEventListener('change', updateTotalPrice);
            });

            // Listen for software checkbox changes
            document.querySelectorAll('.software-option input[type="checkbox"]').forEach(cb => {
                cb.addEventListener('change', updateTotalPrice);
            });

            // Also recalculate when scanner changes
            const origChangeHandler = document.getElementById('scannerSelect').onchange;
            document.getElementById('scannerSelect').addEventListener('change', function() {
                // Reset package to "Scanner Only" when switching scanners
                const scannerOnlyRadio = document.querySelector('input[name="package"][value="scanner-only"]');
                if (scannerOnlyRadio) {
                    scannerOnlyRadio.checked = true;
                    document.querySelectorAll('.package-option').forEach(opt => opt.classList.remove('selected'));
                    scannerOnlyRadio.closest('.package-option').classList.add('selected');
                }
                // Uncheck all software
                document.querySelectorAll('.software-option input[type="checkbox"]').forEach(cb => {
                    cb.checked = false;
                });
                // Recalculate
                setTimeout(updateTotalPrice, 50);
            });

            // ==================== BUY NOW HANDLER ====================
            function handleBuyNow(e) {
                e.preventDefault();

                const scanner = getSelectedScanner();
                const pkg = getSelectedPackage();

                // Collect selected software values
                const softwareValues = [];
                document.querySelectorAll('.software-option input[type="checkbox"]:checked').forEach(cb => {
                    softwareValues.push(parseInt(cb.value, 10));
                });

                // Show loading state
                const btn = e.currentTarget;
                const originalText = btn.innerHTML;
                btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Processing...';
                btn.disabled = true;

                // AJAX POST to prepare_checkout
                fetch(window.location.href.split('?')[0], {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: new URLSearchParams({
                        action: 'prepare_checkout',
                        scanner: scanner,
                        package: pkg,
                        software: JSON.stringify(softwareValues)
                    })
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success && data.redirect) {
                        window.location.href = data.redirect;
                    } else {
                        alert(data.error || 'Something went wrong. Please try again.');
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    }
                })
                .catch(err => {
                    console.error('Checkout error:', err);
                    alert('Network error. Please try again.');
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                });
            }

            // Bind all "Buy Now" buttons
            document.querySelectorAll('.btn-buy-now, .btn-checkout-primary, .btn-cta-primary').forEach(btn => {
                btn.addEventListener('click', handleBuyNow);
            });

            // ==================== ADD TO CART HANDLER ====================
            function handleAddToCart(e) {
                e.preventDefault();

                const scanner = getSelectedScanner();
                const pkg = getSelectedPackage();

                const softwareValues = [];
                document.querySelectorAll('.software-option input[type="checkbox"]:checked').forEach(cb => {
                    softwareValues.push(parseInt(cb.value, 10));
                });

                const btn = e.currentTarget;
                const originalText = btn.innerHTML;
                btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Adding...';
                btn.disabled = true;

                fetch(window.location.href.split('?')[0], {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: new URLSearchParams({
                        action: 'add_to_cart',
                        scanner: scanner,
                        package: pkg,
                        software: JSON.stringify(softwareValues)
                    })
                })
                .then(res => res.json())
                .then(data => {
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                    if (data.success) {
                        // Show SweetAlert if available, else native alert
                        if (typeof Swal !== 'undefined') {
                            Swal.fire({
                                icon: data.status === 'added' ? 'success' : 'info',
                                title: data.message,
                                showConfirmButton: true,
                                confirmButtonText: 'OK',
                                confirmButtonColor: '#ff931e'
                            });
                        } else {
                            alert(data.message);
                        }
                    } else {
                        alert(data.error || 'Something went wrong.');
                    }
                })
                .catch(err => {
                    console.error('Add to cart error:', err);
                    alert('Network error. Please try again.');
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                });
            }

            // Bind all "Add to Cart" buttons
            document.querySelectorAll('.btn-add-to-cart').forEach(btn => {
                btn.addEventListener('click', handleAddToCart);
            });

            // Initialize prices on load
            updateTotalPrice();
        </script>
</body>

</html>