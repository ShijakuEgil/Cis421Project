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

      <form method="post" action="<?php //this will have the php file that will do the validation of all the info added ?>">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="book-title-input">Book Title</label>
            <input type="text" class="form-control" id="book-title-input" placeholder="Book Title">
          </div>
          <div class="form-group col-md-6">
            <label for="isbn-input">ISBN</label>
            <input type="text" class="form-control" id="isbn-input" placeholder="ISBN">
          </div>
          <div class="form-group col-md-6">
            <label for="author-fname-input">Author First Name</label>
            <input type="text" class="form-control" id="author-fname-input" placeholder="First Name">
          </div>
          <div class="form-group col-md-6">
            <label for="author-lname-input">Author Last Name</label>
            <input type="text" class="form-control" id="author-lname-input" placeholder="Last Name">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="pudlisher-input">Publisher</label>
            <input type="text" class="form-control" id="publisher-input" placeholder="Publisher">
          </div>
          <div class="form-group col-md-4">
            <label for="date-input">Date Published</label>
            <input type="date" id="date-input" class="form-control">
          </div>
          <div class="form-group col-md-2">
            <label for="qty-input">Quantity</label>
            <input type="number" class="form-control" id="qty-input">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="addBook">Add Book</button>
      </form>

    </div>
    <div class="col-6 text-center border-left p-5 mt-5">
      <h1 class="display-3">Remove a Book</h1>

      <form method="post" action="<?php //this will have the php file that will do the validation of all the info added ?>">

        <div class="form-group">
          <label for="book-title-input">Book Title</label>
          <input type="text" class="form-control" id="book-title-input" placeholder="Book Title">
        </div>
        <div class="form-row" >
          <div class="form-group col-md-6">
            <label for="isbn-input">ISBN</label>
            <input type="text" class="form-control" id="isbn-input" placeholder="ISBN">
          </div>
          <div class="form-group col-md-6">
            <label for="qty-input">Quantity</label>
            <input type="number" class="form-control" id="qty-input">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="removeBook">Remove Book(s)</button>
      </form>

    </div>

 </article>
