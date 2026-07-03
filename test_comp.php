<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name text-white="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3d scanning service in chennai | 3d scanning in chennai</title>
    <meta name="description" content="3D Scanning Services Providers in chennai,tamilnadu.Get quote & price for all types of  3D Scanning Services in chennai ,3D scanning service nearby chennai">
    <meta name="keywords" content="3D scanning service provider in chennai, 3D scanning service, Best 3D scanning service in chennai, 3D Scanning service in Ambattur, 3D Scanning in Sriperumbudur, 3D scanning provider in chennai">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="revisit-after" content="7 days" />
    <meta name="twitter:image" content="https://www.precise3dm.com/assets/images/about-logo.png" />
    <meta name="twitter:card" content="Precise3dm" />
    <meta name="twitter:site" content="@precise3d_m" />
    <meta name="twitter:title" content="Precise3dm" />
    <meta name="twitter:description" content="3D Scanning Services Providers in chennai,tamilnadu.Get quote & price for all types of  3D Scanning Services in chennai ,3D scanning service nearby chennai" />
    <meta property="og:type" content="3D Scanning" />
    <meta property="og:title" content="3d scanning service in chennai | 3d scanning in chennai " />
    <meta property="og:url" content="https://www.precise3dm.com/" />
    <meta property="og:image" content="https://www.precise3dm.com/assets/images/about-logo.png" />
    <meta property="og:description" content="3D Scanning Services Providers in chennai,tamilnadu.Get quote & price for all types of  3D Scanning Services in chennai ,3D scanning service nearby chennai" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
        
    <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/chennai-service.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <script src="assets/js/jquery-3.6.0.min.js"></script>
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

