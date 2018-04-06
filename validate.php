<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Validates the POST calls and redirects the call to the right function or web page
  this is were the validation of the admin email and password will happen
  if the data given matches the data in the databse than we will redirect
  the page to the admin page
*/
require_once('functionsDb/db_query.php');
session_start();

 if(isset($_POST['admin'])){
// NOTE: this will be executed only on admin/worker signin
/*
   NOTE: Tested with  true and false return from validate_login() function
        for both Student and Admin logins.
*/
        $email = $_POST['login-email'];
        $password = $_POST['login-password'];
        $type = 'admin';
        $_SESSION['user'] = $email;
    if( validate_login( $email, $password , $type) ):
        $_SESSION['login'] = 'T';
        header("Location:admin-page.php");
    else:
        $_SESSION['login'] = 'F';
         header("Location:index.php");

    endif;
}


elseif( isset( $_POST['student'] ) ) {
  //same proccess as above this time for students
  $type  ='student';
  $email = $_POST['login-email'];
  $password = $_POST['login-password'];
  $_SESSION['user'] = $email;
  if( validate_login( $email, $password, $type ) ):
    $_SESSION['login'] = 'T';
    header("Location:student-page.php");

  else:
    $_SESSION['login'] = 'F';
    header("Location:index.php");

  endif;
}

// NOTE: adding new or current books
elseif( isset( $_POST['addBook'] ) ) {
/*
    Button addBook from admin page is clicked which means the user is trying
    to add a book in the database. The form from the admin page 'add a book'
    section holds the following values that need to be directed to the
    add_books() function.
*/
// NOTE: Using empty variables for testing
// DEBUG: the commented code to the right will be used in final call.
    $book_title = $_POST['add-book-title'];
    $book_id = $_POST['add-isbn'];
    $ath_fname = $_POST['add-ath-fName'];
    $ath_lname = $_POST['add-ath-lname'];
    $publisher  = $_POST['add-publisher'];
    $qty = $_POST['add-qty'];
    $libid = 1;

    // NOTE: add_books() returns true at all time so
    //       else executed only when add_books() returns false
    if( add_books( $libid, $book_title, $book_id, $ath_fname, $ath_lname, $publisher, $qty ) ) {
      $_SESSION['book-added'] = 'T';
    }
    else{
      $_SESSION['book-added'] = 'F';
    }
    header('Location:admin-page.php');
    die();
  }

  // NOTE: removing current book from library
  elseif( isset( $_POST['removeBook'] ) ){
    $book_id = $_POST['rmv-isbn'];
    $qty = $_POST['rmv-qty'];

    if( remove_books( $book_id, $qty ) ) {
      $_SESSION['book-removed'] = 'T';
    }
    else{
      $_SESSION['book-removed'] = 'F';
    }
    header( 'Location:admin-page.php');
  }

  //NOTE ISSUE RENTAL VALIDATION FUNCTION
  elseif(isset($_POST['issue-rental'])){
    $book_id = $_POST['rentals-isbn'];
    $student_id = $_POST['rentals-student-id'];

    if( rent_books( $book_id, $student_id ) ) {
      $_SESSION['book-rented'] = 'T';
    }
    else{
      $_SESSION['book-rented'] = 'F';
    }
    header("Location:admin-page.php");
  }

  // NOTE: RESTOCK A RENTED BOOK
  elseif(isset($_POST['restock-book'])){

    $student_id = $_POST['restock-student-id'];
    $book_isbn = $_POST['restock-isbn'];

    if( restock_book( $book_isbn, $student_id ) ) {
      $_SESSION['book-stocked'] = 'T';
    }
    else{
      $_SESSION['book-stocked'] = 'F';
    }
    header("Location:admin-page.php");
  }
  // NOTE: ADDING A NEW STUDENT
  elseif(isset($_POST['add-student'])){
    $student_fname = $_POST['student-fname'];
    $student_lname = $_POST['student-lname'];
    $student_email = $_POST['student-email'];
    $student_password = $_POST['student-password'];
    $student_address = $_POST['student-address'];
    $student_address_2 = $_POST['student-address-2'];
    $student_address_city = $_POST['student-address-city'];
    $student_address_state = $_POST['student-address-state'];
    $student_address_zip = $_POST['student-address-zip'];

    $address = $student_address . ' '.$student_address_2 . ' '
     .$student_address_city.' '.$student_address_state.' '
     .$student_address_zip;

    if( add_new_student( $student_fname, $student_lname, $address, $student_email, $student_password ) ) {
      $_SESSION['student-added'] = 'T';
    }
    else{
      $_SESSION['book-added'] = 'F';
    }
    header("Location:admin-page.php");
  }

  // NOTE: REMOVING A CURRENT STUDENT
  elseif(isset($_POST['remove-student'])){
    $student_id = $_POST['rmv-student-id'];

    if( remove_student( $student_id ) ) {
      $_SESSION['student-removed'] = 'T';
    }
    else{
      $_SESSION['student-removed'] = 'F';
    }
    header("Location:admin-page.php");
  }

  // NOTE: the form for adding an employee is completed and the submit button is clicked
  elseif( isset( $_POST['add-employee'] ) ){
    $fname =    $_POST['add-employee-fname'];
    $lname =    $_POST['add-employee-lname'];
    $email =    $_POST['add-employee-email'];
    $password = $_POST['add-employee-password'];
    $address =  $_POST['add-employee-address'].' '
                .$_POST['add-empoloyee-address-2'].' '
                .$_POST['add-employee-city'].' '
                .$_POST['add-employee-state'].' '
                .$_POST['add-employee-zip'];

    $salary =   $_POST['add-employee-salary'];
    $type =     $_POST['add-employee-type'];
    $libid=   1;
    if( add_employee( $fname, $lname, $email, $address, $salary, $type, $password, $libid) ){
      $_SESSION['employee-added'] = 'T';
    }
    else{
      $_SESSION['employee-added'] = 'F';
    }

    header('Location:admin-page.php');
  }

  /*
  // NOTE: the form for removing a current employee is completed and the submit button is clicked
  */
  elseif( isset( $_POST['remove-employee'] ) ){
    $employee_id = $_POST['rmv-employee-id'];

    if( remove_employee( $employee_id ) ){
      $_SESSION['employee-removed'] = 'T';
    }
    else{
      $_SESSION['employee-removed'] = 'F';
    }
    header('Location:admin-page.php');
  }
