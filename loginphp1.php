<?php
session_start();
$_SESSION['message']='';
$mysqli=new mysqli('localhost','root','root','skillhub');

      $username= $mysqli->real_escape_string($_POST['username']);
      $password= $mysqli->real_escape_string($_POST['password']);
      
      $result=mysql_query("select * from login where username='$username' and password='$password'") or die("failed to query database.".mysql_error());
      $row=mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password)
  {
      echo "Login Sucessful!!! Welcome".$row['username'];
  }
else{
    echo "Failed to login!";
  } 
          
?>