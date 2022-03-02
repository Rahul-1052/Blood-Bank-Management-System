<?php
$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'bloodbank';
$db = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$con = mysqli_connect("localhost","root","","bloodbank");
// Check connection
if (!$con)
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error($con);
  }
?>