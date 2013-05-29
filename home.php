<?php
include("Admin/config.inc.php");
error_reporting(0);
$counter = 0;
$r=$_SERVER['REMOTE_ADDR'];
$up="UPDATE counter SET counter = counter + 1";
$upres=mysql_query($up);

$show="select * from counter";
$show_res=mysql_query($show);

$row_show=mysql_fetch_array($show_res);

?>
<?php 
	$qry="select * from gallery_photos where photo_category='4'";
	$res=mysql_query($qry);
	$res1=mysql_query($qry);
	$res2=mysql_query($qry);
	$res3=mysql_query($qry);
?>
<html>
<head>
<title>Kunal Arts</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Thumbnails Navigation Gallery with jQuery and CSS3" />
<meta name="keywords" content="jquery, thumbnails, gallery, menu, navigation, full page, background,image, photo, portfolio, photography"/>
<link rel="shortcut icon" href="images/logo.png">
<link rel="apple-touch-icon" href="images/logo.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/logo.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/logo.png">

<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/style3.css" />
<link rel="stylesheet" type="text/css" href="cssmenu/main.css" />
<link rel="stylesheet" href="css/slider.css" type="text/css" media="screen"/>

<!-- style sheets -->
<!-- js files -->
<link rel="stylesheet" type="text/css" href="css/demo.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/script.js"></script>

<!-- color picker -->
        

<script type="text/javascript" src="jscolor/jscolor.js"></script>
<!-- jQuery framework -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<!-- jQueriy easing plugin-->
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- lhpTwoColorButton plugin -->
<script type="text/javascript" src="js/jquery.lhpTwoColorButton.min.js"></script>
<!-- lhpTwoColorButton plugin -->
<script type="text/javascript" src="js/jquery.lhpMenuTwoColorButton.min.js"></script>
<!-- preview main js code -->
<script type="text/javascript" src="js/main.js"></script>


<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/Quicksand_Book_400.font.js" type="text/javascript"></script>

<script type="text/javascript">
			Cufon.replace('span,p,h1',{
				textShadow: '0px 0px 1px #ffffff'
			});
</script>

<script type="text/javascript" src="jscolor/jscolor.js"></script>
<!-- jQuery framework -->
		
        <!-- jQueriy easing plugin-->
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <!-- lhpTwoColorButton plugin -->
        <script type="text/javascript" src="js/jquery.lhpTwoColorButton.min.js"></script>
        <!-- lhpTwoColorButton plugin -->
        <script type="text/javascript" src="js/jquery.lhpMenuTwoColorButton.min.js"></script>
        <!-- preview main js code -->
        <script type="text/javascript" src="js/main.js"></script>
        
        <script type="text/javascript">
		$(document).ready(function() 
		{
					  $('a.topmenu').click(function(){
						$('').fadeIn();
						 setTimeout("nav('"+this.href+"')",0);
					   return false;
			   });
			});
		function nav(href){
		location.href=href;
		};</script>

        
<script type="text/javascript" charset="UTF-8">
    $(function() {
        $("#anim").addClass("animation");
    });
</script>


</style>

<style>
	#r
	{
		-webkit-transition:-webkit-transform 1s;
	}
	#r:hover
	{
		border:1px solid #333;
		opacity:0.9;
		-webkit-transform:rotate(360deg);
	}
	
</style>

<style>
div.background {
	position:absolute;
	left:0px;
	top:0px;
	z-index:-1;
}
div.background img {
	position:fixed;
	height:100%;
	width:100%;
	list-style: none;
	left:0px;
	top:0px;
}
div.background ul li.show {
	z-index:500
}
span.reference {
	
	position:fixed;
	width:80%;
	margin-left:28%;
	left:-1px;
	right:-1px;
	text-align:center;
	height:50px;
	bottom:30px;
}

span.like
{
	font-family:Arial;
	position:fixed;
	width:350px;
	right:-4%;
	text-align:center;
	height:20px;
	bottom:25px;
	font-size:13px;
	
}
span ul li.facebook
{
	margin-left:-50px;
	
}
</style>

<script type="text/javascript">

function thebackground() {
$('div.background img').css({opacity: 0.0});
$('div.background img:first').css({opacity: 1.0});
setInterval('change()',12000);
}

function change() {
var current = ($('div.background img.show')? $('div.background img.show') : $('div.background img:first'));
if ( current.length == 0 ) current = $('div.background img:first');
var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.background img:first') :current.next()) : $('div.background img:first'));
next.css({opacity: 0.0})
.addClass('show')
.animate({opacity: 1.0}, 3000);
current.animate({opacity: 0.0}, 3000)
.removeClass('show');
};

