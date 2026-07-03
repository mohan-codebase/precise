<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');

    /* Main Footer */
    footer .main-footer {
        padding: 15px 0;
        background: linear-gradient(180deg, #3B3B3B -14.65%, #202020 41.32%, #202020 62.03%) !important;
    }

    li {
        font-family: "Inter", sans-serif !important;
    }

    footer ul {
        padding-left: 0;
        list-style: none;
    }

    #app {
        z-index: 999 !important;
    }
    
    #gb-waw-iframe{
        display:none !important;
    }

    .footer-logo {
        width: 60%;
    }


    /* Footer Top */
    .footer-top {
        background: #252525;
        padding-bottom: 30px;
        margin-bottom: 30px;
        border-bottom: 3px solid #222;
    }

    /* Footer transparent */
    footer.transparent .footer-top,
    footer.transparent .main-footer {
        background: transparent;
    }

    footer.transparent .footer-copyright {
        background: none repeat scroll 0 0 rgba(0, 0, 0, 0.3);
    }

    /* Footer light */
    footer.light .footer-top {
        background: #f9f9f9;
    }

    footer.light .main-footer {
        background: #f9f9f9;
    }

    footer.light .footer-copyright {
        background: none repeat scroll 0 0 rgba(255, 255, 255, 0.3);
    }

    /*==================== 
    Widgets 
====================== */
    .widget {
        padding: 20px;
        margin-bottom: 40px;
    }

    .widget.widget-last {
        margin-bottom: 0px;
    }

    .widget.no-box {
        padding: 0;
        background-color: transparent;
        margin-bottom: 40px;
        box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none;
        -o-box-shadow: none;
    }

    .widget.subscribe p {
        margin-bottom: 18px;
    }

    .widget li a {
        color: #fff;
    }

    .widget li a:hover {
        color: #4b92dc;
    }

    .widget-title {
        margin-bottom: 20px;
    }

    .widget-title span::after {
        background: inherit;
        content: "";
        height: inherit;
        position: absolute;
        top: -4px;
        width: 50%;
    }

    .widget li a:hover {
        color: #FF931E;
        transation: 0.7s all;
    }

    .widget-title.text-center span,
    .widget-title.text-center span::after {
        margin-left: auto;
        margin-right: auto;
        left: 0;
        right: 0;
    }

    .widget .badge {
        float: right;
        background: #7f7f7f;
    }

    .typo-light h1,
    .typo-light h2,
    .typo-light h3,
    .typo-light h4,
    .typo-light h5,
    .typo-light h6,
    .typo-light p,
    .typo-light div,
    .typo-light span,
    .typo-light small {
        color: #fff;
    }

    ul.social-footer2 {
        margin: 0;
        padding: 0;
        width: auto;
    }

    ul.social-footer2 li {
        display: inline-block;
        padding: 0;
    }

    ul.social-footer2 li a:hover {
        background-color: #ff8d1e;
    }

    ul.social-footer2 li a {
        display: block;
        height: 30px;
        width: 30px;
        text-align: center;
    }

    .btn {
        background-color: #ff8d1e;
        color: #fff;
    }

    .btn:hover,
    .btn:focus,
    .btn.active {
        background: #4b92dc;
        color: #fff;
        -webkit-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        -moz-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        -ms-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        -o-box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        -webkit-transition: all 250ms ease-in-out 0s;
        -moz-transition: all 250ms ease-in-out 0s;
        -ms-transition: all 250ms ease-in-out 0s;
        -o-transition: all 250ms ease-in-out 0s;
        transition: all 250ms ease-in-out 0s;

    }

    hr {
        margin-top: 35px;
        margin-bottom: 20px;
        border: 0;
        margin-left: 9%;
        margin-right: 9%;
        border-top: 1px solid #575757;
    }

    .footer-2 h2 {
        color: rgba(201, 201, 201, 1);
        border-bottom: 1px solid rgb(97 97 97);
        padding-bottom: 25px;
        margin-bottom: 15px;
        font-size: 24px;
        font-weight: 400;
    }

    .points i {
        background: linear-gradient(180deg, #FBBD7B -10%, #FF931E 107.48%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 21px;
        /* Adjust the size as needed */
        padding-right: 8px;
    }

    .points a {
        line-height: 40px;
        font-weight: 200;
        font-size: 16px;
        color: rgba(201, 201, 201, 1);
        font-family: "Inter", sans-serif;
        transition: 0.4s all;
    }

    hr.separator{
        background: transparent !important;
        border: none !important;
    }

    .points li {
        display: flex;
        align-items: center;
        font-family: "Inter", sans-serif;
        font-weight: 200;
        font-size: 16px;
        color: rgba(201, 201, 201, 1);
    }

    .conditions a{
        transition: 0.5s all;
    }

    .conditions a:hover{
        color: #FF931E !important;
    }

    .points a:hover{
        color: #FF931E;
    }

    .container {
        max-width: 1350px;
    }

    .footer-1 p {
        color: rgba(201, 201, 201, 1);
        font-weight: 200;
        font-size: 16px !important;
    }

    .footer-0 i {
        font-size: 23px;
    }
    
    .w-a{
    position: fixed;
    bottom: 3%;
    right: 1%;
    width: 4%;
    z-index: 9999 !important;
    }
    
    @media(max-width:600px){
        .w-a {
    position: fixed;
    bottom: 10% !important;
    left: 3% !important;
    right: 3% !important;
    width: 12% !important;
    z-index: 9999 !important;
}
    }
    
</style>
<footer id="footer" class="footer-1" style="position:relative;">
  <a href="https://wa.me/919840478347" target="_blank">
    <img class="w-a" src="assets/images/handheld/whatsapp.png" alt="WhatsApp">
</a>
    <div class="main-footer widgets-dark typo-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 footer-0 pt-1">
                   <a href="https://www.precise3dm.com/"><img class="footer-logo" src="assets/images/handheld/footer-logo.png" alt="logo"></a> <br>
                    <p class="pt-3"><i class="fa-solid fa-location-dot"></i> Unit 6 Town Quay Wharf, Abbey Road, Barking, England, IG11 7BZ </p>
                   <a class="mt-4 btn" href="https://www.precise3dm.com/contact-us.php">Contact Us</a>
                </div>
                <div class="col-lg-3 footer-2 pt-4">
                    <h2>QUICK LINKS</h2>
                    <ul class="points">
                        <li><i class="fa-regular fa-circle-dot"></i> <a href="https://www.precise3dm.com/Business_partner_final.php">Business Partner program</a></li>
                        <li><i class="fa-regular fa-circle-dot"></i> <a href="https://www.precise3dm.com/Digital-manufacturing-lab-for-education.php">DM lab for Education</a></li>
                        <li><i class="fa-regular fa-circle-dot"></i> <a href="https://www.precise3dm.com/Book-demo-get-quote-for-3D-scanner.php">Geomagic software demo online</a></li>
                        <li><i class="fa-regular fa-circle-dot"></i> <a href="https://precise3dm.com/blogs/blog_page/">3D Scanning & 3D Printing Blogs</a></li>
                        <li><i class="fa-regular fa-circle-dot"></i> <a href="https://zoom.us/j/5314141454?pwd=ZENpUG1Mb3grb0U0OVFZMU5FWWUwUT09">Meet us live online</a></li>
                        <li><i class="fa-regular fa-circle-dot"></i> <a href="https://merchant.razorpay.com/policy/K4BRUjHEbn2T3y/shipping">Shipping Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 footer-2 pt-4">
                    <h2>PORTFOLIO</h2>
                    <ul class="points">
                        <li><i class="fa-regular fa-circle-dot"></i> <a href="https://www.precise3dm.com/affordable-3d-scanners-in-the-market.php">3D Products</a></li>
                        <li><i class="fa-regular fa-circle-dot"></i> <a href="https://www.precise3dm.com/3d-metrology-applications.php">3D Solutions</a></li>
                        <li><i class="fa-regular fa-circle-dot"></i> <a href="https://www.precise3dm.com/3d-services-in-india.php">3D Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 footer-2 pt-4">
                    <h2>CONTACT US</h2>
                    <ul class="points">
                        <li><i class="fa-solid fa-phone"></i> Sales: <a href="tel:+91 7395972777">+91 7395972777</a></li>
                        <li><i class="fa-solid fa-phone"></i> Service: <a href="tel:+91 9940352575">+91 9940352575</a></li>
                        <li><i class="fa-solid fa-square-envelope"></i> <a href="mailto:Sales@precise3dm.com">sales@precise3dm.com</a></li>
                        <li><i class="fa-solid fa-square-envelope"></i> <a href="mailto:Service@precise3dm.com">service@precise3dm.com</a></li>
                    </ul>
                   <a class="mt-4 btn" href="tel:+91 9840478347">Call Us at +91 9840478347</a>
                   <a class="mt-3 btn" href="tel:+91 99403 52575">Call Us at +91 99403 52575</a>
                </div>
            </div>
        </div>
        <hr sryle="color:#fff;">
        <div class="col-md-12 conditions text-center">
            <p style="color: #969696;">© 2025. All Rights Reserved. Precise 3D Metrology & Design Solutions Pvt. Ltd.
                &ensp;<a href="Disclaimer.php" style="color: #969696;">Disclaimer</a>&ensp; | &ensp;<a
                    href="Terms_conditions.php" style="color: #969696;">Terms & Conditions</a>&ensp; | &ensp;<a
                    href="Privacy_policy.php" style="color: #969696;">Privacy Policy</a> | &ensp;<a
                    href="refund-policy.php" style="color: #969696;">Refund Policy</a>
        </div>
    </div>
</footer>

<!-- bootstrap links-->
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/slim.min.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<!-- bootstrap links-->