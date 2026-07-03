<!DOCTYPE html>
<html>

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5FX95R9');</script>
    <!-- End Google Tag Manager -->
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');

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
    padding: 10px 65px;
    background: linear-gradient(-0.22deg, #000000 -48.98%, #666666 116.98%);
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
    src: url('assets/fonts/fira-sans/FiraSans-ExtraLight.otf');
    /* IE9 Compat Modes */
    src: url('assets/fonts/fira-sans/FiraSans-ExtraLight.otf') format('embedded-opentype'),
      /* IE6-IE8 */
      url('assets/fonts/fira-sans/FiraSans-ExtraLight.otf') format('woff2'),
      /* Super Modern Browsers */
      url('assets/fonts/fira-sans/FiraSans-ExtraLight.otf') format('woff'),
      /* Pretty Modern Browsers */
      url('assets/fonts/fira-sans/FiraSans-ExtraLight.otf') format('truetype'),
      /* Safari, Android, iOS */
      url('assets/fonts/fira-sans/FiraSans-ExtraLight.otf') format('svg');
    /* Legacy iOS */
  }

  @font-face {
    font-family: 'firasan-normal';
    src: url('assets/fonts/fira-sans/FiraSans-Medium.otf');
    /* IE9 Compat Modes */
    src: url('assets/fonts/fira-sans/FiraSans-Medium.otf') format('embedded-opentype'),
      /* IE6-IE8 */
      url('assets/fonts/fira-sans/FiraSans-Medium.otf') format('woff2'),
      /* Super Modern Browsers */
      url('assets/fonts/fira-sans/FiraSans-Medium.otf') format('woff'),
      /* Pretty Modern Browsers */
      url('assets/fonts/fira-sans/FiraSans-Medium.otf') format('truetype'),
      /* Safari, Android, iOS */
      url('assets/fonts/fira-sans/FiraSans-Medium.otf') format('svg');
    /* Legacy iOS */
  }

  @font-face {
    font-family: 'firasan-bold';
    src: url('assets/fonts/fira-sans/FiraSans-Bold.otf');
    /* IE9 Compat Modes */
    src: url('assets/fonts/fira-sans/FiraSans-Bold.otf') format('embedded-opentype'),
      /* IE6-IE8 */
      url('assets/fonts/fira-sans/FiraSans-Bold.otf') format('woff2'),
      /* Super Modern Browsers */
      url('assets/fonts/fira-sans/FiraSans-Bold.otf') format('woff'),
      /* Pretty Modern Browsers */
      url('assets/fonts/fira-sans/FiraSans-Bold.otf') format('truetype'),
      /* Safari, Android, iOS */
      url('assets/fonts/fira-sans/FiraSans-Bold.otf') format('svg');
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

  .navbar-expand-md .navbar-nav .dropdown-menu {
    background: linear-gradient(16.78deg, #000000 20.98%, #666666 126.98%);
  }

  .dropdown-content {
    background: linear-gradient(16.78deg, #000000 20.98%, #666666 126.98%);
  }

  .navbar-dark .navbar-nav .nav-link {
    color: rgb(255 255 255);
    color: #fff;
    text-transform: capitalize;
    font-size: 16px;
    letter-spacing: 1px !important;
    font-family: "Inter", sans-serif;
    letter-spacing: 1px;
    font-weight: 400;
  }

  .navbar-dark .navbar-nav .nav-link:hover {
    color: rgba(255, 141, 30, 1) !important;
    background-color: transparent !important;
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
    min-width: 200px;
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

  .top-first-mdadjust {
    justify-content: center;
    padding: 10px 30px 0 30px;
    align-items: baseline;
  }

  .buy {
    border: 0.5px solid rgb(222 222 222);
    padding: 5px 10px;
    font-size: 14px;
    font-family: "Inter", sans-serif !important;
    font-weight: 600;
    border-radius: 4px;
    margin-right: 0px;
  }

  .sales {
    border: 0.5px solid rgb(222 222 222);
    font-family: "Inter", sans-serif !important;
    padding: 5px 10px;
    font-size: 14px;
    font-weight: 600;
    border-radius: 4px;
  }

  .book-online {
    padding: 8px 10px;
    font-family: "Inter", sans-serif;
    font-size: 15px;
    width: 335px;
    border-radius: 50px;
  }

  .book-online1 {
    padding: 8px 10px;
    font-size: 15px;
    font-family: "Inter", sans-serif;
    width: 250px;
    border-radius: 50px;
  }

  .book-online2 {
    padding: 8px 10px;
    font-family: "Inter", sans-serif;
    font-size: 15px;
    width: 190px;
    border-radius: 50px;
  }

  .all {
    align-items: baseline;
    gap: 10px;
    justify-content: center;
    max-width: 100%;
    padding: 0px;
  }

  .all1 {
    justify-content: center;
    padding: 0px;
  }

  .navbar-expand-md .navbar-nav {
    flex-direction: row;
    gap: 25px;
  }

  .mob-nav {
    display: none;
  }

  .main-header {
    display: block;
  }

  .mob-nav {
    background: linear-gradient(16.78deg, #000000 -48.98%, #666666 126.98%);
  }

  #menu-btn {
    border-radius: 10px;
    color: #fff;
    background: #ff8d1e;
    padding:10px;
  }

  #services-btn {
    background: none !important;
    padding: 0px !important;
  }

  #mobile-menu {
    display: none;
  }

  #scanners-btn {
    background: none !important;
  }

  #structured-btn {
    background: none !important;
  }
</style>

<style>
  @media only screen and (min-width:512px) {
    .newone {
      display: none;
    }
  }

  /* /* @media only screen and (max-width:752px) {
    .newtech {
      display: none;
    }
  } */

  @media screen and (max-width: 900px) {
    header .navbar {
      padding: 10px 15px !important;
    }
    #mobile-menu {
      display: block !important;
      width: 90%;
      overflow-y:scroll;
    }
    .cad {
      margin-top: 20px;
    }

    .book-online {
      padding: 5px 6px !important;
      width: 140px !important;
      font-size: 8px !important;
    }

    .book-online1 {
      padding: 5px 8px !important;
      font-size: 8px !important;
      width: 100px !important;
    }

    .book-online2 {
      padding: 5px 8px !important;
      font-size: 8px !important;
      width: 95px !important;
    }
    .mob-nav {
      display: block !important;
    }

    .main-header {
      display: none !important;
    }

    .fixed-top {
      display: none;
    }

    .dropdown-btn {
      background: none !important;
      padding: 6px 0px !important;
    }

    .inside-btns button {
      background-color: rgba(255, 141, 30, 1) !important;
      width: 100%;
      border-radius: 13px;
      margin-top: 15px;
      padding:10px 0;
    }

    .inside-btns a {
      color: #fff !important;
    }

    #close-btn {
      color: #fff !important;
      border-radius: 50% !important;
      padding: 6px 13px !important;
      font-size: 24px !important;
      background:#ff8d1e;
    }    
  }
  .bcon-container {
    display: none !important;
  }
  @media screen and (max-width:900px){

    .gap-fix{
      display:none;
    }
    .mob-nav {
    position: sticky;
    top: 0;
    z-index: 1000;
    display: flex !important;
    align-items: center;
    justify-content: space-between;
    }
    .mob-menu-btn{
      border:none !important;
      background: transparent;
    }
    .mob-menu-btn:hover, .mob-menu-btn:focus {
      text-decoration: none;
      border:none !important;
      outline:none !important;
    }
    .mob-nav-links{
      position:absolute !important;
      top:0;
      right:-100%;
      width:90%;
      z-index:2000;
      background:#fff !important;
      height:100vh !important;
      padding:20px;
      transition:0.2s linear;
      display:none;
    }
    .mob-nav-links ul li a{
      color:#000 !important;
      font-size:16px !important;
    }
    li.nav-item a:hover {
      color: rgb(255, 255, 255);
      background-color:transparent;
      border-radius: 2px;
      text-transform: capitalize;
    }
    .dropdown-menu {
      background:transparent;
      border:none;
    }
    .mob-menu-btn i{
      font-size:30px !important;
      color:#fff !important;
    }
    .mob-close-btn{
      display:flex;
      justify-content:end;
      padding-bottom:20px;
      border-bottom:1px solid #a3a3a3;
    }
    .mob-close-btn i{
      font-size:30px !important;
      background:#FF931E;
      padding:10px;
      color:#fff;
    }
    .navbar-nav {
      height: 100%;
      overflow-y: scroll;
      padding: 0 10px;
    }
    .navbar-nav li{
      margin-top:10px;
    }
    .mob-down-list{
      display:flex;
      align-items:center;
      justify-content:space-between;
    }
    .sub-menu {
      display: none;  /* Hide the sub-menu by default */
      margin-left:20px;
      border-top:1px solid #FF931E;
    }

    .sub-menu.open {
      display: block;  /* Show the sub-menu when 'open' class is added */
    }
    .mob-nav-btns{
      text-align:center;
      margin:5rem 0;
    }
    .mob-nav-btns .btn{
      margin-top:1rem;
      padding:10px 10px !important;
      width: 100%;
    }
    .down-icon i{
        color:#000 !important;
    }
  }
  header .dropdown-menu li.dropdown{
      display:block; !important;
  }
