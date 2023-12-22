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
tr{
background-color: white;
}

</style>
<body>
<center>
<form method="post" enctype="multipart/form-data">
<table width="50%" border="2" cellpadding="5" cellspacing="5">
<thead>
<tr>
<th>User Name</th>
<th>Edit</th>

</tr>
</thead>

<?php

$sql = "SELECT * from users";
$result = mysqli_query($conn,$sql);

while($row= mysqli_fetch_array($result)){
?>
<tr>

<td> <?php echo $row["first_name"]." ".$row["last_name"] ?> </td>


<td>
    
<a href= "admin_user_edit.php?>
&& first_name=<?php echo $row['first_name'];?>
&& last_name=<?php echo $row['last_name'];?>
&& town=<?php echo $row['town'];?>
&& zip_code=<?php echo $row['zip_code'];?>
&& gender=<?php echo $row['gender'];?>
">Edit</a>

</td>


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