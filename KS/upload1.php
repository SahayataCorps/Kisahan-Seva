<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<body style="background-color:#E4F1FE;">
	<script type="text/javascript">alert("For best result, it is recommended that you keep the leaf on a plain cardboard.");</script>
	<?php include("header.php"); ?>
<div class="container-fluid" style="padding: 20px 40%;">
	<form action="welcome.php" method="post">
			<input type="text" name="name" value="upload image" id="imgg" style="display:none;">
				<input type='file' style="color:#333;" onchange="readURL(this);" />
			
			<label for="Choice" style="color:#333; font-size:30px;">Select Crop Type: &nbsp;&nbsp;&nbsp;</label><select id="Choice" name="crop" style="color:#333;">
			<option value="Apple">Apple</option>
			<option value="Tomato">Tomato</option>
			<option value="Potato">Potato</option>
			<option value="Banana">Banana</option>
			<option value="Wheat">Wheat</option>
			</select>
			<div id="base"></div>
			<script type='text/javascript'>function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imgg')
                    .attr('value', e.target.result)
             
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	</script>
	         <br><input type="submit" id="send" class="booth-capture-button">	
		</form>
</div>	
	
	<!-- footer -->
	<?php include("footer.php"); ?>
	<!-- //footer -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {				
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
</body>	
</html>