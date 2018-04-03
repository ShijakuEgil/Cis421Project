<?php
/*
@package CIS421 project
@author Egil Shijaku, Mighty_j ADD YOUR NAMES HERE GUYS
DATABASE QUERIES ARE DONE HERE
*/

/*
functionality Login Page: 1 Validate Login
*/
function validate_login($email, $password){
  $password = sha1($email . $password);
  return true;
}

/*
functionality Student Page: 1 Book search
                            2 Search Result
*/
function search_for_books($book_name, $book_id, $author){
  $found_name = "Carl the magician";
  $found_id = 123456789;
  $author = "Michael Scott";
  return array($found_name, $found_id, $author);
}

/*
functionality Student Page: 3 Account View
*/
function account_info(){
  return "Student info here";
}

/*
functionality Student Page: 4 Rent Books
*/
function rent_books(){
  return "rented Scotts Tots";
}

/*
functionality Admin Page: 1 add new user
*/
function add_new_user($f_name, $l_name, $address, $email_address, $password){
  $added_user = true;
  return $added_user;
}
/*
functionality Admin Page: 2 returns
*/
function returns(){
  return true;
}
/*
functionality Admin Page: 3 Employee Data tab
*/
function employee_info(){
  $employee_info = array(//stub array
    array(
      'fname' => 'Mark',
      'lname' => 'Otto',
      'salary'=> '30,000',
      'email' => 'email@email.com',
      'address' =>  '1111 address  Adress, AD 1111',
      'isStudent' => 'Yes'
    ),
    array(
      'fname' => 'Jacob',
      'lname' => 'Thornton',
      'salary'=> '30,000',
      'email' => 'email@email.com',
      'address' =>  '1111 address  Adress, AD 1111',
      'isStudent' => 'Yes'
    ),
    array(
      'fname' => 'Larry',
      'lname' => 'Who',
      'salary'=> '30,000',
      'email' => 'email@email.com',
      'address' =>  '1111 address  Adress, AD 1111',
      'isStudent' => 'Yes'
    ),
  );
  return $employee_info;// this will be the array with all the table rows
}

/*
functionality Admin Page: 4 add books
*/
function add_books($book_title, $isbn, $athFName,$athLName, $publisher, $date_published, $qty){
  return true;
}

/*
functionality Admin Page: 4 remove books
*/
function remove_books(){
  $removed_book = true;
  return $removed_book;
}

/*
functionality Admin Page: 5 outstanding rentals
*/
function outstanding_rentals(){
  $late_rentals = array(//stub array
    array(
      'fname' => 'Mark',
      'lname' => 'Otto',
      'book_title' => 'The Book Title',
      'days_late' =>  '3'
    ),
    array(
      'fname' => 'Jacob',
      'lname' => 'Thornton',
      'book_title' => 'The Book Title',
      'days_late' =>  '12'
    ),
    array(
      'fname' => 'Larry',
      'lname' => 'Who',
      'book_title' => 'The Book Title',
      'days_late' =>  '4'
    ),
  );
  return $late_rentals;//array that holds all rows with late rentals
}
