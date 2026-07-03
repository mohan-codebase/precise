<?php
include ('sql_folder/connect.php');

if (isset($_POST['add_to_cart'])) {
  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = 1;

  $select_cart = mysqli_query($con, "Select * from `cart` where title='$product_name'");
  if (mysqli_num_rows($select_cart) > 0) {
    $display_message = "Product already in the Cart";
    $message_class = "already_added";
  } else {
    // insert cart data in cart table
    $insert_query = mysqli_query($con, "insert into `cart` (image,title,quantity,price) 
    values ('$product_image','$product_name','$product_quantity','$product_price')");
    $display_message = "Product Added to the Cart";
    $message_class = "added";
  }
}
?>

<?php
if (isset($_POST['buy_now1'])) {
  $product_name_buy = $_POST['product_name'];
  $product_price_buy = $_POST['product_price'];
  // $product_quantity_buy = 1;

  $buy_product = mysqli_query($con, "SELECT * FROM `buynow` WHERE title='$product_name_buy'");
  if (mysqli_num_rows($buy_product) > 0) {
    $display_message = "Buyed already in the Cart";
    $message_class = "already_added";
  } else {
    // insert buynow data in buynow table
    $insert_query_buy = mysqli_query($con, "INSERT INTO `einscan hx` (title, price) 
      VALUES ('$product_name_buy', '$product_price_buy')");
    $display_message = "Product Added to the Cart";
    $message_class = "added";
  }
  header("Location: direct-checkout-einscan.php");
  exit();
}
?>

<?php

if (isset($_POST['buy_now'])) {
  // Sanitize the input values
  $update_value = mysqli_real_escape_string($con, $_POST['update_quantity']);
  $update_id = mysqli_real_escape_string($con, $_POST['update_quantity_id']);

  // Prepare the update query
  $update_quantity_query = "UPDATE `einscan hx` SET quantity='$update_value' WHERE id='$update_id'";

  // Execute the update query
  if (mysqli_query($con, $update_quantity_query)) {
    echo "<script type='text/javascript'>window.location.href='direct-checkout-einscan.php';</script>";
            exit(); // Always exit after redirecting to avoid further execution
  } else {
    echo "Error updating quantity: " . mysqli_error($con);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name text-white="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>3D scanning services | 3D Printing Services | 3D software | 3D Printer</title>
  <meta name="description"
    content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries">
  <meta name="keywords"
    content="3D scanning services,best 3d scanning services in india, best 3d printing services in india, cmm inspection, 3d laser scanner, 3d reverse engineering software">
  <meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="revisit-after" content="7 days" />
  <meta name="twitter:image" content="https://www.precise3dm.com/assets/images/about-logo.png" />
  <meta name="twitter:card" content="Precise3dm" />
  <meta name="twitter:site" content="@precise3d_m" />
  <meta property="twitter:title" content="3D scanning services | 3D Printing Services | 3D software | 3D Printer"/>
  <meta name="twitter:description"
    content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries" />
  <meta property="og:type" content="3D Scanning" />
  <meta property="og:title" content="3D scanning services | 3D Printing Services | 3D software | 3D Printer" />
  <meta property="og:url" content="https://www.precise3dm.com/EinscanHX.php" />
  <meta property="twitter:url" content="https://www.precise3dm.com/EinscanHX.php" />
  <meta property="og:image" content="https://www.precise3dm.com/assets/images/about-logo.png" />
  <meta property="og:description"
    content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries" />
    <link rel="canonical" href="https://www.precise3dm.com/EinscanHX.php"/>
  <!--bootstrap css-->
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!--owl css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--custom css-->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/india.css">

  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
  <link rel="canonical" href="https://www.precise3dm.com/" />

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
        "name": "Einscan HX",
        "item": "https://www.precise3dm.com/EinscanHX.php"  
      }]
    }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://www.precise3dm.com/EinscanHX.php"
      },
      "headline": "3D scanning services | 3D Printing Services | 3D software | 3D Printer",
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
    

  <noscript>
    <img height="1" width="1" style="display:none;" alt=""
      src="https://px.ads.linkedin.com/collect/?pid=2283548&fmt=gif" />
  </noscript>
  <!--<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="2359ccbe-145f-4105-8390-511c84f986c0";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>-->
  <style>
    .banner1 {
      background: url(assets/images/india-scanner/banner.png) no-repeat center center;
      background-size: 100% 100%;
      padding: 150px 0px 260px 0px;
      position: relative;
      background-repeat: no-repeat;
    }

    .product-section {
      text-align: center;
      padding: 70px 0px 40px 0px;
    }

    .empty_text {
      background-color: #ff8d1e;
      color: #fff;
      text-align: center;
      padding: 20px;
      font-size: 20px;
      margin-top: 30px;
    }

    .empty_text i {
      margin-left: 10px;
      cursor: pointer;
    }

    .added_text {
      background-color: #ff8d1e;
      color: #fff;
      text-align: center;
      padding: 20px;
      font-size: 20px;
      margin-top: 30px;
    }

    .fa-times {
      margin-left: 10px;
      cursor: pointer;
    }

    .product-count {
      width: 15%;
      height: 38px;
      text-align: center;
      background: transparent;
      font-size: 26px;
      border: none;
    }

    .already_added_text {
      background-color: #ff0000;
      color: #fff;
      text-align: center;
      padding: 20px;
      font-size: 20px;
      margin-top: 30px;
    }

    .filter1 span {
      padding: 2px 7px 2px 7px;
      color: #fff;
      background-color: #FF8A00;
      border-radius: 50%;
      font-weight: 600;
    }
    .btn-danger{
      background:red !important;
      color: white;
      cursor: not-allowed;
      opacity: 0.6;
      pointer-events: none;
    }
    .product-section h2 {
        font-size: 42px;
        color: #000;
        font-weight: 700;
        margin-bottom: 4rem;
    }
    .faq-sec .h2-head {
        color: #000;
        font-size: 32px;
        font-weight: 600;
        text-align: center;
        padding-bottom: 40px;
    }
    @media (max-width:700px) {
      .product-section h2 {
        font-size: 22px !important;
        margin-bottom: 2rem !important;
      }
      .faq-sec .h2-head {
        color: #000;
        font-size: 22px !important;
        padding-bottom: 10px !important;
      }
    }
  </style>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5FX95R9');</script>
