<?php
session_start();

define('LOCALHOST','localhost');
define('ROOT','root');
define('PASSWORD','');
define('DATABASE','login_db');
define('SITEURL','http://localhost/phpAccount/index3.php');

$conn =mysqli_connect(LOCALHOST ,ROOT, PASSWORD, DATABASE) or die(mysqli_error('Failed to Connect!'));
$db_select=mysqli_select_db($conn,DATABASE) or die(mysqli_error('Failed to Select Database!'));

?>