</style>
<!------ Include the above in your HEAD tag ---------->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
  integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
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

      arrow.toggleClass('.d.drop::before'); /* Toggle the arrow's rotation */
    });
  });

</script>
<script>function vqTrackId() { return 'cea85603-94da-4ed4-bfec-05947dcbf367'; } (function (d, e) { var el = d.createElement(e); el.sa = function (an, av) { this.setAttribute(an, av); return this; }; el.sa('id', 'vq_tracking').sa('src', 'https://t.visitorqueue.com/p/tracking.min.js?id=' + vqTrackId()).sa('async', 1).sa('data-id', vqTrackId()); d.getElementsByTagName(e)[0].parentNode.appendChild(el); })(document, 'script'); </script>

    <!-- Schema Markups Start -->
    <!-- 1. Breadcrumb Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/", 
      "@type": "BreadcrumbList", 
      "itemListElement": [{
        "@type": "ListItem", 
        "position": 1, 
        "name": "Home",
        "item": "https://www.precise3dm.com/"  
      },{
        "@type": "ListItem", 
        "position": 2, 
        "name": "Contact Us",
        "item": "https://www.precise3dm.com/contact-us.php"  
      },{
        "@type": "ListItem", 
        "position": 3, 
        "name": "About Us",
        "item": "https://www.precise3dm.com/About_us.php"  
      },{
        "@type": "ListItem", 
        "position": 4, 
        "name": "Blog Page",
        "item": "https://www.precise3dm.com/blog-page.php"  
      },{
        "@type": "ListItem", 
        "position": 5, 
        "name": "Book Demo",
        "item": "https://www.precise3dm.com/Book-demo-get-quote-for-3D-scanner.php"  
      },{
        "@type": "ListItem", 
        "position": 6, 
        "name": "3D Scanner India",
        "item": "https://www.precise3dm.com/3d-scanners-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 7, 
        "name": "3D Scanner Form",
        "item": "https://www.precise3dm.com/3d-scanning-form.php"  
      },{
        "@type": "ListItem", 
        "position": 8, 
        "name": "3D Scanner OnsiteForm",
        "item": "https://www.precise3dm.com/3d-scanning-onsiteform.php"  
      },{
        "@type": "ListItem", 
        "position": 9, 
        "name": "3DScannerAhmedabad",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-ahmedabad.php"  
      },{
        "@type": "ListItem", 
        "position": 10, 
        "name": "3DScannerAurangabad",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-aurangabad.php"  
      },{
        "@type": "ListItem", 
        "position": 11, 
        "name": "3DScannerBangalore",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-bangalore.php"  
      },{
        "@type": "ListItem", 
        "position": 12, 
        "name": "3DScannerChennai",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-chennai.php"  
      },{
        "@type": "ListItem", 
        "position": 13, 
        "name": "3DScannerCoimbatore",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-coimbatore.php"  
      },{
        "@type": "ListItem", 
        "position": 14, 
        "name": "3DScannerHosur",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-hosur.php"  
      },{
        "@type": "ListItem", 
        "position": 15, 
        "name": "3DScannerJaipur",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-jaipur.php"  
      },{
        "@type": "ListItem", 
        "position": 16, 
        "name": "3DScannerJodhpur",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-jodhpur.php"  
      },{
        "@type": "ListItem", 
        "position": 17, 
        "name": "3DScannerKochi",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-kochi.php"  
      },{
        "@type": "ListItem", 
        "position": 18, 
        "name": "3DScannerMumbai",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-mumbai.php"  
      },{
        "@type": "ListItem", 
        "position": 19, 
        "name": "3DScannerNagpur",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-nagpur.php"  
      },{
        "@type": "ListItem", 
        "position": 20, 
        "name": "3DScannerNashik",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-nashik.php"  
      },{
        "@type": "ListItem", 
        "position": 21, 
        "name": "3DScannerPune",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-pune.php"  
      },{
        "@type": "ListItem", 
        "position": 22, 
        "name": "3DScannerRajkot",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-rajkot.php"  
      },{
        "@type": "ListItem", 
        "position": 23, 
        "name": "3DScannerSurat",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-surat.php"  
      },{
        "@type": "ListItem", 
        "position": 24, 
        "name": "3DScannerUSA",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-the-USA.php"  
      },{
        "@type": "ListItem", 
        "position": 25, 
        "name": "3DScannerVadodra",
        "item": "https://www.precise3dm.com/3d-scanning-service-in-vadodara.php"  
      },{
        "@type": "ListItem", 
        "position": 26, 
        "name": "3DScannerIndia",
        "item": "https://www.precise3dm.com/3d-scanning-services-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 27, 
        "name": "3DIndia",
        "item": "https://www.precise3dm.com/3d-services-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 28, 
        "name": "3DSoftwareIndia",
        "item": "https://www.precise3dm.com/3d-software-provider-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 29, 
        "name": "3dDesktop",
        "item": "https://www.precise3dm.com/desktop-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 30, 
        "name": "Affordable3d",
        "item": "https://www.precise3dm.com/affordable-3d-scanners-in-the-market.php"  
      },{
        "@type": "ListItem", 
        "position": 31, 
        "name": "portablecrm",
        "item": "https://precise3dm.com/portable-cmm-inspection-service-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 32, 
        "name": "reverseeng",
        "item": "https://www.precise3dm.com/3d-Reverse-Engineering-Services-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 33, 
        "name": "arm3d",
        "item": "https://www.precise3dm.com/arm-based-3d-scanning-service-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 34, 
        "name": "automotive",
        "item": "https://www.precise3dm.com/automotive-benchmarking-services-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 35, 
        "name": "businessopportunity",
        "item": "https://www.precise3dm.com/business-opportunity-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 36, 
        "name": "buysell3dscanner",
        "item": "https://www.precise3dm.com/buy-and-sell-used-3D-scanners-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 37, 
        "name": "einscan3d",
        "item": "https://www.precise3dm.com/einscan-h-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 38, 
        "name": "einscanhx",
        "item": "https://www.precise3dm.com/einscan-hx-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 39, 
        "name": "einscanpro",
        "item": "https://www.precise3dm.com/einscan-pro-2x-2020-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 40, 
        "name": "einscanprohd",
        "item": "https://www.precise3dm.com/einscan-pro-hd-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 41, 
        "name": "electronics3d",
        "item": "https://www.precise3dm.com/electrical-electronics-benchmarking-service-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 42, 
        "name": "faro150",
        "item": "https://www.precise3dm.com/faro-focus-s150-mid-range-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 43, 
        "name": "faro350",
        "item": "https://www.precise3dm.com/faro-focus-s350-long-range-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 44, 
        "name": "faros70",
        "item": "https://www.precise3dm.com/faro-focus-s70-short-range-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 45, 
        "name": "freescanue",
        "item": "https://www.precise3dm.com/freescan-ue-pro-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 46, 
        "name": "freescanseries",
        "item": "https://www.precise3dm.com/freescan-ue-series-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 47, 
        "name": "geomagic",
        "item": "https://www.precise3dm.com/geomagic-control-x-3d-inspection-software.php"  
      },{
        "@type": "ListItem", 
        "position": 48, 
        "name": "geomagicreverse",
        "item": "https://www.precise3dm.com/geomagic-for-solidworks-reverse-engineering-software.php"  
      },{
        "@type": "ListItem", 
        "position": 49, 
        "name": "3dfreescan",
        "item": "https://www.precise3dm.com/handheld-industrial-3D-scanner-freescan-series.php"  
      },{
        "@type": "ListItem", 
        "position": 50, 
        "name": "3dservice",
        "item": "https://www.precise3dm.com/handheld-industrial-3d-scanning-service-india.php"  
      },{
        "@type": "ListItem", 
        "position": 51, 
        "name": "longrange3d",
        "item": "https://www.precise3dm.com/long-range-3d-scanning-service-india.php"  
      },{
        "@type": "ListItem", 
        "position": 52, 
        "name": "functional3d",
        "item": "https://www.precise3dm.com/multifunctional-3d-scanning-service-india.php"  
      },{
        "@type": "ListItem", 
        "position": 53, 
        "name": "whitelight",
        "item": "https://www.precise3dm.com/multifunctional-white-light-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 54, 
        "name": "opticalbluelight",
        "item": "https://www.precise3dm.com/optical-blue-light-3d-scanning-service-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 55, 
        "name": "organicshapes",
        "item": "https://www.precise3dm.com/organic-shapes-based-cad-reconstruction.php"  
      },{
        "@type": "ListItem", 
        "position": 56, 
        "name": "portablecmm",
        "item": "https://www.precise3dm.com/portable-cmm-inspection-service-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 57, 
        "name": "refurbished",
        "item": "https://www.precise3dm.com/refurbished-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 58, 
        "name": "geomagicdesignx",
        "item": "https://www.precise3dm.com/reverse-engineering-geomagic-design-x.php"  
      },{
        "@type": "ListItem", 
        "position": 59, 
        "name": "reverseengchennai",
        "item": "https://www.precise3dm.com/reverse-engineering-service-in-chennai.php"  
      },{
        "@type": "ListItem", 
        "position": 60, 
        "name": "reversecoimbatore",
        "item": "https://www.precise3dm.com/reverse-engineering-service-in-coimbatore.php"  
      },{
        "@type": "ListItem", 
        "position": 61, 
        "name": "reverseengindia",
        "item": "https://www.precise3dm.com/reverse-engineering-software-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 62, 
        "name": "structuredlight3d",
        "item": "https://www.precise3dm.com/structured-light-3d-scanner-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 63, 
        "name": "vehiclebenchmarking",
        "item": "https://www.precise3dm.com/vehicle-digital-benchmarking-service-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 64, 
        "name": "vehicleserviceindia",
        "item": "https://www.precise3dm.com/vehicle-digital-inspection-service-in-india.php"  
      },{
        "@type": "ListItem", 
        "position": 65, 
        "name": "vehicleteardown",
        "item": "https://www.precise3dm.com/vehicle-teardown-analysis-service-in-india.php"  
      }]
    }
    </script>

    <!-- 2. Review Schema (ProfessionalService) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "@id": "https://www.precise3dm.com/#business",
      "name": "Precise3DM",
      "image": "https://www.precise3dm.com/assets/images/logo.png",
      "url": "https://www.precise3dm.com/",
      "telephone": "+91-7395972777",
      "email": "sales@precise3dm.com",
      "priceRange": "$$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2/461, 2nd Floor, Rajas Tower, Medavakkam Main Rd, Kovilambakkam",
        "addressLocality": "Chennai",
        "addressRegion": "Tamil Nadu",
        "postalCode": "600129",
        "addressCountry": "IN"
      },
      "areaServed": "Worldwide",
      "serviceType": [
        "3D Scanning",
        "Reverse Engineering",
        "3D Printing",
        "3D Inspection",
        "Digital Manufacturing Solutions"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "2556"
      }
    }
    </script> 

    <!-- 3. Local Business Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Precise3DM",
      "image": "https://www.precise3dm.com/assets/images/logo.png",
      "@id": "https://www.precise3dm.com/#localbusiness",
      "url": "https://share.google/JtAbIP4gykobduks6",
      "telephone": "099403 52575",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "No:2/461, 2nd Floor, Rajas Tower",
        "addressLocality": "Chennai",
        "postalCode": "600129",
        "addressCountry": "IN"
      }  
    }
    </script>
    <!-- Schema Markups End -->

