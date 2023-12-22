<?php
include('connectDb.php');

$sql ="SELECT * FROM admin";
$result = mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_details.css">
    <title>Document</title>
</head>
<style>
    body {
  background-image: url('images/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
button{
    background-color: green;
    height: 36px;
    width:150px;
    color: white;
}
table, th, td {
    background-color:white;
    border: 1px solid black;
}
</style>
<body>
		
		<div class="login">
        <h2><?php 
    if ($result->num_rows > 0) {
        echo "<table><tr><th>Phone Number</th><th>Name</th><th>City</th><th>Zip Code</th><th>Gender</th><th>E-mail</th></tr>";
    
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["phone_number"]. "</td><td>" . $row["first_name"]. " " . $row["last_name"].
             "</td><td>" . $row["city"]. "</td><td>" . $row["zip_code"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["admin_email"]. "</td></tr>";
        }
        echo "</table>";
    } 
    else {
        echo "0 results";
    }

    ?></h2>

    <br>
            <a href="admin_dashboard.php"><button>Go Back</button></a>
            <a href="admin_employee.php"><button>Admin's Employee</button></a>
            <a href="super_admin_login.php"><button>Update/Remove</button></a>
            <a href="admin_registration.php"><button>Add Admin</button></a><br><br>
            <a href="admin_login.php"><button>Logout</button></a>
            
        </div>
        




</body>
</html>