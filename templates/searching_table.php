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
    <button type="submit" name="Search" id="Search" class="btn btn-primary">Search</button>
  </form>
  <div class="search-table-wrapper container-fluid no-gutters text-center">

  </div>

</article>
