<?php
include('sql_folder/connect.php');
$applied_coupon    = $_GET['coupon'] ?? '';
$quantity_override = isset($_GET['qty']) ? max(1, (int)$_GET['qty']) : null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment Form - EinScan Rigil</title>

  <meta name="description" content="Checkout - EinScan Rigil | Precise3DM">

  <!--bootstrap css-->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <!-- custom css-->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/newform.css">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
  <link rel="stylesheet" href="assets/css/optical-blue-light.css">
  <link rel="stylesheet" href="assets/css/scanner-styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/geomagic_final.css">
  <link rel="stylesheet" href="contact.css">
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96527116-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-96527116-1');
  </script>

  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- Facebook Pixel -->
  <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2980089008869976');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2980089008869976&ev=PageView&noscript=1" /></noscript>

  <!-- LinkedIn Insight -->
  <script type="text/javascript">
    _linkedin_partner_id = "2283548";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  </script>
  <script type="text/javascript">
    (function () {
      var s = document.getElementsByTagName("script")[0];
      var b = document.createElement("script");
      b.type = "text/javascript"; b.async = true;
      b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
      s.parentNode.insertBefore(b, s);
    })();
  </script>
  <noscript>
    <img height="1" width="1" style="display:none;" alt=""
      src="https://px.ads.linkedin.com/collect/?pid=2283548&fmt=gif" />
  </noscript>

  <style>
    label,input,textarea{font-family:'Inter',sans-serif !important;}
  </style>
</head>

