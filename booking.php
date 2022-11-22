<?php
//obtain the information
$data=$_POST;

//create a connection
$con= mysqli_connect('localhost', 'root','','car_hiring');

//insert the information to the database booking table
$a=$data['Email_address'];
$b=$data['telephone_number'];
$c=$data['firstName'];
$d=$data['idNumber'];
$e=$data['pickUpLocation'];
$f=$data['dropOffLocation'];
$g =date("m-d-y", strtotime($data['pickDate']));
$h=$data['pickUpHour'];
$i=$data['pickUpMinute'];
$j=$data['hourNumber'];
$k=$data['daysNumber'];
$l=$data['chauffer'];
$m=$data['capacity'];

$insert= "INSERT INTO booking_table (Email, phone_number,first_name, id_number, pick_up, drop_off, pick_up_date, pick_up_time, pick_up_minute, hiring_hours, hiring_days,need_chauffer, capacity)VALUES ('$a', '$b', '$c','$d', '$e', '$f', '$g', '$h', '$i', '$j', $k, '$l', '$m')";

//execute the php
$a=mysqli_query($con, $insert);
if (!$a){
echo mysqli_error($con);
}

header('location: booked.html');
?>
