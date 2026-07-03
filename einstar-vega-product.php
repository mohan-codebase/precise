<?php
// Start output buffering to guarantee clean header() redirects if needed
ob_start();

include('sql_folder/connect.php');

// ---------- cart count for badge ----------
$cart_count = 0;
if ($r = mysqli_query($con, "SELECT COUNT(*) c FROM `cart`")) {
  $cart_count = (int)mysqli_fetch_assoc($r)['c'];
}

// ---------- fetch product (LIMIT 1 OFFSET 8 for Vega) ----------
$product_offset = isset($_GET['product_offset']) ? (int)$_GET['product_offset'] : 8;
$product = null;
$q = mysqli_query($con, "SELECT * FROM `products` LIMIT 1 OFFSET $product_offset");
if ($q && mysqli_num_rows($q) > 0) {
  $product = mysqli_fetch_assoc($q);
}

$name  = $product ? $product['name']  : 'EINSTAR VEGA-Wireless All-In-One 3D Scanner';
$price = $product ? (float)$product['price'] : 125000; // INR (DB base price)
$mrp   = ($product && isset($product['mrp'])) ? (float)$product['mrp'] : 270000;
$image = $product ? $product['image'] : 'assets/images/einstar-product-img/pro1.png';

// ---------- helpers ----------
function esc($c, $v){ return mysqli_real_escape_string($c, $v); }

// ---------- fallback: read mrp from `einscan hx` if products.mrp is empty ----------
if (!$mrp) {
  $nameEsc = esc($con, $name);
  if ($mr = mysqli_query($con, "SELECT mrp FROM `einscan hx` WHERE title='$nameEsc' LIMIT 1")) {
    if ($row = mysqli_fetch_assoc($mr)) {
      $mrp = (float)$row['mrp'];
    }
  }
}

// ---------- messages ----------
$display_message = "";
$message_class = "";

/**
 * Apply DIS coupon exactly once to a base amount.
 * Code format: DIS#### (2–7 digits), flat rupee off.
 */
function apply_dis_coupon_once($code, $baseAmount){
  $code = strtoupper(trim($code ?? ''));
  $amount = (float)$baseAmount;
  if (preg_match('/^DIS(\d{2,7})$/', $code, $m)) {
    $flat = (int)$m[1];
    $amount -= $flat;
    if ($amount < 0) $amount = 0;
  }
  return $amount;
}

// ---------- actions ----------

