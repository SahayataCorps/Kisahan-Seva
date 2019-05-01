<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<body style="background-color:#E4F1FE;">
	<!-- header -->
	<?php include("header.php");?>
	<!-- //header -->
	
	<br><br>
    <div class="booth container-fluid">
		<select id="videoSource" style = "display:none;"></select>
		<div style="padding: 0px 40px;">
			<video id="video" autoplay width="50%" height="35%"></video>
	    </div>
		<br>
		<br>
		<input style="margin-left:10px;margin-left: 10px;font-size: 25px;padding: 0% 23%;border-radius: 10px;" type="submit" id="capture" class="btn-primary" value="Click">
		<br>
		<canvas id="canvas" width=256 height=256 style="display: none;"></canvas>
	</div>
	<div class="booth container-fluid" style="padding: 0% 30%;">
		<br>
		<img id = "photo" src="test2.jpg" width="100%" height="50%;">
		
		<form action="welcome.php" method="post">
			<input type="text" name="name" value="inpp" id="imgg" style="display: none;" class="hidd">
			
			<br>
			<br>
			<label for="Choice" style="color: #888;padding-left:135px;">Select Crop Type: </label><select id="Choice" class="selectpicker" name="crop" style="margin-left: 17px; border-radius: 10px; color: black;">
			
			<option value="Apple">Apple</option>
			<option value="Tomato">Tomato</option>
			<option value="Potato">Potato</option>
			<option value="Banana">Banana</option>
			<option value="Wheat">Wheat</option>
			</select>

	         <input style="margin-left:10px;" type="submit" id="send" class="booth-capture-button">

		</form>
		<br>
		<br>
	</div>
	
	<script src="js/photo.js"></script>
	
	<!-- footer -->
	<?php include("footer.php"); ?>
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