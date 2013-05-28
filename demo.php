				<?php 
					include("Admin/config.inc.php");
					$qry="select * from gallery_category";
					$res=mysql_query($qry);
					
					
					while($row=mysql_fetch_array($res))
					{
						echo "<li>";
						echo $row[1];
						echo "</li>";
						$qry1="select * from gallery_photos where photo_category='$row[0]'";
						$res1=mysql_query($qry1);
					
						while($row1=mysql_fetch_array($res1))
						{
							echo "<img src='Admin/photos/$row1[1]'>";
						}
					}
				?>