// Add to cart
if (isset($_POST['add_to_cart'])) {
  $pname  = esc($con, $_POST['product_name'] ?? $name);
  $pimg   = esc($con, $_POST['product_image'] ?? $image);
  $qty    = max(1, (int)($_POST['buy_qty'] ?? 1));

  // IMPORTANT: Always compute from DB base $price, apply coupon ONCE
  $coupon = $_POST['coupon_code'] ?? '';
  $finalPrice = apply_dis_coupon_once($coupon, $price);

  $finalPriceEsc = esc($con, (string)$finalPrice);

  // If same title already in cart, show alert only (do NOT alter button)
  $exists = mysqli_query($con, "SELECT id FROM `cart` WHERE title='$pname' LIMIT 1");
  if ($exists && mysqli_num_rows($exists) > 0) {
    $display_message = "Product already in the Cart";
    $message_class = "already_added";
  } else {
    mysqli_query($con, "INSERT INTO `cart` (image,title,quantity,price) 
      VALUES ('$pimg','$pname','$qty','$finalPriceEsc')");
    $display_message = "Product Added to the Cart";
    $message_class = "added";
    $cart_count++;
  }
}

// Buy now
if (isset($_POST['buy_now'])) {
  $pname  = esc($con, $_POST['product_name'] ?? $name);
  $qty    = max(1, (int)($_POST['buy_qty'] ?? 1));
  $pmrp   = esc($con, (string)($mrp ?? 0));

  // Compute once from DB base price
  $coupon = $_POST['coupon_code'] ?? '';
  $finalPrice = apply_dis_coupon_once($coupon, $price);

  $finalPriceEsc = esc($con, (string)$finalPrice);
  $qtyEsc    = esc($con, (string)$qty);

  // Upsert into `einscan hx` for direct checkout page
  $chk = mysqli_query($con, "SELECT id FROM `einscan hx` WHERE title='$pname' LIMIT 1");
  if ($chk && mysqli_num_rows($chk) > 0) {
    $row = mysqli_fetch_assoc($chk);
    $id  = (int)$row['id'];
    mysqli_query($con, "UPDATE `einscan hx` 
      SET quantity='$qtyEsc', price='$finalPriceEsc', mrp='$pmrp' 
      WHERE id='$id'");
  } else {
    mysqli_query($con, "INSERT INTO `einscan hx` (title, price, quantity, mrp) 
      VALUES ('$pname','$finalPriceEsc','$qtyEsc','$pmrp')");
  }

  header("Location: direct-checkout-einstar-vega.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- one, correct viewport meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Einstar Vega</title>

  <!-- SEO (kept from your version) -->
  <meta name="description" content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries">
  <meta name="keywords" content="3D scanning services,best 3d scanning services in india, best 3d printing services in india, cmm inspection, 3d laser scanner, 3d reverse engineering software">

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/india.css">
  <link rel="stylesheet" href="assets/css/einstar-vega-product.css"/>
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- GTM (kept) -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5FX95R9');</script>
</head>

<body>
  <?php include('includes/header.php'); ?>

  <!-- ================= Hero ================= -->
  <section class="hero">
    <div class="container px-2">
      <!-- Call Section -->
      <div class="call">
        <a href="tel:+919840478347" class="btn">
          <div class="call-icon"><img src="assets/images/3d-light-scanner/call.png" alt="Call Icon"></div>
        </a>
        <div class="call-text">
          <h5>Call us now</h5>
          <p>+91 98404 78347 <span>|</span> +91 63744 06179</p>
        </div>
      </div>

      <!-- Hero Heading -->
      <div class="hero-head">
        <h1>Buy Einstar Vega 3D Scanner Online</h1>
      </div>
      <h4> High-Performance <span>|</span> Lightweight <span>|</span> Affordable </h4>

      <!-- Quote Button -->
      <a href="#over" class="btn mt-3">Buy now Online</a>

      <!-- Mail Section -->
      <div class="mail">
        <a href="mailto:sm@precise3dm.com" class="btn">
          <div class="mail-icon"><img src="assets/images/3d-light-scanner/mail.png" alt="Mail Icon"></div>
        </a>
        <div class="mail-text">
          <h5>Email us</h5>
          <p>sm@precise3dm.com <span>|</span> sales@precise3dm.com</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= Sticky nav ================= -->
  <section class="border-bottom stick-cont">
    <div class="container ">
      <div class="nav-two">
        <div class="nav-two-div">
          <a href="#over" class="active">Overview</a>
          <a href="#desc">Description</a>
          <a href="#video">Videos</a>
          <a href="#spec">Specifications</a>
          <a href="#gall">3D Data Gallery</a>
          <a href="#FAQ">FAQs</a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= Product block ================= -->
  <section class="mt-4" id="over">
    <div class="container">
      <div class="row row-cols-lg-2 row-cols-1 ">
        <div class="col mb-4">
          <div class="row">
            <!-- Thumbnails -->
            <div class="col-3 col-lg-2 px-lg-0">
              <div class="sub-imgs">
                <img src="assets/images/einstar-vega-product/pro1.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-vega-product/pro2.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-vega-product/pro3.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-vega-product/pro4.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-vega-product/pro5.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-vega-product/pro6.png" alt="" onclick="changeMainImage(this)">
              </div>
            </div>
            <!-- Main image -->
            <div class="col-9 col-lg-10">
              <div class="main-img">
                <img id="mainProductImage" src="assets/images/einstar-vega-product/pro1.png" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="product-details">
            <h2>EINSTAR VEGA-Wireless All-In-One 3D Scanner</h2>
            <div class="price-div">
              <h3>
                ₹<span id="discountedPrice"><?php echo number_format($price/100000, 2); ?></span> Lakhs
                <span class="span"> ₹<?php echo number_format($mrp/100000, 2); ?> Lakhs</span>
              </h3>
              <div class="save-div"><p class="mb-0 text-white">Save ₹20,000</p></div>
            </div>

            <ul class="desc">
              <li><b>Einstar Vega</b> is your ideal entry-level handheld 3D scanner, perfect for professionals and creators who need fast, accurate, and affordable 3D scanning solutions</li>
              <li>Whether you're into product design, education, 3D printing, or reverse engineering — <b>Vega delivers powerful results at your fingertips.</b></li>
            </ul>

            <div class="add-to-card-div">
              <form method="post" class="buy-form" action="">
                <div class="cart-add-div">
                  <div class="d-flex gap-4">
                    <div class="quantity-box">
                      <button type="button" class="quantity-btn" id="decrease">-</button>
                      <input type="text" class="quantity-input" id="quantity" value="1" readonly>
                      <button type="button" class="quantity-btn" id="increase">+</button>
                    </div>

                    <!-- hidden fields used by PHP -->
                    <input type="hidden" name="product_name"  value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>">
                    <!-- IMPORTANT: do NOT send discounted price; server uses DB price + coupon once -->
                    <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($image, ENT_QUOTES); ?>">
                    <input type="hidden" name="buy_qty" id="buy_qty" value="1">
                    <input type="hidden" name="coupon_code" id="coupon_code" value="">

                    <button type="submit" name="add_to_cart" class="add-btn">Add to Cart</button>

                    <a href="cart.php" class="position-relative d-flex align-items-center">
                      <i class="fa-solid fa-cart-shopping"></i>
                      <?php if ($cart_count > 0): ?>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo $cart_count; ?></span>
                      <?php endif; ?>
                    </a>
                  </div>
                </div>

                <button type="submit" name="buy_now" class="buy-now-btn">Buy it Now</button>
              </form>
            </div>

            <p class="mt-3">Copy the coupon code you received from our email campaign or Precise3DM sales representative. Enter the correct code to apply the discount, if applicable.</p>

            <!-- Coupon UI (client-side preview only). Server applies it ONCE. -->
            <div class="coupon-input">
              <input type="text" id="couponInput" placeholder="Enter Coupon Code">
              <button type="button" id="applyCouponBtn">Apply</button>
            </div>

            <div class="cards-details">
              <div class="cards-row border-bottom">
                <p>Pay with Ease</p>
                <div class="cards-div"><img src="assets/images/einstar-product-img/card-brand.png" alt=""></div>
              </div>
              <div class="cards-row">
                <p>Trusted Delivery</p>
                <div class="cards-div"><img src="assets/images/einstar-product-img/delivery-brand.png" alt=""></div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===== Videos ===== -->
  <section class="mt-4" id="video">
    <div class="container mt-5">
      <h2 class="sec-head text-center">Demo Videos</h2>
      <!-- <div class="slider pt-5" id="dynamicSlider2" data-slide-show="3" data-ml-slide-show="2" data-lg-slide-show="1" data-md-slide-show="1">
        <div class="video-card">
          <a href="https://youtu.be/UhlRsD0kfX8?si=s1UGi2GU4HDtA3yk"><img src="assets/images/einstar/img29.png" alt=""></a>
          <p>Shining3D Einstar 3D Scanner Review and Testing</p>
        </div>
        <div class="video-card">
          <a href="https://youtube.com/shorts/U2vUbFduSgE?si=TVt2tGU7UUaWk2GF"><img src="assets/images/einstar/img30.png" alt=""></a>
          <p>Start with the hardware ｜Be an Einstar Master</p>
        </div>
        <div class="video-card">
          <a href="https://youtu.be/bNL1pv-pzeE?si=lWJDMGaExbzMKIlR"><img src="assets/images/einstar/img31.png" alt=""></a>
          <p>Einstar Demo: The Entire Operation Process of Portrait Mode Scan</p>
        </div>
        <div class="video-card">
          <a href="https://youtu.be/UhlRsD0kfX8?si=s1UGi2GU4HDtA3yk"><img src="assets/images/einstar/img29.png" alt=""></a>
          <p>EinScan H2 | Hybrid LED & Infrared Light Source Handheld 3D Scanner</p>
        </div>
        <div class="video-card">
          <a href="https://youtube.com/shorts/U2vUbFduSgE?si=TVt2tGU7UUaWk2GF"><img src="assets/images/einstar/img30.png" alt=""></a>
          <p>EP3: How to 3D Scan a Vase with EinScan H2 White Light Mode</p>
        </div>
        <div class="video-card">
          <a href="https://youtu.be/bNL1pv-pzeE?si=lWJDMGaExbzMKIlR"><img src="assets/images/einstar/img31.png" alt=""></a>
          <p>EP4: How to 3D Scan a Black Object with EinScan H2 IR Mode</p>
        </div>
      </div> -->
      <div class="row row-cols-1 row-cols-lg-2">
        <div class="col">
          <iframe width="100%" height="400" src="https://www.youtube.com/embed/qT2GBu3CsC8?si=nbLV3uXu3iMQR22w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="col mt-lg-0 mt-4">
          <iframe width="100%" height="400" src="https://www.youtube.com/embed/ivSM_m-ZN_8?si=ZBIZXE1XkGLeJyNO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Description ===== -->
  <section style="margin-top:80px;" id="desc">
    <div class="container">
      <h2 class="text-center sec-head">Description</h2>
      <p class="mt-3 mb-5 text-center">The Einstar Vega 3D Scanner delivers high-precision scanning with fast capture speed, making it ideal for professionals in design, engineering, and 3D modeling. Compact and easy to use, it ensures accurate details for objects of all sizes.</p>
    </div>
  </section>

  <!-- ===== Banners (kept as-is) ===== -->
  <section>
    <div class="container">
      <div class="banner-2 bg-banner">
        <div class="banner-inner">
          <h4>Automotive </h4>
          <p>The high frame rates, larger field of view (FOV), and superior algorithms make Einstar Vega capable of 3D scanning automotive plastic parts of all sizes. </p>
        </div>
      </div>
      <div class="banner-3 bg-banner">
        <div class="banner-inner">
          <h4>Cultural and Art Heritage </h4>
          <p>The outstanding 48MP camera, with a 0.05mm resolution, effortlessly captures fine details and texture. Its outdoor scanning abilities make it perfect for on-location and digital art and cultural projects. </p>
        </div>
      </div>
      <div class="banner-4 bg-banner">
        <div class="banner-inner">
          <h4>Research and Education</h4>
          <p>The user-friendly interface, cost-effectiveness, wireless design, and intuitive scanning process make it a versatile solution for educational projects and research in any setting. </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== Specs (kept) ===== -->
  <section style="margin-top:80px;" id="spec">
    <div class="container">
      <h2 class="text-center sec-head mb-5">Product Specification</h2>
      <div class="table-div table-responsive">
        <table class="table table-bordered table-specs overflow-x-hidden">
          <tbody>
            <tr><th>Scan Mode</th><td>HD Mode<br> Fast Mode</td><th>Light Source</th><td>HD Mode: Infrared MEMS<br>Fast Mode: Infrared VCSEL</td></tr>
            <tr><th>Point Distance</th><td>HD Mode: 0.05mm~3mm<br>Fast Mode: 0.5mm~10mm</td><th>Capture Frame</th><td>HD Mode: up to 15 fps<br>Fast Mode: up to 20 fps</td></tr>
            <tr><th>Working Distance</th><td>HD Mode: 100-350mm<br>Fast Mode: 270-1500mm</td><th>IR Camera Resolution</th><td>HD Mode: 2MP<br>Fast Mode: 1.3MP</td></tr>
            <tr><th>Align Mode</th><td>Feature; Texture; Markers; Hybrid</td><th>Color Camera Resolution</th><td>48 MP</td></tr>
            <tr><th>Output Formats</th><td>ply; obj; stl; asc</td><th>Outdoor Scan</th><td>Yes</td></tr>
            <tr><th>Scanner Body Weight</th><td>Limited edition: 643g<br>Regular edition: 535g</td><th>Scanner Size</th><td>190mm*59mm*26.5mm<br>(L*W*H)</td></tr>
            <tr><th>CPU</th><td>8-core CPU, 2.4GHz</td><th>RAM</th><td>32GB LPDDR4 Memory</td></tr>
            <tr><th>Internal Hard Drive</th><td>32GB eMMC + 512GB SSD</td><th>Power Charger</th><td>65W fast charging, supports PD/PPS protocols</td></tr>
            <tr><th>Interface</th><td>Wi-Fi 6, USB Type C</td><th>Touchscreen</th><td>6.4" 2K OLED</td></tr>
            <tr><td class="d-flex"><b>Supplemental Light</b> <span class="ml-5 pl-5">10</span></td><td><b>IMU</b> <span class="ms-5">6 DoF</span></td><td></td></tr>
            <tr><th>Operating Temperature Range</th><td>-10°C~40°C</td><th>Operating Humidity Range</th><td>10 to 90% RH (non-condensing)</td></tr>
            <tr><th>Packing Size</th><td>380×305×155+Protection Grade: IP50</td></tr>
            <tr>
              <th>Battery</th><td>Built-in 5000mAh;<br> External power bank charging supported</td>
              <th>Supported OS</th>
              <td>No computer required for 3D scanning operation.<br><br>
                StarVision (Data processing program on PC)
                Windows10/11(64-bit); macOS<br><br>
                Recommended PC configuration: Intel i7, 32GB RAM, macOS 11.0 (on Apple chip)
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ===== Gallery (kept) ===== -->
  <section style="margin-top:60px;" id="gall">
    <div class="container">
      <h2 class="sec-head text-center mb-3">3D Data Gallery</h2>
      <div class="row row-cols-1 row-cols-lg-3">
        <div class="col">
          <div class="3d-model">
            <div class="sketchfab-embed-wrapper">
              <iframe title="Marseille Sculpture By Einscan SE" height="300px" width="100%" frameborder="0" allowfullscreen allow="autoplay; fullscreen; xr-spatial-tracking" src="https://sketchfab.com/models/88bec178f71941ba91e30a129ff1692a/embed"></iframe>
              <p style="font-size:13px;margin:5px;color:#4A4A4A;">
                <a href="https://sketchfab.com/3d-models/marseille-sculpture-by-einscan-se-88bec178f71941ba91e30a129ff1692a" target="_blank" style="font-weight:bold;color:#1CAAD9;">Marseille Sculpture By Einscan SE</a> by
                <a href="https://sketchfab.com/precise3dmetrlogy" target="_blank" style="font-weight:bold;color:#1CAAD9;">PRECISE3DM</a> on
                <a href="https://sketchfab.com" target="_blank" style="font-weight:bold;color:#1CAAD9;">Sketchfab</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="3d-model">
            <div class="sketchfab-embed-wrapper">
              <iframe title="Washington Sculpture by Einscan SE" height="300px" width="100%" frameborder="0" allowfullscreen allow="autoplay; fullscreen; xr-spatial-tracking" src="https://sketchfab.com/models/a0e1ab03adb14e02924d0230b1423536/embed"></iframe>
              <p style="font-size:13px;margin:5px;color:#4A4A4A;">
                <a href="https://sketchfab.com/3d-models/washington-sculpture-by-einscan-se-a0e1ab03adb14e02924d0230b1423536" target="_blank" style="font-weight:bold;color:#1CAAD9;">Washington Sculpture by Einscan SE</a> by
                <a href="https://sketchfab.com/precise3dmetrlogy" target="_blank" style="font-weight:bold;color:#1CAAD9;">PRECISE3DM</a> on
                <a href="https://sketchfab.com" target="_blank" style="font-weight:bold;color:#1CAAD9;">Sketchfab</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="3d-model">
            <div class="sketchfab-embed-wrapper">
              <iframe title="Sculpture scanning by Einscan SE" height="300px" width="100%" frameborder="0" allowfullscreen allow="autoplay; fullscreen; xr-spatial-tracking" src="https://sketchfab.com/models/dba84efc3ee14769afe7d38b55e8ec68/embed"></iframe>
              <p style="font-size:13px;margin:5px;color:#4A4A4A;">
                <a href="https://sketchfab.com/3d-models/sculpture-scanning-by-einscan-se-dba84efc3ee14769afe7d38b55e8ec68" target="_blank" style="font-weight:bold;color:#1CAAD9;">Sculpture scanning by Einscan SE</a> by
                <a href="https://sketchfab.com/precise3dmetrlogy" target="_blank" style="font-weight:bold;color:#1CAAD9;">PRECISE3DM</a> on
                <a href="https://sketchfab.com" target="_blank" style="font-weight:bold;color:#1CAAD9;">Sketchfab</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================
      FAQ Section start
  ========================-->
  <section>
    <div id="FAQ" class="container pt-5 pb-5 faq">
      <h2 class="container-head text-center">FREQUENTLY ASKED QUESTIONS</h2>
      <div id="style-3" class="row mt-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                <span>What is the Einstar Vega 3D Scanner, and what makes it different from other 3D scanners?</span>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Einstar Vega has got a inbuilt display and a complete wireless option. That, it does not need a Computer device to view the data are for registration Also, yoga is a scanner. Can be used for canvas, small object at the same time, bigger objects Using Two different types of a scanning model Which is usually not available in other different types of scanners.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span>How easy is it to operate for a first-time user?</span>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Very easy. It comes with intuitive software called Star Vision, a plug-and-play setup, and step-by-step scanning guidance is available inside the software. Even beginners can achieve professional-grade results with minimal training.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <span>Does the Einstar Vega come with scanning software?</span>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. It includes proprietary scanning software with features like real-time preview, automatic alignment, and post-processing tools for mesh optimisation, making it a complete 3d scanning solution for 3D printing and other applications.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <span>What is included in the box when I buy the Einstar Vega online?</span>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>The package includes the Einstar Vega 3D scanner, power adapter, USB cable, calibration board, scanning software license, and a detailed user manual.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>Does it come with a warranty and local support in India?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. When you purchase from Precise3DM, Shining 3D’s authorised reseller in India, you receive a 1-year manufacturer’s warranty plus local technical support, training, and service assistance.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>Can I get a live demo before buying the Einstar Vega?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Absolutely. We offer free online or on-site demos where you can see the scanner in action on your actual parts. Just fill out the demo request form on this page or meet us live online.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading7">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <span>How do I place an order and make the payment?</span>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>You can order directly through this page by filling out the purchase form. We accept bank transfers, credit/debit cards, and UPI payments. Once we receive the order, we will ship it to the delivery address and bill it to the billing address.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading8">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                <span>What is the delivery time once I purchase the scanner online?</span>
              </button>
            </h2>
            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Delivery typically takes 2-7 working days across India, depending on your location. We provide tracking details once your scanner is shipped.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading9">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                <span>Do you provide training on how to use the Einstar Vega?</span>
              </button>
            </h2>
            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. Every purchase includes free basic training sessions (online or on-site) to ensure you and your team can start scanning immediately. Advanced training packages are also available.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading10">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                <span>What if I face issues after purchase?</span>
              </button>
            </h2>
            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Our dedicated support team is available via phone, email, or remote assistance to troubleshoot any problems. If required, we also provide on-site service.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading11">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                <span>Can I integrate the scan data with my CAD software?</span>
              </button>
            </h2>
            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. The Einstar Vega exports data in STL, OBJ, PLY, and ASC formats, compatible with all major CAD software like SolidWorks, CATIA, NX, Geomagic, and more.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading12">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                <span>Why should I buy the Einstar Vega from Precise3DM and not from another seller?</span>
              </button>
            </h2>
            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Because Precise3DM is India’s largest 3D scanning solution provider and Shining 3D’s master reseller, ensuring ready stocks of authentic products, competitive pricing, local warranty, and expert support—advantages that generic sellers simply can’t match.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading13">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                <span>Do you offer EMI or financing options?</span>
              </button>
            </h2>
            <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes, we have easy EMI and leasing options for businesses and professionals. Contact our sales team for details at 9840478347 or 6374406179.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading14">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                <span>Can the Einstar Vega scan shiny or dark surfaces without special treatment?</span>
              </button>
            </h2>
            <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>It can handle most surfaces well, but for highly reflective or transparent objects, we recommend using a 3D scanning spray for best results.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading15">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                <span>Is the Einstar Vega portable? Can I carry it to client sites?</span>
              </button>
            </h2>
            <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Absolutely. The scanner is lightweight, compact, and comes with a carrying case, making it perfect for mobile scanning projects.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ==================
      FAQ Section end
  ========================-->

  <hr class="separator">

  <?php include('includes/footer.php'); ?>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/slim.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <!-- second nav active toggle -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const links = document.querySelectorAll('.nav-two-div a');
      links.forEach(link => {
        link.addEventListener('click', () => {
          const current = document.querySelector('.nav-two-div a.active');
          if (current) current.classList.remove('active');
          link.classList.add('active');
        });
      });
    });
  </script>

  <script>
    // Thumbnail -> main image
    function changeMainImage(smallImg) {
      document.getElementById("mainProductImage").src = smallImg.src;
    }

    // Quantity
    const decreaseBtn = document.getElementById('decrease');
    const increaseBtn = document.getElementById('increase');
    const quantityInput = document.getElementById('quantity');
    const buyQtyHidden = document.getElementById('buy_qty');

    function setQty(q) {
      const n = Math.max(1, parseInt(q || 1, 10));
      quantityInput.value = n;
      buyQtyHidden.value = n;
    }
    decreaseBtn.addEventListener('click', () => setQty(parseInt(quantityInput.value, 10) - 1));
    increaseBtn.addEventListener('click', () => setQty(parseInt(quantityInput.value, 10) + 1));
    setQty(1);

    // Coupon preview (client-side only): updates visible price and stores code;
    // server will compute from DB base price exactly once.
    const ORIGINAL_PRICE = <?php echo (int)$price; ?>;
    const discountedPriceEl = document.getElementById('discountedPrice');
    const couponInput = document.getElementById('couponInput');
    const couponCodeHidden = document.getElementById('coupon_code');
    document.getElementById('applyCouponBtn').addEventListener('click', function(){
      const code = (couponInput.value || '').trim().toUpperCase();
      let discounted = ORIGINAL_PRICE;

      const m = code.match(/^DIS(\d{2,7})$/);
      if (m) {
        const flat = parseInt(m[1], 10) || 0;
        discounted = Math.max(0, ORIGINAL_PRICE - flat);
        couponCodeHidden.value = code; // tell server to apply ONCE
      } else {
        couponCodeHidden.value = ''; // invalid -> no discount
      }
      discountedPriceEl.textContent = (discounted / 100000).toFixed(2);
    });

    // ensure latest qty + coupon stored before submit
    document.querySelectorAll('form.buy-form button[type="submit"]').forEach(btn => {
      btn.addEventListener('click', () => setQty(quantityInput.value));
    });

    // SweetAlert: show only alert, no button changes
    <?php if (!empty($display_message)): ?>
    document.addEventListener('DOMContentLoaded', function(){
      Swal.fire({
        icon: <?php echo json_encode($message_class === 'added' ? 'success' : 'info'); ?>,
        title: <?php echo json_encode($display_message); ?>,
        confirmButtonText: "OK"
      });
    });
    <?php endif; ?>
  </script>

  <script>
    // Slick init
    function initializeSlider(selector, options) {
      const defaultOptions = { autoplay:false, autoplaySpeed:2000, dots:true, arrows:true };
      const mergedOptions = { ...defaultOptions, ...options };
      $(document).ready(function(){ $(selector).slick(mergedOptions); });
    }
    function initializeDynamicSlider(selector) {
      const fetchData = { slideShow:5, mlSlideShow:2, lgSlideShow:3, mdSlideShow:2 };
      $(selector).attr('data-slide-show', fetchData.slideShow);
      $(selector).attr('data-ml-slide-show', fetchData.mlSlideShow);
      $(selector).attr('data-lg-slide-show', fetchData.lgSlideShow);
      $(selector).attr('data-md-slide-show', fetchData.mdSlideShow);
      initializeSlider(selector, {
        slidesToShow: fetchData.slideShow,
        slidesToScroll: 1,
        responsive: [
          { breakpoint: 991, settings: { slidesToShow: fetchData.mdSlideShow } },
          { breakpoint: 768, settings: { slidesToShow: 1 } },
          { breakpoint: 576, settings: { slidesToShow: 2 } }
        ]
      });
    }
    initializeDynamicSlider('#dynamicSlider2');
  </script>
</body>
</html>
