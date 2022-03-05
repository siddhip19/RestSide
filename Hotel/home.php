<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Rest Side HOTEL</title>


<!-- for-mobile-apps -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script>(function(w, d) { w.CollectId = "615091cbe3ebf6511abdd7d6"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html, #offer {
  height: 100%;
  line-height: 1.8;
}

/*round button style */
.button1 {
  border-radius: 25px;
  width: 150px;
  background-color: black;
  color: white;
}

.card {
  
  margin-left: 10px;
  border-radius: 25px ;
  border: 8px solid grey;
  padding: 16px;
  background-color: black;
  color: white;
}

#rcorners2 {
  border-radius: 15px 50px;
  border: 2px solid black;
}
  /*h1,h6 {font-family: "Oswald"}*/

.square{
      height:200px;
      width: 200px;
	  border: 1px solid grey;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>


</head>
<body>
<!-- header -->
<!-- <div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">INFO@RestSide.COM</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+91 9987450733</li>	
					<li class="s-bar">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="search" name="Search" placeholder=" " required=" " />
									<input type="submit" value="Search">
								</form>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix " ></div>
		</div> -->
	<div class="w3_navigation">
		<div class="container pink">
			<nav class="navbar navbar-default " >
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">REST <span>SIDE</span><p class="logo_w3l_agile_caption">Your Dreamy Resort</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="home">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
							<li class="menu__item"><a href="#offer" class="menu__link scroll">Offers</a></li>
							<!-- <li class="menu__item"><a href="welcome">dashboard</a></li> -->
							<li class="menu__item"><a href="dash">my bookings</a></li>
							<li class="menu__item"><a href="pay">Pay</a></li>

							</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>Rest Side</h4>
									<h3>We know what you love</h3>
										<p>Welcome to our hotels</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Why us?</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Rest Side</h4>
									<h3>Stay with friends & families</h3>
										<p>Come & enjoy precious moment with us</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Why Us?</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Rest Side</h4>
								<h3>want luxurious vacation?</h3>
										<p>Experience the Ultimate Relaxation</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Why Us?</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>REST <span>SIDE</span></h4>
										<img src="images/2.jpg" alt=" " class="img-responsive">
										<h5>We know what you love</h5>
										<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts pink">
	<a href="admin/reservation.php"><h2>ROOM RESERVATION</h2></a>
</div>

			<div class="clearfix"> </div>
</div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
							<span class="cbp-ig-category">Rest Side</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">SEA VIEW BALCONY</h4>
							<span class="cbp-ig-category">Rest Side</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">LARGE CAFE</h4>
							<span class="cbp-ig-category">Rest Side</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI COVERAGE</h4>
							<span class="cbp-ig-category">Rest Side</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- /about -->
 	<div class="about-wthree" id="about">
		  <div class="container">
				   <div class="ab-w3l-spa">
                            <h3 class="title-w3-agileits title-black-wthree">ABOUT OUR Rest Side</h3> 
						   <p class="about-para-w3ls">Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.Explore the Great the Talek River in the very heart of the Maasai Mara National Reserve and The Great Serengeti Wildlife.</p>
						   <img src="images/about.jpg" class="img-responsive" >
										<div class="w3l-slider-img">
											<img src="" class="img-responsive" >
										</div>
                                       <div class="w3ls-info-about">
										    <h4>You'll love all the amenities we offer!</h4>
											<p>Our Activities Will Make Your Stay Unforgettable </p>
										</div>
		          </div>
		   	<div class="clearfix"> </div>
    </div>
</div>
 	<!-- //about -->
<!--sevices-->
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
				<h3 class="title-w3-agileits">Our Services</h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>Stay First, Pay After! </h4>
			 		<p>Our fully air conditioned and sound proofed function room/hall is available on prior booking arrangements.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>24 Hour Restaurant</h4>
			 		<p>Great food and memorable experience and Amazing food and atmosphere and Your Best Nyama.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24-hour Concierge service</p>
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->
<!-- team 

<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Meet Our Team</h3>
			<div id="horizontalTab">
					<ul class="resp-tabs-list">
					<li>
						<img src="images/teams1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams4.jpg" alt=" " class="img-responsive" />
					</li>
					</ul>
					<div class="resp-tabs-container">
					<div class="tab1">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
						<h4>Bonny Tum</h4>
							<span>Manager</span>
							<p>Bonny Tum is one of the founding members of Rest Side Hotel, bringing an innovative approach to the Hotel Management industry. He has been involved in the tourism sector since the 90’s and became one of the most influential executives at rest Travel before setting up the new Rest Side Hotel group in 2005.</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
							<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
							<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab2">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
						<h4>Nasra Mohamed</h4>
							<span>Receptionist</span>
							<p>Before joining  Rest Side Hotel, first as Reservation Agent and now Receptionist, Nasra had notched up a vast amount of experience in the hotel and hospitality sector.Skilled in guest relations, customer service and management software systems, Nasra’s all-round knowledge makes her a valuable asset to the company. </p>	
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab3">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
						<h4>Samuel Karuga</h4>
							<span>General Manager</span>
							<p>After graduating from the Hospitality Management School of Oxford, Samuel has built up more than a decade of invaluable experience in the hospitality industry.He is responsible for operations relating to the hotels in the group’s portfolio, providing leadership and strategic planning to each hotel department in order to achieve the best guest experience.</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
						
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab4">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
						<h4>Mohamed Khalif</h4>
							<span>Receptionist</span>
							<p>I am here to assist with your room preferences, from hard mattresses, to toppers and to provide our special ‘pillow menu’ prior to your arrival. We will ensure that your room is prepared for any allergies you may have, and your bed linen will be changed regularly and when needed. Also, we can provide additional services such as, dry cleaning.</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
							<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
							<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
							<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
			</div>
	</div>
</div>
//team -->
<!-- Gallery -->

<section class="portfolio-w3ls" id="gallery">
		 <h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/h2.jpg" class="swipebox"><img src="images/h3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Rest Side</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Rest Side</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
				<a href="images/h9.jpg" class="swipebox"><img src="images/h9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Rest Side</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
				<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>Rest Side</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				
				
</section>
<!-- //gallery -->
	     
	 <!--// rooms & rates -->
	 <div class="w3-container" style="padding:70px 16px" id="rooms">
  <h3 class="w3-center"><b>Rooms</b></h3>
  <p class="w3-center w3-large">Rooms available for you .. </p><br><br>
  <div class="w3-row-padding" >


  <?PHP
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'cards');

  // if($con){
  //  echo "connection succussful";
  // }else{
  //  echo "no connection";
  // }


