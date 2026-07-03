<?php
// Start output buffering to guarantee clean header() redirects if needed
ob_start();

include('sql_folder/connect.php');

// ---------- cart count for badge ----------
$cart_count = 0;
if ($r = mysqli_query($con, "SELECT COUNT(*) c FROM `cart`")) {
  $cart_count = (int)mysqli_fetch_assoc($r)['c'];
}

// ---------- fetch product (LIMIT 1 OFFSET 7 like your first page) ----------
$product_offset = isset($_GET['product_offset']) ? (int)$_GET['product_offset'] : 7;
$product = null;
$q = mysqli_query($con, "SELECT * FROM `products` LIMIT 1 OFFSET $product_offset");
if ($q && mysqli_num_rows($q) > 0) {
  $product = mysqli_fetch_assoc($q);
}

$name  = $product ? $product['name']  : 'EINSTAR-Prosumer Portable 3D Scanner';
$price = $product ? (float)$product['price'] : 125000; // INR (DB base price)
$mrp   = ($product && isset($product['mrp'])) ? (float)$product['mrp'] : 225000;
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

// ---------- actions ----------
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

  header("Location: direct-checkout-einstar.php");
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
  <title>Einstar</title>

  <!-- (your SEO tags kept) -->
  <meta name="description" content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries">
  <meta name="keywords" content="3D scanning services,best 3d scanning services in india, best 3d printing services in india, cmm inspection, 3d laser scanner, 3d reverse engineering software">
  <meta property="og:url" content="https://www.precise3dm.com/einstar-product.php" />
  <meta property="og:title" content="Einstar" />
  <link rel="canonical" href="https://www.precise3dm.com/einstar-product.php"/>
  <meta property="og:description" content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries." />
  <meta property="og:image" content="https://www.precise3dm.com/assets/images/einstar-product-img/pro1.png" />
  <meta property="twitter:url" content="https://www.precise3dm.com/einstar-product.php" />
  <meta property="twitter:title" content="Einstar"/>
  <meta property="twitter:description" content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries" />
  <meta property="twitter:image" content="https://www.precise3dm.com/assets/images/einstar-product-img/pro1.png"/>
  
  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/india.css">
  <link rel="stylesheet" href="assets/css/new-buy-now.css"/>
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Precise3DM",
    "item": "https://www.precise3dm.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Einstar Product",
    "item": "https://www.precise3dm.com/einstar-product.php"  
  }]
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.precise3dm.com/einstar-product.php"
  },
  "headline": "Einstar",
  "description": "Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries",
  "image": "https://www.precise3dm.com/assets/images/about-logo.png",  
  "author": {
    "@type": "Organization",
    "name": "Precise3DM",
    "url": "https://www.precise3dm.com/"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "Precise3DM",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.precise3dm.com/assets/images/Precise%20Logos-08.png"
    }
  },
  "datePublished": "2025-04-20",
  "dateModified": "2025-05-01"
}
</script>


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
        <h1>Buy Einstar 3D Scanner Online in India – Free Delivery Across the Country</h1>
      </div>

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
      <div class="row row-cols-lg-2 row-cols-1">
        <div class="col mb-4">
          <div class="row">
            <div class="col-3 col-lg-2 px-lg-0">
              <div class="sub-imgs">
                <img src="assets/images/einstar-product-img/pro1.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-product-img/pro2.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-product-img/pro3.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-product-img/pro4.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-product-img/pro5.png" alt="" onclick="changeMainImage(this)">
              </div>
            </div>
            <div class="col-9 col-lg-10">
              <div class="main-img">
                <img id="mainProductImage" src="assets/images/einstar-product-img/pro1.png" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="product-details">
            <h2>EINSTAR-Prosumer Portable 3D Scanner</h2>

            <div class="price-div">
              <h3>
                ₹<span id="discountedPrice"><?php echo number_format($price/100000, 2); ?></span> Lakhs
                <span class="span"> ₹<?php echo number_format($mrp/100000, 2); ?> Lakhs</span>
              </h3>
              <div class="save-div"><p class="mb-0 text-white">Save ₹20,000</p></div>
            </div>

            <ul class="desc">
              <li>The above price includes the product, training, and local warranty and support.</li>
              <li>Please note that GST is not included in the above price; an additional 18% will be applicable as per GST billing.</li>
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

                    <!-- As requested: do not change this button behaviour -->
                    <button type="submit" name="add_to_cart" class="add-btn" id="cartButton">Add to Cart</button>

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

  <section class="mt-4" id="video">
    <div class="container mt-5">
      <h2 class="sec-head text-center">Demo Videos</h2>
      <div class="slider pt-5" id="dynamicSlider2" data-slide-show="3" data-ml-slide-show="2" data-lg-slide-show="1" data-md-slide-show="1">
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
      </div>
    </div>
  </section>

  <section style="margin-top:80px;" id="desc">
    <div class="container">
      <h2 class="text-center sec-head">Description</h2>
      <p class="mt-5 text-center">The Einstar 3D Scanner is a portable, easy-to-use handheld device that delivers high-precision 3D scanning with rich color detail. Equipped with advanced imaging technology, it captures accurate, textured 3D data quickly and efficiently, making it ideal for applications such as product design, education, art, and digital archiving. Its lightweight design and intuitive software ensure a smooth scanning experience for both beginners and professionals.</p>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="banner-bg banner-bg1">
        <h2>3D scan Indoors and outdoors</h2>
        <p>With three infrared VCSEL projectors, EINSTAR delivers crystal-clear scan data outdoors, ensuring stability and reliability wherever your projects take you.</p>
      </div>
      <div class="banner-bg banner-bg2">
        <h2>Effortlessly</h2>
        <p>Designed with simplicity in mind, EINSTAR offers an ergonomic design, hassle-free setup, and plug-and-play functionality. Whether you're a seasoned professional or just starting out, scanning with EINSTAR is a breeze.</p>
      </div>
      <div class="banner-bg banner-bg3">
        <h2>Comfortable for Eyes, Easy to Scan Hair</h2>
        <p>No projector light during the scanning process.Comfortable and safe for the eyes.Turn on "Hair Mode" to get sufficient hair data for human scans and improve the data completeness.</p>
      </div>
    </div>
  </section>

  <section style="margin-top:80px;" id="spec">
    <div class="container">
      <h2 class="text-center sec-head mb-5">Product Specification</h2>
      <div class="table-div table-responsive">
        <table class="table table-bordered table-specs overflow-x-hidden">
          <tbody>
            <tr><th>Scan Mode</th><td>Structured Light Scan</td><th>Point Distance</th><td>0.1 mm ~ 3 mm</td></tr>
            <tr><th>Light Source</th><td>Infrared VCSEL structured light</td><th>Working Distance</th><td>Effective: 160mm–1400mm<br>Optimal: 400mm</td></tr>
            <tr><th>Depth of Field</th><td>160–1400mm</td><th>Maximum FOV</th><td>434mm × 379mm</td></tr>
            <tr><th>Scan Speed</th><td>980,000 points/s, up to 14FPS</td><th>Align Modes</th><td>Feature, Hybrid, Texture, Global Markers</td></tr>
            <tr><th>Safety</th><td>Eye-safe</td><th>Texture Scan</th><td>Yes</td></tr>
            <tr><th>Interface</th><td>USB 2.0 or above</td><th>Outdoor Scanning</th><td>Yes</td></tr>
            <tr><th>Output Formats</th><td>OBJ; STL; PLY; P3; 3MF</td><th>Scanner Size</th><td>220mm × 46mm × 55mm</td></tr>
            <tr><th>Body Weight</th><td>500g</td><th>Carrying Case Size</th><td>245mm × 245mm × 90mm</td></tr>
            <tr><th>Operating Temperature Range</th><td>0–40°C</td><th>Operating Humidity Range</th><td>10–90%</td></tr>
            <tr>
              <th></th><td></td><th>Recommended Configuration</th>
              <td>OS: Win10/11, 64 bit;<br>Graphics card: NVIDIA GTX1050;<br>Video memory: ≥6GB;<br>Processor: I7-11800H;<br>Memory: ≥32GB<br><br>
                  OS: MAC；<br>Apple Silicon: M1 Pro or higher (8-core GPU or more)；<br>RAM: 32GB or more；<br>USB: 2.0；<br>OS: macOS Ventura 13 or newer
              </td>
            </tr>
            <tr><th>Certifications</th><td>CE, FCC, ROHS, WEEE, KC</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

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
                <span>What is the Einstar 3D scanner?</span>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Einstar is a portable, budget-friendly 3D scanner from Shining 3D that uses advanced VCSEL infrared structured light to capture accurate, high-quality 3D data of objects, people, and scenes. It's ideal for beginners, hobbyists, and professionals.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span>Can I use Einstar as a human body 3D scanner?</span>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. Einstar utilises eye-safe infrared light, making it comfortable for full-face and body scanning for 3D printing, medical device modelling, and various animation applications.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <span>Does Einstar scan dark, shiny, or hairy surfaces?</span>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. Einstar handles challenging materials, such as shiny metal or dark objects, and even hair in the human body.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <span>What software is included with Einstar 3D Scanner and how much does it cost?</span>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Einstar comes with complimentary 3D scanning and post-processing software called EXStar , for real-time scanning, mesh optimisation, and direct export to STL, OBJ, and PLY.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                <span>What file formats can I export from Einstar 3D Scanner?</span>
              </button>
            </h2>
            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>From Einstar 3D Scanner, you can export STL, OBJ, and PLY, compatible with popular scan to CAD and 3D printing software.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                <span>What's included in the box?</span>
              </button>
            </h2>
            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>You get the Einstar scanner, USB cable, tripod, power adapter, calibration board, carry case, quick start guide and free EXStar software.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading7">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                <span>How do I place an online order for Einstar?</span>
              </button>
            </h2>
            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Simply click "Buy Now" on our website, choose your payment option, and complete the checkout. You'll receive an order confirmation instantly from Precise3DM.You can also email sales@precise3dm.com to place your order.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading8">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                <span>Is online payment for a 3D scanner purchase secure?</span>
              </button>
            </h2>
            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. Our payment gateway uses SSL encryption and trusted payment processors to ensure your transaction is safe.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading9">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                <span>Do you offer cash-on-delivery (COD)?</span>
              </button>
            </h2>
            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Currently, all our online orders are processed via secure online payment methods. Contact our sales team at sales@precise3dm.com, sm@precise3dm.com, or call us at +91 9840478347 if you need alternative arrangements. We also offer cash on delivery and payment terms for reputed businesses.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading10">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                <span>How soon will I receive my Einstar after ordering online?</span>
              </button>
            </h2>
            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Orders within India are typically delivered in 3–7 business days, depending on your location.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading11">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                <span>Do you provide training if I buy the Einstar 3D Scanner online?</span>
              </button>
            </h2>
            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Yes. Every online purchase of einstar and Einstar vega includes free remote onboarding and software and hardware training to help you get started immediately.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading12">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                <span>What is the warranty for Einstar?</span>
              </button>
            </h2>
            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>Einstar comes with a 1-year premimum warranty plus full local support from Precise3DM. This warranty can be extended up to 3 more years opn demand.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading13">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                <span>Who do I contact if I have questions before buying?</span>
              </button>
            </h2>
            <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
              data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <p>You can reach Precise3dm sales team via phone or whats app on +91 9840478347 / 6374406179 , or email us at sales@precise3dm.com or sm@precise3dm.com or contact us form on our website for instant assistance on procurment and technical clarifications.</p>
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