</head>

<body>
    <!-- Navigation -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FX95R9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="fixed-top">
  <header class="topbar-bg">
    <div class="container-fluid">
      <div class="row top-first-mdadjust">
        <div class="col-lg-3 all">

          <div class="dropdown">
            <a class="navbar-brand dropdown-toggle buy" data-toggle="dropdown" href="#">Buy</a>
            <div class="dropdown-content">
              <a href="3d-scanners-in-india.php">3D Scanner</a>
              <a href="https://www.precise3dm.com/3d-printing-service-in-india.php">3D Printer</a>
            </div>
          </div>

          <div class="dropdown">
            <a class="mail dropdown-toggle sales" data-toggle="dropdown" href="#"><i class="fa fa-envelope"
                aria-hidden="true"></i>E-mail</a>
            <div class="dropdown-content">
              <a href="mailto:Sales@precise3dm.com" style="text-transform: lowercase;">Sales@precise3dm.com</a>
              <a href="mailto:Service@precise3dm.com" style="text-transform: lowercase;">Service@precise3dm.com</a>
            </div>
          </div>

          <div class="dropdown">
            <a class="mail dropdown-toggle sales" data-toggle="dropdown" href="#"><i class="fas fa-phone-alt"
                aria-hidden="true"></i>Call Now</a>
            <div class="dropdown-content">
              <a href="tel:+91 7395972777" style="text-transform: Capitalize;">Sales: +91 7395972777</a>
              <a href="tel:+91 9940352575" style="text-transform: Capitalize;">Service: +91 9940352575 </a>
              <a href="tel:+91 90257 00192" style="text-transform: Capitalize;">Service: +91 90257 00192 </a>
            </div>
          </div>
        </div>

        <div class="col-lg-7 all1">
          <ul class="cad">
            <li>
              <a href="https://www.precise3dm.com/Book-demo-get-quote-for-3D-scanner.php"><button
                  class="upload book-online">Book Demo / Get Quote for 3D Scanner</button></a>
            </li>
            <li>
              <a href="https://www.precise3dm.com/Get-3d-scan-service-quote.php"><button class="upload book-online1">Get 3D Scan Service quote</button></a>
            </li>
            <li>
              <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09"><button
                  class="upload book-online2"><i class="fa-solid fa-video"></i> Meet Us live Online</button></a>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 all">
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
          
          <!-----Navbar in Descktop view------>
          
          <div class="col-12 col-sm-6 offset-col-md-0 col-md-9 offset-col-lg-2 col-lg-10 paddo newtech">
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ol-list" style="margin-left: 40px;">
                <li class="nav-item ">
                  <a class="nav-link home-link" href="https://www.precise3dm.com/">Home</a>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="https://www.precise3dm.com/3d-products.php">3D products</a>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/3d-scanners-in-india.php">3D Scanners</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="metrology-grade-3d-scanners.php">Metrology Grade 3D Scanners</a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle text-left py-2" href="handheld-3d-scanner-in-india.php">Handheld 3D Scanners</a>
                              <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="freescan-omni.php">Freescan Omni</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="FreeScan-Combo.php">FreeScan Combo</a>                              
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="freescan-ue-pro2.php">FreeScan UE Pro 2</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="freescan-ue-nova.php">FreeScan UE Nova</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="freescan-trio-triple-camera-handheld-laser-3D-scanner.php">FreeScan Trio</a>
                            </li>
                          </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle text-left py-2" href="laser-tracker-3d-scanner.php">Optical Tracking Systems</a>                              
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-left py-2" href="freescan-track-nova.php">FreeScan Trak Nova</a></li>
                                <li><a class="dropdown-item text-left py-2" href="freescan-trak-pro-w.php">FreeScan Trak Pro W</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle text-left py-2" href="structured-light-3d-scanner-in-india.php">structured Light 3d Scanner</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-left py-2" href="optimscan-q12.php">Optimscan Q12</a></li>
                                <li><a class="dropdown-item text-left py-2" href="OptimScan5M-Plus.php">Optimscan5M Plus</a></li>
                                <li><a class="dropdown-item text-left py-2" href="automatic-desktop-3d-scanner.php">AutoScan Inspec 2</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="professional-3d-scanners.php">Professional 3D Scanners</a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="einscan-rigil.php">EinScan Rigil</a>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="entry-level-3d-scanners.php">Entry Level 3D Scanners</a>
                          <ul class="dropdown-menu">
                            
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="einstar-2.php">Einstar 2</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="einstar-vega.php">Einstar Vega</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="einstar-rockit-product.php">Einstar Rockit</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="einscan-rigil.php">Einscan Rigil</a>
                            </li>
                          </ul>
                        </li>
                        
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/3d-scanners-by-technology.php">3D Scanner by Technology</a>
                            <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle text-left py-2" href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Structured Light 3D Scanners</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/optimscan-q12.php">OptimScan Q12</a></li>
                                <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/OptimScan5M-Plus.php">OptimScan5M Plus</a></li>
                                    <li><a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/automatic-desktop-3d-scanner.php">AutoScan Inspec2</a></li>
                                <!-- <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/transcan-c.php">Transcan C</a></li> -->
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle text-left py-2" href="https://www.precise3dm.com/3d-laser-scanners.php">3D Laser Scanners</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/FreeScan-Combo.php">Freescan Combo</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/freescan-ue-pro2.php">Freescan UE Pro 2</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/freescan-trio-triple-camera-handheld-laser-3D-scanner.php">Freescan Trio</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/freescan-ue-nova.php">Freescan UE Nova</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/einscan-rigil.php">EinScan Rigil</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/einstar-2.php">Einstar 2</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/freescan-omni.php">Freescan Omni</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle text-left py-2" href="infrared-3d-scanner.php">Infrared Light 3D Scanners</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-left py-2"
                                    href="FreeScan-Combo.php">Freescan Combo</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="einscan-rigil.php">EinScan Rigil</a></li>
                                <!-- <li><a class="dropdown-item text-left py-2"
                                    href="Einscanh2.php">EinScan H2</a></li> -->
                                <li><a class="dropdown-item text-left py-2"
                                    href="Einstar.php">Einstar</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="einstar-vega.php">Einstar Vega</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle text-left py-2" href="https://www.precise3dm.com/laser-tracker-3d-scanner.php">Optical Dynamic Tracker 3D Scanners</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/freescan-track-pro2.php">Freescan Trak Pro</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/freescan-track-nova.php">Freescan Trak Nova</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle text-left py-2" href="https://www.precise3dm.com/hybird-technology-3d-scanners.php">Hybrid Technology 3D Scanners</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/FreeScan-Combo.php">Freescan Combo</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/einscan-hx.php">Einscan HX</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/Einscanh2.php">Einscan H2</a></li>
                              </ul>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item dropdown-toggle text-left py-2" href="https://www.precise3dm.com/lidar-scanners.php">Lidar scanner</a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/leica-rtc360.php">Lecia RTC360</a></li>
                                <li><a class="dropdown-item text-left py-2"
                                    href="https://www.precise3dm.com/leica-blk360.php">Lecia BLK360</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php">3D Scanner by Component Size</a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-one">1 mm to 100 mm</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-home">1 mm to 400 mm</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-profile">30 mm to 2 Meters</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-messages">20 mm to 5 Meters</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-settings">10 mm to 10 Meters</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-5">200 mm to 15 Meters</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-6">50 mm to 50 Meters</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-7">Above 50 Meters</a>
                            </li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php">3D Scanner by Cost</a>
                          <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-home">₹1 Lakh to ₹5 Lakhs</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-profile">₹5 Lakhs – ₹10 Lakhs</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-messages">₹10 Lakhs – ₹20 Lakhs</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-settings">₹20 Lakhs – ₹30 Lakhs</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-5">₹30 Lakhs – ₹40 Lakhs</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-6">₹40 Lakhs – ₹50 Lakhs</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-7">₹50 Lakhs – ₹65 Lakhs</a>
                            </li>
                            <li class="dropdown-submenu">
                              <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-8">₹70 Lakhs – ₹80 Lakhs</a>
                            </li>
                          </ul>
                        </li>

                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php">3D Scanner by Application</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-home">Reverse Engineering</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-profile">Quality Control</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-messages">3D Printing</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-settings">3D Printed Parts Inspection</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-5">Healthcare application</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-6">Art and Heritage Preservation</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-7">Aerospace</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-8">Education</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-9">Jewellery</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-10">Hobbyists and Designers</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-11">Human Figurine</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-12">Art & Cultural Heritage</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-13">Turbine Parts</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-14">Animation & Game Design</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-15">Consumer Electronics</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-16">Screws and Fasteners</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-17">Orthotics & Prosthetics</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-18">Multifunctional 3D Scanners</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-19">Desktop 3D Scanners</a>
                                </li>
                                <li class="dropdown-submenu">
                                  <a class="dropdown-item text-left py-2" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-20">AICTE IDEA Lab</a>
                                </li>
                            </ul>
                        <li>
                        <!--<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"-->
                        <!--    href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Structured Light 3D Scanner</a>-->
                        <!--  <ul class="dropdown-menu">-->
                        <!--    <li><a class="dropdown-item text-left py-2"-->
                        <!--        href="https://www.precise3dm.com/OptimScan5M-Plus.php">OptimScan5M Plus</a></li>-->
                        <!--    <li><a class="dropdown-item text-left py-2"-->
                        <!--        href="https://www.precise3dm.com/transcan-c.php">Transcan C</a></li>-->
                        <!--  </ul>-->
                        <!--</li>-->
                        <!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="multifunctional-white-light-3d-scanner-in-india.php">Multifunctional 3D Scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="einscan-pro-hd-3d-scanner-in-india.php">Einscan Pro HD</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/einscan-pro2xv2.php">Einscan Pro2XV2</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="einscan-hx-3d-scanner-in-india.php">Einscan HX</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/Einscanh2.php">Einscan H2</a></li>
                          </ul>
                        </li> -->
                        <!-- <li class="dropdown"><a class="dropdown-item  text-left py-2"
                            href="https://www.precise3dm.com/handled-laser-3d-scanner.php">Handheld Laser 3D Scanner</a>
                        </li> -->
                        <!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="handheld-3d-scanner-in-india.php">Handheld Metrology 3D Scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="FreeScan-Combo.php">Freescan Combo</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-trio-triple-camera-handheld-laser-3D-scanner.php">Freescan Trio </a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="freescan-ue-pro-3d-scanner-in-india.php">Freescan UE pro </a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/freescan-ue-pro2.php">Freescan UE pro2 </a></li>
                          </ul>
                        </li> -->
                        <!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="handheld-color-3dscanning-service.php">Handheld Colour 3D scanning</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="Einscanh2.php">Einscan H2</a></li>
                          </ul>
                        </li> -->


                        <!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/desktop-3d-scanner-in-india.php">DESKTOP
                            Scanners</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="automatic-desktop-3d-scanner.php">AutoScan Inspec2</a></li>
                         
                          </ul>
                        </li> -->

                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="affordable-and-lowcost-3d-scanner-in-india.php">Low Cost 3D Scanner </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/Einstar.php">Einstar </a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/einstar-vega.php">Einstar Vega</a></li>
                          </ul>
                        </li>

                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/lidar-scanners.php">Long Range 3D Scanners </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/leica-blk360.php">Leica BLK360</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="https://www.precise3dm.com/leica-rtc360.php">Leica RTC360</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item text-left py-2"
                            href="https://www.precise3dm.com/used-3d-scanners-in-india.php">Used 3D scanners</a>
                          <!--<ul class="dropdown-menu">-->
                          <!--  <li><a class="dropdown-item text-left py-2"-->
                          <!--      href="laser-handheld-3d-scanner-india-freescan-x7.php">Freescan-->
                          <!--      X7</a></li>-->
                          <!--  <li><a class="dropdown-item text-left py-2"-->
                          <!--      href="freescan-ue-series-3d-scanner-in-india.php">Freescan-->
                          <!--      UE7</a></li>-->
                          <!--  <li><a class="dropdown-item text-left py-2"-->
                          <!--      href="freescan-ue-series-3d-scanner-in-india.php">Freescan-->
                          <!--      UE11 </a></li>-->
                          <!--</ul>-->
                        </li>

                        <!-- <li class="dropdown"><a class="dropdown-item  text-left py-2"
                            href="https://www.precise3dm.com/industrial-3dscanner-india-2025.php">Industrial 3D Scanners
                            india</a>

                        </li> -->
                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/3d-scanning-software.php">3D
                        Software</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/3d-scanning-and-reverse-engineering-software.php">3D Reverse Engineering Software</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="exactflat.php">Exactflat</a></li>
                            <li><a class="dropdown-item text-left py-2" href="reverse-engineering-geomagic-design-x.php">Geomagic Design X</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="geomagic-wrap-3d-scanning-software.php">Geomagic Wrap</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="geomagic-for-solidworks-reverse-engineering-software.php">Geomagic for Solidworks</a></li>

                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="3d-scanning-and-inspection-software.php">3D Inspection Software</a>
                          <ul class="dropdown-menu">
                            
                            <li><a class="dropdown-item text-left py-2"
                                href="geomagic-control-x-3d-inspection-software.php">Geomagic Control X</a></li>                            
                            <li><a class="dropdown-item text-left py-2"
                                    href="trueprop-software.php">Trueprop Inspection Software</a></li>
                            <li><a class="dropdown-item text-left py-2"
                                href="shining-3d-inspect-software.php">SHINING3D Inspect Software</a></li>
                          </ul>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2" href="https://www.precise3dm.com/3d-sculpting-software.php">3D Sculpting Software</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2"
                                href="geomagic-freeform-3d-modelling-design-software.php">Geomagic Freeform</a></li>

                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/3d-printing-service-in-india.php">3D Printer</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-left py-2" href="figure-4-standalone-3d-printer.php">Figure 4 Standalone</a></li>
                        <li><a class="dropdown-item text-left py-2" href="funmat-pro.php">Funmat Pro</a></li>
                        <li><a class="dropdown-item text-left py-2" href="industrial-fdm-3d-printers.php">Industrial FDM 3D Printers</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#">3D Solutions</a>
                    <div class="dropdown-content">
                      <a href="3d-metrology-applications.php">Applications
                      </a>

                    </div>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <!--<a class="nav-link dropdown-toggle" href="./3d-services-in-india.php" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 3D products
                                    </a>-->
                  <a class="nav-link dropdown-toggle" href="https://www.precise3dm.com/3d-services.php">3D Services</a>

                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="https://www.precise3dm.com/automotive-benchmarking-services-in-india.php">Automotive Benchmarking</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-left py-2"
                            href="vehicle-teardown-analysis-service-in-india.php">Teardown Analysis
                          </a></li>

                        <li>
                        <li><a class="dropdown-item text-left py-2"
                            href="vehicle-digital-benchmarking-service-in-india.php">Vehicle Digital
                            Benchmarking
                          </a></li>
                        <li><a class="dropdown-item text-left py-2"
                            href="vehicle-occupant-architecture-analysis-service.php">Vehicle Occupant &
                            Architecture
                          </a></li>
                        <li><a class="dropdown-item text-left py-2" href="vehicle-cad-reverse.php">Vehicle CAD
                            Reverse
                          </a></li>
                        <li><a class="dropdown-item text-left py-2"
                            href="electrical-electronics-benchmarking-service-in-india.php">Electrical & Electronics
                            Benchmarking
                          </a></li>
                        <li><a class="dropdown-item text-left py-2"
                            href="vehicle-digital-inspection-service-in-india.php">Vehicle Digital Inspection</a>
                        </li>
                        <li><a class="dropdown-item text-left py-2" href="material-testing.php">Material Testing
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle  text-left py-2"
                        href="3d-scanning-services-in-india.php">3D Scanning Service</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="handheld-industrial-3d-scanning-service-india.php">Industrial Handheld 3D Scanning Services</a>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="handheld-color-3dscanning-service.php">Handheld Full-colour 3D Scanning Service</a>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="structured-light-3dscanning-services.php">Structured Light 3D Scanning Service</a>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="long-range-3dscanning-service.php">3D Laser Scanning (LiDAR) Service</a>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="portable-cmm-3d-scanning-service.php">Portabale CMM 3D Scanning</a>
                        </li>
                        <li class="dropdown-submenu"><a class="dropdown-item  text-left py-2"
                            href="dynamic-tracking-3d-scanning-services.php">Laser Tracker 3D scanning</a>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/3d-Reverse-Engineering-Services-in-india.php">3D reverse Engineering Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2" href="3d-inspection-service.php">3D Inpection Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="3d-printing-service-in-india.php">3D Printing Service</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="portable-cmm-inspection-service-in-india.php">Portable CMM Inspection Service</a>
                    </li>
                  </ul>
                </li>


                <li class="nav-item dropdown">
                  <!--<a class="nav-link dropdown-toggle" href="./3d-services-in-india.php" id="navbarDropdownMenuLink"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 3D products
                                    </a>-->
                  <a class="nav-link dropdown-toggle" href="#">resources</a>

                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/About_us.php">
                        About us</a>

                    </li>
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                        href="Globalvision.php">
                        Global</a>
                      <ul class="dropdown-menu">

                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="https://www.precise3dm.com/uk/">UK</a>
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
                            href="3d-scanning-service-in-the-USA.php">USA</a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-left py-2" href="3d-usa-onsite-scan-upload.php">3D Scanning</a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Automotive Benchmarking</a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Factory scanning and Digitization</a></li>
                            <li><a class="dropdown-item text-left py-2" href="#">Laser scanning and BIM modelling</a></li>
                          </ul>
                        </li>


                        <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle text-left py-2"
                            href="structured-light-3d-scanner-in-india.php">Europe</a>
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
                            href="structured-light-3d-scanner-in-india.php">UAE</a>
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
                            href="structured-light-3d-scanner-in-india.php">Brazil</a>
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
                        href="business-opportunity-in-india.php">
                        Business Partner</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2" href="./technology-partner.php">
                        Technology Partner</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="https://www.precise3dm.com/geomagic-software.php">
                        Geomagic Software</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="3D_scanning_and_Printing_events_in_india_2021.php">
                        Geomagic Software Events</a>

                    </li>
                    <li class="dropdown"><a class="dropdown-item  text-left py-2"
                        href="blog-page.php">
                        Blogs</a>
                    </li>
                    <li class=""><a class="dropdown-item   text-left py-2" href="certificates-and-licenses.php">
                        certificates</a>

                    </li>
                    <li class="dropdow"><a class="dropdown-item  text-left py-2"
                        href="https://precise3dm.com/blogs/blog_page/jobs/">
                        Career</a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="contact-us.php">Contact Us</a>
                </li>
                <!-- <li class="nav-item">-->
                <!--<a href="tel:1800 202 0036"style="text-transform: Capitalize;">Toll Free Number :<br> 1800 202 0036</a>-->
                <!--</li>-->
              </ul>
            </div>
          </div>
          <!---->

        </div>
      </nav>
    </div>
  </header>
