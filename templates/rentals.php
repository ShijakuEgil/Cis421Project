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

      <form method="post" action="<?php //this will have the php file that will do the validation of all the info added ?>">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="isbn-input">ISBN</label>
            <input type="text" class="form-control" id="isbn-input" placeholder="ISBN">
          </div>
          <div class="form-group col-md-6">
            <label for="student-id-input">Student ID</label>
            <input type="text" class="form-control" id="student-id-input" placeholder="Student ID">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="issueRental">Issue Rental</button>
      </form>

    </div>
    <div class="col-6 text-center border-left p-5 mt-5">
      <h1 class="display-3">Restock a Book</h1>

      <form method="post" action="<?php //this will have the php file that will do the validation of all the info added ?>">


        <div class="form-row" >
          <div class="form-group col-md-6">
            <label for="book-title-input">Book Title</label>
            <input type="text" class="form-control" id="book-title-input" placeholder="Book Title">
          </div>
          <div class="form-group col-md-6">
            <label for="isbn-input">ISBN</label>
            <input type="text" class="form-control" id="isbn-input" placeholder="ISBN">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="restockBook">Restock Book</button>
      </form>

    </div>
 </article>
