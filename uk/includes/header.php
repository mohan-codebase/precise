<style>
  .navbar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  /*
headeer top
*/
  .topbar {
    background-color: #fff;
    position: unset;
  }

  .topbar .container .row {
    margin: -7px;
    padding: 0;
  }

  .topbar .container .row .col-md-12 {
    padding: 0;
  }

  .topbar p {
    margin: 0;
    display: inline-block;
    font-size: 13px;
    color: #f1f6ff;
  }

  .topbar p>i {
    margin-right: 5px;
  }

  .topbar p:last-child {
    text-align: right;
  }

  header .navbar {
    margin-bottom: 0;
  }

  .topbar li.topbar {
    display: inline;
    padding-right: 18px;
    line-height: 52px;
    transition: all .3s linear;
  }

  .topbar li.topbar:hover {
    color: #1bbde8;
  }

  .topbar ul.info i {
    color: #131313;
    font-style: normal;
    margin-right: 8px;
    display: inline-block;
    position: relative;
    top: 4px;
  }

  .topbar ul.info li {
    float: right;
    padding-left: 30px;
    color: #ffffff;
    font-size: 13px;
    line-height: 44px;
  }

  .topbar ul.info i span {
    color: #aaa;
    font-size: 13px;
    font-weight: 400;
    line-height: 50px;
    padding-left: 18px;
  }

  ul.social-network {
    border: none;
    margin: 0;
    padding: 0;
  }

  ul.social-network li {
    border: none;
    margin: 0;
  }

  ul.social-network li i {
    margin: 0;
  }

  ul.social-network li {
    display: inline;
    margin: 0 5px;
    border: 0px solid #2D2D2D;
    padding: 5px 0 0;
    display: inline-block;
    text-align: center;
    height: 32px;
    vertical-align: baseline;
    color: #000;
  }

  ul.social-network {
    list-style: none;
    float: right;
    margin-right: -36px;
    margin-top: 6px;
    position: ;
  }

  .waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    will-change: opacity, transform;
    transition: .3s ease-out;
    color: #fff;
  }

  a {
    color: #0a0a0a;
    text-decoration: none;
  }

  li {
    list-style-type: none;
  }

  .bg-image-full {
    background-position: center center;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
  }

  .bg-dark {
    background-color: #222 !important;
  }

  .mx-background-top-linear {
    background: -webkit-linear-gradient(45deg, #54d400 48%, #1b1e21 48%);
    background: -webkit-linear-gradient(left, #54d400 48%, #1b1e21 48%);
    background: linear-gradient(45deg, #1b1e21 48%, #1b1e21 48%);

  }

  a {
    text-decoration: none;
    color: #000000;
  }

  a:hover {
    color: #222222
  }

  /* Dropdown */

  .dropdown {
    display: inline-block;
    position: relative;
  }

  .dd-button {
    display: inline-block;
    border-radius: 4px;
    padding: 10px 30px 10px 10px;
    background-color: #ffffff;
    cursor: pointer;
    white-space: nowrap;
  }

  .dd-button:after {
    content: '';
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid black;
  }

  .dd-button:hover {
    background-color: #eeeeee;
  }


  .dd-input {
    display: none;
  }

  .dd-menu {
    position: absolute;
    top: 136%;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 0;
    margin: 2px 0 0 0;
    box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    list-style-type: none;
  }

  .dd-input+.dd-menu {
    display: none;
  }

  .dd-input:checked+.dd-menu {
    display: block;
  }

  .dd-menu li {
    padding: 10px 20px;
    cursor: pointer;
    white-space: nowrap;
  }

  .dd-menu li:hover {
    background-color: #f6f6f6;
  }

  .dd-menu li a {
    display: block;
    margin: -19px -20px;
    padding: 10px 20px;
  }

  .dd-menu li.divider {
    padding: 0;
    border-bottom: 1px solid #cccccc;
  }

  .topbar-bg {
    background-color: #fff;
  }

  .my-navdrpdwn a {
    text-transform: capitalize;
    font-size: 14px;
    font-family: 'Fira Sans', sans-serif;
    letter-spacing: 1px;
    font-weight: bold;
  }

  .my-navdrpdwn-menu {
    background-color: #ff8d1e;
  }

  .my-navdrpdwn-menu a:hover {
    color: #ff8d1e;
  }

  /*default css*/

  /*start css*/

  /*font*/

  @font-face {
    font-family: 'firasan-extrathin';
    src: url('../fonts/fira-sans/FiraSans-ExtraLight.otf');
    /* IE9 Compat Modes */
    src: url('../fonts/fira-sans/FiraSans-ExtraLight.otf') format('embedded-opentype'),
      /* IE6-IE8 */
      url('../fonts/fira-sans/FiraSans-ExtraLight.otf') format('woff2'),
      /* Super Modern Browsers */
      url('../fonts/fira-sans/FiraSans-ExtraLight.otf') format('woff'),
      /* Pretty Modern Browsers */
      url('../fonts/fira-sans/FiraSans-ExtraLight.otf') format('truetype'),
      /* Safari, Android, iOS */
      url('../fonts/fira-sans/FiraSans-ExtraLight.otf') format('svg');
    /* Legacy iOS */
  }

  @font-face {
    font-family: 'firasan-normal';
    src: url('../fonts/fira-sans/FiraSans-Medium.otf');
    /* IE9 Compat Modes */
    src: url('../fonts/fira-sans/FiraSans-Medium.otf') format('embedded-opentype'),
      /* IE6-IE8 */
      url('../fonts/fira-sans/FiraSans-Medium.otf') format('woff2'),
      /* Super Modern Browsers */
      url('../fonts/fira-sans/FiraSans-Medium.otf') format('woff'),
      /* Pretty Modern Browsers */
      url('../fonts/fira-sans/FiraSans-Medium.otf') format('truetype'),
      /* Safari, Android, iOS */
      url('../fonts/fira-sans/FiraSans-Medium.otf') format('svg');
    /* Legacy iOS */
  }

  @font-face {
    font-family: 'firasan-bold';
    src: url('../fonts/fira-sans/FiraSans-Bold.otf');
    /* IE9 Compat Modes */
    src: url('../fonts/fira-sans/FiraSans-Bold.otf') format('embedded-opentype'),
      /* IE6-IE8 */
      url('../fonts/fira-sans/FiraSans-Bold.otf') format('woff2'),
      /* Super Modern Browsers */
      url('../fonts/fira-sans/FiraSans-Bold.otf') format('woff'),
      /* Pretty Modern Browsers */
      url('../fonts/fira-sans/FiraSans-Bold.otf') format('truetype'),
      /* Safari, Android, iOS */
      url('../fonts/fira-sans/FiraSans-Bold.otf') format('svg');
    /* Legacy iOS */
  }

  html {
    scroll-behavior: smooth;
  }

  * {
    margin: 0;
    padding: 0;
    font-family: "firasan-normal", "sans-serif";
  }


  header.main-header {
    background-color: #000;
  }

  @media(min-width: 992px) {
    a.nav-link {
      font-size: 12px;
    }
  }

  .dropdown-submenu>.dropdown-menu {
    top: 10%;
    left: 100%;
    margin-top: -6px;
  }

  .navbar {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
  }


  .btn {
    display: inline-block;
    font-weight: 400;
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


  a {
    color: #0a0a0a;
    text-decoration: none;
  }

  li {
    list-style-type: none;
  }

  a {
    text-decoration: none;
    color: #000000;
  }

  a:hover {
    color: #222222
  }

  li.nav-item a {
    color: rgb(255, 255, 255);
    text-transform: capitalize;
  }

  li.nav-item a:hover {
    color: rgb(255, 255, 255);
    background-color: #fd9a05;
    border-radius: 2px;
    text-transform: capitalize;
  }

  .dropdown {
    display: inline-block;
    position: relative;
  }

  .dd-button {
    display: inline-block;
    border-radius: 4px;
    padding: 10px 30px 10px 10px;
    background-color: #ffffff;
    cursor: pointer;
    white-space: nowrap;
  }

  .dd-button:after {
    content: '';
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid black;
  }

  .dd-button:hover {
    background-color: #eeeeee;
  }

  .dd-input {
    display: none;
  }

  .dd-menu {
    position: absolute;
    top: 136%;
    border: 1px solid #110c0c;
    border-radius: 4px;
    z-index: 1;
    padding: 0;
    margin: 2px 0 0 0;
    box-shadow: 0 0 6px 0 rgb(0 0 0);
    background-color: #e58a1b;
    list-style-type: none;
  }

  .dd-input+.dd-menu {
    display: none;
  }

  .dd-input:checked+.dd-menu {
    display: block;
  }

  .dd-menu li {
    padding: 10px 20px;
    cursor: pointer;
    white-space: nowrap;
  }

  .dd-menu li:hover {
    background-color: #f6f6f6;
  }

  .dd-menu li a {
    display: block;
    margin: -19px -20px;
    padding: 10px 20px;
  }

  .dd-menu li.divider {
    padding: 0;
    border-bottom: 1px solid #cccccc;
  }

  .navbar-nav li:hover>ul.dropdown-menu {
    display: block;
  }

  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
  }

  .dropdown-menu {
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    font-size: 12px;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #000;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
    border-radius: 0.25rem;
  }

  /* rotate caret on hover */
  .dropdown-menu>li>a:hover:after {
    text-decoration: underline;
    transform: rotate(-90deg);
  }

  .navbar-dark .navbar-nav .nav-link {
    color: rgb(255 255 255);
    color: #fff;
    text-transform: capitalize;
    font-size: 14px;
    letter-spacing: 1px !important;
    font-family: 'Fira Sans', sans-serif;
    letter-spacing: 1px;
    font-weight: bold;
  }

  .dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    font-size: 12px;
    color: #212529;
    letter-spacing: 1px !important;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    text-transform: capitalize;
    border: 0;
  }
</style>
<style>
  Dropdown css
  /* Dropdown Button */

  .dropbtn {
    background-color: #ff931e;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
  }


  /* The container <div> - needed to position the dropdown content */

  .dropdown {
    position: relative;
    display: inline-block;
  }


  /* Dropdown Content (Hidden by Default) */

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 180px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }


  /* Links inside the dropdown */

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }


  /* Change color of dropdown links on hover */

  .dropdown-content a:hover {
    background-color: #ddd;
  }


  /* Show the dropdown menu on hover */

  .dropdown:hover .dropdown-content {
    display: block;
  }


  /* Change the background color of the dropdown button when the dropdown content is shown */

  .dropdown:hover .dropbtn {
    background-color: #ff931e;
  }

  .dropdown:hover .dropbtn {
    background-color: #ff931e !important;
  }

  .automotive-dropdown-head button {
    margin-top: 30px;
    border: 1px solid#ff931e !important;
  }

  .dropdown-content a:hover {
    background-color: #FF931E;
  }

  .dropdown-content a {
    /* padding: 7px 16px 10px; */
    text-decoration: none;
    background: #000;
    color: #fff;
    display: block;
    margin-top: 0px;
    padding: 7px;
    padding-top: 9px;
    font-size: 12px;
    letter-spacing: 1px !important;
    text-transform: capitalize !important;
    letter-spacing: 0px;
    font-family: 'firasan-normal';
    text-align: left;
    padding-left: 19px;
  }

  .d-drop::after {
    content: "";
    position: absolute;
    right: 0;
    top: 10px;
    width: 0.5em;
    height: 0.5em;
    border-right: 0.1em solid #fff;
    border-top: 0.1em solid #fff;
    transform: rotate(45deg);
  }

  .d-drop::before {
    transform: rotate(135deg);
  }

  .dropbtn {
    padding: 5px 19px;
    font-size: 12px;
    color: #fff;
    text-transform: capitalize;
    border-radius: 0;
    font-weight: bold;
    letter-spacing: 1px;
    width: 120px;
    height: 30px;
  }