$(document).ready(function() {
thebackground();	
$('div.background').fadeIn(3000); // works for all the browsers other than IE
$('div.background img').fadeIn(3000); // IE tweak
});

</script>
</head>

</script>
<body oncontextmenu="return false;">

<div class="background">
<img src="images/album/aa.jpg" class="st_preview"/> <img src="images/album/bb.jpg" class="st_preview"/> <img src="images/album/cc.jpg" class="st_preview"/> <img src="images/album/dd.jpg" class="st_preview"/> <img src="images/album/ff.jpg" class="st_preview"/><img src="images/album/gg.jpg" class="st_preview"/></div>
  
<div class="fix"><img id="anim" src="images/logo.png" class="logo"><div class="logoname">Kunal Arts</div>
<div class="slogal">COMMERCIAL PHOTOGRAPHY</div>
</div>


  
</div>
<div> 
  
  <!-- About -->
  <div id="about" class="panel">
    <div class="content">
      <div class="port">
        <div class="close"><a href="#!/about"><img src="images/closeIcon.png" alt="" class="close"></a></div>
        <div class="heading">About Kunal Arts</div>
        <div class="aboutimg"><img src="images/kunal sir.jpg"></div>
        <div class="aheading">Kunal Rathod</div>
        <div class="apara">
        
        Kunal Rathod has completed his Professional Photography from Shari Academy in the year 2008. 

        </div>
        <div class="aheading2">Achievements</div>

        <div class="aparasecond">
        He has been Awarded best Fashion Award, Top Gun Award and Master Kaftman Award in First year. Dean Award and TopGun Award in the second year.

        PIE Award Digital Post Production (USA)

        </div>
        
        <div class="aparasecond">
	        Works for Atlas Copco, Samsonite, Rudra Farm, Takle Jwellers ,Techno Force Solution, Epitrans Electricals PVT LTD and also works for the Interior Artists in Mumbai and Nasik.
      </div>
      </div>
      
    </div>
  </div>
  <!-- /About --> 
  <!-- Portfolio -->
  <div id="portfolio" class="panel">
    <div class="content">
      <div class="port1">
       
                					
                <div class="gallery">
                
  				<ul id="st_nav" class="st_navigation">
				<?php
				
					include("Admin/config.inc.php");
    	       		$qry="select * from gallery_category";
					$res=mysql_query($qry);
					
					
				while($row=mysql_fetch_array($res))
	          	{
					echo "<li class='album'>";
                	echo "<span class='st_link'>$row[1]<span class='st_arrow_down'></span></span>";
					echo "<div class='st_wrapper st_thumbs_wrapper'>";
					echo "<div class='st_thumbs fade-in'>";
						$qry1="select * from gallery_photos where photo_category='$row[0]'";
						$res1=mysql_query($qry1);
					
						while($row1=mysql_fetch_array($res1))
						{
							echo "<a href='3d.php?id2=$row1[3]&&id3=$row1[0]'><img id='r' src='Admin/photos/$row1[1]' width='175' height='120''></a>";
						}
					echo "</div>";
					echo "</div>";
				   	echo "</li>";
				}
                ?>
			</ul>
      			</div>
                
                
               	</div>
      
    </div>
  </div>
             
  <!-- /Portfolio -->
  <div id="team" class="panel">
    <div class="content">
      <div class="port">
        <div class="close"><a href="#!/team"><img src="images/closeIcon.png" alt="" class="close"></a></div>
        <div class="heading">Team At Kunal Arts</div>
        <div class="tboutimg"><img src=""></div>
        <div class="theading">Kunal Arts</div>
        <div class="tpara">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
 		<div class="tpara2">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
        <div class="theading2">Kunal Arts</div>
 		<div class="tpara3">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
         
 		 <div class="tpara2">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
      </div>
    </div>
  </div>
</div>
<div id="contact" class="panel">
  <div class="content">
    <div class="port">
      <div class="close"><a href="#!/contact"><img src="images/closeIcon.png" alt="" class="close"></a></div>
      <div class="heading">Contact Us</div>
      <div class="address">
      <br /><br /> 
      <div class="add">     
	  <div class="conthead">KUNAL D. RATHOD</div>
      <div class="conadd">ADDRESS</div>
      <div class="conadd">
      KUNAL ARTS STUDIO,<br>
			Basement Shraddha Simran Park,<br>
			Patil Lane No. 3, B/H McDonald's,<br>
			College Road, Nashik -422 007.
	  </div>
      <div class="conadd">Mobile:+919922948680-81
      </div>
      <div class="conadd">
      Email:
      <a href="">Kunal_rathod@kunalArts.com</a>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Krathod25@gmail.com</a>
      </div>
        </div>
      </div>
     
    </div>
  </div>
  
