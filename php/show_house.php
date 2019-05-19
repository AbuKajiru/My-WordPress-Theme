<?php

  require_once 'Dbconnect.php';
  $id = $_SESSION['Username'];
  $query = $DBcon->query("SELECT * FROM site_houses WHERE User='$id'");

?>
