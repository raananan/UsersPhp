<?php

$get_id=$_POST['id'];
$get_Firstname=$_POST['firstname'];
$get_Lastname=$_POST['lastname'];
$get_address=$_POST['address'];
$get_city=$_POST['city'];

echo $get_id;

$connection=mysqli_connect('localhost','root','') or die('Not connected');
$db=mysqli_select_db($connection,'users')or die('Not connected');

$query="UPDATE `users` SET `UserID`='".$get_id."', `FirstName`='".$get_Firstname."', `LastName`='".$get_Lastname."', `Address`='".$get_address."', `City`='".$get_city."' WHERE `UserID`='".$get_id."'";
mysqli_query($connection,$query);

?>