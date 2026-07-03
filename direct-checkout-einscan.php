<?php
include ('sql_folder/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name text-white="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Form</title>
  <meta name="description" content="Contact us Precise3DM, Pan india">
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
  <title>Contact Us</title>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96527116-1"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script type="text/javascript">
    var onloadCallback = function () {
      //alert("grecaptcha is ready!");
    };
  </script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-96527116-1');
  </script>
  <!-- Facebook Pixel Code -->
  <script>
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2980089008869976');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=2980089008869976&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
  <script type="text/javascript">
    _linkedin_partner_id = "2283548";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  </script>
  <script type="text/javascript">
    (function () {
      var s = document.getElementsByTagName("script")[0];
      var b = document.createElement("script");
      b.type = "text/javascript";
      b.async = true;
      b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
      s.parentNode.insertBefore(b, s);
    })();
  </script>
  <noscript>
    <img height="1" width="1" style="display:none;" alt=""
      src="https://px.ads.linkedin.com/collect/?pid=2283548&fmt=gif" />
  </noscript>
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FX95R9');</script>
<!-- End Google Tag Manager -->
</head>

<style>
  .header {
    display: flex !important;
    justify-content: center;
    margin: 50px 0 0 0;
  }

  .header ul {
    display: flex;
  }
  
    .buy_now {
    width: 100%;
    border: none;
    padding: 20px 70px !important;
    background-color: #ff8d1e;
    text-align: center;
    border-radius: 16px !important;
    color: #fff;
    font-size: 20px !important;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
      rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    font-family: "Inter", sans-serif !important;
    margin-top: 20px;
    transition: 0.5s all;
  }

  .paypal{
    width: 18%;
    margin-left: -25px;
    margin-top: -4px;
  }
@media(max-width:600px){
  .paypal {
    width: 26% !important;
    margin-left: -20px !important;
}
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

  .pay-btn:before {
    background-color: initial;
    background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
    border-radius: 14px;
    content: "";
    height: 8%;
    left: 15px;
    opacity: 0.5;
    position: absolute;
    top: 593px;
    transition: all 0.3s;
    width: 95%;
  }

  .pay-btn:hover {
    background-color: #000;
    border: 1px solid #ff8d1e;
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
    top: 30%;
    transform: translateY(-50%);
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

  #form_1_checked1 {
    display: none;
  }

  #form_2_checked1 {
    display: none;
  }

  #form_3_checked1 {
    display: none;
  }

  input {
    border: 2px solid var(--secondary);
    border-radius: 3px;
    padding: 10px;
    display: block;
    width: 100%;
    font-size: 16px;
    transition: 0.5s ease;
  }

  textarea {
    border: 2px solid var(--secondary);
    border-radius: 3px;
    padding: 10px;
    display: block;
    width: 100%;
    font-size: 16px;
    transition: 0.5s ease;
    height: 140px;
  }

  label {
    display: block;
    margin-bottom: 10px;
    color: #000;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 141.523%;
    letter-spacing: 0.8px;
  }

  span {
    color: #f00;
  }

  .cart-final {
    display: flex;
    justify-content: space-between;
  }

  .total-price {
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }

  .cart-final h6 {
    font-size: 18px;
    font-family: "Inter", sans-serif !important;
  }

  .total-price h4 {
    font-family: "Inter", sans-serif !important;
  }

  .total-price p {
    font-family: "Inter", sans-serif !important;
  }

  .cart-final p {
    font-size: 17px;
    font-weight: 700;
    color: #858585;
    font-family: "Inter", sans-serif !important;
  }

  .next-btn:before {
    background-color: initial;
    background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
    border-radius: 14px;
    content: "";
    height: 8%;
    left: 15px;
    opacity: 0.5;
    position: absolute;
    top: 593px;
    transition: all 0.3s;
    width: 95%;
  }

  .next-btn,
  .pay-btn {
    width: 100%;
    border: none;
    padding: 20px 70px;
    background-color: #ff8d1e;
    text-align: center;
    border-radius: 16px;
    color: #fff;
    font-size: 20px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px,
      rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    font-family: "Inter", sans-serif !important;
    margin-top: 20px;
    transition: 0.5s all;
  }

  .next-btn:hover {
    background-color: #000;
    border: 1px solid #ff8d1e;
  }
</style>

