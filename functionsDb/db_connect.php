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
$db_dataSourceName = 'mysql:host=localhost;dbname=librarydb';
$db_username = 'root'; //replace w/ your own
$db_password = ''; // replace w/ your own
$db_dbErrorMsg = ""; // Echo this out if your having problems, might give hint as to whats wrong
$db_db = NULL; // Initialize to null
//try connecting to DB
try{
    $db_db = new PDO($db_dataSourceName, $db_username, $db_password);
    //https://phpdelusions.net/pdo#errors
    $db_db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $db_isDbConnect = true;
}
catch(PDOException $e){
    $db_error_message = $e->getMessage();
    $db_dbErrorMsg .=  $db_error_message;
    echo '<p>PDOEXCEPTION: ' . $db_dbErrorMsg . '</p>';
    exit();
}
