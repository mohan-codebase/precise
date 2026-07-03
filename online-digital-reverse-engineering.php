<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="3D SCANNING SERVICE">
    <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/scanning-service.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>3D Scanning Service</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96527116-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96527116-1');
</script>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2980089008869976');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2980089008869976&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script type="text/javascript">
_linkedin_partner_id = "2283548";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2283548&fmt=gif" />
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
    .hero-image {
        background-image: url("assets/images/Reverse_engineering.jpg");
        background-color: #cccccc;
        height: 600px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }

    .hero-text {
        position: relative;
        left: 50%;
        top: 500px;
        transform: translate(-50%, -50%);
        color: white;
    }

    #regForm {
        background-color: #ffffff;
        /*margin: 100px auto;*/
        /*font-family: Raleway;*/
        padding: 40px;
        /*width: 70%;*/
        min-width: 300px;
    }

    /* Hide all steps by default: */
    .tab-step-form {
        display: none;
    }

    .tab-step-form .form-control {
        background: transparent;
        border: none;
        padding: 0;
        height: 40px;
        color: rgb(64 59 59 / 80%);
        border-bottom: 1px solid rgb(68 58 58 / 20%);
        border-radius: 0;
    }

    button.step-form-btn,
    label.custom-file-upload {
        border: none;
        text-transform: uppercase;
        margin: 18px 17px 30px 17px;
        background-color: #ff8d1e;
        color: #ffffff;
        font-weight: bold;
        font-family: 'Fira Sans', sans-serif;
        padding: 7px 21px;
        width: 50%;
        border-radius: 5px;
        font-size: 14px;
    }

    input[type="file"] {
        display: none;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        border-bottom: 1px solid #dc0d0d !important;
    }

    .form-group {
        margin: 35px 0px;
    }

    #loader {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.75) url(load2.gif) no-repeat center center;
        z-index: 10000;
    }

    input[type=checkbox] {
        position: relative;
        cursor: pointer;
        margin: 10px 20px 10px 10px;
    }

    input[type=checkbox]:before {
        content: "";
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: 0;
        left: 0;
        border: 2px solid #555555;
        border-radius: 3px;
        background-color: white;
    }

    input[type=checkbox]:checked:after {
        content: "";
        display: block;
        width: 5px;
        height: 10px;
        border: solid black;
        border-width: 0 2px 2px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        position: absolute;
        top: 2px;
        left: 6px;
    }

    textarea.form-control {
        box-shadow: 0 0 8px 2px rgb(0 0 0 / 20%);
        font-size: 12px;
        height: 100px !important;
        resize: none;
    }

    .shadow-textarea textarea.form-control::placeholder {
        font-weight: 300;
    }

    .shadow-textarea textarea.form-control {
        padding-left: 0.8rem;
        padding:15px;
    }

    span.error {
        color: red;
        display: none;
    }

    div.status-div {
        height: 100% !important;
        align-content: center;
        text-align: center;
        margin: auto;
    }

    button.status-btn {
        width: 100% !important;
    }
</style>

