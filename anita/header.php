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
.topbar{
  background-color:#fff;
  padding:10px;
}

.topbar .container .row {
  margin:-7px;
  padding:0;
}

.topbar .container .row .col-md-12 { 
  padding:0;
}

.topbar p{
  margin:0;
  display:inline-block;
  font-size: 13px;
  color: #f1f6ff;
}

.topbar p > i{
  margin-right:5px;
}
.topbar p:last-child{
  text-align:right;
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
  border:none;
  margin:0;
  padding:0;
}

ul.social-network li {
  border:none;  
  margin:0;
}

ul.social-network li i {
  margin:0;
}

ul.social-network li {
    display:inline;
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
  margin: 5px 0 10px -25px;
  float: right;
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
    background-color: #222!important;
}

.mx-background-top-linear {
    background: -webkit-linear-gradient(45deg, #54d400 48%, #1b1e21 48%);
    background: -webkit-linear-gradient(left, #54d400 48%, #1b1e21 48%);
    background: linear-gradient(45deg,  #1b1e21 48%, #1b1e21 48%);
	
}
</style>
<style>

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
  top:50%;
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 0;
  margin: 2px 0 0 0;
  box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
  background-color: #ffffff;
  list-style-type: none;
}

.dd-input + .dd-menu {
  display: none;
} 

.dd-input:checked + .dd-menu {
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

.dd-menu li.divider{
  padding: 0;
  border-bottom: 1px solid #cccccc;
}
</style>
<header class="topbar">
      <div class="container">
        <div class="row">
          <!-- social icon-->
          <div class="col-sm-12">
		  <label class="dropdown" style="margin-top:10px;">
			  <div class="dd-button" style="font-size:13px;">
               Buy
			  </div>
			  <input type="checkbox" class="dd-input" id="test">
			  <ul class="dd-menu">
				<li><a href="#" style="font-size:13px;">3D Scanner</a></li>
				<li><a href="#" style="font-size:13px;">3D Printer</a></li>
			  </ul>
          </label>
            <ul class="social-network">
			<label class="dropdown">
            <img src="assets/images/images/2.png" width="15" height="15" style="text-align:left;">
			  <div class="dd-button">
			  Email
			  </div>
			  <input type="checkbox" class="dd-input" id="test">
			  <ul class="dd-menu">
				<li>sales@precise3dm.com</li>
				<li>service@precise3dm.com</li>
			  </ul>
  
          </label>
		  &emsp;
    	<label class="dropdown">
        <img src="assets/images/images/1.png" width="15" style="text-align:left;" height="15">
			  <div class="dd-button">
			  Call Now
			  </div>
			  <input type="checkbox" class="dd-input" id="test">
			  <ul class="dd-menu">
				<li>Sales: +91 9940352575</li>
				<li>Service: +91 9940352575</li>
			  </ul>
  
           </label>
			  <a class="btn" href="#." target="_blank" style="font-size:10px;padding:2px;">Upload 3D scan for CAD</a>&nbsp;
			  <a class="btn" href="#." target="_blank" style="font-size:10px;padding:2px;">Book Demo/Software Download</a>&nbsp;
			   <a class="btn" href="#." target="_blank" style="font-size:10px;padding:2px;">Get 3D scan service quote</a>&emsp;&emsp;&emsp;
              <li><img src="assets/images/images/linkedin.png" width="15" height="15"></li>
			  <li><img src="assets/images/images/whatsapp.png" width="15" height="15"></li>
			  <li><img src="assets/images/images/facebook.png" width="15" height="15"></li>
			  <li><img src="assets/images/images/Twitter.png"  width="15" height="15"></li>
			  <li><img src="assets/images/images/Youtube.png"  width="15" height="15"></li>
            </ul>
          </div>

        </div>
      </div>
  </header>
<header class="main-header">
    <div class="container-fluid p-0">
	
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
             <a class="navbrand " href="/"  style="width:190px">
              <img src="assets/images/pre-logo.svg" class="logo-img" style="width:250px;">
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./3D-products-landing.php">3d Products</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">3d Solutions</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./3d-services.php">3d Services</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Resources</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
			<a href='javascript:void(0);' class='topnav-icons fa w3-right w3-bar-item w3-button' onclick='open_search(this)' title='Search W3Schools'>&#xe802;</a>
          </div>
        </nav>
        </div>
    </div>
    </header>