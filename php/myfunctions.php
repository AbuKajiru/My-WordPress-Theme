<?php
  function checkSession($myValue = "no return"){
    if ($myValue =="yes return") {
      if ($_SESSION['userSession']=="") {
        return false;
      }else {
        return true;
      }
    }elseif ($myValue == "no return") {
      if ($_SESSION['userSession']=="") {
        header("Location: home");
      }
    }
  }
?>
