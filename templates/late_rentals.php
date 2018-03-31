<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Table with all the late rentals will display
*/
 ?>

<article class="text-center p-5">
  <h1 class="display-3 text-center">Past Due Rentals</h1>
   <table class="table mt-5">
     <thead class="thead-dark">
       <tr>
         <th scope="col">#</th>
         <th scope="col">Student First Name</th>
         <th scope="col">Student Last Name</th>
         <th scope="col">Book Title</th>
         <th scope="col">Days Late</th>
       </tr>
     </thead>
     <tbody>
<?php // TODO: Database functions are to be called in here so the data can be inserted in the table ?>
       <tr>
         <th scope="row">1</th>
         <td>Mark</td>
         <td>Otto</td>
         <td>Book title</td>
         <td>1</td>
       </tr>
       <tr>
         <th scope="row">2</th>
         <td>Jacob</td>
         <td>Thornton</td>
         <td>Book Title</td>
         <td>2</td>
       </tr>
       <tr>
         <th scope="row">3</th>
         <td>Larry</td>
         <td>Who</td>
         <td>Book Title</td>
         <td>3</td>
       </tr>
     </tbody>
   </table>
 </article>
