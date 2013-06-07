<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<title>Kunal Arts</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Styles -->
<link rel="stylesheet" type="text/css" href="css/skeleton.css">


<!-- Favicons -->
<link rel="shortcut icon" href="images/logo.png">
<link rel="apple-touch-icon" href="images/logo.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/logo.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/logo.png">
<!-- Google Web Fonts -->
<!-- JavaScripts -->
<script src="jquery.min.js"></script>
<style>
.parent {
	overflow: hidden;
}
.left {
	background-color:#111111;
	height: 900px;
	width: 0%;
	float: left;
}
.right {
    background-color:#111111;
	height: 900px;
	width: 0%;
	float: right;
}
.top-margin-intro {
	margin-left: 20%;
	margin-top: 30%;
}
</style>
</head>

<audio autoplay="autoplay" loop="loop">
<source src="all.ogg" type="audio/ogg">
</audio>
<embed src="all.mp3" autostart="true" loop="true" width="0" height="0"></embed>
<noembed><bgsound src="all.mp3" loop="5"></noembed>

<body oncontextmenu="return false;">
<div class="parent">
  <div class="right"> <a href="painting.php">
    <div class="serviceItem top-margin-intro darkslider">
      <div class="serviceInfoWrap">
        <div class="serviceInfo">
          <div></div>
          <div class="serviceInfoBack">
            <h3><br><br>
            <span class="intro1">Painting</span></h3>
          </div>
        </div>
      </div>
    </div>
    </a> </div>
    
  <div class="left" > <a href="home.php">
    <div class="serviceItem top-margin-intro lightslider">
      <div class="serviceInfoWrap">
        <div class="serviceInfo">
          <div></div>
          <div class="serviceInfoBack">
            <h3><br><br>
            <span class="intro2">Photography</span></h3>
          </div>
        </div>
      </div>
    </div>
    </a> </div>
</div>
<script defer="defer">

$(document).ready(function()
  {
  $(".right").animate({width:"50%"},1000);
  $(".left").animate({width:"50%"},1000);

});

</script>
</body>
</html>
