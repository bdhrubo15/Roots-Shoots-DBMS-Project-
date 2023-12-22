<html>
	<head>
		<title>User's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
    <style>
    body{
    background-image: url('images/img1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

}
.form{
    width: 800px;
    background-color:white;
}
</style>
<?php


  $user_email = $_GET["user_email"];
	$first_name  = $_GET["first_name"];
	$last_name = $_GET["last_name"];
	$town = $_GET["town"];
  $zip_code = $_GET["zip_code"];
	$gender = $_GET["gender"];
    

	
?>

<h1 style="text-align:center;">Update Record</h1>
    
    <form class="ui form" style="max-width: 500px; margin: 0 auto;" method="get"  action="admin_user_update2.php">
    
    
    <div class="field">
        
        <input type="hidden" name="user_email" value='<?php echo $user_email; ?>'>
        
      </div>
    <div class="field">
        <label>First Name</label>
        <input type="text" name="first_name" value='<?php echo $first_name; ?>'>
      </div>
      <div class="field">
        <label>Last Name</label>
        <input type="text" name="last_name" value='<?php echo $last_name; ?>'>
      </div>
    
      <div class="field">
        <label>City</label>
        <input type="text" name="town" value='<?php echo $town; ?>'>
      </div>
      <div class="field">
        <label>Zip Code</label>
        <input type="number" name="zip_code" value='<?php echo $zip_code; ?>'>
      </div>
      <div class="field">
        <label>Gender</label>
        <input type="text" name="gender" value='<?php echo $gender; ?>'>
      </div>
        
      
    <button style='background-color: green; height: 36px;
    width:150px; color: white;' type="submit">Update</button>

</form>
</body>
</html>