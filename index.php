<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Banquet Booking System|| Home Page
</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<?php include_once('includes/header.php');?>
			<div class="w3layouts-banner">
				<div class="container">
					<div class="w3-banner-info">
						<div class="w3l-banner-text">
							<h2>BANQ</h2>
							<p>We create your special day</p>
						</div>
					</div>
				</div>
			</div>
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
						<div class="col-md-4 banner-address-left">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php  echo htmlentities($row->PageDescription);?>.</p>
						</div>
						<div class="col-md-4 banner-address-left">
							<p><i class="fa fa-envelope" aria-hidden="true"></i> <?php  echo htmlentities($row->Email);?></p>
						</div>
						<div class="col-md-4 banner-address-left">
							<p><i class="fa fa-phone" aria-hidden="true"></i> +<?php  echo htmlentities($row->MobileNumber);?></p>
						</div>
						<div class="clearfix"> </div>
					<?php $cnt=$cnt+1;}} ?></div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="wthree-bottom-grids">
				<div class="col-md-6 wthree-bottom-grid">
					<div class="w3-agileits-bottom-left">
						<div class="w3-agileits-bottom-left-text">
							<h3>Planning from start to finish</h3>
							<p>Welcome to our banquet hall, where every event is meticulously crafted from start to finish to create unforgettable memories.
								 Our dedicated team is committed to guiding you through every step of the planning process, ensuring that your vision comes to life with unparalleled attention to detail. 
								 From the initial conceptualization to the final execution, we take pride in curating events that reflect your unique style and preferences. 
								 Our expert planners collaborate closely with you to choose the perfect theme, 
								 design exquisite décor, craft delectable menus, and orchestrate seamless logistics. We understand that each event is a masterpiece in itself, deserving nothing less than perfection.
								  With our banquet hall's elegant ambiance, state-of-the-art facilities, and unwavering commitment, your journey from conception to realization will be an effortless and extraordinary experience.
                                   </p>                    
						</div>
					</div>
				</div>
				<div class="col-md-6 wthree-bottom-grid">
					<div class="w3-agileits-bottom-left w3-agileits-bottom-right">
						<div class="w3-agileits-bottom-left-text">
							<h3>LET THE EXPERTS RUN YOUR EVENT</h3>
							<p>At our banquet hall, we understand the significance of flawless event execution. Entrust us with your special occasion, and watch as our seasoned professionals transform your vision into a seamless reality.
								 With years of experience in orchestrating a diverse range of events, our team has the expertise to handle every detail, ensuring a stress-free and enjoyable experience for you and your guests.
								  From conceptualization to coordination, our experts take care of it all – meticulously planning the layout, curating the finest culinary experiences, and managing technical aspects with precision. 
								  With us at the helm, you can relax and savor every moment, knowing that your event is in the capable hands of dedicated professionals. 
								Let us bring our passion for excellence to your event, and together, we'll create memories that last a lifetime.</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->

	
<?php include_once('includes/footer.php');?>
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
<script src="js/modernizr.custom.js"></script>

</body>	
</html>