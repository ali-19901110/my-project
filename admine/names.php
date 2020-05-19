<?php
include("include/connection.php");

$result = mysqli_query($conn, "SELECT admin_email FROM adminpro where admin_email={$_GET['admin_email']}");
/*echo $result  ;die;*/
$row = mysqli_fetch_assoc($result);

/*if ($row['admin_email'] == 1) {
	echo "<span>this is exist in database</span>";
}*/
/*echo "<option>{$row['admin_email']}</option>////////////";*/
