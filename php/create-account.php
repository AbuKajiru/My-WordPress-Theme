<?php
  session_start();
  if (isset($_SESSION['userSession'])!="")
  {
    header("Location: home");
  }
  require_once 'Dbconnect.php';

  $_SESSION['message'] = '';

  if(isset($_POST['submit']))
  {

        $fname = strip_tags($_POST['fname']);
        $lname = strip_tags($_POST['lname']);
        $uname = strip_tags($_POST['username']);
        $pass = strip_tags($_POST['password']);

       $fname = $DBcon->real_escape_string($fname);
       $lname = $DBcon->real_escape_string($lname);
       $uname = $DBcon->real_escape_string($uname);
       $pass = $DBcon->real_escape_string($pass);

       $hashed_password = password_hash($pass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

       $check_uname = $DBcon->query("SELECT Username FROM site_users WHERE Username ='$uname'");
       $count_1=$check_uname->num_rows;

       if($count_1==0){

            $query = "INSERT INTO site_users (First_Name, Last_Name, Username, Password) VALUES('$fname','$lname','$uname','$hashed_password')";

            if(!mysqli_query($DBcon,$query))
              {
                $_SESSION['message'] = " No Data was saved/added due to an interrupted connection to server";
              }
              else {
                $_SESSION['message'] = " Congratulations... New user added successfully";
              }
         }
       else
       {
          $_SESSION['message'] = "A user with the same Username already exists...";
       }

       $DBcon->close();
  }

  header("Location: home");
?>
