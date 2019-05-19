<?php
  session_start();
  require_once 'Dbconnect.php';

  if (isset($_SESSION['userSession'])!="") {
   header("Location: view-house");
   exit;
  }

  if (isset($_POST['submit'])) {

   $uname = strip_tags($_POST['username']);
   $password = strip_tags($_POST['password']);

   $uname = $DBcon->real_escape_string($uname);
   $password = $DBcon->real_escape_string($password);

   $query = $DBcon->query("SELECT ID, Username, Password FROM site_users WHERE Username='$uname'");
   $row=$query->fetch_array();
   $count = $query->num_rows; // if email/password are correct returns must be 1 row

   $hashed_password = password_hash($password, PASSWORD_DEFAULT);

   if (password_verify($password, $row['Password'])) {
    $_SESSION['userSession'] = $row['ID'];
    $_SESSION['alert'] = "";
    $_SESSION['Username'] = $row['Username'];
    header("Location: view-house");
  }else {
    header("Location: home");
    $_SESSION['alert'] = "Username or Password Do Not Match!";
  }

   $DBcon->close();
  }
?>
