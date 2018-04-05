<?php
// search page for the student
// Author: Earle Braley

?>

<article class="text-center p-50">
  <h1 class="display-3">Search</h1>
    <table class="mt-5">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Library Number</th>
          <th scope="col">ISBN</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Publlisher</th>
        </tr>
      </thead>
      <tbody>
<?php
          // TODO: add functions for database searches
?>

<?php
$search_results = search_book();
$k =1;
foreach($search_results as $search):?>
  <tr>
    <th scope="row"><?php echo $k; ?></th>
    <td><?php echo $search['Library Number']?></td>
    <td><?php echo $search['ISBN']?></td>
    <td><?php echo $search['Title']?></td>
    <td><?php echo $search['Author']?></td>
    <td><?php echo $search['Publisher']?></td>
  </tr>
?>