<body>
    
     <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FX95R9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header end -->


    <!-- component pick-up content starts-->
    <section id="pickup_section">
        <img src="assets/images/chennai_service_img/chennai-pg-shape1-01.png" alt="3d-scanning-services-shape" class="img-fluid pickup-side-shape">
        <div class="container">
            <div class="row">
                <div class="col-md-8 component-pickup-col">
                    <div class="component-pickup-contleft">
                        <h4>Free component pick-up service for 3D Scanning in Chennai</h4>
                        <p>While We are all fighting with pandemic and we want you to keep safe, So Precisd3DM facilitate
                    your 3D Scanning project, by offering free pickup service of components that you want to 3D Scan
                    for Reverse Engineering and 3D inspection in Chennai.</p>
                                        </div>
                    <div class="text-center truck-logo">
                        <img src="assets/images/chennai_service_img/Icons/free-delivery.png" alt="3d-scanning-services-free-delivery" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <?php
                    if (isset($_SESSION['status'])) {
                        if ($_SESSION['status'] == "success") {
                            echo "<div class='row status-div'>
                                    <p class='status-message'>Thanks for submitting the details.</p>
                                    <div style='width: 100%'><a href='https://www.precise3dm.com/3d-scanning-service-in-chennai.php'><button class='step-form-btn'>Back</button></a></div></div>";
                        } else {
                            echo "<div class='row status-div'>
                                    <p class='status-message'>Oops...Something went wrong, please try again
                                </p><div style='width: 100%'><a href='javascript:void(0);'><button class='step-form-btn'>Back</button></a></div></div>";
                        }
                        unset($_SESSION['status']);
                    }else { ?>
                    <form action="che_test_comp.php" id="component_form" method="POST" enctype="multipart/form-data">
                        <div class="form-group free-component">
                            <h3>Contact information</h3>
                            <input type="text" name="che_name" id="che_name1" class="form-control" placeholder="Name*">
                            <input type="email" name="che_email" id="che_email1" class="form-control" placeholder="Email*">
                            <input type="text" name="che_companyname" id="che_companyname1" placeholder="Company name" class="form-control">
                            <input type="text" name="che_contnum" id="che_contnum1" class="form-control" placeholder="Contact number*" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10">
                            <input type="text" name="che_pickup" id="che_pickup1" placeholder="Pickup Address*" class="form-control">
                            <span>Component size and Numbers*</span>
                            <input type="text" name="che_component" id="che_component1" placeholder="Type here Eg : 1 mm to 100 mm" class="form-control">
                            <span>Accuracy*</span>
                            <input type="text" name="che_accuracy" id="che_accuracy1" placeholder="Type here Eg : 10 to 50 microns" class="form-control">
                            <div class="text-center mt-4">
                                <button class="btn che-nextf" type="button" disabled>NEXT</button>
                            </div>
                        </div>
                        <div class="form-group free-component check-input">
                            <div class="form-group upload-btn text-center">
                                <label for="uploadscan" class="custom-file-upload">
                                    Upload Image
                                    <i class="fas fa-arrow-up"></i><br>
                                    <p>OPTIONAL</p>
                                </label>
                                <input type="file" class="form-control" id="uploadscan" name="uploadscan" accept=".stl" required />
                            </div>
                            <h3>Scanning Technique</h3>
                            <div class="checkbox">
                                <label><input type="checkbox" name="gomscan">GOM 3D SCANNER (WHITE LIGHT / BLUE LIGHT)</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="freescan">FREESCAN</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="einscan">EINSCAN</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="longrange3d">LONG RANGE 3D SCANNING</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="faroarm3d">FARO ARM 3D SCANNER</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" id="select_label">End Application*</label>
                                <select name="comp_select" class="form-control" id="exampleFormControlSelect1" placeholder="Select Deliverable format">
                                <option>Select Deliverable format</option>
                                  <option value="I WANT 3D SCAN AND GET .STL OUTPUT">I WANT 3D SCAN AND GET .STL OUTPUT</option>
                                  <option value="I WANT TO CREATE A 3D CAD MODEL OUT OF IT (.IGES, .STEP )">I WANT TO CREATE A 3D CAD MODEL OUT OF IT (.IGES, .STEP )</option>
                                  <option value="I WANT TO PERFORM 3D INSPECTION">I WANT TO PERFORM 3D INSPECTION</option>
                                </select>
                              </div>
                            <div class="text-centermt-3">
                                <button class="btn che-backf" type="button">BACK</button>
                                <button type="submit" class="btn float-right">GET QUOTE</button>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- component pick-up content ends-->
     
    <!-- component pick-up service content starts-->
    <section id="pickup-service-wf">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="comp-pickup-head">FREE COMPONENT PICK-UP SERVICE WORKFLOW</h3>
                </div>
                <div class="col-md-3 text-center pickup-service-workflow">
                    <img src="assets/images/chennai_service_img/Service_workflow_icons/delivery-truck.png" alt="3d-scanning-services-delivery-icons" class="img-fluid">
                    <p>We Pick up the components by our local truck</p>
                </div>
                <div class="col-md-3 text-center pickup-service-workflow">
                    <img src="assets/images/chennai_service_img/Service_workflow_icons/3d-printing-handheld-scanner.png" alt="3d-scanning-services-handheld" class="img-fluid">
                    <p>We 3D Scan your Part with right 3D Scanner</p>
                </div>
                <div class="col-md-3 text-center pickup-service-workflow">
                    <img src="assets/images/chennai_service_img/Service_workflow_icons/3d-modeling.png" alt="3d-scanning-services-3d-modeling" class="img-fluid">
                    <p>Design team convert your 3D Scan to CAD files and send to you.</p>
                </div>
                <div class="col-md-3 text-center pickup-service-workflow">
                    <img src="assets/images/chennai_service_img/Service_workflow_icons/mail.png" alt="3d-scanning-services-mail" class="img-fluid">
                    <p class="px-5">If inspection we will email pdf report</p>
                </div>
            </div>
        </div>
    </section>
    <!-- component pick-up service content ends-->
    <!-- onsite 3D scanning content starts-->
    <section id="onsite_chennai_section">
        <div class="container">
            <div class="row pr-5">
                <div class="col-md-8">
                    <div class="onsite-chennai-cont">
                        <h6>Onsite 3D Scanning</h6>
                        <p>
                            Component is big and you are unable to move your part out of your factory? We are located in
                            Chennai, we shall choose the right 3D Scanner based on the component size and application. We
                            bring our 3D Scanner equipment to your place for 3D Scanning. Our team will make inspection
                            report on the spot. We have a bigger team in Chennai to convert any 3D Scan to CAD to support with
                            large reverse engineering projects.

                        </p>
                        <div class="row py-4">
                            <div class="col-6">
                                <img src="assets/images/chennai_service_img/Rectangle 1107.png" alt="3d-scanning-services-onsite-one" class="img-fluid">
                            </div>
                            <div class="col-6">
                                <img src="assets/images/chennai_service_img/Rectangle 1108.png" alt="3d-scanning-services-onsite-two" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                     <?php
                    if (isset($_SESSION['status'])) {
                        if ($_SESSION['status'] == "success") {
                            echo "<div class='col-md-3 web-form-col'>
                                <div style='width: 100%'>Thanks for submitting the details! We will get back to you soon!</div>
                            </div>";
                        } else {
                            echo "<div class='row status-div'>
                                    <p class='status-message'>Oops...Something went wrong, please try again
                                </p><div style='width: 100%'><a href='javascript:void(0);'><button class='step-form-btn'>Back</button></a></div></div>";
                        }
                        unset($_SESSION['status']);
                    } else { ?>
                    <form id="onsite_form" method="POST" action="chennai_onsite.php" enctype="multipart/form-data">
                        <div class="form-group free-component">
                            <h3>Contact information</h3>
                            <input type="text" name="che_name" id="che_name2" class="form-control" placeholder="Name*">
                            <input type="email" name="che_email" id="che_email2" class="form-control" placeholder="Email*">
                            <input type="text" name="che_companyname" id="che_companyname2" placeholder="Company name" class="form-control">
                            <input type="text" name="che_contnum" id="che_contnum2" class="form-control" placeholder="Contact number*" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10">
                            <input type="text" name="che_pickup" id="che_pickup1" placeholder="Pickup Address*" class="form-control">
                            <span>Component size and Numbers*</span>
                            <input type="text" name="che_component" id="che_component2" placeholder="Type here Eg : 1 mm to 100 mm" class="form-control">
                            <span>Accuracy*</span>
                            <input type="text" name="che_accuracy" id="che_accuracy2" placeholder="Type here Eg : 10 to 50 microns" class="form-control">
                            <div class="text-center mt-4">
                                <button class="btn che-nextf" type="button">NEXT</button>
                            </div>
                        </div>
                        <div class="form-group free-component check-input">
                            <h3>Scanning Technique</h3>
                            <div class="checkbox">
                                <label><input type="checkbox" name="gomscan">GOM 3D SCANNER(WHITE LIGHT/BLUE LIGHT)</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="freescan">FREESCAN</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="einscan">EINSCAN</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="longrange3d">LONG RANGE 3D SCANNING</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="faroarm3d">FARO ARM 3D SCANNER</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="notsure">I AM NOT SURE</label>
                            </div>
                            <span>Component size and Numbers*</span>
                            <input type="date" name="onsite_date" id="onsite_date" placeholder="On-site Date Book us now" class="form-control">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" id="select_label">End Application*</label>
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="Select Deliverable format">
                                    <option>Select Deliverable format</option>
                                  <option>I WANT 3D SCAN AND GET .STL OUTPUT</option>
                                  <option>I WANT TO CREATE A 3D CAD MODEL OUT OF IT (.IGES, .STEP )</option>
                                  <option>I WANT TO PERFORM 3D INSPECTION</option>
                                </select>
                             </div>
                             <div class="form-group upload-btn text-center">
                                <label for="uploadscan" class="custom-file-upload">
                                    Upload Image
                                    <i class="fas fa-arrow-up"></i><br>
                                    <p>OPTIONAL</p>
                                </label>
                                <input type="file" class="form-control" id="uploadscan" name="uploadscan" accept=".stl" required />
                            </div>
                            <div class="text-centermt-3">
                                <button class="btn che-backf" type="button">BACK</button>
                                <button class="btn che-nextgq float-right" type="submit">GET QUOTE</button>
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!--onsite 3d content ends-->
    <script>
    $(document).ready(function(){
        $(".che-checkbox").hide();
        $(document).on("click", ".chennai-contact-form .che-next", function(){
            $(".che-checkbox").hide();
            $(".chennai-contact-form").hide();
            $(".chennai-contact-form2").show();
        });
        $(document).on("click", ".chennai-contact-form2 .che-back2", function(){
            $(".che-checkbox").hide();
            $(".chennai-contact-form").show();
        });
        $(document).on("click", ".chennai-contact-form2 .che-next2", function(){
            $(".che-checkbox, .chennai-contact-form").hide();
            $(".chennai-contact-form3").show();
        });
        $(document).on("click", ".chennai-contact-form3 .che-back3", function(){
            $(".che-checkbox, .chennai-contact-form").hide();
            $(".chennai-contact-form2").show();
        });
        $(document).on("click", ".chennai-contact-form3 .che-next3", function(){
            $(".che-checkbox, .chennai-contact-form").hide();
            $(".chennai-contact-form4").show();
        });
        
    });
        $(document).ready(function(){
        function emptyInputsche(){
            if($("#che_name").val() == "" || $("#che_email").val() == "" || $("#che_contnum").val() == ""){
                $(".chennai-contact-form .che-next").attr('disabled', true);
            }
        }
        $(document).on("keyup blur", ".chennai-contact-form input", function(){
           if($(this).valid() == true){
               $(".chennai-contact-form .che-next").removeAttr('disabled');
               emptyInputsche();
               $(this).css("border-bottom-color", " #ced4da");
            }
            else{
               $(".chennai-contact-form .che-next").attr('disabled', true);
               $(this).css("border-bottom-color", "red");
            }
        });
        $(document).on("click", ".che-checkbox input", function(){
            if ($(this).is(":checked")){
                $(this).parents(".che-checkbox").find("button.shift").removeAttr('disabled');
            }
            else{
                $(this).parents(".che-checkbox").find(".shift").attr('disabled', true);
            }
        });
        
        // free component script **********************************
        $(".check-input").hide();
        function emptyInputsche2(){
            if($("#che_name1").val() == "" || $("#che_email1").val() == "" || $("#che_contnum1").val() == "" || $("#che_pickup1").val() == "" ||
            $("#che_component1").val() == "" || $("#che_accuracy1").val() == ""){
                $(".free-component .che-nextf").attr('disabled', true);
            }
        }
        $(document).on("keyup blur", "#component_form .free-component input", function(){
           if($(this).valid() == true){
               $('#component_form .che-nextf').removeAttr('disabled');
               emptyInputsche2();
               $(this).css("border-bottom-color", " #ced4da");
            }
            else{
               $("#component_form .che-nextf").attr('disabled', true);
               $(this).css("border-bottom-color", "red");
            }
        });
        $(document).on("click", ".che-nextf", function(){
            $(".free-component").hide();
            $(".check-input").show();
        });
        // on-site script **********************************
        $(".check-input").hide();
        function emptyInputsche3(){
            if($("#che_name2").val() == "" || $("#che_email2").val() == "" || $("#che_contnum2").val() == "" || $("#che_pickup2").val() == "" ||
            $("#che_component2").val() == "" || $("#che_accuracy2").val() == ""){
                $(".free-component .che-nextf").attr('disabled', true);
            }
        }
        $(document).on("keyup blur", "#onsite_form .free-component input", function(){
           if($(this).valid() == true){
               $('#onsite_form .che-nextf').removeAttr('disabled');
               emptyInputsche3();
               $(this).css("border-bottom-color", " #ced4da");
            }
            else{
               $("#onsite_form .che-nextf").attr('disabled', true);
               $(this).css("border-bottom-color", "red");
            }
        });
        // validations for forms
        $.validator.addMethod("email_check", function(value, element) {
            var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (regex.test(value)) {
                return true
            } else {
                return false
            }
        });
        $("#che_form").validate({
            rules: {
                che_name: {
                    required: true,
                },
                che_email: {
                    required: true,
                    email_check: true,
                },
                che_contnum:{
                    required:true,
                    minlength: 10,
                },
            },
        });
        $("#component_form").validate({
            rules: {
                che_name: {
                    required: true,
                },
                che_email: {
                    required: true,
                    email_check: true,
                },
                che_contnum:{
                    required:true,
                    minlength: 10,
                },
                che_pickup: {
                    required: true,
                },
                che_component: {
                    required: true,
                },
                che_accuracy: {
                    required: true,
                },
            },
        });
        $("#onsite_form").validate({
            rules: {
                che_name: {
                    required: true,
                },
                che_email: {
                    required: true,
                    email_check: true,
                },
                che_contnum:{
                    required:true,
                    minlength: 10,
                },
                che_pickup: {
                    required: true,
                },
                che_component: {
                    required: true,
                },
                che_accuracy: {
                    required: true,
                },
            },
        });
    });
    </script>
    <!-- onsite 3D scanning worflow starts-->
    <section id="pickup-service-wf">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="comp-pickup-head">ONSITE 3D SCANNING SERVICE WORKFLOW</h3>
                </div>
                <div class="col-md-3 text-center pickup-service-workflow">
                    <img src="assets/images/chennai_service_img/Service_workflow_icons/Page-1.png" alt="3d-scanning-services-equipment" class="img-fluid">
                    <p>We bring the equipment to your place</p>
                </div>
                <div class="col-md-3 text-center pickup-service-workflow">
                    <img src="assets/images/chennai_service_img/Service_workflow_icons/3d-scanner(1).png" alt="3d-scanning-services-scanner-one" class="img-fluid">
                    <p>We 3D Scan your object</p>
                </div>
                <div class="col-md-3 text-center pickup-service-workflow">
                    <img src="assets/images/chennai_service_img/Service_workflow_icons/3d-scanner(2).png" alt="3d-scanning-services-scanner-two" class="img-fluid">
                    <p>We perform your end application such as Scan to CAD or 3D Inspection</p>
                </div>
                <div class="col-md-3 text-center pickup-service-workflow">
                    <img src="assets/images/chennai_service_img/Service_workflow_icons/mail.png" alt="3d-scanning-services-mail" class="img-fluid">
                    <p class="">We email the final deliverables to you or submit it on the spot.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- location section -->
    <section id="che_location">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-5 location-leftcont">
                    <h2>LOCATION</h2>
                    <h5>VISIT US NOW</h5>
                    <p>We are your nearby 3D Scanning service provider
                        located in Chennai, Kovilambakkam which is center
                        and easily accessible for industrial locations
                    </p>
                    <p>You can also courier the part to us for 3D Scanning on below address</p>
                    <p><strong>Precise3D Metrology & Design solution Pvt Ltd.
                            11/545, 2nd Floor, Rajas Tower, Medavakkam Main Rd,
                            Kovilambakkam, Chennai, Tamil Nadu 600129</strong></p>
                </div>
                <div class="col-md-7">
                    <div class="precise-chennai-map">
                        <a href="https://goo.gl/maps/UWb9ZCSAkWsVuaxAA" target="_blank">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.542626217597!2d80.17991991435339!3d12.937091519136008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525e9ea2925a9f%3A0x40634932298feafa!2sPrecise%203D%20Metrology%20%26%20Design%20Solutions%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1622315917181!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" target="_blank"></iframe>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- onsite 3D scanning content ends-->
    <!-- other 3d services in chennai start-->
    <div class="mw-100 text-center my-4 other-service-chennai">
        <h1 class="other-3d-chennaihead">OUR OTHER 3D SERVICES IN CHENNAI</h1>
    </div>
    <section id="chennai_reverseengg">
        <div class="end-end-overlay"></div>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-9">
                    <h2 class="end-chennai-conthead">REVERSE ENGINEERING SERVICE IN CHENNAI</h2>
                </div>
                <div class="col-md-3">
                    <div class="end-content-phone">
                        <p>Give a call to book us now</p>
                        <h2><i class="fas fa-phone-alt"></i>+91 99403 52575</h2>
                    </div>
                </div>
            </div>
            <div class="row end-service-checontents">
                <div class="col-md-9">
                    <ul class="end-endchennai-ul">
                        <li>India’s biggest team for Reverse Engineering any object or environment</li>
                        <li>Reverse Engineer bike, car or any Sheetmetal object in Chennai, we deliver manufacture ready models</li>
                        <li>Using dedicated Reverse engineering software, we convert any 3D Scan to editable CAD model in short lead time</li>
                        <li>Live transfer to any CAD systems from our Reverse Engineering service output.</li>
                        <li>Reverse engineer worn and broken parts, and absolute parts to cad files.</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="other-service-links">
                        <a href="#">Upload 3D Scan <i class="fas fa-arrow-up"></i></a>
                        <a href="#">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="chennai_inspection_service">
        <div class="end-end-overlay-yellow"></div>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-9">
                    <h2 class="end-chennai-conthead">3D INSPECTION SERVICE IN CHENNAI</h2>
                </div>
                <div class="col-md-3">
                    <div class="end-content-phone">
                        <p>Give a call to book us now</p>
                        <h2><i class="fas fa-phone-alt"></i>+91 99403 52575</h2>
                    </div>
                </div>
            </div>
            <div class="row end-service-checontents">
                <div class="col-md-9">
                    <ul class="end-endchennai-ul">
                        <li> India’s biggest team for 3D Inspection and digital measurement service from Chennai</li>
                        <li>Perform quality control and advanced Digital Inspection in Chennai</li>
                        <li>Using dictated 3D Inspection software, we compare any 3D Scan to CAD model</li>
                        <li>3D Inspection of sheets metals and automotive parts digital inspection service</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="other-service-links">
                        <a href="#">Upload 3D Scan <i class="fas fa-arrow-up"></i></a>
                        <a href="#">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="chennai_portable_cmm">
        <div class="end-end-overlay"></div>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-9">
                    <h2 class="end-chennai-conthead">PORTABLE CMM INSPECTION SERVICE IN CHENNAI</h2>
                </div>
                <div class="col-md-3">
                    <div class="end-content-phone">
                        <p>Give a call to book us now</p>
                        <h2><i class="fas fa-phone-alt"></i>+91 99403 52575</h2>
                    </div>
                </div>
            </div>
            <div class="row end-service-checontents">
                <div class="col-md-9">
                    <ul class="end-endchennai-ul">
                        <li>Onsite /In house Faro Arm portable 3D CMM service in Chennai</li>
                        <li>Faro Arm per day basis rental in Chennai for 3D measurements.</li>
                        <li>Any large and small parts on spot CMM checking service in Chennai</li>
                        <li>Large welding fixtures and BIW body inspection service in Chennai</li>
                        <li>Heavy vehicle body and chassis 3D inspection using Faro Arm in Chennai</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="other-service-links">
                        <a href="#">Book onsite 3D CMM service</a>
                        <a href="#">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="chennai_automotive_benchmark">
        <div class="end-end-overlay-yellow"></div>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-9">
                    <h2 class="end-chennai-conthead">AUTOMOTIVE BENCHMARKING SERVICE IN CHENNAI</h2>
                </div>
                <div class="col-md-3">
                    <div class="end-content-phone">
                        <p>Give a call to book us now</p>
                        <h2><i class="fas fa-phone-alt"></i>+91 99403 52575</h2>
                    </div>
                </div>
            </div>
            <div class="row end-service-checontents">
                <div class="col-md-9">
                    <ul class="end-endchennai-ul">
                        <li>Automotive Teardown benchmarking service in Chennai</li>
                        <li>Vehicle Digital benchmarking service in Chennai</li>
                        <li>Electric and electronics benchmarking service in Chennai</li>
                        <li>Entire vehicle digital measurement service in Chennai</li>
                        <li>Electric vehicle benchmarking service in Chennai</li>
                        <li>Entire vehicle 3D Scanning and Reverse Engineering service in Chennai</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="other-service-links">
                        <a href="#">Know more</a>
                        <a href="#">Get Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- other 3d services in chennai end-->
    <!-- precise area chennai? -->
    <section id="end_end_chennaisec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center precisareahead">
                    <h4>3D SCANNING /MEASUREMENT AND REVERSE ENGINEERING SERVICE LOCATIONS IN CHENNAI</h4>
                </div>
                <div class="col-md-4 precise-area-chennai">
                    <ul>
                        <li>3D Scanning in Ambattur</li>
                        <li>3D Scanning in Padi</li>
                        <li>3D Scanning in Avadi</li>
                        <li>3D Scanning in Gummudipoondi</li>
                        <li>3D Scanning in Oragadam</li>
                        <li>3D Scanning in Mahindra City</li>
                        <li>3D Scanning in Chengalpattu</li>
                        <li>3D Scanning in Kanchipuram</li>
                        <li>3D Scanning in Adyar</li>
                        <li>3D Scanning in Guindy</li>
                         <li>3D Scanning in OMR</li>
                        
                    </ul>
                </div>
                <div class="col-md-4 precise-area-chennai">
                    <ul>
                        <li>3D Scanning in Madipakkam</li>
                        <li>3D Scanning in Pallikaranai</li>
                        <li>3D Scanning in Ennore</li>
                        <li>3D Scanning in Manali</li>
                        <li>3D Scanning in Minjur</li>
                        <li>3D Scanning in Tiruvottiyur</li>
                        <li>3D Scanning in Vandalur</li>
                        <li>3D Scanning in Sriperumbudur</li>
                        <li>3D Scanning in Tambaram</li>
                        <li>3D Scanning in Velachery</li>
                       
                       
                    </ul>
                </div>
                <div class="col-md-4 precise-area-chennai">
                    <ul>
                        <li>3D Scanning in Maraimalai nagar</li>
                        <li>3D Scanning in Ekkattuthangal</li>
                        <li>3D Scanning in Thirumudivakkam</li>
                        <!--<li>3D Scanning in Sriperumbature</li>
                        <li>3D Scanning in kumidipundi</li>-->
                        <li>3D Scanning in Chetpet</li>
                        <li>3D Scanning in Anna Nagar</li>
                        <!--<li>3d Scanning in Saidapet</li>
                        <li>3D Scanning in Perambur</li>-->
                        <li>3D Scanning in Medavakkam</li>
                        <li>3D Scanning in Madhavaram</li>
                        <li>3D Scanning in Perambur</li>
                         <li>3D Scanning in Saidapet</li>
                        <li>3D Scanning in ECR</li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="mw-100 text-center my-4 other-service-chennai">
        <h1 class="other-3d-chennaihead">WHY PRECISE3DM</h1>
    </div>
    <section id='why_precise_chennai'>
        <div class="container">
            <div class="row whyprecise-row">
                <div class="col-md-4 text-center whyprecise-cont">
                    <img src="assets/images/chennai_service_img/Icons/Cost-effective_service.png" alt="3d-scanning-services-Cost-effective-service" class="img-fluid">
                    <h6>Cost-effective service</h6>
                    <p>We provide our clients with innovative and
                        cost-effective 3D Scanning solutions by
                        maintaining professional standards.</p>
                </div>
                <div class="col-md-4 text-center whyprecise-cont">
                    <img src="assets/images/chennai_service_img/Icons/Rapid_quote_in_10_mins.png" alt="3d-scanning-services-Rapid-quote" class="img-fluid">
                    <h6>Rapid quote in 10 mins</h6>
                    <p>Provide your proposal by filling the form and get
                        a rapid quote within 10 mins
                    </p>
                </div>
                <div class="col-md-4 text-center whyprecise-cont">
                    <img src="assets/images/chennai_service_img/Icons/Anysize_can_be_Scanned.png" alt="3d-scanning-services-Certified-Application" class="img-fluid">
                    <h6>Certified Application engineers</h6>
                    <p>Chennai's largest and trusted team of engineers
                        is dedicated to 3D Scanning services by using
                        professional software.
                    </p>
                </div>
                <div class="col-md-4 text-center whyprecise-cont">
                    <img src="assets/images/chennai_service_img/Icons/Affordable_pricing.png" alt="3d-scanning-services-Affordable-pricing" class="img-fluid">
                    <h6>Transparent pricing</h6>
                    <p>Get a complete rate card before availing the
                        service, no more surprises on pricing. No hidden
                        charges, you would know your options.
                    </p>
                </div>
                <div class="col-md-4 text-center whyprecise-cont">
                    <img src="assets/images/chennai_service_img/Icons/Pay_after_service.png" alt="3d-scanning-services-Pay-after-service" class="img-fluid">
                    <h6>Pay after service</h6>
                    <p>We go the extra mile for our customer's
                        convenience with multiple payment modeschoose to pay before or after availing the
                        services, either online or offline.

                    </p>
                </div>
                <div class="col-md-4 text-center whyprecise-cont">
                    <img src="assets/images/chennai_service_img/Icons/Excellent_customer_support.png" alt="3d-scanning-services-Excellent-customer-support" class="img-fluid">
                    <h6>Excellent customer support </h6>
                    <p>You can rely on us for any service assistance. We
                        would be glad to answer your queries via call or
                        e-mail reach us. We would love to hear from you.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container mb-4">
        <div class="row">
            <div class="col-12 col-md-12 pb-3">
                <h4 class="chennai-author-head">AUTHORIZED PARTNER OF</h4>
                <div class="row client-top-logo justify-content-center">
                    <div class="col-md-2 chennai-authpadd">
                        <div class="authorized-partner-chennai">
                            <img src="assets/images/chennai_service_img/3ds.png" alt="3d-scanning-services-3d-logo" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-3 chennai-authpadd">
                        <div class="auth-center-img">
                            <img src="assets/images/chennai_service_img/evx.png" alt="3d-scanning-services-evixscan" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-2 chennai-authpadd">
                        <div class="authorized-partner-chennai">
                            <img src="assets/images/chennai_service_img/S3d.png" alt="3d-scanning-services-shining3d" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="chennai_visit-our">
        <div class="end-end-overlay"></div>
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-12">
                    <h2 class="end-chennai-conthead">VISIT OUR</h2>
                    <ul class="visit-our-ul">
                        <li>3D Scanning services in Coimbatore</li>
                        <li>3D Scanning services in Mumbai</li>
                        <li>3D Scanning services in Pune</li>
                        <li>3D Scanning services in Chandigarh</li>
                    </ul>
                </div>
            </div>
    </section>
    <!-- precise area chennai? end-->
    <!-- frequently asked question start -->
    <section id="faq_chennaipg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 faq-chennai-head">
                    <h2>FREQUENTLY ASKED QUESTIONS</h2>
                    <div>
                        <div id="accordion" class="chennai_page_collapse">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fas fa-plus"></i> What kind of Scanner are you using and how about its accuracy?
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>PRECISE3DM has a wide range of Scanners. Based on customer’s part and
                                        application requirement we choose the Scanners. We normally prefer GOM ATOS
                                        compact Scanner because of its accuracy level is up to 6-7 microns.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="fas fa-plus"></i> Do you support onsite Scanning services?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>
                                            Indeed we can. We support onsite Scanning services accordant with customer’s
                                            contingency like heavy components, fixed components, highly confidential projects,
                                            NPD and R&D projects.
                                      </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fas fa-plus"></i> What kind of softwares are used for design and what are its output?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li>We use different softwares</li>
                                            <li>Normally, we use Geomagic Design X for initial 3D model generation.</li>
                                            <li>Solidworks and Creo will be used if the customer asks for an editable model.</li>
                                            <li>Our outputs are delivered in CAD formats like: STEP, .IGES- Dumpsolid,
                                                Solidworks-.prt file and Creo- editable.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fas fa-plus"></i>What is the size limit for measuring?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We use various types of technologies and equipments hence we able to measure from mm to meters. Actually, there is no limitation in size measurement.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <i class="fas fa-plus"></i>How does the inspection activities are carried out?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We perform our inspection through Geomagic Control X software. We use both
                                            contact and non-contact method for inspection based on the customer’s application.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                            <i class="fas fa-plus"></i>Who are all your esteemed clients, and what is your field of experience?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li>We nearly have 10 years of experience. Our design team involves in complex
                                                projects and embodies 30+ members. Our design engineers are highly skilled
                                                with Mechanical and Automobile background.</li>
                                            <li>Our esteemed clients are: MRV, Royal Enfield, Stanadyne, Motherson, L&T,
                                                Rane, Nissan, Hanon systems, Ford India, ZF, Swaraj Tractors, Boson Motors,
                                                Butterfly, Foxconn, Lucas TVS and Satyam Ventures.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                            <i class="fas fa-plus"></i>What are all the services you offer?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>We offer services like</p>
                                        <ul>
                                            <li>3D Scanning</li>
                                            <li>3D/2D Inspection</li>
                                            <li>3D modeling (editable & non-editable)</li>
                                            <li>Vehicle Benchmarking</li>
                                            <li>Portable CMM service</li>
                                            <li>Architectural scanning and BIM modelling</li>
                                            <li>3D printing service</li>
                                            <li>FEA</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            <i class="fas fa-plus"></i>How does your Scanning service gets different from CMM?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li>CMM is a contact method. We measure coordinates through single-point data. It is a time-consuming process</li>
                                            <li>A Scanner is a non-contact method with advanced technology and generates a full 3D profile for design. It pitches millions of points in seconds. So it is less arduous.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            <i class="fas fa-plus"></i>Describe your project lead time framing?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Usually, we follow First Come First Serve (FCFS) policy. Lead time framing is based on the below aspects:</p>
                                        <ul>
                                            <li>Part receiving time, Technical clarifications, and commercial finalization</li>
                                            <li>Emergency cases are considered as special one and exempted from all the
                                                above</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTen">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            <i class="fas fa-plus"></i>How do you make your commercials for our projects?
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                                    <div class="card-body">
                                        <ul>
                                            <li>We require the physical photo (3D covered) of your part along with
                                                dimension details.</li>
                                            <li>Our website contains a unique form where you will upload your part
                                                details along with the scope of work. After this, you will get an instant
                                                quote from us.</li>
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
    <!-- frequently asked question end -->
    <!-- testimonials section starts-->
    <section class="testimonial_chennai">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="chennai-testimonial-head">Testimontials</h2>
                </div>
            </div>
            <!-- <div class="row justify-content-center">
                <div class="col-12 col-md-10 mycarousel-chennai">
                    <div class="large-12 columns">
                        <div class="owl-carousel-one owl-theme chennai-carousel-box">
                            <div class="item chennai-car-item">
                                <div class="chennai-car-img">
                                    <h6>Shan</h6>
                                    <p>
                                        “Your follow-up support. You have
                                        remained in contact with us and worked
                                        hard to give us a deliverable in the desired
                                        format and having the characteristics that
                                        our project requires”.
                                    </p>
                                    <div>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item chennai-car-item">
                                <div class="chennai-car-img">
                                    <h6>Shan</h6>
                                    <p>
                                        “Your follow-up support. You have
                                        remained in contact with us and worked
                                        hard to give us a deliverable in the desired
                                        format and having the characteristics that
                                        our project requires”.
                                    </p>
                                    <div>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item chennai-car-item">
                                <div class="chennai-car-img">
                                    <h6>Shan</h6>
                                    <p>
                                        “Your follow-up support. You have
                                        remained in contact with us and worked
                                        hard to give us a deliverable in the desired
                                        format and having the characteristics that
                                        our project requires”.
                                    </p>
                                    <div>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="item chennai-car-item">
                                <div class="chennai-car-img">
                                    <h6>Shan</h6>
                                    <p>
                                        “Your follow-up support. You have
                                        remained in contact with us and worked
                                        hard to give us a deliverable in the desired
                                        format and having the characteristics that
                                        our project requires”.
                                    </p>
                                    <div>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                var owl = $('.owl-carousel-one');
                                owl.owlCarousel({
                                    loop: true,
                                    nav: true,
                                    autoplay: true,
                                    autoplayTimeout: 2000,
                                    margin: 10,
                                    responsiveClass: true,
                                    responsive: {
                                        0: {
                                            items: 2
                                        },
                                        600: {
                                            items: 3
                                        },
                                        960: {
                                            items: 4
                                        },
                                        1200: {
                                            items: 5
                                        }
                                    }
                                });
                            })
                        </script>
                    </div>
                </div>
            </div> -->

        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="large-12 columns chennai-carosel-col">
                    <div class="owl-carousel owl-theme chennai-carousel-box">
                        <div class="item chennai-car-item">
                            <img src="assets/images/chennai_service_img/cropped-Avatar-Round.png" alt="3d-scanning-services-avatar">
                            <div class="chennai-car-content">
                                <h6>Shan</h6>
                                <p>
                                    “Your follow-up support. You have
                                    remained in contact with us and worked
                                    hard to give us a deliverable in the desired
                                    format and having the characteristics that
                                    our project requires”.
                                </p>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item chennai-car-item">
                            <img src="assets/images/chennai_service_img/cropped-Avatar-Round.png" alt="3d-scanning-services-avatar">
                            <div class="chennai-car-content">
                                <h6>Aravidh</h6>
                                <p>
                                    "You far exceeded our expectations for a
                                    3D scanning and engineering company.
                                    Thanks to your engineers, our new part fit
                                    the trucks perfectly on the first try! We
                                    benefited from a significant cost savings
                                    using 3D scanning, which reduced our
                                    prototyping time significantly.”
                                </p>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item chennai-car-item">
                            <img src="assets/images/chennai_service_img/cropped-Avatar-Round.png" alt="3d-scanning-services-avatar">
                            <div class="chennai-car-content">
                                <h6>Maria Mercedes</h6>
                                <p>
                                    “Your follow-up support. You have
                                    remained in contact with us and worked
                                    hard to give us a deliverable in the desired
                                    format and having the characteristics that
                                    our project requires”.
                                </p>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item chennai-car-item">
                            <img src="assets/images/chennai_service_img/cropped-Avatar-Round.png" alt="3d-scanning-services-avatar">
                            <div class="chennai-car-content">
                                <h6>Johnsmith</h6>
                                <p>
                                    “Your follow-up support. You have
                                    remained in contact with us and worked
                                    hard to give us a deliverable in the desired
                                    format and having the characteristics that
                                    our project requires”.
                                </p>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item chennai-car-item">
                            <img src="assets/images/chennai_service_img/cropped-Avatar-Round.png" alt="3d-scanning-services-avatar">
                            <div class="chennai-car-content">
                                <h6>Shan</h6>
                                <p>
                                    “Your follow-up support. You have
                                    remained in contact with us and worked
                                    hard to give us a deliverable in the desired
                                    format and having the characteristics that
                                    our project requires”.
                                </p>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item chennai-car-item">
                            <img src="assets/images/chennai_service_img/cropped-Avatar-Round.png" alt="3d-scanning-services-avatar">
                            <div class="chennai-car-content">
                                <h6>Aravidh</h6>
                                <p>
                                    "You far exceeded our expectations for a
                                    3D scanning and engineering company.
                                    Thanks to your engineers, our new part fit
                                    the trucks perfectly on the first try! We
                                    benefited from a significant cost savings
                                    using 3D scanning, which reduced our
                                    prototyping time significantly.”
                                </p>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item chennai-car-item">
                            <img src="assets/images/chennai_service_img/cropped-Avatar-Round.png" alt="3d-scanning-services-avatar">
                            <div class="chennai-car-content">
                                <h6>Maria Mercedes</h6>
                                <p>
                                    “Your follow-up support. You have
                                    remained in contact with us and worked
                                    hard to give us a deliverable in the desired
                                    format and having the characteristics that
                                    our project requires”.
                                </p>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item chennai-car-item">
                            <img src="assets/images/chennai_service_img/cropped-Avatar-Round.png" alt="3d-scanning-services-avatar">
                            <div class="chennai-car-content">
                                <h6>Johnsmith</h6>
                                <p>
                                    “Your follow-up support. You have
                                    remained in contact with us and worked
                                    hard to give us a deliverable in the desired
                                    format and having the characteristics that
                                    our project requires”.
                                </p>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="item chennai-car-item">
                            <img src="assets/images/chennai_service_img/cropped-Avatar-Round.png" alt="3d-scanning-services-avatar">
                            <div class="chennai-car-content">
                                <h6>Shan</h6>
                                <p>
                                    “Your follow-up support. You have
                                    remained in contact with us and worked
                                    hard to give us a deliverable in the desired
                                    format and having the characteristics that
                                    our project requires”.
                                </p>
                                <div>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            var owl = $('.owl-carousel');
                            owl.owlCarousel({
                                loop: true,
                                nav: true,
                                autoplay: false,
                                autoplayTimeout: 3000,
                                margin: 5,
                                responsiveClass: true,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    600: {
                                        items: 2
                                    },
                                    960: {
                                        items: 3
                                    },
                                    1200: {
                                        items: 3
                                    }
                                }
                            });
                        })
                    </script>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials section ends-->
    <?php include('includes/footer.php'); ?>

    <!-- bootstrap links-->
    <!-- <script type="text/javascript" src="assets/js/jqery.js"></script> -->
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <!-- bootstrap links-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/app.owl.js"></script>
    <script src="assets/js/highlight.js"></script>
    <script src="assets/js/counter.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
</body>

</html>