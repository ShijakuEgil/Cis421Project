<?php
/*

@package CIS421 project
@authors Egil Shijaku, ADD YOUR NAMES HERE GUYS

First Page to Our Website (home page)
*/
require("header.php");
      if($connect_check): ?>
      <h1>You are inside the Database and by inside i mean INSIDE!!!!!</h1>
    <?php else: ?>
      <h1>You have been cockbloked son!!!!!!!!!!!</h1>
      <h2>Here is some junk for your ass....<br /><?php echo $junk; ?></h2>
    <?php endif; ?>
<?php require("footer.php"); ?>
