<?php
	include("config.inc.php");
	error_reporting(0);
	
	if(isset($_REQUEST['addcatb']))
	{	
	$cat_name=$_POST['t1'];
	$cap=$_POST['t2'];
	
	$qry_cat="insert into gallery_category(category_name,caption) values('$cat_name','$cap')";
	$res_cat=mysql_query($qry_cat);
	if($res_cat)
	{
		header("location:sample_gallery.php");
	}
	
	}

?>
