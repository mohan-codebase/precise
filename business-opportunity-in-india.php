<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['fullname'])) {
    if (isset($_POST["hidden-input"]) && !empty($_POST["hidden-input"])) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    $fullname = $_POST['fullname'] ?? '';
    $companyname = $_POST['companyname'] ?? '';
    $city = $_POST['city'] ?? '';
    $industry = $_POST['industry'] ?? '';
    $services = $_POST['services'] ?? '';
    $category = $_POST['category'] ?? '';
    $budget = $_POST['budget'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

    $subject = "New Business Partner Application from " . $fullname;
    $to = "marketing@precise3dm.com";
    $from = "marketing@precise3dm.com";

    $body = "
    <h3>New Business Partner Application</h3>
    <p><strong>Full Name:</strong> {$fullname}</p>
    <p><strong>Company Name:</strong> {$companyname}</p>
    <p><strong>City:</strong> {$city}</p>
    <p><strong>Industry/Business Type:</strong> {$industry}</p>
    <p><strong>Existing Business/Services:</strong> {$services}</p>
    <p><strong>Interested Product Category:</strong> {$category}</p>
    <p><strong>Investment Budget Range:</strong> {$budget}</p>
    <p><strong>Phone Number:</strong> {$phone}</p>
    <p><strong>Email Address:</strong> {$email}</p>
    ";

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->SMTPDebug = false;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "precise3dmdre@gmail.com";
    $mail->Password = "nctdxqoxvqhflyaj";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->From = $from;
    $mail->FromName = "Precise3DM Business Partner Portal";
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    try {
        $mail->send();
        $form_status = "success";
    } catch (Exception $e) {
        $form_status = "failure";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name text-white="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> New business opportunity in india | Best ROI Return </title>
    <meta name="description" content="Best ROI return business opportunity in india, technology based inversment">
    <meta name="Keywords" content="business opportunity, ROI Return,">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="revisit-after" content="7 days" />
    <meta name="twitter:image" content="https://www.precise3dm.com/assets/images/FreeCan UE7/FreeCan UE7/broucheue7/AUTOMOTIVE BENCHMARKING SERVICE.png" />
    <meta name="twitter:card" content="Precise3dm" />
    <meta name="twitter:site" content="@precise3d_m" />
    <!-- <meta name="twitter:title" content="Precise3dm" /> -->
    <meta property="twitter:title" content="New business opportunity in india | Best ROI Return"/>
    <meta property="twitter:description" content="Best ROI return business opportunity in india, technology based inversment" />
    <meta property="og:type" content="3D Scanning" />
    <meta property="og:title" content="New business opportunity in india | Best ROI Return" />
    <meta property="og:url" content="https://www.precise3dm.com/buisness-opportunity-in-india.php" />
    <meta property="og:image" content="https://www.precise3dm.com/assets/images/FreeCan UE7/FreeCan UE7/broucheue7/AUTOMOTIVE BENCHMARKING SERVICE.png" />
    <meta property="og:description" content="Best ROI return business opportunity in india, technology based inversment." />
    <meta property="twitter:url" content="https://www.precise3dm.com/business-opportunity-in-india.php" />
    <link rel="canonical" href="https://www.precise3dm.com/business-opportunity-in-india.php"/>
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
    <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- custom css-->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/business-partner-new.css">


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
    "name": "Business Opportunity in India",
    "item": "https://www.precise3dm.com/business-opportunity-in-india.php"  
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.precise3dm.com/business-opportunity-in-india.php"
  },
  "headline": "New business opportunity in india | Best ROI Return",
  "description": "Best ROI return business opportunity in india, technology based inversment",
  "image": "https://www.precise3dm.com/assets/images/Precise%20Logos-08.png",  
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

<body class="business-partner-page">

    <!-- header start -->
    <?php include('includes/header.php'); ?>
    <!-- header end -->

    <!-- hero section start -->
    <section class="bp-hero-section">
        <div class="">
            <div class="bp-hero-card">
                <div class="row bp-hero-container align-items-center">
                    <div class="col-lg-6">
                        <div class="bp-hero-left">
                            <span class="bp-hero-subtitle">BUSINESS PARTNER PROGRAM</span>
                            <h1 class="bp-hero-title">
                                Build Your Own 3D
                                <span>Technology Business with</span>
                                <span class="brand-accent">Precise3DM</span>
                            </h1>
                            <p class="bp-hero-description">
                                Become an authorised regional business partner for industrial 3D scanners, reverse engineering software, Inspection solutions, and professional 3D printing technologies.
                            </p>
                            <p class="bp-hero-description">
                                Represent globally trusted technologies with the support of one of India's leading 3D scanning solution providers.
                            </p>
                            <div class="bp-hero-actions">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSclVLWG0-rp2lQuNOW31aebPBXkPi-s53wEwAa5fImN8x1cug/viewform" target="_blank" class="bp-btn bp-btn-primary">Become a Business Partner</a>
                                <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" target="_blank" class="bp-btn bp-btn-primary">Book a Live Online Meeting</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bp-hero-right">
                            <div class="bp-hero-image-wrapper">
                                <img src="assets/images/business/hero-right-img.png" alt="Partner Growth, Presence, Workflow, and Statistics" class="bp-hero-right-image img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- partner logos section start -->
    <section class="bp-partners-section">
        <div class="container-fluid max-width-container">
            <div class="bp-partners-row">
                <div class="bp-partner-logo">
                    <img src="assets/images/business/partner1.png" alt="Shining 3D" class="img-fluid">
                </div>
                <div class="bp-partner-logo">
                    <img src="assets/images/business/partner2.png" alt="Hexagon" class="img-fluid">
                </div>
                <div class="bp-partner-logo">
                    <img src="assets/images/business/partner3.png" alt="Geomagic Design X" class="img-fluid">
                </div>
                <div class="bp-partner-logo">
                    <img src="assets/images/business/partner4.png" alt="TrueProp Software" class="img-fluid">
                </div>
                <div class="bp-partner-logo">
                    <img src="assets/images/business/partner5.png" alt="Geomagic Control X" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- partner logos section end -->

    <!-- why partner section start -->
    <section class="bp-why-section">
        <div class="container">
            <div class="bp-why-header text-center">
                <span class="bp-why-subtitle">WHY PARTNER WITH PRECISE3DM?</span>
                <h2 class="bp-why-title">More Than a Dealer Program - A Complete Technology Business Ecosystem</h2>
            </div>
            <div class="row bp-why-grid">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-3 bp-why-col">
                    <div class="bp-why-card">
                        <div class="bp-why-icon-wrapper">
                            <img src="assets/images/business/why1.png" alt="Industrial 3D Scanner Portfolio" class="bp-why-icon">
                        </div>
                        <h3 class="bp-why-card-title">Industrial 3D Scanner Portfolio</h3>
                        <p class="bp-why-card-text">
                            Sell handheld scanners, structured light systems, laser tracking systems, LiDAR, photogrammetry, and metrology-grade inspection systems
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6 col-lg-3 bp-why-col">
                    <div class="bp-why-card">
                        <div class="bp-why-icon-wrapper">
                            <img src="assets/images/business/why2.png" alt="Reverse Engineering & Inspection Software" class="bp-why-icon">
                        </div>
                        <h3 class="bp-why-card-title">Reverse Engineering & Inspection Software</h3>
                        <p class="bp-why-card-text">
                            Offer professional solutions including Geomagic Design X, Geomagic Control X, SHINING 3D Inspect, TrueProp Software and more.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-6 col-lg-3 bp-why-col">
                    <div class="bp-why-card">
                        <div class="bp-why-icon-wrapper">
                            <img src="assets/images/business/why3.png" alt="Local Market Representation" class="bp-why-icon">
                        </div>
                        <h3 class="bp-why-card-title">Local Market Representation</h3>
                        <p class="bp-why-card-text">
                            Become the regional face of Precise 3D in your city or Industrial cluster and grow a trusted customer base.
                        </p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-6 col-lg-3 bp-why-col">
                    <div class="bp-why-card">
                        <div class="bp-why-icon-wrapper">
                            <img src="assets/images/business/why4.png" alt="Complete Technical & Sales Support" class="bp-why-icon">
                        </div>
                        <h3 class="bp-why-card-title">Complete Technical & Sales Support</h3>
                        <p class="bp-why-card-text">
                            From demos to installation, training, and online support our technical team supports your business growth
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why partner section end -->

    <!-- profiles and sell section start -->
    <section class="bp-profiles-section">
        <div class="container max-width-container">
            <div class="row">
                <!-- Left Card: Who Can Become a Partner -->
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="bp-split-card">
                        <span class="bp-split-subtitle">WHO CAN BECOME A PARTNER ?</span>
                        <h2 class="bp-split-title">Ideal Partner Profiles</h2>
                        
                        <div class="bp-who-grid">
                            <!-- Item 1 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who1.png" alt="Industrial Automation Companies" class="bp-who-icon">
                                <span>Industrial Automation Companies</span>
                            </div>
                            <!-- Item 6 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who6.png" alt="3D Printing Companies" class="bp-who-icon">
                                <span>3D Printing Companies</span>
                            </div>
                            <!-- Item 2 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who2.png" alt="CAD/CAM Service Providers" class="bp-who-icon">
                                <span>CAD/CAM Service Providers</span>
                            </div>
                            <!-- Item 7 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who7.png" alt="Reverse Engineering Service Providers" class="bp-who-icon">
                                <span>Reverse Engineering Service Providers</span>
                            </div>
                            <!-- Item 3 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who3.png" alt="CNC Machine Dealers" class="bp-who-icon">
                                <span>CNC Machine Dealers</span>
                            </div>
                            <!-- Item 8 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who8.png" alt="Startup Technology Entrepreneurs" class="bp-who-icon">
                                <span>Startup Technology Entrepreneurs</span>
                            </div>
                            <!-- Item 4 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who4.png" alt="CMM Inspection Companies" class="bp-who-icon">
                                <span>CMM Inspection Companies</span>
                            </div>
                            <!-- Item 9 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who9.png" alt="Educational Lab Integrators" class="bp-who-icon">
                                <span>Educational Lab Integrators</span>
                            </div>
                            <!-- Item 5 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who5.png" alt="Engineering Consultants" class="bp-who-icon">
                                <span>Engineering Consultants</span>
                            </div>
                            <!-- Item 10 -->
                            <div class="bp-who-item">
                                <img src="assets/images/business/who10.png" alt="And More..." class="bp-who-icon">
                                <span>And More...</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Card: What You Can Sell -->
                <div class="col-lg-7">
                    <div class="bp-split-card">
                        <span class="bp-split-subtitle">WHAT YOU CAN SELL</span>
                        <h2 class="bp-split-title">Scan &rarr; Design &rarr; Inspect &rarr; Print</h2>
                        
                        <div class="bp-what-flow">
                            <!-- Step 1 -->
                            <div class="bp-what-card-wrapper">
                                <div class="bp-what-card">
                                    <div class="bp-what-img-container">
                                        <img src="assets/images/business/what1.png" alt="Scan" class="img-fluid">
                                    </div>
                                    <div class="bp-what-label">Scan</div>
                                </div>
                            </div>
                            
                            <div class="bp-what-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            
                            <!-- Step 2 -->
                            <div class="bp-what-card-wrapper">
                                <div class="bp-what-card">
                                    <div class="bp-what-img-container">
                                        <img src="assets/images/business/what2.png" alt="Design" class="img-fluid">
                                    </div>
                                    <div class="bp-what-label">Design</div>
                                </div>
                            </div>
                            
                            <div class="bp-what-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            
                            <!-- Step 3 -->
                            <div class="bp-what-card-wrapper">
                                <div class="bp-what-card">
                                    <div class="bp-what-img-container">
                                        <img src="assets/images/business/what3.png" alt="Inspect" class="img-fluid">
                                    </div>
                                    <div class="bp-what-label">Inspect</div>
                                </div>
                            </div>
                            
                            <div class="bp-what-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            
                            <!-- Step 4 -->
                            <div class="bp-what-card-wrapper">
                                <div class="bp-what-card">
                                    <div class="bp-what-img-container">
                                        <img src="assets/images/business/what4.png" alt="Print" class="img-fluid">
                                    </div>
                                    <div class="bp-what-label">Print</div>
                                </div>
                            </div>
                        </div>

                        <div class="bp-what-bullets row">
                            <div class="col-sm-6">
                                <ul class="bp-bullet-list">
                                    <li><i class="fas fa-check-circle"></i> Industrial 3D Scanners</li>
                                    <li><i class="fas fa-check-circle"></i> Reverse Engineering Software</li>
                                    <li><i class="fas fa-check-circle"></i> Inspection Software</li>
                                    <li><i class="fas fa-check-circle"></i> Portable Metrology Systems</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="bp-bullet-list">
                                    <li><i class="fas fa-check-circle"></i> Dynamic Tracking Systems</li>
                                    <li><i class="fas fa-check-circle"></i> Colour 3D Scanners</li>
                                    <li><i class="fas fa-check-circle"></i> Educational Lab Solutions</li>
                                    <li><i class="fas fa-check-circle"></i> Digital Manufacturing Ecosystems</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- profiles and sell section end -->

    <!-- business model section start -->
    <section class="bp-model-section">
        <div class="container">
            <div class="bp-model-header text-center">
                <span class="bp-model-subtitle">BUSINESS MODEL EXPLAINED</span>
                <h2 class="bp-model-title">Your Journey to a Successful 3D Technology Business</h2>
            </div>
            
            <div class="bp-timeline-wrapper">
                <div class="bp-timeline-line"></div>
                <div class="bp-timeline-steps">
                    <!-- Step 1 -->
                    <div class="bp-timeline-step">
                        <div class="bp-step-circle-container">
                            <div class="bp-step-circle">
                                <img src="assets/images/business/model1.png" alt="Invest in Scanner/Software Portfolio" class="bp-step-icon">
                            </div>
                            <div class="bp-step-number">1</div>
                        </div>
                        <h4 class="bp-step-title">Invest in Scanner/ Software Portfolio</h4>
                    </div>
                    <!-- Step 2 -->
                    <div class="bp-timeline-step">
                        <div class="bp-step-circle-container">
                            <div class="bp-step-circle">
                                <img src="assets/images/business/model2.png" alt="Get Product Training & Onboarding" class="bp-step-icon">
                            </div>
                            <div class="bp-step-number">2</div>
                        </div>
                        <h4 class="bp-step-title">Get Product Training & Onboarding</h4>
                    </div>
                    <!-- Step 3 -->
                    <div class="bp-timeline-step">
                        <div class="bp-step-circle-container">
                            <div class="bp-step-circle">
                                <img src="assets/images/business/model3.png" alt="Represent Precise3DM in Your Region" class="bp-step-icon">
                            </div>
                            <div class="bp-step-number">3</div>
                        </div>
                        <h4 class="bp-step-title">Represent Precise3DM in Your Region</h4>
                    </div>
                    <!-- Step 4 -->
                    <div class="bp-timeline-step">
                        <div class="bp-step-circle-container">
                            <div class="bp-step-circle">
                                <img src="assets/images/business/model4.png" alt="Generate Leads & Demos" class="bp-step-icon">
                            </div>
                            <div class="bp-step-number">4</div>
                        </div>
                        <h4 class="bp-step-title">Generate Leads & Demos</h4>
                    </div>
                    <!-- Step 5 -->
                    <div class="bp-timeline-step">
                        <div class="bp-step-circle-container">
                            <div class="bp-step-circle">
                                <img src="assets/images/business/model5.png" alt="Earn Through Sales & Services" class="bp-step-icon">
                            </div>
                            <div class="bp-step-number">5</div>
                        </div>
                        <h4 class="bp-step-title">Earn Through Sales & Services</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- business model section end -->

    <!-- support section start -->
    <section class="bp-support-section">
        <div class="container max-width-container">
            <div class="bp-support-header text-center">
                <span class="bp-support-subtitle">PRECISE3DM SUPPORT SYSTEM</span>
                <h2 class="bp-support-title">We Grow When You Grow</h2>
            </div>
            
            <div class="bp-we-grid">
                <!-- Card 1 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we1.png" alt="Live Demo Support" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">Live Demo Support</h3>
                </div>
                <!-- Card 2 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we2.png" alt="Regional Lead Assistance" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">Regional Lead Assistance</h3>
                </div>
                <!-- Card 3 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we3.png" alt="Technical Team Backup" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">Technical Team Backup</h3>
                </div>
                <!-- Card 4 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we4.png" alt="Installation Assistance" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">Installation Assistance</h3>
                </div>
                <!-- Card 5 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we5.png" alt="Marketing Material Support" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">Marketing Material Support</h3>
                </div>
                <!-- Card 6 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we6.png" alt="Website Lead Sharing" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">Website Lead Sharing</h3>
                </div>
                <!-- Card 7 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we7.png" alt="Online Customer Meetings" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">Online Customer Meetings</h3>
                </div>
                <!-- Card 8 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we8.png" alt="Application Engineering Support" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">Application Engineering Support</h3>
                </div>
                <!-- Card 9 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we9.png" alt="Demo Unit Access" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">Demo Unit Access</h3>
                </div>
                <!-- Card 10 -->
                <div class="bp-we-card">
                    <div class="bp-we-icon-wrapper">
                        <img src="assets/images/business/we10.png" alt="After Sales Support" class="bp-we-icon">
                    </div>
                    <h3 class="bp-we-card-title">After Sales Support</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- support section end -->

    <!-- opportunity section start -->
    <section class="bp-opportunity-section">
        <div class="container">
            <div class="bp-opportunity-card">
                <div class="row">
                    <div class="col-lg-7 col-xl-6">
                        <div class="bp-opp-content">
                            <span class="bp-opp-subtitle">SUCCESS OPPORTUNITY</span>
                            <h2 class="bp-opp-title">India's Industrial Digital Manufacturing Market is Growing Rapidly</h2>
                            <p class="bp-opp-desc">Position yourself early in high-growth industries</p>
                            
                            <div class="bp-opp-icons-grid">
                                <!-- Card 1 -->
                                <div class="bp-opp-icon-item">
                                    <div class="bp-opp-icon-img-wrapper">
                                        <img src="assets/images/business/cta-icon1.png" alt="EV Manufacturing" class="img-fluid">
                                    </div>
                                    <span class="bp-opp-icon-label">EV Manufacturing</span>
                                </div>
                                <!-- Card 2 -->
                                <div class="bp-opp-icon-item">
                                    <div class="bp-opp-icon-img-wrapper">
                                        <img src="assets/images/business/cta-icon2.png" alt="Aerospace" class="img-fluid">
                                    </div>
                                    <span class="bp-opp-icon-label">Aerospace</span>
                                </div>
                                <!-- Card 3 -->
                                <div class="bp-opp-icon-item">
                                    <div class="bp-opp-icon-img-wrapper">
                                        <img src="assets/images/business/cta-icon3.png" alt="Defence" class="img-fluid">
                                    </div>
                                    <span class="bp-opp-icon-label">Defence</span>
                                </div>
                                <!-- Card 4 -->
                                <div class="bp-opp-icon-item">
                                    <div class="bp-opp-icon-img-wrapper">
                                        <img src="assets/images/business/cta-icon4.png" alt="Tool & Die" class="img-fluid">
                                    </div>
                                    <span class="bp-opp-icon-label">Tool & Die</span>
                                </div>
                                <!-- Card 5 -->
                                <div class="bp-opp-icon-item">
                                    <div class="bp-opp-icon-img-wrapper">
                                        <img src="assets/images/business/cta-icon5.png" alt="Foundry" class="img-fluid">
                                    </div>
                                    <span class="bp-opp-icon-label">Foundry</span>
                                </div>
                                <!-- Card 6 -->
                                <div class="bp-opp-icon-item">
                                    <div class="bp-opp-icon-img-wrapper">
                                        <img src="assets/images/business/cta-icon6.png" alt="Marine" class="img-fluid">
                                    </div>
                                    <span class="bp-opp-icon-label">Marine</span>
                                </div>
                                <!-- Card 7 -->
                                <div class="bp-opp-icon-item">
                                    <div class="bp-opp-icon-img-wrapper">
                                        <img src="assets/images/business/cta-icon7.png" alt="Medical" class="img-fluid">
                                    </div>
                                    <span class="bp-opp-icon-label">Medical</span>
                                </div>
                                <!-- Card 8 -->
                                <div class="bp-opp-icon-item">
                                    <div class="bp-opp-icon-img-wrapper">
                                        <img src="assets/images/business/cta-icon8.png" alt="Education" class="img-fluid">
                                    </div>
                                    <span class="bp-opp-icon-label">Education</span>
                                </div>
                                <!-- Card 9 -->
                                <div class="bp-opp-icon-item">
                                    <div class="bp-opp-icon-img-wrapper">
                                        <img src="assets/images/business/cta-icon9.png" alt="Product Design" class="img-fluid">
                                    </div>
                                    <span class="bp-opp-icon-label">Product Design</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- opportunity section end -->

    <!-- apply section start -->
    <section class="bp-apply-section">
        <div class="container">
            <div class="row">
                <!-- Left Card: Call to Action -->
                <div class="col-lg-5 col-xl-4 mb-4 mb-lg-0">
                    <div class="bp-apply-left-card">
                        <div>
                            <span class="bp-apply-subtitle">LET'S BUILD THE FUTURE TOGETHER</span>
                            <h2 class="bp-apply-title">Let's Build the Future of Digital Manufacturing Together</h2>
                            <p class="bp-apply-desc">Join our network of successful partners and empower industries with world-class 3D scanning and digital manufacturing technologies.</p>
                        </div>
                        
                        <div class="bp-apply-actions">
                            <a href="#apply-form" class="bp-btn bp-btn-primary bp-apply-btn">Apply as a Partner</a>
                            <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" target="_blank" class="bp-apply-btn-outline">Meet Us Live Online</a>
                        </div>
                    </div>
                </div>

                <!-- Right Card: Contact Form -->
                <div class="col-lg-7 col-xl-8">
                    <div class="bp-apply-right-card" id="apply-form">
                        <h2 class="bp-apply-form-title">Apply as a Business Partner</h2>
                        <p class="bp-apply-form-desc">Fill this form and our team will connect with you.</p>

                        <?php if (isset($form_status) && $form_status === 'success'): ?>
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <strong>Application Submitted!</strong> Our team will review your details and contact you shortly.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php elseif (isset($form_status) && $form_status === 'failure'): ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <strong>Submission Failed!</strong> Please try again or email us directly at marketing@precise3dm.com.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>

                        <form action="" method="POST" class="bp-apply-form">
                            <!-- Bot prevention -->
                            <input type="text" name="hidden-input" style="display:none !important" tabindex="-1" autocomplete="off">
                            
                            <div class="row">
                                <!-- Row 1 -->
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="fullname" class="form-control bp-form-input" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="companyname" class="form-control bp-form-input" placeholder="Company Name" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <input type="text" name="city" class="form-control bp-form-input" placeholder="City" required>
                                </div>
                                
                                <!-- Row 2 -->
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="industry" class="form-control bp-form-input" placeholder="Industry/Business Type" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="services" class="form-control bp-form-input" placeholder="Existing business/ Services" required>
                                </div>
                                
                                <!-- Row 3 -->
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="category" class="form-control bp-form-input" placeholder="Interested Product Category" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="budget" class="form-control bp-form-input" placeholder="Investment Budget Range" required>
                                </div>
                                
                                <!-- Row 4 -->
                                <div class="col-md-6 mb-3">
                                    <input type="tel" name="phone" class="form-control bp-form-input" placeholder="Phone Number" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" name="email" class="form-control bp-form-input" placeholder="Email Address" required>
                                </div>
                                
                                <!-- Row 5 -->
                                <div class="col-12 mt-2">
                                    <button type="submit" class="bp-btn bp-form-submit w-100">Submit Applications</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- apply section end -->

    <!-- features bar section start -->
    <section class="bp-features-bar-section">
        <div class="container">
            <div class="bp-features-bar-row">
                <!-- Item 1 -->
                <div class="bp-features-bar-item">
                    <div class="bp-features-bar-icon-wrapper">
                        <img src="assets/images/business/icon1.png" alt="Trusted Global Technologies" class="img-fluid">
                    </div>
                    <span class="bp-features-bar-text">Trusted Global Technologies</span>
                </div>
                <!-- Item 2 -->
                <div class="bp-features-bar-item">
                    <div class="bp-features-bar-icon-wrapper">
                        <img src="assets/images/business/icon2.png" alt="End-to-End Business Support" class="img-fluid">
                    </div>
                    <span class="bp-features-bar-text">End-to-End Business Support</span>
                </div>
                <!-- Item 3 -->
                <div class="bp-features-bar-item">
                    <div class="bp-features-bar-icon-wrapper">
                        <img src="assets/images/business/icon3.png" alt="High Growth Opportunity" class="img-fluid">
                    </div>
                    <span class="bp-features-bar-text">High Growth Opportunity</span>
                </div>
                <!-- Item 4 -->
                <div class="bp-features-bar-item">
                    <div class="bp-features-bar-icon-wrapper">
                        <img src="assets/images/business/icon4.png" alt="Long Term Partnership" class="img-fluid">
                    </div>
                    <span class="bp-features-bar-text">Long Term Partnership</span>
                </div>
            </div>
        </div>
    </section>
    <!-- features bar section end -->

    <!-- footer start -->
    <?php include('includes/footer.php'); ?>
    <!-- footer end -->

    <script src="assets/js/counter.js"></script>
</body>

</html>