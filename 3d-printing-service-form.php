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
    <title>3D printing service form</title>
    
    <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5FX95R9');</script>
    <!-- End Google Tag Manager -->

</head>
<style>
    h3.step-head {
        color: #F69322;
        font-size: 32px;
    }
    .choose-one {
        color: #F69322;
        font-size: 26px;
        font-weight:bold;
    }
    button.next-btn-style,
    button.prev-btn-style {
        border:1px solid #F69322;
        border-radius:50px;
        background-color:transparent;
        box-shadow:0px 3px 6px #F693227A;
        color: #F69322;
    }
    .stepOne label.form-check-label {
        cursor:pointer;
    }
    .stepTwoCard, .stepThreeCard, .stepFourCard {
        box-shadow:0px 3px 6px #F693227A;
    }
    .stepTwoCard input,
    .stepThreeCard input,
    .stepFourCard input{
        margin-bottom:20px;
    }
    .stepTwoCard,
    .stepThreeCard,
    .stepFourCard {
        margin-bottom:50px !important;
        padding:40px 20px !important;
    }
    .custom-file-upload {
        background: #F69322;
        padding: 10px 20px;
        width: 200px;
        color: #fff;
    }
    .upload-icon {
        position: relative;
        float: right;
        top: 5px;
    }
    .form-check{
        text-align: center !important;
    }
