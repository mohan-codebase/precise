<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Three Types of Reverse Engineering Techniques | Precise3DM</title>
    <meta name="title" content="Three Types of Reverse Engineering Techniques | Precise3DM"/>
    <meta name="description" content="Explore As-Built, Design Intent, Hybrid Modeling, and Scan to CAD NURBS reverse engineering techniques for high-accuracy 3D modeling and manufacturing."/>
    <meta name="keywords" content="Reverse Engineering, As-Built Technique, Design Intent Technique, Hybrid Modeling, Scan to CAD NURBS, 3D Scanning, Precise3DM">

    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.precise3dm.com/three-types-of-reverse-engineering-techniques-new.php" />
    <meta property="og:title" content="Three Types of Reverse Engineering Techniques | Precise3DM" />
    <meta property="og:description" content="Explore As-Built, Design Intent, Hybrid Modeling, and Scan to CAD NURBS reverse engineering techniques for high-accuracy 3D modeling and manufacturing." />
    <meta property="og:image" content="https://www.precise3dm.com/assets/images/blog12/img1.png" />
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://www.precise3dm.com/three-types-of-reverse-engineering-techniques-new.php" />
    <meta property="twitter:title" content="Three Types of Reverse Engineering Techniques | Precise3DM" />
    <meta property="twitter:description" content="Explore As-Built, Design Intent, Hybrid Modeling, and Scan to CAD NURBS reverse engineering techniques for high-accuracy 3D modeling and manufacturing." />
    <meta property="twitter:image" content="https://www.precise3dm.com/assets/images/blog12/img1.png"/>

    <link rel="canonical" href="https://www.precise3dm.com/three-types-of-reverse-engineering-techniques-new.php"/>
    <meta name="robots" content="index, follow, max-image-preview:large, max-video-preview:-1, max-snippet:-1" />


   <!--bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
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
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-01.png">
    <link rel="stylesheet" href="assets/css/main-blog.css"/>
    <link rel="stylesheet" href="assets/css/blog53-hero.css"/>

   
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

   <style>
       html{
           scroll-padding-top:140px;
       }   
       body{
    background-color: #fff;
}
h1,h2,h3,h4,h5,h6,a,span,b,p,strong,small,td,th{
    font-family: 'Inter', sans-serif;
}
.blog53-hero {
    position: relative;
    width: 100%;
    background-image: url('../images/blog53/hero-bg.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin-top: 120px; 
    padding: 60px 0;
    border-bottom: 2px solid #e0e0e0;
}
@media screen and (max-width:700px){
    .blog53-hero{
        margin-top:0;
    }
}
.fa-envelope{
    padding: 0;
}
.blog53-hero .call-us-banner {
    position: absolute;
    top: -30px;
    right: 15px;
    z-index: 2;
}

.blog53-hero .icon-circle {
    width: 40px;
    height: 40px;
    background-color: #FF8D1E;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 18px;
    flex-shrink: 0;
}

.blog53-hero .contact-text {
    line-height: 1.2;
}

.blog53-hero .contact-text .title {
    font-size: 14px;
    font-weight: 700;
    color: #333;
}

.blog53-hero .contact-text .numbers a,
.blog53-hero .contact-text .emails a {
    font-size: 13px;
    font-weight: 700;
    color: #000;
    text-decoration: none;
    transition: color 0.2s;
}

.blog53-hero .contact-text .numbers a:hover,
.blog53-hero .contact-text .emails a:hover {
    color: #FF8D1E;
}

.blog53-hero .contact-text .numbers,
.blog53-hero .contact-text .emails {
    color: #000;
    font-size: 13px;
    font-weight: 700;
}

.blog53-hero .hero-title {
    font-size: 48px;
    font-weight: 800;
    color: #333;
    line-height: 1.2;
    margin-bottom: 20px;
}

.blog53-hero .hero-title .highlight {
    color: #FF8D1E;
    background-color: transparent !important;
}

.blog53-hero .hero-subtitle {
    font-size: 18px;
    color: #444;
    font-weight: 500;
    margin-bottom: 30px;
    line-height: 1.5;
}

.blog53-hero .btn-primary-custom {
    background-color: #FF8D1E;
    color: white;
    font-weight: 600;
    padding: 12px 24px;
    border-radius: 8px;
    border: 2px solid #FF8D1E;
    text-decoration: none;
    transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(255, 141, 30, 0.3);
}

.blog53-hero .btn-primary-custom:hover {
    background-color: #e07b15;
    border-color: #e07b15;
    color: white;
}

.blog53-hero .btn-outline-custom {
    background-color: transparent;
    color: #FF8D1E;
    font-weight: 600;
    padding: 12px 24px;
    border-radius: 8px;
    border: 1px solid #FF8D1E;
    background: white;
    text-decoration: none;
    transition: all 0.3s;
}

.blog53-hero .btn-outline-custom:hover {
    border-color: #e07b15;
    color: #e07b15;
}

.blog53-hero .hero-right-img {
    max-width: 120%;
    margin-left: -10%;
    position: relative;
    z-index: 1;
}

@media screen and (max-width: 991px) {
    .blog53-hero .hero-title {
        font-size: 38px;
    }
    .blog53-hero .hero-right-img {
        max-width: 100%;
        margin-left: 0;
    }
}

@media screen and (max-width: 768px) {
    .blog53-hero {
        padding: 40px 0;
        margin-top: 100px;
    }
    .blog53-hero .call-us-banner {
        position: relative;
        top: 0;
        right: 0;
        margin-bottom: 20px;
    }
    .blog53-hero .hero-title {
        font-size: 32px;
    }
}
.hero-buttons{
    gap: 10px;
}
.email-banner{
    gap: 10px;
}
.call-us-banner{
    gap: 10px;
}

/* Decision Guide Section */
.decision-guide-section {
    background-color: #f4f6f9;
    padding: 80px 0;
}

.decision-guide-section .section-title {
    font-size: 32px;
    font-weight: 800;
    color: #333;
}

.decision-col {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.decision-card {
    border-radius: 8px;
    padding: 15px 20px;
    height: 130px;
    width: 100%;
}

.decision-icon {
    flex-shrink: 0;
    margin-right: 15px;
}

.decision-icon img {
    max-width: 100%;
    object-fit: contain;
}

.decision-question {
    font-size: 14px;
    font-weight: 700;
    color: #222;
    line-height: 1.4;
}

.blue-card {
    background-color: #eaf1fd;
    border: 1px solid #acc8f6;
}
.green-card {
    background-color: #f0fdf0;
    border: 1px solid #b7e4b7;
}
.purple-card {
    background-color: #f6f0fa;
    border: 1px solid #d8c6eb;
}
.orange-card {
    background-color: #fff6ee;
    border: 1px solid #fbd2af;
}

.decision-line-top {
    width: 1px;
    height: 25px;
    background-color: #aaa;
}

.decision-yes {
    background-color: #f79929;
    color: white;
    font-weight: 700;
    font-size: 13px;
    padding: 4px 14px;
    border-radius: 4px;
    margin: 0;
    display: inline-block;
}

.decision-line-bottom {
    width: 1px;
    height: 20px;
    background-color: #aaa;
    position: relative;
    margin-bottom: 5px;
}

.decision-line-bottom::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: -4px;
    width: 0;
    height: 0;
    border-left: 4.5px solid transparent;
    border-right: 4.5px solid transparent;
    border-top: 6px solid #aaa;
}

.decision-result {
    border-radius: 8px;
    color: white;
    font-weight: 700;
    font-size: 16px;
    padding: 20px 15px;
    width: 100%;
    text-align: center;
    line-height: 1.4;
    height: 110px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bg-dark-blue {
    background-color: #0b4ab9;
}
.bg-green {
    background-color: #6db157;
}
.bg-purple {
    background-color: #7b5da4;
}
.bg-dark-orange {
    background-color: #d17522;
}

@media screen and (max-width: 991px) {
    .decision-guide-section .section-title {
        font-size: 28px;
    }
}
@media screen and (max-width: 768px) {
    .decision-guide-section {
        padding: 40px 0;
    }
    .decision-card {
        height: auto;
        min-height: 100px;
    }
}

/* Method Selection Section */
.method-selection-section {
    background-color: #f4f6f9;
    padding: 80px 0;
}

.method-selection-section .section-title {
    font-size: 32px;
    font-weight: 800;
    color: #333;
}

.method-card {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    padding: 25px 20px;
    height: 100%;
    display: flex;
    flex-direction: column;
    text-align: center;
}

.method-card-title {
    font-size: 16px;
    font-weight: 800;
    color: #111;
    line-height: 1.4;
    margin-bottom: 20px;
    min-height: 44px;
}

.method-img-wrapper {
    height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.method-img-wrapper img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
}

.method-card-footer {
    margin-top: auto;
    margin-bottom: 0;
    font-size: 14px;
    color: #111;
    font-weight: 700;
    line-height: 1.4;
}

@media screen and (max-width: 991px) {
    .method-selection-section .section-title {
        font-size: 28px;
    }
}
@media screen and (max-width: 768px) {
    .method-selection-section {
        padding: 40px 0;
    }
    .method-card {
        margin-bottom: 20px;
    }
}

/* Why Choose Section */
.why-choose-section {
    background-color: #f6f7fa;
    padding: 80px 0;
}

.why-choose-section .section-title {
    font-size: 36px;
    font-weight: 800;
    color: #333;
    margin-bottom: 50px;
}

.why-choose-section .why-col {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 15px;
}

.why-choose-section .top-img-container {
    height: 140px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
    position: relative;
}

.why-choose-section .top-img {
    max-height: 100%;
    object-fit: contain;
    position: relative;
    z-index: 1;
}

.why-choose-section .method-title {
    font-size: 20px;
    font-weight: 700;
    color: #222;
    margin-bottom: 10px;
}

.why-choose-section .method-desc {
    font-size: 14px;
    color: #555;
    line-height: 1.4;
    text-align: center;
    margin-bottom: 30px;
    min-height: 60px;
}

.why-choose-section .question-text {
    font-size: 15px;
    font-weight: 700;
    color: #333;
    text-align: center;
    line-height: 1.3;
    margin-bottom: 10px;
    min-height: 40px;
}

.why-choose-section .arrow-down {
    font-size: 24px;
    font-weight: 300;
    color: #333;
    margin-bottom: 5px;
}

.why-choose-section .choose-text {
    font-size: 14px;
    font-weight: 500;
    color: #333;
    margin-bottom: 5px;
}

.why-choose-section .highlight-technique {
    font-size: 18px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 20px;
    line-height: 1.2;
    min-height: 44px;
}

.why-choose-section .text-blue {
    color: #1a56db;
}

.why-choose-section .text-green {
    color: #4ca04c;
}

.why-choose-section .text-purple {
    color: #8a63a5;
}

.why-choose-section .text-orange {
    color: #d37722;
}

.why-choose-section .bottom-img {
    max-height: 120px;
    object-fit: contain;
    margin-top: auto;
}

@media screen and (max-width: 991px) {
    .why-choose-section .method-desc,
    .why-choose-section .question-text,
    .why-choose-section .highlight-technique {
        min-height: auto;
    }
}
@media screen and (max-width: 768px) {
    .why-choose-section .section-title {
        font-size: 28px;
    }
}
.call-us-banner{
    gap: 10px;
}

/* Comparison Section */
.comparison-section {
    padding: 80px 0;
    background-color: #f6f7fa;
}

.comparison-section .section-title {
    font-size: 36px;
    font-weight: 800;
    color: #333;
}

.table-responsive-wrapper {
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
    background-color: #fff;
    border: 1px solid #e0e0e0;
    overflow-x: auto;
}

.comparison-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    min-width: 900px;
}

.comparison-table th, .comparison-table td {
    padding: 24px;
    vertical-align: middle;
    border-right: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
    font-size: 15px;
    color: #222;
    font-weight: 500;
    line-height: 1.4;
    text-align: left;
}

.comparison-table th:last-child, .comparison-table td:last-child {
    border-right: none;
}
.comparison-table tr:last-child td {
    border-bottom: none;
}

.comparison-table thead th {
    background-color: #f79929;
    color: #222;
    font-weight: 800;
    font-size: 16px;
    text-align: center;
}

.comparison-table tbody td:first-child {
    font-weight: 700;
    color: #111;
}

@media screen and (max-width: 991px) {
    .comparison-table th, .comparison-table td {
        padding: 15px;
    }
}
@media screen and (max-width: 768px) {
    .comparison-section {
        padding: 40px 0;
    }
    .comparison-section .section-title {
        font-size: 28px;
    }
}

/* Explore Techniques Section */
.explore-techniques-section {
    padding: 80px 0;
    background-color: #f8f9fa;
}

.explore-techniques-section .section-title {
    font-size: 36px;
    font-weight: 800;
    color: #333;
}

.tech-card {
    background: #fff;
    border-radius: 12px;
    border: 1px solid #e0e0e0;
    padding: 24px;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.tech-card .tech-title {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
}

.tech-card .tech-subtitle {
    font-size: 14px;
    color: #444;
    line-height: 1.4;
    margin-bottom: 20px;
    min-height: 40px;
}

.tech-card .tech-img-container {
    margin-bottom: 25px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 160px;
}

.tech-card .tech-img-container img {
    max-height: 150px;
    object-fit: contain;
}

.tech-card .tech-list {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
    margin-top: auto;
}

.tech-card .tech-list li {
    position: relative;
    padding-left: 15px;
    font-size: 13px;
    color: #333;
    line-height: 1.5;
    margin-bottom: 10px;
    font-weight: 500;
}

.tech-card .tech-list li::before {
    content: "•";
    position: absolute;
    left: 0;
    top: 0;
    color: #666;
    font-weight: bold;
}

.tech-card .text-blue { color: #1a56db; }
.tech-card .text-green { color: #4ca04c; }
.tech-card .text-purple { color: #8a63a5; }
.tech-card .text-orange { color: #d37722; }

@media screen and (max-width: 991px) {
    .tech-card .tech-subtitle {
        min-height: auto;
    }
}
@media screen and (max-width: 768px) {
    .explore-techniques-section {
        padding: 40px 0;
    }
    .explore-techniques-section .section-title {
        font-size: 28px;
    }
}

/* Workflow Section */
.workflow-section {
    padding: 80px 0;
    background-color: #fdfdfd;
}

.workflow-section .section-title {
    font-size: 36px;
    font-weight: 800;
    color: #333;
}

.workflow-badge {
    background-color: #f79929;
    color: #fff;
    padding: 8px 24px;
    border-radius: 30px;
    font-weight: 800;
    font-size: 18px;
    display: inline-block;
    text-transform: uppercase;
}

.step-header {
    font-weight: 800;
    font-size: 18px;
}

.step-sub {
    font-size: 14px;
    color: #444;
    font-weight: 600;
}

.workflow-card {
    background: #fff;
    border: 1px solid #f0f0f0;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.middle-header {
    font-size: 15px;
    font-weight: 600;
    color: #555;
}

.download-link {
    font-size: 10px;
    color: #f79929;
    border: 1px solid #f79929;
    border-radius: 4px;
    padding: 3px 8px;
    display: inline-block;
    cursor: pointer;
    font-weight: 600;
}

.process-img {
    max-height: 120px;
    object-fit: contain;
}

.or-text {
    font-size: 14px;
}

.output-inner-box {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 10px;
}

.info-banner {
    border: 1px solid #f79929;
    border-radius: 8px;
    padding: 15px 25px;
    background-color: #fff;
}

.bulb-icon {
    width: 40px;
    height: 40px;
    background-color: #f79929;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
    flex-shrink: 0;
}

.text-theme-orange {
    color: #f79929 !important;
}

@media screen and (max-width: 991px) {
    .workflow-section {
        padding: 40px 0;
    }
    .workflow-section .section-title {
        font-size: 28px;
    }
}

/* Not Sure Section */
.not-sure-section {
    background-color: #f4eee9;
    padding: 60px 0;
    border-top: 1px solid #e8e2dd;
}

.not-sure-title {
    font-size: 32px;
    font-weight: 800;
    color: #111;
    margin-bottom: 10px;
}

.not-sure-desc {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
    margin-bottom: 20px;
}

.contact-icon {
    width: 45px;
    height: 45px;
    background: linear-gradient(135deg, #ffa84c, #f79929);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 20px;
    box-shadow: 0 4px 10px rgba(247, 153, 41, 0.3);
    flex-shrink: 0;
}

.contact-heading {
    font-size: 15px;
    font-weight: 700;
    color: #222;
}

.contact-details {
    font-size: 13px;
    font-weight: 700;
    color: #000;
}

.contact-details a {
    color: #000;
    text-decoration: none;
    transition: color 0.2s;
}

.contact-details a:hover {
    color: #f79929;
}

.contact-details .divider {
    color: #f79929;
    margin: 0 4px;
}

.btn-upload-component {
    background: linear-gradient(to right, #ffab40, #f79929);
    color: #fff !important;
    font-weight: 700;
    font-size: 18px;
    padding: 14px 28px;
    border-radius: 6px;
    border: none;
    box-shadow: 0 8px 20px rgba(247, 153, 41, 0.4);
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-upload-component:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(247, 153, 41, 0.5);
    background: linear-gradient(to right, #f79929, #e68818);
}

@media screen and (max-width: 991px) {
    .not-sure-title {
        font-size: 28px;
    }
}
@media screen and (max-width: 768px) {
    .not-sure-section {
        padding: 40px 0;
    }
}  
/* Decision Guide Section */
.decision-guide-section {
    background-color: #f4f6f9;
    padding: 80px 0;
}

.decision-guide-section .section-title {
    font-size: 32px;
    font-weight: 800;
    color: #333;
}

.decision-col {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.decision-card {
    border-radius: 8px;
    padding: 15px 20px;
    height: 130px;
    width: 100%;
}

.decision-icon {
    flex-shrink: 0;
    margin-right: 15px;
}

.decision-icon img {
    max-width: 100%;
    object-fit: contain;
}

.decision-question {
    font-size: 14px;
    font-weight: 700;
    color: #222;
    line-height: 1.4;
}

.blue-card {
    background-color: #eaf1fd;
    border: 1px solid #acc8f6;
}
.green-card {
    background-color: #f0fdf0;
    border: 1px solid #b7e4b7;
}
.purple-card {
    background-color: #f6f0fa;
    border: 1px solid #d8c6eb;
}
.orange-card {
    background-color: #fff6ee;
    border: 1px solid #fbd2af;
}

.decision-line-top {
    width: 1px;
    height: 25px;
    background-color: #aaa;
}

.decision-yes {
    background-color: #f79929;
    color: white;
    font-weight: 700;
    font-size: 13px;
    padding: 4px 14px;
    border-radius: 4px;
    margin: 0;
    display: inline-block;
}

.decision-line-bottom {
    width: 1px;
    height: 20px;
    background-color: #aaa;
    position: relative;
    margin-bottom: 5px;
}

.decision-line-bottom::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: -4px;
    width: 0;
    height: 0;
    border-left: 4.5px solid transparent;
    border-right: 4.5px solid transparent;
    border-top: 6px solid #aaa;
}

.decision-result {
    border-radius: 8px;
    color: white;
    font-weight: 700;
    font-size: 16px;
    padding: 20px 15px;
    width: 100%;
    text-align: center;
    line-height: 1.4;
    height: 110px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.bg-dark-blue {
    background-color: #0b4ab9;
}
.bg-green {
    background-color: #6db157;
}
.bg-purple {
    background-color: #7b5da4;
}
.bg-dark-orange {
    background-color: #d17522;
}

@media screen and (max-width: 991px) {
    .decision-guide-section .section-title {
        font-size: 28px;
    }
}
@media screen and (max-width: 768px) {
    .decision-guide-section {
        padding: 40px 0;
    }
    .decision-card {
        height: auto;
        min-height: 100px;
    }
}

   </style>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FX95R9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

   <!-- header start -->
   <?php include('includes/header.php'); ?>
   <!-- header End -->

    <!-- New Hero Section -->
    <section class="blog53-hero">
        <div class="container position-relative h-100">
            <!-- Call Us Banner -->
            <div class="call-us-banner d-none d-md-flex align-items-center">
                <div class="icon-circle">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="contact-text ms-2 text-start">
                    <span class="title">Call us now</span><br>
                    <span class="numbers">
                        <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374408179">+91 63744 08179</a>
                    </span>
                </div>
            </div>

            <div class="row h-100 align-items-center">
                <div class="col-md-7 position-relative z-1">
                    <h1 class="hero-title">
                        Three Types of<br>
                        <span class="highlight">Reverse Engineering</span><br>
                        Techniques
                    </h1>
                    <p class="hero-subtitle">
                        Understand the right Scan-to-CAD approach before<br>
                        starting your reverse engineering project.
                    </p>
                    <div class="hero-buttons d-flex gap-3 flex-wrap">
                        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="btn btn-primary-custom">Talk to Our Experts</a>
                        <a href="#" class="btn btn-outline-custom">Upload Your Component</a>
                    </div>

                    <!-- Email Banner -->
                    <div class="email-banner d-flex align-items-center mt-5">
                        <div class="icon-circle">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-text ms-2 text-start">
                            <span class="title">Email us</span><br>
                            <span class="emails">
                                <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> | <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                            </span>
                        </div>
                    </div>
                    
                    <!-- Mobile Call Us Banner -->
                    <div class="call-us-banner-mobile d-flex d-md-none align-items-center mt-3" style="gap:10px;">
                        <div class="icon-circle">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-text ms-2 text-start">
                            <span class="title">Call us now</span><br>
                            <span class="numbers">
                                <a href="tel:+919840478347">+91 98404 78347</a> | <a href="tel:+916374408179">+91 63744 08179</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 position-relative text-center mt-4 mt-md-0">
                    <img src="assets/images/blog53/hero-right.png" alt="Scooter Scan to CAD" class="hero-right-img img-fluid">
                </div>
            </div>
        </div>
    </section>


    <!-- Why Choose Section -->
    <section class="why-choose-section">
        <div class="container text-center">
            <h2 class="section-title">Why Choosing the Right Reverse Engineering Method Matters</h2>
            
            <div class="row mt-5">
                <!-- Column 1 -->
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 why-col">
                    <div class="top-img-container">
                        <img src="assets/images/blog53/why1.png" alt="Exact Match" class="img-fluid top-img">
                    </div>
                    <h3 class="method-title">Exact Match</h3>
                    <p class="method-desc">Some projects require the CAD to match the existing part exactly including all deviations</p>
                    
                    <p class="question-text">Need exact existing part<br>replacement?</p>
                    <div class="arrow-down">↓</div>
                    <p class="choose-text">Choose</p>
                    <p class="highlight-technique text-blue">As-Built Technique</p>
                    
                    <img src="assets/images/blog53/why5.png" alt="As-Built Technique" class="img-fluid bottom-img">
                </div>

                <!-- Column 2 -->
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 why-col">
                    <div class="top-img-container">
                        <img src="assets/images/blog53/why2.png" alt="Clean Design Intent" class="img-fluid top-img">
                    </div>
                    <h3 class="method-title">Clean Design Intent</h3>
                    <p class="method-desc">Some projects need clean, editable CAD with manufacturing-ready design intent.</p>
                    
                    <p class="question-text">Need editable<br>manufacturing CAD?</p>
                    <div class="arrow-down">↓</div>
                    <p class="choose-text">Choose</p>
                    <p class="highlight-technique text-green">Design Intent<br>Technique</p>
                    
                    <img src="assets/images/blog53/why6.png" alt="Design Intent Technique" class="img-fluid bottom-img">
                </div>

                <!-- Column 3 -->
                <div class="col-lg-3 col-md-6 mb-5 mb-md-0 why-col">
                    <div class="top-img-container">
                        <img src="assets/images/blog53/why3.png" alt="Hybrid Approach" class="img-fluid top-img">
                    </div>
                    <h3 class="method-title">Hybrid Approach</h3>
                    <p class="method-desc">Some parts have both prismatic (mechanical) and organic (freeform) areas.</p>
                    
                    <p class="question-text">Need prismatic + organic<br>shape?</p>
                    <div class="arrow-down">↓</div>
                    <p class="choose-text">Choose</p>
                    <p class="highlight-technique text-purple">Hybrid Modeling<br>Technique</p>
                    
                    <img src="assets/images/blog53/why7.png" alt="Hybrid Modeling Technique" class="img-fluid bottom-img">
                </div>

                <!-- Column 4 -->
                <div class="col-lg-3 col-md-6 why-col">
                    <div class="top-img-container">
                        <img src="assets/images/blog53/why4.png" alt="Smooth Surfaces" class="img-fluid top-img">
                    </div>
                    <h3 class="method-title">Smooth Surfaces</h3>
                    <p class="method-desc">Some parts are fully organic or freeform and require smooth NURBS surfaces.</p>
                    
                    <p class="question-text">Need freeform smooth<br>surface?</p>
                    <div class="arrow-down">↓</div>
                    <p class="choose-text">Choose</p>
                    <p class="highlight-technique text-orange">NURBS Surface<br>Technique</p>
                    
                    <img src="assets/images/blog53/why8.png" alt="NURBS Surface Technique" class="img-fluid bottom-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table Section -->
    <section class="comparison-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Reverse Engineering Techniques Comparison</h2>
            
            <div class="table-responsive-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th>Technique</th>
                            <th>Best For</th>
                            <th>Manufacturing<br>Errors</th>
                            <th>CAD<br>Editability</th>
                            <th>Output<br>Format</th>
                            <th>Typical Use</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>As-Built Technique</td>
                            <td>Best for replacing existing used parts</td>
                            <td>Keeps manufacturing errors</td>
                            <td>Lower deviation to scan</td>
                            <td>STEP, IGES, SAT, Parasolid</td>
                            <td>Spare parts, mould repair, legacy component replacement</td>
                        </tr>
                        <tr>
                            <td>Design Intent Technique</td>
                            <td>Best for new product development</td>
                            <td>Removes manufacturing errors</td>
                            <td>Fully editable parametric CAD</td>
                            <td>Export with CAD history</td>
                            <td>Redesign, manufacturing, drawing, modification</td>
                        </tr>
                        <tr>
                            <td>Hybrid Modeling Technique</td>
                            <td>Best for parts with prismatic + organic areas</td>
                            <td>Errors included or removed based on requirement</td>
                            <td>Editable partly in reverse engineering software</td>
                            <td>STEP, IGES, SAT, Parasolid</td>
                            <td>Moulds, industrial design, CAE, animation, tooling</td>
                        </tr>
                        <tr>
                            <td>Scan-to-CAD NURBS Technique</td>
                            <td>Best for organic / freeform shapes</td>
                            <td>Captures smooth scanned surface</td>
                            <td>Limited CAD editability</td>
                            <td>IGES, STEP, SAT, Parasolid</td>
                            <td>Sculpture, auto styling, ergonomic products, organic surfaces</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    

    <!-- Explore Techniques Section -->
    <section class="explore-techniques-section">
        <div class="container">
            <h2 class="section-title text-center mb-5">Explore the 4 Reverse Engineering Techniques</h2>
            
            <div class="row">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="tech-card">
                        <h3 class="tech-title text-blue">As-Built Technique</h3>
                        <p class="tech-subtitle">Exact physical part replicated in CAD geometry</p>
                        <div class="tech-img-container">
                            <img src="assets/images/blog53/tech1.png" alt="As-Built Technique" class="img-fluid">
                        </div>
                        <ul class="tech-list">
                            <li>CAD follows actual scan profile</li>
                            <li>Manufacturing errors are retained</li>
                            <li>Lowest deviation from scan</li>
                            <li>Ideal for replacement parts</li>
                            <li>Useful when the part is already working in assembly</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="tech-card">
                        <h3 class="tech-title text-green">Design Intent Technique</h3>
                        <p class="tech-subtitle">Rebuild the Original Engineering Logic</p>
                        <div class="tech-img-container">
                            <img src="assets/images/blog53/tech2.png" alt="Design Intent Technique" class="img-fluid">
                        </div>
                        <ul class="tech-list">
                            <li>Clean sketches and constraints</li>
                            <li>Manufacturing errors removed</li>
                            <li>Editable parametric CAD</li>
                            <li>Suitable for redesign and drawings</li>
                            <li>Best for new product development</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="tech-card">
                        <h3 class="tech-title text-purple">Hybrid Modeling Technique</h3>
                        <p class="tech-subtitle">Best for Mixed Industrial Parts</p>
                        <div class="tech-img-container">
                            <img src="assets/images/blog53/tech3.png" alt="Hybrid Modeling Technique" class="img-fluid">
                        </div>
                        <ul class="tech-list">
                            <li>Parametric modeling for prismatic areas</li>
                            <li>NURBS patches for organic areas</li>
                            <li>Balanced accuracy and editability</li>
                            <li>Suitable for complex scanned parts</li>
                            <li>Useful for moulds, CAE, manufacturing, animation</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="tech-card">
                        <h3 class="tech-title text-orange">Scan-to-CAD NURBS Technique</h3>
                        <p class="tech-subtitle">Convert Organic Scan Data into Smooth Surface</p>
                        <div class="tech-img-container">
                            <img src="assets/images/blog53/tech4.png" alt="Scan-to-CAD NURBS Technique" class="img-fluid">
                        </div>
                        <ul class="tech-list">
                            <li>Mesh converted into NURBS surface</li>
                            <li>Best for freeform and organic geometry</li>
                            <li>Smooth surface patch creation</li>
                            <li>High surface accuracy</li>
                            <li>Modification only in reverse engineering software</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Decision Guide Section -->
    <section class="decision-guide-section">
        <div class="container text-center">
            <h2 class="section-title">Which Technique is Right for You? – Decision Guide</h2>
            
            <div class="row mt-5">
                <!-- Column 1 -->
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 decision-col">
                    <div class="decision-card blue-card">
                        <div class="d-flex align-items-center text-start h-100">
                            <div class="decision-icon">
                                <img src="assets/images/blog53/which1.png" alt="As-Built" class="img-fluid">
                            </div>
                            <div class="decision-question">
                                Do you want the CAD to match the existing part exactly?
                            </div>
                        </div>
                    </div>
                    <div class="decision-line-top"></div>
                    <div class="decision-yes">YES</div>
                    <div class="decision-line-bottom"></div>
                    <div class="decision-result bg-dark-blue">
                        Choose<br>As-Built<br>Technique
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 decision-col">
                    <div class="decision-card green-card">
                        <div class="d-flex align-items-center text-start h-100">
                            <div class="decision-icon">
                                <img src="assets/images/blog53/which2.png" alt="Design Intent" class="img-fluid">
                            </div>
                            <div class="decision-question">
                                Do you want editable CAD with clean design logic for manufacturing?
                            </div>
                        </div>
                    </div>
                    <div class="decision-line-top"></div>
                    <div class="decision-yes">YES</div>
                    <div class="decision-line-bottom"></div>
                    <div class="decision-result bg-green">
                        Choose<br>Design Intent<br>Technique
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 decision-col">
                    <div class="decision-card purple-card">
                        <div class="d-flex align-items-center text-start h-100">
                            <div class="decision-icon">
                                <img src="assets/images/blog53/which3.png" alt="Hybrid Modeling" class="img-fluid">
                            </div>
                            <div class="decision-question">
                                Does your part have both mechanical (prismatic) and freeform areas?
                            </div>
                        </div>
                    </div>
                    <div class="decision-line-top"></div>
                    <div class="decision-yes">YES</div>
                    <div class="decision-line-bottom"></div>
                    <div class="decision-result bg-purple">
                        Choose<br>Hybrid Modeling<br>Technique
                    </div>
                </div>

                <!-- Column 4 -->
                <div class="col-lg-3 col-md-6 decision-col">
                    <div class="decision-card orange-card">
                        <div class="d-flex align-items-center text-start h-100">
                            <div class="decision-icon">
                                <img src="assets/images/blog53/which4.png" alt="NURBS Surface" class="img-fluid">
                            </div>
                            <div class="decision-question">
                                Is your part fully organic or freeform?
                            </div>
                        </div>
                    </div>
                    <div class="decision-line-top"></div>
                    <div class="decision-yes">YES</div>
                    <div class="decision-line-bottom"></div>
                    <div class="decision-result bg-dark-orange">
                        Choose<br>NURBS Surface<br>Technique
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Method Selection Section -->
    <section class="method-selection-section">
        <div class="container text-center">
            <h2 class="section-title">Which Method Should You Choose?</h2>
            
            <div class="row mt-5">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="method-card">
                        <h4 class="method-card-title">For Spare Part<br>Replacement</h4>
                        <div class="method-img-wrapper">
                            <img src="assets/images/blog53/method1.png" alt="As-Built Technique" class="img-fluid">
                        </div>
                        <p class="method-card-footer">
                            Choose<br>As-Built Technique
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="method-card">
                        <h4 class="method-card-title">For Manufacturing<br>Redesign</h4>
                        <div class="method-img-wrapper">
                            <img src="assets/images/blog53/method2.png" alt="Design Intent Technique" class="img-fluid">
                        </div>
                        <p class="method-card-footer">
                            Choose<br>Design Intent Technique
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="method-card">
                        <h4 class="method-card-title">For Moulds and<br>Mixed Geometry</h4>
                        <div class="method-img-wrapper">
                            <img src="assets/images/blog53/method3.png" alt="Hybrid Modeling Technique" class="img-fluid">
                        </div>
                        <p class="method-card-footer">
                            Choose<br>Hybrid Modeling Technique
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="method-card">
                        <h4 class="method-card-title">For Freeform Styling<br>and Organic Surfaces</h4>
                        <div class="method-img-wrapper">
                            <img src="assets/images/blog53/method4.png" alt="NURBS Surface Technique" class="img-fluid">
                        </div>
                        <p class="method-card-footer">
                            Choose<br>NURBS Surface Technique
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Workflow Section -->
    <section class="workflow-section">
        <div class="container px-lg-5">
            <h2 class="section-title text-center mb-4">Precise3DM Reverse Engineering Workflow</h2>
            
            <div class="text-center mb-5">
                <span class="workflow-badge">REVERSE ENGINEERING PROJECT</span>
            </div>

            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between mx-auto" style="max-width: 1200px;">
                <!-- INPUT Column -->
                <div class="text-center mb-4 mb-lg-0" style="flex: 0 1 22%;">
                    <h4 class="step-header text-theme-orange mb-1">INPUT</h4>
                    <p class="step-sub mb-2">The customer provides us with</p>
                    <div class="text-theme-orange mb-2 fs-5">↓</div>
                    
                    <div class="workflow-card">
                        <img src="assets/images/blog53/project1.png" alt="Physical Object" class="img-fluid mb-3 rounded">
                        <p class="fw-bold mb-0 small">Physical Object</p>
                    </div>
                </div>

                <!-- Arrow -->
                <div class="text-center d-none d-lg-block text-theme-orange fs-2">→</div>

                <!-- MIDDLE Column -->
                <div class="text-center mb-4 mb-lg-0" style="flex: 0 1 48%;">
                    <p class="middle-header mb-3">3D Scanning <span class="text-theme-orange">+</span> CAD Modelling</p>
                    
                    <div class="workflow-card middle-card p-3 p-lg-4">
                        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3">
                            <!-- 3D Scanning -->
                            <div class="text-center flex-fill">
                                <img src="assets/images/blog53/project2.png" alt="3D Scanning" class="img-fluid mb-2 process-img">
                                <div class="mb-2">
                                    <a href="sample-data.php" class="download-link">Download Sample 3D Scan</a>
                                </div>
                                <p class="fw-bold mb-0" style="font-size: 13px; !important">3D Scanning</p>
                            </div>
                            
                            <!-- Arrow -->
                            <div class="d-none d-md-block text-theme-orange fs-4">→</div>
                            
                            <!-- Parametric CAD -->
                            <div class="text-center flex-fill">
                                <img src="assets/images/blog53/project3.png" alt="Parametric CAD" class="img-fluid mb-2 process-img">
                                <div class="mb-2">
                                    <span class="download-link">Download Parametric CAD Model</span>
                                </div>
                                <p class="fw-bold mb-0" style="font-size: 13px; !important">Parametric CAD</p>
                            </div>
                            
                            <!-- OR text -->
                            <div class="text-theme-orange fw-bold or-text align-self-start mt-4 d-none d-md-block">(or)</div>
                            <div class="text-theme-orange fw-bold or-text d-md-none my-2">(or)</div>
                            
                            <!-- Nurbs CAD -->
                            <div class="text-center flex-fill">
                                <img src="assets/images/blog53/project4.png" alt="Nurbs CAD" class="img-fluid mb-2 process-img">
                                <div class="mb-2">
                                    <span class="download-link">Download Nurbs CAD Model</span>
                                </div>
                                <p class="fw-bold mb-0" style="font-size: 13px; !important">Nurbs CAD</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Arrow -->
                <div class="text-center d-none d-lg-block text-theme-orange fs-2">→</div>

                <!-- OUTPUT Column -->
                <div class="text-center" style="flex: 0 1 22%;">
                    <h4 class="step-header text-theme-orange mb-1">OUTPUT (Deliverables)</h4>
                    <p class="step-sub mb-2">We Deliver</p>
                    <div class="text-theme-orange mb-2 fs-5">↓</div>
                    
                    <div class="workflow-card">
                        <div class="mb-3">
                            <img src="assets/images/blog53/project-icons.png" alt="Icons" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <div class="output-inner-box">
                            <p class="fw-bold mb-2" style="font-size: 12px;">Parametric CAD<br>(or) Editable CAD</p>
                            <img src="assets/images/blog53/project5.png" alt="Software Logos" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Info Banner -->
            <div class="info-banner mt-5">
                <div class="d-flex align-items-center" style="gap:10px;">
                    <div>
                        <img src="assets/images/blog53/bulb-icon.png" alt="Info" style="width: 40px; height: 40px; object-fit: contain;">
                    </div>
                    <p class="mb-0 ms-3 fw-medium text-start" style="font-size: 15px; color: #333;">We convert your physical part into accurate digital 3D CAD models for redesign, manufacturing or documentation.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Not Sure Section -->
    <section class="not-sure-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="not-sure-title">Not sure which method is right?</h2>
                    <p class="not-sure-desc">Upload your part image and our team will suggest the best approach<br class="d-none d-md-block">for your project.</p>
                    
                    <div class="contact-methods mt-4">
                        <!-- Phone -->
                        <div class="d-flex align-items-center mb-3" style="gap:10px;">
                            <div class="contact-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="contact-heading mb-1">Call us now</h5>
                                <p class="contact-details mb-0">
                                    <a href="tel:+919840478347">+91 98404 78347</a> <span class="divider">|</span> <a href="tel:+916374406179">+91 63744 06179</a>
                                </p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="d-flex align-items-center" style="gap:10px;">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="contact-heading mb-1">Email us</h5>
                                <p class="contact-details mb-0">
                                    <a href="mailto:sm@precise3dm.com">sm@precise3dm.com</a> <span class="divider">|</span> <a href="mailto:sales@precise3dm.com">sales@precise3dm.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side -->
                <div class="col-lg-4 text-lg-end text-center mt-4 mt-lg-0">
                    <a href="#" class="btn btn-upload-component">Upload Component Image</a>
                </div>
            </div>
        </div>
    </section>

   <!-- footer start -->
   <?php include('includes/footer.php'); ?>
   <!-- footer end -->

   <!-- bootstrap links-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.js"></script>
   <script type="text/javascript" src="assets/js/slim.min.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

   <!-- bootstrap links-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script> 

</body>

</html>
