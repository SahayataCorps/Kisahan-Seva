<?php

?>
<html>
<head>
</head>
<body>
<?php
if(isset($_SESSION['counter']))
{$_SESSION['counter']++;}
else
{$_SESSION['counter']=1;}
$msg = "You have vissited this page ".$_SESSION['counter'];
echo $msg;
?>
</body>
</html>