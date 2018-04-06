<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Admin page
*/
?>

<?php include('header.php');
require_once('functionsDb/db_query.php');
session_start();
include('templates/navbar.php');?>


<?php if($_SESSION['login'] === 'T'): ?>
<main class="mx-5">
  <ul class="nav nav-tabs nav-justified mt-5" id="myTab" role="tablist">
  <?php //NOTE logic for page recalls after a form is submitted to validate.php

  //NOTE activate the body to be displayed
  $employee_selected = 'false';
  $AD_book_selected = 'false';
  $rentals_selected  = 'false';
  $late_rentals_selected = 'false';
  $AD_student_selected = 'false';
  $AD_employee_selected = 'false';

  // NOTE activate the link that will start the page
  $employee_active = '';
  $AD_book_active = '';
  $rentals_active = '';
  $late_rentals_active = '';
  $AD_student_active = '';
  $AD_employee_active = '';

  // NOTE: activate the tabpanel
  $employee_tabpanel ='';
  $AD_book_tabpanel = '';
  $rentals_tabpanel = '';
  $late_rentals_tabpanel ='';
  $AD_student_tabpanel ='';
  $AD_employee_tabpanel = '';

  // NOTE if-else statement to decide which operation was executed prior to page opening
  if( isset( $_SESSION['book-added']) || isset( $_SESSION['book-removed'] ) ):
    $AD_book_active = 'active';
    $AD_book_selected = 'true';
    $AD_book_tabpanel = 'active show';
  elseif( isset( $_SESSION['book-rented']) || isset( $_SESSION['book-stocked'] ) ):
    $rentals_selected = 'true';
    $rentals_active = 'active';
    $rentals_tabpanel = 'active show';
  elseif( isset( $_SESSION['student-added']) || isset( $_SESSION['student-removed'] ) ):
    $AD_student_selected = 'true';
    $AD_student_active = 'active';
    $AD_student_tabpanel = 'active show';
  else:
    $employee_active = 'active';
    $employee_selected = 'true';
    $employee_tabpanel = 'active show';
  endif;
  ?>
  <?php
  // DEBUG: After the addBoook submit is clicked the callback to this page displays the
  //         first tab instead to display the add/drop tab
  ?>

  <li class="nav-item">
    <a class="nav-link <?php echo $employee_active; ?>"
      id="employee-tab" data-toggle="tab" href="#libraryEmployees" role="tab" aria-controls="libraryEmployees"
      aria-selected="<?php echo $employee_selected;?>">
      Library Employees
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $ad_employee_active; ?>"
      id="ad-employee-tab" data-toggle="tab" href="#adEmployees" role="tab" aria-controls="adEmployees"
      aria-selected="<?php echo $ad_employee_selected;?>">
    Add/Drop Employees
    </a>
  </li>


  <li class="nav-item">
    <a class="nav-link <?php echo $AD_book_active; ?>"
      id="ad-books-tab" data-toggle="tab" href="#addDropBooks" role="tab" aria-controls="addDropBooks"
      aria-selected=" <?php echo $AD_book_selected; ?>">
      Add/Drop Books
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $rentals_active; ?>"
      id="rentals-tab" data-toggle="tab" href="#rentals" role="tab" aria-controls="rentals"
      aria-selected="<?php echo $rentals_selected; ?>">
      Process Rentals/Returns
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $late_rentals_active; ?>"
      id="late-rentals-tab" data-toggle="tab" href="#lateRentals" role="tab" aria-controls="lateRentals"
      aria-selected="<?php echo $late_rentals_selected; ?>">
      Late Rentals
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link <?php echo $AD_student_active; ?>"
      id="ad-students-tab" data-toggle="tab" href="#addDropStudent" role="tab" aria-controls="addDropStudent"
      aria-selected="<?php echo $AD_student_selected; ?>">
      Add/Drop Student
    </a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
