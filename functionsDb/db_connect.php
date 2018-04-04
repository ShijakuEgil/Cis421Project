<?php

  /* connection header
  @package CIS421 project
  @authors Egil Shijaku, Rabih Salamey

  include in your .php file and specify a query.
  e.g.   $sql = "SELECT * FROM Employee";
         $result = $connection->query($sql);
  */

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cis421projectdb";
$connection = null;
$connection = mysqli_connect($servername, $username, $password, $dbname);
if($connection->connect_error) {
  echo "Error: Unable to connect to mysql database" . PHP_EOL;
  die("Connection failed: " . $connection->connect_error);
}// else {
//  $_SESSION["conn"] = $connection;
//}
?>
