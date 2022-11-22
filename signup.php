<?php

//receive data from the html form
$data=$_POST;

//create a connection 

$con= mysqli_connect('localhost', 'root','','car_hiring');

//insert the record from the form to a database
 $a=$data['FirstName'];
 $b=$data['LastName'];
 $c=$data['Email'];
$d=$data['PhoneNumber'];
$f=$data['gender'];

 $insert= "INSERT INTO customer_information (first_name, last_name,Email, phone_number, gender)
VALUES ('$a', '$b', '$c','$d','$f')";

mysqli_query($con, $insert);
// if(!$ok){
//   echo mysqli_error($con);
//  } //this is a to see where the error is

//starts a session that redirects the user to the home page

session_start();
 
 header('location: homepage.html');

?>
