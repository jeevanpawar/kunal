
<?php
	include("config.inc.php");
	
	$qry="select * from gallery_category";
	$res=mysql_query($qry);
	
?>

<?php

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Image Gallery | Slate Admin</title>	
		
	<link rel="stylesheet" href="./css/screen.css" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="./css/plugin.css" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="./css/custom.css" type="text/css" media="screen" title="no title" charset="utf-8" />	
		
</head>

<body>
	
<div id="wrapper">
	
	<div id="header">
		<img src="././images/avatar.jpg">
		<h1>Kunal Admin</h1>
		
		 <!-- #info -->
				
	</div> <!-- #header -->	
	
	
		<div id="nav">	

		
	</div> <!-- #nav -->
	
	
	<div id="content" class="xfluid">
		
		<a name="line"></a>
		<div id="gallery_wrapper" class="portlet x8">
			
			<div class="portlet-header">
				<h4>Image Gallery</h4>
			</div> 
						
			<div>
				
				<div>
				<table>
				
				<tr class="maintr">
				<td width="35%">Category Name</td>
				<td width="45%">Caption</td>
				<td width="">Action</td>
				</tr>
				
				<?php
	
				while($row=mysql_fetch_array($res))
				{
					echo "<tr>";
					echo "<td>".$row[1]."</td>";
					echo "<td>".$row[2]."</td>";
					echo "<td><a href='personal.php?id=$row[1]'>Edit</a></td>";
					echo "<td><a href='contact.php?id1=$row[1]'>Delete</a></td>";
					echo "</tr>";
					
				}
				
				?>

				
				</table>

			</div>

			</div> <!-- .portlet-content -->
		</div> <!-- .portlet -->
		
		
		<div class="portlet x4">
			
			<div class="portlet-header">
				<div class="up">
				<form action="" method="post">
				<input type="submit" value="Upload Photos" name="upload" />
				<input type="submit" value="Add Category" name="addcat" />
				</form>
				</div>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
			
				<?php
					if(isset($_REQUEST['upload']))
					{
						include("preupload.php");
					}
					if(isset($_REQUEST['addcat']))
					{
						include("addcat.php");
					}
				?>
			</div> <!-- .portlet-content -->
			
		</div> <!-- .portlet -->

	</div> <!-- #content -->
	
	<div id="footer">
		
		<p>Copyright &copy; 2012 <a href="javascript:;">Wavetechline</a>, all rights reserved.</p>
		
	</div> <!-- #footer -->
	
</div> <!-- #wrapper -->

<script  type="text/javascript" src="js/jquery/jquery.1.4.2.min.js"></script>
<script  type="text/javascript" src="js/slate/slate.js"></script>
<script  type="text/javascript" src="js/slate/slate.portlet.js"></script>
<script  type="text/javascript" src="js/plugin.js"></script>


<script type="text/javascript" charset="utf-8">
$(function () 
{
	slate.init ();
	slate.portlet.init ();	
});
	</script>
	
</body>

</html>