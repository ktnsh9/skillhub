<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'skillhub1');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	//confirming password
	if($_POST['password'] == $_POST['confirmpassword']){

		$name = $mysqli->real_escape_string($_POST['name']);
		$email = $mysqli->real_escape_string($_POST['email']);
		$password = md5($_POST['password']);//md5 hash password security
		$dob = $mysqli->real_escape_string($_POST['dob']);
		$gender = $mysqli->real_escape_string($_POST['gender']);
		$mobile = $mysqli->real_escape_string($_POST['mobile']);
		$address = $mysqli->real_escape_string($_POST['address']);
        
        $sql = "INSERT INTO users(name, email, password, dob, gender, mobile, address)". "VALUES ('$name', '$email', '$password', '$dob', '$gender', '$mobile', '$address')";

        //if query is successful, then redirect to welcome page
        if($mysqli->query($sql)=== true){
        	$_SESSION['message'] = '$name ,You are signed up!';
        	header("location: welcome.php");
        }
        else{
        	$_SESSION['message'] = "Sorry, signup not successful, try again";
        }
	}
}
?> 
