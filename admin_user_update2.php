<?php
include_once "connectDb.php";
?>

<html>
	<head>
		<title>User's Information</title>
	</head>
	<body>
        <style>body {
  background-image: url('images/img1.jpg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
    $user_email=$_GET["user_email"];
	$first_name  = $_GET["first_name"];
	$last_name = $_GET["last_name"];
	$town = $_GET["town"];
    $zip_code = $_GET["zip_code"];
	$gender = $_GET["gender"];


	$query 	= "UPDATE users
     SET first_name='$first_name',
     last_name='$last_name',
     user_email='$user_email', 
     gender='$gender',
      town='$town',
      zip_code='$zip_code',

       WHERE user_email= '$user_email' ";


	$result = mysqli_query($conn, $query);
    if($result){
     header("Location:admin_user_update.php");
        die;
    }
    
		

?>
</body>
</html>