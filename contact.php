<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];					
		$message = $_POST['message'];
		$from = 'Contact Form'; 
		$to = 'irizz.india@gmail.com'; 
		$subject = 'Message from Contact form ';
		
		$body ="From: $name\n  E-Mail: $email\n Phone: $phone\n  Message: $message\n";

		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Enter a valid email id';
		}
		
		if (!$_POST['phone']) {
			$errPhone = 'Enter your phone.';
		}
				
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Enter your message';
		}
	

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errPhone && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='
<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='
<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Contact us</title>
      <!-- reponsive meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Aristo Chemicals And Aromatics, Greencare 30:10:10, 13:27:27, Magnesium Sulphate,Power-19, Micropower" />
      <meta name="description" content="Aristo Chemicals And Aromatics has been engaged in the manufacture and promotion of secondary and micro nutrients for the cause of increasing agricultural production and productivity. " />
      <link rel="icon" type="image/png" href="images/favico.png" />
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/strock-icon.css" rel="stylesheet">
      <!--    owl-carousel-->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <!-- Main Css  -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/responsive.css">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <header id="header" class="stricky">
         <!-- Header Gray Band  -->
         <!-- Logo Section  --> 
         <div class="thm-container clearfix logo-sec">
            <div class="row">
               <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 t-logo splMB">
                  <a href="index.html">
                  <img src="images/header/logo.png" class="img-responsive" alt="logo">
                  </a>
               </div>
               <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 hidden-xs">
                  <div class="touch_top">
                     <ul class="nav">
                        <li class="item item-phone">
                           <div class="media">
                              <div class="media-left"><a href="#"><i class="icon icon-Phone2"></i></a></div>
                              <div class="media-body">
                                 <p> 0484 - 2061174<br><span>09847804427</span></p>
                              </div>
                           </div>
                        </li>
                        <li class="item item-ad">
                           <div class="media">
                              <div class="media-left"><a href="#"><i class="icon icon-Pointer"></i></a></div>
                              <div class="media-body">
                                 <p>Aluva<br><span>Kerala</span></p>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-2 col-sm-12 col-xs-12  mail_top hidden-xs hidden-sm">
                  <div class="media">
                     <div class="media-left"><a href="#"><i class="icon icon-Mail"></i></a></div>
                     <div class="media-body">
                        <p>info@aristochem.com<br><span>aristochem@gmail.com</span></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Start mainmenu -->
      <nav class="main-menu-wrapper stricky">
         <div class="ind-container nav-bg">
            <div class="row">
               <div class="clearfix">
                  <div class="nav-holder pull-left">
                     <div class="nav-header">
                        <button><i class="fa fa-bars"></i></button>
                     </div>
                     <div class="nav-footer">
                        <ul class="nav">
                           <li><a href="index.html">Home</a></li>
                           <li><a href="profile.html">about us</a></li>
                           <li class="has-submenu">
                              <a href="#">Overview</a>
                              <ul class="submenu">
                                 <li><a href="agricultural.html">Agricultural Scenario</a></li>
                                 <li><a href="plant-nutrition.html">Plant Nutrition</a></li>
                              </ul>
                           </li>
                           <li class="has-submenu">
                              <a href="#">Products</a>
                              <ul class="submenu">
                                 <li><a href="greencare.html">Greencare</a></li>
                                 <li><a href="magnesium.html">magnesium sulphate</a></li>
                                 <li><a href="power19.html">power - 19</a></li>
                                 <li><a href="micropower.html">micropower</a></li>
                              </ul>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="free-qoute-button pull-right">				
                     <a href="contact.html">Contact Us</a>                  </div>
               </div>
            </div>
         </div>
   </nav>
      <!-- End mainmenu -->  
