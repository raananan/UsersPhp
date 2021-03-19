<?php

$get_id=$_POST['id'];


$connection=mysqli_connect('localhost','root','') or die('Not connected');
$db=mysqli_select_db($connection,'users')or die('Not connected');

$query="DELETE FROM `users` WHERE UserId='".$get_id."'";
mysqli_query($connection,$query);


?>