<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="script.js"></script>
  <meta charset="utf-8">
</head>

<body>
<div class="dropdown" style="float:right;margin-right:15px;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">ניהול שירות
    <span class="caret"></span></button>
    <ul class="dropdown-menu dropdown-menu-right">
      <li><a href="#">הצגת משתמשים</a></li>
      <li><a href="index_adduser.html">הוספת משתמש</a></li>
      <li><a href="index_Delete_User.html">מחיקת משתמש</a></li>
      <li><a href="index_Update_User.html">עדכון משתמש</a></li>
    </ul>
  </div>
<h1 style="text-align:center">טבלת משתמשים</h1>

    <div id="center">
 <table class="table table-striped">
<tr>
    <td style="font-size:26px">עיר מגורים</td>
    <td style="font-size:26px">כתובת</td>
    <td style="font-size:26px">שם משפחה</td>
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
        <!--
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
        </div>-->
</div>
</body>

</html>