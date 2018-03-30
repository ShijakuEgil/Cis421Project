<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Validates the POST calls and redirects the call to the right function or web page
*/
 ?>
 <?php if(isset($_POST['admin'])){
    //this is were the validation of the admin email and password will happen
    //if the data given matches the data in the databse than we will redirect
    // the page to the admin page

    //function that processess this query for the database is called here
    //if true redirect if not true sent back with info that information is not correct
    header("Location:admin-page.php");
    die();
  }
  elseif(isset($_POST['student'])){
    //same proccess as above this time for students
    header("location:student-page.php");
    die();
  }
   ?>
