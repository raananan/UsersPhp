<?php

$get_id=$_POST['id'];
$get_Firstname=$_POST['firstname'];
$get_Lastname=$_POST['lastname'];
$get_address=$_POST['address'];
$get_city=$_POST['city'];



$connection=mysqli_connect('localhost','root','') or die('Not connected');
$db=mysqli_select_db($connection,'users')or die('Not connected');


$query="INSERT INTO `users`(`UserID`, `FirstName`, `LastName`, `Address`, `City`) VALUES ('".$get_id."','".$get_Firstname."','".$get_Lastname."','".$get_address."','".$get_city."')";
mysqli_query($connection,$query);

if ($connection->query($query) === TRUE) {
  echo "חלק המפרטים שהכנסת לא נכונים";
} else {
  echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();
?>