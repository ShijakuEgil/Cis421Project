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
<?php $late_rentals = outstanding_rentals();
      $k = 1;
      foreach($late_rentals as $rentals):?>
      <tr>
        <th scope="row"><?php echo $k; ?></th>
        <td><?php echo $rentals['first_name']; ?></td>
        <td><?php echo $rentals['last_name']; ?></td>
        <td><?php echo $rentals['title']; ?></td>
        <td><?php echo $rentals['date_due']; ?></td>
      </tr>
<?php $k++; endforeach;?>
     </tbody>
   </table>
 </article>
