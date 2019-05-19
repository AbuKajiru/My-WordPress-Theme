<?php

  $DBhost = "localhost";//store hostname
  $DBuser = "Abubakar";//store user database name
  $DBpass = "j9562ilSwnXsx77L";//store password
  $DBname = "abu_wp";//store database name

  $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);//create a connection

  if ($DBcon->connect_errno)//check if connection exists?!!
    {
      die("ERROR : -> ".$DBcon->connect_error);//print error
    }//endif
?>
