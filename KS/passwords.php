<?php
session_start(); 
/*
setcookie("name","user",time()+3600,"/","",0);
setcookie("pass","pass",time() + 3600,"/","",0);*/
?>
<htmL>
<head>
</head>
<body>
<?php 
define("first","Hola");
/*
$line = __line__;
$new =  ++$line;
$two = $line++;
echo "new = $new<br>two is $two<br>line is $line";
*/
echo date("S");
echo "<br>".date('e');
echo "<br>I not fear".constant("first");
?>
<br>
<a href = "newpage.php">Go To New Page</a>
</body>
</html>