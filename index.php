<html>
<head>
<link rel="shortcut icon" href="images/logo.png">
<link rel="apple-touch-icon" href="images/logo.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/logo.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/logo.png">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kunal Arts</title>
<style type="text/css">

body
{
	background-color:#000;
}
#hide {
	top:0;
    position:relative;
	margin-top:-10%;

	font-size:41px;
	margin-left:-30px;
	letter-spacing:2px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	text-shadow: 1px 1px 25px rgba(153, 230, 255, 1);


 }
 
#hide a
{
	color:#FFF;
	text-decoration:none;
}

#slo {
	top:0;
    position:relative;
	color:#FFF;
	font-size:20px;
	margin-left:-30px;
	letter-spacing:2px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	text-shadow: 1px 1px 25px rgba(153, 230, 255, 1);


 }
#slo a
{
	color:#FFF;
	text-decoration:none;
}
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
 
.fade-in {
    opacity:0;  /* make things invisible upon start */
    -webkit-animation:fadeIn ease-in 0;  /* call our keyframe named fadeIn, use animattion ease-in and repeat it only 1 time */
    -moz-animation:fadeIn ease-in 0;
    animation:fadeIn ease-in 0;
 
    -webkit-animation-fill-mode:forwards;  /* this makes sure that after animation is done we remain at the last keyframe value (opacity: 1)*/
    -moz-animation-fill-mode:forwards;
    animation-fill-mode:forwards;
 
    -webkit-animation-duration:10s;
    -moz-animation-duration:10s;
    animation-duration:10s;
}
.flash
{
	margin-top:-5px;
	margin-left:-8px;
	margin-right:-8px;
	
}

</style>
</head>

<body oncontextmenu="return false;">
<div align="center" class="flash">
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0"
 width="100%" height="99%">
 <PARAM NAME=movie VALUE="kunal.swf"> 
<PARAM NAME=loop VALUE=false> 
<PARAM NAME=quality VALUE=high> 
<PARAM NAME=bgcolor VALUE=#000000>
 <EMBED src="kunal.swf" loop=false quality=high bgcolor=#000000 width="100%" height="99%" SCALE="exactfit" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
</OBJECT>
</div>
<div id="hide" style="visibility: hidden" align="center">
<a href="intro.php">KUNAL ARTS </a>
</div>
<div id="slo" style="visibility: hidden" align="center">
COMMERCIAL PHOTOGRAPHY
</div>
<script type="text/javascript">
function showIt() {
    document.getElementById("hide").style.visibility = "visible";
    document.getElementById("slo").style.visibility = "visible";

}
setTimeout("showIt()", 10000); // after 2 sec
</script>
</body>
</html>