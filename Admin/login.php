<?php
	include("config.inc.php");
	if(isset($_REQUEST['b1']))
	{
		$sql="SELECT * FROM login where user = '". $_POST['username'] ."' and password = '".$_POST['password']."'";
		$result = mysql_query($sql);
		if($row = mysql_fetch_array($result))
		  {
			 header("Location:sample_gallery.php");
		  }
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Slate Admin Login</title>
	
	<link rel="stylesheet" href="./css/screen.css" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="./css/plugin.css" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="./css/custom.css" type="text/css" media="screen" title="no title" charset="utf-8" />
	<link rel="stylesheet" href="./css/login.css" type="text/css" media="screen" title="no title" charset="utf-8" />

</head>

<body >

<div id="login">
	
	<h1>Kunal Arts</h1>
	
<div id="login-body" class="clearfix"> 

	         
	<form action="" name="login" id="login_form" method="post">
		
		
	                    <div class="content_front">

	        <div class="pad">
	        	
	        	<div class="field">
					<label>Username:</label>
					
					<div class=""><span class="input"><input name="username" id="login_email" class="text" type="text" value="admin" /></span></div>
				</div> <!-- .field -->
				
				<div class="field">
					<label>Password:</label>

					
					<div class=""><span class="input"><input name="password" id="login_password" class="text" type="password" value="password" /> 
						<a style="" href="javascript:;" id="forgot_my_password"> &nbsp;</a></span></div>
				</div> <!-- .field -->
				
			
				
				

	        </div>
	    </div>
				 
		
				<div>
				<span class="log">	<input type="submit" name="b1" value="Login" /></span>

				</div>
</form>
		
	

</div>
</div> <!-- #login -->


</body>

</html>