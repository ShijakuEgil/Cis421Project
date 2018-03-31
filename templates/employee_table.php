<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  will display Employee table with results that are retreived from database query
*/
 ?>

<article class="text-center p-5">
  <h1 class="display-3">Library Employees</h1>
   <table class="table mt-5">
     <thead class="thead-dark">
       <tr>
         <th scope="col">#</th>
         <th scope="col">First</th>
         <th scope="col">Last</th>
         <th scope="col">Salary</th>
         <th scope="col">Email</th>
         <th scope="col">Address</th>
         <th scope="col">Student</th>
       </tr>
     </thead>
     <tbody>
<?php // TODO: Database functions are to be called in here so the data can be inserted in the table ?>
       <tr>
         <th scope="row">1</th>
         <td>Mark</td>
         <td>Otto</td>
         <td>30,000</td>
         <td>Mark@dumbass.ohyeah</td>
         <td>First door to the right!!</td>
         <td>Yes</td>
       </tr>
       <tr>
         <th scope="row">2</th>
         <td>Jacob</td>
         <td>Thornton</td>
         <td>30,000</td>
         <td>Jacob@douche.bag</td>
         <td>Mark's neighboor</td>
         <td>No</td>
       </tr>
       <tr>
         <th scope="row">3</th>
         <td>Larry</td>
         <td>Who</td>
         <td>30,000</td>
         <td>who@where.what</td>
         <td>Mark's other neighboor</td>
         <td>No</td>
       </tr>
     </tbody>
   </table>
 </article>
