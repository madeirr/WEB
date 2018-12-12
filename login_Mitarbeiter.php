<?php
$link = mysqli_connect("localhost", "root", "", "restaurant");
session_start(); //Nicht vergessen
$_SESSION['username']=null;


$email=$_POST['email'];
$password=$_POST['password'];



$result = $link->query("SELECT * FROM LOGIN_DATEN WHERE password='$password' AND email= '$email';");



if($result->num_rows == 1){
	$_SESSION['username'] = $_POST['email'];
	header("refresh:3; url=Mitarbeiter_Start.html");
}else{
	echo "bitte versuchen Sie es noch einmal";
	header("refresh:20; url=Login_Gast.html");
} 
 

 
?>