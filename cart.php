<?php
// cart.php (no coupon logic)

// ---- bootstrap ----
ob_start();
include('sql_folder/connect.php');

// ---- helpers ----
function h($str){ return htmlspecialchars($str ?? '', ENT_QUOTES, 'UTF-8'); }

// Live INR->USD (ExchangeRate-API) — USD per 1 INR (optional for PayPal)
function getConversionRateUSDPerINR(){
  $api_key = 'facd4f4be3bf114b23aff010'; // move to env in production
  $url = "https://v6.exchangerate-api.com/v6/{$api_key}/latest/INR";

  if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 10,
    ]);
    $response = curl_exec($ch);
    curl_close($ch);
  } else {
    $response = @file_get_contents($url);
  }
  if ($response === false) return false;
  $data = json_decode($response, true);
  return isset($data['conversion_rates']['USD']) ? (float)$data['conversion_rates']['USD'] : false;
}

// -------------------------
// Update quantity (per-row form)
// -------------------------
if (isset($_POST['update_product_quantity'])) {
  $update_value = max(1, (int)($_POST['update_quantity'] ?? 1));
  $update_id    = (int)($_POST['update_quantity_id'] ?? 0);
  if ($update_id > 0) {
    mysqli_query($con, "UPDATE `cart` SET quantity = {$update_value} WHERE id = {$update_id}");
  }
  header('Location: cart.php');
  exit;
}

// -------------------------
// Remove item
// -------------------------
if (isset($_GET['remove'])) {
  $remove_id = (int)$_GET['remove'];
  if ($remove_id > 0) {
    mysqli_query($con, "DELETE FROM `cart` WHERE id = {$remove_id}");
  }
  header('Location: cart.php');
  exit;
}

// -------------------------
// Cart data (multi-item)
// -------------------------
$cart_rs       = mysqli_query($con, "SELECT * FROM `cart`");
$row_count     = $cart_rs ? mysqli_num_rows($cart_rs) : 0;
$total_price   = 0;
$total_qty     = 0;
$cart_items    = [];
$product_names = [];

if ($row_count > 0) {
  while ($row = mysqli_fetch_assoc($cart_rs)) {
    // IMPORTANT: We trust the stored line price as FINAL (already discounted on product page).
    $price    = (float)($row['price'] ?? 0);
    $qty      = max(1, (int)($row['quantity'] ?? 1));
    $subtotal = $price * $qty;

    $total_price += $subtotal;
    $total_qty   += $qty;

    $title = $row['title'] ?? 'Product';
    $product_names[] = $title;

    $cart_items[] = $row + ['_subtotal' => $subtotal, '_qty' => $qty];
  }
}

$products_label = $row_count > 0 ? implode(', ', array_map('h', $product_names)) : 'No products';

// -------------------------
// Charges (NO COUPON HERE)
// -------------------------
$shipping   = 0;        // Free shipping
$insurance  = 0;
$gstRate    = 0.18;

$discounted_subtotal = $total_price;            // same as total (no extra discount here)
$gstAmount           = round($discounted_subtotal * $gstRate);
$finalTotal          = round($discounted_subtotal + $shipping + $insurance + $gstAmount);

