<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

Search bar query
*/
require_once('db_connect.php');

$searchString = $_POST['searchString'];
 global $db_db;

 $query = 'SELECT * FROM books
           WHERE author_first_name LIKE "%'.$searchString.'%"
           OR author_last_name LIKE "%'.$searchString.'%"
           OR title LIKE "%'.$searchString.'%"
           OR isbn LIKE "%'.$searchString.'%"
           OR publisher LIKE "%'.$searchString.'%"';
$statement = $db_db->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();

echo json_encode( $result );
