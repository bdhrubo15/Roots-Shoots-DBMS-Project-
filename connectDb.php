<?php

    $servername = "localhost";
    $username = "dhrubo";
    $password = "12345678";
    $databasename = "roots3";
    $conn = mysqli_connect($servername,$username,$password,$databasename);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

?>