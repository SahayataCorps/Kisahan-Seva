<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body style="background-color:#E4F1FE;">
	<!-- header -->
	<?php include("header.php");?>
	<!-- //header -->
	
        
<div class="container-fluid" style="margin:10px 10px 10px 10px; padding:0% 13%;">
	<div class="container">
  		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="background-image:url(images/field2.jpg); width:90%; color:black;">Wheat Diseases </button>
  		<div id="demo" class="collapse" style="padding:5px 40px; font-size:20px;">
    		<a href="dis.php?dis='Wheat Leaf Rust'">Wheat Leaf Rust</a><br>
    		<a href="dis.php?dis='Wheat Loose Smut'">Wheat Loose Smut</a><br>
    		<a href="dis.php?dis='Wheat Stem Rust'">Wheat Stem Rust</a><br>
    		<a href="dis.php?dis='Wheat Stripe Rust'">Wheat Stripe Rust</a><br>
  		</div><br>
	</div>
	
	<div class="container">
  		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2" style="background-image:url(images/tomato2.jpg); width:90%; color:black;">Tomato Diseases</button>
  		<div id="demo2" class="collapse" style="padding:5px 40px;">
    		<a href="dis.php?dis='Tomato Blight'">Tomato Blight</a><br>
    		<a href="dis.php?dis='Tomato End rot'">Tomato End rot</a><br>
    		<a href="dis.php?dis='Tomato fruit Cracking'">Tomato fruit Cracking</a><br>
    		<a href="dis.php?dis='Tomato Leaf Curl'">Tomato Leaf Curl</a><br>
  		</div><br>
	</div>
	
	<div class="container">
  		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo4" style="background-image:url(images/banana.jpg); width:90%; color:black;">Banana Diseases</button>
  		<div id="demo4" class="collapse" style="padding:5px 40px;">
    		<a href="dis.php?dis='Banana Bunchy Top'">Banana Bunchy Top</a><br>
    		<a href="dis.php?dis='Banana Panama Wilt'">Banana Panama Wilt</a><br>
  		</div><br>
	</div>
	
	<div class="container">
  		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo6" style="background-image:url(images/potato1.jpg); width:90%; color:black;">Potato Diseases</button>
  		<div id="demo6" class="collapse" style="padding:5px 40px;">
    		<a href="dis.php?dis='Potato Black Heart'">Potato Black Heart</a><br>
    		<a href="dis.php?dis='Potato Black Scurf'">Potato Black Scurf</a><br>
    		<a href="dis.php?dis='Potato Early Blight'">Potato Early Blight</a><br>
    		<a href="dis.php?dis='Potato Wart'">Potato Wart</a><br>
  		</div><br>
	</div>

</div>	

	
	<!-- footer -->
	<?php include("footer.php");?>
	<!-- //footer -->
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