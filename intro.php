<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
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
<link rel="stylesheet" type="text/css" href="css/layout.css">

<!-- Favicons -->
<link rel="shortcut icon" href="images/logo.png">
<link rel="apple-touch-icon" href="images/logo.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/logo.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/logo.png">
<!-- Google Web Fonts -->
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
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
<body>
<!--<iframe title='YouTube video player' class='youtube-player' type='text/html'
        width='1000' height='600'
        src='http://www.youtube.com/embed/ZFo8b9DbcMM?rel=0&border=&autoplay=1'
        type='application/x-shockwave-flash'
        allowscriptaccess='always' allowfullscreen='true'
        frameborder='0'></iframe> -->

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
<script>

$(document).ready(function()
  {
  $(".right").animate({width:"50%"},1000);
  $(".left").animate({width:"50%"},1000);

});

</script>
</body>
</html>
