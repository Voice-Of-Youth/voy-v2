<?php
  if(isset($_POST["update"])) {
    $username =$_POST['UserName'];
    $FirstName =$_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $password =$_POST['Password'];
    $email =$_POST['Email'];
        
    require('connection.inc.php');
    require('../utils/profile.utils.php');

    updateUser($conn, $email, $password, $username, $FirstName, $LastName, $password);
    mysqli_close($conn);
     
    header("Location: http://localhost/voy/index.php");
  }
