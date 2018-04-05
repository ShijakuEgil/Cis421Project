<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Forms for issuing a rental book or collecting a rental
*/
 ?>

 <article class="row add-drop-books-wrapper">

    <div class="col-6 text-center border-right p-5 mt-5">

      <h1 class="display-3">Issue a Rental</h1>

      <form method="post" action="validate.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="rentals-isbn">ISBN</label>
            <input type="text" class="form-control" id="rentals-isbn" name="rentals-isbn" placeholder="ISBN">
          </div>
          <div class="form-group col-md-6">
            <label for="student-id-input">Student ID</label>
            <input type="text" class="form-control" id="rentals-student-id" name="rentals-student-id"placeholder="Student ID">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="issue-rental">Issue Rental</button>
      </form>

    </div>
    <div class="col-6 text-center border-left p-5 mt-5">
      <h1 class="display-3">Restock a Book</h1>

      <form method="post" action="validate.php">

        <div class="form-row" >
          <div class="form-group col-md-6">
            <label for="book-title-input">Book Title</label>
            <input type="text" class="form-control" id="restock-book-title" name="" placeholder="Book Title">
          </div>
          <div class="form-group col-md-6">
            <label for="isbn-input">ISBN</label>
            <input type="text" class="form-control" id="restock-isbn" placeholder="ISBN">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="restock-book">Restock Book</button>
      </form>

    </div>
 </article>