<?php
/*
  NOTE:
  To make the code more modular and easy to read the content fo each tab is separated in templates that are
  located in teh templates folder.
*/
?>
  <div class="tab-pane fade <?php echo $employee_tabpanel; ?>" id="libraryEmployees" role="tabpanel" aria-labelledby="libraryEmployees-tab">
    <?php include('templates/employee_table.php');?>
  </div>
  <div class="tab-pane fade <?php echo $ad_employee_tabpanel; ?>" id="adEmployees" role="tabpanel" aria-labelledby="adEmployees-tab">
    <?php include('templates/add_drop_employee.php');?>
  </div>
  <div class="tab-pane fade  <?php echo $AD_book_tabpanel; ?>" id="addDropBooks" role="tabpanel" aria-labelledby="addDropBooks-tab">
    <?php include('templates/add_drop_books.php'); ?>
    <div class="ad-book-feedback-wrapper container-fluid">
      <?php

      if(isset($_SESSION['book-added']) && $_SESSION['book-added'] ==='F'):
        ?>
        <small class="text-danger">Book not added, try again.</small>
      <?php

      elseif( isset( $_SESSION['book-added']) && $_SESSION['book-added'] ==='T'):
        ?>
        <small class="text-success">Successfully added the book(s)!</small>
      <?php

      elseif( isset( $_SESSION['book-removed']) && $_SESSION['book-removed'] === 'T' ):
      ?>
        <small class="text-success float-right">Successfully removed the book(s)!</small>
      <?php
      elseif( isset( $_SESSION['book-removed']) && $_SESSION['book-removed'] === 'F' ):
        ?>
        <small class="text-danger float-right">Book not removed, </small>
    <?php
      endif;
      if(isset($_SESSION['book-added'])):
        unset($_SESSION['book-added']);
      elseif(isset($_SESSION['book-removed'])):
        unset($_SESSION['book-removed']);
      endif;
      ?>
    </div>
  </div>
  <div class="tab-pane fade <?php echo $rentals_tabpanel; ?>" id="rentals" role="tabpanel" aria-labelledby="rentals-tab">
    <?php include('templates/rentals.php'); ?>
    <div class="rentals-feedback-wrapper container-fluid">
      <?php

      if(isset($_SESSION['book-rented']) && $_SESSION['book-rented'] ==='F'):
        ?>
        <small class="text-danger">Book could not be rented, try again.</small>
      <?php

      elseif( isset( $_SESSION['book-rented']) && $_SESSION['book-rented'] ==='T'):
        ?>
        <small class="text-success">Successfully rented the book(s)!</small>
      <?php

      elseif( isset( $_SESSION['book-stocked']) && $_SESSION['book-stocked'] === 'T' ):
      ?>
        <small class="text-success float-right">Successfully stocked the book(s)!</small>
      <?php
      elseif( isset( $_SESSION['book-stocked']) && $_SESSION['book-stocked'] === 'F' ):
        ?>
        <small class="text-danger float-right">Book not stocked, try again!</small>
    <?php
      endif;
      if(isset($_SESSION['book-rented'])):
        unset($_SESSION['book-rented']);
      elseif(isset($_SESSION['book-stocked'])):
        unset($_SESSION['book-stocked']);
      endif;
      ?>
    </div>
  </div>
  <div class="tab-pane fade <?php echo $late_rentals_tabpanel; ?>" id="lateRentals" role="tabpanel" aria-labelledby="lateRentals-tab">
    <?php include('templates/late_rentals.php'); ?>
  </div>
  <div class="tab-pane fade <?php echo $AD_student_tabpanel; ?>" id="addDropStudent" role="tabpanel" aria-labelledby="addDropStudent-tab">
    <?php include('templates/add_drop_student.php'); ?>
    <div class="ad-student-feedback-wrapper container-fluid">
      <?php

      if(isset($_SESSION['student-added']) && $_SESSION['student-added'] ==='F'):
        ?>
        <small class="text-danger">Student not added, try again.</small>
      <?php

      elseif( isset( $_SESSION['student-added']) && $_SESSION['student-added'] ==='T'):
        ?>
        <small class="text-success">Successfully added the student!</small>
      <?php
      elseif( isset( $_SESSION['student-removed']) && $_SESSION['student-removed'] === 'T' ):
      ?>
        <small class="text-success float-right">Successfully removed the book(s)!</small>
      <?php
      elseif( isset( $_SESSION['student-removed']) && $_SESSION['student-removed'] === 'F' ):
        ?>
        <small class="text-danger float-right">Book not removed, </small>
    <?php
      endif;
      if(isset($_SESSION['student-added'])):
        unset($_SESSION['student-added']);
      elseif(isset($_SESSION['student-removed'])):
        unset($_SESSION['student-removed']);
      endif;
      ?>
    </div>
  </div>
</div>
</main>

<?php
else:
  header('Location:index.php');
endif; ?>
<?php include('footer.php'); ?>
