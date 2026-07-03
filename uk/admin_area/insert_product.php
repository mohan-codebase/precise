<?php include '../sql_folder/connect.php';

if(isset($_POST['insert_product'])){
  $product_title=$_POST['product_title'];
  $Price=$_POST['Price'];
  $Image=$_FILES['Image1']['name'];
  $tmp_Image=$_FILES['Image1']['tmp_name'];
  // $product_image_folder='images/'.$Image;

  $insert_query=mysqli_query($con, "insert into `products` (name, price, image) 
  values ('$product_title', '$Price',  '$Image')");


  if($insert_query){
    move_uploaded_file($tmp_Image, '../sql_folder/' .$Image);
    echo "product inserted successfully";
  }
  else{
    echo "There is some error";
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
  <title>Insert Product Admin Dashboard</title>
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
  <meta name="twitter:title" content="Precise3dm" />
  <meta name="twitter:description"
    content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries" />
  <meta property="og:type" content="3D Scanning" />
  <meta property="og:title" content="3D scanning services | 3D Printing Services | 3D software | 3D Printer" />
  <meta property="og:url" content="https://www.precise3dm.com/" />
  <meta property="og:image" content="https://www.precise3dm.com/assets/images/about-logo.png" />
  <meta property="og:description"
    content="Precise3DM Provides complete digital manufacturing solution that includes 3D scanning services, 3D reverse engineering, 3D Printing services & 3d Inspection for all industries" />

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
  <noscript>
    <img height="1" width="1" style="display:none;" alt=""
      src="https://px.ads.linkedin.com/collect/?pid=2283548&fmt=gif" />
  </noscript>

</head>

<body class="bg-light">
  <div class="container mt-3">
    <!-- title -->
    <h1 class="text-center">Insert Product</h1>
    <form action="" method="post" enctype="multipart/form-data">



      <!-- form -->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product-title" class="form-lable">Product Title</label>
        <input type="text" autocomplete="off" placeholder="Enter Product Title" name="product_title" id="product-title"
          class="form-control" required>
      </div>



      <!-- Image1 -->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="Image1" class="form-lable">Product Image1</label>
        <input type="file" name="Image1" id="Image1" class="form-control" required
          accept="image/png, image/jpg, image/jpeg">
      </div>

      <!-- Price -->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="Price" class="form-lable">Product Price</label>
        <input type="text" autocomplete="off" placeholder="Enter Price" name="Price" id="Price"
          class="form-control" required>
      </div>


      <!-- submit -->
      <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Product">
      </div>

    </form>
  </div>







</body>

<!-- bootstrap links-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/slim.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>

<!-- bootstrap links-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="assets/js/custom-owl.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="assets/js/counter.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</html>