<?php 

#open to connectio to DB
     //$conn=mysqli_connect("serverName","UserName","Password","DBName");
	 $conn=mysqli_connect("localhost","root","","ecomircepro");
	if (!$conn) {
        die("cannt conect to server");
	}

?>