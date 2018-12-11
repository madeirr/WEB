<?php
$link = mysqli_connect("localhost", "root", "", "restaurant");

if(!$link) {
	echo "Connection not successful";
}
if (!mysqli_select_db($link, "restaurant")) {
	echo "Database not selected";
}


$vorname=$_POST["vorname"];
$nachname=$_POST["nachname"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql = "INSERT INTO LOGIN_DATEN (email,vorname,nachname,password) VALUES ('$email','$vorname','$nachname','$password');";

if(!mysqli_query($link, $sql)){
	echo "Query not done";
	echo $sql;
}
else{
	echo "Query done!";
}

header("refresh:2; url=index.html");


mysqli_close($link)
;?>

