<?php
/*
    @package CIS421 project
    @author Egil Shijaku, Mighty_j ADD YOUR NAMES HERE GUYS

    DATABASE QUERIES ARE DONE HERE
*/

//bring in the connection header.
require_once("db_connect.php");


/*
functionality Admin Page: remove an employee
*/
function remove_employee($employee_id){
  global $db_db;
  $query = 'DELETE FROM employee WHERE employeeid = :empid';

  $statement3 = $db_db->prepare($query);
  $params = array(
    'empid' => $employee_id
  );
  $statement3->execute($params);
  $statement3->closeCursor();
  return true;
}


/*
functionality Admin Page: add a new employee
*/
function add_employee($fname, $lname, $email, $address, $salary,  $type, $password, $libid){
  global $db_db;
  //username needs to be unique
  $query = 'SELECT email FROM employee
            WHERE email = :email';
  $statement = $db_db->prepare($query);
  $statement->bindValue(':email', $email_address);
  $statement->execute();
  $isUnique = ($statement->rowcount() < 1);
  $statement->closeCursor();

  if($isUnique){// email is unique so the user is added
    // $password = sha1($email_address . $password);
    $query = 'INSERT INTO employee (first_name, last_name, email, password, address, type, salary, libraryid)
              VALUES (:fname, :lname, :email, :password, :address, :type, :salary, :libid)';
    $statement2 = $db_db->prepare($query);

    $params = array(
      'fname' =>  $fname,
      'lname' =>  $lname,
      'password' => $password,
      'address' => $address,
      'email' => $email,
      'salary' => $salary,
      'type'  => $type,
      'libid' => $libid
    );
    $statement2->execute($params);
    $statement2->closeCursor();
    return true;
  }
  else{
    return false;
  }
}

/*
functionality Admin Page: remove a current user
*/
function remove_student( $student_id ){
  global $db_db;

  $query = 'DELETE FROM student WHERE studentid = :studentid';

  $statement3 = $db_db->prepare($query);
  $params = array(
    'studentid' => $student_id
  );
  $statement3->execute($params);
  $statement3->closeCursor();
  return true;
}

/*
functionality Admin Page: 1 add new user
*/
function add_new_student($f_name, $l_name, $address, $email_address, $password){
  global $db_db;
  //username needs to be unique
  $query = 'SELECT email FROM student
            WHERE email = :email';
  $statement = $db_db->prepare($query);
  $statement->bindValue(':email', $email_address);
  $statement->execute();
  $isUnique = ($statement->rowcount() < 1);
  $statement->closeCursor();

  if($isUnique){// email is unique so the user is added
    // $password = sha1($email_address . $password);
    $query = 'INSERT INTO student (first_name, last_name, email, password, address)
              VALUES (:fname, :lname, :email, :password, :address)';
    $statement2 = $db_db->prepare($query);

    $params = array(
      'fname' =>  $f_name,
      'lname' =>  $l_name,
      'password' => $password,
      'address' => $address,
      'email' => $email_address
    );
    $statement2->execute($params);
    $statement2->closeCursor();
    return true;
  }
  else{
    return false;
  }
}

/*
functionality Login Page: 1 Validate Login
*/
function validate_login($email, $password, $type){
  global $db_db;
  if($type == 'admin'){
    // $password = sha1($email . $password);
    $query = "SELECT email, password FROM employee
              WHERE  email = :email AND password = :password";
    $statement = $db_db->prepare($query);
    $params = array(
      'email'   =>    $email,
      'password'  =>  $password
    );
    $statement->execute($params);
    if($statement->rowCount() > 0){
        $statement->closeCursor();
        return true;
    }
    else{
      $statement->closeCursor();
      return false;
    }
  }
  elseif($type == 'student'){
    // $password = sha1($email . $password);
    $query = "SELECT email, password FROM student
              WHERE  email = :email AND password = :password";
    $statement = $db_db->prepare($query);
    $params = array(
      'email'   =>    $email,
      'password'  =>  $password
    );
    $statement->execute($params);
    if($statement->rowCount() > 0){
        $statement->closeCursor();
        return true;
    }
    else{
      $statement->closeCursor();
      return false;
    }
  }
}

/*
functionality Student Page: current books rented
*/
function curr_books_rented($email){
  global $db_db;

  $query ='SELECT bookid, title, author_first_name, author_last_name, date_rented, date_due
          FROM student, books, rentals
          WHERE student.email = :email
          AND student.studentid = rentals.studentid
          AND rentals.bookid = isbn';

  $statement = $db_db->prepare($query);
  $params = array(
    'email' => $email
  );
  $statement->execute($params);
  $result = $statement->fetchAll();
  $statement->closeCursor();
  return $result;
}

