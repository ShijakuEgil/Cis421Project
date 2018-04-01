<?php
/*
@package CIS421 project
@author Egil Shijaku, Mighty_j ADD YOUR NAMES HERE GUYS
DATABASE QUERIES ARE DONE HERE
*/
/*
functionality Login Page: 1 Validate Login
*/
function validate_login($email_address, $password){
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
  return "Display employee info here";
}
/*
functionality Admin Page: 4 add books
*/
function add_books(){
  $added_book = true;
  return $added_book;
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
  return "Display list of rentals here";
}
