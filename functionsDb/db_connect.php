<?php
/*

@package CIS421 project
@author Egil Shijaku, ADD YOUR NAMES HERE GUYS

DATABASE CONNECTION
*/

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "cis421projectdb";
$connect_check;
$junk;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect_check = true;
    }

catch(PDOException $e)
    {
      $connect_check = false;
      $junk = $e;

    }
