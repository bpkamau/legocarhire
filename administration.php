<?php
//connect to the car_hiring database
$con = mysqli_connect('localhost','root','','car_hiring');

//select data from the customer booking table
$sql ="SELECT booking_number, Email,phone_number, pick_up,drop_off, pick_up_date, pick_up_time, pick_up_minute,hiring_hours, hiring_days,need_chauffer, capacity,  ((hiring_hours*300)+(hiring_days*2000)) AS hire_cost FROM booking_table";

$result=mysqli_query($con,$sql);
echo "<table  border='1'>";
    echo "<h3>".'CUSTOMER BOOKING'."</h3>";
    echo "<tr>";
    echo "<th>" . 'Number' . "</th>";
    echo "<th>" . 'Email' . "</th>";
    echo "<th>" . 'Phone number' . "</th>";
    echo "<th>" . 'pick up location' . "</th>";
    echo "<th>" . 'drop off location' . "</th>";
    echo "<th>" . 'pick up date'. "</th>";
    echo "<th>" . 'pick up time'. "</th>";
    echo "<th>" . 'hiring hours'. "</th>";
    echo "<th>" . 'hiring days'. "</th>";
    echo "<th>" . 'chauffer'. "</th>";
    echo "<th>" . 'Capacity'. "</th>";
    echo "<th>" . 'cost of hire'. "</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
    
    echo "<tr>";
    echo "<td>" . $row['booking_number'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "<td>" . $row['pick_up'] . "</td>";
    echo "<td>" . $row['drop_off'] . "</td>";
    echo "<td>" . $row['pick_up_date'] . "</td>";
    echo "<td>" . $row['pick_up_time'] .':'.$row['pick_up_minute'] ."</td>";
    echo "<td>" . $row['hiring_hours'] . "</td>";
    echo "<td>" . $row['hiring_days'] . "</td>";
    echo "<td>" . $row['need_chauffer']. "</td>";
    echo "<td>" . $row['capacity']. "</td>";
    echo "<td>" . $row['hire_cost']. "</td>";
echo "</tr>";
}
echo "</table>";
?>

<?php
//connect to the car_hiring database
$con = mysqli_connect('localhost','root','','car_hiring');

//select data from the customer booking table
$sql ="SELECT booking_number, first_name, Email, phone_number,gender FROM customer_information";

$result=mysqli_query($con,$sql);
echo "<table  border='1'>";
    echo "<h3>".'SIGNED UP CUSTOMERS'."</h3>";
    echo "<tr>";
    echo "<th>" . 'Number' . "</th>";
    echo "<th>" . 'First name' . "</th>";
    echo "<th>" . 'Email' . "</th>";
    echo "<th>" . 'phone number' . "</th>";
    echo "<th>" . 'Gender' . "</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
    
    echo "<tr>";
    echo "<td>" . $row['booking_number'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['Email'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
<style>
    
table{
    border-collapse:collapse;
    float: center; 
    width:70%;
    text-align: center;
    margin-left: 15%;
}
h3{
    text-align: center;
}
th{
    text-align: center; 
}
</style>