<!-- End Google Tag Manager -->
</head>

<body>
     <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FX95R9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <!-- header start -->
  <?php include ('includes/header.php'); ?>
  <!-- header End -->

  <!-- ==========================
          Hero Section start
       ========================== -->
  <div class="<?php echo isset($message_class) ? $message_class : ''; ?>_text">
    <?php echo isset($display_message) ? $display_message : ''; ?><i class='fas fa-times'
      onclick='this.parentElement.style.display=`none`'></i>
  </div>

  <!-- count of cart -->
  <?php

  $select_product = mysqli_query($con, "Select * from `cart`") or die('Query Failed');
  $row_count = mysqli_num_rows($select_product);

  ?>

  <section class="filtersec pt-5 pb-5">
    <input placeholder="Search" type="search" name="" id="filter-search">
    <ul id="search-results"></ul>
    <button id="search-button" style="margin:0px;" class="btn0">Search</button>
    <a href="cart.php"><button class="filter1"> <i class="fa-solid fa-cart-shopping"></i>Cart
        <span>
          <?php echo $row_count ?>
        </span></button></a>
  </section>


  <section class="scanner-section">

    <?php
    $select_product = mysqli_query($con, "SELECT * FROM `products` LIMIT 1");

    if (mysqli_num_rows($select_product) > 0) {
      $fetch_product = mysqli_fetch_assoc($select_product);
      ?>
      <form action="" method="post" action="">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="row">
                <div class="col-lg-2">
                  <div class="sub-img">
                    <img onclick="submain1()" src="assets/images/product-gallery/img1.png" alt=""><br>
                    <img onclick="submain2()" src="assets/images/product-gallery/img2.png" alt=""><br>
                    <img onclick="submain3()" src="assets/images/product-gallery/img3.png" alt=""><br>
                  </div>
                </div>
                <div class="col-lg-10 main-img">
                  <img id="mainimg" src="sql_folder/<?php echo $fetch_product['image'] ?>" alt=""><br>
                  <img id="img1" style="display:none;" src="assets/images/product-gallery/img5.png" alt="">
                  <img id="img2" style="display:none;" src="assets/images/product-gallery/img4.png" alt="">
                  <img id="img3" style="display:none;" src="assets/images/product-gallery/img6.png" alt="">
                </div>
              </div>
            </div>

            <?php
            $select_cart_product = mysqli_query($con, "SELECT * FROM `einscan hx` LIMIT 1 OFFSET 0");
            if (mysqli_num_rows($select_cart_product) > 0) {
              while ($fetch_cart_product = mysqli_fetch_assoc($select_cart_product)) {
                $subtotal = $fetch_cart_product['price'] * $fetch_cart_product['quantity'];
                ?>

                <div class="col-lg-6 col-md-6">
                  <div class="details">
                    <div class="add-to-cart">
                      <h1>Einscan HX</h1>
                    </div>

                    <p>Einscan HX Hybrid Blue laser & LED light handheld 3D Scanner</p>
                    <h5>Accuracy: <span class="hd-scan">HD Scan: 0.05mm </span></h5>
                    <small class="text-muted">₹ 8.8 lakhs <span class="mrp"> M.R.P. : ₹9.8 lakhs </span></small><br>
                    <small class="text-dark">Inclusive Of All Taxes</small>
                    <p class="Description">
                      Description Of The Product
                    </p>
                    <ul>
                      <li>
                        The Einscan HX features both laser scanning and structured light scanning modes, providing users with
                        flexibility for various scanning scenarios. Laser scanning is ideal for capturing intricate details,
                        while structured light scanning excels in capturing complex geometries.
                      </li>
                      <li>
                        With exceptional accuracy and resolution, the Einscan HX ensures precise and detailed 3D scans,
                        allowing you to capture even the finest features of your objects.
                      </li>
                    </ul>
                    <h5>Quantity</h5>
                    <form action="" method="post">
                      <input type="hidden" value="<?php echo $fetch_cart_product['id']; ?>" name="update_quantity_id">

                      <div class="quantity-box">
                        <span class="decrease" onclick="decreaseValue()">-</span>
                        <input class="product-count" value="1" type="text"
                          name="update_quantity" id="count">
                        <span class="increase" onclick="increaseValue()">+</span><br>
                      </div>
                    </form>

                    <!-- add to cart -->
                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image'] ?>">
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name'] ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price'] ?>">

                    <!-- buynow -->
                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name'] ?>">
                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price'] ?>">

                    <div class="add-buy-btn" style="display:flex; gap:20px;margin-top: 30px;">
                      <input value="Add to Cart" class="addcart" type="submit" name="add_to_cart">
                      <input value="Sold Out" class="buynow btn-danger" type="submit" name="buy_now">
                    </div>
                  </div>
                </div>

                <?php
              }
            }
            ?>

          </div>
        </div>
      </form>

      <?php
    } else {
      echo "<div class='empty_text'> No Product Available </div>";
    }
    ?>

  </section>

  <!--  -->


  <section class="product-section">
    <h2 class="text-center">Recently Viewed <span>3D Scanners</span> </h2>
    <div class="container">
      <div style="display:block;" class="row">
        <div class="product-sec owl-carousel">

          <div class="card" style="width: 18rem;">
            <div class="card-img">
              <img src="assets/images/products/product14.png" class="card-img-top" alt="...">
            </div>

            <div class="card-body">
              <div class="card-title">
                <h5>Einscan HX</h5>
              </div>
              <div class="card-title">
                <p class="card-text">Hybrid Blue laser & LED light handheld 3D Scanner </p>
                <i class="fa-solid fa-cart-shopping"></i>
              </div>
              <h6>Accuracy: <span style="color:grey; font-weight:200; font-size:14px;"> HD Scan: 0.05mm</span></h6>
              <div class="card-footer">
                <small class="text-muted">₹ 8.8 lakhs <span class="mrp">M.R.P. : ₹9.8 lakhs</span></small>
              </div>
              <a href="EinscanHX.php" class="btn btn-primary">Buy now</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-img">
              <img src="assets/images/products/chapter4-Image-5.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <div class="card-title">
                <h5>Freescan UE 11</h5>
              </div>
              <div class="card-title">
                <p class="card-text">Blue laser Handheld 3D scanner </p>
                <i class="fa-solid fa-cart-shopping"></i>
              </div>
              <h6>Accuracy: <span style="color:grey; font-weight:200; font-size:14px;"> Up to 0.02 mm</span></h6>
              <div class="card-footer">
                <small class="text-muted">₹ 11.75 lakhs <span class="mrp"> M.R.P. : ₹12 lakhs </span></small>
              </div>
              <a href="FreescanUE11.php" class="btn btn-primary">Buy Now</a>

            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-img">
              <img src="assets/images/new-home/product6.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <div class="card-title">
                <h5>Faro Edge arm</h5>
              </div>
              <div class="card-title">
                <p class="card-text">Portable measurement arm type blue laser 3D Scanner </p>
                <i class="fa-solid fa-cart-shopping"></i>
              </div>
              <h6>Accuracy: <span style="color:grey; font-weight:200; font-size:14px;"> 0.03mm / Probing : 0.001</span>
              </h6>
              <div class="card-footer">
                <small class="text-muted">₹ 15 lakhs <span class="mrp"> M.R.P. : ₹18 lakhs </span></small>
              </div>
              <a href="Faro-Edge-arm.php" class="btn btn-primary btn-danger">Sold Out</a></a>

            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-img">
              <img src="assets/images/products/product13.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <div class="card-title">
                <h5>EinScan Pro 2X Plus </h5>
              </div>
              <div class="card-title">
                <p class="card-text">Structured White LED Light 3D Scanner</p>
                <i class="fa-solid fa-cart-shopping"></i>
              </div>
              <h6>Accuracy: <span style="color:grey; font-weight:200; font-size:14px;"> 0.05 mm (0.002 in)</span></h6>
              <div class="card-footer">
                <small class="text-muted">₹ 4.1 lakhs <span class="mrp"> M.R.P. : ₹4.6 lakhs </span></small>
              </div>
              <a href="EinScan-Pro-2X-Plus.php" class="btn btn-primary">Buy Now</a>

            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <div class="card-img">
              <img src="assets/images/products/product12.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <div class="card-title">
                <h5>EinScan Pro HD </h5>
              </div>
              <div class="card-title">
                <p class="card-text">Structured White LED Light 3D Scanner</p>
                <i class="fa-solid fa-cart-shopping"></i>
              </div>
              <h6>Accuracy: <span style="color:grey; font-weight:200; font-size:14px;"> HD Scan: ≤0.04 mm</span></h6>
              <div class="card-footer">
                <small class="text-muted">₹ 7 lakhs<span class="mrp"> M.R.P. : ₹7.5 lakhs </span></small>
              </div>
              <a href="EinScan-Pro-HD.php" class="btn btn-primary">Buy Now</a>

            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <div class="card-img">
              <img src="assets/images/products/product11.png" class="card-img-top" alt="...">
            </div>
            <div class="card-body">
              <div class="card-title">
                <h5>T-SCAN Hawk with integrated photogammetry </h5>
              </div>
              <div class="card-title">
                <p class="card-text">Blue laser Handheld 3D scanner</p>
                <i class="fa-solid fa-cart-shopping"></i>
              </div>
              <h6>Accuracy: <span style="color:grey; font-weight:200; font-size:14px;"> HD Scan: ≤0.04 mm</span></h6>
              <div class="card-footer">
                <small class="text-muted">₹ 21.8 lakhs<span class="mrp">M.R.P. : ₹26 lakhs </span></small>
              </div>
              <a href="photogammetry.php" class="btn btn-primary">Buy Now</a>

            </div>
          </div>

          <!-- Add more card elements here for Card 2, Card 3, and Card 4 -->

        </div>
      </div>
    </div>
  </section>

   <!-- faq -->
  <div class="container faq-sec">
    <h2 class="text-center h2-head">Our most <span>frequently</span> asked questions</h2>
    <div class="row">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
              aria-expanded="true" aria-controls="collapseOne">
              How does Precise3DM Buy and sell used scanner portfolio work?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Sellers can list their used 3D scanners on Precise3DM by creating detailed listings that include
              specifications, conditions, and equipment images. Buyers can browse through the listings, compare options,
              and contact sellers directly through the platform to negotiate terms and finalise the purchase.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Why should I use Precise3DM?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Precise3DM provides a convenient and centralised marketplace for individuals and businesses looking to buy
              or sell used 3D scanners. By using Precise3DM, sellers can find potential buyers, while buyers can access
              a wide selection of pre-owned equipment at competitive prices.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Is it safe to buy used 3D scanners on Precise3DM?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Yes, Precise3DM takes security and trust seriously. We have implemented measures to verify the identity
              and the condition of the 3D scanner. Additionally, we provide additional warranties to help users buy 3D
              scanners with confidence.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              How do I create a listing of the scanners that I want to list?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              To create a listing on Precise3DM, find and fill out the form called ''sell your 3D scanner'' and follow
              the prompts to input the relevant information about your used 3D scanner. Be sure to include detailed
              descriptions, clear images, and accurate specifications to attract potential buyers.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Can I negotiate the price of a used 3D scanner on Precise3DM?**
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Yes, buyers and sellers are encouraged to negotiate the equipment price directly through Precise3DM;
              Precise3DM organise meetings that allow users to communicate with each other and discuss terms, including
              price, shipping, payment options, etc.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              How does shipping work on Precise3DM?
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Precise3DM can handle shipping, logistics, and post-sales training of the used 3d scanners to help
              customers get used to the 3d scanner usage.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
              What types of 3D scanners can I find on Precise3DM?
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              Precise3DM offers a wide variety of used 3D scanners, including handheld scanners, desktop scanners,
              industrial scanners, and more. Whether you're looking for a specific brand, model, or application, you
              will likely find it listed on Precise3DM.
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
              How do I contact customer support if I have a question or issue?
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              If you have any questions or issues while buying the 3D scanner, contact us at sales@precise3dm,
              sm@precise3dm, or 9840478347. Our team is dedicated to providing prompt and helpful assistance to ensure a
              positive experience for all users.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <style>
    @media (max-width:600px) {
      .sub-img {
        display: flex;
      }
    .buynow {
    width: 50% !important;
     }

      .add-to-cart {
        display: flex;
        align-items: center;
        justify-content: center !important;
        gap: 30px !important;
        padding-bottom: 15px !important;
      }

      .filtersec {
        padding-bottom: 10px !important;
        padding-top: 10px !important;
        margin-top:0 !important;
      }

      #filter-search {
        border: 1px solid #D3D3D3;
        height: 60px;
        margin-top: 40px;
        width: 40%;
        margin-right: 5px;
        padding: 20px;
      }

      .faq-sec {
        padding: 40px 0px 60px 0px !important;
        overflow-x: hidden !important;
      }

      .product-section {
        padding: 40px 0px 0px 0px !important;
      }

      .empty_text {
        margin-top: 50px !important;
      }

      .details {
        text-align: center !important;
      }

      .add-buy-btn {
        justify-content: space-around !important;
        gap: 0px !important;
      }

      .details li {
        text-align: left !important;
        font-size: 14px !important;
      }

      .addcart {
        width: 43% !important;
      }

      .main-img {
        padding: 20px 0 40px 0 !important;
      }

      .sub-img img {
        padding: 10px !important;
      }

      .btn0 {
        padding: 10px 45px !important;
      }

      .filter1 {
        margin-top: 30px !important;
      }

      .btn0::before {
        opacity: 0.5 !important;
        margin-left: -86px !important;
        width: 54% !important;
      }
    }

    .empty_text {
      background-color: #ff8d1e;
      color: #fff;
      text-align: center;
      padding: 20px;
      font-size: 20px;
    }

    body {
      background-color: #fff !important;
      color: var(--whitecolor);
      margin: 0;
      padding: 0;
      text-decoration: none;
      transition: background 0.5s;
    }

    .fa-cart-shopping {
      color: #FF931E;
    }

    .card-body {
      padding: 30px 10px 10px 10px;
      text-align: left;
    }

    .card-title h5 {
      color: #000;
      font-size: 16px;
    }

    .text-muted {
      color: #57BF6D !important;
      font-size: 20px;
    }

    .card-footer {
      padding: 10px 0px 11px 0px;
      background: no-repeat;
      border: none;
    }

    .mrp {
      color: red !important;
      margin-left: 15px;
      text-decoration: line-through;
      font-size: 13px;
    }

    body {
      background-color: #fff !important;
      color: var(--whitecolor);
      margin: 0;
      padding: 0;
      text-decoration: none;
      transition: background 0.5s;
    }

    .filter h4 {
      color: #000;
    }

    .products-head h2 {
      color: #000;
      padding-top: 50px;
    }

    .filter span {
      color: #000;
    }

    .filter-option {
      display: flex;
      align-items: center;
      margin-top: 20px;
      gap: 5px;
    }

    input[type=checkbox] {
      accent-color: #FF8A00;
    }

    hr {
      margin-top: 0px !important;
      margin-bottom: 0px !important;
      border: 0 !important;
      margin-left: 0 !important;
      margin-right: 0 !important;
      border-top: 1px solid #000 !important;
    }

    .filter-line {
      margin-top: 50px !important;
      margin-bottom: 0px !important;
      border: 0 !important;
      margin-left: 0 !important;
      margin-right: 0 !important;
      border-top: 1px solid #000 !important;
    }


    .fa-cart-shopping {
      color: #FF931E;
      margin-right: 5px;
    }

    .card-body {
      padding: 30px 10px 10px 10px;
      text-align: left;
    }

    .card-title h5 {
      color: #000;
      font-size: 16px;
    }

    .text-muted {
      color: #57BF6D !important;
      font-size: 20px;
    }

    .card-footer {
      padding: 10px 0px 11px 0px;
      background: no-repeat;
      border: none;
    }

    #search-results {
      color: red;
      font-size: 15px;
      text-align: left;
      padding: 10px;
      border-radius: 5px;
      width: 365px;
      margin-top: 0px !important;
      left: 11%;
      padding-left: 0px;
      position: absolute;
      z-index: 99;
    }

    .result-item a {
      padding: 5px;
      line-height: 2;
      border-radius: 5px;
    }

    .result-item a:hover {
      background-color: #FF8A00;
      color: white;
    }


    .mrp {
      color: red !important;
      margin-left: 15px;
      text-decoration: line-through;
      font-size: 13px;
    }

    .products {
      display: flex;
      gap: 20px;
      justify-content: center;
      padding-top: 50px;
    }

    .filter1 {
      background-color: #fff;
      border: none;
      box-shadow: 0px 0px 10px 0px #FF8A0029;
      color: #000;
      border-radius: 5px;
      padding: 15px 40px;
      margin-right: 5px;
      margin-left: 20px;
    }

    .fa-arrow-down-wide-short {
      color: #FF8A00;
      margin-right: 5px;
    }

    #filter-search {
      border: 1px solid #D3D3D3;
      height: 60px;
      width: 40%;
      margin-right: 5px;
      padding: 20px;
    }

    .filtersec {
      text-align: center;
      margin-top:120px;
    }

    .btn0:hover {
      background-color: #000 !important;
      color: #fff !important;
      border: 1px solid #FF8A00;
    }



    .btn0 {
      background-color: #ff8d1e !important;
      box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
      color: #fff !important;
      padding: 15px 85px !important;
      display: inline-block;
      font-weight: 400 !important;
      color: #212529;
      text-align: center;
      vertical-align: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      background-color: #fd9a0500;
      border: 1px solid #fdfdfd00;
      padding: 0px 5px;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;

    }

    .card {
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .filter {
      background: #FAFAFA;
      padding: 20px;
      margin-top: 60px;
    }

    .sub-img img {
      padding: 20px;
      cursor: pointer;
    }

    .main-img img {
      width: 50%;
      object-fit: contain;
    }

    .main-img {
      text-align: center;
      display: flex;
      justify-content: center;
    }

    .details h1 {
      color: #FF8A00;
    }

    .details h5 {
      color: #000;
      padding-bottom: 10px;
    }

    .hd-scan {
      color: var(--subcotent);
      font-size: 16px;
    }

    .Description {
      color: #FF8A00;
      padding-top: 10px;
    }

    .details ul {
      color: #000;
    }

    .details li {
      list-style-type: disc;
      padding-bottom: 10px;
    }

    .cart {
      background-color: #fff;
      color: #000;
      width: 100px;
      padding: 0px;
      height: 40px;
      border-radius: 5px;
      border: 1px solid #A9A9A9;
    }

    .decrease {
      color: #FF8A00;
      font-size: 30px;
      cursor: pointer;
      padding: 0px 10px 0px 10px;
      border-top-right-radius: 10px;
      border-bottom-right-radius: 10px;
      background-color: #FEEFDE;
    }

    .increase {
      color: #FF8A00;
      font-size: 30px;
      cursor: pointer;
      padding: 0px 10px 0px 10px;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
      background-color: #FEEFDE;
    }

    .scanner-section {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .number {
      color: #000;
      font-size: 30px;
      padding-left: 10px;
      padding-right: 10px;
    }

    .addcart {
      padding: 10px 40px;
      border: 1px solid #FF8A00;
      border-radius: 5px;
      background-color: #FEEFDE !important;
      color: #FF8A00 !important;
      width: 30%;
    }



    .add-to-cart {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .add-to-cart img {
      width: 70%;
      cursor: pointer;
    }


    .increment {
      width: 15%;
      padding: 15px;
      font-size: 22px;
      border: 2px solid #FF8A00;
    }

    .buynow {
      padding: 10px 40px;
      width: 32%;
      border: 1px solid #FF8A00;
      border-radius: 5px;
      background-color: #FF8A00 !important;
      color: #fff !important;
      transition: 0.4s all;
    }

    .buynow:hover {
      background-color: #000 !important;
      border: 1.5px solid #FF8A00 !important;
      color: #FF8A00 !important;
    }
  </style>






  <script>
    $(document).ready(function () {
      $('.product-sec.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
          0: {
            items: 1 // Show 1 item on small screens (less than 600px)
          },
          600: {

            items: 4 // Show 4 items on screens between 600px and 992px
          }
        }
      });
    });

  </script>
  <script>
    $(document).ready(function () {
      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 4
      });
    });

    function submain1() {
      var img1 = document.getElementById("img1");
      var img2 = document.getElementById("img2");
      var img3 = document.getElementById("img3");
      var mainimg = document.getElementById("mainimg");

      mainimg.style.display = "none";
      img1.style.display = "block";
      img2.style.display = "none";
      img3.style.display = "none";

    }

    function submain2() {
      var img1 = document.getElementById("img1");
      var img2 = document.getElementById("img2");
      var img3 = document.getElementById("img3");
      var mainimg = document.getElementById("mainimg");

      mainimg.style.display = "none";
      img1.style.display = "none";
      img2.style.display = "block";
      img3.style.display = "none";

    }

    function submain3() {
      var img1 = document.getElementById("img1");
      var img2 = document.getElementById("img2");
      var img3 = document.getElementById("img3");
      var mainimg = document.getElementById("mainimg");

      mainimg.style.display = "none";
      img1.style.display = "none";
      img2.style.display = "none";
      img3.style.display = "block";

    }

  </script>







  <!--separator start-->
  <hr class="separator">
  <!--separator end-->

  <!-- footer start -->
  <?php include ('includes/footer.php'); ?>
  <!-- footer end -->

  <!-- bootstrap links-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/slim.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>

  <!-- bootstrap links-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="assets/js/custom-owl.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


  <script>
    function increaseValue() {
      var value = parseInt(document.getElementById('count').value, 10);
      value = isNaN(value) ? 0 : value;
      value++;
      document.getElementById('count').value = value;
    }

    function decreaseValue() {
      var value = parseInt(document.getElementById('count').value, 10);
      value = isNaN(value) ? 0 : value;
      if (value > 1) {
        value--;
        document.getElementById('count').value = value;
      }
    }
  </script>


  <script>
    const data = [
      { name: 'Einscan HX', link: 'EinscanHX.php' },
      { name: 'Free Scan UE 11', link: 'FreescanUE11.php' },
      { name: 'Faro Edge Arm', link: 'Faro-Edge-arm.php' },
      { name: 'Einscan Pro 2X Plus', link: 'EinScan-Pro-2X-Plus.php' },
      { name: 'EinScan Pro HD', link: 'EinScan-Pro-HD.php' },
      { name: 'T-SCAN Hawk with integrated photogammetry', link: 'photogammetry.php' },
      // Add more items with their respective links
    ];

    const searchInput = document.getElementById('filter-search');
    const searchResults = document.getElementById('search-results');
    const searchButton = document.getElementById('search-button');

    // Event listener for input changes
    searchInput.addEventListener('input', handleSearch);

    function handleSearch() {
      // Get the search query
      const query = searchInput.value.trim().toLowerCase();

      // Clear previous search results
      searchResults.innerHTML = '';

      // If the input is empty, hide the search results
      if (query === '') {
        searchResults.style.display = "none";
        return;
      }

      // Filter data based on the query
      const filteredData = data.filter(item => item.name.toLowerCase().includes(query));

      // Display results or show alert if no results found
      if (filteredData.length === 0) {
        searchResults.innerHTML = 'No Scanner found for ' + query;
      } else {
        // Display results
        filteredData.forEach(item => {
          const resultItem = document.createElement('li');
          resultItem.className = 'result-item';

          // Create a clickable link for each result
          const link = document.createElement('a');
          link.href = item.link; // Set the link dynamically
          link.textContent = item.name;
          link.addEventListener('click', (event) => {
            event.preventDefault();

            // Fill the input box with the clicked item's name
            searchInput.value = item.name;

            // Hide the search results
            searchResults.style.display = "none";
          });

          // Append the link to the result item
          resultItem.appendChild(link);

          searchResults.appendChild(resultItem);
        });

        // Show the search results
        searchResults.style.display = "block";
      }
    }

    // Event listener for search button click
    searchButton.addEventListener('click', function () {
      // Get the value from the input box
      const searchValue = searchInput.value.trim().toLowerCase();

      // If the input is empty, do nothing
      if (!searchValue) return;

      // Loop through data to find the matching link
      const foundItem = data.find(item => item.name.toLowerCase() === searchValue);

      // If a matching item is found, redirect to its link
      if (foundItem) {
        window.location.href = foundItem.link;
      }
    });
  </script>


  <script>
    let counted = 0;

    window.addEventListener('scroll', function () {
      const counter = document.getElementById('counter');
      const oTop = counter.offsetTop - window.innerHeight;

      if (counted === 0 && window.scrollY > oTop) {
        const countElements = document.querySelectorAll('.count');
        const duration = 5000;

        countElements.forEach(function (element) {
          const countTo = element.getAttribute('data-count');
          let countNum = parseInt(element.textContent);
          const increment = (countTo - countNum) / (duration / 20);
          const animation = setInterval(function () {
            countNum += increment;

            element.textContent = Math.floor(countNum);

            if (countNum >= countTo) {
              clearInterval(animation);
              element.textContent = countTo;
            }
          }, 20);
        });

        counted = 1;
      }
    });
  </script>
  <script>

    let currentIndex = 0;
    function handleTabClick(event) {
      if (event.target.tagName === 'LI') {
        const selectedTab = event.target.dataset.tab;
        updateTabs(selectedTab);
      }
    }
    function moveTabs(direction) {
      const tabs = document.querySelectorAll('.tabs li');
      const newIndex = currentIndex + direction;
      if (newIndex >= 0 && newIndex < tabs.length) {
        const selectedTab = tabs[newIndex].dataset.tab;
        updateTabs(selectedTab);
      }
    }
    function updateTabs(selectedTab) {
      document.querySelectorAll('.content').forEach(function (div) {
        div.classList.remove('active-content');
      });
      document.querySelectorAll('.tabs li').forEach(function (tab) {
        tab.classList.remove('active');
      });
      document.getElementById(selectedTab).classList.add('active-content');
      document.querySelector(`[data-tab="${selectedTab}"]`).classList.add('active');
      currentIndex = Array.from(document.querySelectorAll('.tabs li')).findIndex(tab => tab.dataset.tab === selectedTab);
    }
  </script>
  <script>
    let currentIndex1 = 0;
    function handleCustomTabClick(event) {
      if (event.target.tagName === 'LI') {
        const selectedTab = event.target.dataset.tab;
        updateTabs1(selectedTab);
      }
    }
    function moveTabs1(direction) {
      const tabs = document.querySelectorAll('.custom-tabs li');
      const newIndex = currentIndex1 + direction;

      if (newIndex >= 0 && newIndex < tabs.length) {
        const selectedTab = tabs[newIndex].dataset.tab;
        updateTabs1(selectedTab);
      }
    }
    function updateTabs1(selectedTab) {
      document.querySelectorAll('.custom-content').forEach(function (div) {
        div.classList.remove('active-contents');
      });
      document.querySelectorAll('.custom-tabs li').forEach(function (tab) {
        tab.classList.remove('active');
      });
      document.getElementById(selectedTab).classList.add('active-contents');
      document.querySelector(`[data-tab="${selectedTab}"]`).classList.add('active');
      currentIndex1 = Array.from(document.querySelectorAll('.custom-tabs li')).findIndex(tab => tab.dataset.tab === selectedTab);
    }
  </script>

  <script>
    // Function to initialize the slider
    function initializeSlider(selector, options) {
      const defaultOptions = {
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true
        // Add other default options as needed
      };

      const mergedOptions = { ...defaultOptions, ...options };

      $(document).ready(function () {
        $(selector).slick(mergedOptions);
      });
    }

    // Function to fetch slide data and initialize the slider
    function initializeDynamicSlider(selector) {
      // Make an API request or fetch data dynamically
      // Here, we are using dummy data for demonstration
      const fetchData = {
        slideShow: 3,
        mlSlideShow: 2,
        lgSlideShow: 1,
        mdSlideShow: 1
      };

      // Set the fetched data to the corresponding data attributes
      $(selector).attr('data-slide-show', fetchData.slideShow);
      $(selector).attr('data-ml-slide-show', fetchData.mlSlideShow);
      $(selector).attr('data-lg-slide-show', fetchData.lgSlideShow);
      $(selector).attr('data-md-slide-show', fetchData.mdSlideShow);

      // Initialize the slider with the fetched data
      initializeSlider(selector, {
        slidesToShow: fetchData.slideShow,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: fetchData.mdSlideShow
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
    }

    // Initialize the dynamic slider
    initializeDynamicSlider('#dynamicSlider');
    initializeDynamicSlider('#dynamicSlider1');
  </script>
  <script>
    // Function to initialize the slider
    function initializeSlider(selector, options) {
      const defaultOptions = {
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        arrows: true
        // Add other default options as needed
      };

      const mergedOptions = { ...defaultOptions, ...options };

      $(document).ready(function () {
        $(selector).slick(mergedOptions);
      });
    }

    // Function to fetch slide data and initialize the slider
    function initializeDynamicSlider(selector) {
      // Make an API request or fetch data dynamically
      // Here, we are using dummy data for demonstration
      const fetchData = {
        slideShow: 5,
        mlSlideShow: 2,
        lgSlideShow: 3,
        mdSlideShow: 2
      };

      // Set the fetched data to the corresponding data attributes
      $(selector).attr('data-slide-show', fetchData.slideShow);
      $(selector).attr('data-ml-slide-show', fetchData.mlSlideShow);
      $(selector).attr('data-lg-slide-show', fetchData.lgSlideShow);
      $(selector).attr('data-md-slide-show', fetchData.mdSlideShow);

      // Initialize the slider with the fetched data
      initializeSlider(selector, {
        slidesToShow: fetchData.slideShow,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 991,
            settings: {
              slidesToShow: fetchData.mdSlideShow
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 2
            }
          }
        ]
      });
    }

    // Initialize the dynamic slider
    initializeDynamicSlider('#dynamicSlider2');
  </script>
</body>

</html>