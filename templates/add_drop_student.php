<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  will display forms that will add or drop students
*/
 ?>

<article class="row add-drop-students-wrapper">

   <div class="col-6 text-center border-right p-5 mt-5">

     <h1 class="display-3">Add a New Student</h1>

     <form method="post" action="<?php //this will have the php file that will do the validation of all the info added ?>">
       <div class="form-row">
         <div class="form-group col-md-6">
           <label for="student-fname-input">First Name</label>
           <input type="text" class="form-control" id="student-fname-input" placeholder="First Name">
         </div>
         <div class="form-group col-md-6">
           <label for="student-lname-input">Last Name</label>
           <input type="text" class="form-control" id="student-lname-input" placeholder="Last Name">
         </div>
       </div>
       <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity" placeholder="City">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>MI</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip" placeholder="Zip Code">
        </div>
      </div>
       <button type="submit" class="btn btn-primary" name="addStudent">Add Student</button>
     </form>

   </div>
   <div class="col-6 text-center border-left p-5 mt-5">
     <h1 class="display-3">Remove a Student</h1>

     <form method="post" action="<?php //this will have the php file that will do the validation of all the info added ?>">

       <div class="form-group">
         <label for="student-id-input">Student ID</label>
         <input type="text" class="form-control" id="book-title-input" placeholder="Student ID">
       </div>
       <button type="submit" class="btn btn-primary" name="removeStudent">Remove Student</button>
     </form>

   </div>

</article>
