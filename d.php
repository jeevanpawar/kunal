<?php 
	include("Admin/config.inc.php");
	$qry="select * from gallery_photos where photo_category='4'";
	$res=mysql_query($qry);
	$res1=mysql_query($qry);
	$res2=mysql_query($qry);
	$res3=mysql_query($qry);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Kunal Arts</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Thumbnails Navigation Gallery with jQuery and CSS3" />
<meta name="keywords" content="jquery, thumbnails, gallery, menu, navigation, full page, background,image, photo, portfolio, photography"/>

<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/style3.css" />
<link rel="stylesheet" type="text/css" href="cssmenu/main.css" />
<!-- style sheets -->
<!-- js files -->
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

        
<script src="jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function()
	{
		$('div').click(function()
		{
			var i=($(this).attr('id'));
			$('#im').html("");		
			$.getJSON('find.php',{cid:i},function(data)
			{
				
				var k=0;
				
				while(data)
				{
					$('#im').append('<img src=\'Admin\/photos\/tb_'+data[k].pat+'\' id=\''+k+'\' >');
					k++;
					
				}
				
			});
		});
		return false;

	});
</script>
<style>
	.gallery1 img 
	{
		-webkit-transition:-webkit-transform 1s;
	}
	.gallery1 img:hover
	{	border:8px solid #FFF;
		-webkit-transform:rotate(360deg);
		opacity:0.9;
	}