// -------------------------
// USD for PayPal (AFTER final total)
// -------------------------
$conversion_rate = getConversionRateUSDPerINR();     // USD per 1 INR
$total_usd = $conversion_rate !== false ? number_format($finalTotal * $conversion_rate, 2, '.', '') : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <!-- Fixed viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Cart & Checkout</title>

  <!-- SEO -->
  <meta name="description" content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries">
  <meta name="keywords" content="3D scanning services,best 3d scanning services in india, best 3d printing services in india, cmm inspection, 3d laser scanner, 3d reverse engineering software">
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="revisit-after" content="7 days" />
  <meta name="twitter:image" content="https://www.precise3dm.com/assets/images/about-logo.png" />
  <meta name="twitter:card" content="Precise3dm" />
  <meta name="twitter:site" content="@precise3d_m" />
  <meta name="twitter:title" content="Precise3dm" />
  <meta name="twitter:description" content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries" />
  <meta property="og:type" content="3D Scanning" />
  <meta property="og:title" content="3D scanning services | 3D Printing Services | 3D software | 3D Printer" />
  <meta property="og:url" content="https://www.precise3dm.com/" />
  <meta property="og:image" content="https://www.precise3dm.com/assets/images/about-logo.png" />
  <meta property="og:description" content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries" />
  <link rel="canonical" href="https://www.precise3dm.com/" />

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/india.css">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">

  <!-- Analytics/Pixels (kept) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96527116-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); gtag('config', 'UA-96527116-1');
  </script>
  <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2980089008869976'); fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2980089008869976&ev=PageView&noscript=1"/></noscript>

  <script type="text/javascript">
    _linkedin_partner_id = "2283548";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  </script>
  <script type="text/javascript">
    (function(){var s=document.getElementsByTagName("script")[0];
    var b=document.createElement("script"); b.type="text/javascript"; b.async=true;
    b.src="https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b,s);})();
  </script>
  <noscript>
    <img height="1" width="1" style="display:none;" alt=""
      src="https://px.ads.linkedin.com/collect/?pid=2283548&fmt=gif" />
  </noscript>

  <!-- reCAPTCHA (once) -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <style>
    /* cart styles */
    table img { width:30%; }
    .cart_div { display:flex; justify-content:center; background-color:#FFF9F3!important; padding:50px 20px 90px 20px; }
    .cart_div2 { border-radius:20px; height: 100%; }
    td, th { text-align:center!important; padding:20px 10px 20px 0!important; }
    .table-contacts td, th { border-bottom:1px solid #eee!important; border-left:none!important; border-right:none!important; border-top:none!important; }
    .cart_price { font-size:20px; color:#57BF6D; }
    .update-quantity { border:none; border-radius:50%; margin-left:7px; background:transparent; color:#000; }
    .decrease { color:#FF8A00; font-size:30px; padding:0 10px; cursor:pointer; border-top-left-radius:10px; border-bottom-left-radius:10px; background-color:#FEEFDE; }
    .increase { color:#FF8A00; font-size:30px; cursor:pointer; padding:0 10px; border-top-right-radius:10px; border-bottom-right-radius:10px; background-color:#FEEFDE; }
    .increment { width:17%; height:38px; background:transparent; font-size:26px; border:none; text-align:end; }
    .cart-final { display:flex; justify-content:space-between; }
    .pay-btn, .buy_now, .next-btn { width:100%; border:none; padding:20px 70px; background-color:#ff8d1e; text-align:center; border-radius:16px; color:#fff; font-size:20px; box-shadow:rgba(50,50,93,.25) 0 50px 100px -20px, rgba(0,0,0,.3) 0 30px 60px -30px; font-family:"Inter",sans-serif!important; margin-top:20px; transition:.5s all; position:relative; }
    .pay-btn:hover, .buy_now:hover { background-color:#000; border:1px solid #ff8d1e; }
    .paypal{ width:18%; margin-left:-25px; margin-top:-4px; }
    @media(max-width:600px){
      .paypal{ width:26%!important; margin-left:-20px!important; }
      .decrease,.increase{ font-size:15px!important; padding:0 5px!important; }
      .fa-circle-check { font-size:15px!important; }
      .update-quantity { margin-left:5px!important; padding:0!important; }
      table img { width:70%!important; }
      .increment { text-align:center!important; font-size:15px!important; width:40%!important; padding:5px!important; }
      .cart_price { font-size:14px!important; }
      .cart_div { padding:20px 10px 50px 10px!important; }
      td { width:25%; font-size:13px!important; }
    }
    .fa-circle-check { font-size:25px; }

    label,input,textarea{font-family:'Inter',sans-serif !important;}
    textarea{height:140px; width:100%;}
  </style>
</head>
<body style="background-color:#FFF9F3;">
  <!-- header -->
  <?php include('includes/header.php'); ?>

  <!-- Sticky mini-bar -->
  <section class="pt-5 pb-3" style="position: sticky; top: 66px; z-index: 999; background-color:#FFF9F3 !important; box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;">
    <div class="container cart-head mt-5" style="display:flex; justify-content:space-between; align-items:center;">
      <div class="div">
        <i style="color:#ff8d1e;" class="fa-solid fa-cart-shopping"></i> My Cart
      </div>
      <div class="div1" style="display:flex; gap:20px; align-items:center;">
        <h2>Item <span style="padding:8px 16px; font-size:20px; background-color:#ff8d1e; color:#fff; border-radius:50%;"><?php echo (int)$row_count; ?></span></h2>
        <h3>
          <a href="https://precise3dm.com/product-page.php">
            <i style="color:#ff8d1e;" class="fa-solid fa-chevron-left"></i> Back
          </a>
        </h3>
      </div>
    </div>
  </section>

  <div class="container-div w-90 my-0 mx-auto pt-4 pb-5">
    <div class="row g-4 mt-5">
      <!-- LEFT: CART TABLE -->
      <div class="col-lg-8">
        <div class="bg-white p-3 rounded-3 h-100">
          <table class="table table-borderless table-contacts">
            <?php if ($row_count > 0): ?>
            <thead>
              <tr>
                <th>Products</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($cart_items as $item): ?>
                <tr class="output_div">
                  <td><img src="<?php echo 'sql_folder/' . h($item['image']); ?>" alt=""></td>
                  <td><?php echo h($item['title']); ?></td>
                  <td>
                    <!-- Tiny self-contained form for quantity update -->
                    <form action="cart.php" method="post" class="d-inline">
                      <input type="hidden" name="update_quantity_id" value="<?php echo (int)$item['id']; ?>">
                      <div class="quantity-box" style="display:flex; justify-content:center; align-items:baseline;">
                        <span class="decrease" onclick="decreaseValue('<?php echo (int)$item['id']; ?>')">-</span>
                        <input id="count_<?php echo (int)$item['id']; ?>" type="number" class="increment" name="update_quantity" min="1" value="<?php echo (int)$item['_qty']; ?>">
                        <span class="increase" onclick="increaseValue('<?php echo (int)$item['id']; ?>')">+</span>
                        <button
                          type="submit"
                          name="update_product_quantity"
                          class="update-quantity"
                          title="Update quantity"
                          formmethod="post"
                          formaction="cart.php">
                          <i class="fa-solid fa-circle-check"></i>
                        </button>
                      </div>
                    </form>
                  </td>
                  <td class="cart_price" style="white-space:nowrap;">₹ <?php echo number_format($item['_subtotal']); ?></td>
                  <td>
                    <a style="margin-right:10px;" href="cart.php?remove=<?php echo (int)$item['id']; ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="delete_product_btn">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <?php else: ?>
            <tbody><tr><td colspan="5">No products</td></tr></tbody>
            <?php endif; ?>
          </table>
        </div>
      </div>

      <!-- RIGHT: SUMMARY -->
      <div class="col-lg-4">
        <?php if ($row_count > 0): ?>
        <div class="container pt-4 pb-4 cart_div2 text-left bg-white">
          <h4>Summary</h4>
          <p style="font-size:16px !important; color:#bbb;">The total cost consists of the tax. Shipping: Free.</p>
          <hr>

          <div class="cart-final"><h6>Items</h6><p><?php echo (int)$total_qty; ?></p></div>
          <div class="cart-final"><h6>Subtotal</h6><p>₹ <?php echo number_format($total_price); ?></p></div>
          <!-- NO COUPON ROWS -->

          <div class="cart-final"><h6>Shipping</h6><p>Free</p></div>
          <div class="cart-final"><h6>GST (18%)</h6><p>₹ <?php echo number_format($gstAmount); ?></p></div>
          <hr>
          <div class="cart-final">
            <h6>Total</h6>
            <p style="color:#57BF6D; font-weight:600;">₹ <?php echo number_format($finalTotal); ?></p>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>

    <!-- CHECKOUT FORM (PayPal + Razorpay) -->
    <?php if ($row_count > 0): ?>
    <form id="checkoutForm" action="create_payment.php" method="post">
      <div class="row g-4">
        <!-- LEFT: Checkout fields -->
        <div class="col-lg-8">
          <div class="bg-white p-4 rounded-3">
            <div class="row">
              <div class="col-md-6">
                <label for="name">Name: <span style="color:#f00">*</span></label>
                <input type="text" required name="name" id="name"><br>
              </div>
              <div class="col-md-6">
                <label for="comp_name">Company Name: <span style="color:#f00">*</span></label>
                <input type="text" required name="comp_name" id="comp_name"><br>
              </div>
              <div class="col-md-6">
                <label for="email">Email: <span style="color:#f00">*</span></label>
                <input type="email" required name="email" id="email"><br>
              </div>
              <div class="col-md-6">
                <label for="number">Mobile: <span style="color:#f00">*</span></label>
                <input type="number" required name="number" id="number"><br>
              </div>
              <div class="col-md-6">
                <label class="mt-0" for="state">State: <span style="color:#f00">*</span></label>
                <input type="text" required name="state" id="state">
              </div>
              <div class="col-md-6">
                <label class="mt-0" for="city">City: <span style="color:#f00">*</span></label>
                <input type="text" required name="city" id="city"><br>
              </div>
              <div class="col-12">
                <label for="billaddress">Billing Address: <span style="color:#f00">*</span></label>
                <textarea name="Bill_address" id="billaddress" cols="30" rows="5" required></textarea>
              </div>
              <div class="col-12 d-flex align-items-center justify-content-start mt-2">
                <input type="checkbox" id="sameAddress" style="width:20px; height:20px; margin-right:10px;">
                <label class="mb-0 mt-0 pt-0" for="sameAddress">Delivery Address same as Billing Address</label>
              </div>
              <div class="col-12">
                <label for="address" class="mt-2">Delivery Address: <span style="color:#f00">*</span></label>
                <textarea name="address" id="address" cols="30" rows="5" required></textarea>
              </div>
              <div class="col-12">
                <label for="gst" class="mt-2">GST Number (Optional):</label>
                <input type="text" name="gst" id="gst" placeholder="Enter GST Number">
              </div>
            </div>

            <!-- Hidden fields for server/PayPal -->
            <input type="hidden" name="product_name" value="<?php echo h($products_label); ?>">
            <input type="hidden" name="product_quantity" value="<?php echo (int)max(1, $total_qty); ?>">
            <input type="hidden" name="total_price_inr" value="<?php echo (int)$finalTotal; ?>">
            <?php if ($total_usd !== null): ?>
              <input type="hidden" name="total_price_usd" value="<?php echo h($total_usd); ?>">
            <?php endif; ?>
          </div>
        </div>

        <!-- RIGHT: Payment Buttons -->
        <div class="col-lg-4">
          <div class="container pt-4 pb-4 cart_div2 text-left bg-white">
            <h4>Payment</h4>
            <p style="font-size:16px !important; color:#bbb;">Proceed to pay.</p>

            <!-- PayPal submit -->
            <button class="pay-btn" type="submit">Pay with PayPal</button>

            <!-- Razorpay trigger -->
            <a href="javascript:void(0)"
                style="padding:20px 0px !important; border-radius:16px;"
               class="btn btn-sm btn-primary float-right buy_now"
               data-amount="<?php echo (int)$finalTotal; ?>"
               data-email=""
               data-id="cart_multi"
               data-name="<?php echo h($products_label); ?>"
               data-qty="<?php echo (int)max(1, $total_qty); ?>">
              Pay With Razorpay
            </a>
          </div>
        </div>
      </div>
    </form>
    <?php endif; ?>
  </div>

  <hr class="separator">

  <!-- footer -->
  <?php include('includes/footer.php'); ?>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <script>
    // Quantity UI
    function increaseValue(productId){
      var input = document.getElementById('count_' + productId);
      var val = parseInt(input.value || '1', 10);
      input.value = val + 1;
    }
    function decreaseValue(productId){
      var input = document.getElementById('count_' + productId);
      var val = parseInt(input.value || '1', 10);
      if (val > 1) input.value = val - 1;
    }

    // Copy billing to delivery
    const sameCb = document.getElementById("sameAddress");
    if (sameCb) {
      sameCb.addEventListener("change", function () {
        let delivery = document.getElementById("address");
        let billing  = document.getElementById("billaddress");
        if (!delivery || !billing) return;
        if (this.checked) {
          delivery.value = billing.value;
          delivery.setAttribute("readonly", true);
        } else {
          delivery.removeAttribute("readonly");
          delivery.value = "";
        }
      });
    }

    // Razorpay handler (reads values from checkout form)
    $('body').on('click', '.buy_now', function (e) {
      e.preventDefault();

      var user_name   = $('#name').val()?.trim();
      var user_email  = $('#email').val()?.trim();
      var user_mobile = $('#number').val()?.trim();
      var user_state  = $('#state').val()?.trim();
      var user_city   = $('#city').val()?.trim();
      var user_address= $('#address').val()?.trim();
      var bill_address= $('#billaddress').val()?.trim();
      var gst_number  = $('#gst').val()?.trim() || 'N/A';
      var comp_name   = $('#comp_name').val()?.trim();

      if (!user_name || !user_email || !user_mobile || !user_address || !user_state || !user_city || !bill_address || !comp_name) {
        alert('Please fill all required fields.');
        return false;
      }

      var totalAmount      = $(this).attr("data-amount"); // already includes GST; no coupon here
      var product_id       = $(this).attr("data-id");
      var product_name     = $(this).attr("data-name");
      var product_quantity = $(this).attr("data-qty");

      var options = {
        "key": "rzp_live_c2WGgIB7xcuK71",
        "amount": (parseInt(totalAmount, 10) * 100),   // paise
        "name": "Cart Checkout",
        "description": "Payment",
        "image": "https://www.precise3dm.com/sql_folder/einstar.png",
        "handler": function (response) {
          $.ajax({
            url: 'buy-product-form.php', // your verification endpoint
            type: 'post',
            dataType: 'json',
            data: {
              razorpay_payment_id: response.razorpay_payment_id,
              totalAmount: totalAmount,
              product_id: product_id,
              product_name: product_name,
              comp_name: comp_name,
              product_quantity: product_quantity,
              user_name: user_name,
              user_email: user_email,
              user_mobile: user_mobile,
              user_state: user_state,
              user_city: user_city,
              user_address: user_address,
              bill_address: bill_address,
              gst_number: gst_number
            },
            success: function () {
              // replace with your own success page
              window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
          });
        },
        "prefill": {
          "name": user_name,
          "email": user_email,
          "contact": user_mobile
        },
        "notes": {
          "user_name": user_name,
          "comp_name": comp_name,
          "user_email": user_email,
          "user_mobile": user_mobile,
          "user_state": user_state,
          "user_city": user_city,
          "user_address": user_address,
          "bill_address": bill_address,
          "gst_number": gst_number,
          "product_id": product_id,
          "product_name": product_name,
          "product_quantity": product_quantity,
          "totalAmount": totalAmount
        },
        "theme": { "color": "#ff8d1e" }
      };
      var rzp1 = new Razorpay(options);
      rzp1.open();
    });
  </script>
</body>
</html>
