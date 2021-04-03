<?php

$get_id=$_POST['id'];


$connection=mysqli_connect('localhost','root','') or die('Not connected');
$db=mysqli_select_db($connection,'users')or die('Not connected');



$query="DELETE FROM `users` WHERE UserId='".$get_id."'";
mysqli_query($connection,$query);

$query="SELECT FROM `users` WHERE UserId='".$get_id."'";
$res=$connection->query($query);


if(!empty($res) && $res->num_rows > 0){ 
        while($row=$res->fetch_assoc()){
            
            echo "<tr><td>".$row['City']."</td>";
            echo "<td>".$row['Address']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['FirstName']."</td>";         
            echo "<td>".$row['UserID']."</td></tr>";
        }
    }

?>