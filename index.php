<?php
/*
@package CIS421 project
@authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

First Page to Our Website (home page)
*/
?>
<?php include("header.php");?>
<form class="form-signin" method="post" action="validate.php">

  <div class="tittle-wrapper text-success">
      <h1 id="welcomePageTitle" class="h1 text-info text-center">University Library</h1>
  </div>
   <h1 class="h3 mb-3 font-weight-normal text-info text-center">Please sign in</h1>

  <label for="email" class="sr-only">Email address</label>
  <input type="email" id="email" class="form-control" name="email" placeholder="Email address" required>

  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>

  <button class="btn btn-lg btn-info btn-block mt-2" type="submit" name="student">Student Sign in</button>
  <button class="btn btn-lg btn-info btn-block my-2" type="submit" name="admin">Administrator Sign in</button>
</form>
<?php include("footer.php"); ?>