</style>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="assets/js/jquery-3.6.0.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
<script>var chatbot_id = 9080; !function () { var t, e, a = document, s = "smatbot-chatbot"; a.getElementById(s) || (t = a.createElement("script"), t.id = s, t.type = "text/javascript", t.src = "https://smatbot.s3.amazonaws.com/files/smatbot_plugin.js.gz", e = a.getElementsByTagName("script")[0], e.parentNode.insertBefore(t, e)) }();</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fingerprintjs2/1.5.1/fingerprint2.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96527116-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());
  gtag('config', 'UA-96527116-1');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
      n.callMethod ?
        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2980089008869976');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=2980089008869976&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->
<script type="text/javascript">
  _linkedin_partner_id = "2283548";
  window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
  window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
  (function () {
    var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript"; b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);
  })();

  $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
    }
    var $subMenu = $(this).next('.dropdown-menu');
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
      $('.dropdown-submenu .show').removeClass('show');
    });


    return false;
  });
  $(document).ready(function () {
    $('.d-drop::after').click(function () {
      var arrow = $(this).find('.d-drop::after');

      arrow.toggleClass('.d.drop::before'); // Toggle the arrow's rotation
    });
  });

</script>
<script>function vqTrackId() { return 'cea85603-94da-4ed4-bfec-05947dcbf367'; } (function (d, e) { var el = d.createElement(e); el.sa = function (an, av) { this.setAttribute(an, av); return this; }; el.sa('id', 'vq_tracking').sa('src', '//t.visitorqueue.com/p/tracking.min.js?id=' + vqTrackId()).sa('async', 1).sa('data-id', vqTrackId()); d.getElementsByTagName(e)[0].parentNode.appendChild(el); })(document, 'script'); </script>