</div>

<!-- Nabar in mobile view -->

<nav class="navbar mob-nav">
  <a class="navbar-brand" href="#"><img src="assets/images/Precise Logos-08.png" class="img-fluid"
  width='250px' alt="logo"></a>
  <button class="mob-menu-btn">
    <i class="fa-solid fa-bars"></i>
  </button>
  <div class="mob-nav-links">
    <div class="mob-close-btn">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.precise3dm.com/">Home</a>
      </li>

      <!-- 3d products -->
      <li class="nav-item">
        <div class="mob-down-list">
          <a class="nav-link" href="https://www.precise3dm.com/3d-products.php">3D Products</a>
          <div class="down-icon">
            <i class="fa-solid fa-sort-down"></i>
          </div>
        </div>
        <ul class="sub-menu">
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-in-india.php">3D Scanners</a>
              <div class="down-icon">
                <i class="fa-solid fa-sort-down"></i>
              </div>
            </div>
            <ul class="sub-menu">
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="metrology-grade-3d-scanners.php">Metrology Grade 3D Scanners</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="handheld-3d-scanner-in-india.php">Handheld 3D Scanners</a>
                        <div class="down-icon">
                        <i class="fa-solid fa-sort-down"></i>  
                      </div>
                    </div>                    
                    <ul class="sub-menu">
                      <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link" href="freescan-omni.php">Freescan Omni</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link" href="FreeScan-Combo.php">FreeScan Combo</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link"  href="freescan-ue-pro2.php">FreeScan UE Pro 2</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link"  href="freescan-ue-nova.php">FreeScan UE Nova</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link"  href="freescan-trio-triple-camera-handheld-laser-3D-scanner.php">FreeScan Trio</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="laser-tracker-3d-scanner.php">Optical Tracking Systems</a>
                      <div class="down-icon">
                        <i class="fa-solid fa-sort-down"></i>
                      </div>
                    </div>
                    <ul class="sub-menu">
                      <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link" href="freescan-track-nova.php">FreeScan Trak Nova</a>
                        </div>
                      </li>
                      <!-- <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link" href="freescan-trak-pro-w.php">FreeScan Trak Pro W</a>
                        </div>
                      </li> -->
                    </ul>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link"  href="structured-light-3d-scanner-in-india.php">structured Light 3d Scanners</a>
                      <div class="down-icon">
                        <i class="fa-solid fa-sort-down"></i>
                      </div>
                    </div>
                    <ul class="sub-menu">
                      <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link" href="https://www.precise3dm.com/optimscan-q12.php">OptimScan Q12</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link" href="https://www.precise3dm.com/OptimScan5M-Plus.php">OptimScan5M Plus</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="mob-down-list sub-down-list">
                          <a class="nav-link" href="automatic-desktop-3d-scanner.php">AutoScan Inspec2</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="professional-3d-scanners.php">Professional 3D Scanners</a>
                  <div class="down-icon">
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-technology.php">3D Scanner by Technology</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Structured Light 3D Scanners</a>
                      <div class="down-icon">
                        <i class="fa-solid fa-sort-down"></i>
                      </div>                     
                    </div>
                     <ul class="sub-menu">
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="https://www.precise3dm.com/optimscan-q12.php">OptimScan Q12</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="https://www.precise3dm.com/OptimScan5M-Plus.php">OptimScan5M Plus</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link"  href="automatic-desktop-3d-scanner.php">AutoScan Inspec2</a>
                            </div>
                          </li>
                        </ul>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">3D Laser Scanners</a>
                      <div class="down-icon">
                        <i class="fa-solid fa-sort-down"></i>
                      </div>                     
                    </div>
                     <ul class="sub-menu">
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="https://www.precise3dm.com/FreeScan-Combo.php">Freescan Combo</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="https://www.precise3dm.com/freescan-ue-pro2.php">Freescan UE Pro 2</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="https://www.precise3dm.com/freescan-trio-triple-camera-handheld-laser-3D-scanner.php">Freescan Trio</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="https://www.precise3dm.com/freescan-ue-nova.php">Freescan UE Nova</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="https://www.precise3dm.com/einscan-rigil.php">EinScan Rigil</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="https://www.precise3dm.com/einstar-2.php">Einstar 2</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="https://www.precise3dm.com/freescan-omni.php">Freescan Omni</a>
                            </div>
                          </li>
                        </ul>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="infrared-3d-scanner.php">Infrared Light 3D Scanners</a>
                      <div class="down-icon">
                        <i class="fa-solid fa-sort-down"></i>
                      </div>
                    </div>
                    <ul class="sub-menu">
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="FreeScan-Combo.php">Freescan Combo</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="einscan-rigil.php">EinScan Rigil</a>
                            </div>
                          </li>
                          <!-- <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="Einscanh2.php">EinScan H2</a>
                            </div>
                          </li> -->
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="Einstar.php">Einstar</a>
                            </div>
                          </li>
                          <li class="nav-item">
                            <div class="mob-down-list sub-down-list">
                              <a class="nav-link" href="einstar-vega.php">Einstar Vega</a>
                            </div>
                          </li>
                        </ul>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/laser-tracker-3d-scanner.php">Optical Dynamic Tracker 3D Scanners</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/hybird-technology-3d-scanners.php">Hybrid Technology 3D Scanners</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/lidar-scanners.php">Lidar scanner</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php">3D Scanner by Component Size</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                   <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-one">1 mm to 100 mm</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-home">1 mm to 400 mm</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-profile">30 mm to 2 Meters</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-messages">20 mm to 5 Meters</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-settings">10 mm to 10 Meters</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link"href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-5">200 mm to 15 Meters</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-6">50 mm to 50 Meters</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-based-on-component-size.php#v-pills-7">Above 50 Meters</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/3d-light-scanner.php">3D Scanner by Cost</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-home">₹1 Lakh to ₹5 Lakhs</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-profile">₹5 Lakhs – ₹10 Lakhs</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-messages">₹10 Lakhs – ₹20 Lakhs</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-settings">₹20 Lakhs – ₹30 Lakhs</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link"href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-5">₹30 Lakhs – ₹40 Lakhs</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-6">₹40 Lakhs – ₹50 Lakhs</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-7">₹50 Lakhs – ₹65 Lakhs</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/buy-3d-scanners-by-price-in-india.php#v-pills-8">₹70 Lakhs – ₹80 Lakhs</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php">3D Scanner by Application</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-home">Reverse Engineering</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-profile">Quality Control</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-messages">3D Printing</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-settings">3D Printed Parts Inspection</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-5">Healthcare application</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-6">Art and Heritage Preservation</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-7">Aerospace</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-8">Education</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-9">Jewellery</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-10">Hobbyists and Designers</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link"href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-11">Human Figurine</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-12">Art & Cultural Heritage</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-13">Turbine Parts</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-14">Animation & Game Design</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-15">Consumer Electronics</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-16">Screws and Fasteners</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-17">Orthotics & Prosthetics</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="mob-down-list sub-down-list">
                        <a class="nav-link" href="https://www.precise3dm.com/3d-scanners-by-application.php#v-pills-19">Desktop 3D Scanners</a>
                        <div class="down-icon">
                        </div>
                      </div>
                    </li>
                  </ul>
              </li>
              <!--<li class="nav-item">-->
              <!--  <div class="mob-down-list sub-down-list">-->
              <!--    <a class="nav-link" href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Structured light 3D scanner</a>-->
              <!--    <div class="down-icon">-->
              <!--      <i class="fa-solid fa-sort-down"></i>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--  <ul class="sub-menu">-->
              <!--    <li class="nav-item">-->
              <!--      <div class="mob-down-list sub-down-list">-->
              <!--        <a class="nav-link" href="https://www.precise3dm.com/OptimScan5M-Plus.php">OptimScan5M Plus</a>-->
              <!--        <div class="down-icon">-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </li>-->
              <!--    <li class="nav-item">-->
              <!--      <div class="mob-down-list sub-down-list">-->
              <!--        <a class="nav-link" href="https://www.precise3dm.com/transcan-c.php">Transcan C</a>-->
              <!--        <div class="down-icon">-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </li>-->
              <!--  </ul>-->
              <!--</li>-->
              <!-- <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/multifunctional-white-light-3d-scanner-in-india.php">Multifunctional 3D Scanners</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/einscan-pro-hd-3d-scanner-in-india.php">Einscan Pro HD</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/einscan-pro2xv2.php">Einscan Pro2XV2</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/einscan-hx-3d-scanner-in-india.php">Einscan HX</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/Einscanh2.php">Einscan H2</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/handled-laser-3d-scanner.php">Handheld Laser 3D Scanner</a>
                  <div class="down-icon">
                  </div>
                </div>          
              </li> -->
              <!-- <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/handheld-3d-scanner-in-india.php">Handheld Metrology 3D Scanners</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/FreeScan-Combo.php">Freescan Combo</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/freescan-trio-triple-camera-handheld-laser-3D-scanner.php">Freescan Trio</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/freescan-ue-pro-3d-scanner-in-india.php">Freescan UE pro</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/freescan-ue-pro2.php">Freescan UE pro2</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li> -->
              <!-- <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/handheld-color-3dscanning-service.php">Handheld Colour 3D scanning</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/Einscanh2.php">Einscan H2</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li> -->
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/desktop-3d-scanner-in-india.php">DESKTOP Scanners</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/Jewellery-3D-Scanner-IN500.php">Jewellery-IN500</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="affordable-and-lowcost-3d-scanner-in-india.php">Low Cost 3D Scanner</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/Einstar.php">Einstar</a>
                      <div class="down-icon">
                      </div>
                    </div>
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/einstar-vega.php">Einstar Vega</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/laser-tracker-3d-scanner.php">Long Range 3D Scanners</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/leica-rtc360.php">Leica RTC360</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/leica-blk360.php">Leica BLK360</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/used-3d-scanners-in-india.php">Used 3D scanners</a>
                  <!--<div class="down-icon">-->
                  <!--  <i class="fa-solid fa-sort-down"></i>-->
                  <!--</div>-->
                </div>
                <!--<ul class="sub-menu">-->
                <!--  <li class="nav-item">-->
                <!--    <div class="mob-down-list sub-down-list">-->
                <!--      <a class="nav-link" href="https://www.precise3dm.com/laser-handheld-3d-scanner-india-freescan-x7.php">Freescan X7</a>-->
                <!--      <div class="down-icon">-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--  <li class="nav-item">-->
                <!--    <div class="mob-down-list sub-down-list">-->
                <!--      <a class="nav-link" href="https://www.precise3dm.com/freescan-ue-series-3d-scanner-in-india.php">Freescan UE7</a>-->
                <!--      <div class="down-icon">-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--  <li class="nav-item">-->
                <!--    <div class="mob-down-list sub-down-list">-->
                <!--      <a class="nav-link" href="https://www.precise3dm.com/freescan-ue-series-3d-scanner-in-india.php">Freescan UE11</a>-->
                <!--      <div class="down-icon">-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--  <li class="nav-item">-->
                <!--    <div class="mob-down-list sub-down-list">-->
                <!--      <a class="nav-link" href="https://www.precise3dm.com/industrial-3dscanner-india-2025.php">Faro M70</a>-->
                <!--      <div class="down-icon">-->
                <!--      </div>-->
                <!--    </div>-->
                <!--  </li>-->
                <!--</ul>-->
              </li>
              <!-- <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/industrial-3dscanner-india-2025.php">Industrial 3D Scanners</a>
                  <div class="down-icon">
                  </div>
                </div>          
              </li> -->
            </ul>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/3d-scanning-software.php">3D Software</a>
              <div class="down-icon">
                <i class="fa-solid fa-sort-down"></i>
              </div>
            </div>
            <ul class="sub-menu">
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/3d-scanning-and-reverse-engineering-software.php">3D Reverse Engineering Software</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/reverse-engineering-geomagic-design-x.php">Geomagic Design X</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/geomagic-wrap-3d-scanning-software.php">Geomagic Wrap</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/geomagic-for-solidworks-reverse-engineering-software.php">Geomagic for Solidworks</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="3d-scanning-and-inspection-software.php">3D Inspection Software</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/geomagic-control-x-3d-inspection-software.php">Geomagic Control X</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="trueprop-software.phpphp">Trueprop Inspection Software</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="shining-3d-inspect-software.php">SHINING3D Inspect Software</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="3d-sculpting-software.php">3D Sculpting Software</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/geomagic-freeform-3d-modelling-design-software.php">Geomagic Freeform</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/3d-printing-service-in-india.php">3D Printer</a>
              <div class="down-icon">
                <i class="fa-solid fa-sort-down"></i>
              </div>
            </div>
            <ul class="sub-menu">
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/figure-4-standalone-3d-printer.php">Figure4 Standalone</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="funmat-pro.php">Funmat Pro</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="industrial-fdm-3d-printers.php">Industrial FDM 3D Printers</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <!-- 3d solutions -->
      <li class="nav-item">
        <div class="mob-down-list">
          <a class="nav-link" href="#">3D Solutions</a>
          <div class="down-icon">
            <i class="fa-solid fa-sort-down"></i>
          </div>
        </div>
        <ul class="sub-menu">
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/3d-metrology-applications.php">Applications</a>
            </div>
          </li>
        </ul>
      </li>
      
      <!-- 3d Services -->
      <li class="nav-item">
        <div class="mob-down-list">
          <a class="nav-link" href="https://www.precise3dm.com/3d-services.php">3D Services</a>
          <div class="down-icon">
            <i class="fa-solid fa-sort-down"></i>
          </div>
        </div>
        <ul class="sub-menu">
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/automotive-benchmarking-services-in-india.php">Automotive Benchmarking</a>
              <div class="down-icon">
                <i class="fa-solid fa-sort-down"></i>
              </div>
            </div>
            <ul class="sub-menu">
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/vehicle-teardown-analysis-service-in-india.php">Teardown Analysis</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/vehicle-digital-benchmarking-service-in-india.php">Vehicle Digital Benchmarking</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/vehicle-occupant-architecture-analysis-service.php">Vehicle Occupant & Architecture</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/vehicle-cad-reverse.php">Vehicle CAD Reverse</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/electrical-electronics-benchmarking-service-in-india.php">Electrical & Electronics Benchmarking</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/vehicle-digital-inspection-service-in-india.php">Vehicle Digital Inspection</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/material-testing.php">Material Testing</a>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/3d-scanning-services-in-india.php">3D Scanning Service</a>
              <div class="down-icon">
                <i class="fa-solid fa-sort-down"></i>
              </div>
            </div>
            <ul class="sub-menu">
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="handheld-industrial-3d-scanning-service-india.php">Industrial Handheld 3D Scanning Services</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="handheld-color-3dscanning-service.php">Handheld Full-colour 3D Scanning Service</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="structured-light-3dscanning-services.php">Structured Light 3D Scanning Service</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="long-range-3dscanning-service.php">3D Laser Scanning (LiDAR) Service</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="portable-cmm-3d-scanning-service.php">Portabale CMM 3D Scanning</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="dynamic-tracking-3d-scanning-services.php">Laser Tracker 3D scanning</a>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/3d-Reverse-Engineering-Services-in-india.php">3D reverse Engineering Service</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/3d-inspection-service.php">3D Inpection Service</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/3d-printing-service-in-india.php">3D Printing Service</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="portable-cmm-inspection-service-in-india.php">Portable CMM Inspection Service</a>
            </div>
          </li>
        </ul>
      </li>

      <!-- Resource -->
      <li class="nav-item">
        <div class="mob-down-list">
          <a class="nav-link" href="#">Resource</a>
          <div class="down-icon">
            <i class="fa-solid fa-sort-down"></i>
          </div>
        </div>
        <ul class="sub-menu">
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/About_us.php">About us</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/Globalvision.php">Global</a>
              <div class="down-icon">
                <i class="fa-solid fa-sort-down"></i>
              </div>
            </div>
            <ul class="sub-menu">
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/uk/">UK</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="https://www.precise3dm.com/3d-usa-onsite-scan-upload.php">3D Scanning</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Automotive Benchmarking</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Factory scanning and Digitization</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Laser scanning and BIM modelling</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/3d-usa-onsite-scan-upload.php">USA</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">3D Scanning</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Automotive Benchmarking</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Factory scanning and Digitization</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Laser scanning and BIM modelling</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Europe</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">3D Scanning</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">3D Reverse Engineering</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Automotive Benchmarking</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Factory scanning and Digitization</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Laser scanning and BIM modelling</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">UAE</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">3D Scanning</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">3D Reverse Engineering</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Automotive Benchmarking</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Factory scanning and Digitization</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Laser scanning and BIM modelling</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <div class="mob-down-list sub-down-list">
                  <a class="nav-link" href="https://www.precise3dm.com/structured-light-3d-scanner-in-india.php">Brazil</a>
                  <div class="down-icon">
                    <i class="fa-solid fa-sort-down"></i>
                  </div>
                </div>
                <ul class="sub-menu">
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">3D Scanning</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">3D Reverse Engineering</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Automotive Benchmarking</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Factory scanning and Digitization</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <div class="mob-down-list sub-down-list">
                      <a class="nav-link" href="#">Laser scanning and BIM modelling</a>
                      <div class="down-icon">
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/business-opportunity-in-india.php">Business Partner</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/technology-partner.php">Technology Partner</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/geomagic-software.php">Geomagic Software</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/3D_scanning_and_Printing_events_in_india_2021.php">Geomagic Software Events</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="blog-page.php">Blogs</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://www.precise3dm.com/certificates-and-licenses.php">certificates</a>
            </div>
          </li>
          <li class="nav-item">
            <div class="mob-down-list sub-down-list">
              <a class="nav-link" href="https://precise3dm.com/blogs/blog_page/jobs/">Career</a>
            </div>
          </li>
        </ul>
      </li>

      <!-- Contact -->
      <li class="nav-item">
        <a class="nav-link" href="contact-us.php">Contact Us</a>
      </li>
      <div class="mob-nav-btns">
        <a href="https://www.precise3dm.com/Get-3d-scan-service-quote.php" class="btn">Get 3D Scan Service quote</a>
        <a href="https://www.precise3dm.com/Book-demo-get-quote-for-3D-scanner.php" class="btn">Book Demo / Get Quote for 3D Scanner</a>
        <a href="https://us02web.zoom.us/j/5903189768?pwd=T3VucDArMUY1NGxNRU1NMnJMYnVuQT09" class="btn"><i class="fa-solid fa-video"></i>  Meet Us live Online</a>
      </div>
    </ul>    
  </div>  
</nav>

<script>
  const menuBtn = document.querySelector(".mob-menu-btn");
  const closeBtn = document.querySelector(".mob-close-btn");
  const mobileNavbar = document.querySelector(".mob-nav-links");

  /* Open mobile menu when menu button is clicked */
  menuBtn.addEventListener('click', () => {
    mobileNavbar.style.right = "0%";  /* Show the mobile menu */
    mobileNavbar.style.display = "block"
  });

  /* Close mobile menu when close button is clicked */
  closeBtn.addEventListener('click', () => {
    mobileNavbar.style.right = "-100%";  /* Hide the mobile menu */
    mobileNavbar.style.display = "none";
  });

  /* Select all down arrows */
const downArrows = document.querySelectorAll('.down-icon');

downArrows.forEach(arrow => {
  /* Add click event listener to each down arrow */
  arrow.addEventListener('click', function() {
    /* Find the closest sub-menu to the clicked down-arrow */
    const subMenu = this.closest('.mob-down-list').nextElementSibling;

    /* Toggle the 'open' class on the sub-menu */
    if (subMenu) {
      subMenu.classList.toggle('open');
    }
  });
});

</script>


<!-- 
<div class="head-arrangement"></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
 -->
</body>
</html>