<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<body style="background-color:#E4F1FE;">
	<!-- header -->
<?php include("header.php"); ?>	
	<!-- //header -->
	
<?php $name = $_GET["dis"];
$json = file_get_contents($name.".json");
$data = json_decode($json,true);
 ?>
	
    <div class="container-fluid" style="padding: 10px 50px; ">
   	<div class="text-center" style="width: 100%; padding: 0% 44%;"><h1 style="background-color: red; width: 166px;"><?php print_r($data["name"]);?></h1></div>
    <br>
    <img class="img-responsive" style="padding: 0% 0%;" src="di/<?php print_r($data["img"]); ?>.jpg">
  <div id="bodyContent">  
  <div style="display:inline; font-size: 20px; color:#222;"><p><span class="ms-rteCustom-EdCtrDOI">
		<p><?php print_r($data["intro"]);?> </p>
		<h2 style="font-size: 40px;">Symptoms and Signs</h2>
			<hr style="width: 33%;margin:  0px;border: 2px solid;margin-top: -15px;">
			<br>
		<p><?php print_r($data["symps"]);?></p>
	
		
		<h2 style="font-size: 40px;">Disease Management</h2>
		<hr style="width: 33%;margin:  0px;border: 2px solid;margin-top: -15px;">
		<br>
		<?php print_r($data["dm"]);?> 
		
		</div>
		</div>   
		</div>
     <div id="disqus_thread"></div>
<script>

(function() { 
var d = document, s = d.createElement('script');
s.src = 'https://https-kisahanseva-azurewebsites-net.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
	<script id="dsq-count-scr" src="//https-kisahanseva-azurewebsites-net.disqus.com/count.js" async></script>
	<!-- footer -->
	<?php include("footer.php");?>
	<!-- //footer -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
							
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
<!-- //here ends scrolling icon -->
</body>	
</html>