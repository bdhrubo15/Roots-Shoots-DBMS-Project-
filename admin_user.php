<?php
include_once "connectDb.php";
?>


<html>
<head>
<title>Admin</title>
<style>
    body{
    background-image: url('images/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

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
<th>User Name</th>
<th>Join Date</th>
<th>Gender</th>
<th>earn_point</th>

</tr>
</thead>

<?php
include_once "connectDb.php";

$sql = "SELECT * 
FROM users
ORDER BY earn_point DESC";

$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["first_name"]. " ".$row['last_name'] ?> </td>
<td> <?php echo $row["join_date"] ?> </td>
<td> <?php echo $row["gender"] ?> </td>
<td> <?php echo $row["earn_point"] ?> </td>

</tr>
<?php
}
?>
</table>
</form>
</center>
</body>
</head>
</html>

