<head>
<title>Kunal Arts</title>
<meta name="Author" content="Gerard Ferrandez at http://www.dhteumeuleu.com">
<meta http-equiv="imagetoolbar" content="no">
<script type="text/javascript" src="jquery.min.js"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Quicksand_Book_400.font.js" type="text/javascript"></script>
         <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/flowslider.jquery.js"></script>
        
<style type="text/css">
	html {
		overflow: hidden;
	}
	.www_FlowSlider_com-wrap-2 {
		width: 1500px;
		height: 40px;
	}
	body {
		position: absolute;
		margin: 0px;
		padding: 0px;
		background: #eee;
		width: 100%;
		height: 100%;
		color: #fff;
		font-family: arial;
		font-size: 0.8em;
	}
	
	.st_thumbs{
    height:126px;
    margin: 0;
}
	
	.st_thumbs img{
    float:left;
    margin:3px 3px 0px 0px;
    cursor:pointer;
	-moz-box-shadow:1px 1px 5px #000;
	-webkit-box-shadow:1px 1px 5px #000;
	box-shadow:1px 1px 5px #000;
	opacity:0.7;
	filter:progid:DXImageTransform.Microsoft.Alpha(opacity=70);
}
	#screen {
		position: absolute;
		width: 100%;
		height: 100%;
		background: #000;
		overflow: hidden;
	}
	#screen img, canvas { 
		position: absolute;
		left: -9999px;
		cursor: pointer;
        image-rendering: optimizeSpeed;

	}
	#screen .href {
		border: #FFF dotted 1px;
	}
	#screen .fog { 
		position: absolute;
		background: #fff;
		opacity: 0.1;
		filter: alpha(opacity=10);
	}
	#command {
		position:absolute;
		left: 1em;
		bottom: 0.1em;
		z-index: 30000;
		background:#000;
		border: #000 solid 1em;
	}
	#bar {
		position:relative;
		width: 1300px;
		left: 1em;
		top: 1em;
		height: 100px;
	}
	#bar .button { 
		position: absolute;
		width: 100px;
		height: 75px;
		cursor: pointer;
	}
	#bar .loaded { 
	}
	#bar .viewed { 
	}
	#bar .selected { 
	}
	#urlInfo {
		position: absolute;
		background: url(images/r.gif) no-repeat 0 4px;
		visibility: hidden;
		z-index: 30000;
		padding-left: 12px;
		cursor: pointer;
	}
	.close
	{
		background-color:#333;
		width:100px;
	}
</style>



<div class="wrap">


    <!-- This is the actual slider ----------------------------------------- -->
    
    <!-- Help support Flow Slider. -->


