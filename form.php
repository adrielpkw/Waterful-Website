<?php

$servername="localhost";
$username="root";
$password="peh181922";
$database="contactform";

$connection=mysqli_connect($servername,$username,$password,$database);

$name=$_POST['name'];
$country=$_POST['country'];
$email=$_POST['email'];
$purpose=$_POST['purpose'];


$insert="INSERT INTO contactdetails VALUES('','$name', '$country', '$email', '$purpose')";

$send=mysqli_query($connection,$insert);

    if ($send) {
        header('Location: contactreceived.html');
    }
    else{
        header('Location: failedtoreceive.html');
    }


?>