</div>

		</div> 
  <div>
   	 <div>
         <span class="reference">
             <div>
             <ul id="menu" class="main">
                <li><a class="topmenu" href="home.php" title="First example">Home</a></li>
                <li><a class="topmenu" id="link-about" href="#about">About Us</a></li>
                <li><a class="topmenu" id="link-portfolio" href="#portfolio" >Portfolio</a></li>
                <li><a class="topmenu" id="link-about" href="#contact">Contact</a></li>
            </ul>
            </div>
         </span>
	 </div>
  </div>
  <script type="text/javascript">
            $(function() {
				//the loading image
				var $loader		= $('#st_loading');
				//the ul element 
				var $list		= $('#st_nav');
				//the current image being shown
				var $currImage 	= $('#st_main').children('img:first');
				
				//let's load the current image 
				//and just then display the navigation menu
				$('<img>').load(function(){
					$loader.hide();
					$currImage.fadeIn(3000);
					//slide out the menu
					setTimeout(function(){
						$list.animate({'left':'0px'},500);
					},
					1000);
				}).attr('src',$currImage.attr('src'));
				
				//calculates the width of the div element 
				//where the thumbs are going to be displayed
				buildThumbs();
				
				function buildThumbs(){
					$list.children('li.album').each(function(){
						var $elem 			= $(this);
						var $thumbs_wrapper = $elem.find('.st_thumbs_wrapper');
						var $thumbs 		= $thumbs_wrapper.children(':first');
						//each thumb has 180px and we add 3 of margin
						var finalW 			= $thumbs.find('img').length * 183;
						$thumbs.css('width',finalW + 'px');
						//make this element scrollable
						makeScrollable($thumbs_wrapper,$thumbs);
					});
				}
				
				//clicking on the menu items (up and down arrow)
				//makes the thumbs div appear, and hides the current 
				//opened menu (if any)
				$list.find('.st_arrow_down').live('click',function(){
					var $this = $(this);
					hideThumbs();
					$this.addClass('st_arrow_up').removeClass('st_arrow_down');
					var $elem = $this.closest('li');
					$elem.addClass('current').animate({'height':'150px'},200);
					var $thumbs_wrapper = $this.parent().next();
					$thumbs_wrapper.show(200);
				});
				$list.find('.st_arrow_up').live('click',function(){
					var $this = $(this);
					$this.addClass('st_arrow_down').removeClass('st_arrow_up');
					hideThumbs();
				});
				
				//clicking on a thumb, replaces the large image
				$list.find('.st_thumbs img').bind('click',function(){
					var $this = $(this);
					$loader.show();
					$('<img class="st_preview"/>').load(function(){
						var $this = $(this);
						var $currImage = $('#st_main').children('img:first');
						$this.insertBefore($currImage);
						$loader.hide();
						$currImage.fadeOut(2000,function(){
							$(this).remove();
						});
					}).attr('src',$this.attr('alt'));
				}).bind('mouseenter',function(){
					$(this).stop().animate({'opacity':'1'});
				}).bind('mouseleave',function(){
					$(this).stop().animate({'opacity':'0.7'});
				});
				
				function hideThumbs(){
					$list.find('li.current')
						 .animate({'height':'30px'},400,function(){
							$(this).removeClass('current');
						 })
						 .find('.st_thumbs_wrapper')
						 .hide(200)
						 .andSelf()
						 .find('.st_link span')
						 .addClass('st_arrow_down')
						 .removeClass('st_arrow_up');
				}

				//makes the thumbs div scrollable
				//on mouse move the div scrolls automatically
				function makeScrollable($outer, $inner){
					var extra 			= 800;
					//Get menu width
					var divWidth = $outer.width();
					//Remove scrollbars
					$outer.css({
						overflow: 'hidden'
					});
					//Find last image in container
					var lastElem = $inner.find('img:last');
					$outer.scrollLeft(0);
					//When user move mouse over menu
					$outer.unbind('mousemove').bind('mousemove',function(e){
						var containerWidth = lastElem[0].offsetLeft + lastElem.outerWidth() + 2*extra;
						var left = (e.pageX - $outer.offset().left) * (containerWidth-divWidth) / divWidth - extra;
						$outer.scrollLeft(left);
					});
				}
            });
        </script>
        <!-- The JavaScript -->
</body>
</html>