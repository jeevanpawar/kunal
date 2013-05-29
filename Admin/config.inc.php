<?php
	$hostname = "localhost";
	$database = "db";
	$username = "root";
	$password = "";
    $mysql_link = mysql_connect("localhost", "root", "");   
    mysql_select_db("db") or die("Could not select database");

    $images_dir = "photos";
?>
