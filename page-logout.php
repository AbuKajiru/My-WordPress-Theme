<?php
  session_start();
  require 'php/myfunctions.php';

  if (isset($_GET['logout'])) {
    session_unset();//remove all global variables
    session_destroy();//destroy the session
    header("Location: home");
  }else {
    if (checkSession("yes return") == false) {
      header("Location: home");
    }elseif (checkSession("yes return") == true) {
      header("Location: view-house");
    }
  }
?>