//$query = " SELECT  `name`, `image`, `type`, `description` FROM `cards` order by id ASC ";
 $query = " SELECT * FROM `cards` order by id ASC ";

  $queryfire = mysqli_query($con, $query);

  $num = mysqli_num_rows($queryfire);

  if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
      ?>
    <div class="w3-col l3 m6 w3-margin-bottom ">
      <div class="w3-card w3-hover-shadow" class="rcorners2" id="rcorners2" style="max-height: 450px; min-height: 450px;" >
        <center><img src="<?php echo $product['image'];  ?>" alt="phone" class="square" class="img-responsive" class="card-title" data-holder-rendered="true" style="margin-top: 20px;"></center>
        <div class="w3-container">
          <h3><b><?php echo $product['name'];  ?></b></h3>
          <p class="w3-opacity"><?php echo $product['type'];  ?></p>
          <p style="min-height: 85px;"><?php echo $product['description'];  ?></p>
          <center><button class="w3-button w3-dark w3-block button1"><i class="fa fa-envelope"></i><a href="welcome.php"> Book Now</a></button></center>
        </div>
      </div>
    </div>

  <?php   
    }
  }
  ?>
</div>
</div>
 <!--offers-->
 <div class="row" style="padding:70px 16px" id="offer">
  <h3 class="w3-center" ><b>Offers</b></h3>
  <p class="w3-center w3-large">Special Offers for you.. </p><br>

  <?PHP
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'cards');

  // if($con){
  //  echo "connection succussful";
  // }else{
  //  echo "no connection";
  // }


  $query = " SELECT `topic`,  `description` FROM `notices` order by id ASC ";

  $queryfire = mysqli_query($con, $query);

  $num = mysqli_num_rows($queryfire);

  if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
      ?>

  <div class="col-sm-4" style="margin-top: 35px;">
    <div class="card">
      <div class="card-body" >
        <center><h5 class="card-title"><?php echo $product['topic'];  ?></h5></center>
        <p class="card-text" style="min-height: 120px;"><?php echo $product['description'];  ?></p>
       </div>
    </div>
    </div>

    <?php   
      }
    }
    ?>
   
    </div>

	<!--offers-->

  <!-- visitors -->
  <div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3> 
		</div>
  <?PHP
  $con = mysqli_connect('localhost','root');
  mysqli_select_db($con,'hotel');

  // if($con){
  //  echo "connection succussful";
  // }else{
  //  echo "no connection";
  // }


