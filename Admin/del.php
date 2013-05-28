<?php
// The code assumes that you are deleting multiple entries at once using check-box, so it is looping.. 
	$qry=mysql_query("select * from TABLE where id='$id'");
	$row=mysql_fetch_array($qry);
	if($row["photo"]!="") {  
	$photo=$row["photo"];
	unlink("/path/to/photo/".$photo);
	}
	if($row["file"]!="") {  
	$file=$row["file"];
	unlink("/path/to/file/".$file);
	} 	
// Delete the entry from the database
$delete="Delete from TABLE where id='$id' ";
$result=mysql_query($delete);
if($result==1){
print "Entry delete success";
}else{
print "Entry delete failed";
}
?>