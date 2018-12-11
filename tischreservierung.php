<?php
    $con =mysqli_connect('localhost','test','1234');

    if(!$con){
        echo 'Not connected to server';
    }

    if(!mysqli_select_db($con,'reservation')){
        echo 'not selected to database';
    }  


    $datum= $_POST['datum'];
    $tisch_name= $_POST['tisch_name'];
    $name= $_POST['name'];
    $anzahlguest= $_POST['anzahlguest'];
    
    
    $result=mysqli_query($con, "SELECT * FROM tischreservierung WHERE datum = '$datum' and tisch_name='$tisch_name'");

    if($result->num_rows>0) {
        
        echo 'Der Tisch ist bereits von jemanden reserviert, Bitte wählen Sie einen anderen Tisch oder ein anderes Datum';
        
    }else{
    
    $sql = "INSERT INTO tischreservierung (datum, tisch_name, name, anzahlguest) Values ('$datum', '$tisch_name', '$name', '$anzahlguest')";

        if(!mysqli_query($con,$sql)){
            echo 'Es ist ein Fehler aufgetreten. Bitte versuchen Sie es nochmal';
        }else{
            echo'Ihr Tisch wurde erfolgreich reserviert';
        }

        header("refresh:5; url=index.html");
    }
?>