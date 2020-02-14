<?php
<<<<<<< HEAD
$conn=mysqli_connect('localhost','root','');
=======
session_start();
$conn=mysqli_connect('localhost','root','root');
>>>>>>> d4718ec77f117baec82479112828b2e57d445821
mysqli_select_db($conn,'k3alpha');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
$db_name='k3beta';
$app_name="InternBuddy";
$app_version="1.0";
$app_logo='<img src="admin/images/logo.png" width="158px" class="brand-logo">';

$version=$app_name." ".$app_version;
$title=$app_name." ".$app_version." A Complete Responsive System";
$footer="<a href='http://www.mavoix.in' target='_blank' class='text-bold-800 grey darken-2'>".$title."</a>";
$project_name="InternBuddy";
$footer_content="Designed & Developed By:";
$developed_by="<a href='http://www.mavoix.in' target='_blank' class='text-bold-800 grey darken-2'>Mavoix Solutions Pvt Ltd</a>";
}
?>
