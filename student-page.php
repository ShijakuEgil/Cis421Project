<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Student page
*/
?>
<?php include('header.php');
  require_once('functionsDb/db_query.php');
  session_start();?>
  <header>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><i class="fas fa-book"></i> University Library</a>
      <ul class="nav navbar-nav d-inline-block px-3">
        <li class="nav-item d-inline-flex textnowrap mx-3 my-auto">
          <p class="nav-link"><?php echo 'Students Name Here'?></p>
        </li>
        <li class="nav-item d-inline-flex textnowrap my-auto">
          <a class="nav-link" href='#'> Account Info </a>
        </li>
        <li class="nav-item d-inline-flex text-nowrap my-auto">
          <a class="nav-link" href='#'>Sign out</a>
        </li>
      </ul>
    </nav>
</header>
<main class="mx-5">
  <?php include('templates/Student_table.php');?>

<?php include('footer.php');?>
