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
$product_offset = isset($_GET['product_offset']) ? (int)$_GET['product_offset'] :9;
$product = null;
$q = mysqli_query($con, "SELECT * FROM `products` LIMIT 1 OFFSET $product_offset");
if ($q && mysqli_num_rows($q) > 0) {
  $product = mysqli_fetch_assoc($q);
}

$name  = $product ? $product['name']  : 'EINSTAR 2-Still EINSTAR, Even Better';
$price = $product ? (float)$product['price'] : 125000; // INR (DB base price)
$mrp   = ($product && isset($product['mrp'])) ? (float)$product['mrp'] : 160000;
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

 header("Location: direct-checkout-einstar-2.php?qty=" . urlencode($qty));
exit();


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
  <title>Einstar 2</title>

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
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
  <link rel="stylesheet" href="assets/css/einstar-rockit.css"/>
  <link rel="canonical" href="https://www.precise3dm.com/einstar-2-product.php"/>

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

 
  <!-- ================= Product block ================= -->
  <section class="mt-5 pt-lg-5" id="over">
    <div class="container mt-lg-5">
      <div class="row row-cols-lg-2 row-cols-1 ">
        <div class="col mb-4">
          <div class="row">
            <!-- Thumbnails -->
            <div class="col-3 col-lg-2 px-lg-0">
              <div class="sub-imgs">
                <img src="assets/images/einstar-2/pro1.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-2/pro2.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-2/pro3.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-2/pro4.png" alt="" onclick="changeMainImage(this)">
                <img src="assets/images/einstar-2/pro5.png" alt="" onclick="changeMainImage(this)">
              </div>
            </div>
            <!-- Main image -->
            <div class="col-9 col-lg-10">
              <div class="main-img">
                <img id="mainProductImage" src="assets/images/einstar-2/pro1.png" alt="">
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="product-details">
            <h1>EINSTAR 2-Still EINSTAR, Even Better</h1>
            <div class="price-div">
              <h3>
                ₹<span id="discountedPrice"><?php echo number_format($price/100000, 2); ?></span> Lakhs
                <span class="span"> ₹<?php echo number_format($mrp/100000, 2); ?> Lakhs</span>
              </h3>
              <div class="save-div"><p class="mb-0 text-white">Save ₹20,000</p></div>
            </div>

            <ul class="desc">
              <li>High-precision handheld 3D scanner for fast and accurate object digitization</li>
              <li>Up to 0.1 mm accuracy, ideal for engineering, design, and inspection</li>
              <li>Dual infrared structured-light scanning for stable and detailed captures</li>
              <li>Works well on dark and reflective surfaces with minimal spray</li>
              <li>Lightweight, portable, and easy to use for beginners and professionals</li>
              <li>Real-time scanning with smooth data capture and minimal post-processing</li>
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

  <!-- <script>
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
  </script> -->
</body>
</html>
