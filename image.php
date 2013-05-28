<?php 
		include("Admin/config.inc.php");
		$mid=$_GET['id2'];
		$qry="select * from gallery_photos where photo_category='$mid'";
		$res=mysql_query($qry);
?>

<?php
while($row2=mysql_fetch_array($res))
				{
					echo"<img class='rotate' src='Admin/photos/tb_$row2[1]' height='160' width='180'>";
				}
		?>