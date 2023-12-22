<?php
include('connectDb.php');

if($_SERVER['REQUEST_METHOD'] =="POST")
{
$user = $_POST['admin_email'];
$password = $_POST['admin_password'];

if(!empty($user) && !empty($password))
{

$sql = "SELECT * from admin where admin_email = '$user' limit 1";

$result = mysqli_query($conn,$sql);
if($result){
if($result && mysqli_num_rows($result)>0)
{

    $user = mysqli_fetch_assoc($result);

if($user['admin_password'] == $password)
{
    $_SESSION['admin_email'] = $user['admin_email'];
    header("Location:admin_dashboard.php");

}
}
}
echo '<script >alert("Warning!! Try Again With Valid Information")</script>';
}
else
{
 echo '<script >alert("Warning!! Try Again With Valid Information")</script>';
}
}

?>


<!doctype html>
<html>
<head>
	<title> Login</title>
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
padding:4px;
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

margin:90px auto;

width: 300px;
padding:5px;
top:200px;
}
a:link {
  color:red;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: green;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: black;
  background-color: transparent;
  text-decoration: underline;
}
.background{
    background-color: white;
    height: 300px; 
    width: 600px; 
    justify-content: center;
    align-items: center;
}
</style>

<div class="background">
<div id="box">
<form method="post">
<b><div style="font-size:45px; margin:10px;color:green; border:2">Admin Login</div></b>
<input id="text" type="text"placeholder="enter your email" name="admin_email"><br><br>
<input id="text" type="password"placeholder="enter your password" name="admin_password"><br><br>
<input id="button" type="submit" value="login"><br><br>
<a href="admin_forgot_password.php">Forgot Password ?</a><br><br>
</form>
</div>
</div>

</body>
</html>