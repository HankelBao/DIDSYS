<?php
/*
 *connect to the database
 */
$connection = mysqli_connect("localhost", "root", "201028");
if (!$connection)
  die("Could not connect to the databse, please contact Hankel(c)");

/*
 *select my database
 */
$database = mysqli_select_db($connection,'did');
?>
