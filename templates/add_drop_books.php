<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  will display forms that will add or drop books
*/
 ?>

 <article class="row add-drop-books-wrapper">
    <div class="col-6 text-center border-right p-5 mt-5">

      <h1 class="display-3">Add a New Book</h1>

      <form method="post" action="validate.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="add-book-title">Book Title</label>
            <input type="text" class="form-control" id="add-book-title" name="add-book-title"placeholder="Book Title">
          </div>
          <div class="form-group col-md-6">
            <label for="add-isbn">ISBN</label>
            <input type="text" class="form-control" id="add-isbn" name="add-isbn"placeholder="ISBN">
          </div>
          <div class="form-group col-md-6">
            <label for="add-author-fname">Author First Name</label>
            <input type="text" class="form-control" id="add-author-fname" name="add-ath-fName" placeholder="First Name">
          </div>
          <div class="form-group col-md-6">
            <label for="add-author-lname">Author Last Name</label>
            <input type="text" class="form-control" id="add-author-lname" name="add-ath-lname" placeholder="Last Name">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="add-publisher">Publisher</label>
            <input type="text" class="form-control" id="add-publisher" name="add-publisher" placeholder="Publisher">
          </div>
          <div class="form-group col-md-4">
            <label for="add-date-published">Date Published</label>
            <input type="date" id="add-date-published" name="add-date-published" class="form-control">
          </div>
          <div class="form-group col-md-2">
            <label for="add-qty">Quantity</label>
            <input type="number" class="form-control" id="add-qty" name="add-qty">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="addBook">Add Book</button>
      </form>

    </div>
    <div class="col-6 text-center border-left p-5 mt-5">
      <h1 class="display-3">Remove a Book</h1>

      <form method="post" action="validate.php">

        <div class="form-group">
          <label for="rmv-book-title">Book Title</label>
          <input type="text" class="form-control" id="rmv-book-title" name="rmv-book-title" placeholder="Book Title">
        </div>
        <div class="form-row" >
          <div class="form-group col-md-6">
            <label for="rmv-isbn">ISBN</label>
            <input type="text" class="form-control" id="rmv-isbn" name="rmv-isbn" placeholder="ISBN">
          </div>
          <div class="form-group col-md-6">
            <label for="rmv-qty">Quantity</label>
            <input type="number" class="form-control" id="rmv-qty" name="rmv-qty">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="removeBook">Remove Book(s)</button>
      </form>

    </div>

 </article>
