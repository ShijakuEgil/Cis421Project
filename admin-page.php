<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Admin page
*/
?>

<?php include('header.php');
require_once('functionsDb/db_query.php');?>
<header>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><i class="fas fa-book fa-1x"></i>  University Library</a>
    <ul class="nav navbar-nav d-inline-block px-3">
      <li class="nav-item d-inline-flex text-nowrap mx-3 my-auto">
        <p class="nav-link "><?php /*temporary echo*/echo 'Admin Name'//php call to be made here so it will get the name of the current user ?></p>
      </li>
      <li class="nav-item d-inline-flex text-nowrap my-auto">
        <a class="nav-link" href="#">Sign out</a>
      </li>
    </ul>
  </nav>
</header>
<main class="mx-5">
  <ul class="nav nav-tabs nav-justified mt-5" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#libraryEmployees" role="tab" aria-controls="libraryEmployees" aria-selected="true">Library Employees</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#addDropBooks" role="tab" aria-controls="addDropBooks" aria-selected="false">Add/Drop Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#rentals" role="tab" aria-controls="rentals" aria-selected="false">Process Rentals/Returns</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#lateRentals" role="tab" aria-controls="lateRentals" aria-selected="false">Late Rentals</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addDropStudent" role="tab" aria-controls="addDropStudent" aria-selected="false">Add/Drop Student</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="libraryEmployees" role="tabpanel" aria-labelledby="home-tab">
    <?php
    /*putting the html for the table in templates/employee_table.php file so the code doesnt get
    to long in here. The Html in the other file will display in here when using the include() function*/
    ?>
    <?php include('templates/employee_table.php');?>
  </div>
  <div class="tab-pane fade" id="addDropBooks" role="tabpanel" aria-labelledby="contact-tab">
    <?php include('templates/add_drop_books.php'); ?>
  </div>
  <div class="tab-pane fade" id="rentals" role="tabpanel" aria-labelledby="contact-tab">
    <?php include('templates/rentals.php'); ?>
  </div>
  <div class="tab-pane fade" id="lateRentals" role="tabpanel" aria-labelledby="contact-tab">
    <?php include('templates/late_rentals.php'); ?>
  </div>
  <div class="tab-pane fade" id="addDropStudent" role="tabpanel" aria-labelledby="contact-tab">
    <?php include('templates/add_drop_student.php'); ?>
  </div>
</div>
</main>

<?php include('footer.php'); ?>
