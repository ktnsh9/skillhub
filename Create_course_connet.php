<?php
session_start();
$_SESSION['message']='';
$mysqli=new mysqli('localhost','root','root','skillhub');

if($_SERVER['REQUEST_METHOD']=='POST')
{
      $choosen_course= $mysqli->real_escape_string($_POST['choosen_course']);
      $coursename= $mysqli->real_escape_string($_POST['coursename']);
      $coursedesc= $mysqli->real_escape_string($_POST['coursedesc']);
      $courseadd= $mysqli->real_escape_string($_POST['courseadd']);
      $coursefee= $mysqli->real_escape_string($_POST['coursefee']);
      $coursefeedur= $mysqli->real_escape_string($_POST['coursefeedur']);
      $coursesize= $mysqli->real_escape_string($_POST['coursesize']);
      $courseduration= $mysqli->real_escape_string($_POST['courseduration']);


      if($choosen_course=="Art"){
        $choosen_course=1;
      }
      elif($choosen_course=="Music, Singing, Dance"){
        $choosen_course=2;
      }
      elif($choosen_course=="Engineering Academics"){
        $choosen_course=3;
      }
      elif($choosen_course=="Computer Science"){
        $choosen_course=4;
      }

      
      $sql="INSERT into create_course (choosen_course, coursename, coursedesc, courseadd, coursefee, coursefeedur, coursesize, courseduration )"."VALUES('$choosen_course','$coursename','$coursedesc','$courseadd', '$coursefee', '$coursefeedur', '$coursesize', '$courseduration')";

           if($mysqli->query($sql)=== true){
           $_SESSION['message'] = echo $username .'You are signed up!';
           header("location: welcome.php");


}
?>