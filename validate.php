<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Validates the POST calls and redirects the call to the right function or web page
  this is were the validation of the admin email and password will happen
  if the data given matches the data in the databse than we will redirect
  the page to the admin page
*/
require('functionsDB/db_query.php');
session_start();

 if(isset($_POST['admin'])){
// NOTE: this will be executed only on admin/worker signin
/*
   NOTE: Tested with  true and false return from validate_login() function
        for both Student and Admin logins.
*/
    if( validate_login($_POST['inEmail'], $_POST['password'])):
        header("Location:admin-page.php");
        $_SESSION['login'] = 'T';
    else:
        header("Location:index.php");
        $_SESSION['login'] = 'F';
    endif;
}
elseif(isset($_POST['student'])){
  //same proccess as above this time for students
  if( validate_login($_POST['inEmail'], $_POST['password'])):
    header("Location:student-page.php");
    $_SESSION['login'] = 'T';
  else:
    header("Location:index.php");
    $_SESSION['login'] = 'F';
  endif;
}


elseif( isset( $_POST['addBook'] ) ) {
/*
    Button addBook from admin page is clicked which means the user is trying
    to add a book in the database. The form from the admin page 'add a book'
    section holds the following values that need to be directed to the
    add_books() function.
*/
// NOTE: Using empty variables for testing
// DEBUG: the commented code to the right will be used in final call.
    $book_title = '';    // = $_POST['add-book-title'];
    $book_id = '';        //= $_POST['add-isbn'];
    $ath_fname = '';      //= $_POST['add-ath-fName'];
    $ath_lname = '' ;     //= $_POST['add-ath-lname'];
    $publisher = '';     // = $_POST['add-publisher'];
    $date_published = '';//= $_POST['add-date-published'];
    $qty='';           // = $_POST['add-qty'];

    // NOTE: add_books() returns true at all time so
    //       else executed only when add_books() returns false
    if( add_books( $book_title, $book_id, $ath_fname, $ath_lname, $publisher, $date_published, $qty ) ) {
      $_SESSION['book-added'] = 'T';
    }
    else{
      $_SESSION['book-added'] = 'F';
    }
    header('Location:admin-page.php');
    die();
  }
  elseif(isset($_POST['removeBook'])){
    $book_title = ''; // $_POST['rmv-book-title'];
    $book_id ='';     //$_POST['rmv-isbn'];
    $qty = '';        //$_POST['rmv-qty'];

    if( remove_books( $book_title, $book_id, $qty ) ) {
      $_SESSION['book-removed'] = 'T';
    }
    else{
      $_SESSION['book-removed'] = 'F';
    }

    header( 'Location:admin-page.php');
  }
