<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
 
  <script src="script.js"></script>>
  <meta charset="utf-8">
</head>

<body>

<h1 style="text-align:center">טבלת משתמשים</h1>

    <div id="center">
<table id="table_Users">
<tr>
    <td style="font-size:26px">עיר מגורים</td>
    <td style="font-size:26px">כתובת</td>
    <td style="font-size:26px">שפ משפחה</td>
    <td style="font-size:26px">שם פרטי</td>
    <td style="font-size:26px">ת.ז</td>
</tr>

<?php
$connection=mysqli_connect('localhost','root','') or die('Not connected');
$db=mysqli_select_db($connection,'users')or die('Not connected');

$query="SELECT `UserID`, `FirstName`, `LastName`, `Address`, `City` FROM `users`";
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


</table>
        <div id="container">
            <div id="right"><h3 style="text-align:center">הוספת משתמש</h3>
             <form name="MyForm" action="php_page.php" method="post" onsubmit="return validateForm()"> ת.ז
                <input type="text" name="id">שגם פרטי
                 <input type="text" name="firstname"> שם משפחה
                 <input type="text" name="lastname"> כתובת
                 <input type="text" name="address"> עיר מגורים
                 <input type="text" name="city">
                 <input type="submit" style="margin:25px;">
                 </form>

            </div>
            <div id="cen"><h3 style="text-align:center">מחיקת משתמש</h3>
                <h3 style="text-align:right">הכנס/י את מספר ת.ז של המשתמש שברצונך להסיר</h3>
                <form action="php_delete.php" method="post"> ת.ז
                <input type="text" name="id">
                 <input type="submit" style="margin:25px;">
                 </form>

            </div>
            <div id="left"><h3 style="text-align:center">עדכון משתמש</h3>
            <form action="php_update.php" method="post"> ת.ז
                <input type="text" name="id">שם פרטי
                 <input type="text" name="firstname"> שם משפחה
                 <input type="text" name="lastname"> כתובת
                 <input type="text" name="address"> עיר מגורים
                 <input type="text" name="city">
                 <input type="submit" style="margin:25px;">
                 </form>

            </div>
        </div>
</div>
</body>

</html>