<body style="background-color:#FFF9F3;">
     <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FX95R9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <!-- header start -->
  <?php include ('includes/header.php'); ?>

  <div class="header pt-5">
    <h2>Einscan HX</h2>
  </div>

  <!-- header end -->

  <?php

  $select_product = mysqli_query($con, "Select * from `einscan hx`") or die('Query Failed');
  $row_count = mysqli_num_rows($select_product);


  ?>

  <div class="container pt-5 pb-5">
    <div class="row">
      <div class="col-lg-6">
        <div class="payment-form">
       <form id="paymentForm" action="create_payment.php" method="post">
            <div class="form-1">
              <label for="name">Name: <span>*</span></label>
              <input type="text" required name="name" id="name"><br>
              <label for="email">Email: <span>*</span></label>
              <input type="email" required name="email" id="email"><br>
              <label for="number">Mobile: <span>*</span></label>
              <input type="number" required name="number" id="number"><br>
              <label for="state">State: <span>*</span></label>
              <input type="text" required name="state" id="state"><br>
              <label for="city">City: <span>*</span></label>
              <input type="text" name="city" required id="city"><br>
              <label for="address">Delivery Address: <span>*</span></label>
              <textarea required name="address" id="address" cols="30" rows="10"></textarea>
            </div>

        </div>
      </div>

      <?php
      if (isset($_GET['id'])) {
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $product_image = $_POST['product_image'];
        $product_quantity = 1;
      }

      $select_cart_product = mysqli_query($con, "SELECT * FROM `einscan hx` WHERE id = 1");
      $row_count = mysqli_num_rows($select_cart_product);
      $total_quantity = 0; // Initialize total quantity
      $total_price = 0;
      $formatted_total_price = number_format($total_price, 2);

      while ($fetch_cart_product = mysqli_fetch_assoc($select_cart_product)) {
        // Add the quantity of each product to the total quantity
        $total_quantity += $fetch_cart_product['quantity'];
        $total_price += $fetch_cart_product['price'];
        $product_title = $fetch_cart_product['title'];

      }


      $full_price=$total_price * $total_quantity + 100 + 50;

      function getConversionRate() {
        $api_key = 'facd4f4be3bf114b23aff010'; // Your ExchangeRate-API key
        $url = "https://v6.exchangerate-api.com/v6/{$api_key}/latest/INR";
        $response = file_get_contents($url);
    
        if ($response === false) {
            // Handle network error
            return false;
        }
    
        $data = json_decode($response, true);
    
        if ($data && isset($data['conversion_rates']['USD'])) {
            return $data['conversion_rates']['USD'];
        } else {
            // Handle API response error
            return false;
        }
    }
    
    // Sample total amount in INR
    $total_amount_inr = $full_price;
    
    // Get the latest conversion rate from INR to USD
    $conversion_rate = getConversionRate();
    
    if ($conversion_rate !== false) {
        // Convert total amount from INR to USD manually
        $total_amount_usd = $total_amount_inr * $conversion_rate;
    
        // Round to two decimal places
        $total_amount_usd = round($total_amount_usd, 2);
    
       
    } else {
        echo "Failed to get the latest conversion rate.";
    }
      ?>

      <div class="col-lg-6">
        <div class="total-price text-left p-5 bg-white mt-4">
          <h4>Summary</h4>
          <p style="color: #bbb;">The total cost consists of the tax, insurance, and the shipping charge.</p>
          <hr>
          <div class='cart-final'>
            <h6>Product Name</h6>
            <p>
              <?php echo $product_title; ?>
            </p>
          </div>
          <div class='cart-final'>
            <h6>Total Quantity</h6>
            <p>
              <?php echo $total_quantity; ?>
            </p>
          </div>
          <div class='cart-final'>
            <h6>Total</h6>
            <p>
              ₹
              <?php echo number_format($total_price * $total_quantity); ?>
            </p> <!-- Display total cost -->
          </div>

          <div class='cart-final'>
            <h6>Shipping</h6>
            <p>₹ 100</p>
          </div>
          <div class='cart-final'>
            <h6>Tax</h6>
            <p>₹ 50</p>
          </div>

          <hr>
          <div class='cart-final'>
            <h6>Total</h6>
            <p style="color: #57BF6D; font-size:20px; letter-spacing:1.5px; font-weight: 600;">
              ₹
              <?php echo number_format($total_price * $total_quantity + 100 + 50); ?>
            </p>
          </div>

        </div>
        <input type="hidden" name="total_price" value="<?php echo $total_amount_usd; ?>">
        <button class="pay-btn" type="submit">Pay with PayPal</button>
         <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now"
          data-amount="<?php echo $full_price; ?>" data-email="" data-id="3">Pay With Razorpay</a>
      </div>
      </form>
    </div>
  </div>





  <hr class="separator">
  
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <script>

     $('body').on('click', '.buy_now', function (e) {
      e.preventDefault();

      // Flag for validation
      var isValid = true;

      // Fetch values from the form
      var user_name = $('#name').val().trim();
      var user_email = $('#email').val().trim();
      var user_mobile = $('#number').val().trim();
      var user_state = $('#state').val().trim();
      var user_city = $('#city').val().trim();
      var user_address = $('#address').val().trim();

      // Check if any required field is empty
      if (user_name === '' || user_email === '' || user_mobile === '' || user_address === '') {
        isValid = false;
        alert('Please fill all required fields.');
        return; // Prevent further execution
      }

      // If all required fields are filled, proceed with Razorpay
      if (isValid) {
        var totalAmount = $(this).attr("data-amount");
        var product_id = $(this).attr("data-id");

        var options = {
          "key": "rzp_live_c2WGgIB7xcuK71",
          "amount": (totalAmount * 100), // 2000 paise = INR 20
          "name": "Einscan",
          "description": "Payment",
          "image": "https://www.precise3dm.com/assets/images/products/product14.png",
          "handler": function (response) {
            $.ajax({
              url: '',
              type: 'post',
              dataType: 'json',
              data: {
                razorpay_payment_id: response.razorpay_payment_id,
                totalAmount: totalAmount,
                product_id: product_id,
                user_name: user_name,
                user_email: user_email,
                user_mobile: user_mobile,
                user_state: user_state,
                user_city: user_city,
                user_address: user_address
              },
              success: function (msg) {
                window.location.href = 'https://www.precise3dm.com/product-page.php';
              }
            });
          },
          "prefill": {
            "name": user_name, // Prefill with the user's name
            "email": user_email, // Prefill with the user's email
            "contact": user_mobile, // Prefill with the user's mobile number
            "address": user_address, // Prefill with the user's address
            "city": user_city, // Prefill with the user's city
            "state": user_state // Prefill with the user's state
          },
          "theme": {
            "color": "#ff8d1e"
          },
          "metadata": {
            "user_name": user_name,
            "user_email": user_email,
            "user_mobile": user_mobile,
            "user_state": user_state,
            "user_city": user_city,
            "user_address": user_address
          }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
      }
    });

  </script>
  <?php include ('includes/footer.php'); ?>
  <!-- bootstrap links-->
  <!--<script type="text/javascript" src="assets/js/bootstrap.js"></script>-->
  <!--<script type="text/javascript" src="assets/js/slim.min.js"></script>-->
  <!--<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>-->
  <!-- bootstrap links-->
  <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

  <script>

    function paynow() {
      var form1 = document.querySelector(".form-1");
      var form2 = document.querySelector(".form-2");
      var nextbtn = document.querySelector(".next-btn");
      var paybtn = document.querySelector(".pay-btn");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_before = document.querySelector("#form_2_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      form1.style.display = "none";
      form_1_checked1.style.display = "block";
      form_1_checked.style.display = "none";
      form2.style.display = "block";
      nextbtn.style.display = "none";
      paybtn.style.display = "block";
      form_2_progessbar.classList.add("active");
    }

  </script>
  <script>
    var form_1 = document.querySelector(".form_1");
    var form_2 = document.querySelector(".form_2");
    var form_3 = document.querySelector(".form_3");
    var form_4 = document.querySelector(".form_4");
    var form_5 = document.querySelector(".form_5");
    var form_6 = document.querySelector(".form_6");
    var form_7 = document.querySelector(".form_7");
    var formparacon = document.querySelector(".form-paracon");

    var form_1_btns = document.querySelector(".form_1_btns");
    var form_2_btns = document.querySelector(".form_2_btns");
    var form_3_btns = document.querySelector(".form_3_btns");
    var form_4_btns = document.querySelector(".form_4_btns");
    var form_5_btns = document.querySelector(".form_5_btns");
    var form_6_btns = document.querySelector(".form_6_btns");
    var form_7_btns = document.querySelector(".form_7_btns");
    var Engineering = document.getElementById("Engineering");

    var form_1_next_btn = document.querySelector(".form_1_btns .btn_next");
    var form_2_back_btn = document.querySelector(".form_2_btns .btn_back");
    var form_2_next_btn = document.querySelector(".form_2_btns .btn_next");
    var form_3_back_btn = document.querySelector(".form_3_btns .btn_back");
    var form_3_next_btn = document.querySelector(".form_3_btns .btn_next");
    var form_4_next_btn = document.querySelector(".form_4_btns .btn_next");
    var form_4_back_btn = document.querySelector(".form_4_btns .btn_back");
    var form_5_next_btn = document.querySelector(".form_5_btns .btn_next");
    var form_5_back_btn = document.querySelector(".form_5_btns .btn_back");
    var form_6_next_btn = document.querySelector(".form_6_btns .btn_next");
    var form_6_back_btn = document.querySelector(".form_6_btns .btn_back");
    var form_7_next_btn = document.querySelector(".form_7_btns .btn_next");
    var form_7_back_btn = document.querySelector(".form_7_btns .btn_back");

    var form_2_progessbar = document.querySelector(".form_2_progessbar");
    var form_3_progessbar = document.querySelector(".form_3_progessbar");
    var form_4_progessbar = document.querySelector(".form_4_progessbar");
    var form_5_progessbar = document.querySelector(".form_5_progessbar");



    var btn_done = document.querySelector(".btn_done");
    var modal_wrapper = document.querySelector(".modal_wrapper");
    var shadow = document.querySelector(".shadow");


    function validateForm(form) {
      const inputs = form.querySelectorAll('input[required]');
      let valid = true;

      inputs.forEach(input => {
        if (!input.checkValidity()) {
          valid = false;
        }
      });

      return valid;
    }
    // form validition
    var form_1_inputs = form_1.querySelectorAll('input[required]');
    form_1_inputs.forEach(input => {
      input.addEventListener('input', function () {
        if (validateForm(form_1)) {
          form_1_next_btn.removeAttribute("disabled");
          form_1_next_btn.classList.remove("disabled");
        } else {
          form_1_next_btn.setAttribute("disabled", "disabled");
          form_1_next_btn.classList.add("disabled");
        }
      });
    });
    var form_2_inputs = form_2.querySelectorAll('input[required]');
    form_2_inputs.forEach(input => {
      input.addEventListener('input', function () {
        if (validateForm(form_1)) {
          form_2_next_btn.removeAttribute("disabled");
          form_2_next_btn.classList.remove("disabled");
        } else {
          form_2_next_btn.setAttribute("disabled", "disabled");
          form_2_next_btn.classList.add("disabled");
        }
      });
    });
    // var form_3_inputs = form_3.querySelectorAll('input[required]');
    // form_3_inputs.forEach(input => {
    //     input.addEventListener('input', function () {
    //         if (validateForm(form_1)) {
    //             form_3_next_btn.removeAttribute("disabled");
    //             form_3_next_btn.classList.remove("disabled");
    //         } else {
    //             form_3_next_btn.setAttribute("disabled", "disabled");
    //             form_3_next_btn.classList.add("disabled");
    //         }
    //     });
    // });
    // var form_4_inputs = form_4.querySelectorAll('input[required]');
    // form_4_inputs.forEach(input => {
    //     input.addEventListener('input', function () {
    //         if (validateForm(form_1)) {
    //             form_4_next_btn.removeAttribute("disabled");
    //             form_4_next_btn.classList.remove("disabled");
    //         } else {
    //             form_4_next_btn.setAttribute("disabled", "disabled");
    //             form_4_next_btn.classList.add("disabled");
    //         }
    //     });
    // });
    // var form_5_inputs = form_5.querySelectorAll('input[required]');
    // form_5_inputs.forEach(input => {
    //     input.addEventListener('input', function () {
    //         if (validateForm(form_1)) {
    //             form_5_next_btn.removeAttribute("disabled");
    //             form_5_next_btn.classList.remove("disabled");
    //         } else {
    //             form_5_next_btn.setAttribute("disabled", "disabled");
    //             form_5_next_btn.classList.add("disabled");
    //         }
    //     });
    // });
    // var form_6_inputs = form_6.querySelectorAll('input[required]');
    // form_6_inputs.forEach(input => {
    //     input.addEventListener('input', function () {
    //         if (validateForm(form_1)) {
    //             form_6_next_btn.removeAttribute("disabled");
    //             form_6_next_btn.classList.remove("disabled");
    //         } else {
    //             form_6_next_btn.setAttribute("disabled", "disabled");
    //             form_6_next_btn.classList.add("disabled");
    //         }
    //     });
    // });
    // var form_7_inputs = form_7.querySelectorAll('input[required]');
    // form_7_inputs.forEach(input => {
    //     input.addEventListener('input', function () {
    //         if (validateForm(form_1)) {
    //             form_7_next_btn.removeAttribute("disabled");
    //             form_7_next_btn.classList.remove("disabled");
    //         } else {
    //             form_7_next_btn.setAttribute("disabled", "disabled");
    //             form_7_next_btn.classList.add("disabled");
    //         }
    //     });
    // });

    const emailInput = document.getElementById('email');
    const errorSpan = document.getElementById('error');

    emailInput.addEventListener('blur', function () {
      const email = emailInput.value;
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!email.match(emailPattern)) {
        errorSpan.innerText = 'Please enter a valid email address.';
      } else {
        errorSpan.style.display = 'none';
      }
    });

    form_1_next_btn.addEventListener("click", function () {
      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_1_checked1.style.display = "block";
      form_1_checked.style.display = "none";
      formparacon.style.display = "block";

      form_1.style.display = "none";
      form_2.style.display = "block";
      form_1_btns.style.display = "none";
      form_2_btns.style.display = "flex";
      form_2_progessbar.classList.add("active");

    });


    form_2_back_btn.addEventListener("click", function () {
      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_2_checked.style.display = "block";
      form_2_checked1.style.display = "none";
      formparacon.style.display = "none";

      form_1_checked1.style.display = "none";
      form_1_checked.style.display = "block";


      form_1.style.display = "block";
      form_2.style.display = "none";

      form_1_btns.style.display = "flex";
      form_2_btns.style.display = "none";

      form_2_progessbar.classList.remove("active");
    });

    form_2_next_btn.addEventListener("click", function () {
      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_2.style.display = "none";
      form_3.style.display = "block";

      form_2_checked.style.display = "none";
      form_2_checked1.style.display = "block";

      form_3_btns.style.display = "flex";
      form_2_btns.style.display = "none";

      form_3_progessbar.classList.add("active");
    });

    form_3_back_btn.addEventListener("click", function () {
      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_3.style.display = "none";
      form_2.style.display = "block";

      form_3_checked.style.display = "block";
      form_3_checked1.style.display = "none";

      form_2_btns.style.display = "flex";
      form_3_btns.style.display = "none";

      form_3_progessbar.classList.remove("active");
    });

    form_3_next_btn.addEventListener("click", function () {
      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_3.style.display = "none";
      form_4.style.display = "block";

      form_3_checked.style.display = "none";
      form_3_checked1.style.display = "block";

      form_4_btns.style.display = "flex";
      form_3_btns.style.display = "none";

      form_4_progessbar.classList.add("active");
    });


    // form_3_back_btn.addEventListener("click", function () {
    //   form_2.style.display = "block";
    //   form_3.style.display = "none";

    //   form_3_btns.style.display = "none";
    //   form_2_btns.style.display = "flex";

    //   form_3_progessbar.classList.remove("active");
    // });
    form_4_back_btn.addEventListener("click", function () {
      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_4.style.display = "none";
      form_3.style.display = "block";

      form_4_checked.style.display = "block";
      form_4_checked1.style.display = "none";

      form_3_btns.style.display = "flex";
      form_4_btns.style.display = "none";

      form_4_progessbar.classList.remove("active");
    });

    form_4_next_btn.addEventListener("click", function () {
      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_4.style.display = "none";
      form_5.style.display = "block";

      form_4_checked.style.display = "none";
      form_4_checked1.style.display = "block";

      form_5_btns.style.display = "flex";
      form_4_btns.style.display = "none";

      form_5_progessbar.classList.add("active");
    });

    form_5_back_btn.addEventListener("click", function () {
      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_5.style.display = "none";
      form_4.style.display = "block";

      // form_5_checked.style.display = "block";
      // form_5_checked1.style.display = "none";

      form_4_btns.style.display = "flex";
      form_5_btns.style.display = "none";

      form_5_progessbar.classList.remove("active");
    });

    // form_5_back_btn.addEventListener("click", function () {
    //   var form_1_checked = document.querySelector("#form_1_checked");
    //   var form_1_checked1 = document.querySelector("#form_1_checked1");
    //   var form_2_checked = document.querySelector("#form_2_checked");
    //   var form_2_checked1 = document.querySelector("#form_2_checked1");
    //   var form_3_checked = document.querySelector("#form_3_checked");
    //   var form_3_checked1 = document.querySelector("#form_3_checked1");
    //   var form_4_checked = document.querySelector("#form_4_checked");
    //   var form_4_checked1 = document.querySelector("#form_4_checked1");
    //   var form_5_checked = document.querySelector("#form_5_checked");
    //   var form_5_checked1 = document.querySelector("#form_5_checked1");

    //   form_5.style.display = "none";
    //   form_4.style.display = "block";

    //   form_5_checked.style.display = "block";
    //   form_5_checked1.style.display = "none";

    //   form_5_btns.style.display = "none";
    //   form_4_btns.style.display = "flex";


    //   form_5_progessbar.classList.remove("active");
    // });

    // form_5_next_btn.addEventListener("click", function () {
    //   var form_1_checked = document.querySelector("#form_1_checked");
    // var form_1_checked1 = document.querySelector("#form_1_checked1");
    // var form_2_checked = document.querySelector("#form_2_checked");
    // var form_2_checked1 = document.querySelector("#form_2_checked1");
    // var form_3_checked = document.querySelector("#form_3_checked");
    // var form_3_checked1 = document.querySelector("#form_3_checked1");
    // var form_4_checked = document.querySelector("#form_4_checked");
    // var form_4_checked1 = document.querySelector("#form_4_checked1");
    // var form_5_checked = document.querySelector("#form_5_checked");
    // var form_5_checked1 = document.querySelector("#form_5_checked1");

    // form_5.style.display = "none";
    //   form_6.style.display = "block";

    //   form_5_checked.style.display = "block";
    //   form_5_checked1.style.display = "none";

    //   form_4_btns.style.display = "flex";
    //   form_5_btns.style.display = "none";

    //   form_5_progessbar.classList.remove("active");
    // });

    Engineering.addEventListener("click", function () {

      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_5_checked.style.display = "none";
      form_5_checked1.style.display = "block";

      form_5.style.display = "none";
      form_6.style.display = "block";

      form_6_btns.style.display = "flex";
      form_5_btns.style.display = "none";

      form_5_progessbar.classList.add("active");



    });



    Inspection.addEventListener("click", function () {

      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_5_checked.style.display = "none";
      form_5_checked1.style.display = "block";

      form_5.style.display = "none";
      form_7.style.display = "block";

      form_7_btns.style.display = "flex";
      form_5_btns.style.display = "none";

      form_5_progessbar.classList.add("active");



    });
    //     form_5_next_btn.addEventListener("click", function () {
    //     var Inspection = document.getElementById("Inspection").value;
    //     var Engineering = document.getElementById("Engineering").value;

    //      if (Engineering === 'engineering') {
    //         form_7.style.display = "block";
    //         form_7_btns.style.display = "flex";
    //         form_5_btns.style.display = "none";
    //         form_5_progessbar.classList.add("active");
    //     }
    //    else if (Inspection === 'box-2') {

    //         form_6.style.display = "block";
    //         form_6_btns.style.display = "flex";
    //         form_5_btns.style.display = "none";
    //         form_5.style.display = "none";
    //         form_5_progessbar.classList.add("active");
    //     } 
    //     else if (Engineering === 'engineering') {
    //         form_7.style.display = "block";
    //         form_7_btns.style.display = "flex";
    //         form_5_btns.style.display = "none";
    //         form_5_progessbar.classList.add("active");
    //     }
    //     else {
    //         console.log("Neither Inspection nor Engineering condition was met");
    //         alert('Please select Inspection or Engineering');
    //     }
    // });

    form_6_back_btn.addEventListener("click", function () {

      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_5_checked1.style.display = "none";

      form_5.style.display = "block";
      form_6.style.display = "none";

      form_5_btns.style.display = "flex";
      form_6_btns.style.display = "none";

      form_5_progessbar.classList.add("active");
    });
    form_7_back_btn.addEventListener("click", function () {

      var form_1_checked = document.querySelector("#form_1_checked");
      var form_1_checked1 = document.querySelector("#form_1_checked1");
      var form_2_checked = document.querySelector("#form_2_checked");
      var form_2_checked1 = document.querySelector("#form_2_checked1");
      var form_3_checked = document.querySelector("#form_3_checked");
      var form_3_checked1 = document.querySelector("#form_3_checked1");
      var form_4_checked = document.querySelector("#form_4_checked");
      var form_4_checked1 = document.querySelector("#form_4_checked1");
      var form_5_checked = document.querySelector("#form_5_checked");
      var form_5_checked1 = document.querySelector("#form_5_checked1");

      form_5_checked.style.display = "block";
      form_5_checked1.style.display = "none";

      form_5.style.display = "block";
      form_7.style.display = "none";

      form_5_btns.style.display = "flex";
      form_7_btns.style.display = "none";

      form_5_progessbar.classList.add("active");
    });

    btn_done.addEventListener("click", function () {
      modal_wrapper.classList.add("active");
    })

    shadow.addEventListener("click", function () {
      modal_wrapper.classList.remove("active");
    })
  </script>


  <script>
    var config = {
      cUrl: 'https://api.countrystatecity.in/v1/countries',
      ckey: 'NHhvOEcyWk50N2Vna3VFTE00bFp3MjFKR0ZEOUhkZlg4RTk1MlJlaA=='
    }

    function loadCountries(countrySelect, stateSelect, citySelect) {
      let apiEndPoint = config.cUrl;

      fetch(apiEndPoint, { headers: { "X-CSCAPI-KEY": config.ckey } })
        .then(response => response.json())
        .then(data => {
          countrySelect.innerHTML = '<option value="" selected>Select Country</option>';
          data.forEach(country => {
            var option = document.createElement('option');
            option.value = country.iso2;
            option.textContent = country.name;
            countrySelect.appendChild(option);
          });

          countrySelect.addEventListener('change', function () {
            stateSelect.disabled = true;
            citySelect.disabled = true;
            stateSelect.innerHTML = '<option value="" selected>Select State</option>';
            citySelect.innerHTML = '<option value="" selected>Select City</option>';

            var selectedCountryCode = this.value;
            if (selectedCountryCode) {
              // Load states based on the selected country
              fetch(`${config.cUrl}/${selectedCountryCode}/states`, { headers: { "X-CSCAPI-KEY": config.ckey } })
                .then(response => response.json())
                .then(data => {
                  stateSelect.innerHTML = '<option value="" selected>Select State</option>';
                  data.forEach(state => {
                    var option = document.createElement('option');
                    option.value = state.iso2;
                    option.textContent = state.name;
                    stateSelect.appendChild(option);
                  });
                  stateSelect.disabled = false;
                })
                .catch(error => console.error('Error loading states:', error));
            }
          });

          stateSelect.addEventListener('change', function () {
            citySelect.disabled = true;
            citySelect.innerHTML = '<option value="" selected>Select City</option>';

            var selectedCountryCode = countrySelect.value;
            var selectedStateCode = this.value;
            if (selectedCountryCode && selectedStateCode) {
              // Load cities based on the selected country and state
              fetch(`${config.cUrl}/${selectedCountryCode}/states/${selectedStateCode}/cities`, { headers: { "X-CSCAPI-KEY": config.ckey } })
                .then(response => response.json())
                .then(data => {
                  citySelect.innerHTML = '<option value="" selected>Select City</option>';
                  data.forEach(city => {
                    var option = document.createElement('option');
                    option.value = city.iso2;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                  });
                  citySelect.disabled = false;
                })
                .catch(error => console.error('Error loading cities:', error));
            }
          });
        })
        .catch(error => console.error('Error loading countries:', error));
    }

    var countrySelect1 = document.getElementById('country1');
    var stateSelect1 = document.getElementById('state1');
    var citySelect1 = document.getElementById('city1');

    var countrySelect2 = document.getElementById('country2');
    var stateSelect2 = document.getElementById('state2');
    var citySelect2 = document.getElementById('city2');

    var countrySelect3 = document.getElementById('country3');
    var stateSelect3 = document.getElementById('state3');
    var citySelect3 = document.getElementById('city3');

    loadCountries(countrySelect1, stateSelect1, citySelect1);
    loadCountries(countrySelect2, stateSelect2, citySelect2);
    loadCountries(countrySelect3, stateSelect3, citySelect3);
  </script>




</body>

</html>