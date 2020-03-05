<?php 
$db = mysqli_init( );
mysqli_options($db, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
mysqli_ssl_set($db, NULL, NULL, '/var/tmp/rds-ca-2019-root.pem', NULL, NULL);
$conn = mysqli_real_connect($db, 'k3beta.c7lkgbzlct6d.ap-south-1.rds.amazonaws.com', 'root', 'maV01X615', 'k3beta', 3306, NULL, MYSQLI_CLIENT_SSL);
mysqli_select_db($conn,'k3beta');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
?>

