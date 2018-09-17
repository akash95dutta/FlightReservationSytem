<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="homepage.php" id="logo">Air Lines</a><span id="slogan">International Travel</span></h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="index.php"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="index-4.php"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href=""><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li id="menu_active"><a href="index.php">Main</a></li>
							<li><a href="index-1.php">Our Aircraft</a></li>
							<li><a href="index-2.php">Safety</a></li>
							<li><a href="index-4.php">Contacts</a></li>
                            <li><a href="logout.php">Logout</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
		COMFORT<span>Guaranteed</span>		</div>
	</div>
</div>
<!-- header -->
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="pad_1">
            <?php include('connect.php');
					session_start();
					if($_SESSION['sid']!=1)
					{
						$_SESSION['msg1']="You need to login first . ";
						
						header("location:index.php");
					}
					error_reporting(0);
					echo $_SESSION['msg']; $_SESSION['msg']="";
			?>
				<h2><a href="">Your Flight Planner</a></h2>
				<p><?php echo "UID:".$_SESSION['uid']; ?>
				&nbsp;</p>
				<form id="form_1" action="checkFlights.php" method="post">
				 <div class="wrapper">
                  	Leaving From:
                  	<div class="bg">
      					<select name="source" size="1">

<option value="Kolkata" selected="selected">Kolkata</option>
<option value="Delhi">Delhi</option>
<option value="Mumbai">Mumbai</option>
<option value="Chennai">Chennai</option>
                        </select>
   			  	   </div>
				
					 <!-- Leaving From:
				    <div class="bg"><input type="text" class="input input1" value="Enter City or Airport Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''"></div>-->
				  </div>
					<div class="wrapper">
						Going To:
						<div class="bg"><!--<input type="text" class="input input1" value="Enter City or Airport Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''">-->
                        <div class="bg">
      					<select name="destination">
      					<option value="Kolkata">Kolkata</option>
      					<option value="Delhi">Delhi</option>
      					<option value="Mumbai">Mumbai</option>
      					<option value="Chennai">Chennai</option> </select>
    			  		</div>
                        </div>
					</div>
				  <div class="wrapper">
						Departure Date and Time:
						<div class="wrapper">
							<div class="bg left"><input type="text" name="date" class="input input2" value="yyyy-mm-dd" onBlur="if(this.value=='') this.value='yyyy-mm-dd'" onFocus="if(this.value =='yyyy-mm-dd' ) this.value=''" *required></div>
							<div class="bg right">
							  <p>
							    <input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''">
							  </p>
							</div>
						</div>
					</div>
				  <p>Class:</p>
				  <div class="wrapper">
					<div class="wrapper pad_bot1">
					  <div class="radio marg_right1">
						    <p>
						      <input type="radio" name="aclass" value="AvailableEconomy">
						    Economy
					        </p>
					      </div>
					  <div class="radio">
						    <input type="radio" name="aclass" value="AvailableBusiness">
						    Business
						    
				      </div>
					</div>
						<p>&nbsp;</p>
					  <p>
					<input type="submit" name="ss" value="Check Flights">
				    </p>
					</div>
				</form>
              <p>&nbsp;</p>
              <p class="under"><font size="20"><a href="viewTransactions.php" class="link1"></a></font></p>
              <p class="under"><font size="20"><a href="viewTransactions.php" class="link1"><strong>View Previous Transactions</strong></a></font><br>
              </p>
              <p class="under"><h><a href="cancelBooking.php" class="link1"><strong>Cancel Booking</strong></a></h><br>
                
                <br>
			  </p>
			  <p><br>
				</p>
			</div>
		</article>
		<article class="col2 pad_left1">
			<h2>Aircraft Sales</h2>
			<div class="wrapper">
				<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
				<p>You can trust the U.S. Aircraft Sales (USAS) team to deliver results with industry-leading insights, professionalism, and integrity. We have managed over 1,000 aircraft sales and acquisitions in every region of the world. We understand global marketing trends and use our comprehensive aviation perspective to get the maximum value for our buyers and sellers. The impressive list of our long-term repeat customers is a testament to our worth. Contact U.S. Aircraft Sales to learn how our highly knowledgeable and experienced team can help you through the complex world of aircraft acquisitions and sales.</p>
			  <p>&nbsp;</p>
			</div>
			<p>&nbsp;</p>
			<h2>Aircraft Management</h2>
		  <div class="wrapper">
		    <figure class="right marg_left1"><img src="images/page2_img2.jpg" alt=""></figure>
				<p>Our team integrates worldwide personal connections, decades of data, experience in closing aircraft sales, and concerted phone effort. Personal energy and passion energizes all involved. Focusing on the goal means we guide everyone in the transaction towards the conclusion. </p>
			  <p>We use intense team effort on our client&rsquo;s deals. The energetic exchange of ideas leave no point unchallenged. This formidable dialogue solves problems, answers questions, keeps things moving. This is deal making. It takes many years of skill and confidence to effect these outcomes persuasively and efficiently.			</p>
			</div>
		</article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
<!--footer -->
		<footer>
			Website designed by me</a>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>