</style>
<body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FX95R9"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header end -->
    <section class="pt-5 mt-5">
        <div class="container">
            <?php
                if (isset($_SESSION['status'])) {
                    if ($_SESSION['status'] == "success") {
                        echo "<div class='row status-div'>
                                <p class='status-message'>Thanks for your interest in our 3d scanning service. You will receive the call and the quote from our business executives.</p>
                                <div style='width: 100%'><a href='https://www.precise3dm.com/step-form.php'><button class='step-form-btn'>Back</button></a></div></div>";
                    } else {
                        echo "<div class='row status-div'>
                                <p class='status-message'>Oops...Something went wrong, please try again
                            </p><div style='width: 100%'><a href='javascript:void(0);'><button class='step-form-btn'>Back</button></a></div></div>";
                    }
                    unset($_SESSION['status']);
                }else { ?>
            <form id="stepForm" method="POST" action="stepform-mail.php" enctype="multipart/form-data">
            <!--step one form-->
            <div class="row stepOne mb-4">
                <div class="col-md-12">
                    <h3 class="step-head text-center text-uppercase">Step One</h3>
                    <p class="choose-one text-center py-4">Choose One</p>
                </div>
                <div class="form-check col-md-4">
                    <image src="printimages/3D1.svg" />
                  <input class="form-check-input" type="radio" name="chooseOne" id="prototype" value="Rapid 3D Prototyping" checked>
                  <label class="form-check-label" for="prototype">
                    Rapid 3D Prototyping
                  </label>
                </div>
                <div class="form-check col-md-4">
                     <image src="printimages/3D2.svg" />
                  <input class="form-check-input" type="radio" name="chooseOne" id="lowVolumeProduction" value="Low Volume Production">
                  <label class="form-check-label" for="lowVolumeProduction">
                    Low Volume Production
                  </label>
                </div>
                <div class="form-check col-md-4">
                     <image src="printimages/3D3.svg" />
                  <input class="form-check-input" type="radio" name="chooseOne" id="massBatchProduction" value="Mass Batch Production">
                  <label class="form-check-label" for="massBatchProduction">
                    Mass Batch Production
                  </label>
                </div>
                <div class="col-md-12 mt-4 text-center mb-5">
                    <button class="btn py-2 px-5 step1Next next-btn-style" type="button">NEXT</button>
                </div>
            </div>
            <!--step two form-->
            <div class="row stepTwo mb-4 justify-content-center">
                <div class=col-md-12>
                    <h3 class="step-head text-center text-uppercase">Step Two</h3>
                </div>
                <div class="col-md-6 stepTwoCard py-4 px-4">
                    <div class="form-group upload-btn text-center">
                        <label for="uploadscan" class="custom-file-upload">
                            Upload Image
                            <i class="fas fa-arrow-up upload-icon"></i><br>
                        </label> <br>
                        <label for="uploadscan" class="custom-file-upload mt-3">
                            Upload File
                            <i class="fas fa-arrow-up upload-icon"></i><br>
                        </label>
                        <p>* Please save your file in following format.(File name -Your name)</p>
                        <input type="file" class="form-control invisible" id="uploadscan" name="uploadscan" required />
                    </div>
                    <div class="text-center mt-5"> 
                        <button class="btn py-2 px-5 step2Back prev-btn-style" type="button">BACK</button>
                        <button class="btn py-2 px-5 step2Next next-btn-style" type="button">NEXT</button>
                    </div>
                </div>
            </div>
            <!--step three form-->
            <div class="row stepThree mb-4 justify-content-center">
                <div class=col-md-12>
                    <h3 class="step-head text-center text-uppercase">Step Three</h3>
                </div>
                <div class="col-md-6 stepThreeCard py-4 px-4">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name*">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email*">
                    <input type="text" name="contactNumber" id="contactNumber" class="form-control" placeholder="Contact number*" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="10">
                    <input type="text" name="address" id="address" placeholder="Address*" class="form-control">
                    <input type="text" name="companyName" id="companyName" placeholder="Company name*" class="form-control">
                    <div class="text-center mt-5">
                        <button class="btn py-2 px-5 step3Back prev-btn-style" type="button">BACK</button>
                        <button class="btn py-2 px-5 step3Next next-btn-style" type="button" disabled>NEXT</button>
                    </div>
                </div>
            </div>
            <!--step four form-->
            <div class="row stepFour mb-4 justify-content-center">
                <div class=col-md-12>
                    <h3 class="step-head text-center text-uppercase">Step Four</h3>
                </div>
                <div class="col-md-6 stepFourCard py-4 px-4">
                    <input type="text" name="file_name" id="file_name" class="form-control" placeholder="FILE NAME">
                    <div class="form-group">
                        <select class="form-control" name="materialSelect" id="materialSelect">
                          <option>MATERIAL</option>
                          <option value="TOUGH-GRY 10" title="test">TOUGH-GRY 10, &#xf042;</option>
                          <option value="TOUGH-GRY 15">TOUGH-GRY 15</option>
                          <option value="TOUGH-BLK 20">TOUGH-BLK 20</option>
                          <option value="FLEX-BLK 10">FLEX-BLK 10</option>
                          <option value="FLEX-BLK 20">FLEX-BLK 20</option>
                          <option value="PRO-BLK 10">PRO-BLK 10</option>
                          <option value="RIGID WHITE">RIGID WHITE</option>
                          <option value="RIGID GRAY">RIGID GRAY</option>
                          <option value="TOUGH 65C BLACK">TOUGH 65C BLACK</option>
                          <option value="TOUGH 60C WHITE">TOUGH 60C WHITE</option>
                          <option value="HIGH TEMP 150C BLACK">HIGH TEMP 150C BLACK</option>
                          <option value="HIGH TEMP 300-AMB">HIGH TEMP 300-AMB</option>
                          <option value="MED-AMB 10">MED-AMB 10</option>
                          <option value="MED-WHT 10">MED-WHT 10</option>
                          <option value="RUBBER-65A BLK">RUBBER-65A BLK</option>
                          <option value="EGGSHELL-AMB 10">EGGSHELL-AMB 10</option>
                          <option value="RUBBER-BLK 10">RUBBER-BLK 10</option>
                          <option value="ELAST-BLK 10">ELAST-BLK 10</option>
                          <option value="RECOMMEND BEST MATERIAL">RECOMMEND BEST MATERIAL</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <select class="form-control" name="microns" id="microns">
                          <option>MICRONS</option>
                          <option value="Standard" title="test">Standard</option>
                          <option value="Premium">Premium</option>
                          <option value="Premium Plus">Premium Plus</option>
                          <option value="Premium Thick">Premium Thick</option>
                        </select>
                     </div>
                     <input type="text" name="quantity" id="quantity" placeholder="Quantity*" class="form-control">
                     <div class="form-group">
                        <textarea class="form-control" name="note" id="note" placeholder="Note" rows="3"></textarea>
                      </div>
                      <label class="form-check-label my-4">
                            Shipping
                            </label>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="shipping" id="shipping1" value="I will pick from your location" checked>
                          <label class="form-check-label" for="shipping1">
                            I will pick from your location
                          </label>
                        </div>
                        
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="shipping" id="shipping2" value="Let me know the shipping cost separately">
                          <label class="form-check-label" for="shipping2">
                            Let me know the shipping cost separately
                          </label>
                        </div>
                      
                    <div class="text-center mt-5">
                        <button class="btn py-2 px-5 step4Back prev-btn-style" type="button">BACK</button>
                        <button type='submit' class="btn py-2 px-5 step4Submit next-btn-style">SUBMIT</button>
                    </div>
                </div>
            </div>
        </form>
        <?php } ?>
        </div>
    </section>
     <!-- footer-->
    <?php include('includes/footer.php'); ?>
    <!-- footer-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script>
    $(".stepTwo, .stepThree, .stepFour").hide();
    function contactCheck() {
        if ($("#name").val() == '' || $("#email").val() == '' || $("#contactNumber").val() == '' || $("#address").val() == '' || $("#companyName").val() == '') {
            $(".step3Next").attr('disabled', true);
        } else {
            console.log("checking")
            $(".step3Next").removeAttr('disabled');
        }
    }
        $(document).ready(function() {
            $(document).on("click", '.step1Next', function(){
                $(".stepOne").hide();
                $(".stepTwo").show();
            })
            $(document).on("click", '.step2Next', function(){
                $(".stepTwo").hide();
                $(".stepThree").show();
            })
            $(document).on("click", '.step2Back', function(){
                $(".stepTwo").hide();
                $(".stepOne").show();
            })
            $(document).on("click", '.step3Next', function(){
                $(".stepThree").hide();
                $(".stepFour").show();
            })
            $(document).on("click", '.step3Back', function(){
                $(".stepThree").hide();
                $(".stepTwo").show();
            })
            $(document).on("click", '.step4Back', function(){
                $(".stepFour").hide();
                $(".stepThree").show();
            })
            
            $(document).on("keyup", ".stepThreeCard input", function(){
                console.log("keyup");
                contactCheck();
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
            $("#stepForm").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email_check: true,
                    },
                    contactNumber:{
                        required:true,
                        minlength: 10,
                    },
                    address: {
                        required: true,
                    },
                    companyName: {
                        required: true,
                    },
                    materialSelect: {
                        required: true,
                    },
                    microns: {
                        required: true,
                    },
                    quantity: {
                        required: true,
                    },
                    
                },
            });
        });
    </script>
    </body>

</html>
    
    