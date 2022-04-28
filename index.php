<?php

	function getVisIpAddr() {
      
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }

    require DIR.'/vendor/autoload.php';
}
  
// Store the IP address
$vis_ip = getVisIPAddr();
  
// Display the IP address
// echo $vis_ip;

$ip = $vis_ip;
  
// Use JSON encoded string and converts
// it into a PHP variable
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));

$CountryName = $ipdat->geoplugin_countryName;   
$CountryCode = $ipdat->geoplugin_countryCode;

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>uNi Dating | Connect & Meet People Online</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="image/png" href="images/uNi-logo.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend&effect=neon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Join uNi Dating today! The most sophisticated dating platform to ever exist. Get to connect, chat and love...">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!-- <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/> -->
	<link rel="stylesheet" type="text/css" href="build/css/intlTelInput.css">
  	<script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

	<style type="text/css">
		.back-link a {
			color: #4ca340;
			text-decoration: none; 
			border-bottom: 1px #4ca340 solid;
		}
		.back-link a:hover,
		.back-link a:focus {
			color: #408536; 
			text-decoration: none;
			border-bottom: 1px #408536 solid;
		}
		h1 {
			height: 100%;
			/* The html and body elements cannot have any padding or margin. */
			margin: 0;
			font-size: 14px;
			font-family: 'Open Sans', sans-serif;
			font-size: 32px;
			margin-bottom: 3px;
		}
		.entry-header {
			text-align: left;
			margin: 0 auto 50px auto;
			width: 80%;
	    max-width: 978px;
			position: relative;
			z-index: 10001;
		}
		@media screen and (max-width: 700px){
		#google_translate_element select{
		  background-color: purple;
		  font-size: 16px;
			color:lightblue;
		  border: none;
		  color: #ffffff;
		  appearance: none;
		}
		.goog-logo-link{
		  display:none !important;
		}
	  .goog-te-gadget{
		  color:transparent!important;
		}
		.goog-te-banner-frame{
			display:none !important;
		}
		.goog-tooltip {
	    display: none !important;
		}
		.goog-tooltip:hover {
	    display: none !important;
		}
		.goog-text-highlight {
	    background-color: transparent !important;
	    border: none !important; 
	    box-shadow: none !important;
		}
		.sidebar {
		  height: 100%;
		  width: 0;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  right: 0;
		  background-color: rgb(163, 14, 128, 1);
		  background-image: linear-gradient(120deg, #FF2798, #ffffff);
		  background-image: linear-gradient(blue, purple);
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: contain;
		  overflow-x: hidden;
		  transition: 0.5s;
		  padding-top: 60px;
		}

		.sidebar a{
		  padding: 8px 8px 8px 32px;
		  text-decoration: none;
		  font-size: 15px;
		  color: #ffffff;
		  display: block;
		  transition: 0.3s;
		}

		.sidebar .features .sub-sideBar ul li{
			list-style-type: none;
		}

		.sidebar .login{
			width: 80%;
			height: auto;
			text-align: center;
			background-color: #ffffff;
			/*background-image: url(img/rectangle-175@2x.svg);*/
			color: rgb(163, 14, 128, 1);
			margin: 0 1.4375rem 0 0;
			position: absolute;
			bottom: 60px;
			right: 0;
			border-radius: 20px;
			padding: 10px 0;
			font-weight: bold;
			text-transform: uppercase;
		}

		.sidebar .translator{
			display: flex;
			position: absolute;
			bottom: 20px;
			/*right: 0;*/
		}

		.sidebar .translator .globe{
			padding-top: 3px;
			padding-left: 25px;
			padding-right: 2px;
		}

		.sidebar a:hover {
		  color: #f1f1f1;
		}

		.sidebar a img{
			width: 130px;
			height: 161px;
			margin-top: 180px;
			margin-left: 30px;
		}

		.sidebar .closebtn {
		  position: absolute;
		  top: 0;
		  right: 25px;
		  font-size: 36px;
		  margin-left: 50px;
		}

		.openbtn {
		  font-size: 25px;
		  cursor: pointer;
		  color: #A30E80;
		  padding: 10px 15px;
		  border: none;
		}

		.openbtn:hover {
		  background-color: #444;
		}

		#main {
		  transition: margin-left .5s;
		  padding: 16px;
		  margin-left: 100px;
		  margin-top: 8px;
		  text-align: right;
		}
		#myBtn {
		  display: none;
		  position: fixed;
		  bottom: 20px;
		  right: 30px;
		  z-index: 9;
		  font-size: 18px;
		  border: none;
		  outline: none;
		  background-color: purple;
		  color: white;
		  cursor: pointer;
		  padding: 15px;
		  border-radius: 4px;
		}
		/* The Modal (background) */
		.modal {
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  z-index: 1; /* Sit on top */
		  padding-top: 30px; /* Location of the box */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}

		/* Modal Content */
		.modal-content {
		  /*background-color: #fefefe;*/
		  background-image: linear-gradient(to bottom right, rgba(142, 142, 142, 1), rgba(165, 112, 112, 1));
		  background-image: linear-gradient(blue, purple);
		  margin: auto;
		  padding: 20px;
		  border: 1px solid #888;
		  width: 90%;
		  border-radius: 10px;
		  box-shadow: 3px 7px grey;
		}

		/*.modal-content p{
			width: 30%;
			height: auto;
			background-color: blue;
			background-image: linear-gradient(blue, purple);
			padding: 13px;
		}*/

		.modal-content .modal-header{
			width: 100%;
			height: auto;
			font-size: 23px;
			font-weight: bold;
			color: #33196b;
			padding-bottom: 20px;
			text-transform: uppercase;
			text-align: center;
		}

		.modal-content .modal-greeting{
			width: 100%;
			height: auto;
			font-size: 23px;
			margin-bottom: 25px;
			margin-top: 15px;
			color: lightskyblue;
		}

		.modal-content .modal-greeting a{
			text-decoration: none;
			color: lightskyblue;
			font-weight: bold;
		}

		.modal-content .modal-agreement{
			width: 100%;
			height: auto;
			font-size: 10px;
			/*padding-bottom: 30px;*/
			text-align: center;
			color: #33196b;
		}

		.modal-content .modal-login-number{
			width: 100%;
			height: auto;
			border-bottom: 1px solid #000000;
			font-size: 13px;
		}

		.modal-content .modal-login-number select{
			border: none;
			background: transparent !important;
			padding: 5px 0;
			display: none;
		}

		.modal-content .modal-login-number input{
			width: 100%;
			height: auto;
			border: none;
			background: transparent !important;
			padding: 5px 0;
			color: #000000;
			font-family: "Lexend", sans-serif;
			font-size: 12px;
			color: #ffffff;
		}

		.modal-content .modal-login-number input:target{
			border: none;
		}

		.modal-content .modal-number-continue{
			width: 100%;
			height: auto;
			margin-top: 20px;
		}

		.modal-content .modal-number-continue button{
			width: 100%;
			height: auto;
			color: #33196b;
			background-color: #ffffff;
			border: none;
			border-radius: 30px;
			font-size: 16px;
			padding: 10px 0;
			font-weight: bold;
		}

		.modal-content .modal-or{
			width: 100%;
			height: auto;
			margin: 190px 0 30px 0;
			text-align: center;
			font-size: 12px;
		}

		.modal-content .modal-login-google{
			width: 100%;
			height: auto;
			background: #000000;
			border: 2px solid #33196b;
			padding: 10px 0;
			border-radius: 30px;
			color: #ffffff;
			text-align: center;
			margin-bottom: 20px;
			font-weight: bold;
		}

		.modal-content .modal-login-apple{
			width: 100%;
			height: auto;
			background: #ffffff;
			border: 2px solid #33196b;
			padding: 10px 0;
			border-radius: 30px;
			color: #000000;
			text-align: center;
			margin-bottom: 4vh;
			font-weight: bold;
		}

		.modal-content .modal-agreement{
			color: lightskyblue;
		}

		.modal-content .modal-agreement a{
			color: deepskyblue;
		}

		/* The Close Button */
		.close {
		  color: #aaaaaa;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}

		.glow {
		  font-size: 80px;
		  color: #fff;
		  text-align: center;
		  animation: glow 1s ease-in-out infinite alternate;
		}

		@-webkit-keyframes glow {
		  from {
		    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
		  }
		  
		  to {
		    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
		  }
		}

		.text-box {
			position: relative;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		h1 {
			font-size: 8vw;
			font-weight: 900;
			background-color: #000;
			color: #fff;
			display: block;
			padding: .5em;
		}

		h1:nth-child(2) {
			position: absolute;
			background-color: #fff;
			color: #000;
			clip-path: inset(-1% -1% 50% -1%); // Added the negative values to prevent icky "bleed" in Chrome
		}
	}
	</style>
</head>
<body class="demo">

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

	<!-- Demo content -->			
	<div id="demo-content">

		<div id="loader-wrapper">
			<div id="loader"></div>

			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>

		<div id="container" class="container">

			<i class="fa fa-angle-double-up" onclick="topFunction()" id="myBtn"></i>

			<!-- The Modal -->
			<div id="myModal" class="modal">

			  <!-- Modal content -->
			  <div class="modal-content">
			    <span class="close">&times;</span>
			    <p><img src="images/uLogo.png" width="38px" height="43px"></p>
			    <div class="modal-greeting" id="greeting">
			    	<a href="" class="typewrite" data-period="2000" data-type='[ "Hey, Lets Get Started.", "Hey, Lets Get Started." ]'>
					    <span class="wrap"></span>
					  </a>
			    </div>
			    <div class="modal-login-number">
			    	<input name="phone" type="tel" id="phone"/> 
			    </div>
			    <div class="modal-number-continue"><button>Continue</button></div>
			    <div class="modal-or">OR</div>
			    <?php

					require_once 'google-api/vendor/autoload.php';

					$clientID = "854769676558-pp4vd787oqnuajhkbjkh5gcceln976v9.apps.googleusercontent.com";
					$clientSecret = "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";
					$redirectUrl = "http://localhost/Work/uNi_Dating/index.php";

					// Creating client request to google
					$client = new Google_Client();
					$client->setClientID($clientID);
					$client->setClientSecret($clientSecret);
					$client->setRedirectUri($redirectUrl);
					$client->addScope('profile');
					$client->addScope('email');

					if (isset($_GET['code'])) {
						$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
						$client->setAccessToken($token);

						$gauth = new Google_Service_Oauth2($client);
						$google_info = $gauth->userinfo->get();
						$email = $google_info->email;
						$name = $google_info->name;

						echo '<a href="user/match.php?email='.$email.'" style="text-decoration:none;"><div class="modal-login-apple" style="background-color:lightgreen;"><i class="fa fa-apple"></i>Continue</div></a>';
					}else{
						echo '<a href="'.$client->createAuthUrl().'" style="text-decoration:none;"><div class="modal-login-google"><i class="fa fa-google"></i> Log in with google</div></a>';
					}

				?>
			    
			    
			    <div class="modal-login-apple"><i class="fa fa-apple"></i>Log in with apple</div>
			    <div class="modal-agreement">By logging in, you agree to our <a href="">Terms and Conditions</a>. View our <a href="">Privacy Policy</a> and <a href="">Cookie Policy</a> to learn how we process your data.</div>
			  </div>

			</div>

			<div id="mySidebar" class="sidebar">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

			  <a href="javascript:void(0)" onclick="myFunctionSub()" class="features">
			  	Features <i class="fa fa-angle-down"></i>
			  	<div class="sub-sideBar" id="sub-sideBar" style="margin-top: -70px; display: none;">
						<ul style="list-style-type: none;">
							<li><a href="">Premium Features</a></li>
							<li><a href="">Suscription Tiers</a></li>
							<li><a href="">Story Mode</a></li>
							<li><a href="">Dark mode</a></li>
							<li><a href="">Date Fixer</a></li>
						</ul>
					</div>
			  </a>

			  <a href="#">How To Use</a>
			  <a href="#">Safety</a>
			  <a href="#">Download</a>
			  <!-- <a href="#" class="login"><i class="fa fa-sign-in" style="color: #ffffff;"></i> Login</a> -->
			  <a href="#"><img src="images/uLogo.png"></a>
			  <a href="#" class="translator">
			  	<div class="globe"><i class="fa fa-globe"></i></div>
			  	<div id="google_translate_element"></div>

                  <script type="text/javascript">
	                  function googleTranslateElementInit() {
	                    new google.translate.TranslateElement({
											 pageLanguage: 'en',
											 autoDisplay: 'true',
											 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
											 }, 'google_translate_element');
	                  }
                  </script>

                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
			  </a>
			</div>
		
			<div class="top-nav">
				<div class="icon"><a href="index.php"><div class="logo-background"><img src="images/uLogo.png"></div> <span class="heart"><img src="img/vector-6@2x.png" style="margin-left: -30px; margin-top: -3px;"></span><span class="uni">uNi</span></a></div>
				<div class="top-right-nav">
					<ul class="large-screen-nav">
						<li>
							<div id="google_translate_element"></div>

                  <script type="text/javascript">
	                  function googleTranslateElementInit() {
	                    new google.translate.TranslateElement({
											 pageLanguage: 'en',
											 autoDisplay: 'true',
											 layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
											 }, 'google_translate_element');
	                  }
                  </script>

                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						</li>
						<li><a href="">
							Features <i class="fa fa-angle-down"></i>
							<div class="sub-sideBar" id="sub-sideBar" style="margin-top: -70px; display: none;">
								<ul style="list-style-type: none;">
									<li><a href="">Premium Features</a></li>
									<li><a href="">Suscription Tiers</a></li>
									<li><a href="">Story Mode</a></li>
									<li><a href="">Dark mode</a></li>
									<li><a href="">Date Fixer</a></li>
								</ul>
							</div>
						</a></li>
						<li><a href="">How To Use</a></li>
						<li><a href="">Safety</a></li>
						<li><a href="">Download</a></li>
						<li><a href="">Download</a></li>
					</ul>
					<div id="main" style="margin-top: -2px;">
					<a href="javascript:void(0);" class="openbtn" onclick="openNav()">
    				<i class="fa fa-bars" style="font-size: 20px; color: #0000ff;"></i>
  				</a>
  				</div>
				</div>
			</div>

			<div class="middle-body">
				<div class="middle-body-text">
					<div class="header">
						<div class="header-name">uNi</div>
						<div class="header-slogan">Where Love Lives</div>
					</div>
					<div class="love"></div>
					<div class="curly-arrow"></div>
				</div>
				<div class="middle-body-write" id="typedtext"></div>
			</div>

			<div class="graphic first">
				
				<div class="middle-graphic">
					<div class="middle-graphic-imgs">
						<img class="img-01" src="img/ellipse-243@1x.png" width="229px" height="229px">
						<img class="img-02" src="img/ellipse-237@1x.png" width="276.5px" height="276.5px">
						<img class="img-03" src="img/ellipse-238@1x.png" width="315px" height="315px">
						<img class="img-04" src="img/ellipse-239@1x.png" width="360px" height="359.5px">
						<img class="left" src="img/middle2.jpg" width="190px" height="190px;" style="border-radius: 110px;">
						<!-- <div class="call">
							<img class="img-09" src="img/ellipse-280@2x.svg" width="76.6px" height="76.6px">
							<img class="img-10" src="img/vector-2@2x.svg" width="50px" height="40px">
						</div> -->
						<div class="love">
							<img class="img-05" src="img/ellipse-257@2x.svg" width="82.6px" height="82.6px">
							<img class="img-06" src="img/vector-5@2x.svg" width="46px" height="43.6px">
						</div>
						<div class="like">
							<img class="img-07" src="img/ellipse-258@2x.svg" width="82.6px" height="82.6px">
							<img class="img-08" src="img/vector-4@2x.svg" width="30px" height="30px">
						</div>
					</div>
					<div class="get-started"><a href="javascript:void(0)" id="myModalBtn">Get Started</a></div>
					<div class="login"><a href="javascript:void(0)" id="myModalBtn2">Login</a></div>
					<div class="middle-graphic-download">
						<?php
							$hua = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
							$os = 'I have no idea...';

							if(preg_match('/android/i', $hua)) {
							    $os = 'Android';
							    echo '<a href=""><img src="img/playstore.png" width="110px" height="38	px"></a>';
							} elseif (preg_match('/linux/i', $hua)) {
							    $os = 'Linux';
							    echo '
							    	<a href=""><img src="img/appstore.png" width="100px" height="35px"></a>
										<a href=""><img src="img/playstore.png" width="100px" height="35px"></a>
							    ';
							} elseif (preg_match('/iphone/i', $hua)) {
							    $os = 'iPhone';
							    echo '<a href=""><img src="img/appstore.png" width="100px" height="35px"></a>';
							} elseif (preg_match('/macintosh|mac os x/i', $hua)) {
							    $os = 'Mac';
							    echo '<a href=""><img src="img/appstore.png" width="100px" height="35px"></a>';
							} elseif (preg_match('/windows|win32/i', $hua)) {
							    $os = 'Windows';
							    echo '
							    	<a href=""><img src="img/appstore.png" width="100px" height="35px"></a>
										<a href=""><img src="img/playstore.png" width="100px" height="35px"></a>
							    ';
							}
						?>
					</div>
				</div>
				
			</div>
			<div class="graphic second">
				<div class="left-graphic">
					<div class="chat-01">
						<img src="img/indicator-4@1x.svg" width="120%" height="auto">
						<div class="msg-bar">
							<img src="img/group-1896-1@2x.svg" width="48.58px" height="45px">
							<div class="msg">
								<div class="msg-title">Chineye Agu</div>
								<div class="msg-detail">Hi Ebenezer, have you<br>seen the new movie?</div>
							</div>
							<div class="msg-user-det">
								<div class="msg-time">Yesterday</div>
								<div class="msg-noti">3</div>
							</div>
						</div>
					</div>
					<div class="chat-02">
						<img src="img/indicator-1@2x.svg" width="100%" height="auto">
						<div class="msg-bar">
							<div class="msg-you">You</div>
							<div class="msg-time">7:52PM</div>
						</div>
						<div class="msg-detail">Good Morning, any plan for today?</div>
					</div>
					<div class="chat-03">
						<img src="img/indicator-2@1x.svg" width="130%" height="auto">
						<div class="msg-bar">
							<img src="img/ellipse-302@2x.png" width="48.58px" height="45px">
							<div class="msg">
								<div class="msg-title">Tolu Adelola</div>
								<div class="msg-detail">Hey, what're you up to? <br>Missed you today.</div>
							</div>
							<div class="msg-user-det">
								<div class="msg-time">Yesterday</div>
								<div class="msg-noti">2</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="uni-background">uNi</div>
			<div class="testimonials">
				<div class="testimonials-title">Awesome Feedbacks</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Wanna connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Yusuf Amina</div>
				</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Maduka Joseph</div>
				</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Maduka Christopher</div>
				</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Maduka Joseph</div>
				</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Maduka Joseph</div>
				</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Maduka Joseph</div>
				</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Maduka Joseph</div>
				</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Maduka Joseph</div>
				</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Maduka Joseph</div>
				</div>
				<div class="testimony">
					<div class="testimonials-quote"><img src="img/group-331@2x.png" width="31px" height="20px"></div>
					<div class="write-up" style="font-size: 14px;">Connect with tons of other singles in Africa, trying to find somebody to date, flirt or chat with? Then uNi dating platform is exactly what you need.<br>Thank you uNi...</div>
					<div class="users-name">Maduka Joseph</div>
				</div>
			</div>
			<footer>
				<div class="footer-1">
					<div class="footer-get-app">Get The App <img src="img/ellipse-249-4@2x.svg" width="50px" height="50px"></div>
					<div class="footer-msg">uNi is the dating platform where love lives. Get to connect, meet and find those close to you. Find love and let love find you. Designed with you in mind, making connection seamless and fun as possible.
					<br>
					<br>	
					<?php
							$hua = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
							$os = 'I have no idea...';

							if(preg_match('/android/i', $hua)) {
							    $os = 'Android';
							    echo '<a href="">Download the app Now!</a>';
							} elseif (preg_match('/linux/i', $hua)) {
							    $os = 'Linux';
							    echo '<a href="">Download the app Now!</a>';
							} elseif (preg_match('/iphone/i', $hua)) {
							    $os = 'iPhone';
							    echo '<a href="">Download the app Now!</a>';
							} elseif (preg_match('/macintosh|mac os x/i', $hua)) {
							    $os = 'Mac';
							    echo '<a href="">Download the app Now!</a>';
							} elseif (preg_match('/windows|win32/i', $hua)) {
							    $os = 'Windows';
							    echo '<a href="">Download the app Now!</a>';
							}
						?>
					</div>
					<div class="footer-menu">
						<div class="legal">
							<!-- <ul>
								<li>Legal</li>
								<li><a href="">Privacy</a></li>
								<li><a href="">Terms</a></li>
								<li><a href="">Cookies Policy</a></li>
								<li><a href=""></a></li>
								<li><a href=""></a></li>
							</ul> -->
						</div>
						<!-- <div class="career">
							<ul>
								<li>Career</li>
								<li><a href="">Blank 2</a></li>
								<li><a href="">Blank 2</a></li>
								<li><a href="">Blank 2</a></li>
							</ul>
						</div> -->
						<div class="socials">
							<div>Socials</div>
							<i class="fa fa-facebook" style="color: purple; font-size: 16px;"></i>
							<i class="fa fa-twitter" style="color: purple; font-size: 16px;"></i>
							<i class="fa fa-instagram" style="color: purple; font-size: 16px;"></i><br>
							<i class="fa fa-linkedin" style="color: purple; font-size: 16px;"></i>
							<i class="fa fa-youtube" style="color: purple; font-size: 16px;"></i>
						</div>
					</div>
					<div class="footer-placeholder">
						<ul>
							<!-- <li><a href="">Blank</a></li> -->
							<li><a href="">Terms</a></li>
							<li><a href="">Privacy</a></li>
							<li><a href="">Safety Tips</a></li>
							<li class="last"><a href="">Cookies</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-2">© 2022 Nubia Integrated Mega Tech Ltd, All Rights Reserved.</div>
			</footer>

		</div>

	</div>
	<!-- /Demo content -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script>
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#3937a3"
        },
        "button": {
          "background": "#e62576"
        }
      },
      "content": {
        "message": "We value your privacy. We use trackers to measure the audience of our website and improve your uNi experience and provide you with the best service. You can withdraw your consent at any time in the setting.",
        "href": "https://siiuni.com/safety/privacy-policy"
      }
    });
    </script>
    <script>
			//Get the button
			var mybutton = document.getElementById("myBtn");

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			    mybutton.style.display = "block";
			  } else {
			    mybutton.style.display = "none";
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
		</script>
		<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the button that opens the modal
			var btn = document.getElementById("myModalBtn");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
			  modal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			  modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			  if (event.target == modal) {
			    modal.style.display = "none";
			  }
			}
		</script>
		<script>
			// Get the modal
			var modal = document.getElementById("myModal");

			// Get the button that opens the modal
			var btn = document.getElementById("myModalBtn2");

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
			  modal.style.display = "block";
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			  modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			  if (event.target == modal) {
			    modal.style.display = "none";
			  }
			}
		</script>

			<script>
        var input = document.querySelector("#phone");
        var countryCode = "<?php echo "$CountryCode" ?>";
        window.intlTelInput(input, {
          separateDialCode: true,
          excludeCountries: ["in", "il"],
          preferredCountries: [countryCode, "NG", "ZA", "GH"]
        });
      </script> 
  
		<script>
			// set up text to print, each item in array is new line
			var aText = new Array(
			"uNi online dating unites us all. Africans,", 
			"connect, love, share and explore your homeland."
			);
			var iSpeed = 100; // time delay of print out
			var iIndex = 0; // start printing array at this posision
			var iArrLength = aText[0].length; // the length of the text array
			var iScrollAt = 20; // start scrolling up at this many lines
			 
			var iTextPos = 0; // initialise text position
			var sContents = ''; // initialise contents variable
			var iRow; // initialise current row
			 
			function typewriter()
			{
			 sContents =  ' ';
			 iRow = Math.max(0, iIndex-iScrollAt);
			 var destination = document.getElementById("typedtext");
			 
			 while ( iRow < iIndex ) {
			  sContents += aText[iRow++] + '<br />';
			 }
			 destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
			 if ( iTextPos++ == iArrLength ) {
			  iTextPos = 0;
			  iIndex++;
			  if ( iIndex != aText.length ) {
			   iArrLength = aText[iIndex].length;
			   setTimeout("typewriter()", 500);
			  }
			 } else {
			  setTimeout("typewriter()", iSpeed);
			 }
			}


			typewriter();
		</script>
		<script type="text/javascript">
			var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
		</script>
		<script>
			function openNav() {
			  document.getElementById("mySidebar").style.width = "250px";
			  document.getElementById("main").style.marginLeft = "0";
			}

			function closeNav() {
			  document.getElementById("mySidebar").style.width = "0";
			  document.getElementById("main").style.marginLeft= "100px";
			}
		</script>
		<script>
			function myFunctionSub() {
			  var x = document.getElementById("sub-sideBar");
			  if (x.style.display === "block") {
			    x.style.display = "none";
			  } else {
			    x.style.display = "block";
			  }
			}
		</script>
		<script>
			var myIndex = 0;

			function carousel() {
			  var i;
			  var x = document.getElementsByClassName("testimony");
			  for (i = 0; i < x.length; i++) {
			    x[i].style.display = "none";  
			  }
			  myIndex++;
			  if (myIndex > x.length) {myIndex = 1}    
			  x[myIndex-1].style.display = "block";  
			  setTimeout(carousel, 10500);    
			}
			carousel();
			</script>
		<script type="module">
		  // Import the functions you need from the SDKs you need
		  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-app.js";
		  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-analytics.js";
		  // Add Firebase products that you want to use
	    import { auth } from 'https://www.gstatic.com/firebasejs/9.6.6/firebase-auth.js'
	    import { firestore } from 'https://www.gstatic.com/firebasejs/9.6.6/firebase-firestore.js'
		  // TODO: Add SDKs for Firebase products that you want to use
		  // https://firebase.google.com/docs/web/setup#available-libraries

		  // Your web app's Firebase configuration
		  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
		  const firebaseConfig = {
		    apiKey: "AIzaSyC6A5VJ0pbocHbpRkV7v11s4M-zr-rfBcs",
		    authDomain: "uni-dating-51be5.firebaseapp.com",
		    projectId: "uni-dating-51be5",
		    storageBucket: "uni-dating-51be5.appspot.com",
		    messagingSenderId: "888337382632",
		    appId: "1:888337382632:web:9f33dac25a85bde32a9d5d",
		    measurementId: "G-5NR00YX4JD"
		  };

		  // Initialize Firebase
		  const app = initializeApp(firebaseConfig);
		  const analytics = getAnalytics(app);
		</script>
</body>
</html>