<script type="text/javascript">
var m3D = function () {
	/* ---- private vars ---- */
	var diapo = [],
		imb,
		scr,
		bar,
		selected,
		urlInfo,
		imagesPath = "Admin/photos/",
		camera = {x:0, y:0, z:-650, s:0, fov: 500},
		nw = 0,
		nh = 0;
	/* ==== camera tween methods ==== */
	camera.setTarget = function (c0, t1, p) {
		if (Math.abs(t1 - c0) > .1) {
			camera.s = 1;
			camera.p = 0;
			camera.d = t1 - c0;
			if (p) {
				camera.d *= 2;
				camera.p = 9;
			}
		}
	}
	camera.tween = function (v) {
		if (camera.s != 0) {
			camera.p += camera.s;
			camera[v] += camera.d * camera.p * .01;
			if (camera.p == 10) camera.s = -1;
			else if (camera.p == 0) camera.s = 0;
		}
		return camera.s;
	}
	/* ==== diapo constructor ==== */
	var Diapo = function (n, img, x, y, z) {
		if (img) {
			this.url = img.url;
			this.title = img.title;
			this.color = img.color;
			this.isLoaded = false;
			if (document.createElement("canvas").getContext) {
				/* ---- using canvas in place of images (performance trick) ---- */
				this.srcImg = new Image();
				this.srcImg.src = imagesPath + img.src;
								var image_name = img.src.replace(/\.[^/.]+$/, "");
				this.img = document.createElement("canvas");
								this.img.setAttribute("id", image_name);
				this.canvas = true;
				scr.appendChild(this.img);
			} else {
				/* ---- normal image ---- */
				
				this.img = document.createElement('img');
				this.img.src = imagesPath + img.src;
				scr.appendChild(this.img);
			}
			/* ---- on click event ---- */
			this.img.onclick = function () {
				if (camera.s) return;
				if (this.diapo.isLoaded) {
					if (this.diapo.urlActive) {
						/* ---- jump hyperlink ---- */
						top.location.href = this.diapo.url;
					} else {
						/* ---- target positions ---- */
						camera.tz = this.diapo.z - camera.fov;
						camera.tx = this.diapo.x;
						camera.ty = this.diapo.y;
						/* ---- disable previously selected img ---- */
						if (selected) {
							selected.but.className = "button viewed";
							selected.img.className = "";
							selected.img.style.cursor = "pointer";
							selected.urlActive = false;
							urlInfo.style.visibility = "hidden";
						}
						/* ---- select current img ---- */
						this.diapo.but.className = "button selected";
						interpolation(false);
						selected = this.diapo;
					}
				}
			}
			/* ---- command bar buttons ---- */
			this.but = document.createElement('div');

			this.but.className = "button item";
			bar.appendChild(this.but);
			this.but.diapo = this;
			this.but.style.left = Math.round((this.but.offsetWidth  * 1.2) * (n % 20)) + 'px';
			this.but.style.top  = '0px';
			this.but.style.background = "url('"+imagesPath+"tb_"+img.src+"')"
				this.but.onclick = this.img.onclick;
			imb = this.img;
			this.img.diapo = this;
			this.zi = 25000;
		} else {
			/* ---- transparent div ---- */
			this.img = document.createElement('div');
			this.isLoaded = true;
			this.img.className = "fog";
			scr.appendChild(this.img);
			this.w = 300;
			this.h = 300;
			this.zi = 15000;
		}
		/* ---- object variables ---- */
		this.x = x;
		this.y = y;
		this.z = z;
		this.css = this.img.style;
	}
	/* ==== main 3D animation ==== */
	Diapo.prototype.anim = function () {
		if (this.isLoaded) {
			/* ---- 3D to 2D projection ---- */
			var x = this.x - camera.x;
			var y = this.y - camera.y;
			var z = this.z - camera.z;
			if (z < 20) z += 5000;
			var p = camera.fov / z;
			var w = this.w * p;
			var h = this.h * p;
			/* ---- HTML rendering ---- */
			this.css.left   = Math.round(nw + x * p - w * .5) + 'px';
			this.css.top    = Math.round(nh + y * p - h * .5) + 'px';  
			this.css.width  = Math.round(w) + 'px';
			this.css.height = Math.round(h) + 'px';
			this.css.zIndex = this.zi - Math.round(z);
		} else {
			/* ---- image is loaded? ---- */
			this.isLoaded = this.loading();
		}
	}
	/* ==== onload initialization ==== */
	Diapo.prototype.loading = function () {
		if ((this.canvas && this.srcImg.complete) || this.img.complete) {
			if (this.canvas) {
				/* ---- canvas version ---- */
				this.w = this.srcImg.width;
				this.h = this.srcImg.height;
				this.img.width = this.w;
				this.img.height = this.h;
				var context = this.img.getContext("2d");
				context.drawImage(this.srcImg, 0, 0, this.w, this.h);
			} else {
				/* ---- plain image version ---- */
				this.w = this.img.width;
				this.h = this.img.height;
			}
			/* ---- button loaded ---- */
			this.but.className += " loaded";
			return true;
		}
		return false;
	}
	////////////////////////////////////////////////////////////////////////////
	/* ==== screen dimensions ==== */
	var resize = function () {
		nw = scr.offsetWidth * .5;
		nh = scr.offsetHeight * .5;
	}
	/* ==== disable interpolation during animation ==== */
	var interpolation = function (bicubic) {
		var i = 0, o;
		while( o = diapo[i++] ) {
			if (o.but) {
				o.css.msInterpolationMode = bicubic ? 'bicubic' : 'nearest-neighbor'; // makes IE8 happy
				o.css.imageRendering = bicubic ? 'optimizeQuality' : 'optimizeSpeed'; // does not really work...
			}
		}
	}
	/* ==== init script ==== */
	var init = function (data) {
		/* ---- containers ---- */
		scr = document.getElementById("screen");
		bar = document.getElementById("bar");
		urlInfo = document.getElementById("urlInfo");
		resize();
		/* ---- loading images ---- */
		var i = 0, 
		    o,
		    n = data.length;
		while( o = data[i++] ) {
			/* ---- images ---- */
			var x = 1000 * ((i % 4) - 1.5);
			var y = Math.round(Math.random() * 4000) - 2000;
			var z = i * (5000 / n);
			diapo.push( new Diapo(i - 1, o, x, y, z));
			/* ---- transparent frames ---- */
			var k = diapo.length - 1;
			for (var j = 0; j < 3; j++) {
				var x = Math.round(Math.random() * 4000) - 2000;
				var y = Math.round(Math.random() * 4000) - 2000;
				diapo.push( new Diapo(k, null, x, y, z + 100));
			}
		}
		/* ---- start engine ---- */
		run();
	}
	////////////////////////////////////////////////////////////////////////////
	/* ==== main loop ==== */
	var run = function () {
		/* ---- x axis move ---- */
		if (camera.tx) {

			if (!camera.s) camera.setTarget(camera.x, camera.tx);
			var m = camera.tween('x');
			if (!m) camera.tx = 0;
			/* ---- y axis move ---- */
		} else if (camera.ty) {
			if (!camera.s) camera.setTarget(camera.y, camera.ty); 
			var m = camera.tween('y');
			if (!m) camera.ty = 0;
			/* ---- z axis move ---- */
		} else if (camera.tz) {
			if (!camera.s) camera.setTarget(camera.z, camera.tz);
			var m = camera.tween('z');
			if (!m) {
				/* ---- animation end ---- */
				camera.tz = 0;
				interpolation(true);
				/* ---- activate hyperlink ---- */
				if (selected.url) {
					selected.img.style.cursor = "pointer";
					selected.urlActive = true;
					selected.img.className = "href";
					urlInfo.diapo = selected;
					urlInfo.onclick = selected.img.onclick;
					urlInfo.innerHTML = selected.title || selected.url;
					urlInfo.style.visibility = "visible";
					urlInfo.style.color = selected.color || "#fff";
					urlInfo.style.top = Math.round(selected.img.offsetTop + selected.img.offsetHeight - urlInfo.offsetHeight - 5) + "px";
					urlInfo.style.left = Math.round(selected.img.offsetLeft + selected.img.offsetWidth - urlInfo.offsetWidth - 5) + "px";
				} else {
					selected.img.style.cursor = "default";
				}
			}
		}
		/* ---- anim images ---- */
		var i = 0, o;
		while( o = diapo[i++] ) o.anim();
		/* ---- loop ---- */
		setTimeout(run, 32);
	}
	return {
		////////////////////////////////////////////////////////////////////////////
		/* ==== initialize script ==== */
init : init
	}
}();