//$query = " SELECT  `name`, `image`, `type`, `description` FROM `cards` order by id ASC ";
 $query = " SELECT * FROM `feedback` ";

  $queryfire = mysqli_query($con, $query);

  $num = mysqli_num_rows($queryfire);

  if($num > 0){
    while($product = mysqli_fetch_array($queryfire)){
      ?>
   <div class="w3-col l3 m6 w3-margin-bottom ">
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							
							</div>
							<div class="w3layouts_work_grid_left">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<h3><b><?php echo $product['fbname'];  ?></b></h3>
								
								<p class="w3-opacity"><?php echo $product['feedback'];  ?></p>
								
							</div>
	
							<div class="clearfix"> </div>
						</li>
						
					</ul>
				</div>
			</section>
		</div>	
	</div>
	</div>
        </div>
      </div>
    </div>

  <?php   
    }
  }
  ?>
</div>
</div>

	<!-- <div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3> 
		</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/new2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Lovely hotel. Very comfortable. View from the largest Wildlife Park in Africa. Breakfast was really good. Would definitely stay again.I also The Wildlife park. </p>
								<h5>Harvey</h5>
								<p>canada</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/new3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>he staff were very approachable and helpful. The breakfast was good. They arranged for a taxi to pick us up from the airport and then back again at the end of our stay. The suite was very good with comfortable furniture and the bed was comfortable too. We would definitely stay here again. </p>
								<h5>Jason</h5>
								<p>USA</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
							<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/new1.png" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>I enjoyed my stay at your hotel. The breakfast was excellent. I must comment on your director of rooms -Romana. I had a small problem and she handled it with grace, charm and professionalism.. She is a credit to your organization. </p>
								<h5>Angela</h5>
								<p>London</p>
							</div>
							<div class="clearfix"> </div>
						</li> -->
						<!--
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
								<img src="images/l4.jpg" alt=" " class="img-responsive" />								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>he hotel stay was very pleasant and comfortable. The staff was very polite and helpful, the location was very convenient for getting around and many activities and being in the Safari jeep,seeing the Wildlifes. If we were to travel to Kenya again, we would definitely stay there again! </p>
								<h5>Barak Obama</h5>
								<p>United States Of America</p>
							</div>

							<div class="clearfix"> </div>
						</li>
-->
					<!-- </ul>
				</div>
			</section>
		</div>	
	</div> -->
  <!-- visitors -->

  <div class="container">
		<div class="col-lg-8 col-md-8 col-sm-8 contact-w3-agile2" data-aos="flip-center">
			<div class="contact-agileits">

			
		<br/>
				  <h4>FEEDBACK</h4>
				<p class="contact-agile2">Please give us your feedback!!</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="fname" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Feedback!!</label>
                            <input type="tel" class="form-control" name="suggestion" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
					<input type="submit" name="submit" value="Submit Form" class="btn btn-primary">
			
			</form>
			<br/>
			<br/>

		
			<?php
			if(isset($_POST['submit']))
			{
				$name = $_POST['fname'];
				$feedback_txt = $_POST['suggestion'];
				$conn = mysqli_connect("localhost", "root","", "hotel");
				$query ="insert into feedback(fbname, feedback)values('$name', '$feedback_txt')";
				$result = mysqli_query($conn, $query);
				if($result)
					echo 'Thank you for your feedback. We\'ll appreciate!';
				else
				die("Something terrible happened. Please try again. ");
			}
			?>
				
			</div>
			</div>
		</div>
	</div>
  
<!-- contact -->
<section class="contact-w3ls" style="background: #E7717D;" id="contact">
	<div class="container"> 
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Send message</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+91 9987450733</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@RestSide.COM</a></p>
			<p class="contact-agile1"><strong>Address :</strong> Mumbai,Maharashtra</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609823277!2d72.74109995709657!3d19.08219783958221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1632592167897!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
			<div class="copy">
		        <p>© 2021 RestSide . All Rights Reserved | Design by <a href="index.php">RestSide</a> </p>
		    </div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


