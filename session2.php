<?php
session_start(); //Ganz wichtig
$link = mysqli_connect("localhost", "root", "", "restaurant");
 
if(!isset($_SESSION['username'])) {
   die("Bitte erst einloggen"); //Mit dieser Methode beenden wir den weiteren Scriptablauf   
}
 
//In $name den Wert der Session speichern
$name = $_SESSION['username'];
 
//Text ausgeben
echo "Du heißt immer noch: $name
<a href=\"logout.php\">Logout</a>";
?>