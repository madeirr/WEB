<?php
$link = mysqli_connect("localhost", "root", "", "restaurant");
session_start(); //Nicht vergessen
$_SESSION['username']=null;


$username=$_POST['username'];
$password=$_POST['password'];



$result = $link->query("SELECT * FROM LOGIN_MITARBEITER WHERE password='$password' AND username= '$username';");



if($result->num_rows == 1){
	$_SESSION['username'] = $_POST['email'];
	header("refresh:3; url=Mitarbeiter_Start.html");
}else{
	echo "bitte versuchen Sie es noch einmal";
	header("refresh:20; url=Login_Gast.html");
} 
 

 
?>
