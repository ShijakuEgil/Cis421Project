<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Will display Employee table with results that are retreived from database query
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
<?php
    // TODO: Database functions are to be called in here so the data can be inserted in the table
?>

<?php
 $employee_info = employee_info();
 $k = 1;
foreach($employee_info as $employee):?>
      <tr>
        <th scope="row"><?php echo $k; ?></th>
        <td><?php echo $employee['first_name']; ?></td>
        <td><?php echo $employee['last_name']; ?></td>
        <td><?php echo $employee['salary']; ?></td>
        <td><?php echo $employee['email']; ?></td>
        <td><?php echo $employee['address']; ?></td>
        <td><?php echo $employee['type']; ?></td>
      </tr>
<?php
$k++;
endforeach;
?>
     </tbody>
   </table>
 </article>
