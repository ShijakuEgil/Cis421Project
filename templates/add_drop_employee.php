<?php
/*
    @package CIS421 project
    @author Egil Shijaku, Mighty_j ADD YOUR NAMES HERE GUYS

    forms for adding or droping an employee
*/
 ?>
 <article class="row add-drop-students-wrapper">

    <div class="col-6 text-center border-right p-5 mt-5">

      <h1 class="display-3">Add a New Employee</h1>

      <form method="post" action="validate.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="add-employee-fname">First Name</label>
            <input type="text" class="form-control" id="add-employee-fname" name="add-employee-fname" placeholder="First Name">
          </div>
          <div class="form-group col-md-6">
            <label for="add-employee-lname">Last Name</label>
            <input type="text" class="form-control" id="add-employee-lname" name="add-employee-lname" placeholder="Last Name">
          </div>
        </div>
        <div class="form-row">
         <div class="form-group col-md-6">
           <label for="add-employee-email">Email</label>
           <input type="email" class="form-control" id="add-employee-email" name="add-employee-email" placeholder="Email">
         </div>
         <div class="form-group col-md-6">
           <label for="add-employee-password">Password</label>
           <input type="password" class="form-control" id="add-employee-password" name="add-employee-password" placeholder="Password">
         </div>
       </div>
       <div class="form-group">
         <label for="add-employee-address">Address</label>
         <input type="text" class="form-control" id="add-employee-address" name="add-employee-address" placeholder="1234 Main St">
       </div>
       <div class="form-group">
         <label for="add-empoloyee-address-2">Address 2</label>
         <input type="text" class="form-control" id="add-empoloyee-address-2" name="add-empoloyee-address-2" placeholder="Apartment, studio, or floor">
       </div>
       <div class="form-row">
         <div class="form-group col-md-6">
           <label for="add-employee-city">City</label>
           <input type="text" class="form-control" id="add-employee-city" name="add-employee-city" placeholder="City">
         </div>
         <div class="form-group col-md-4">
           <label for="add-employee-state">State</label>
           <select id="add-employee-state" name="add-employee-state" class="form-control">
             <option selected>Choose...</option>
             <option>MI</option>
             <option>or MI</option>
             <option>also MI</option>
           </select>
         </div>
         <div class="form-group col-md-2">
           <label for="add-employee-zip">Zip</label>
           <input type="text" class="form-control" id="add-employee-zip" name="add-employee-zip" placeholder="Zip Code">
         </div>
       </div>
       <div class="form-row">
         <div class="form-group col-md-8">
           <label for="add-employee-salary">Salary</label>
           <input type="number" class="form-control" id="add-employee-salary" name="add-employee-salary" placeholder="Yearly salary">
         </div>
         <div class="form-group col-md-4">
           <label for="add-employee-type">Salary</label>
           <select class="form-control" id="add-employee-type" name="add-employee-type">
             <option selected>Pick type of employee...</option>
             <option>A</option>
             <option>W</option>
           </select>
         </div>
       </div>
      <button type="submit" class="btn btn-primary" name="add-employee">Add Employee</button>
    </form>

    </div>

    <div class="col-6 text-center border-left p-5 mt-5">
      <h1 class="display-3">Remove an Employee</h1>

      <form method="post" action="validate.php">
        <div class="form-group">
          <label for="rmv-employee-id">Employee ID</label>
          <input type="text" class="form-control" id="rmv-employee-id" name="rmv-employee-id" placeholder="Employee ID">
        </div>
        <button type="submit" class="btn btn-primary" name="remove-employee">Remove an Employee</button>
      </form>
    </div>
 </article>
