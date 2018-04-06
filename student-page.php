<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Student page
*/
?>
<?php include('header.php');
  require_once('functionsDb/db_query.php');
  session_start();
  include('templates/navbar.php');
  ?>

<main class="mx-5">
  <ul class="nav nav-tabs nav-justified mt-5" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active show" id="Books Rented" data-toggle="tab" href="#curr_rentals" role="tab" aria-controls="curr_rentals" aria-selected="true">
        Current Rentals
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="Searching" data-toggle="tab" href="#searching" role="tab" aria-controls="searching" aria-selected="false">
        Search
      </a>
    </li>
</ul>

<div class="tab-content" id="myTabContent">

    <div class="tab-pane active" id="curr_rentals" role="tabpanel" aria-labelledby="curr_rentals-tab">
      <?php include('templates/rented_table.php');?>
    </div>

    <div class="tab-pane" id="searching" role="tabpanel" aria-labelledby="searching-tab">
      <?php include('templates/searching_table.php');?>
    </div>

</div>
</main>
<?php include('footer.php');?>
