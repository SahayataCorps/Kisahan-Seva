
<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<body style="background-color:#E4F1FE;">
<?php include("header.php"); ?>	
	

        
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>	
								<div class="banner_text">
									<h3>Help for Farmers</h3>
									<div class="w3ls-line"> </div>
									<p>Kissan Seva</p>
								</div>
							</li>
						</ul>
					</div>
			</section>
			<!-- flexSlider -->
			<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
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
		</div>
	</div>
	<!-- //banner -->

	
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="services-main">
				<div class="services-heading"  style="color:#446CB3;">
					<h2 style="font-family:Times New Roman; color:#446CB3;">services</h2>
					<div class="agileits-line" style="color:#446CB3;"> </div>
				</div>
				<div class="services-bottom">
					<div class="services-grid">
						<div class="col-md-6 services-grid-left">
							<div class="services-icon"><i class="fa fa-envira" aria-hidden="true" style="color:#446CB3;"></i></div> 
							<div class="services-text">
								<h4 style="font-size:30px;">Artificial Intelligence</h4>
								<p style="font-size:15px;">We use Artificial Intelligence to identify diseases in crops and provide with symptomns and cures.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-6 services-grid-right">
							<img src="images/ai.png" alt="AI" width="175px" height="175px" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-grid">					
						<div class="col-md-6 services-grid-right ulta-grid">
							<img src="images/weather.png" alt="weather" width="175" height="175">
						</div>
						<div class="col-md-6 services-grid-left ulta-grid">
							<div class="services-icon"><i class="fa fa-magnet" aria-hidden="true" style="color:#446CB3;"></i></div> 
							<div class="services-text">
								<h4 style="font-size:30px;">Weather</h4>
								<p style="font-size:15px;">You can check the weather.We can assure you it will rain this year.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-grid">
						<div class="col-md-6 services-grid-left">
							<div class="services-icon"><i class="fa fa-cog" aria-hidden="true" style="color:#446CB3;"></i></div> 
							<div class="services-text">
								<h4 style="font-size:30px;">Cure</h4>
								<p style="font-size:15px;">We have a library of diseases for which we provide cures.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-6 services-grid-right">
							<img src="images/6.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--services -->
	<!-- services-bottom -->
	<div class="text-grid">
		<div class="container">
			<h4>Improve your Farming..!</h4>
			<p>Use our website to improve your farming and keep your crops disease free and provide us with fresh food.</p>
		</div>
	</div>
	<!-- //services-bottom -->
	

	<?php include("footer.php"); ?>
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
	<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
<!-- //here ends scrolling icon -->
</body>	
</html>