</script>
<style>
	#bar .button
	{
		-webkit-transition:-webkit-transform 1s;
	}
	#bar .button:hover
	{
		border:5px solid #999;
		opacity:0.9;
		-webkit-transform:rotate(360deg);
	}
	.logo
	{

		opacity:0;
		
	}
</style>
</head>

<body oncontextmenu="return false;">

	<div id="screen">


        <div id="command">

			<div id="bar" class="ba" ></div>
		
        </div>
        
		<div id="urlInfo"></div>
	</div>
    <?php 
		include("Admin/config.inc.php");
		$mid=$_GET['id2'];
		$qry="select * from gallery_photos where photo_category='$mid'";
		$res=mysql_query($qry);
	?>

	<script type="text/javascript">
		/* ==== start script ==== */
	setTimeout(function() {
			m3D.init(
				[ 
				<?php
				
				while($row1=mysql_fetch_array($res))
				{
			
			
					echo"{ src: '$row1[1]'},";
			
				}
				
				?>
				]
					);
	}, 500);
</script>

  <script type="text/javascript">
            $(function() {
				//the loading image
				var $loader		= $('#st_loading');
				//the ul element 
				var $list		= $('div#command');
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
					$list.children('div#bar').each(function(){
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
				


				//makes the thumbs div scrollable
				//on mouse move the div scrolls automatically
				function makeScrollable($outer, $inner){
					console.debug($outer.children());
					console.debug($inner.children());
					console.debug("make scrollable executed");
					var extra 			= 800;
					//Get menu width
					var divWidth = $outer.width();
					//Remove scrollbars
					$outer.css({
						overflow: 'hidden'
					});
					//Find last image in container
					var lastElem = $inner.find('img:last');
					console.debug(lastElem);
					$outer.scrollLeft(0);
					//When user move mouse over menu
					$outer.unbind('mousemove').bind('mousemove',function(e){
						console.debug("inside");
						var containerWidth = lastElem[0].offsetLeft + lastElem.outerWidth() + 2*extra;
						var left = (e.pageX - $outer.offset().left) * (containerWidth-divWidth) / divWidth - extra;
						$outer.scrollLeft(left);
					});
				}
            });
        </script>
        
     <script>		
		 		
	var aWhile = 1000;
	var doSomethingAfterAWhile = function() 
	{
		$("#bar").FlowSlider();
		var image = "<?php echo $_GET['id3'] ?>";
		console.debug(image);
		$('canvas#'+image).first().click();

	}
	setTimeout( doSomethingAfterAWhile, aWhile );
    </script>
</body>	
</html>


