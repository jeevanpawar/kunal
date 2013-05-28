<?php include("Admin/config.inc.php");
error_reporting(0);
$id=$_GET['cid'];



$qry1="select * from gallery_photos where photo_category='$id'";

$res1=mysql_query($qry1);

while($row1=mysql_fetch_array($res1))
{
	$data[]=array('pat'=>$row1['photo_filename']);
	
}

echo json_encode($data);

?>