<?php
include('connectDb.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.btn {
  border: 10px;
  outline: 10px;
  padding: 15px 16px;
  background-color: #f1f1f1;
  cursor: grab;
  font-size: 32px;
}


.active, .btn:hover {
  background-color: #666;
  color: black;
}
body {
  background-image: url('images/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
<body>
 
<div style='margin:80px 20px' id="myDIV">
  <a href="admin_details.php"><button class="btn ">Admin Details</button></a><br><br>
  <a href="admin_employee.php"><button class="btn">Employee</button></a><br><br>
  <a href="admin_user.php"><button class="btn">User</button></a><br><br>
  <a href="admin_login.php"><button class="btn">Logout</button></a>
</div>

</body>
</html>
