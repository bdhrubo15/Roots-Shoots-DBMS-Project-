<?php
include("connectDb.php");

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$number = $_POST['phone_number'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$zip = $_POST['zip_code'];
$mail = $_POST['admin_email'];
$password = $_POST['admin_password'];
$amount = $_POST['investment_amount'];

if(!empty($first_name) && !empty($last_name) && !empty($number) && !empty($gender) && !empty($city)
 && !empty($zip) && !empty($mail) && !empty($password) && !empty($amount))
{

  $sql = "INSERT into admin(first_name,last_name,phone_number,gender,city,zip_code,admin_email,admin_password,investment_amount) 
          values('$first_name','$last_name','$number','$gender','$city','$zip','$mail','$password','$amount')";

  $result = mysqli_query($conn,$sql);

if($result){
  header("Location:admin_details.php");
  die;
}
else{
  echo '<script >alert("Warning!! Unable to Update Information")</script>';
}
}

else
{
   echo '<script >alert("Warning!! Unable to Update Information")</script>';
}
}
?>


<!doctype html>
<html>
<head>
</head>
<body>
<style>
body {
  background-image: url('images/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

	<style type="text/css">
#text{
height: 25px;
border-radius: 5px;
margin:6px;
padding:16px;
border:solid thin #aaa;
width: 100%;
}
#button{
padding :10px;
width: 100px;
color: white;
background-color: #397967;
border: none;
}
#box{

margin: auto;
width: 300px;
padding : 80px;
}

.btn {
  border: 10px;
  outline: 10px;
  padding: 5px 5px;
  background-color: #397967;
  cursor: grab;
  font-size: 24px;
}


.active, .btn:hover {
  background-color: #666;
  color: green;
}
.inputs{
  padding: 20px;
}
	</style>

<div align="center" id="box">
    <form method="post">
      
            <h1 style="front-size: 80px; margin: 10px;color:green;">Adding New Admin</h1>
            
            <input id="text" type="text" placeholder="First Name" name="first_name"><br>
            <input id="text" type="text" placeholder="Last Name" name="last_name"><br>
            <input id="text" type="text" placeholder="Phone Number" name="phone_number"><br>
            <input id="text" type="text" placeholder="City" name="city"><br>
            <input id="text" type="number" placeholder="Zip Code" name="zip_code"><br>
            <input id="text" type="text" placeholder="Gender" name="gender"><br>
            <input id="text" type="number" placeholder="Amount" name="investment_amount"><br>
            <input id="text" type="text" placeholder="E-mail" name="admin_email"><br>
            <input id="text" type="password" placeholder="password" name="admin_password"><br>

            <input id="button" type="submit" value="Submit"><br><br>
            

            
    </form>
    <a href="admin_details.php"><button class="btn">Cancel</button></a>
     <a href="admin_login.php"><button class="btn">Logout</button></a>
</div>

</body>
</html>