</style>
<style>
	.rotate 
	{
		-webkit-transition:-webkit-transform 1s;
	}
	.rotate:hover
	{
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
	font-family:Arial;
	position:fixed;
	width:-100%;
	background-color:#000;
	left:-1px;
	right:-1px;
	text-align:center;
	height:20px;
	bottom:1px;
	font-size:13px;
	
}
span.reference a {
	color:#aaa;
	text-decoration:none;
	margin-right:20px;
	
}
span.reference a:hover {
	color:#ddd;
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
setInterval('change()',5000);
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

<body>
  <!-- -->

<div class="background"><img src="images/album/a.jpg" class="st_preview"/> <img src="images/album/b.jpg" class="st_preview"/> <img src="images/album/c.jpg" class="st_preview"/> <img src="images/album/d.jpg" class="st_preview"/> </div>
  
  <div>
   <ul id="menu" class="main">
 		<li><a class="topmenu" href="home.php" title="First example">Home</a></li>
        <li><a class="topmenu" id="link-about" href="#about">About Us</a></li>
        <li><a class="topmenu" id="link-portfolio" href="#portfolio" >Portfolio</a></li>
        <li><a class="topmenu"  id="link-about" href="#about" >Team</a></li>
        <li><a class="topmenu" id="link-about" href="#contact">Contact</a></li>
    </ul>
  </div>

  <div class="logo"><img src="images/textEffect (4).png"/>
    <div class="slogal">COMMERCIAL PHOTOGRAPHY</div>
  </div>


  <ul id="st_nav" class="st_navigation">
    <li class="album"> <span class="st_link">Newest Collection<span class="st_arrow_down"></span></span>
      <div class="st_wrapper st_thumbs_wrapper">
      
        <div class="st_thumbs"> 
        <?php
				while($row=mysql_fetch_array($res))
				{
					echo"<a href='3d.php?id2=$row[3]&id3=$row[0]'><img class='rotate' src='Admin/photos/tb_$row[1]'></a>";
				}
		?>
 </div>
      </div>
    </li>
    <li class="album"> <span class="st_link">Random Photography<span class="st_arrow_down"></span></span>
      <div class="st_wrapper st_thumbs_wrapper">
        <div class="st_thumbs"> 
        <?php
				while($row1=mysql_fetch_array($res1))
				{
					echo"<a href='3d.php?id2=$row1[3]&id3=$row1[0]'><img class='rotate' src='Admin/photos/tb_$row1[1]' height='160' width='180'></a>";
				}
		?>
        </div>
      </div>
    </li>
    <li class="album"> <span class="st_link">Best Shots<span class="st_arrow_down"></span></span>
      <div class="st_wrapper st_thumbs_wrapper">
        <div class="st_thumbs"> 
        <?php
				while($row2=mysql_fetch_array($res2))
				{
					echo"<a href='3d.php?id2=$row2[3]&id3=$row2[0]'><img class='rotate' src='Admin/photos/tb_$row2[1]' height='160' width='180'></a>";
				}
		?>
        
        </div>
      </div>
    </li>
    <li class="album"> <span class="st_link">Award Winning Collection<span class="st_arrow_down"></span></span>
      <div class="st_wrapper st_thumbs_wrapper">
        <div class="st_thumbs">
        <?php
				while($row3=mysql_fetch_array($res3))
				{
					echo"<a href='3d.php?id2=$row3[3]&id3=$row3[0]'><img class='rotate' src='Admin/photos/tb_$row3[1]' height='160' width='180'></a>";
				}
		?>
        
        </div>
      </div>
    </li>
  </ul>
</div>
<div> 
  
  <!-- About -->
  <div id="about" class="panel">
    <div class="content">
      <div class="port">
        <div class="close"><a href="#!/about"><img src="images/closeIcon.png" alt="" class="close"></a></div>
        <div class="heading">About Kunal Arts</div>
        <div class="aboutimg"><img src=""></div>
        <div class="aheading">Welcome To Kunal Arts</div>
        <div class="apara">KUNAL ARTS was co-founded by two passionate photojournalists with a vision to revolutionize wedding photography, 			                  Praful Mehta & Abhishake saw an opportunity to leverage his background in photojournalism, direct-to-consumer marketing and technology. </div>
      </div>
    </div>
  </div>
  <!-- /About --> 
  <!-- Portfolio -->
  <div id="portfolio" class="panel">
    <div class="content">
      <div class="port">
        <div class="close"><a href="#!/about"><img src="images/closeIcon.png" alt="" class="close"></a></div>
        <div class="heading">Category</div>
        
        	    <?php 
					include("Admin/config.inc.php");
    	       		$qry="select * from gallery_category";
					$res=mysql_query($qry);
				?>
                <div class="gallery">
                <ul id="menu">
				<?php while($row=mysql_fetch_array($res)){ ?>
				<div id="<?php echo $row['category_id'] ?>"><?php echo'<li><a href="#portfolio">'.$row['1'].'</a>'?></div>	<br />
				<?php } ?>
                </ul>
				</div>
                 	<div id="im" class="gallery1">
          		
            	
                
                </div>
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
         <div class="tboutimg1"><img src=""></div>
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
      <div class="contact">Contact Details</div>
      <br /><br />      
      <table width="300" height="200">
      <tr>
      <td>KUNAL D. RATHOD</td>
      
      </tr>
      <tr>
      <td>Address:</td>
      <td></td>
      </tr>
      <tr>
      <td>Mobile:</td>
      <td>+919922948680-81<br />+919967407471</td>
      </tr>
	  <tr>
      <td>Email:</td>
      <td><a href="">Krathod25@gmail.com</a></td>
      </tr>

      </table>
      
      </div>
     <div class="map"><div>Location</div><iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?q=KUNAL+ARTS&amp;oe=utf-8&amp;aq=t&amp;client=firefox-a&amp;ie=UTF8&amp;hl=en&amp;hq=KUNAL+ARTS&amp;hnear=Thane,+Maharashtra&amp;t=m&amp;cid=2769981260553268570&amp;ll=19.175815,72.951622&amp;spn=0.037291,0.047894&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe>
	</div>
    </div>
  </div>
</div>

		<div><span class="like">
        <ul>
        <li>
             <!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
             </li>
        <li class="facebook">
        <div id="fb-root"></div>
			<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>
			</li>
            <li>
            <a href="https://twitter.com/share" class="twitter-share-button" data-related="jasoncosta" data-lang="en" data-size="small" data-count="horizontal">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
 		     </li>
             
             </ul>
        
        </span></div>
		
        <div>
            <span class="reference">
                <a href="http://">Copyright 2013 @ Kunal Arts</a>
				<a href="http://www.wavetechline.com" target="_tab">Powered By Wave TechLine</a>
            </span>
		</div>
       </div> 

  

        <!-- The JavaScript -->
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
					$elem.addClass('current').animate({'height':'170px'},200);
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
				
				//function to hide the current opened menu
				function hideThumbs(){
					$list.find('li.current')
						 .animate({'height':'50px'},400,function(){
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
</body>
</html>