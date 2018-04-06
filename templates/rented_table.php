<?php
/*

authors: Earle Braley
This is for student information with results from
data base queries
*/


?>

<article class="text-center p-50">
  <h1 class="display-3">Books Rented</h1>
    <table class="table mt-5">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">book_id</th>
          <th scope="col">title</th>
          <th scope="col">author</th>
          <th scope="col">date_rented</th>
          <th scope="col">due_date</th>
        </tr>
      </thead>
      <tbody>
<?php
$rented_books = curr_books_rented( $_SESSION['user'] );
$k = 1;
foreach($rented_books as $rented):?>
       <tr>
         <th scope="row"><?php echo $k; ?></th>
         <td><?php echo $rented['bookid']; ?></td>
         <td><?php echo $rented['title']; ?></td>
         <td><?php echo $rented['author_first_name'].' '.$rented['author_last_name']; ?></td>
         <td><?php echo $rented['date_rented']; ?></td>
         <td><?php echo $rented['date_due']; ?></td>
       </tr>
<?php
$k++;
endforeach;
?>
      </tbody>
    </table>
</article>