<style>
  .header { display: flex !important;
    justify-content: center;
    margin: 50px 0 0 0;
     }
  .header ul {
     display: flex; 
    }
  .fa-circle {
     color: #ff8d1e;
     }
  .header ul li {
     width: 180px;
      margin-right: 50px; 
      position: relative; 
    }
  .header ul li div { 
    padding: 5px; 
    border-radius: 50%; 
    display: grid; 
    place-items: center; 
  }
  .header ul li.active:before {
    height: 1px;
    background-image: linear-gradient(90deg, #ff8a00, #ff8a00 75%, transparent 75%, transparent 100%);
    background-size: 20px 1px; 
    border: none;
  }
  .header ul li.active p {
     background: var(--primary);
   }
  .header ul li.active .fa-circle { 
    color: #fff;
   }
  .header ul li p {
    width: 50px; 
    height: 50px; 
    color: var(--white); 
    text-align: center;
    border: 2px solid var(--secondary);
    line-height: 50px;
    border-radius: 50%;
  }
  .header ul li:before {
    content: "";
    position: absolute;
    top: 30%; transform: translateY(-50%);
    left: 117px; 
    width: 100%; 
    height: 1px;
    background-image: linear-gradient(90deg, #000, #000 75%, transparent 75%, transparent 100%);
    background-size: 20px 1px; 
    border: none;
  }
  .header ul li:last-child {
     margin-right: 0; 
    }
  .header ul li:last-child:before { 
    content: none !important; 
  }

  #form_1_checked1, #form_2_checked1, #form_3_checked1 { 
    display:none; 
  }

  input, textarea {
    border: 2px solid var(--secondary); 
    border-radius: 3px; padding: 10px;
    display: block;
    width: 100%;
    font-size: 16px;
    transition: 0.5s ease;
  }
  textarea {
     height: 140px; 
    }
  label { 
    display: block; 
    margin-bottom: 10px; 
    color:#000; 
    font-size:16px; 
    font-weight:400; 
    line-height:141.523%; 
    letter-spacing:0.8px; }
  span { 
    color:#f00; 
  }

  .cart-final {
     display:flex;
     justify-content:space-between; }
  .total-price { 
    border-radius:10px; 
    box-shadow: rgba(0,0,0,0.24) 0px 3px 8px; 
  }
  .cart-final h6 { 
    font-size:18px;
     font-family:"Inter",sans-serif !important; 
    }
  .total-price h4,.total-price p { 
    font-family:"Inter",sans-serif !important;
   }
  .cart-final p { 
    font-size:17px;
     font-weight:700; 
     color:#858585; 
     font-family:"Inter",sans-serif !important; 
    }

  .buy_now, .pay-btn, .next-btn {
    width: 100%; border: none; padding: 20px 70px !important; background-color:#ff8d1e;
    text-align:center; border-radius:16px !important; color:#fff; font-size:20px !important;
    box-shadow: rgba(50,50,93,0.25) 0px 50px 100px -20px, rgba(0,0,0,0.3) 0px 30px 60px -30px;
    font-family:"Inter",sans-serif !important; margin-top:20px; transition:0.5s all;
  }
  .next-btn:before, .pay-btn:before {
     background-image: linear-gradient(#fff 0, rgba(255,255,255,0) 100%);
      border-radius:14px; 
      content:"";
      height:8%;
      left:15px; 
      opacity:0.5; 
      position:absolute;
      transition:all 0.3s;
    }
  .next-btn:before { 
    top:593px;
    width:95%;
   }
  .pay-btn:before { 
    top:550px; 
    width:100%; 
  }
  .next-btn:hover, .pay-btn:hover { 
    background-color:#000;
    border:1px solid #ff8d1e; 
  }

  .paypal{ width:18%;
    margin-left:-25px;
    margin-top:-4px; 
  }
  @media(max-width:600px){ 
    .paypal{ 
      width:26% !important;
      margin-left:-20px !important; 
      }
       }
</style>

<body style="background-color:#FFF9F3;">
  <!-- header start -->
  <?php include('includes/header.php'); ?>
  <!-- header end -->

  <div class="header pt-5">
    <h2 class="mt-lg-5">EinScan Rigil</h2>
  </div>

  <?php
  // Fetch product from einscan hx table - ID 15
  $select_cart_product = mysqli_query($con, "SELECT * FROM `einscan hx` WHERE id = 19");
  $product_title = '';
  $total_quantity = 0;
  $subtotal = 0.0;

  if ($select_cart_product && mysqli_num_rows($select_cart_product) > 0) {
    while ($row = mysqli_fetch_assoc($select_cart_product)) {
        $title = $row['title'] ?? 'Product';
        $qty = $quantity_override ?? ($row['quantity'] > 0 ? (int)$row['quantity'] : 1);
        $actualPrice   = (float)$row['price'];
        $discountPrice = isset($row['discount_price']) ? (float)$row['discount_price'] : 0;
        $price         = $discountPrice > 0 ? $discountPrice : $actualPrice;

        $product_title   = $title;
        $total_quantity += $qty;
        $subtotal       += ($price * $qty);
    }
  }

  // Apply coupon discount
  if ($applied_coupon && preg_match('/^DIS(\d{2,7})$/', $applied_coupon, $m)) {
      $flatPerUnit = (int)$m[1];
      $subtotal   -= $flatPerUnit * $total_quantity;
      if ($subtotal < 0) $subtotal = 0;
  }

  // GST 18% on subtotal
  $gst_amount = round($subtotal * 0.18);
  $full_price = round($subtotal + $gst_amount);

  // Currency conversion INR -> USD
  function getConversionRateUSDPerINR() {
    $api_key = 'facd4f4be3bf114b23aff010';
    $url = "https://v6.exchangerate-api.com/v6/{$api_key}/latest/INR";
    $response = @file_get_contents($url);
    if ($response === false) return false;
    $data = json_decode($response, true);
    if ($data && isset($data['conversion_rates']['USD'])) {
      return (float)$data['conversion_rates']['USD'];
    }
    return false;
  }

  $total_amount_inr = $full_price;
  $total_amount_usd = null;
  $conversion_rate = getConversionRateUSDPerINR();
  if ($conversion_rate !== false) {
    $total_amount_usd = round($total_amount_inr * $conversion_rate, 2);
  }
  ?>

  <div class="container pt-5 pb-5">
    <form id="paymentForm" action="create_payment.php" method="post">
      <div class="row">
        <div class="col-lg-6">
          <div class="payment-form">
            <div class="form-1">
              <label for="name">Name: <span>*</span></label>
              <input type="text" required name="name" id="name"><br>

              <label for="comp_name">Company Name: <span>*</span></label>
              <input type="text" required name="comp_name" id="comp_name"><br>

              <div class="row">
                <div class="col">
                  <label for="email">Email: <span>*</span></label>
                  <input type="email" required name="email" id="email"><br>
                  <small id="error" style="color:#f00; display:block; min-height:18px; margin-top:4px;"></small>
                </div>
                <div class="col">
                  <label for="number">Mobile: <span>*</span></label>
                  <input type="number" required name="number" id="number"><br>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <label for="state">State: <span>*</span></label>
                  <input type="text" required name="state" id="state">
                </div>
                <div class="col">
                  <label for="city">City: <span>*</span></label>
                  <input type="text" required name="city" id="city"><br>
                </div>
              </div>

              <label for="billaddress">Billing Address: <span>*</span></label>
              <textarea name="Bill_address" id="billaddress" cols="30" rows="5" required></textarea>
              <br>

              <div class="d-flex align-items-center justify-content-start">
                <input type="checkbox" id="sameAddress" style="width:30px;">
                <label class="mb-0" for="sameAddress">Delivery Address same as Billing Address</label>
              </div>
              <br>

              <label for="address">Delivery Address: <span>*</span></label>
              <textarea name="address" id="address" cols="30" rows="5" required></textarea>
              <br>

              <label for="gst">GST Number (Optional):</label>
              <input type="text" name="gst" id="gst" placeholder="Enter GST Number">

              <!-- Hidden product fields -->
              <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product_title ?: 'Product', ENT_QUOTES); ?>">
              <input type="hidden" name="product_quantity" value="<?php echo (int)max(1, $total_quantity); ?>">
              <input type="hidden" name="total_price_inr" value="<?php echo (int)$total_amount_inr; ?>">
              <?php if ($total_amount_usd !== null): ?>
                <input type="hidden" name="total_price_usd" value="<?php echo htmlspecialchars(number_format($total_amount_usd, 2, '.', ''), ENT_QUOTES); ?>">
              <?php endif; ?>
              <input type="hidden" name="coupon_code" value="<?php echo htmlspecialchars($applied_coupon); ?>">
            </div><!-- /.form-1 -->
          </div>
        </div>

        <div class="col-lg-6">
          <div class="total-price text-left p-5 bg-white mt-4">
            <h4>Summary</h4>
            <p style="color: #bbb;">The total cost consists of the tax, insurance.</p>
            <hr>
            <div class='cart-final'>
              <h6>Product Name</h6>
              <p><?php echo htmlspecialchars($product_title ?: 'Product', ENT_QUOTES); ?></p>
            </div>
            <div class='cart-final'>
              <h6>Total Quantity</h6>
              <p><?php echo (int)max(1, $total_quantity); ?></p>
            </div>
            <div class='cart-final'>
              <h6>Subtotal</h6>
              <p>₹ <?php echo number_format($subtotal); ?></p>
            </div>
            <div class='cart-final'>
              <h6>Shipping</h6>
              <p>Free</p>
            </div>
            <div class='cart-final'>
              <h6>GST (18%)</h6>
              <p>₹ <?php echo number_format($gst_amount); ?></p>
            </div>
            <hr>
            <div class='cart-final'>
              <h6>Total</h6>
              <p style="color: #57BF6D; font-size:20px; letter-spacing:1.5px; font-weight: 600;">
                ₹ <?php echo number_format($full_price); ?>
              </p>
            </div>
          </div>

          <!-- PayPal submit -->
          <button class="pay-btn" type="submit">Pay with PayPal</button>

          <!-- Razorpay button -->
          <a href="javascript:void(0)"
             class="btn btn-sm btn-primary float-right buy_now"
             data-amount="<?php echo (int)$full_price; ?>"
             data-email=""
             data-id="19"
             data-name="<?php echo htmlspecialchars($product_title ?: 'Product', ENT_QUOTES); ?>"
             data-qty="<?php echo (int)max(1, $total_quantity); ?>">
            Pay With Razorpay
          </a>
        </div>
      </div><!-- /.row -->
    </form>
  </div><!-- /.container -->

  <hr class="separator">

  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>
    // Razorpay handler
    $('body').on('click', '.buy_now', function (e) {
      e.preventDefault();

      var user_name   = $('#name').val().trim();
      var user_email  = $('#email').val().trim();
      var user_mobile = $('#number').val().trim();
      var user_state  = $('#state').val().trim();
      var user_city   = $('#city').val().trim();
      var user_address= $('#address').val().trim();
      var bill_address= $('#billaddress').val().trim();
      var gst_number  = $('#gst').val().trim();
      var comp_name   = $('#comp_name').val().trim();

      if (!user_name || !user_email || !user_mobile || !user_address || !user_state || !user_city || !bill_address || !comp_name) {
        alert('Please fill all required fields.');
        return false;
      }
      if (!gst_number) { gst_number = "N/A"; }

      var totalAmount      = $(this).attr("data-amount");
      var product_id       = $(this).attr("data-id");
      var product_name     = $(this).attr("data-name");
      var product_quantity = $(this).attr("data-qty");

      var options = {
        "key": "rzp_live_c2WGgIB7xcuK71",
        "amount": (parseInt(totalAmount, 10) * 100),
        "name": "EinScan Rigil",
        "description": "Payment",
        "image": "https://www.precise3dm.com/assets/images/Buy-Einstar-and-Einscan-3D-Scanner-Online-in-India/einscan-rigil-image1.png",
        "handler": function (response) {
          $.ajax({
            url: 'buy-product-form.php',
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
            success: function (msg) {
              window.location.href = 'https://www.precise3dm.com/payment-success.php';
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

  <?php include('includes/footer.php'); ?>

  <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

  <script>
    // Email validation helper
    const emailInput = document.getElementById('email');
    const errorSpan  = document.getElementById('error');
    emailInput.addEventListener('blur', function () {
      const email = emailInput.value.trim();
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (email && !emailPattern.test(email)) {
        errorSpan.innerText = 'Please enter a valid email address.';
      } else {
        errorSpan.innerText = '';
      }
    });

    // Copy billing to delivery
    document.getElementById("sameAddress").addEventListener("change", function () {
      let delivery = document.getElementById("address");
      let billing  = document.getElementById("billaddress");
      if (this.checked) {
        delivery.value = billing.value;
        delivery.setAttribute("readonly", true);
      } else {
        delivery.removeAttribute("readonly");
        delivery.value = "";
      }
    });
  </script>
</body>
</html>
