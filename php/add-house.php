<?php
  session_start();
  if (isset($_SESSION['userSession'])!="")
  {
    header("Location: add-house");
  }
  require_once 'Dbconnect.php';

  $_SESSION['message'] = '';

  if(isset($_POST['submit']))
  {

        $name = strip_tags($_POST['prop-name']);
        $location = strip_tags($_POST['location']);
        $category = strip_tags($_POST['category']);

       $name = $DBcon->real_escape_string($name);
       $location = $DBcon->real_escape_string($location);
       $category = $DBcon->real_escape_string($category);

       $check_uname = $DBcon->query("SELECT Name FROM site_houses WHERE Name ='$name'");
       $count_1=$check_uname->num_rows;

       if($count_1==0){
            $myid = $_SESSION['Username'];
            $query = "INSERT INTO site_houses (Name, Area, Category, User) VALUES('$name','$location','$category', '$myid')";

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

  header("Location: view-house");
?>
