<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/styles/writer.css'>
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bookmark</title>

</head>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: http://localhost/voy/src/views/signin.php");
}
if (!isset($_SESSION['IsWriter']) || !$_SESSION['IsWriter']) {

    header("Location: http://localhost/voy/src/views/validForm.php");
}
?>

<body>
       <nav class="navbar">
    <div class="navbar-container">
      <a href="../../public/index.php" class="link" id="navbar-logo">VOY</a>
      
      <div class="navbar-hamburger" id="mobile-bar-icon">
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
      </div>
      
      <ul class="navbar-menu menu">
        <li class="search-menu-item">
          <div class="navbar-link link search-styling">
            <div id="search" class="search-bar">
              <input type="text" class="search-text" placeholder="Search...">
              <button class="search-submit">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
              <div class="search-dropdown" id="hits-container"></div>
            </div>
            <span id="search-placeholder">Search</span>
          </div>
        </li>
        <?php 
          session_start();
          if(isset($_SESSION["userid"])) {
            echo "<li class=\"navbar-menu-item\">";
            // echo "<a href='../application/view/login.php'>Bookmarks</a>";
            echo "<a href='../application/view/login.php' class='navbar-link link'>";
            echo "<i class='fa-solid fa-bookmark'></i>";
            echo "<span>Favorites</span>";
            echo "</a>";
            echo "</li>";
            echo "<li id='nav-button-dynamic' class='navbar-menu-item navbar-btn'>"; 
            // echo "<a href='../application/view/profile.php'>Signin</a>";
            echo "<a href='../application/view/profile.php' class='btn-link link'>Profile</a>"; 
            echo "</li>";
            echo "<li id='nav-button-dynamic' class='navbar-menu-item navbar-btn'>"; 
            // echo "<a href='../application/utils/logout.utils.php'>Logout</a>";
            echo "<form class='navbar-menu-item navbar-btn' method='post'>";
            echo "  <button class='btn-link link' type='submit' name='logout'>Logout</button>";
            echo "</form>";
            // echo "<a href='../application/utils/logout.utils.php' class='btn-link link'>Log out</a>"; 
            echo "</li>";
          } else {
            echo "<li id='nav-button-dynamic' class='navbar-menu-item navbar-btn'>"; 
            // echo "<a href='../application/view/login.php'>Signin</a>";
              echo "<a href='../application/view/login.php' class='btn-link link'>Sign In</a>"; 
            echo "</li>";
          }
        ?>    
      </ul>
    </div>
  </nav>
    <div class="main">
        <h1 class="welcome">Welcome Writer</h1>
        <div class="content">
            <p class="par">We are really glad you decided to become part of our community and help those who are
                struggling in their lives everyday.You have the power to change their tearful world into a cheerful
                one.</p>
        </div>
        <div class="info">
            <h2>Send us your works</h2>
            <p>If you want to write something new please use the link below to use google docs.Send us the url of
                your file in the space provided when you are done. Please make sure to make your link public.</p>
            <a href="https://docs.google.com/document/u/0/?tgif=d" target="_blank">Goto google docs</a><br>
        </div>
        <form enctype="multipart/form-data" action="../../model/writer.php" method="post">
        <div class="form">
            <div class="textbox spacing">
                <i class="bi bi-link"></i>
                <input type="url" name="url" placeholder="url goes here">
            </div>
            <div class="spacing">
                <p>You can drop your file below if you already have one.</p>
            </div>
            <div class="textbox spacing">
                <input type="file" id="myFile" name="fileToUpload">
            </div>
            <div class="spacing">
                <input type="button" class="btn" name="submited" value="Submit">
            </div>
            <div class="thank spacing">
                <p>Thank you for taking your time to do this. We will post your work after validation.
                <p>
            </div>
        </div>
        </form>
    </div>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-links">
                <div class="footer-link-wrapper">
                    <div class="footer-link-items">
                        <h2 class="footer-title">Help</h2>
                        <a href="./FAQ.html" class="link footer-link">FAQ's</a>
                        <a href="./report.html" class="link footer-link">Report</a>
                    </div>
                    <div class="footer-link-items">
                        <h2 class="footer-title">About us</h2>
                        <a href="#" class="link footer-link">Blogs</a>
                        <a href="#" class="link footer-link">Testimonials</a>
                        <a href="./aboutus.html" class="link footer-link">About Us</a>

                    </div>
                </div>
                <div class="footer-link-wrapper">
                    <div class="footer-link-items">
                        <h2 class="footer-title">Careers</h2>
                        <a href="./dashboard.php" class="link footer-link">Writers</a>
                        <a href="#" class="link footer-link">How it works</a>
                        <a href="./contactus.html" class="link footer-link">Contact Us</a>
                    </div>
                    <div class="footer-link-items">
                        <h2 class="footer-title">Legal</h2>
                        <a href="#" class="link footer-link">Terms</a>
                        <a href="#" class="link footer-link">Services</a>
                        <a href="#" class="link footer-link">Privacy</a>
                    </div>
                </div>
            </div>
            <section class="social-media">
                <div class="social-media-wrap">
                    <div class="footer-logo">
                        <a href="../../index.html" class="link" id="footer-logo">VOY</a>
                    </div>
                    <p class="website-rights">&copy; Voice of Youth
                        <script>
                            document.write(new Date().getFullYear())
                        </script>. All rights reserved
                    </p>
                    <div class="social-icons">
                        <a href="#" class="social-icon-link link" target="_blank">
                            <i class="fa-brands brand fa-facebook"></i>
                        </a>

                        <a href="#" class="social-icon-link link" target="_blank">
                            <i class="fa-brands brand fa-instagram"></i>
                        </a>

                        <a href="#" class="social-icon-link link" target="_blank">
                            <i class="fa-brands brand fa-twitter"></i>
                        </a>

                        <a href="#" class="social-icon-link link" target="_blank">
                            <i class="fa-brands brand fa-telegram"></i>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </footer>

    <script src="../js/main.js"></script>
    <script src="../js/index.js"></script>
</body>

</html>