/*
functionality Student Page: 1 Book search
                            2 Search Result
*/
function search_for_books($value){
  $found = array();
  return $found;
}

/*
functionality Student Page: 3 Account View
*/
function account_info($studentid){
  global $connection;
  $sql = "SELECT * FROM Student WHERE studentid = {$studentid}";
  $result = $connection->query($sql);
  return $result;
}

/*
functionality Student Page: 4 Rent Books
*/
function rent_books($book_id, $student_id){

  global $db_db;
  $query = 'INSERT INTO rentals (studentid, bookid, date_rented, date_due)
            VALUES (:studentid, :bookid, CURDATE(), CURDATE() + 100)';
  $statement2 = $db_db->prepare($query);

  $params = array(
    'studentid' =>  $student_id,
    'bookid' =>  $book_id
  );
  $statement2->execute($params);
  $statement2->closeCursor();
  update_rented_qty($book_id, 1);
  return true;
}

function update_rented_qty($isbn, $qty){
  global $db_db;
  $query = 'UPDATE books SET quantity = quantity - :qty
            WHERE isbn = :isbn';
  $statement3 = $db_db->prepare($query);
  $params = array(
    'isbn' => $isbn,
    'qty' => $qty
  );
  $statement3->execute($params);
  $statement3->closeCursor();
}

function update_stocked_qty($isbn, $qty){
  global $db_db;

  $query = 'UPDATE books SET quantity = quantity + :qty
            WHERE isbn = :isbn';
  $statement3 = $db_db->prepare($query);
  $params = array(
    'isbn' => $isbn,
    'qty' => $qty
  );
  $statement3->execute($params);
  $statement3->closeCursor();
}

/*
functionality Admin Page: 2 returns
*/
function restock_book($isbn, $student_id ){
  global $db_db;

  $query = 'DELETE FROM rentals WHERE studentid = :studentid AND bookid = :isbn';

  $statement3 = $db_db->prepare($query);
  $params = array(
    'isbn' => $isbn,
    'studentid' => $student_id
  );
  $statement3->execute($params);
  $statement3->closeCursor();
  update_stocked_qty( $isbn, 1 );
  return true;
}

/*
functionality Admin Page: 3 Employee Data tab
*/
function employee_info(){
  global $db_db;

  $query = 'SELECT first_name, last_name, salary,	email,	address, type
            FROM employee';
  $statement = $db_db->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  return $result;
  $statement->closeCursor();
}

/*
functionality Admin Page: 4 add books
*/
function add_books($libid, $book_title, $isbn, $athFName,$athLName, $publisher, $qty){
  // TODO: SQl QUERY and functionality goes here

  global $db_db;
  //username needs to be unique
  $query = 'SELECT isbn FROM books
            WHERE isbn = :isbn';
  $statement = $db_db->prepare($query);
  $statement->bindValue(':isbn', $isbn);
  $statement->execute();
  $isUnique = ($statement->rowcount() < 1);
  $statement->closeCursor();

  if($isUnique){// email is unique so the user is added
    // $password = sha1($email_address . $password);
    $query = 'INSERT INTO books (library_id, isbn, title, author_first_name, author_last_name, publisher, quantity)
              VALUES (:libid, :isbn, :title, :fname, :lname, :publisher, :qty)';
    $statement2 = $db_db->prepare($query);
    $params = array(
      'libid' => $libid,
      'isbn'  => $isbn,
      'title' => $book_title,
      'fname' =>  $athFName,
      'lname' =>  $athLName,
      'publisher' => $publisher,
      'qty' => $qty
    );
    $statement2->execute($params);
    $statement2->closeCursor();
    return true;
  }
  else{
    update_stocked_qty($isbn, $qty);
    return true;
  }
}

/*
functionality Admin Page: 4 remove books
*/
function remove_books( $isbn, $qty ){

  update_rented_qty( $isbn, $qty);
  return true;
}

/*
functionality Admin Page: 5 outstanding rentals
*/
function outstanding_rentals(){

  global $db_db;
  $query = 'SELECT first_name, last_name, title, date_due
            FROM student, books, rentals WHERE student.studentid = rentals.studentid
            AND books.isbn = rentals.bookid';
  $statement = $db_db->prepare($query);
  $statement->execute();
  $result = $statement->fetchAll();
  $statement->closeCursor();
  return $result;
}