<body class="bg-color-update">
    
     <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FX95R9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header end -->
    <section3>
        <div class="container-fluid" style="padding:0">
            <div class="row main">
                <div class="col-lg-12 bg-1">
                    <div class="container sectioning">
                        <div class="row inside">
                            <div class="col-lg-5" style="background-color: #ffffff">
                                <?php
                                if (isset($_SESSION['status'])) {
                                    if ($_SESSION['status'] == "success") {
                                        echo "<div class='row status-div'>
                                                <p class='status-message'>Thanks for uploading the file<br/>Wait for 15 minutes for a rapid quotation to your Email or Whatsapp</p>
                                                <div style='width: 100%'><a href='javascript:void(0);'><button class='step-form-btn'>Back</button></a></div></div>";
                                    } else {
                                        echo "<div class='row status-div'>
                                                <p class='status-message'>Oops...Something went wrong, please try again
                                            </p><div style='width: 100%'><a href='javascript:void(0);'><button class='step-form-btn'>Back</button></a></div></div>";
                                    }
                                    unset($_SESSION['status']);
                                } else { ?>
                                    <form method="POST" action="upload.php" id="regForm" enctype="multipart/form-data" onsubmit="disablebutton();">

                                        <div class="tab-step-form" data-form-type="contact">
                                            <h5>Contact Information</h5>
                                            <div class="form-group">
                                                <input type="text" class="form-control required" id="name" name="name" placeholder="Name *" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control required" id="email" name="email" placeholder="Email Address *" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control required" id="companyname" name="companyname" placeholder="Company Name *" required />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control required" id="contactnumber" name="contactnumber" placeholder="Contact Number *" required />
                                            </div>
                                        </div>
                                        <div class="tab-step-form" data-form-type="technical">
                                            <h5>Technical Information</h5>
                                            <div class="form-group" style="margin:10px 0px -5px 0px">
                                                <label for="uploadscan" class="custom-file-upload">
                                                    Upload 3D Scan
                                                </label>
                                                <input type="file" class="form-control" id="uploadscan" name="uploadscan" accept=".stl" required />
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" class="technical-checkbox" name="design-int"> DESIGN INTENT MODELING</label>
                                                <span><a href="#design-intent"><i class="fa fa-info-circle" aria-hidden="true"></i></a></i></span>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" class="technical-checkbox" name="hybrid-mod"> HYBRID MODELING</label>
                                                <span><a href="#design-intent"><i class="fa fa-info-circle" aria-hidden="true"></i></a></i></span>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" class="technical-checkbox" name="as-built"> AS-BUILT MODELING</label>
                                                <span><a href="#design-intent"><i class="fa fa-info-circle" aria-hidden="true"></i></a></i></span>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" class="technical-checkbox" name="scan-nurbs"> SCAN TO NURBS MODELING</label>
                                                <span><a href="#design-intent"><i class="fa fa-info-circle" aria-hidden="true"></i></a></i></span>
                                            </div>
                                            <span class="error technical-checkbox-error">* Select Any checkbox *</span>
                                            <div class="form-group shadow-textarea">
                                                <textarea class="form-control" name="technicaldescription" style="width: 100%" placeholder="Kindly mention your specific requirement (if any)"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="accuracyrequired">Accuracy Required:</label>
                                                <input type="number" name="accuracyrequired" step="5" style="width:50%"> mm
                                            </div>
                                        </div>
                                        <div class="tab-step-form" data-form-type="deliverables">
                                            <h5>Deliverables</h5>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="cad-neutral"> CAD neutral files</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="live-transfer"> Live Transfer Format</label>
                                            </div>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="other"> Others (Please mention)</label>
                                            </div>
                                            <div class="form-group shadow-textarea">
                                                <textarea class="form-control" name="deliverabledescription" style="width: 100%" placeholder="Eg. Deliverables format"></textarea>
                                            </div>
                                        </div>
                                        <div style="overflow:auto;">
                                            <div style="display: flex;align-items: center;justify-content: center;">
                                                <button type="button" id="prevBtn" class="step-form-btn" onclick="nextPrev(-1)">Back</button>
                                                <button type="button" id="nextBtn" class="step-form-btn" onclick="nextPrev(1)">Next</button>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-success" id="submit">Submit <img src="loader2.gif" id="loader" width="25" style="display: none;" /></button> -->


                                    </form>
                                <?php } ?>
                            </div>
                            <div class="col-lg-7 part-2" style="padding-left:20px">
                                <h2>
                                    Online digital engineering service
                                </h2>
                                <div class="aligning">
                                    <div class="col-lg-5 img-1">
                                        <img src="assets/images/DRE Images/scan.png" class="img-fluid" alt=""><br>
                                        <span>SCAN DATA</span>
                                    </div>
                                    <div class="col-lg-6 img-2">
                                        <img src="assets/images/DRE Images/cad.png" class="img-fluid" alt=""><br>
                                        <span>CAD DATA</span>
                                    </div>
                                </div>

                                <h2 class="more">
                                    More than 50 + Digital applications in one online platforms
                                </h2>
                                <p>Get your 3D Scans Converted into CAD files</p>
                                <ul>
                                    <li><i class="fas fa-caret-right"></i> Any Large volume projects can be executd</li>
                                    <li><i class="fas fa-caret-right"></i>
                                        Before you do it inhouse try us once
                                    </li>
                                    <li><i class="fas fa-caret-right"></i>
                                        Save on average 35% off your Scan to CAD project Cost
                                    </li>

                                </ul>
                                <button>service workflow</button>
                                <button>process workflow</button>
                                <button>applications</button>
                            </div>
                        </div>
                        <div class="row" style="margin:40px 0px">
                            <div class="col-lg-12 bg-2">
                                <p>
                                    Precise3D's Digital reverse engneering service help customers convert complicated 3D scan to CAD files that are editable,ready to manufacture,analyze,or be used for any other downstream applications.Utilize our team for highly skilled reverse engnieers
                                    using cutting-edge software.Get cost-effective,per-part pricing instantly.Once you approve,our team will immediately get in touch with you and process your 3D scan to CAD.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section3>
    <!-- hero-section form ends -->
    <!-- why precise 3d start// -->
    <section id="why_precise" class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 second">
                    <h3>
                        Why Precise3D?
                    </h3>
                </div>
                <div class="col-lg-8 reverse">
                    <ul class="why-precise-list">
                        <li>
                            <img src="assets/images/right__arrow_white.png" alt="arrow"> India's largest team to the digital reverse engineering using profesional software for reverse engineering
                        </li>
                        <li>
                            <img src="assets/images/right__arrow_white.png" alt="arrow"> Any 3d scanner output can be developed/converted to CAD designs.
                        </li>
                        <li>
                            <img src="assets/images/right__arrow_white.png" alt="arrow"> Output can be delivered in any CAD software format such as UG ProE Catia on request etc...
                        </li>
                        <li>
                            <img src="assets/images/right__arrow_white.png" alt="arrow"> Even partial 3d scans can be used to develop the 3D model.
                        </li>
                        <li>
                            <img src="assets/images/right__arrow_white.png" alt="arrow"> 3D Scan groups,point clouds,STL files are acceptable
                        </li>
                        <li>
                            <img src="assets/images/right__arrow_white.png" alt="arrow"> Completed 5000+ projects
                        </li>
                        <li>
                            <img src="assets/images/right__arrow_white.png" alt="arrow"> More than a decade of reverse-engineering expertise
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-4 firsting">
                    <div class="row">
                        <div class="col-6 col-lg-6 experience">
                            <h3>10+</h3>
                            <p>Experience</p>
                        </div>
                        <div class="col-6 col-lg-6 experience1">
                            <h3>2000+</h3>
                            <p>Successful Projects</p>
                        </div>
                        <div class="col-6 col-lg-6 experience2">
                            <h3>550+</h3>
                            <p>Satisfied Clients</p>
                        </div>
                        <div class="col-6 col-lg-6 experience3">
                            <h3>80+</h3>
                            <p>Design Engnieers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why precise 3d end// -->
    <!-- our service start// -->
    <section>
        <div class="container flow">
            <div class="row">
                <div class="col-md-12 second">
                    <h3>OUR DRE SERVICE WORKFLOW</h3>
                </div>
                <div class="col-md-4">
                    <div class="dre-service-ico text-center">
                        <i class="fas fa-file-import"></i>
                    </div>
                    <div class="media">
                        <p class="step">STEP<br> <span class="number1">
                                01 </span> </p>
                        <div class="media-body files">
                            <h4>IMPORT FILES</h4>
                            <p>Your 3D Scanned file(.Stl) is imported into dedicated digital reverse engineering software </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dre-service-ico text-center">
                        <i class="far fa-check-square"></i>
                    </div>
                    <div class="media">
                        <p class="step">STEP<br> <span class="number1">

                                02 </span> </p>

                        <div class="media-body files">
                            <h4>CHOOSE RIGHT MODELING TECHNIQUE</h4>
                            <p>Based on your techical requirment the form you filled out during the RFQ,We apply the right digital reverse engnieering technic and covert your 3Dscans to CAD</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" id="design-intent">
                    <div class="dre-service-ico text-center">
                        <i class="fas fa-share-square"></i>
                    </div>
                    <div class="media">
                        <p class="step">STEP<br> <span class="number1">
                                03</span> </p>
                        <div class="media-body files">
                            <h4>EXPORT</h4>
                            <p>CAD files exported and sent to client receive feedback if there is any modification or amedment over the Reverse engnineered CAD. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-12 types-of-modelsh3">
                    <h3>Types of models</h3>
                </div>
            </div>
            <div class="row tabpill-content-bg" >
                <div class="col-md-5 second1">
                    <ul class="nav nav-tabs my-tabsandpills-list">
                        <li class="nav-item" >
                            <a class="nav-link card-link active" data-toggle="tab" href="#home">DESIGN INTENT MODELING <i class="fas fa-angle-right"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">HYBRID MODELING <i class="fas fa-angle-right"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">AS-BUILT MODELING <i class="fas fa-angle-right"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-0" data-toggle="tab" href="#menu3">SCAN TO NURBS MODELING <i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container-fluid active" id="home">
                            <div class="row">
                                <div class="col-12 col-md-5 pill-content-1 px-0">
                                    <img src="assets/images/DRE Images/REVERSE ENGINEERING FOR DESIGN INTENT.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-12 col-md-7 pill-content-2">
                                    <p>
                                        Reverse engineering is a process by which the design of a
                                        product is examined or recreated using an actual part.
                                        Initial design process for a new product, clay models and
                                        different types of prototypes will be made in order to test,
                                        evaluate and validate the conceptual design. This process
                                        requires several changes to the original design. For that
                                        reason, reverse engineering will be a correct solution for
                                        extracting the dimensions of handmade & clay models, etc.
                                        especially those with freeform shapes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu1">
                            <div class="row">
                                <div class="col-12 col-md-5 pill-content-1 px-0">
                                    <img src="assets/images/DRE Images/Hybrid_model.jpeg" alt="" class="img-fluid">
                                </div>
                                <div class="col-12 col-md-7 pill-content-2">
                                    <p>
                                       Hybrid modeling integrate CAD data with digital shape sampling and processing to speed the parametric and reverse engineering of complicated parts. In this workflow Digital shape sampling and processing converts 3D scan data into digital models for design, visualization, analysis, and manufacturing.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu2">
                            <div class="row">
                                <div class="col-12 col-md-5 pill-content-1 px-0">
                                    <img src="assets/images/DRE Images/AS-bUILT.jpeg" alt="" class="img-fluid">
                                </div>
                                <div class="col-12 col-md-7 pill-content-2">
                                    <p>
                                        Content needed As-Built drawings and models (BIM) represent a building or space as it was actually constructed. As-built documentation is created after construction (or a particular phase of construction), either immediately or at any time as required.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu3">
                            <div class="row">
                                <div class="col-12 col-md-5 pill-content-1 px-0">
                                    <img src="assets/images/DRE Images/NURBS MODELLING.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="col-12 col-md-7 pill-content-2">
                                    <p>
                                        <ul  style="list-style-type: circle;">
                                           <li>By using Auto Surfacing feature to fit surface patches onto a mesh and create a surface body. This is important to design complicate part, freeform parts, create model data for manufacturing a freeform shape or analyze a geometric shape.</li>
                                           <li>Auto surfacing can be done in two different methods:</li>
                                           <li>Mechanical: Develop a surface body from a target mesh by a constructing curve network following the features.</li>
                                           <li>Organic: Develop a surface body from a target mesh by projecting an evenly distributed curve network</li>
                                       </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our service end/ -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 types-of-modelsh3">
                    <h3>BUSINESS WORKFLOW</h3>
                </div>
                <div class="col-12">
                    <div class="row digibusi-bg-row">
                        <div class="col-lg-12 reverse">
                            <h3>DIGITAL REVERSE ENGNIEERING PROCESS</h3>
                        </div>
                        <div class="col-sm-6 col-lg-3 third">
                            <div>
                                <div class="card addi">
                                    <div class="digi-reve-cardtopbg">
                                        <img src="assets/images/DRE Images/icon-1.svg" width="50%" alt="">
                                    </div>
                                    <div class="card-body bod">
                                        <div>
                                            <h4 class="card-title">SEND US YOUR FILE</h4>
                                            <p class="card-text">Upload your 3D Scan output .Stl file here after filling out of a form.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 third">
                            <div>
                                <div class="card addi">
                                    <div class="digi-reve-cardtopbg">
                                        <img src="assets/images/DRE Images/icon-2.svg" width="50%" alt="">
                                    </div>
                                    <div class="card-body bod">
                                        <div>
                                            <h4 class="card-title">WE WILL SEND YOU QUOTATION</h4>
                                            <p class="card-text">Email,SMS and Whatsapp</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-lg-3 third">
                            <div>
                                <div class="card addi">
                                    <div class="digi-reve-cardtopbg">
                                        <img src="assets/images/DRE Images/icon-3.svg" width="65%" height="75%" alt="">
                                    </div>
                                    <div class="card-body bod">
                                        <div>
                                            <h4 class="card-title">YOUR FILE WILL BE PROCESSED</h4>
                                            <p class="card-text">Our Design specialists will use dedicated Reverse Engnieering software</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 third">
                            <div>
                                <div class="card addi">
                                    <div class="digi-reve-cardtopbg">
                                        <img src="assets/images/DRE Images/icon-4.svg" width="65%" height="75%" alt="">
                                    </div>
                                    <div class="card-body bod">
                                        <div>
                                            <h4 class="card-title">WE WILL TRANSFER THE FILE TO YOU</h4>
                                            <p class="card-text">You will recieve a secure a link to download your file</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 buttonall">
                            <button>GET A RAPID QUOTE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- applications start/ -->
    <section>
        <div class="container-fluid paddo">
            <div class="row main">
                <div class="col-lg-12 bg-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 appli">
                                <h3>APPLICATIONS</h3>
                            </div>
                            <div class="col-lg-6">
                                <ul class="heavy">
                                    <li>3D scan to Prametric CAD</li>
                                    <li>Scan to Nurbs Modelling</li>
                                    <li>Hybrid modelling</li>
                                    <li>Organic shapes feature based cad reconnstruction</li>
                                    <li>Digital sculpting from digitized shape</li>
                                    <li>Design modification</li>
                                    <li>Neutral cad to editable cad</li>
                                    <li>CAD Modification</li>
                                    <li>Automotive digital transformation</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="heavy">
                                    <li>Digital vechile development</li>
                                    <li>Product development from existing scan</li>
                                    <li>CAD design from concept images</li>
                                    <li>Animation model reconstruction</li>
                                    <li>Digital alingment</li>
                                    <li>Mesh modelling</li>
                                    <li>Extract surface curvature</li>
                                    <li>Blue print to CAD construction</li>
                                    <li>Vechile exhaust pipe modelling</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- applications end/ -->

    <!--FAQ section start/ -->
    <section id="faq-sec">
        <div class="container">
            <div class="row question">
                <div class="col-lg-12">
                    <h3 class="asked">FREQUENTLY ASKED QUESTIONS</h3>
                </div>
                <div class="col-lg-12">
                    <div class="model1">
                        <div id="accordion">
                            <div class="card card-accordian-edit">
                                <div class="card-header dropo1">
                                    <a class="card-link" id="alling" data-toggle="collapse" href="#collapseOne">
                                        <i class="fa fa-plus" id="open" aria-hidden="true"></i>
                                        What is reverse-Engineering?
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Reverse engineering is a process by which the design of a product is examined or recreated using an actual part. Initial design process for a new product, clay models and different types of prototypes will be made in order to test, evaluate and validate
                                        the conceptual design. This process requires several changes to the original design. For that reason, reverse engineering will be a correct solution for extracting the dimensions of handmade & clay models,
                                        etc. especially those with freeform shapes.
                                    </div>
                                </div>
                            </div>

                            <div class="card card-accordian-edit">
                                <div class="card-header dropo1">
                                    <a class="collapsed card-link" id="alling1" data-toggle="collapse" href="#collapseTwo">
                                        <i class="fa fa-plus" id="open1" aria-hidden="true"></i>
                                        What is Digital Reverse-Engineering?
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Hybrid modeling integrate CAD data with digital shape sampling and processing to speed the parametric and reverse engineering of complicated parts. In this workflow Digital shape sampling and processing converts 3D scan data into digital models for design,
                                        visualization, analysis, and manufacturing.
                                    </div>
                                </div>
                            </div>
                            <div class="card card-accordian-edit">
                                <div class="card-header dropo1">
                                    <a class="collapsed card-link" id="alling2" data-toggle="collapse" href="#collapseThree">
                                        <i class="fa fa-plus" id="open2" aria-hidden="true"></i>
                                        How accurate is the final model?
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        Content needed As-Built drawings and models (BIM) represent a building or space as it was actually constructed. As-built documentation is created after construction (or a particular phase of construction), either immediately or at any time as required.
                                    </div>
                                </div>
                            </div>

                            <div class="card card-accordian-edit">
                                <div class="card-header dropo1">
                                    <a class="collapsed card-link" id="alling3" data-toggle="collapse" href="#collapseFour">
                                        <i class="fa fa-plus" id="open3" aria-hidden="true"></i>
                                        What is the output format of the delivered file?
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li>By using Auto Surfacing feature to fit surface patches onto a mesh and create a surface body. This is important to design complicate part, freeform parts, create model data for manufacturing a freeform
                                                shape or analyze a geometric shape.</li>
                                            <li>
                                                Auto surfacing can be done in two different methods:
                                            <li>
                                                Mechanical: Develop a surface body from a target mesh by a constructing curve network following the features.
                                            </li>
                                            <li>
                                                Organic: Develop a surface body from a target mesh by projecting an evenly distributed curve network
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ section end/ -->

    <!-- testimonial start// -->
    <section>
        <div class="container">
            <div class="row pb-5">
                <div class="col-lg-12 second">
                    <div class="testimony-above-line">

                    </div>
                    <h3>TESTIMONIALS</h3>
                </div>
                <div class="col-md-2">
                    <img src="assets/images/cropped-Avatar-Round.png" alt="John Doe" class="img-fluid rounded-circle" style="width:100%;">
                </div>
                <div class="col-md-10">
                    <blockquote class="blockquote amet">
                        <p class="mb-0"><i class="fa fa-quote-left"></i> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore consequatur neque totam. Vel debitis quibusdam odio ipsam quasi excepturi, veniam minus expedita modi labore reprehenderit. Ipsum ducimus optio
                            laboriosam deleniti, libero itaque officiis rem mollitia excepturi nam ad. Hic consequatur iste nihil praesentium soluta maxime dolores officiis, dolorum autem dicta qui, rerum eius consectetur blanditiis a
                            reiciendis deleniti voluptatum obcaecati! Ipsa molestias quos maxime officia mollitia pariatur sapiente fugiat, fugit, natus, vel dolore. Totam maiores asperiores culpa animi laborum quas odit dignissimos voluptatibus
                            harum adipisci id, consectetur voluptates quae nesciunt quo quibusdam vero, fugit ut itaque iure qui exercitationem nulla!
                            <br>
                            <span class="bqname">Name</span><br>
                            <span class="desi">designation</span>
                            <i class="fa fa-quote-right"></i>
                        </p>

                    </blockquote>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end// -->
    <!-- footer start -->
    <?php include('includes/footer.php'); ?>
    <!-- footer end -->

