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

     <form method="post" action="validate.php">
       <div class="form-row">
         <div class="form-group col-md-6">
           <label for="student-fname">First Name</label>
           <input type="text" class="form-control" id="student-fname" name="student-fname" placeholder="First Name">
         </div>
         <div class="form-group col-md-6">
           <label for="student-lname">Last Name</label>
           <input type="text" class="form-control" id="student-lname" name="student-lname" placeholder="Last Name">
         </div>
       </div>
       <div class="form-row">
        <div class="form-group col-md-6">
          <label for="student-email">Email</label>
          <input type="email" class="form-control" id="student-email" name="student-email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="student-password">Password</label>
          <input type="password" class="form-control" id="student-password" name=student-password placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <label for="student-address">Address</label>
        <input type="text" class="form-control" id="student-address" name="student-address" placeholder="1234 Main St">
      </div>
      <div class="form-group">
        <label for="student-address-2">Address 2</label>
        <input type="text" class="form-control" id="student-address-2" name="student-address-2" placeholder="Apartment, studio, or floor">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="student-address-city">City</label>
          <input type="text" class="form-control" id="student-address-city" name="student-address-city" placeholder="City">
        </div>
        <div class="form-group col-md-4">
          <label for="student-address-state">State</label>
          <select id="student-address-state" name="student-address-state" class="form-control">
            <option selected>Choose...</option>
            <option>MI</option>
            <option>or MI</option>
            <option>also MI</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="student-address-zip">Zip</label>
          <input type="text" class="form-control" id="student-address-zip" name="student-address-zip" placeholder="Zip Code">
        </div>
      </div>
       <button type="submit" class="btn btn-primary" name="add-student">Add Student</button>
     </form>

   </div>

   <div class="col-6 text-center border-left p-5 mt-5">
     <h1 class="display-3">Remove a Student</h1>

     <form method="post" action="validate.php">
       <div class="form-group">
         <label for="rmv-student-id">Student ID</label>
         <input type="text" class="form-control" id="rmv-student-id" name="rmv-student-id" placeholder="Student ID">
       </div>
       <button type="submit" class="btn btn-primary" name="remove-student">Remove Student</button>
     </form>

   </div>

</article>
