<?php
// search page for the student
// Author: Earle Braley

?>

<article class="text-center p-50">
  <h1 class="display-3">Search</h1>

  <form method="post" action="validate.php">
    <div class="form-group">
      <label for="searchBar">Search</label>
      <input type="search" class="form-control" id="searchBar" aria-describedby="searchFunction"
      placeholder="Search">
      <small id="searchFunction" class="form-text text-muted">Enter search here</small>
    </div>
    <button type="Search" class="btn btn-primary">Search</button>
  </form>
    <!-- <table class="mt-5">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Library Number</th>
          <th scope="col">ISBN</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Publisher</th>
        </tr>
      </thead>
      <tbody> -->

<?php
          // TODO: add functions for database searches
?>

<?php
        // PRINT OUTPUT FROM QUEREIES
?>
    <!-- </tbody> -->
  <!-- </table> -->
</article>
