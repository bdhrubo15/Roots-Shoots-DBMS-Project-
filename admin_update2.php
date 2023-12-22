<?php
include_once "connectDb.php";
?>

<html>
	<head>
		<title>Admin's Information</title>
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
	$admin_email = $_GET["admin_email"];
	$first_name  = $_GET["first_name"];
	$last_name = $_GET["last_name"];
	$city = $_GET["city"];
    $phone_number = $_GET["phone_number"];
    $zip_code = $_GET["zip_code"];
	$gender = $_GET["gender"];


	$query 	= "UPDATE admin
     SET first_name='$first_name',
     last_name='$last_name',
     admin_email='$admin_email', 
     gender='$gender',
      city='$city',
      zip_code='$zip_code',
      phone_number='$phone_number'

       WHERE admin_email= '$admin_email' ";


	$result = mysqli_query($conn, $query);
    if($result){
     header("Location:admin_details.php");
        die;
    }
    
		

?>
</body>
</html>