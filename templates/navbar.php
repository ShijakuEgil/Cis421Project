<?php
/*
  @package CIS421 project
  @authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

  Navbar
*/
?>
<header>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand h3 col-sm-3 col-md-2 mr-0" href="#"><i class="fas fa-book fa-1x"></i>  University Library</a>
    <ul class="nav navbar-nav d-inline-block px-3">
      <li class="nav-item d-inline-flex text-nowrap my-auto">
        <p class="h1 text-light mr-5 "><?php echo $_SESSION['name']; ?></p>
        <a class="nav-link h3" href="logout.php">Sign out</a>
      </li>
    </ul>
  </nav>
</header>
