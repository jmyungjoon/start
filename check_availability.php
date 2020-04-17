<?php
require_once("DBController.php");
$db_handle = new DBController();


if(!empty($_POST["username"])) {
  $query = "SELECT * FROM user WHERE name='" . $_POST["username"] . "'";
  $user_count = $db_handle->numRows($query);
  // echo $user_count;
  if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}
?>