<!-- Navigation -->

<div class="fixed-top">
  <header class="topbar-bg">
    <div class="container-fluid">
      <div class="row top-first-mdadjust">
        <div class="offset-col-1 col-3 col-sm-5 col-md-1 col-lg-1 margining d-flex justify-content-center">

          <div class="dropdown">
            <a class="navbar-brand dropdown-toggle buy" data-toggle="dropdown" href="#">Buy</a>
            <div class="dropdown-content">
              <a href="https://www.precise3dm.com/3d-scanners-in-india.php">3D Scanner</a>
              <a href="https://www.precise3dm.com/figure-4-standalone-3d-printer.php">3D Printer</a>
            </div>
          </div>

          <!--<div class="zero">
          <a class="navbar-brand dropdown-toggle buy" data-toggle="dropdown" href="#">Buy</a>
          <div class="dropdown-menu scanner">
            <a class="dropdown-item" href="3d-scanners-in-india.php">3D Scanner</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">3D Printer</a>
          </div>
        </div>-->
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-2 all">
          <div class="dropdown">
            <a class="mail dropdown-toggle sales" data-toggle="dropdown" href="#"><i class="fa fa-envelope"
                aria-hidden="true"></i>E-mail</a>
            <div class="dropdown-content">
              <a href="mailto:Sales@precise3dm.com" style="text-transform: lowercase;">Sales@precise3dm.com</a>
              <a href="mailto:Service@precise3dm.com" style="text-transform: lowercase;">Service@precise3dm.com</a>
            </div>
          </div>
          &emsp;

          <div class="dropdown">
            <a class="mail dropdown-toggle sales" data-toggle="dropdown" href="#"><i class="fas fa-phone-alt"
                aria-hidden="true"></i>Call Now</a>
            <div class="dropdown-content">
              <a href="tel:+91 7395972777" style="text-transform: Capitalize;">Sales: +91 7395972777</a>
            </div>
          </div>

        </div>
        &emsp;
        <div class="col-sm-12 col-md-5 col-lg-5 all1">
          <div>
            <ul class="cad">
              <li>
                <a href="https://www.precise3dm.com/Book-demo-get-quote-for-3D-scanner.php"><button class="upload">Book Demo / Get Quote for 3D Scanner</button></a>
              </li>
              <li>
                <a href="https://www.precise3dm.com/Get-3d-scan-service-quote.php"><button class="upload">Get 3D Scan Service
                    quote</button></a>
              </li>
              <li>
                <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09"><button
                    class="upload">Meet Us live Online</button></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-1 all2">
          <ul class="social-icon">
            <li>
              <a href="https://www.linkedin.com/company/precise-3d-metrology-design-solutions" class="ico1">
                <i class="fab fa-linkedin" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://wa.me/c/919940045720" class="ico2">
                <i class="fab fa-whatsapp" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://www.facebook.com/precise3dm" class="ico3">
                <i class="fab fa-facebook-f" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/precise3d_m" class="ico4">
                <i class="fab fa-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCVIb-HcyEcrQXV99jH2VtVw" class="ico5">
                <i class="fab fa-youtube" aria-hidden="true"></i>
              </a>
            </li>
          </ul>
          <!--<ul class="cad">

            
            <li>
              <a href="tel:1800 202 0036" style="text-transform: Capitalize;"><button class="upload">Toll Free: 1800 202 0036 </button></a>
              
            </li> 
          </ul>-->
        </div>
        <div class=" col-xs-6   col-md-12 col-lg-2 all2">
          <ul class="cad">

          </ul>
        </div>
      </div>
    </div>
  </header>
  <header class="main-header">
    <div class="conatiner-fluid main-part">
      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid paddo">

          <div class="col-6 col-sm-6 col-md-2 col-lg-2">
            <a href="https://www.precise3dm.com/"><img src="assets/images/Precise Logos-08.png" class="img-fluid"
                width='250px' alt="logo"></a>
          </div>
          <script>
            function myFunction() {
              var x = document.getElementById("myDIV");
              if (x.style.display === "none") {
                x.style.display = "block";
              } else {
                x.style.display = "none";
              }
            }

          </script>
          <style>
            @media only screen and (min-width:512px) {
              .newone {
                display: none;
              }
            }

            @media only screen and (max-width:752px) {
              .newtech {
                display: none;
              }
            }
          </style>
          <button onclick="myFunction()" class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="col-12 col-sm-6 offset-col-md-0 col-md-9 offset-col-lg-2 col-lg-10 paddo newone" id="myDIV">

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ol-list" style="margin-left:40px;">
                <li class="nav-item ">
                  <a class="nav-link home-link" href="./index.php">Home</a>
                </li>


                <li class="nav-item dropdown d-drop">

                  <a class="nav-link" href="https://www.precise3dm.com/buy-and-sell-used-3D-scanners-in-india.php">3D
                    products</a>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/3d-scanners-in-india.php">3D
                        Scanners</a>
                      <ul class="dropdown-menu">
                          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Structured Light 3D Scanner</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/OptimScan5M-Plus.php">OptimScan5M Plus</a></li>
                                  <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/transcan-c.php">Transcan C</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="multifunctional-white-light-3d-scanner-in-india.php">Multifunctional
                            3D Scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/einscan-pro-hd-3d-scanner-in-india.php">Einscan
                                Pro HD</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/einscan-pro-2x-2020-3d-scanner-in-india.php">Einscan
                                Pro2X 2020</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/einscan-hx-3d-scanner-in-india.php">Einscan HX</a></li>
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/einscan-h-3d-scanner-in-india.php">Einscan
                                H</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="https://www.precise3dm.com/handheld-3d-scanner-in-india.php">Handheld
                            Metrology 3D Scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/FreeScan-Combo.php">Freescan
                                Combo</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-ue-series-3d-scanner-in-india.php">Freescan
                                UE7</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-trio-triple-camera-handheld-laser-3D-scanner.php">Freescan
                                Trio </a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-ue-series-3d-scanner-in-india.php">Freescan
                                UE11 </a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-ue-pro-3d-scanner-in-india.php">Freescan UE
                                pro </a></li>
                          </ul>
                        </li>
                        
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="https://www.precise3dm.com/handheld-3d-scanner-in-india.php">Handheld Colour 3D scanning</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/Einscanh2.php">Einscan H2</a></li>
                          </ul>
                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/desktop-3d-scanner-in-india.php">DESKTOP
                            Scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/Jewellery-3D-Scanner-IN300.php">Jewellery-IN300</a></li>
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/einscan-se.php">Einscan
                                SE</a></li>
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/einscan-sp.php">Einscan
                                SP</a></li>
                          </ul>
                        </li>
                          <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="https://www.precise3dm.com/long-range-3d-scanner-in-india.php">Low Cost 3D Scanner </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/Einstar.php">Einstar</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="https://www.precise3dm.com/long-range-3d-scanner-in-india.php">Long
                            Range 3D Scanners </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/faro-focus-s350-long-range-3d-scanner-in-india.php">Faro
                                Focus S350 </a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/faro-focus-s150-mid-range-3d-scanner-in-india.php">Faro
                                S150</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/faro-focus-s70-short-range-3d-scanner-in-india.php">Faro
                                S70 </a></li>
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/faro-focus-m-70.php">Faro
                                M70</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/refurbished-3d-scanner-in-india.php">Used 3D scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/laser-handheld-3d-scanner-india-freescan-x7.php">Freescan
                                X7</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/3d-software-provider-in-india.php">3D
                        Software</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/reverse-engineering-software-in-india.php">3D Reverse Engineering Software</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/reverse-engineering-geomagic-design-x.php">Geomagic
                                Design X</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/geomagic-wrap-3d-scanning-software.php">Geomagic
                                Wrap</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/geomagic-for-solidworks-reverse-engineering-software.php">Geomagic
                                for Solidworks</a></li>

                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/3d-inspection-software-in-india.php">3D Inspction Software</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/geomagic-control-x-3d-inspection-software.php">Geomagic
                                Control X</a></li>

                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2" href="">3D
                            Sculpting Software</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/geomagic-freeform-3d-modelling-design-software.php">Geomagic
                                Freeform</a></li>

                          </ul>
                        </li>

                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2" href="#">3D
                        Printer</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/figure-4-standalone-3d-printer.php">Figure
                            4 Standalone </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <div class="dropdown">
                    <a class="nav-link" href="#">3D Solutions</a>
                    <div class="dropdown-content">
                      <a href="https://www.precise3dm.com/3d-metrology-applications.php">Applications
                      </a>

                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link" href="https://www.precise3dm.com/3d-services-in-india.php">3D Services</a>

                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/3d-scanning-service-in-the-USA.php">Automotive Benchmarking</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/vehicle-teardown-analysis-service-in-india.php">Teardown Analysis
                          </a></li>

                        <li>
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/vehicle-digital-benchmarking-service-in-india.php">Vehicle Digital
                            Benchmarking
                          </a></li>
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/vehicle-occupant-architecture-analysis-service.php">Vehicle Occupant &
                            Architecture
                          </a></li>
                        <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/vehicle-cad-reverse.php">Vehicle CAD
                            Reverse
                          </a></li>
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/electrical-electronics-benchmarking-service-in-india.php">Electrical & Electronics
                            Benchmarking
                          </a></li>
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/vehicle-digital-inspection-service-in-india.php">Vehicle Digital Inspection</a>
                        </li>
                        <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/material-testing.php">Material Testing
                          </a></li>
                      </ul>
                    </li>

                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/3d-scanning-services-in-india.php">3D Scanning Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2" href="https://www.precise3dm.com/3d-Reverse-Engineering-Services-in-india.php">3D reverse Engineering Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2" href="https://www.precise3dm.com/3d-inspection-service.php">3D
                        Inpection Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/3d-printing-service-in-india.php">3D Printing Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/portable-cmm-inspection-service-in-india.php">Portable CMM
                        Inpection Service</a>

                    </li>
                  </ul>
                </li>


                <li class="nav-item dropdown">
                  <!--<a class="nav-link dropdown-toggle" href="https://www.precise3dm.com/3d-services-in-india.php" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 3D products
                                    </a>-->
                  <a class="nav-link" href="#">resources</a>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                       <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/About_us.php">
                        About us</a>

                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/Globalvision.php">
                        Global</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/3d-scanning-service-in-the-USA.php">USA</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="3d-usa-onsite-scan-upload.php"> 3D
                                Scanning
                              </a></li>

                            <li>
                              <a href="3D-Reverse-Engineering-Services-in-the-USA.php">3D Reverse Engineering </a>
                            </li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Automotive Benchmarking
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Factory scanning and Digitization
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Laser scanning and BIM modelling
                              </a></li>

                          </ul>
                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Europe</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="#"> 3D Scanning
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Automotive Benchmarking
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Factory scanning and Digitization
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Laser scanning and BIM modelling
                              </a></li>

                          </ul>
                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">UAE</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="#"> 3D Scanning
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Automotive Benchmarking
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Factory scanning and Digitization
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Laser scanning and BIM modelling
                              </a></li>

                          </ul>
                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Brazil</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="#"> 3D Scanning
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Automotive Benchmarking
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Factory scanning and Digitization
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Laser scanning and BIM modelling
                              </a></li>

                          </ul>
                        </li>

                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/business-opportunity-in-india.php">
                        Business Partner</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2" href="https://www.precise3dm.com/technology-partner.php">
                        Technology Partner</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/geomagicsoftware.php">
                        Geomagic Software</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/3D_scanning_and_Printing_events_in_india_2021.php">
                        Geomagic Software Events</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://precise3dm.com/blogs/blog_page/">
                        Blogs</a>

                    </li>
                    <li class=""><a class="dropdown-item   text-left py-2" href="https://www.precise3dm.com/certificates-and-licenses.php">
                        certificates</a>

                    </li>
                    <li class="dropdow"><a class="dropdown-item  text-left py-2"
                        href="https://precise3dm.com/blogs/blog_page/jobs/">
                        Career</a>

                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="https://www.precise3dm.com/contact-us.php">Contact Us</a>
                </li>
                <!-- <li class="nav-item">-->
                <!--<a href="tel:1800 202 0036"style="text-transform: Capitalize;">Toll Free Number :<br> 1800 202 0036</a>-->
                <!--</li>-->
              </ul>
            </div>
          </div>
          <!---->
          <div class="col-12 col-sm-6 offset-col-md-0 col-md-9 offset-col-lg-2 col-lg-10 paddo newtech">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ol-list" style="margin-left: 40px;">
                <li class="nav-item ">
                  <a class="nav-link home-link" href="./index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                  <!--<a class="nav-link dropdown-toggle" href="https://www.precise3dm.com/3d-services-in-india.php" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 3D products
                                    </a>-->
                  <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-in-india.php">3D
                    products</a>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/3d-scanners-in-india.php">3D
                        Scanners</a>
                      <ul class="dropdown-menu">
                       <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Structured Light 3D Scanner</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/OptimScan5M-Plus.php">OptimScan5M Plus</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/transcan-c.php">Transcan C</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="multifunctional-white-light-3d-scanner-in-india.php">Multifunctional
                            3D Scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/einscan-pro-hd-3d-scanner-in-india.php">Einscan
                                Pro HD</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/einscan-pro-2x-2020-3d-scanner-in-india.php">Einscan
                                Pro2X 2020</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/einscan-hx-3d-scanner-in-india.php">Einscan HX</a></li>
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/einscan-h-3d-scanner-in-india.php">Einscan
                                H</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/handheld-3d-scanner-in-india.php">Handheld
                            Metrology 3D Scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/FreeScan-Combo.php">Freescan
                                Combo</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-ue-series-3d-scanner-in-india.php">Freescan
                                UE7</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-ue-series-3d-scanner-in-india.php">Freescan
                                UE11 </a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-trio-triple-camera-handheld-laser-3D-scanner.php">Freescan
                                Trio </a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-ue-pro-3d-scanner-in-india.php">Freescan UE
                                pro </a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/handheld-3d-scanner-in-india.php">Handheld Colour 3D scanning</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/Einscanh2.php">Einscan H2</a></li>
                          </ul>
                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2" href="https://www.precise3dm.com/desktop-3d-scanner-in-india.php">                            DESKTOP
                            Scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/Jewellery-3D-Scanner-IN300.php">Jewellery-IN300</a></li>
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/einscan-se.php">Einscan
                                SE</a></li>
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/einscan-sp.php">Einscan
                                SP</a></li>
                          </ul>
                        </li>
                        
                           <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/long-range-3d-scanner-in-india.php">Low Cost 3D Scanner </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/Einstar.php">Einstar </a></li>
                          </ul>
                        </li>
                        
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/long-range-3d-scanner-in-india.php">Long
                            Range 3D Scanners </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/faro-focus-s350-long-range-3d-scanner-in-india.php">Faro
                                Focus S350 </a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/faro-focus-s150-mid-range-3d-scanner-in-india.php">Faro
                                S150</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/faro-focus-s70-short-range-3d-scanner-in-india.php">Faro
                                S70 </a></li>
                            <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/faro-focus-m-70.php">Faro
                                M70</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/refurbished-3d-scanner-in-india.php">Used 3D scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/laser-handheld-3d-scanner-india-freescan-x7.php">Freescan
                                X7</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/3d-software-provider-in-india.php">3D
                        Software</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/reverse-engineering-software-in-india.php">3D Reverse Engineering Software</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/reverse-engineering-geomagic-design-x.php">Geomagic
                                Design X</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/geomagic-wrap-3d-scanning-software.php">Geomagic
                                Wrap</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/geomagic-for-solidworks-reverse-engineering-software.php">Geomagic
                                for Solidworks</a></li>

                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/3d-inspection-software-in-india.php">3D Inspction Software</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/geomagic-control-x-3d-inspection-software.php">Geomagic
                                Control X</a></li>

                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2" href="">3D
                            Sculpting Software</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/geomagic-freeform-3d-modelling-design-software.php">Geomagic
                                Freeform</a></li>

                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2" href="#">3D
                        Printer</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/figure-4-standalone-3d-printer.php">Figure
                            4 Standalone</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <div class="dropdown">
                    <a class="nav-link" href="#">3D Solutions</a>
                    <div class="dropdown-content">
                      <a href="https://www.precise3dm.com/3d-metrology-applications.php">Applications
                      </a>

                    </div>
                  </div>
                </li>



                <li class="nav-item dropdown">
                  <!--<a class="nav-link dropdown-toggle" href="https://www.precise3dm.com/3d-services-in-india.php" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 3D products
                                    </a>-->
                  <a class="nav-link" href="https://www.precise3dm.com/3d-services-in-india.php">3D Services</a>

                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/3d-scanning-service-in-the-USA.php">Automotive Benchmarking</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/vehicle-teardown-analysis-service-in-india.php">Teardown Analysis
                          </a></li>

                        <li>
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/vehicle-digital-benchmarking-service-in-india.php">Vehicle Digital
                            Benchmarking
                          </a></li>
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/vehicle-occupant-architecture-analysis-service.php">Vehicle Occupant &
                            Architecture
                          </a></li>
                        <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/vehicle-cad-reverse.php">Vehicle CAD
                            Reverse
                          </a></li>
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/electrical-electronics-benchmarking-service-in-india.php">Electrical & Electronics
                            Benchmarking
                          </a></li>
                        <li><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/vehicle-digital-inspection-service-in-india.php">Vehicle Digital Inspection</a>
                        </li>
                        <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/material-testing.php">Material Testing
                          </a></li>
                      </ul>
                    </li>

                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/3d-scanning-services-in-india.php">3D Scanning Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2" href="https://www.precise3dm.com/3d-Reverse-Engineering-Services-in-india.php">3D reverse Engineering Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2" href="https://www.precise3dm.com/3d-inspection-service.php">3D
                        Inpection Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/3d-printing-service-in-india.php">3D Printing Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/portable-cmm-inspection-service-in-india.php">Portable CMM
                        Inpection Service</a>

                    </li>
                  </ul>
                </li>


                <li class="nav-item dropdown">
                  <!--<a class="nav-link dropdown-toggle" href="https://www.precise3dm.com/3d-services-in-india.php" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 3D products
                                    </a>-->
                  <a class="nav-link" href="#">resources</a>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                       <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/About_us.php">
                        About us</a>

                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/Globalvision.php">
                        Global</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/3d-scanning-service-in-the-USA.php">USA</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="3d-usa-onsite-scan-upload.php"> 3D
                                Scanning
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Automotive Benchmarking
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Factory scanning and Digitization
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Laser scanning and BIM modelling
                              </a></li>

                          </ul>
                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Europe</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="#"> 3D Scanning
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Automotive Benchmarking
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Factory scanning and Digitization
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Laser scanning and BIM modelling
                              </a></li>

                          </ul>
                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">UAE</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="#"> 3D Scanning
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Automotive Benchmarking
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Factory scanning and Digitization
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Laser scanning and BIM modelling
                              </a></li>

                          </ul>
                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Brazil</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="#"> 3D Scanning
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Automotive Benchmarking
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Factory scanning and Digitization
                              </a></li>
                            <li><a class="dropdown-item text-left py-2" href="#"> Laser scanning and BIM modelling
                              </a></li>

                          </ul>
                        </li>

                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/business-opportunity-in-india.php">
                        Business Partner</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2" href="https://www.precise3dm.com/technology-partner.php">
                        Technology Partner</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/geomagicsoftware.php">
                        Geomagic Software</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/3D_scanning_and_Printing_events_in_india_2021.php">
                        Geomagic Software Events</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://precise3dm.com/blogs/blog_page/">
                        Blogs</a>

                    </li>
                    <li class=""><a class="dropdown-item   text-left py-2" href="https://www.precise3dm.com/certificates-and-licenses.php">
                        certificates</a>

                    </li>
                    <li class="dropdow"><a class="dropdown-item  text-left py-2"
                        href="https://precise3dm.com/blogs/blog_page/jobs/">
                        Career</a>

                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="https://www.precise3dm.com/contact-us.php">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <!---->

        </div>
      </nav>
    </div>
  </header>
</div>

<div class="head-arrangement"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>