</body>
 <script type="text/javascript">
	$('input[type="text"]').on('blur',function(){
			var val = $(this).val();
			$(this).val($.trim(val));
	});

	function disablebutton()
	{
		$('#loader').show();
		//$('#submit').attr('disabled',true);
	}
</script>
<script>
var fileInput = document.querySelector('input[type=file]');
var filenameContainer = document.querySelector('.custom-file-upload');
fileInput.addEventListener('change', function() {
    filenameContainer.innerText = fileInput.value.split('\\').pop();
});

var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab-step-form");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  // fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab-step-form");
  var currentTabValue = $(".tab-step-form").eq(currentTab).attr("data-form-type");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm(currentTabValue)) return false;
  if (currentTab < x.length-1){
  // Hide the current tab:
  x[currentTab].style.display = "none";
    }
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    $('#loader').show();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm(form) {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;

  console.log(form);

  if(form == 'contact')
  {
    console.log("in");
    var input_fields = ['name','email','companyname','contactnumber'];
    var inputs;
    var emailpattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
    $.each(input_fields,function(index,value){
        inputs = $('input[name="'+value+'"]');

        if($.trim(inputs.val()) == "")
        {
            inputs.addClass(' invalid');
            valid = false;
        }else{
            inputs.removeClass(' invalid');
            console.log(value+" invalid removed");
        }

        if(value == 'email')
        {
            if(!emailpattern.test(inputs.val()))
            {
                inputs.addClass(' invalid');
                valid = false;
            }
        }
    });
    
  }else if(form == 'technical')
  {
    console.log("in-technical");
    var checkbox = $(".technical-checkbox");
    if (checkbox.filter(':checked').length == 0) {
        console.log("no-selected");
                $(".technical-checkbox-error").show();
                    valid = false;
        }else{
            console.log("selected any");
             $(".technical-checkbox-error").hide();
        }

  }else if(form == 'deliverables')
  {
        /*no validation*/
  }else if(form == '' || form == undefined)
  {
    console.log("out");
      x = document.getElementsByClassName("tab-step-form");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
  }
  
  return valid; // return the valid status
}

</script>

</html>