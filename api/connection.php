<?php

//$mysqli = mysqli_init();
//$mysqli->options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
//$mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-bundle.crt", NULL, NULL);
//$mysqli->real_connect('hostname', 'user', 'password', 'database');

$db_host = 'k3beta.c7lkgbzlct6d.ap-south-1.rds.amazonaws.com';
$db_user = 'root';
$db_password = 'maV01X615';
$db_database = 'k3beta';




$conn = mysqli_init();
if (!$conn) {
    die('mysqli_init failed');
}

// THIS OPTION, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, HAS THE REMOTE SERVER VALIDATE THE CERTIFICATE
mysqli_options($conn, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
// THESE ARE FROM THE MYSQL SERVER.
$conn->ssl_set(null, null, '/var/tmp/rds-ca-2019-root.pem', null, null);

if (!$conn->options(MYSQLI_INIT_COMMAND, 'SET AUTOCOMMIT = 0')) {
    die('Setting MYSQLI_INIT_COMMAND failed');
}
if (!$db->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5)) {
    die('Setting MYSQLI_OPT_CONNECT_TIMEOUT failed');
}

// You may want to verify the certificate and not use the option: MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT
if (!$conn->real_connect($db_host, $db_user, $db_password, $db_database, '3306', null, VERIFY_CA)) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
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

}
?>
