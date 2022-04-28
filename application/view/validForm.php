<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles/validForm.css'>
    <script src='main.js'></script>
</head>
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: http://localhost/voy/src/views/signin.php");
}

if (isset($_SESSION['IsWriter']) && $_SESSION['IsWriter']) {

    header("Location: http://localhost/voy/src/views/writer.php");
}

?>

<body>
    <form enctype="multipart/form-data" action="../../model/validform.php" method="post">
        <div class="login-box">
            <h1>Validation Form</h1>
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="fullname" placeholder="Full name" value="<?= $_SESSION['FirstName'] . ' ' . $_SESSION['LastName']; ?>">
            </div>
            <div class=" textbox">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input type="email" name="email" value="<?= $_SESSION['email'] ?>" placeholder="Email">
            </div>
            <div>
                <p>Upload your CV</p>
                <input type="file" id="myFile" name="fileToUpload">
            </div>
            <div class="textbox">
                <p>Why do you want to be a writer?</p>
                <i class="bi bi-textarea"></i>
                <textarea type="textarea" name="why" placeholder="Describe here..." rows="5" cols="50" maxlength="300">

                </textarea>
            </div>
            <input type="submit" class="btn" name="submit" value="Submit">
        </div>
    </form>
</body>

</html>