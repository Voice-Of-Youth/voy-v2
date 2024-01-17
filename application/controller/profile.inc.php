<?php
  session_start();
  require('connection.inc.php');
  require('../utils/profile.utils.php');
  $id = $_SESSION["userid"];

    $uname = $_SESSION["username"];
    $uid = $_SESSION["userid"];
    
    $profiledata = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM User WHERE `UserID` = $uid;"));

    $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM image WHERE username = '$uname'"));

  if(isset($_POST["update"])) {
    $username =$_POST['UserName'];
    $FirstName =$_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $password =$_POST['Password']; 
    $email = $profiledata['Email'];
    // $email =$_POST['Email'];
        

    updateUser($conn, $email , $password, $username, $FirstName, $LastName, $password);
    mysqli_close($conn);
     
    header("Location: http://localhost/voy-v2/application/view/profile.php");
  }