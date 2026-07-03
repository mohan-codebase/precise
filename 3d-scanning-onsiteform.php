<?php
session_start();
ini_set('upload_max_filesize', '40000M');
ini_set('post_max_size', '40000M');
ini_set('max_input_time', 300000);
ini_set('max_execution_time', '-1');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3d scanning onsite form</title>
    <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- custom css-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/3d-scanning-form-onsite.css">
    <link rel="stylesheet" href="assets/css/scanner-styles.css">
    <link rel="stylesheet" type="text/css" href="assets/css/new.css" >
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <script src="assets/js/jquery-3.6.0.min.js"></script>
     <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- custom css-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/optical-blue-light.css">
    <link rel="stylesheet" href="assets/css/scanner-styles.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="dig-insp-serv.css">
    <link rel="canonical" href="https://www.precise3dm.com/3d-scanning-onsiteform.php"/>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96527116-1"></script>
	<style>
	    #regForm{
	        background-color: #1A1A1A !important;
	        background-image: none;
	        border: 1px solid #dbdddf;
	        border-radius: 10px;
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
        <?php include('includes/header.php');?>
      <!-- header end -->
    <div class="container-fluid pan-india mt-lg-5 pt-lg-5">
        <div class="row mt-lg-5">
            <div class="col-md-5 mt-5">
                <div class=col-md-4></div>
               <div class="col-md-6 movefor centerone">
               HOW IT WORKS ?
               </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
            <div class="col-md-4 mt-4  downloadic">
                <img src="assets/images/icons/scanformicons/Upload.webp" alt="upload-3d-scanning-services-in-india" width="110px" height="80px" class="img-fluid imgalter">
                </div>
               <div class="col-md-3 mt-4 condownicon centerone">
                    Upload the component picture
                </div>
                    <div class="col-md-4"></div>
                    <div class=col-md-4></div>
                    <div class="col-md-4 formiconn">
                    <img src="assets/images/icons/scanformicons/form.webp" alt="fill-online-form-3d-scanning-services-in-india" width="110px" height="80px" class="img-fluid imgalter">
                    </div>
                    <div class="col-md-4 formiconncontent centerone">
                    Fill out our online form
                    </div><div class="cpl-md-4"></div>
                    <div class="col-md-4 scaniconn">
                    <img src="assets/images/icons/scanformicons/3Dscanner.webp" alt="handheld-3d-scanning-services-in-india" width="110px" height="80px" class="img-fluid imgalter">
                    </div>
                    <div class="col-md-4 scanicontent centerone">
                    Choose 3D Scanner OR We choose the right 3d scanner based on your requirement
     
                    </div><div class="col-md-4"></div>
                    <div class="col-md-4 scanhomeicon ">
                    <img src="assets/images/icons/scanformicons/ScanningatyourLocation.webp" alt="3d-scanning-specialist-in-india" width="110px" height="80px" class="img-fluid imgalter">
                    </div>
                    <div class="col-md-4 scanhomeiconcontent centerone">
                    Our 3d scanning specialists come to your location with 3d scanner
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 locicon ">
                    <img src="assets/images/icons/scanformicons/location.webp" alt="3d-scanning-services-near-me" width="110px" height="80px" class="img-fluid imgalter">
                    </div>
                    <div class="col-md-4 lociconcontent centerone">
                    We perform 3d scanning at your location
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 paniconind ">
                    <img src="assets/images/icons/scanformicons/regionalOffice.webp" alt="pan-india-3d-scanning-services" width="110px" height="80px" class="img-fluid imgalter ">
                    </div>
                    <div class="col-md-5 paniconindcont centerone">
                    We deliver the CAD files or report on the spot OR We do in house from our regional head offices
     
                    </div>

            </div>
            <div class="col-md-5">
                 <?php
                if (isset($_SESSION['status'])) {
                    if ($_SESSION['status'] == "success") {
                        echo "<div class='row status-div'>
                                <p class='status-message' style='color:#fff'>Thanks for uploading the file<br/>Wait for 15 minutes for a rapid quotation to your Email or Whatsapp</p>
                                <div style='width: 100%'><a href='javascript:void(0);'><button class='step-form-btn'>Back</button></a></div></div>";
                    } else {
                        echo "<div class='row status-div'>
                                <p class='status-message'>Oops...Something went wrong, please try again
                            </p><div style='width: 100%'><a href='javascript:void(0);'><button class='step-form-btn'>Back</button></a></div></div>";
                    }
                    unset($_SESSION['status']);
                } else { ?>
                    <form method="POST" action="3d-onsite-scan-upload.php" id="regForm" enctype="multipart/form-data" onsubmit="disablebutton();">
                    <h1 style="color:#fff;margin-bottom:30px;text-align:center;">Onsite 3D Scanning Service</h1>
                    <div class="tab-step-form" data-form-type="technicals" style="text-align:center">
                        <img src="assets/images/onsite3dimg/f1.png" style="width:100%;padding-bottom:25px">
                            <div class="form-group" style="margin:10px 0px -5px 0px">
                            <i class="fas fa-file-import fa-5x"></i><br>
                                <label for="uploadscan" class="custom-file-upload">
                                    Upload Picture &nbsp;
                                    <i class="fas fa-arrow-up"></i>
                                </label>
                                <input type="file" class="form-control invisible" id="uploadscan" name="uploadscan" required />
                               
                            </div>
                          
                            <div class="form-group shadow-textarea">
                                    <p class="content-heading mb-5">Upload File</p>
                            </div>
                    </div>
                        
                    
                    <div class="tab-step-form" data-form-type="contact">
                        <img src="assets/images/onsite3dimg/f2.png" style="width:100%;padding-bottom:25px">
                            <p>Personal Details</p>
                            <div class="form-group">
                                <input type="text" class="form-control required" id="name" name="name" placeholder="Name *" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control required" id="companyname" name="companyname" placeholder="Company Name *" required />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control required" id="email" name="email" placeholder="Email Address *" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control required" id="contactnumber" name="contactnumber" placeholder="Contact Number *" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control required" id="address" name="address" placeholder="Address *" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control required" id="city" name="city" placeholder="City *" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control required" id="state" name="state" placeholder="State *" required />
                            </div>
                        </div>
                       
                        <div class="tab-step-form" data-form-type="deliverables">
                            <img src="assets/images/onsite3dimg/f3.png" style="width:100%;padding-bottom:25px">
                            <p>Component Size</p>
                            <div class="checkbox">
                                <label><input type="checkbox" name="1mm-to-100-mm"> 1mm to 100 mm</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="100-mm-to-500-mm"> 100 mm to 500 mm</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="500-mm-to-1000-mm"> 500 mm to 1000 mm</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="1000mm-to-5000-mm"> 1000mm to 5000 mm</label>
                            </div>
                             <div class="checkbox">
                                <label><input type="checkbox" name="Large-Objects-and-environments-such-as-factories-ships-and-aircrafts"> Large Objects and environments such as factories, ships and aircrafts</label>
                            </div>
                        </div>

                        <div class="tab-step-form" data-form-type="analysis">
                            <img src="assets/images/onsite3dimg/f4.png" style="width:100%;padding-bottom:25px">
                            <p>Accuracy Expectation</p>
                            <div class="checkbox">
                                <label><input type="checkbox" name="10-to-50-Micron-010-mm-to-050-mm"> 10 to 50 Micron (.010 mm to .050 mm)</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="50-to-100-Micron-010-mm-to-050-mm"> 50 to 100 Micron (.010 mm to .050 mm)</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="Above-100-micron-1-mm"> Above 100-micron .1 mm</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="I-am-not-sure">I am not sure</label>
                            </div>
                           
                        </div>

                        <div class="tab-step-form" data-form-type="inspections">
                            <img src="assets/images/onsite3dimg/f5.png" style="width:100%;padding-bottom:25px">
                            <p>3D scanner and Technology</p>
                            <div class="checkbox">
                                <label><input type="checkbox" name="Optical-3d-scanner-Gom-and-SolutioniX-3d-Scanner">Optical 3d scanner (Gom and SolutioniX 3d Scanner)</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="Handheld-Metrology-3d-scanner-Freescan-UE7"> Handheld Metrology 3d scanner (Freescan UE7)</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="Cost-effective-Multiutility-3D-scanner-Handheld-Tripod">Cost effective Multiutility 3D scanner (Handheld & Tripod)</label>
                            </div>
                             <div class="checkbox">
                                <label><input type="checkbox" name="Long-range-Laser-3D-scanner-Faro-Focus"> Long range Laser 3D scanner (Faro Focus )</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="Others-Please-mention"> Others Please mention</label>
                            </div>
                            <p>Application</p>
                            <div class="checkbox">
                                <label><input type="checkbox" name="Just-3d-scanning-Point-Cloud-or-STL-files"> Just 3d scanning (Point Cloud, or STL files )</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="3D-Scan-to-CAD"> 3D Scan to CAD</label>
                            </div>
                           <div class="checkbox">
                                <label><input type="checkbox" name="3D-Inspection"> 3D Inspection</label>
                            </div>
                        </div>
                        
                        <div class="tab-step-form" data-form-type="locations">
                            <img src="assets/images/onsite3dimg/f6.png" style="width:100%;padding-bottom:25px">
                            <p>3D scanning Location</p>
                            <div class="checkbox">
                                <label><input type="checkbox" name="Same-as-Company-address">Same as Company address</label>
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox" name="Please-mention-the-address"> Please mention the address</label>
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control required" id="Address" name="Address" placeholder="Address *" required />
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control required" id="city" name="city" placeholder="City *" required />
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control required" id="State" name="State" placeholder="State *" required />
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
            
            
     
     
        </div>

    </div>
    <!-- footer start -->
    <?php include('includes/footer.php');?>
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
    var input_fields = ['name','email','companyname','contactnumber', 'address', 'city', 'state'];
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

  }else if(form == 'deliverables' || form == "inspections" || form == "locations")
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
<script></script>
</html>