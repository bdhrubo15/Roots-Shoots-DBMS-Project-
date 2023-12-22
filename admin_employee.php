<?php
include_once "connectDb.php";
?>


<html>
<head>
<title>Admin</title>
<style>
   body {
  background-image: url('images/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
button{
  height: 40px;
  width: 120px;
  background-color: green;
  color:white;
  margin: 20px;
}
a{
  text-decoration: none;
  color: white;
}
table, th, td {
    background-color:white;
    border: 1px solid black;
}

</style>
<body>
<center>
<form method="post" enctype="multipart/form-data">
<table width="50%" border="2" cellpadding="5" cellspacing="5">
<thead>
<tr>
<th>Name</th>
<th>E-mail</th>
<th>Phone Number</th>
<th>Salary</th>
<th>Join Date</th>
<th>Added By</th>

</tr>
</thead>

<?php
include_once "connectDb.php";

$sql = "SELECT * from employee AS e
RIGHT JOIN admin AS a
ON e.admin_email=a.admin_email";

$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["e_first_name"]. " ".$row['e_last_name'] ?> </td>
<td> <?php echo $row["employee_email"] ?> </td>
<td> <?php echo $row["phone_number"] ?> </td>
<td> <?php echo $row["salary"] ?> </td>
<td> <?php echo $row["join_date"] ?> </td>
<td> <?php echo $row["first_name"]. " ".$row['last_name'] ?> </td>

</tr>

<?php
}
?>
<div>
  <button><a href="admin_adding_employee.php">Add Employee</a></button>
  <button><a href="admin_dashboard.php">Go Back</a></button>
  <button><a href="admin_login.php">LogOut</a></button>
</div>
</table>
</form>
</center>
</body>
</head>
</html>