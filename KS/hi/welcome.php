
      <!DOCTYPE html>
<html>
    <head>
      <title>Results</title>
      <!-- bootstrap-css -->
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <!--// bootstrap-css -->
      <!-- css -->
      <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
      <!--// css -->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet"> 
      <!-- //font-awesome icons -->
      <!-- font -->
      <link href="//fonts.googleapis.com/css?family=Righteous&subset=latin-ext" rel="stylesheet">
      <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
      <!-- //font -->
      <script src="js/jquery-1.11.1.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <script src="js/SmoothScroll.min.js"></script>
    </head>
    <body>
     
     <!-- header -->
      <?php include("header.php")?>
    <?php $val = $_POST["name"]; 
         $type =(string) $_POST["crop"];
     $file = (string)mt_rand(1,1000);
     $ext = ".png";
     $output_file = $file.$ext;
     
     $ifp = fopen( $output_file, 'wb' ); 

    // split the string on commas
    // $data[ 0 ] == "data:image/png;base64"
    // $data[ 1 ] == <actual base64 string>
    $data = explode( ',', $val );

    // we could add validation here with ensuring count( $data ) > 1
    fwrite( $ifp, base64_decode( $data[ 1 ] ) );

    // clean up the file resource
    fclose( $ifp ); 
    
    /*$connectionInfo = array("UID" => "*****", "pwd" => "****", "Database" => "jecrcHackathon", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:plantix.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    $tsql= "select url from url where crop ='".$type."'";
    $getResults= sqlsrv_query($conn, $tsql);

    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     
      $urlval = $row['url'];
    }*/
    $urlval = "https://southcentralus.api.cognitive.microsoft.com/customvision/v1.1/Prediction/0a1cc562-60ac-47ba-9a52-29930a293d16/image";

    $arr =  exec("C://Python27//python.exe download.py .$output_file .$urlval");
    $arr2 = substr($arr,1,strlen($arr)-2);
    
    //sqlsrv_free_stmt($getResults);
        $aryy = explode( ',', $arr2 );
        $name1 = $aryy[0];
        $prob1 = $aryy[1];
        $name2 = $aryy[2];
        $prob2 = $aryy[3];
        $new=substr($aryy[2], 1);
        $img1 = $aryy[0].'.jpg';
        $img2 = 'di/'.$new.'.jpg';
        

        ?>
        <div class="row container-fluid" style= "padding: 15px" >
            <br>
     <div class="col-lg-6 text-center">
      <img src="di/<?php echo $img1?>">
      <br>
      <?php echo $name1?>
      <br>
      <?php echo $prob1?>%
      <a href="dis.php?dis=<?php echo $name1?>">
      <br>
      Know More...
      </a>
     </div>             
      
     <div class="col-lg-6 text-center">
      <img src="<?php echo $img2?>">
      <br>
      <?php echo $name2?>
      <br>
      <?php echo $prob2?>%
      <a href="dis.php?dis=<?php echo $name2?>">
     <br>
      Know More....
      </a>
     </div> 
   </div>
    <!-- footer -->
<?php include("footer.php");?>
  <!-- //footer -->
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/app.js"></script>

    </body>
</html>