<section class="inner-banner">
         <div class="thm-container clearfix">
            <h2>CONTACT US</h2>
            <ul class="breadcumb">
               <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
               <li><span>CONTACT US</span></li>
            </ul>
         </div>
      </section>
      <section class="core-projects touch">
         <div class="sectpad touch_bg">
            <div class="thm-container clearfix">
               <h1>Stay- connected</h1>
              <p>Fill up below instant messaging programs. and our representative will get back to clear your doubts. Please share your  result with us via whatsapp or email<br></p>
               <h6>Please be patient, We will get back to you. <span>General Enquiries Phone: 0484 - 2061174</span></h6>
               <div class="row touch_middle">
                  <div class="col-md-4 open_hours">
                     <div class="touch_top-con">
                        <ul class="nav">
                           <li class="item">
                              <div class="media">
                                 <div class="media-left">
                                    <a href="#">
                                    <i class="fa fa-map-marker"></i>
                                    </a>
                                 </div>
                                 <div class="media-body">             
                                    FACTORY &amp; ADMIN OFFICE :<br>
                                    Plot No. 9-11 , M.I.E. Keezhmad<br>
                                    Aluva - 683112, Kerala, India <br>
                                 </div>
                              </div>
                           </li>
                           <li class="item">
                              <div class="media">
                                 <div class="media-left">
                                    <a href="#">
                                    <i class="fa fa-envelope-o"></i>
                                    </a>
                                 </div>
                                 <div class="media-body">         
                                    aristochem@gmail.com<br>
                                    info@aristochem.com 
                                 </div>
                              </div>
                           </li>
                           <li  class="item">
                              <div class="media">
                                 <div class="media-left">
                                    <a href="#">
                                    <i class="fa fa-phone"></i>
                                    </a>
                                 </div>
                                 <div class="media-body">
                                    Phone : 0484 - 2061174<br>
                                    09847804427 , 08281184460<br>
                                    Fax : 0484 - 2609398 
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <!--<div class="col-md-8 input_form">
                     <form action="contact_process.php" method="post" id="contactForm">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        <textarea class="form-control" rows="6" id="message" name="message" placeholder="Message"></textarea>
                        <div class="row m0">
                           <button type="submit" class="btn btn-default submit">Submit Now <i class="fa fa-angle-double-right"></i></button>
                        </div>
                     </form>
                     <div id="success">
                        <p>Your message sent successfully.</p>
                     </div>
                  <div id="error">
                        <p>Something is wrong. Message cant be sent!</p>
                     </div>
                 </div>-->
                 
                 <div class="col-md-8 input_form" id="contactS">
										<form role="form" method="post" action="contactus.php" class="formct">
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" placeholder="Name" name="name" value="
														<?php echo htmlspecialchars($_POST['name']); ?>">
														<div style="width:100%; text-align:right; float:left; padding:10px; ">
															<?php echo "
											
															<p class='text-danger'>$errName</p>";?>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Email" name="email" value="
															<?php echo htmlspecialchars($_POST['email']); ?>">
															<div style="width:100%; text-align:right; float:left; padding:10px; ">
																<?php echo "
																<p class='text-danger'>$errEmail</p>";?>
															</div>
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Phone" name="phone" value="
																<?php echo htmlspecialchars($_POST['phone']); ?>">
																<div style="width:100%; text-align:right; float:left; padding:10px; ">
																	<?php echo "
																	<p class='text-danger'>$errPhone</p>";?>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<textarea rows="7" class="form-control" placeholder="Message" name="message" >
																	<?php echo htmlspecialchars($_POST['message']);?>
																</textarea>
																<div style="width:100%; text-align:right; float:left; padding:10px; ">
																	<?php echo "
																	<p class='text-danger'>$errMessage</p>";?>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<input id="submit" name="submit" type="submit" value="SUBMIT"  class="btn btn-success" style="padding:12px 16px; float:right;" >
																</div>
															</div>
															<div class="col-md-12">
																<?php echo $result; ?>
															</div>
														</form>
													</div>
                 
                 
                 
               </div>
            </div>
         </div>
      </section>    
      <!-- Indurial Solution -->
      <section class="indurial-solution indpad anim-5-all">
         <div class="thm-container clearfix">
            <div class="row">
               <div class="col-lg-10 col-md-9 col-sm-9 col-xs-12">
                  <div class="indurial-solution-text">
                     <h2>For Trade Enquiries...</h2>
                  </div>
               </div>
               <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                  <div class="contactus-button">
                     <a href="contact.html">Contact Us <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer id="footer" class="sec-padding">
         <div class="thm-container clearfix">
            <div class="row">
               <div class="widget about-us-widget col-xs-12 col-sm-12 col-md-3 splCn" style="margin-bottom:20px;">
                  <a href="#"><img src="images/header/logo.png" alt=""/></a>
                  <p>Aristo Chemicals And Aromatics has been engaged in the manufacture and promotion of secondary and micro nutrients for the cause of increasing agricultural production and productivity. These endeavors are backed by over four decades of dedication and professional expertise gathered through relentless efforts.</p>
                  <a href="profile.html">Read More <i class="fa fa-angle-double-right"></i></a>
               </div>
               <div class="widget widget-links col-xs-12 col-sm-4 col-md-3">
                  <h4 class="widget_title">Ouick Links</h4>
                  <div class="widget-contact-list row m0 splCn1">
                     <ul>
                        <li><a href="agricultural.html">Agricultural Scenario</a></li>
                        <li><a href="plant-nutrition.html">Plant Nutrition</a></li>
                     </ul>
                  </div>
               </div>
               <div class="widget widget-links col-xs-12 col-sm-4 col-md-3">
                  <h4 class="widget_title">Our Products</h4>
                  <div class="widget-contact-list row m0 splCn1">
                     <ul>
                        <li><a href="greencare.html">Greencare</a></li>
                        <li><a href="magnesium.html">magnesium sulphate</a></li>
                        <li><a href="agricultural.html">Power - 19</a></li>
                        <li><a href="plant-nutrition.html">Micropower</a></li>
                     </ul>
                  </div>
               </div>
               <div class="widget widget-contact col-xs-12 col-sm-4 col-md-3">
                  <h4 class="widget_title">Get in Touch</h4>
                  <div class="widget-contact-list row m0 splCn1">
                     <ul>
                        <li>
                           <i class="fa fa-map-marker"></i>
                           <div class="fleft location_address">
                              FACTORY &amp; ADMIN OFFICE :<br>
                              Plot No. 9-11 , M.I.E. Keezhmad<br>
                              Aluva - 683112, Kerala, India
                           </div>
                        </li>
                        <li>
                           <i class="fa fa-phone"></i>
                           <div class="fleft contact_no">
                              Phone : 0484 - 2061174<br>
                              09847804427 , 08281184460<br>
                              Fax : 0484 - 2609398
                           </div>
                        </li>
                        <li>
                           <i class="fa fa-envelope-o"></i>
                           <div class="fleft contact_mail">                              
                              info@aristochem.com<br>
                              aristochem@gmail.com
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <section class="footer-bottom">
         <div class="thm-container clearfix">
            <div class="pull-left fo-txt">
               <p>Copyright &copy; 2016 </p>
            </div>
            <div class="pull-right fo-txt">
               <p>Powered by: <a href="http://irizz.net/" target="_blank">Irizz Technologies</a></p>
            </div>
         </div>
      </section>
      <script src="js/jquery-1.12.2.min.js"></script>
      <script src="js/bootstrap.min.js"></script>  
      <!-- owl carousel  -->   
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/theme.js"></script>
      <script src="js/disable.js"></script>
      <script type="text/javascript" src="js/scroll-to-top.js"></script>
   </body>
</html>