<?php
$title = "3D Service Request";
$description = "Request 3D metrology services from Precise3DM.";
$keywords = "3D Scanning, Service Request, Precise3DM";
$dev_step = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | Precise3DM</title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords; ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Site-Wide CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/3d-service-request.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
</head>

<body>

    <?php include('includes/header.php'); ?>

    <!-- =========================================================
         SERVICE REQUEST FORM SECTION
         ========================================================= -->
    <section class="service-request-section">
        <!-- <div id="step1-container" style="display: block;"> -->
        <div id="step1-container" style="display: <?php echo ($dev_step == 1) ? 'block' : 'none'; ?>;">
            <div class="container-fluid" style="padding: 0 5%;">
                <div class="service-request-wrapper">
                    <div class="row g-0">

                        <!-- Left Side -->
                        <div class="col-lg-5 left-side" style="background-image: url('assets/images/3d-service-request/hero-left-bg.png');">
                            <div class="left-content">
                                <h2 class="left-title">3D Service Request</h2>
                                <p class="left-text">Please provide your contact details. We will get in touch with you regarding your requirement.</p>

                                <ul class="left-features">
                                    <li>
                                        <img src="assets/images/3d-service-request/hero1.png" alt="2000+ Projects Completed">
                                        <span>2000+ Projects Completed</span>
                                    </li>
                                    <li>
                                        <img src="assets/images/3d-service-request/hero2.png" alt="15+ Countries Served">
                                        <span>15+ Countries Served</span>
                                    </li>
                                    <li>
                                        <img src="assets/images/3d-service-request/hero3.png" alt="Advanced 3D Solutions">
                                        <span>Advanced 3D Solutions</span>
                                    </li>
                                    <li>
                                        <img src="assets/images/3d-service-request/hero4.png" alt="ISO 9001:2015 Certified">
                                        <span>ISO 9001:2015 Certified</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="col-lg-7 right-side">
                            <div class="right-content">

                                <!-- Progress Header -->
                                <div class="progress-header d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 20px;">
                                    <span class="step-text">Step 1 of 6</span>
                                    <div class="step-indicators d-flex align-items-center">
                                        <div class="step active">1</div>
                                        <div class="step-line"></div>
                                        <div class="step">2</div>
                                        <div class="step-line"></div>
                                        <div class="step">3</div>
                                        <div class="step-line"></div>
                                        <div class="step">4</div>
                                        <div class="step-line"></div>
                                        <div class="step">5</div>
                                        <div class="step-line"></div>
                                        <div class="step">6</div>
                                    </div>
                                </div>

                                <!-- Form Header -->
                                <div class="form-title-area mb-4">
                                    <div class="step-label">STEP 1 OF 6</div>
                                    <h2 class="form-title">Your Contact Information</h2>
                                    <p class="form-mandatory-text">All field marked with <span>*</span> are mandatory</p>
                                </div>

                                <!-- The Form -->
                                <form class="service-request-form" id="step1Form">

                                    <div class="mb-4">
                                        <label class="form-label">Full Name <span>*</span></label>
                                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Company Name <span>*</span></label>
                                        <input type="text" class="form-control" id="companyName" placeholder="Enter Company name" required>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Business Email Address <span>*</span></label>
                                        <input type="email" class="form-control" id="emailAddress" placeholder="Enter your business email address" required>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label">Mobile Number <span>*</span></label>
                                        <div class="row g-2 mobile-input-group">
                                            <div class="col-4 col-md-3">
                                                <select class="form-select w-100" id="dialCodeSelect" style="background-color: #fff; border-radius: 8px;">
                                                    <option value='+93'>+93 (Afghanistan)</option>
                                                    <option value='+355'>+355 (Albania)</option>
                                                    <option value='+213'>+213 (Algeria)</option>
                                                    <option value='+1 684'>+1 684 (AmericanSamoa)</option>
                                                    <option value='+376'>+376 (Andorra)</option>
                                                    <option value='+244'>+244 (Angola)</option>
                                                    <option value='+1 264'>+1 264 (Anguilla)</option>
                                                    <option value='+672'>+672 (Antarctica)</option>
                                                    <option value='+1268'>+1268 (Antigua and Barbuda)</option>
                                                    <option value='+54'>+54 (Argentina)</option>
                                                    <option value='+374'>+374 (Armenia)</option>
                                                    <option value='+297'>+297 (Aruba)</option>
                                                    <option value='+61'>+61 (Australia)</option>
                                                    <option value='+43'>+43 (Austria)</option>
                                                    <option value='+994'>+994 (Azerbaijan)</option>
                                                    <option value='+1 242'>+1 242 (Bahamas)</option>
                                                    <option value='+973'>+973 (Bahrain)</option>
                                                    <option value='+880'>+880 (Bangladesh)</option>
                                                    <option value='+1 246'>+1 246 (Barbados)</option>
                                                    <option value='+375'>+375 (Belarus)</option>
                                                    <option value='+32'>+32 (Belgium)</option>
                                                    <option value='+501'>+501 (Belize)</option>
                                                    <option value='+229'>+229 (Benin)</option>
                                                    <option value='+1 441'>+1 441 (Bermuda)</option>
                                                    <option value='+975'>+975 (Bhutan)</option>
                                                    <option value='+591'>+591 (Bolivia, Plurinational State of Bolivia)</option>
                                                    <option value='+387'>+387 (Bosnia and Herzegovina)</option>
                                                    <option value='+267'>+267 (Botswana)</option>
                                                    <option value='+55'>+55 (Bouvet Island)</option>
                                                    <option value='+55'>+55 (Brazil)</option>
                                                    <option value='+246'>+246 (British Indian Ocean Territory)</option>
                                                    <option value='+673'>+673 (Brunei Darussalam)</option>
                                                    <option value='+359'>+359 (Bulgaria)</option>
                                                    <option value='+226'>+226 (Burkina Faso)</option>
                                                    <option value='+257'>+257 (Burundi)</option>
                                                    <option value='+855'>+855 (Cambodia)</option>
                                                    <option value='+237'>+237 (Cameroon)</option>
                                                    <option value='+1'>+1 (Canada)</option>
                                                    <option value='+238'>+238 (Cape Verde)</option>
                                                    <option value='+1345'>+1345 (Cayman Islands)</option>
                                                    <option value='+236'>+236 (Central African Republic)</option>
                                                    <option value='+235'>+235 (Chad)</option>
                                                    <option value='+56'>+56 (Chile)</option>
                                                    <option value='+86'>+86 (China)</option>
                                                    <option value='+61'>+61 (Christmas Island)</option>
                                                    <option value='+61'>+61 (Cocos (Keeling) Islands)</option>
                                                    <option value='+57'>+57 (Colombia)</option>
                                                    <option value='+269'>+269 (Comoros)</option>
                                                    <option value='+242'>+242 (Congo)</option>
                                                    <option value='+243'>+243 (Congo, The Democratic Republic of the)</option>
                                                    <option value='+682'>+682 (Cook Islands)</option>
                                                    <option value='+506'>+506 (Costa Rica)</option>
                                                    <option value='+225'>+225 (Ivory Coast)</option>
                                                    <option value='+385'>+385 (Croatia)</option>
                                                    <option value='+53'>+53 (Cuba)</option>
                                                    <option value='+357'>+357 (Cyprus)</option>
                                                    <option value='+420'>+420 (Czech Republic)</option>
                                                    <option value='+45'>+45 (Denmark)</option>
                                                    <option value='+253'>+253 (Djibouti)</option>
                                                    <option value='+1 767'>+1 767 (Dominica)</option>
                                                    <option value='+1 849'>+1 849 (Dominican Republic)</option>
                                                    <option value='+593'>+593 (Ecuador)</option>
                                                    <option value='+20'>+20 (Egypt)</option>
                                                    <option value='+503'>+503 (El Salvador)</option>
                                                    <option value='+240'>+240 (Equatorial Guinea)</option>
                                                    <option value='+291'>+291 (Eritrea)</option>
                                                    <option value='+372'>+372 (Estonia)</option>
                                                    <option value='+251'>+251 (Ethiopia)</option>
                                                    <option value='+500'>+500 (Falkland Islands)</option>
                                                    <option value='+298'>+298 (Faroe Islands)</option>
                                                    <option value='+679'>+679 (Fiji)</option>
                                                    <option value='+358'>+358 (Finland)</option>
                                                    <option value='+33'>+33 (France)</option>
                                                    <option value='+689'>+689 (French Polynesia)</option>
                                                    <option value='+262'>+262 (French Southern and Antarctic Lands)</option>
                                                    <option value='+241'>+241 (Gabon)</option>
                                                    <option value='+220'>+220 (Gambia)</option>
                                                    <option value='+995'>+995 (Georgia)</option>
                                                    <option value='+49'>+49 (Germany)</option>
                                                    <option value='+233'>+233 (Ghana)</option>
                                                    <option value='+350'>+350 (Gibraltar)</option>
                                                    <option value='+30'>+30 (Greece)</option>
                                                    <option value='+299'>+299 (Greenland)</option>
                                                    <option value='+1 473'>+1 473 (Grenada)</option>
                                                    <option value='+590'>+590 (Guadeloupe)</option>
                                                    <option value='+1 671'>+1 671 (Guam)</option>
                                                    <option value='+502'>+502 (Guatemala)</option>
                                                    <option value='+44'>+44 (Guernsey)</option>
                                                    <option value='+224'>+224 (Guinea)</option>
                                                    <option value='+245'>+245 (Guinea-Bissau)</option>
                                                    <option value='+592'>+592 (Guyana)</option>
                                                    <option value='+509'>+509 (Haiti)</option>
                                                    <option value='+672'>+672 (Heard Island and McDonald Islands)</option>
                                                    <option value='+379'>+379 (Vatican City State (Holy See))</option>
                                                    <option value='+504'>+504 (Honduras)</option>
                                                    <option value='+852'>+852 (Hong Kong)</option>
                                                    <option value='+36'>+36 (Hungary)</option>
                                                    <option value='+354'>+354 (Iceland)</option>
                                                    <option value='+91' selected>+91 (India)</option>
                                                    <option value='+62'>+62 (Indonesia)</option>
                                                    <option value='+98'>+98 (Iran, Islamic Republic of)</option>
                                                    <option value='+964'>+964 (Iraq)</option>
                                                    <option value='+353'>+353 (Ireland)</option>
                                                    <option value='+44'>+44 (Isle of Man)</option>
                                                    <option value='+972'>+972 (Israel)</option>
                                                    <option value='+39'>+39 (Italy)</option>
                                                    <option value='+1 876'>+1 876 (Jamaica)</option>
                                                    <option value='+81'>+81 (Japan)</option>
                                                    <option value='+44'>+44 (Jersey)</option>
                                                    <option value='+962'>+962 (Jordan)</option>
                                                    <option value='+7'>+7 (Kazakhstan)</option>
                                                    <option value='+254'>+254 (Kenya)</option>
                                                    <option value='+686'>+686 (Kiribati)</option>
                                                    <option value='+850'>+850 (North Korea)</option>
                                                    <option value='+82'>+82 (South Korea)</option>
                                                    <option value='+965'>+965 (Kuwait)</option>
                                                    <option value='+996'>+996 (Kyrgyzstan)</option>
                                                    <option value='+856'>+856 (Laos)</option>
                                                    <option value='+371'>+371 (Latvia)</option>
                                                    <option value='+961'>+961 (Lebanon)</option>
                                                    <option value='+266'>+266 (Lesotho)</option>
                                                    <option value='+231'>+231 (Liberia)</option>
                                                    <option value='+218'>+218 (Libyan Arab Jamahiriya)</option>
                                                    <option value='+423'>+423 (Liechtenstein)</option>
                                                    <option value='+370'>+370 (Lithuania)</option>
                                                    <option value='+352'>+352 (Luxembourg)</option>
                                                    <option value='+853'>+853 (Macau)</option>
                                                    <option value='+389'>+389 (Macedonia, The Former Yugoslav Republic of)</option>
                                                    <option value='+261'>+261 (Madagascar)</option>
                                                    <option value='+265'>+265 (Malawi)</option>
                                                    <option value='+60'>+60 (Malaysia)</option>
                                                    <option value='+960'>+960 (Maldives)</option>
                                                    <option value='+223'>+223 (Mali)</option>
                                                    <option value='+356'>+356 (Malta)</option>
                                                    <option value='+692'>+692 (Marshall Islands)</option>
                                                    <option value='+596'>+596 (Martinique)</option>
                                                    <option value='+222'>+222 (Mauritania)</option>
                                                    <option value='+230'>+230 (Mauritius)</option>
                                                    <option value='+262'>+262 (Mayotte)</option>
                                                    <option value='+52'>+52 (Mexico)</option>
                                                    <option value='+691'>+691 (Micronesia, Federated States of)</option>
                                                    <option value='+373'>+373 (Moldova, Republic of)</option>
                                                    <option value='+377'>+377 (Monaco)</option>
                                                    <option value='+976'>+976 (Mongolia)</option>
                                                    <option value='+382'>+382 (Montenegro)</option>
                                                    <option value='+1664'>+1664 (Montserrat)</option>
                                                    <option value='+212'>+212 (Morocco)</option>
                                                    <option value='+258'>+258 (Mozambique)</option>
                                                    <option value='+95'>+95 (Myanmar)</option>
                                                    <option value='+264'>+264 (Namibia)</option>
                                                    <option value='+674'>+674 (Nauru)</option>
                                                    <option value='+977'>+977 (Nepal)</option>
                                                    <option value='+31'>+31 (Netherlands)</option>
                                                    <option value='+599'>+599 (Netherlands Antilles)</option>
                                                    <option value='+687'>+687 (New Caledonia)</option>
                                                    <option value='+64'>+64 (New Zealand)</option>
                                                    <option value='+505'>+505 (Nicaragua)</option>
                                                    <option value='+227'>+227 (Niger)</option>
                                                    <option value='+234'>+234 (Nigeria)</option>
                                                    <option value='+683'>+683 (Niue)</option>
                                                    <option value='+672'>+672 (Norfolk Island)</option>
                                                    <option value='+1 670'>+1 670 (Northern Mariana Islands)</option>
                                                    <option value='+47'>+47 (Norway)</option>
                                                    <option value='+968'>+968 (Oman)</option>
                                                    <option value='+92'>+92 (Pakistan)</option>
                                                    <option value='+680'>+680 (Palau)</option>
                                                    <option value='+970'>+970 (Palestinian Territory, Occupied)</option>
                                                    <option value='+507'>+507 (Panama)</option>
                                                    <option value='+675'>+675 (Papua New Guinea)</option>
                                                    <option value='+595'>+595 (Paraguay)</option>
                                                    <option value='+51'>+51 (Peru)</option>
                                                    <option value='+63'>+63 (Philippines)</option>
                                                    <option value='+870'>+870 (Pitcairn)</option>
                                                    <option value='+48'>+48 (Poland)</option>
                                                    <option value='+351'>+351 (Portugal)</option>
                                                    <option value='+1 939'>+1 939 (Puerto Rico)</option>
                                                    <option value='+974'>+974 (Qatar)</option>
                                                    <option value='+262'>+262 (Réunion)</option>
                                                    <option value='+40'>+40 (Romania)</option>
                                                    <option value='+7'>+7 (Russia)</option>
                                                    <option value='+250'>+250 (Rwanda)</option>
                                                    <option value='+290'>+290 (Saint Helena, Ascension and Tristan Da Cunha)</option>
                                                    <option value='+1 869'>+1 869 (Saint Kitts and Nevis)</option>
                                                    <option value='+1 758'>+1 758 (Saint Lucia)</option>
                                                    <option value='+508'>+508 (Saint Pierre and Miquelon)</option>
                                                    <option value='+1 784'>+1 784 (Saint Vincent and the Grenadines)</option>
                                                    <option value='+685'>+685 (Samoa)</option>
                                                    <option value='+378'>+378 (San Marino)</option>
                                                    <option value='+239'>+239 (Sao Tome and Principe)</option>
                                                    <option value='+966'>+966 (Saudi Arabia)</option>
                                                    <option value='+221'>+221 (Senegal)</option>
                                                    <option value='+381'>+381 (Serbia)</option>
                                                    <option value='+248'>+248 (Seychelles)</option>
                                                    <option value='+232'>+232 (Sierra Leone)</option>
                                                    <option value='+65'>+65 (Singapore)</option>
                                                    <option value='+421'>+421 (Slovakia)</option>
                                                    <option value='+386'>+386 (Slovenia)</option>
                                                    <option value='+677'>+677 (Solomon Islands)</option>
                                                    <option value='+252'>+252 (Somalia)</option>
                                                    <option value='+27'>+27 (South Africa)</option>
                                                    <option value='+500'>+500 (South Georgia and the South Sandwich Islands)</option>
                                                    <option value='+34'>+34 (Spain)</option>
                                                    <option value='+94'>+94 (Sri Lanka)</option>
                                                    <option value='+249'>+249 (Sudan)</option>
                                                    <option value='+597'>+597 (Suriname)</option>
                                                    <option value='+47'>+47 (Svalbard and Jan Mayen)</option>
                                                    <option value='+268'>+268 (Swaziland)</option>
                                                    <option value='+46'>+46 (Sweden)</option>
                                                    <option value='+41'>+41 (Switzerland)</option>
                                                    <option value='+963'>+963 (Syria)</option>
                                                    <option value='+886'>+886 (Taiwan)</option>
                                                    <option value='+992'>+992 (Tajikistan)</option>
                                                    <option value='+255'>+255 (Tanzania, United Republic of)</option>
                                                    <option value='+66'>+66 (Thailand)</option>
                                                    <option value='+670'>+670 (Timor-Leste)</option>
                                                    <option value='+228'>+228 (Togo)</option>
                                                    <option value='+690'>+690 (Tokelau)</option>
                                                    <option value='+676'>+676 (Tonga)</option>
                                                    <option value='+1 868'>+1 868 (Trinidad and Tobago)</option>
                                                    <option value='+216'>+216 (Tunisia)</option>
                                                    <option value='+90'>+90 (Turkey)</option>
                                                    <option value='+993'>+993 (Turkmenistan)</option>
                                                    <option value='+1 649'>+1 649 (Turks and Caicos Islands)</option>
                                                    <option value='+688'>+688 (Tuvalu)</option>
                                                    <option value='+256'>+256 (Uganda)</option>
                                                    <option value='+380'>+380 (Ukraine)</option>
                                                    <option value='+971'>+971 (United Arab Emirates)</option>
                                                    <option value='+44'>+44 (United Kingdom)</option>
                                                    <option value='+1'>+1 (United States)</option>
                                                    <option value='+1581'>+1581 (United States Minor Outlying Islands)</option>
                                                    <option value='+598'>+598 (Uruguay)</option>
                                                    <option value='+998'>+998 (Uzbekistan)</option>
                                                    <option value='+678'>+678 (Vanuatu)</option>
                                                    <option value='+58'>+58 (Venezuela, Bolivarian Republic of)</option>
                                                    <option value='+84'>+84 (Vietnam)</option>
                                                    <option value='+1 284'>+1 284 (Virgin Islands, British)</option>
                                                    <option value='+1 340'>+1 340 (Virgin Islands, U.S.)</option>
                                                    <option value='+681'>+681 (Wallis and Futuna)</option>
                                                    <option value='+732'>+732 (Western Sahara)</option>
                                                    <option value='+967'>+967 (Yemen)</option>
                                                    <option value='+260'>+260 (Zambia)</option>
                                                    <option value='+263'>+263 (Zimbabwe)</option>
                                                </select>
                                            </div>
                                            <div class="col-8 col-md-9">
                                                <input type="tel" class="form-control w-100" id="phoneNumber" placeholder="Enter mobile number" oninput="this.value = this.value.replace(/[^0-9]/g, '');" maxlength="15" required style="border: 1px solid #e0e0e0; border-radius: 8px !important;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label d-block">Country <span>*</span></label>
                                        <select class="form-select w-100" id="countrySelect" required style="background-color: #fff;">
                                            <option value="" selected="">Select Country</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                            <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Réunion">Réunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-Leste">Timor-Leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label d-block">State <span>*</span></label>
                                        <select class="form-select w-100" id="stateSelect" required disabled style="background-color: #fff;">
                                            <option value="" selected disabled>Enter your state</option>
                                        </select>
                                    </div>

                                    <div class="mb-4">
                                        <label class="form-label d-block">City <span>*</span></label>
                                        <select class="form-select w-100" id="citySelect" required disabled style="background-color: #fff;">
                                            <option value="" selected disabled>Enter your city</option>
                                        </select>
                                    </div>

                                    <div class="mb-4 d-flex justify-content-start align-items-center custom-checkbox-wrapper">
                                        <div class="form-check mb-0 d-flex align-items-center" style="gap: 10px;">
                                            <input type="checkbox" class="form-check-input mt-0" id="agreeTerms">
                                            <label class="form-check-label" for="agreeTerms" style="padding-left: 10px;">
                                                I agree to be contacted on WhatsApp
                                            </label>
                                        </div>
                                        <img src="assets/images/3d-service-request/whatsapp-logo.png" alt="WhatsApp" style="height: 35px; width: auto;">
                                    </div>

                                    <button type="button" class="btn-submit w-100 d-flex justify-content-center align-items-center mt-2" id="step1ContinueBtn" disabled style="opacity: 0.6; cursor: not-allowed;">
                                        <span>Continue <i class="fa-solid fa-arrow-right ms-2"></i></span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div id="step2-container" style="display: none; background-color: #f6f6fa; padding: 60px 0;"> -->
        <div id="step2-container" style="display: <?php echo ($dev_step == 2) ? 'block' : 'none'; ?>; background-color: #f6f6fa; padding: 0 5%;">
            <div class="container-fluid" style=" background: #fff; padding: 2% 3%; border-radius: 20px;">
                <!-- Progress Header -->
                <div class="progress-header d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 20px;">
                    <span class="step-text">Step 2 of 6</span>
                    <div class="step-indicators d-flex align-items-center">
                        <div class="step">1</div>
                        <div class="step-line"></div>
                        <div class="step active">2</div>
                        <div class="step-line"></div>
                        <div class="step">3</div>
                        <div class="step-line"></div>
                        <div class="step">4</div>
                        <div class="step-line"></div>
                        <div class="step">5</div>
                        <div class="step-line"></div>
                        <div class="step">6</div>
                    </div>
                </div>

                <!-- Form Header -->
                <div class="form-title-area mb-4">
                    <div class="step-label">STEP 2 OF 6</div>
                    <h2 class="form-title">Upload Part Images / Files</h2>
                    <p class="form-mandatory-text">Upload images or files of the part/object to help our experts understand your requirement better.</p>
                </div>

                <!-- The Form -->
                <form class="service-request-form">
                    <!-- Upload Area -->
                    <div class="upload-area mb-4" onclick="document.getElementById('fileUpload').click()">
                        <input type="file" id="fileUpload" multiple style="display: none;">
                        <div class="upload-icon">
                            <i class="fa-solid fa-cloud-arrow-up"></i>
                        </div>
                        <h4 style="font-size: 1.25rem; font-weight: 600; color: #333; margin-bottom: 5px;">Drag & Drop files here</h4>
                        <p style="color: #666; font-size: 0.95rem; margin-bottom: 25px;">or click to browse from your computer</p>

                        <div style="font-size: 0.85rem; color: #6b7280; font-weight: 500;">
                            <p class="mb-1">Supported formats: JPG, PNG, PDF, STEP, IGES, STP, DWG, DXF, OBJ, PLY</p>
                            <p class="mb-0">Maximum file size: 50MB per file</p>
                        </div>
                    </div>


                    <!-- Option Box 2 -->
                    <div class="option-box mb-4">
                        <input class="form-check-input mx-2" type="radio" name="uploadOption" id="confidentialRadio" value="confidential">
                        <label class="form-check-label w-100 px-lg-5" for="confidentialRadio">
                            My images are confidential. I will email or share after the NDA
                        </label>
                    </div>

                    <!-- Uploaded Files Section -->
                    <div id="uploadedFilesSection" class="mb-4" style="display: none;">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="m-0" style="font-size: 1.1rem; font-weight: 600; color: #333;">Uploaded Files (<span id="fileCount">0</span>)</h5>
                                <a href="javascript:void(0)" id="clearAllFiles" style="color: #d9534f; text-decoration: none; font-weight: 500; font-size: 0.95rem;">Clear all</a>
                            </div>
                            <div id="filePreviewContainer" class="d-flex flex-wrap gap-3"></div>
                    </div>

                    <!-- Info Box -->
                    <div class="info-box mb-5">
                        <div class="info-box-title">Tips for Better Results</div>
                        <ul class="info-box-list">
                            <li>Upload CAD files or 2D Drawings if your requirement is 3D Inspection</li>
                            <li>Capture from multiple angles</li>
                            <li>Ensure good lighting and clarity</li>
                            <li>Include scale reference if possible</li>
                            <li>Upload CAD files if available</li>
                        </ul>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn-back" onclick="document.getElementById('step2-container').style.display='none'; document.getElementById('step1-container').style.display='block'; window.scrollTo(0,0);">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn-continue" id="step2ContinueBtn">
                            Next <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- STEP 3 CONTAINER -->
        <div id="step3-container" style="display: <?php echo ($dev_step == 3) ? 'block' : 'none'; ?>; background-color: #f6f6fa; padding: 0 5%;">
            <div class="container-fluid bg-white" style="border-radius: 12px; padding: 2% 3%;">
                <!-- Progress Header -->
                <div class="progress-header d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 20px;">
                    <span class="step-text">Step 3 of 6</span>
                    <div class="step-indicators d-flex align-items-center">
                        <div class="step">1</div>
                        <div class="step-line"></div>
                        <div class="step">2</div>
                        <div class="step-line"></div>
                        <div class="step active">3</div>
                        <div class="step-line"></div>
                        <div class="step">4</div>
                        <div class="step-line"></div>
                        <div class="step">5</div>
                        <div class="step-line"></div>
                        <div class="step">6</div>
                    </div>
                </div>

                <form id="step3Form">
                    <h6 style="color: #ff931e; font-weight: 600; font-size: 14px; margin-bottom: 8px;">STEP 3 OF 6</h6>
                    <h3 style="font-weight: 700; color: #111; margin-bottom: 10px;">Part / Object Details</h3>
                    <p style="color: #666; margin-bottom: 30px;">Tell us about the part or object you want to process.</p>

                    <!-- Project Name -->
                    <div class="mb-4">
                        <label class="form-label" style="font-weight: 600; color: #333;">Part / Project Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control p-3" id="projectName" placeholder="Enter part or project name" style="border-radius: 8px; border: 1px solid #ddd; background-color: #fcfcfc;">
                    </div>

                    <!-- Object Size -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Object Size (Largest Dimension)</label>
                        <div class="row g-3">
                            <div class="col py-2">
                                <label class="goal-card w-100 text-center position-relative h-100">
                                    <input type="radio" name="objectSize" value="Very Small" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                        <div class="radio-indicator mb-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <span class="d-block" style="font-size: 14px; font-weight: 500;">Very Small (< 10 mm)</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col py-2">
                                <label class="goal-card w-100 text-center position-relative h-100">
                                    <input type="radio" name="objectSize" value="Small" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                        <div class="radio-indicator mb-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <span class="d-block" style="font-size: 14px; font-weight: 500;">Small (10 &ndash; 100 mm)</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col py-2">
                                <label class="goal-card w-100 text-center position-relative h-100">
                                    <input type="radio" name="objectSize" value="Medium" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                        <div class="radio-indicator mb-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <span class="d-block" style="font-size: 14px; font-weight: 500;">Medium (0.1 &ndash; 2 m)</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col py-2">
                                <label class="goal-card w-100 text-center position-relative h-100">
                                    <input type="radio" name="objectSize" value="Large" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                        <div class="radio-indicator mb-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <span class="d-block" style="font-size: 14px; font-weight: 500;">Large (2 m &ndash; 10 m)</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col py-2">
                                <label class="goal-card w-100 text-center position-relative h-100">
                                    <input type="radio" name="objectSize" value="Very Large" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                                        <div class="radio-indicator mb-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <span class="d-block" style="font-size: 14px; font-weight: 500;">Very Large (> 10 m)</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Approx. Dimensions -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Approx. Dimensions (in mm)</label>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label" style="font-weight: 600; color: #333;">Length (mm) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control p-3" id="partLength" placeholder="Length (mm)" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" style="border-radius: 8px; border: 1px solid #ddd; background-color: #fcfcfc;">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" style="font-weight: 600; color: #333;">Width (mm) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control p-3" id="partWidth" placeholder="Width (mm)" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" style="border-radius: 8px; border: 1px solid #ddd; background-color: #fcfcfc;">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label" style="font-weight: 600; color: #333;">Height (mm) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control p-3" id="partHeight" placeholder="Height (mm)" oninput="this.value = this.value.replace(/[^0-9.]/g, '')" style="border-radius: 8px; border: 1px solid #ddd; background-color: #fcfcfc;">
                            </div>
                        </div>
                    </div>

                    <!-- Required Accuracy -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Required Accuracy</label>
                        <div class="row g-3">
                            <div class="col-md-4 py-2">
                                <label class="accuracy-card w-100 position-relative h-100">
                                    <input type="radio" name="requiredAccuracy" value="High Precision" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-4 h-100 text-center d-flex flex-column justify-content-center">
                                        <div class="radio-indicator mb-3 mx-auto d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #333;">High Precision</span>
                                        <span class="d-block mb-1" style="font-size: 13px; font-weight: 500; color: #555;">Up to 0.02 mm</span>
                                        <span class="d-block" style="font-size: 12px; color: #777;">For critical components</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-2">
                                <label class="accuracy-card w-100 position-relative h-100">
                                    <input type="radio" name="requiredAccuracy" value="Standard Precision" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-4 h-100 text-center d-flex flex-column justify-content-center">
                                        <div class="radio-indicator mb-3 mx-auto d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #333;">Standard Precision</span>
                                        <span class="d-block mb-1" style="font-size: 13px; font-weight: 500; color: #555;">Up to 0.05 mm</span>
                                        <span class="d-block" style="font-size: 12px; color: #777;">For general manufacturing</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-2">
                                <label class="accuracy-card w-100 position-relative h-100">
                                    <input type="radio" name="requiredAccuracy" value="Large Scale Precision" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-4 h-100 text-center d-flex flex-column justify-content-center">
                                        <div class="radio-indicator mb-3 mx-auto d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #333;">Large Scale Precision</span>
                                        <span class="d-block mb-1" style="font-size: 13px; font-weight: 500; color: #555;">Up to 0.1 &ndash; 0.5 mm+</span>
                                        <span class="d-block" style="font-size: 12px; color: #777;">For large parts, structures, etc.</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Service Location Preference -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Service Location Preference</label>
                        <div class="row g-3">
                            <div class="col-md-6 py-2">
                                <label class="location-card w-100 position-relative h-100">
                                    <input type="radio" name="locationPreference" value="Walk-in" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-4 h-100 text-center d-flex flex-column align-items-center justify-content-between">
                                        <div class="mb-3 w-100">
                                            <div class="radio-indicator mb-3 mx-auto d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                            </div>
                                            <span class="d-block mb-1" style="font-size: 15px; font-weight: 500; color: #333;">Walk-in at Precise3DM Office</span>
                                            <span class="d-block" style="font-size: 14px; color: #555;">(You bring the component to our location)</span>
                                        </div>
                                        <img src="assets/images/3d-service-request/service1.png" alt="Walk-in Office" class="img-fluid mt-auto" style="max-height: 120px;">
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-6 py-2">
                                <label class="location-card w-100 position-relative h-100">
                                    <input type="radio" name="locationPreference" value="Onsite" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-4 h-100 text-center d-flex flex-column align-items-center justify-content-between">
                                        <div class="mb-3 w-100">
                                            <div class="radio-indicator mb-3 mx-auto d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                            </div>
                                            <span class="d-block mb-1" style="font-size: 15px; font-weight: 500; color: #333;">Onsite at my location</span>
                                            <span class="d-block" style="font-size: 14px; color: #555;">(We bring the 3D scanner to your location)</span>
                                        </div>
                                        <img src="assets/images/3d-service-request/service2.png" alt="Onsite" class="img-fluid mt-auto" style="max-height: 120px;">
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-6 py-2">
                                <label class="location-card w-100 position-relative h-100">
                                    <input type="radio" name="locationPreference" value="Pickup" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-4 h-100 text-center d-flex flex-column align-items-center justify-content-between">
                                        <div class="mb-3 w-100">
                                            <div class="radio-indicator mb-3 mx-auto d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                            </div>
                                            <span class="d-block mb-1" style="font-size: 15px; font-weight: 500; color: #333;">Component Pickup Service</span>
                                            <span class="d-block" style="font-size: 14px; color: #555;">(We pick up the component at your location)</span>
                                        </div>
                                        <img src="assets/images/3d-service-request/service3.png" alt="Component Pickup" class="img-fluid mt-auto" style="max-height: 120px;">
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-6 py-2">
                                <label class="location-card w-100 position-relative h-100">
                                    <input type="radio" name="locationPreference" value="Ship" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-4 h-100 text-center d-flex flex-column align-items-center justify-content-between">
                                        <div class="mb-3 w-100">
                                            <div class="radio-indicator mb-3 mx-auto d-flex align-items-center justify-content-center">
                                                <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                            </div>
                                            <span class="d-block mb-1" style="font-size: 15px; font-weight: 500; color: #333;">Ship it to Precise3DM</span>
                                            <span class="d-block" style="font-size: 14px; color: #555;">(You courier the parts to our nearby scanning location)</span>
                                        </div>
                                        <img src="assets/images/3d-service-request/service4.png" alt="Ship it" class="img-fluid mt-auto" style="max-height: 120px;">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Estimated Quantity of Parts -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Estimated Quantity of Parts</label>
                        <div class="d-flex flex-wrap gap-3">
                            <label class="qty-card position-relative m-0 px-2 py-2" style="cursor: pointer;">
                                <input type="radio" name="partQuantity" value="1" class="card-input" style="position: absolute; opacity: 0;">
                                <div class="card-content border rounded-pill px-4 py-2 d-flex align-items-center" style="background-color: #fff; min-width: 120px; transition: all 0.2s ease;">
                                    <div class="radio-indicator me-3 d-flex align-items-center justify-content-center" style="margin-bottom: 0 !important; width: 20px; height: 20px; flex-shrink: 0;">
                                        <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                    </div>
                                    <span style="font-size: 15px; font-weight: 500; color: #333; padding-left: 10px;">1</span>
                                </div>
                            </label>

                            <label class="qty-card position-relative m-0 px-2 py-2" style="cursor: pointer;">
                                <input type="radio" name="partQuantity" value="2-10" class="card-input" style="position: absolute; opacity: 0;">
                                <div class="card-content border rounded-pill px-4 py-2 d-flex align-items-center" style="background-color: #fff; min-width: 120px; transition: all 0.2s ease;">
                                    <div class="radio-indicator me-3 d-flex align-items-center justify-content-center" style="margin-bottom: 0 !important; width: 20px; height: 20px; flex-shrink: 0;">
                                        <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                    </div>
                                    <span style="font-size: 15px; font-weight: 500; color: #333; padding-left: 10px;">2 &ndash; 10</span>
                                </div>
                            </label>

                            <label class="qty-card position-relative m-0 px-2 py-2" style="cursor: pointer;">
                                <input type="radio" name="partQuantity" value="10-100" class="card-input" style="position: absolute; opacity: 0;">
                                <div class="card-content border rounded-pill px-4 py-2 d-flex align-items-center" style="background-color: #fff; min-width: 120px; transition: all 0.2s ease;">
                                    <div class="radio-indicator me-3 d-flex align-items-center justify-content-center" style="margin-bottom: 0 !important; width: 20px; height: 20px; flex-shrink: 0;">
                                        <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                    </div>
                                    <span style="font-size: 15px; font-weight: 500; color: #333; padding-left: 10px;">10 &ndash; 100</span>
                                </div>
                            </label>

                            <label class="qty-card position-relative m-0 px-2 py-2" style="cursor: pointer;">
                                <input type="radio" name="partQuantity" value="100+" class="card-input" style="position: absolute; opacity: 0;">
                                <div class="card-content border rounded-pill px-4 py-2 d-flex align-items-center" style="background-color: #fff; min-width: 120px; transition: all 0.2s ease;">
                                    <div class="radio-indicator me-3 d-flex align-items-center justify-content-center" style="margin-bottom: 0 !important; width: 20px; height: 20px; flex-shrink: 0;">
                                        <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                    </div>
                                    <span style="font-size: 15px; font-weight: 500; color: #333; padding-left: 10px;">100+</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn-back" onclick="document.getElementById('step3-container').style.display='none'; document.getElementById('step2-container').style.display='block'; window.scrollTo(0,0);">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn-continue" id="step3NextBtn">
                            Next <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        </div>

        <!-- Step 4 Container -->
        <div id="step4-container" style="display: <?php echo ($dev_step == 4) ? 'block' : 'none'; ?>; padding: 0 5%;">
            <div class="container-fluid bg-white d-flex justify-content-center align-items-center p-5">
                <form id="step4Form" class="w-100">
                    <!-- Progress Header -->
                    <div class="progress-header d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 20px;">
                        <span class="step-text">Step 4 of 6</span>
                        <div class="step-indicators d-flex align-items-center">
                            <div class="step">1</div>
                            <div class="step-line"></div>
                            <div class="step">2</div>
                            <div class="step-line"></div>
                            <div class="step">3</div>
                            <div class="step-line"></div>
                            <div class="step active">4</div>
                            <div class="step-line"></div>
                            <div class="step">5</div>
                            <div class="step-line"></div>
                            <div class="step">6</div>
                        </div>
                    </div>

                    <!-- Header Content -->
                    <h6 style="color: #ff931e; font-weight: 600; font-size: 14px; margin-bottom: 8px;">STEP 4 OF 6</h6>
                    <h3 style="font-weight: 700; color: #111; margin-bottom: 10px;">Application & Service</h3>
                    <p style="color: #666; margin-bottom: 30px;">What do you need help with?</p>

                    <!-- 4 Cards -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Primary Application <span class="text-danger">*</span></label>
                        <div class="row g-3">
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="applicationType" value="3D Scanning (Only)" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-3 h-100 position-relative d-flex flex-column" style="transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-start pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="text-center mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/application1.png" alt="3D Scanning (Only)" class="img-fluid" style="max-height: 120px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 16px; font-weight: 700; color: #222;">3D Scanning (Only)</span>
                                                <span class="d-block" style="font-size: 14px; color: #666;">Get 3D data of physical objects</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="applicationType" value="3D Scanning + Inspection" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-3 h-100 position-relative d-flex flex-column" style="transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-start pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="text-center mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/application2.png" alt="3D Scanning + Inspection" class="img-fluid" style="max-height: 120px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 16px; font-weight: 700; color: #222;">3D Scanning + Inspection</span>
                                                <span class="d-block" style="font-size: 14px; color: #666;">Compare with CAD or standards</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="applicationType" value="3D Scanning + Reverse Engineering" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-3 h-100 position-relative d-flex flex-column" style="transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-start pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="text-center mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/application3.png" alt="3D Scanning + Reverse Engineering" class="img-fluid" style="max-height: 120px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 16px; font-weight: 700; color: #222;">3D Scanning + Reverse Engineering</span>
                                                <span class="d-block" style="font-size: 14px; color: #666;">Convert scan data to CAD models</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="applicationType" value="Other" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content border rounded p-3 h-100 position-relative d-flex flex-column" style="transition: all 0.2s ease; min-height: 140px;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-start pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mt-auto pb-2">
                                                <span class="d-block mb-1" style="font-size: 16px; font-weight: 700; color: #222;">Other</span>
                                                <span class="d-block" style="font-size: 14px; color: #666;">Please specify your requirement</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Input Field -->
                    <div class="mb-5">
                        <label class="form-label mb-2" style="font-weight: 600; color: #333;">Other (Please Specify)</label>
                        <input type="text" class="form-control" name="applicationOther" placeholder="Enter your requirement" style="padding: 12px 15px; border-radius: 8px; border: 1px solid #ddd; background-color: #f9f9fc;">
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn-back" onclick="document.getElementById('step4-container').style.display='none'; document.getElementById('step3-container').style.display='block'; window.scrollTo(0,0);">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn-continue" id="step4NextBtn">
                            Next <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Step 5 Container (3D Scanning Only) -->
        <div id="step5-container-scanning" style="display: <?php echo ($dev_step == 5) ? 'block' : 'none'; ?>; padding: 0 5%;">
            <div class="container-fluid bg-white d-flex justify-content-center align-items-center p-5">
                <form id="step5ScanningForm" class="w-100">
                    <!-- Progress Header -->
                    <div class="progress-header d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 20px;">
                        <span class="step-text">Step 5 of 6</span>
                        <div class="step-indicators d-flex align-items-center">
                            <div class="step">1</div>
                            <div class="step-line"></div>
                            <div class="step">2</div>
                            <div class="step-line"></div>
                            <div class="step">3</div>
                            <div class="step-line"></div>
                            <div class="step">4</div>
                            <div class="step-line"></div>
                            <div class="step active">5</div>
                            <div class="step-line"></div>
                            <div class="step">6</div>
                        </div>
                    </div>

                    <!-- Header Content -->
                    <h6 style="color: #ff931e; font-weight: 600; font-size: 14px; margin-bottom: 8px;">STEP 5 OF 6</h6>
                    <h3 style="font-weight: 700; color: #111; margin-bottom: 10px;">3D Scanning</h3>
                    <p style="color: #666; margin-bottom: 30px;">Help us plan the right solution for your project.</p>

                    <!-- 9 Cards -->
                    <div class="mb-5">
                        <div class="row g-3">
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="scanningSolution" value="Structured Light 3D Scanning" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content rounded p-3 h-100 position-relative d-flex flex-column" style="border: 1px solid #c3c6d7; transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-center pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/scanning1.png" alt="Structured Light 3D Scanning" class="img-fluid" style="max-height: 140px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #222;">Structured Light 3D Scanning</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="scanningSolution" value="Industrial Handheld Metrology 3D Scanning" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content rounded p-3 h-100 position-relative d-flex flex-column" style="border: 1px solid #c3c6d7; transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-center pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/scanning2.png" alt="Industrial Handheld Metrology 3D Scanning" class="img-fluid" style="max-height: 140px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #222;">Industrial Handheld Metrology 3D Scanning(Metrology Grade)</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="scanningSolution" value="Lidar Laser 3D scanning" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content rounded p-3 h-100 position-relative d-flex flex-column" style="border: 1px solid #c3c6d7; transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-center pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/scanning3.png" alt="Lidar Laser 3D scanning" class="img-fluid" style="max-height: 140px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #222;">Lidar Laser 3D scanning</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="scanningSolution" value="Dynamic Tracking 3D Scanning" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content rounded p-3 h-100 position-relative d-flex flex-column" style="border: 1px solid #c3c6d7; transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-center pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/scanning4.png" alt="Dynamic Tracking 3D Scanning" class="img-fluid" style="max-height: 140px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #222;">Dynamic Tracking 3D Scanning</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="scanningSolution" value="Photogrammetry-Assisted 3D Scanning" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content rounded p-3 h-100 position-relative d-flex flex-column" style="border: 1px solid #c3c6d7; transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-center pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/scanning5.png" alt="Photogrammetry-Assisted 3D Scanning" class="img-fluid" style="max-height: 140px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #222;">Photogrammetry-Assisted 3D Scanning</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="scanningSolution" value="Infrared 3D scanning" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content rounded p-3 h-100 position-relative d-flex flex-column" style="border: 1px solid #c3c6d7; transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-center pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/scanning6.png" alt="Infrared 3D scanning" class="img-fluid" style="max-height: 140px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #222;">Infrared 3D scanning</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="scanningSolution" value="Full Colour 3D scanning" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content rounded p-3 h-100 position-relative d-flex flex-column" style="border: 1px solid #c3c6d7; transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-center pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/scanning7.png" alt="Full Colour 3D scanning" class="img-fluid" style="max-height: 140px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #222;">Full Colour 3D scanning</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="scanningSolution" value="Laser Arm 3D scanning" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content rounded p-3 h-100 position-relative d-flex flex-column" style="border: 1px solid #c3c6d7; transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-center pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/scanning8.png" alt="Laser Arm 3D scanning" class="img-fluid" style="max-height: 140px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #222;">Laser Arm 3D scanning</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-4 py-3">
                                <label class="app-card w-100 position-relative h-100">
                                    <input type="radio" name="scanningSolution" value="I am not sure, Need Consultation" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content rounded p-3 h-100 position-relative d-flex flex-column" style="border: 1px solid #c3c6d7; transition: all 0.2s ease;">
                                        <div class="radio-indicator position-absolute d-flex align-items-center justify-content-center" style="top: 15px; left: 15px; width: 22px; height: 22px; border-radius: 50%; border: 2px solid #ddd; z-index: 1;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 11px; display: none;"></i>
                                        </div>
                                        <div class="text-center pt-4 flex-grow-1 d-flex flex-column">
                                            <div class="mb-3 mt-3">
                                                <img src="assets/images/3d-service-request/scanning9.png" alt="I am not sure, Need Consultation" class="img-fluid" style="max-height: 140px; border-radius: 8px;">
                                            </div>
                                            <div class="mt-auto">
                                                <span class="d-block mb-1" style="font-size: 15px; font-weight: 600; color: #222;">I am not sure, Need Consultation</span>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <button type="button" class="btn-back" onclick="document.getElementById('step5-container-scanning').style.display='none'; document.getElementById('step4-container').style.display='block'; window.scrollTo(0,0);">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn-continue" id="step5ScanningNextBtn">
                            Next <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Step 5 Container (3D Scanning + Inspection) -->
        <div id="step5-container-inspection" style="display: <?php echo ($dev_step == 5 && false) ? 'block' : 'none'; ?>; padding: 0 5%;">
            <div class="container-fluid bg-white d-flex justify-content-center align-items-center p-5">
                <form id="step5InspectionForm" class="w-100">
                    <!-- Progress Header -->
                    <div class="progress-header d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 20px;">
                        <span class="step-text">Step 5 of 6</span>
                        <div class="step-indicators d-flex align-items-center">
                            <div class="step">1</div>
                            <div class="step-line"></div>
                            <div class="step">2</div>
                            <div class="step-line"></div>
                            <div class="step">3</div>
                            <div class="step-line"></div>
                            <div class="step">4</div>
                            <div class="step-line"></div>
                            <div class="step active">5</div>
                            <div class="step-line"></div>
                            <div class="step">6</div>
                        </div>
                    </div>

                    <!-- Header Content -->
                    <h6 style="color: #ff931e; font-weight: 600; font-size: 14px; margin-bottom: 8px;">STEP 5 OF 6</h6>
                    <h3 style="font-weight: 700; color: #111; margin-bottom: 10px;">3D Inspect</h3>
                    <p style="color: #666; margin-bottom: 40px;">Help us plan the right solution for your project.</p>

                    <!-- CAD Model Reference Radio Question -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Do you have a reference 3D CAD Model or 2D drawing?</label>
                        <div class="d-flex flex-wrap gap-3">
                            <label class="yesno-card position-relative px-2" style="cursor: pointer;">
                                <input type="radio" name="hasReferenceModel" value="Yes" class="card-input" style="position: absolute; opacity: 0;">
                                <div class="card-content d-flex align-items-center justify-content-center" style="border: 1px solid #737686; border-radius: 30px; padding: 12px 35px; transition: all 0.2s ease; ">
                                    <div class="radio-indicator d-flex align-items-center justify-content-center me-2" style="width: 20px; height: 20px; border-radius: 50%; border: 2px solid #ddd;">
                                        <i class="fa-solid fa-check text-white check-icon" style="font-size: 10px; display: none;"></i>
                                    </div>
                                    <span style="font-size: 16px; font-weight: 500;">Yes</span>
                                </div>
                            </label>
                            <label class="yesno-card position-relative px-2" style="cursor: pointer;">
                                <input type="radio" name="hasReferenceModel" value="No" class="card-input" style="position: absolute; opacity: 0;">
                                <div class="card-content d-flex align-items-center justify-content-center" style="border: 1px solid #737686; border-radius: 30px; padding: 12px 35px; transition: all 0.2s ease;">
                                    <div class="radio-indicator d-flex align-items-center justify-content-center me-2" style="width: 20px; height: 20px; border-radius: 50%; border: 2px solid #ddd;">
                                        <i class="fa-solid fa-check text-white check-icon" style="font-size: 10px; display: none;"></i>
                                    </div>
                                    <span style="font-size: 16px; font-weight: 500;">No</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Output Format Required -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Output Format Required</label>
                        <div class="custom-checkbox-wrapper" style="border: 1px solid #ff931e; border-radius: 12px; padding: 35px 30px;">
                            <div class="row g-4">
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="outputFormat[]" value=".PPT (PowerPoint)" id="fmtPpt">
                                        <label class="form-check-label px-3" for="fmtPpt" style="font-weight: 500 !important; font-size: 16px; color: #222;">.PPT (PowerPoint)</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="outputFormat[]" value=".PDF" id="fmtPdf">
                                        <label class="form-check-label px-3" for="fmtPdf" style="font-weight: 500 !important; font-size: 16px; color: #222;">.PDF</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="outputFormat[]" value=".3D PDF" id="fmt3dPdf">
                                        <label class="form-check-label px-3" for="fmt3dPdf" style="font-weight: 500 !important; font-size: 16px; color: #222;">.3D PDF</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="outputFormat[]" value=".XLSX (Excel)" id="fmtXlsx">
                                        <label class="form-check-label px-3" for="fmtXlsx" style="font-weight: 500 !important; font-size: 16px; color: #222;">.XLSX (Excel)</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="outputFormat[]" value="Others" id="fmtOthers">
                                        <label class="form-check-label px-3" for="fmtOthers" style="font-weight: 500 !important; font-size: 16px; color: #222;">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Other Input -->
                    <div class="mb-5 mt-5">
                        <label class="form-label mb-2" style="font-weight: 700; color: #111; font-size: 1.1rem;">Other (Please specify)</label>
                        <input type="text" class="form-control" name="inspectionOther" placeholder="Enter your required output" style="padding: 12px 15px; border-radius: 8px; border: 1px solid #ddd; background-color: #fff;">
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between align-items-center mt-5" style="gap: 10px;">
                        <button type="button" class="btn-back" onclick="document.getElementById('step5-container-inspection').style.display='none'; document.getElementById('step4-container').style.display='block'; window.scrollTo(0,0);">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn-continue" id="step5InspectionNextBtn">
                            Next <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Step 5 Container (3D Scanning + Reverse Engineering) -->
        <div id="step5-container-reverse" style="display: <?php echo ($dev_step == 5 && false) ? 'block' : 'none'; ?>; padding: 0 5%;">
            <div class="container-fluid bg-white d-flex justify-content-center align-items-center p-5">
                <form id="step5ReverseForm" class="w-100">
                    <!-- Progress Header -->
                    <div class="progress-header d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 20px;">
                        <span class="step-text">Step 5 of 6</span>
                        <div class="step-indicators d-flex align-items-center">
                            <div class="step">1</div>
                            <div class="step-line"></div>
                            <div class="step">2</div>
                            <div class="step-line"></div>
                            <div class="step">3</div>
                            <div class="step-line"></div>
                            <div class="step">4</div>
                            <div class="step-line"></div>
                            <div class="step active">5</div>
                            <div class="step-line"></div>
                            <div class="step">6</div>
                        </div>
                    </div>

                    <!-- Header Content -->
                    <h6 style="color: #ff931e; font-weight: 600; font-size: 14px; margin-bottom: 8px;">STEP 5 OF 6</h6>
                    <h3 style="font-weight: 700; color: #111; margin-bottom: 10px;">Purpose of Reverse Engineering</h3>
                    <p style="color: #666; margin-bottom: 40px;">Help us plan the right solution for your project.</p>

                    <!-- End Use Checkboxes -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">What is the end use of the reverse engineering data?</label>
                        <div class="custom-checkbox-wrapper" style="border: 1px solid #ff931e; border-radius: 12px; padding: 35px 30px;">
                            <div class="row g-4">
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="endUse[]" value="Re-manufacturing the same part" id="useRemanufacturing">
                                        <label class="form-check-label px-3" for="useRemanufacturing" style="font-weight: 500 !important; font-size: 16px; color: #222;">Re-manufacturing the same part</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="endUse[]" value="Product redesign &modification" id="useRedesign">
                                        <label class="form-check-label px-3" for="useRedesign" style="font-weight: 500 !important; font-size: 16px; color: #222;">Product redesign &modification</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="endUse[]" value="3D printing/prototype making" id="use3dPrinting">
                                        <label class="form-check-label px-3" for="use3dPrinting" style="font-weight: 500 !important; font-size: 16px; color: #222;">3D printing/prototype making</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="endUse[]" value="Tooling/mold / die development" id="useTooling">
                                        <label class="form-check-label px-3" for="useTooling" style="font-weight: 500 !important; font-size: 16px; color: #222;">Tooling/mold / die development</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="endUse[]" value="Packaging measurement/fitment study" id="usePackaging">
                                        <label class="form-check-label px-3" for="usePackaging" style="font-weight: 500 !important; font-size: 16px; color: #222;">Packaging measurement/fitment study</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="endUse[]" value="Assembly fitment checking" id="useAssembly">
                                        <label class="form-check-label px-3" for="useAssembly" style="font-weight: 500 !important; font-size: 16px; color: #222;">Assembly fitment checking</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="endUse[]" value="CAE / FEA / simulation input" id="useCae">
                                        <label class="form-check-label px-3" for="useCae" style="font-weight: 500 !important; font-size: 16px; color: #222;">CAE / FEA / simulation input</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="endUse[]" value="Documentation purpose" id="useDocumentation">
                                        <label class="form-check-label px-3" for="useDocumentation" style="font-weight: 500 !important; font-size: 16px; color: #222;">Documentation purpose</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="endUse[]" value="Other" id="useOther">
                                        <label class="form-check-label px-3" for="useOther" style="font-weight: 500 !important; font-size: 16px; color: #222;">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Other Input -->
                    <div class="mb-5 mt-5">
                        <label class="form-label mb-2" style="font-weight: 700; color: #111; font-size: 1.1rem;">Other (Please specify)</label>
                        <input type="text" class="form-control" name="reverseOther" placeholder="Enter your required reverse engineering data" style="padding: 12px 15px; border-radius: 8px; border: 1px solid #ddd; background-color: #fff;">
                    </div>

                    <!-- Required Output -->
                    <div class="mb-5">
                        <label class="form-label mb-1" style="font-weight: 700; color: #111; font-size: 1.1rem;">Required Output</label>
                        <p style="color: #666; margin-bottom: 20px;">What type of output do you need?</p>
                        <div class="custom-checkbox-wrapper" style="border: 1px solid #ff931e; border-radius: 12px; padding: 35px 30px;">
                            <div class="row g-4">
                                <div class="col-md-3 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="requiredOutput[]" value="STL mesh file" id="outStl">
                                        <label class="form-check-label px-3" for="outStl" style="font-weight: 500 !important; font-size: 16px; color: #222;">STL mesh file</label>
                                    </div>
                                </div>
                                <div class="col-md-3 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="requiredOutput[]" value="STEP / IGES CAD file" id="outStep">
                                        <label class="form-check-label px-3" for="outStep" style="font-weight: 500 !important; font-size: 16px; color: #222;">STEP / IGES CAD file</label>
                                    </div>
                                </div>
                                <div class="col-md-3 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="requiredOutput[]" value="2D manufacturing drawing" id="out2d">
                                        <label class="form-check-label px-3" for="out2d" style="font-weight: 500 !important; font-size: 16px; color: #222;">2D manufacturing drawing</label>
                                    </div>
                                </div>
                                <div class="col-md-3 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="requiredOutput[]" value="Assembly model" id="outAssembly">
                                        <label class="form-check-label px-3" for="outAssembly" style="font-weight: 500 !important; font-size: 16px; color: #222;">Assembly model</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Specific CAD Format Requirement -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Do you require the final model in a specific CAD software format?</label>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="yesno-card position-relative w-100 h-100" style="cursor: pointer;">
                                    <input type="radio" name="specificCadFormat" value="No, a standard 3D CAD file is sufficient (STEP / IGES)" class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content d-flex align-items-center h-100" style="border: 1px solid #737686; border-radius: 30px; padding: 12px 25px; transition: all 0.2s ease;">
                                        <div class="radio-indicator d-flex align-items-center justify-content-center me-3" style="width: 20px; height: 20px; border-radius: 50%; border: 2px solid #ddd; flex-shrink: 0;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 10px; display: none;"></i>
                                        </div>
                                        <span class="px-2" style="font-size: 16px; font-weight: 500;">No, a standard 3D CAD file is sufficient (STEP / IGES)</span>
                                    </div>
                                </label>
                            </div>
                            <div class="col-md-6">
                                <label class="yesno-card position-relative w-100 h-100" style="cursor: pointer;">
                                    <input type="radio" name="specificCadFormat" value="Yes, I need an editable native CAD file." class="card-input" style="position: absolute; opacity: 0;">
                                    <div class="card-content d-flex align-items-center h-100" style="border: 1px solid #737686; border-radius: 30px; padding: 12px 25px; transition: all 0.2s ease;">
                                        <div class="radio-indicator d-flex align-items-center justify-content-center me-3" style="width: 20px; height: 20px; border-radius: 50%; border: 2px solid #ddd; flex-shrink: 0;">
                                            <i class="fa-solid fa-check text-white check-icon" style="font-size: 10px; display: none;"></i>
                                        </div>
                                        <span class="px-2" style="font-size: 16px; font-weight: 500;">Yes, I need an editable native CAD file.</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Preferred CAD Software Selection -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Select your preferred CAD software:</label>
                        <div class="custom-checkbox-wrapper" style="border: 1px solid #ff931e; border-radius: 12px; padding: 35px 30px;">
                            <div class="row g-4">
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="preferredCad[]" value="SolidWorks (.SLDPRT)" id="cadSolidWorks">
                                        <label class="form-check-label px-2 d-flex align-items-center" for="cadSolidWorks" style="font-weight: 500 !important; font-size: 16px; color: #222;">
                                            <img src="assets/images/3d-service-request/software1.png" alt="SolidWorks" class="me-2 px-2" style="max-height: 24px; width: auto;">
                                            SolidWorks (.SLDPRT)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="preferredCad[]" value="PTC Creo / Pro-E (.PRT)" id="cadCreo">
                                        <label class="form-check-label px-2 d-flex align-items-center" for="cadCreo" style="font-weight: 500 !important; font-size: 16px; color: #222;">
                                            <img src="assets/images/3d-service-request/software2.png" alt="PTC Creo" class="me-2 px-2" style="max-height: 24px; width: auto;">
                                            PTC Creo / Pro-E (.PRT)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="preferredCad[]" value="Siemens NX / Unigraphics (.PRT)" id="cadNx">
                                        <label class="form-check-label px-2 d-flex align-items-center" for="cadNx" style="font-weight: 500 !important; font-size: 16px; color: #222;">
                                            <img src="assets/images/3d-service-request/software3.png" alt="Siemens NX" class="me-2 px-2" style="max-height: 24px; width: auto;">
                                            Siemens NX / Unigraphics (.PRT)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="preferredCad[]" value="Autodesk Inventor (.IPT)" id="cadInventor">
                                        <label class="form-check-label px-2 d-flex align-items-center" for="cadInventor" style="font-weight: 500 !important; font-size: 16px; color: #222;">
                                            <img src="assets/images/3d-service-request/software4.png" alt="Autodesk Inventor" class="me-2 px-2" style="max-height: 24px; width: auto;">
                                            Autodesk Inventor (.IPT)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="preferredCad[]" value="CATIA (.CATPart)" id="cadCatia">
                                        <label class="form-check-label px-2 d-flex align-items-center" for="cadCatia" style="font-weight: 500 !important; font-size: 16px; color: #222;">
                                            <img src="assets/images/3d-service-request/software5.png" alt="CATIA" class="me-2 px-2" style="max-height: 24px; width: auto;">
                                            CATIA (.CATPart)
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="preferredCad[]" value="Fusion 360" id="cadFusion">
                                        <label class="form-check-label px-2 d-flex align-items-center" for="cadFusion" style="font-weight: 500 !important; font-size: 16px; color: #222;">
                                            <img src="assets/images/3d-service-request/software6.png" alt="Fusion 360" class="me-2 px-2" style="max-height: 24px; width: auto;">
                                            Fusion 360
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="preferredCad[]" value="AutoCAD" id="cadAutoCad">
                                        <label class="form-check-label px-2 d-flex align-items-center" for="cadAutoCad" style="font-weight: 500 !important; font-size: 16px; color: #222;">
                                            <img src="assets/images/3d-service-request/software7.png" alt="AutoCAD" class="me-2 px-2" style="max-height: 24px; width: auto;">
                                            AutoCAD
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="preferredCad[]" value="Not Sure — Please Recommend the Best Format" id="cadNotSure">
                                        <label class="form-check-label px-2" for="cadNotSure" style="font-weight: 500 !important; font-size: 16px; color: #222;">
                                            Not Sure — Please Recommend the Best Format
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Other CAD Software Input -->
                    <div class="mb-5 mt-5">
                        <label class="form-label mb-2" style="font-weight: 700; color: #111; font-size: 1.1rem;">Other CAD Software (Optional)</label>
                        <input type="text" class="form-control" name="otherCadSoftware" placeholder="Enter your Preferred CAD Version" style="padding: 12px 15px; border-radius: 8px; border: 1px solid #ddd; background-color: #fff;">
                    </div>

                    <!-- 2D Manufacturing Drawings -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Do you need 2D manufacturing drawings?</label>
                        <div class="d-flex flex-wrap gap-3">
                            <label class="yesno-card position-relative px-2" style="cursor: pointer;">
                                <input type="radio" name="need2dDrawings" value="Yes" class="card-input" style="position: absolute; opacity: 0;">
                                <div class="card-content d-flex align-items-center justify-content-center" style="border: 1px solid #737686; border-radius: 30px; padding: 12px 35px; transition: all 0.2s ease;">
                                    <div class="radio-indicator d-flex align-items-center justify-content-center me-2" style="width: 20px; height: 20px; border-radius: 50%; border: 2px solid #ddd;">
                                        <i class="fa-solid fa-check text-white check-icon" style="font-size: 10px; display: none;"></i>
                                    </div>
                                    <span class="px-2" style="font-size: 16px; font-weight: 500;">Yes</span>
                                </div>
                            </label>
                            <label class="yesno-card position-relative px-2" style="cursor: pointer;">
                                <input type="radio" name="need2dDrawings" value="No" class="card-input" style="position: absolute; opacity: 0;">
                                <div class="card-content d-flex align-items-center justify-content-center" style="border: 1px solid #737686; border-radius: 30px; padding: 12px 35px; transition: all 0.2s ease;">
                                    <div class="radio-indicator d-flex align-items-center justify-content-center me-2" style="width: 20px; height: 20px; border-radius: 50%; border: 2px solid #ddd;">
                                        <i class="fa-solid fa-check text-white check-icon" style="font-size: 10px; display: none;"></i>
                                    </div>
                                    <span class="px-2" style="font-size: 16px; font-weight: 500;">No</span>
                                </div>
                            </label>
                            <label class="yesno-card position-relative px-2" style="cursor: pointer;">
                                <input type="radio" name="need2dDrawings" value="Not sure" class="card-input" style="position: absolute; opacity: 0;">
                                <div class="card-content d-flex align-items-center justify-content-center" style="border: 1px solid #737686; border-radius: 30px; padding: 12px 35px; transition: all 0.2s ease;">
                                    <div class="radio-indicator d-flex align-items-center justify-content-center me-2" style="width: 20px; height: 20px; border-radius: 50%; border: 2px solid #ddd;">
                                        <i class="fa-solid fa-check text-white check-icon" style="font-size: 10px; display: none;"></i>
                                    </div>
                                    <span class="px-2" style="font-size: 16px; font-weight: 500;">Not sure</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- If Yes, Please Select Checkboxes -->
                    <div class="mb-5">
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">If yes, please select:</label>
                        <div class="custom-checkbox-wrapper" style="border: 1px solid #ff931e; border-radius: 12px; padding: 35px 30px;">
                            <div class="row g-4">
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="drawingDetails[]" value="Overall dimensions only" id="drawDim">
                                        <label class="form-check-label px-3" for="drawDim" style="font-weight: 500 !important; font-size: 16px; color: #222;">Overall dimensions only</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="drawingDetails[]" value="Full manufacturing drawing" id="drawFull">
                                        <label class="form-check-label px-3" for="drawFull" style="font-weight: 500 !important; font-size: 16px; color: #222;">Full manufacturing drawing</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="drawingDetails[]" value="GD&T required" id="drawGdt">
                                        <label class="form-check-label px-3" for="drawGdt" style="font-weight: 500 !important; font-size: 16px; color: #222;">GD&T required</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="drawingDetails[]" value="Tolerance details required" id="drawTol">
                                        <label class="form-check-label px-3" for="drawTol" style="font-weight: 500 !important; font-size: 16px; color: #222;">Tolerance details required</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="drawingDetails[]" value="Section views required" id="drawSec">
                                        <label class="form-check-label px-3" for="drawSec" style="font-weight: 500 !important; font-size: 16px; color: #222;">Section views required</label>
                                    </div>
                                </div>
                                <div class="col-md-4 py-2">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input me-3" type="checkbox" name="drawingDetails[]" value="Assembly drawing required" id="drawAssy">
                                        <label class="form-check-label px-3" for="drawAssy" style="font-weight: 500 !important; font-size: 16px; color: #222;">Assembly drawing required</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Special Instructions -->
                    <div class="mb-5 mt-5">
                        <h4 style="font-weight: 700; color: #111; font-size: 1.1rem; margin-bottom: 8px;">Special Instructions</h4>
                        <p style="color: #666; margin-bottom: 25px;">Please mention any critical areas, fitment areas, functional surfaces, threads, holes, or features that need special attention.</p>
                        <label class="form-label mb-3" style="font-weight: 700; color: #111; font-size: 1.1rem;">Comments:</label>
                        <textarea class="form-control" name="specialInstructionsComments" rows="2" style="border: none; border-bottom: 1px solid #737686; border-radius: 0; background: transparent; box-shadow: none; padding: 10px 0; resize: none; width: 100%;"></textarea>
                    </div>

                    <!-- Submit Requirement -->
                    <div class="mb-5 mt-5">
                        <h3 style="font-weight: 700; color: #111; font-size: 1.4rem; margin-bottom: 15px;">Submit Requirement</h3>
                        <p style="color: #666; line-height: 1.6; font-size: 16px; margin-bottom: 40px;">After receiving your details, our reverse engineering team will review the part requirement and suggest the best workflow, output format, accuracy level, timeline, and quotation.</p>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between align-items-center mt-5" style="gap: 10px;">
                        <button type="button" class="btn-back" onclick="document.getElementById('step5-container-reverse').style.display='none'; document.getElementById('step4-container').style.display='block'; window.scrollTo(0,0);">
                            <i class="fa-solid fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="btn-continue" id="step5ReverseNextBtn">
                            Next <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- STEP 6 CONTAINER -->
        <div id="step6-container" style="display: <?php echo ($dev_step == 6) ? 'block' : 'none'; ?>; background-color: #f6f6fa; padding: 0 5%;">
            <div class="container-fluid bg-white" style="border-radius: 20px; padding: 2% 3%;">
                <!-- Progress Header -->
                <div class="progress-header d-flex flex-wrap justify-content-center align-items-center mb-5" style="gap: 20px;">
                    <span class="step-text">Step 6 of 6</span>
                    <div class="step-indicators d-flex align-items-center">
                        <div class="step">1</div>
                        <div class="step-line"></div>
                        <div class="step">2</div>
                        <div class="step-line"></div>
                        <div class="step">3</div>
                        <div class="step-line"></div>
                        <div class="step">4</div>
                        <div class="step-line"></div>
                        <div class="step">5</div>
                        <div class="step-line"></div>
                        <div class="step active">6</div>
                    </div>
                </div>

                <!-- Form Header -->
                <div class="form-title-area mb-5">
                    <div class="step-label" style="color: #ff931e; font-weight: 600; font-size: 14px; margin-bottom: 8px; text-transform: uppercase;">STEP 6 OF 6</div>
                    <h2 class="form-title" style="font-weight: 700; color: #111; margin-bottom: 10px;">Your Details & Project Summary</h2>
                    <p class="form-mandatory-text" style="color: #666; margin-bottom: 40px;">Please review your information before submission.</p>
                </div>

                <!-- Summary Boxes -->
                <div class="row g-4 mb-5">
                    <!-- Left Box: Your Details -->
                    <div class="col-md-6">
                        <div style="border: 1px solid #ddd; border-radius: 12px; padding: 35px 30px; height: 100%;">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 style="font-size: 1.2rem; font-weight: 700; color: #111; margin: 0;">Your Details</h4>
                                <a href="javascript:void(0)" onclick="document.getElementById('step6-container').style.display='none'; document.getElementById('step1-container').style.display='block'; window.scrollTo(0,0);" style="color: #007bff; font-weight: 600; font-size: 0.9rem; text-decoration: none;">Edit <i class="fa-solid fa-pen ms-1" style="font-size: 0.8rem;"></i></a>
                            </div>
                            <div class="mb-4">
                                <div style="font-size: 0.95rem; font-weight: 600; color: #111;">Name</div>
                                <div id="summaryName" style="font-size: 0.95rem; color: #666;">Rohit Sharma</div>
                            </div>
                            <div class="mb-4">
                                <div style="font-size: 0.95rem; font-weight: 600; color: #111;">Company</div>
                                <div id="summaryCompany" style="font-size: 0.95rem; color: #666;">Acme Engineering Pvt. Ltd.</div>
                            </div>
                            <div class="mb-4">
                                <div style="font-size: 0.95rem; font-weight: 600; color: #111;">Mobile</div>
                                <div id="summaryMobile" style="font-size: 0.95rem; color: #666;">+91 98765 43200</div>
                            </div>
                            <div class="mb-4">
                                <div style="font-size: 0.95rem; font-weight: 600; color: #111;">Email</div>
                                <div id="summaryEmail" style="font-size: 0.95rem; color: #666;">rohit.sharma@acme.com</div>
                            </div>
                            <div>
                                <div style="font-size: 0.95rem; font-weight: 600; color: #111;">City</div>
                                <div id="summaryLocation" style="font-size: 0.95rem; color: #666;">Pune, Maharashtra, India</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Box: Project Summary -->
                    <div class="col-md-6">
                        <div style="border: 1px solid #ddd; border-radius: 12px; padding: 35px 30px; height: 100%;">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 style="font-size: 1.2rem; font-weight: 700; color: #111; margin: 0;">Project Summary</h4>
                                <a href="javascript:void(0)" onclick="document.getElementById('step6-container').style.display='none'; document.getElementById('step3-container').style.display='block'; window.scrollTo(0,0);" style="color: #007bff; font-weight: 600; font-size: 0.9rem; text-decoration: none;">Edit <i class="fa-solid fa-pen ms-1" style="font-size: 0.8rem;"></i></a>
                            </div>

                            <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Part / Project Name</span>
                                <span id="summaryProjectName" style="color: #666; font-size: 0.95rem; text-align: right;">Very Small (< 10 mm)</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Object Size (Largest Dimension)</span>
                                <span id="summaryObjectSize" style="color: #666; font-size: 0.95rem; text-align: right;">Very Small (< 10 mm)</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Dimensions</span>
                                <span id="summaryDimensions" style="color: #666; font-size: 0.95rem; text-align: right;">850 x 630 x 460</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Accuracy</span>
                                <span id="summaryAccuracy" style="color: #666; font-size: 0.95rem; text-align: right;">High Precision</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Service Location</span>
                                <span id="summaryServiceLocation" style="color: #666; font-size: 0.95rem; text-align: right;">Walk-in at Precise3DM Office</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Quantity of Parts</span>
                                <span id="summaryQuantity" style="color: #666; font-size: 0.95rem; text-align: right;">10 -100</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-start py-3" id="appServiceRow" style="border-bottom: 1px solid #eee;">
                                <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Application & Service</span>
                                <span id="summaryApplication" style="color: #666; font-size: 0.95rem; text-align: right;">3D Scanning (Only)</span>
                            </div>

                            <!-- Dynamic Section: 3D Scanning Only -->
                            <div id="summaryScanningSection" style="display: none;">
                                <div class="d-flex justify-content-between align-items-start py-3">
                                    <span style="font-size: 0.95rem; font-weight: 600; color: #111;">3D Scanning</span>
                                    <span id="summaryScanningType" style="color: #666; font-size: 0.95rem; text-align: right;">Lidar Laser 3D scanning</span>
                                </div>
                            </div>

                            <!-- Dynamic Section: 3D Scanning + Inspection -->
                            <div id="summaryInspectionSection" style="display: none;">
                                <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                    <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Reference 3D CAD Model or 2D drawing available</span>
                                    <span id="summaryInspectionRef" style="color: #666; font-size: 0.95rem; text-align: right;">Yes</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-start py-3">
                                    <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Deliverables</span>
                                    <span id="summaryInspectionDeliverables" style="color: #666; font-size: 0.95rem; text-align: right;">.PPT (PowerPoint)<br>.3D PDF</span>
                                </div>
                            </div>

                            <!-- Dynamic Section: 3D Scanning + Reverse Engineering -->
                            <div id="summaryReverseSection" style="display: none;">
                                <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                    <span style="font-size: 0.95rem; font-weight: 600; color: #111;">End use of the reverse engineering data</span>
                                    <span id="summaryReverseEndUse" style="color: #666; font-size: 0.95rem; text-align: right;">Assembly fitment checking</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                    <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Deliverables</span>
                                    <span id="summaryReverseDeliverables" style="color: #666; font-size: 0.95rem; text-align: right;">STL mesh file<br>STEP / IGES CAD file<br>2D manufacturing drawing</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                    <span style="font-size: 0.95rem; font-weight: 600; color: #111;">CAD software format</span>
                                    <span id="summaryReverseCadFormat" style="color: #666; font-size: 0.95rem; text-align: right;">SolidWorks (.SLDPRT)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-start py-3" style="border-bottom: 1px solid #eee;">
                                    <span style="font-size: 0.95rem; font-weight: 600; color: #111;">2D manufacturing drawings</span>
                                    <span id="summaryReverse2dDrawings" style="color: #666; font-size: 0.95rem; text-align: right;">Overall dimensions only</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-start py-3">
                                    <span style="font-size: 0.95rem; font-weight: 600; color: #111;">Existing 2D drawing</span>
                                    <span id="summaryReverseExisting2d" style="color: #666; font-size: 0.95rem; text-align: right;">Yes</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Confirmation Checkbox -->
                <div class="custom-checkbox-wrapper mb-5 mt-4">
                    <div class="form-check d-flex align-items-center">
                        <input type="checkbox" class="form-check-input mt-0 me-3" id="confirmSummary" required>
                        <label class="form-check-label px-2" for="confirmSummary" style="font-size: 16px; color: #555; font-weight: 500;">
                            I confirm that the above information is correct.
                        </label>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="border-top pt-4 mt-4 d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-back" onclick="goBackFromStep6()">
                        <i class="fa-solid fa-arrow-left"></i> Back
                    </button>
                    <button type="button" class="btn-continue" id="step6SubmitBtn" disabled style="opacity: 0.6; cursor: not-allowed;">
                        Submit Requirement <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Thank You Page (Step 7) -->
        <div id="step7-container" style="display: none; background-color: #f6f6fa; padding: 20px 5% 60px 5%;">
            <div class="container-fluid" style="background: #fff; padding: 4% 5%; border-radius: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                <div class="row align-items-center mb-4">
                    <!-- Left Box: What Happens Next -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                        <div style="border: 1px solid #e0e0e0; border-radius: 16px; padding: 40px 35px;">
                            <h3 style="font-size: 1.4rem; font-weight: 700; color: #111; margin-bottom: 28px;">What Happens Next?</h3>
                            <ul class="list-unstyled" style="display: flex; flex-direction: column; gap: 22px; margin: 0;">
                                <li class="d-flex align-items-center" style="font-size: 1.1rem; color: #444; font-weight: 500;">
                                    <i class="fa-solid fa-circle-check me-3" style="color: #198754; font-size: 1.3rem; margin-right: 10px;"></i> We will review your requirement
                                </li>
                                <li class="d-flex align-items-center" style="font-size: 1.1rem; color: #444; font-weight: 500;">
                                    <i class="fa-solid fa-circle-check me-3" style="color: #198754; font-size: 1.3rem; margin-right: 10px;"></i> Our team will contact you within 24 hours
                                </li>
                                <li class="d-flex align-items-center" style="font-size: 1.1rem; color: #444; font-weight: 500;">
                                    <i class="fa-solid fa-circle-check me-3" style="color: #198754; font-size: 1.3rem; margin-right: 10px;"></i> We may request additional information if needed
                                </li>
                                <li class="d-flex align-items-center" style="font-size: 1.1rem; color: #444; font-weight: 500;">
                                    <i class="fa-solid fa-circle-check me-3" style="color: #198754; font-size: 1.3rem; margin-right: 10px;"></i> You will receive a proposal and timeline
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Right Side: Image -->
                    <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="assets/images/3d-service-request/footer-logo.png" alt="Precise3DM Logo" style="max-width: 280px; height: auto;">
                    </div>
                </div>

                <!-- Bottom Box: Thank You message -->
                <div style="border: 1px solid #ff931e; background-color: #fff5e9; border-radius: 16px; padding: 40px 45px; margin-top: 20px; margin-bottom: 40px;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: #111; margin-bottom: 15px;">Thank You!</h2>
                    <p style="font-size: 1.15rem; color: #444; margin: 0; line-height: 1.7;">
                        Your requirement has been submitted successfully.<br>
                        We look forward to working with you.
                    </p>
                </div>

                <!-- Back to start button -->
                <div class="border-top pt-4 mt-2">
                    <button type="button" class="btn-back-start" onclick="location.reload()" style="border: 1px solid #777; background: #fff; border-radius: 10px; padding: 12px 28px; font-size: 1.05rem; font-weight: 500; color: #333; transition: all 0.2s ease; cursor: pointer;">
                        <i class="fa-solid fa-arrow-left me-2"></i> Back to Start
                    </button>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>

    <!-- Scripts -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        // Add this in your script section
        function showStep(stepNumber) {
            // Hide all steps first
            for (let i = 1; i <= 6; i++) {
                let step = document.getElementById('step' + i + '-container');
                if (step) step.style.display = 'none';
            }

            // Show only the target step
            let targetStep = document.getElementById('step' + stepNumber + '-container');
            if (targetStep) targetStep.style.display = 'block';

            // Scroll to top automatically
            window.scrollTo(0, 0);
        }
    </script>

    <script>
        $(document).ready(function() {

            // Step 1 Form Validation
            const step1Form = document.getElementById('step1Form');
            const step1ContinueBtn = document.getElementById('step1ContinueBtn');

            if (step1Form && step1ContinueBtn) {
                const checkStep1Validity = () => {
                    const requiredElements = step1Form.querySelectorAll('input[required], select[required]');
                    let isValid = true;

                    requiredElements.forEach(el => {
                        if (el.type === 'checkbox') {
                            if (!el.checked) isValid = false;
                        } else {
                            if (!el.value.trim()) isValid = false;
                        }
                    });

                    step1ContinueBtn.disabled = !isValid;
                    if (isValid) {
                        step1ContinueBtn.style.opacity = '1';
                        step1ContinueBtn.style.cursor = 'pointer';
                    } else {
                        step1ContinueBtn.style.opacity = '0.6';
                        step1ContinueBtn.style.cursor = 'not-allowed';
                    }
                };

                const requiredElements = step1Form.querySelectorAll('input[required], select[required]');
                requiredElements.forEach(el => {
                    el.addEventListener('input', checkStep1Validity);
                    el.addEventListener('change', checkStep1Validity);
                });

                checkStep1Validity();

                step1ContinueBtn.addEventListener('click', function() {
                    if (!this.disabled) {
                        document.getElementById('step1-container').style.display = 'none';
                        document.getElementById('step2-container').style.display = 'block';
                        window.scrollTo(0, 0);
                    }
                });
            }

            // File Upload Preview & Option Logic
            const fileUpload = document.getElementById('fileUpload');
            const filePreviewContainer = document.getElementById('filePreviewContainer');
            const uploadedFilesSection = document.getElementById('uploadedFilesSection');
            const fileCount = document.getElementById('fileCount');
            const clearAllFiles = document.getElementById('clearAllFiles');
            const confidentialRadio = document.getElementById('confidentialRadio');
            const step2ContinueBtn = document.getElementById('step2ContinueBtn');
            let selectedFiles = [];

            const validateStep2 = () => {
                if (step2ContinueBtn) {
                    step2ContinueBtn.disabled = false;
                    step2ContinueBtn.style.opacity = '1';
                    step2ContinueBtn.style.cursor = 'pointer';
                }
            };

            if (fileUpload && filePreviewContainer && uploadedFilesSection) {
                fileUpload.addEventListener('change', function() {
                    if (this.files && this.files.length > 0) {
                        // Uncheck radios if files are uploaded
                        if (confidentialRadio) confidentialRadio.checked = false;

                        Array.from(this.files).forEach(file => {
                            if (file.size > 52428800) {
                                alert(`File "${file.name}" exceeds the 50MB size limit and will not be uploaded.`);
                            } else {
                                selectedFiles.push(file);
                            }
                        });

                        renderFiles();
                    }
                });

                const renderFiles = () => {
                    filePreviewContainer.innerHTML = '';
                    if (selectedFiles.length > 0) {
                        uploadedFilesSection.style.display = 'block';
                        fileCount.innerText = selectedFiles.length;

                        selectedFiles.forEach((file, index) => {
                            const fileBox = document.createElement('div');
                            fileBox.className = 'border bg-white position-relative d-flex flex-column align-items-center justify-content-center p-3 shadow-sm';
                            fileBox.style.width = '140px';
                            fileBox.style.height = '140px';
                            fileBox.style.borderRadius = '8px';

                            const sizeMB = (file.size / (1024 * 1024)).toFixed(1);
                            const lowerName = file.name.toLowerCase();

                            let mediaHtml = '';
                            if (file.type.startsWith('image/') || lowerName.endsWith('.jpg') || lowerName.endsWith('.jpeg') || lowerName.endsWith('.png')) {
                                const objUrl = URL.createObjectURL(file);
                                mediaHtml = `<img src="${objUrl}" style="width: 65px; height: 65px; object-fit: contain; margin-bottom: 8px;" alt="preview">`;
                            } else {
                                let fileIcon = 'fa-file';
                                let iconColor = '#888';
                                if (file.type === 'application/pdf' || lowerName.endsWith('.pdf')) {
                                    fileIcon = 'fa-file-pdf';
                                    iconColor = '#F44336';
                                } else if (lowerName.endsWith('.step') || lowerName.endsWith('.stp') || lowerName.endsWith('.stl') || lowerName.endsWith('.obj') || lowerName.endsWith('.dxf')) {
                                    fileIcon = 'fa-cube';
                                    iconColor = '#ff931e';
                                }
                                mediaHtml = `<i class="fa-solid ${fileIcon}" style="font-size: 3rem; color: ${iconColor}; margin-bottom: 12px;"></i>`;
                            }

                            fileBox.innerHTML = `
                                <i class="fa-solid fa-xmark" onclick="removeFile(${index})" style="position: absolute; top: 10px; right: 10px; color: #d9534f; cursor: pointer; font-size: 1.1rem;"></i>
                                ${mediaHtml}
                                <div class="text-dark" style="font-size: 0.85rem; font-weight: 600; text-align: center; width: 100%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" title="${file.name}">${file.name}</div>
                                <div style="font-size: 0.75rem; color: #888; margin-top: 2px;">${sizeMB} MB</div>
                            `;
                            filePreviewContainer.appendChild(fileBox);
                        });
                    } else {
                        uploadedFilesSection.style.display = 'none';
                        fileUpload.value = '';
                    }
                    validateStep2();
                };

                window.removeFile = function(index) {
                    selectedFiles.splice(index, 1);
                    renderFiles();
                };

                clearAllFiles.addEventListener('click', function() {
                    selectedFiles = [];
                    renderFiles();
                });

                const handleRadioChange = function() {
                    if (this.checked) {
                        selectedFiles = [];
                        renderFiles();
                    }
                    validateStep2();
                };

                if (confidentialRadio) confidentialRadio.addEventListener('change', handleRadioChange);

                if (step2ContinueBtn) {
                    step2ContinueBtn.addEventListener('click', function(e) {
                        // Proceed to next step logic
                        document.getElementById('step2-container').style.display = 'none';
                        document.getElementById('step3-container').style.display = 'block';
                        window.scrollTo(0, 0);
                    });
                }

                // Initial validation check
                validateStep2();
            }

            // Step 3 Form Validation & Navigation
            const step3Form = document.getElementById('step3Form');
            const step3NextBtn = document.getElementById('step3NextBtn');
            if (step3Form && step3NextBtn) {
                const checkStep3Validity = () => {
                    const pName = document.getElementById('projectName')?.value.trim();
                    const pLen = document.getElementById('partLength')?.value.trim();
                    const pWid = document.getElementById('partWidth')?.value.trim();
                    const pHei = document.getElementById('partHeight')?.value.trim();
                    const objSize = step3Form.querySelector('input[name="objectSize"]:checked');
                    const reqAcc = step3Form.querySelector('input[name="requiredAccuracy"]:checked');
                    const locPref = step3Form.querySelector('input[name="locationPreference"]:checked');

                    const isValid = true;
                    step3NextBtn.disabled = !isValid;
                    if (isValid) {
                        step3NextBtn.style.opacity = '1';
                        step3NextBtn.style.cursor = 'pointer';
                    } else {
                        step3NextBtn.style.opacity = '0.6';
                        step3NextBtn.style.cursor = 'not-allowed';
                    }
                };

                step3Form.addEventListener('input', checkStep3Validity);
                step3Form.addEventListener('change', checkStep3Validity);
                checkStep3Validity();

                step3NextBtn.addEventListener('click', function() {
                    if (!this.disabled) {
                        document.getElementById('step3-container').style.display = 'none';
                        document.getElementById('step4-container').style.display = 'block';
                        window.scrollTo(0, 0);
                    }
                });
            }

            // Step 4 Form Validation & Navigation
            const step4Form = document.getElementById('step4Form');
            const step4NextBtn = document.getElementById('step4NextBtn');
            if (step4Form && step4NextBtn) {
                const checkStep4Validity = () => {
                    const appType = step4Form.querySelector('input[name="applicationType"]:checked');
                    const otherInput = step4Form.querySelector('input[name="applicationOther"]');
                    let isValid = true;

                    if (appType) {
                        if (appType.value === 'Other') {
                            if (otherInput) {
                                otherInput.disabled = false;
                            }
                        } else {
                            if (otherInput) {
                                otherInput.disabled = true;
                                otherInput.value = '';
                            }
                        }
                    } else {
                        if (otherInput) {
                            otherInput.disabled = true;
                        }
                    }

                    step4NextBtn.disabled = !isValid;
                    if (isValid) {
                        step4NextBtn.style.opacity = '1';
                        step4NextBtn.style.cursor = 'pointer';
                    } else {
                        step4NextBtn.style.opacity = '0.6';
                        step4NextBtn.style.cursor = 'not-allowed';
                    }
                };

                step4Form.addEventListener('input', checkStep4Validity);
                step4Form.addEventListener('change', checkStep4Validity);
                checkStep4Validity();

                step4NextBtn.addEventListener('click', function() {
                    if (!this.disabled) {
                        const selectedApp = step4Form.querySelector('input[name="applicationType"]:checked')?.value;
                        document.getElementById('step4-container').style.display = 'none';
                        
                        if (selectedApp === '3D Scanning (Only)') {
                            document.getElementById('step5-container-scanning').style.display = 'block';
                        } else if (selectedApp === '3D Scanning + Inspection') {
                            const insp = document.getElementById('step5-container-inspection');
                            if (insp) insp.style.display = 'block';
                            else document.getElementById('step5-container-scanning').style.display = 'block';
                        } else if (selectedApp === '3D Scanning + Reverse Engineering') {
                            const rev = document.getElementById('step5-container-reverse');
                            if (rev) rev.style.display = 'block';
                            else document.getElementById('step5-container-scanning').style.display = 'block';
                        } else {
                            document.getElementById('step5-container-scanning').style.display = 'block';
                        }
                        window.scrollTo(0, 0);
                    }
                });
            }

            // Step 5 Scanning Form Validation
            const step5ScanningForm = document.getElementById('step5ScanningForm');
            const step5ScanningNextBtn = document.getElementById('step5ScanningNextBtn');
            if (step5ScanningForm && step5ScanningNextBtn) {
                const checkStep5ScanningValidity = () => {
                    const scanSol = step5ScanningForm.querySelector('input[name="scanningSolution"]:checked');
                    const isValid = !!scanSol;
                    step5ScanningNextBtn.disabled = !isValid;
                    if (isValid) {
                        step5ScanningNextBtn.style.opacity = '1';
                        step5ScanningNextBtn.style.cursor = 'pointer';
                    } else {
                        step5ScanningNextBtn.style.opacity = '0.6';
                        step5ScanningNextBtn.style.cursor = 'not-allowed';
                    }
                };

                step5ScanningForm.addEventListener('input', checkStep5ScanningValidity);
                step5ScanningForm.addEventListener('change', checkStep5ScanningValidity);
                checkStep5ScanningValidity();

                step5ScanningNextBtn.addEventListener('click', function() {
                    if (!this.disabled) {
                        document.getElementById('step5-container-scanning').style.display = 'none';
                        populateStep6Summary();
                        const step6 = document.getElementById('step6-container');
                        if (step6) step6.style.display = 'block';
                        window.scrollTo(0, 0);
                    }
                });
            }

            // Step 5 Inspection Form Validation
            const step5InspectionForm = document.getElementById('step5InspectionForm');
            const step5InspectionNextBtn = document.getElementById('step5InspectionNextBtn');
            if (step5InspectionForm && step5InspectionNextBtn) {
                const checkStep5InspectionValidity = () => {
                    const hasRef = step5InspectionForm.querySelector('input[name="hasReferenceModel"]:checked');
                    const hasFmt = step5InspectionForm.querySelector('input[name="outputFormat[]"]:checked');
                    const otherInput = step5InspectionForm.querySelector('input[name="inspectionOther"]');
                    let isValid = false;

                    if (hasRef) {
                        if (hasRef.value === 'Yes') {
                            if (otherInput) {
                                otherInput.disabled = true;
                                otherInput.value = '';
                            }
                            isValid = !!hasFmt;
                        } else if (hasRef.value === 'No') {
                            if (otherInput) {
                                otherInput.disabled = false;
                                isValid = otherInput.value.trim() !== '';
                            }
                        }
                    } else {
                        if (otherInput) {
                            otherInput.disabled = true;
                        }
                    }
                    isValid = true;

                    step5InspectionNextBtn.disabled = !isValid;
                    if (isValid) {
                        step5InspectionNextBtn.style.opacity = '1';
                        step5InspectionNextBtn.style.cursor = 'pointer';
                    } else {
                        step5InspectionNextBtn.style.opacity = '0.6';
                        step5InspectionNextBtn.style.cursor = 'not-allowed';
                    }
                };

                step5InspectionForm.addEventListener('input', checkStep5InspectionValidity);
                step5InspectionForm.addEventListener('change', checkStep5InspectionValidity);
                checkStep5InspectionValidity();

                step5InspectionNextBtn.addEventListener('click', function() {
                    if (!this.disabled) {
                        document.getElementById('step5-container-inspection').style.display = 'none';
                        populateStep6Summary();
                        const step6 = document.getElementById('step6-container');
                        if (step6) step6.style.display = 'block';
                        window.scrollTo(0, 0);
                    }
                });
            }

            // Step 5 Reverse Engineering Form Validation
            const step5ReverseForm = document.getElementById('step5ReverseForm');
            const step5ReverseNextBtn = document.getElementById('step5ReverseNextBtn');
            if (step5ReverseForm && step5ReverseNextBtn) {
                const checkStep5ReverseValidity = () => {
                    // 1. End Use Checkbox & Other Input
                    const endUseChecked = Array.from(step5ReverseForm.querySelectorAll('input[name="endUse[]"]:checked'));
                    const reverseOtherInput = step5ReverseForm.querySelector('input[name="reverseOther"]');
                    let hasUse = false;

                    if (endUseChecked.length > 0) {
                        const hasOtherChecked = endUseChecked.some(cb => cb.value === 'Other');
                        if (hasOtherChecked) {
                            if (reverseOtherInput) {
                                reverseOtherInput.disabled = false;
                                hasUse = reverseOtherInput.value.trim() !== '';
                            }
                        } else {
                            if (reverseOtherInput) {
                                reverseOtherInput.disabled = true;
                                reverseOtherInput.value = '';
                            }
                            hasUse = true;
                        }
                    } else {
                        if (reverseOtherInput) {
                            reverseOtherInput.disabled = true;
                        }
                        hasUse = false;
                    }

                    // 2. Required Output Checkboxes
                    const hasReqOut = !!step5ReverseForm.querySelector('input[name="requiredOutput[]"]:checked');

                    // 3. Specific CAD Format & Preferred CAD Software & Other CAD Software Input
                    const specCad = step5ReverseForm.querySelector('input[name="specificCadFormat"]:checked');
                    const otherCadInput = step5ReverseForm.querySelector('input[name="otherCadSoftware"]');
                    const prefCadCheckboxes = step5ReverseForm.querySelectorAll('input[name="preferredCad[]"]');
                    let hasPrefCad = false;

                    if (specCad) {
                        if (specCad.value.indexOf('No') !== -1) {
                            prefCadCheckboxes.forEach(cb => {
                                cb.disabled = true;
                                cb.checked = false;
                            });
                            if (otherCadInput) {
                                otherCadInput.disabled = true;
                                otherCadInput.value = '';
                            }
                            hasPrefCad = true;
                        } else {
                            // Yes is selected
                            prefCadCheckboxes.forEach(cb => {
                                cb.disabled = false;
                            });
                            const prefCadChecked = Array.from(step5ReverseForm.querySelectorAll('input[name="preferredCad[]"]:checked'));
                            if (prefCadChecked.length > 0) {
                                const hasNotSureChecked = prefCadChecked.some(cb => cb.value === 'Not Sure — Please Recommend the Best Format');
                                if (hasNotSureChecked) {
                                    if (otherCadInput) {
                                        otherCadInput.disabled = false;
                                        hasPrefCad = otherCadInput.value.trim() !== '';
                                    }
                                } else {
                                    if (otherCadInput) {
                                        otherCadInput.disabled = true;
                                        otherCadInput.value = '';
                                    }
                                    hasPrefCad = true;
                                }
                            } else {
                                if (otherCadInput) {
                                    otherCadInput.disabled = true;
                                }
                                hasPrefCad = false;
                            }
                        }
                    } else {
                        prefCadCheckboxes.forEach(cb => {
                            cb.disabled = true;
                            cb.checked = false;
                        });
                        if (otherCadInput) {
                            otherCadInput.disabled = true;
                        }
                        hasPrefCad = false;
                    }

                    // 4. 2D Manufacturing Drawings
                    const has2d = step5ReverseForm.querySelector('input[name="need2dDrawings"]:checked');
                    const drawingDetailsCheckboxes = step5ReverseForm.querySelectorAll('input[name="drawingDetails[]"]');
                    let hasDrawingDetails = false;

                    if (has2d) {
                        if (has2d.value === 'Yes') {
                            drawingDetailsCheckboxes.forEach(cb => {
                                cb.disabled = false;
                            });
                            hasDrawingDetails = !!step5ReverseForm.querySelector('input[name="drawingDetails[]"]:checked');
                        } else {
                            // No or Not sure is selected
                            drawingDetailsCheckboxes.forEach(cb => {
                                cb.disabled = true;
                                cb.checked = false;
                            });
                            hasDrawingDetails = true;
                        }
                    } else {
                        drawingDetailsCheckboxes.forEach(cb => {
                            cb.disabled = true;
                            cb.checked = false;
                        });
                        hasDrawingDetails = false;
                    }

                    const isValid = true;
                    step5ReverseNextBtn.disabled = !isValid;
                    if (isValid) {
                        step5ReverseNextBtn.style.opacity = '1';
                        step5ReverseNextBtn.style.cursor = 'pointer';
                    } else {
                        step5ReverseNextBtn.style.opacity = '0.6';
                        step5ReverseNextBtn.style.cursor = 'not-allowed';
                    }
                };

                step5ReverseForm.addEventListener('input', checkStep5ReverseValidity);
                step5ReverseForm.addEventListener('change', checkStep5ReverseValidity);
                checkStep5ReverseValidity();

                step5ReverseNextBtn.addEventListener('click', function() {
                    if (!this.disabled) {
                        document.getElementById('step5-container-reverse').style.display = 'none';
                        populateStep6Summary();
                        const step6 = document.getElementById('step6-container');
                        if (step6) step6.style.display = 'block';
                        window.scrollTo(0, 0);
                    }
                });
            }

            // Step 6 Summary Population & Navigation
            window.goBackFromStep6 = function() {
                document.getElementById('step6-container').style.display = 'none';
                const selectedApp = document.querySelector('input[name="applicationType"]:checked')?.value;
                if (selectedApp === '3D Scanning (Only)' || selectedApp === 'Other') {
                    document.getElementById('step5-container-scanning').style.display = 'block';
                } else if (selectedApp === '3D Scanning + Inspection') {
                    document.getElementById('step5-container-inspection').style.display = 'block';
                } else if (selectedApp === '3D Scanning + Reverse Engineering') {
                    document.getElementById('step5-container-reverse').style.display = 'block';
                } else {
                    document.getElementById('step5-container-scanning').style.display = 'block';
                }
                window.scrollTo(0, 0);
            };

            window.populateStep6Summary = function() {
                // Step 1 Details
                const fullName = $('#fullName').val() || '';
                $('#summaryName').text(fullName.trim() || 'Rohit Sharma');
                $('#summaryCompany').text($('#companyName').val() || 'Acme Engineering Pvt. Ltd.');
                const dial = $('#dialCodeSelect').val() || '+91';
                const phone = $('#phoneNumber').val() || '';
                $('#summaryMobile').text(phone ? `${dial} ${phone}` : '+91 98765 43200');
                $('#summaryEmail').text($('#emailAddress').val() || 'rohit.sharma@acme.com');
                const city = $('#citySelect').val() || 'Pune';
                const state = $('#stateSelect').val() || 'Maharashtra';
                const country = $('#countrySelect').val() || 'India';
                $('#summaryLocation').text(`${city}, ${state}, ${country}`);

                // Step 3 Details
                $('#summaryProjectName').text($('#projectName').val() || 'Very Small (< 10 mm)');
                const objSize = $('input[name="objectSize"]:checked').val() || 'Very Small (< 10 mm)';
                $('#summaryObjectSize').text(objSize);
                const l = $('#partLength').val() || '850';
                const w = $('#partWidth').val() || '630';
                const h = $('#partHeight').val() || '460';
                $('#summaryDimensions').text(`${l} × ${w} × ${h}`);
                const acc = $('input[name="requiredAccuracy"]:checked').val() || 'High Precision';
                $('#summaryAccuracy').text(acc);
                const loc = $('input[name="locationPreference"]:checked').val() || 'Walk-in at Precise3DM Office';
                $('#summaryServiceLocation').text(loc);
                const qty = $('#partQuantity').val() || '10 -100';
                $('#summaryQuantity').text(qty);

                // Step 4 & 5 Details
                const appType = $('input[name="applicationType"]:checked').val() || '3D Scanning (Only)';
                if (appType === 'Other') {
                    $('#summaryApplication').text($('input[name="applicationOther"]').val() || 'Other');
                } else {
                    $('#summaryApplication').text(appType);
                }

                $('#summaryScanningSection, #summaryInspectionSection, #summaryReverseSection').hide();
                $('#appServiceRow').css('border-bottom', '1px solid #eee');

                if (appType === '3D Scanning (Only)' || appType === 'Other') {
                    $('#summaryScanningSection').show();
                    const scanType = $('input[name="scanningType"]:checked').val() || 'Lidar Laser 3D scanning';
                    $('#summaryScanningType').text(scanType);
                } else if (appType === '3D Scanning + Inspection') {
                    $('#summaryInspectionSection').show();
                    const ref = $('input[name="hasReferenceModel"]:checked').val() || 'Yes';
                    $('#summaryInspectionRef').text(ref);
                    let deliverables = [];
                    $('input[name="outputFormat[]"]:checked').each(function() {
                        deliverables.push($(this).val());
                    });
                    const otherInsp = $('input[name="inspectionOther"]').val();
                    if (otherInsp && otherInsp.trim() !== '') deliverables.push(otherInsp.trim());
                    if (deliverables.length === 0) deliverables.push('.PPT (PowerPoint)', '.3D PDF');
                    $('#summaryInspectionDeliverables').html(deliverables.join('<br>'));
                } else if (appType === '3D Scanning + Reverse Engineering') {
                    $('#summaryReverseSection').show();
                    let endUses = [];
                    $('input[name="endUse[]"]:checked').each(function() {
                        if ($(this).val() === 'Other') {
                            const otherUse = $('input[name="reverseOther"]').val();
                            if (otherUse && otherUse.trim() !== '') endUses.push(otherUse.trim());
                        } else {
                            endUses.push($(this).val());
                        }
                    });
                    if (endUses.length === 0) endUses.push('Assembly fitment checking');
                    $('#summaryReverseEndUse').html(endUses.join('<br>'));

                    let reqOutputs = [];
                    $('input[name="requiredOutput[]"]:checked').each(function() {
                        reqOutputs.push($(this).val());
                    });
                    if (reqOutputs.length === 0) reqOutputs.push('STL mesh file', 'STEP / IGES CAD file', '2D manufacturing drawing');
                    $('#summaryReverseDeliverables').html(reqOutputs.join('<br>'));

                    const specCad = $('input[name="specificCadFormat"]:checked').val();
                    if (specCad && specCad.indexOf('No') !== -1) {
                        $('#summaryReverseCadFormat').text('Standard 3D CAD file (STEP / IGES)');
                    } else {
                        let prefCads = [];
                        $('input[name="preferredCad[]"]:checked').each(function() {
                            if ($(this).val() === 'Not Sure — Please Recommend the Best Format') {
                                const otherCad = $('input[name="otherCadSoftware"]').val();
                                if (otherCad && otherCad.trim() !== '') prefCads.push(otherCad.trim());
                                else prefCads.push('Not Sure — Please Recommend');
                            } else {
                                prefCads.push($(this).val());
                            }
                        });
                        if (prefCads.length === 0) prefCads.push('SolidWorks (.SLDPRT)');
                        $('#summaryReverseCadFormat').html(prefCads.join('<br>'));
                    }

                    const need2d = $('input[name="need2dDrawings"]:checked').val() || 'Yes';
                    $('#summaryReverseExisting2d').text(need2d);

                    if (need2d === 'Yes') {
                        let drawDetails = [];
                        $('input[name="drawingDetails[]"]:checked').each(function() {
                            drawDetails.push($(this).val());
                        });
                        if (drawDetails.length === 0) drawDetails.push('Overall dimensions only');
                        $('#summaryReverse2dDrawings').html(drawDetails.join('<br>')).parent().show();
                    } else {
                        $('#summaryReverse2dDrawings').parent().hide();
                    }
                }
            };

            $('#confirmSummary').on('change', function() {
                const btn = $('#step6SubmitBtn');
                if ($(this).is(':checked')) {
                    btn.prop('disabled', false).css({opacity: 1, cursor: 'pointer'});
                } else {
                    btn.prop('disabled', true).css({opacity: 0.6, cursor: 'not-allowed'});
                }
            });

            $('#step6SubmitBtn').on('click', function() {
                if ($(this).prop('disabled')) return;
                
                const origText = $(this).html();
                $(this).prop('disabled', true).html('Submitting... <i class="fa-solid fa-spinner fa-spin"></i>');

                const payload = {
                    name: $('#summaryName').text(),
                    company: $('#summaryCompany').text(),
                    mobile: $('#summaryMobile').text(),
                    email: $('#summaryEmail').text(),
                    location: $('#summaryLocation').text(),
                    projectName: $('#summaryProjectName').text(),
                    objectSize: $('#summaryObjectSize').text(),
                    dimensions: $('#summaryDimensions').text(),
                    accuracy: $('#summaryAccuracy').text(),
                    serviceLocation: $('#summaryServiceLocation').text(),
                    quantity: $('#summaryQuantity').text() || '1',
                    applicationType: $('#summaryApplicationType').text(),
                    scanningType: $('#summaryScanningType').length ? $('#summaryScanningType').text() : '',
                    inspectionRef: $('#summaryInspectionRef').length ? $('#summaryInspectionRef').text() : '',
                    inspectionDeliverables: $('#summaryInspectionDeliverables').length ? $('#summaryInspectionDeliverables').html() : '',
                    reverseEndUse: $('#summaryReverseEndUse').length ? $('#summaryReverseEndUse').text() : '',
                    reverseDeliverables: $('#summaryReverseDeliverables').length ? $('#summaryReverseDeliverables').html() : '',
                    reverseCadFormat: $('#summaryReverseCadFormat').length ? $('#summaryReverseCadFormat').text() : '',
                    reverseExisting2d: $('#summaryReverseExisting2d').length ? $('#summaryReverseExisting2d').text() : '',
                    reverse2dDrawings: $('#summaryReverse2dDrawings').length ? $('#summaryReverse2dDrawings').html() : ''
                };

                fetch('process-3d-service-request.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                })
                .then(res => res.json())
                .then(data => {
                    document.getElementById('step6-container').style.display = 'none';
                    document.getElementById('step7-container').style.display = 'block';
                    window.scrollTo(0, 0);
                })
                .catch(err => {
                    console.error('Submit error:', err);
                    document.getElementById('step6-container').style.display = 'none';
                    document.getElementById('step7-container').style.display = 'block';
                    window.scrollTo(0, 0);
                });
            });

            if ($('#step6-container').is(':visible')) {
                populateStep6Summary();
            }

            // Country Change Event -> Fetch States
            $('#countrySelect').on('change', function() {
                let selectedCountry = $(this).val();
                let stateSelect = $('#stateSelect');
                let citySelect = $('#citySelect');

                stateSelect.html('<option value="" selected disabled>Loading states...</option>').prop('disabled', true);
                citySelect.html('<option value="" selected disabled>Enter your city</option>').prop('disabled', true);

                if (selectedCountry) {
                    fetch('https://countriesnow.space/api/v0.1/countries/states', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                country: selectedCountry
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (!data.error && data.data && data.data.states && data.data.states.length > 0) {
                                let stateHtml = '<option value="" selected disabled>Enter your state</option>';
                                data.data.states.forEach(state => {
                                    stateHtml += `<option value="${state.name}">${state.name}</option>`;
                                });
                                stateSelect.html(stateHtml).prop('disabled', false);
                            } else {
                                stateSelect.html('<option value="N/A" selected>No states available</option>').prop('disabled', false);
                                document.getElementById('stateSelect').dispatchEvent(new Event('change'));
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching states:', error);
                            stateSelect.html('<option value="N/A" selected>No states available</option>').prop('disabled', false);
                            document.getElementById('stateSelect').dispatchEvent(new Event('change'));
                        });
                } else {
                    stateSelect.prop('disabled', true);
                }
            });

            // State Change Event -> Fetch Cities
            $('#stateSelect').on('change', function() {
                let selectedCountry = $('#countrySelect').val();
                let selectedState = $(this).val();
                let citySelect = $('#citySelect');

                citySelect.html('<option value="" selected disabled>Loading cities...</option>').prop('disabled', true);

                if (selectedCountry && selectedState) {
                    fetch('https://countriesnow.space/api/v0.1/countries/state/cities', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                country: selectedCountry,
                                state: selectedState
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (!data.error && data.data.length > 0) {
                                let cityHtml = '<option value="" selected disabled>Enter your city</option>';
                                data.data.forEach(city => {
                                    cityHtml += `<option value="${city}">${city}</option>`;
                                });
                                citySelect.html(cityHtml).prop('disabled', false);
                            } else {
                                citySelect.html('<option value="N/A" selected>No cities available</option>').prop('disabled', false);
                                document.getElementById('citySelect').dispatchEvent(new Event('change'));
                            }
                        })
                        .catch(error => {
                            console.error('Error fetching cities:', error);
                            citySelect.html('<option value="N/A" selected>Error loading cities</option>').prop('disabled', false);
                            document.getElementById('citySelect').dispatchEvent(new Event('change'));
                        });
                }
            });
        });
    </script>
</body>

</html>