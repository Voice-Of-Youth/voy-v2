<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link rel="stylesheet" href="../../public/styles/auth.css">
    <title>Document</title>
</head>
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
              echo "<a href='./signup.php' class='btn-link link'>Sign Up</a>"; 
            echo "</li>";
          }
        ?>    
      </ul>
    </div>
  </nav>
    

    <section class="authentication">
        <div class='sign-in'>
            <h2 class="title">I already have an Account</h2>
            <span>Log in with your email and password</span>

            <form action="../controller/login.inc.php" method="POST">
                <small class="error" id="signin-error"></small>
                <div class="group">
                    <input placeholder="Email" class="form-input" id="login-email"  type="email" name="email" required label="email">
                </div>
                <div class="group">
                    <input placeholder="Password" class="form-input" id="login-password" type="password" name="password" required label="email">
                </div>
                <div class='buttons'>
                    <button type="submit" name="login" class="custom-button" id="signin-button" >Sign In</button>
                </div>
                <br/>
                <a href="../view/forgotpassword.php">Forgot Password</a>
            </form>
            <?php
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "userdoesntexist") {
                        echo "<p>user doesn't exist</p>";
                    } else if($_GET["error"] == "wrongpassword") {
                        echo "<p>Sorry Wrong Credentials</p>";
                    } else if($_GET["error"] == "none") {
                        echo "<p>successfully logged in</p>";
                        header("location: index.php");
                    }
                } 
            ?>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-container">
        <div class="footer-links">
            <div class="footer-link-wrapper">
            <div class="footer-link-items">
                <h2 class="footer-title">Help</h2>
                <a href="./faq.php" class="link footer-link">FAQ's</a>
                <a href="./report.php" class="link footer-link">Report</a>
            </div>
            <div class="footer-link-items">
                <h2 class="footer-title">About us</h2>
                <a href="./aboutus.php" class="link footer-link">About Us</a>  
                <a href="#" class="link footer-link">Blogs</a>
                <a href="#" class="link footer-link">Testimonials</a>
            </div>
            </div>
            <div class="footer-link-wrapper">
            <div class="footer-link-items">
                <h2 class="footer-title">Careers</h2>
                <a href="./writers.php" class="link footer-link">Writers</a>
                <a href="./contactus.php" class="link footer-link">Contact Us</a>
                <a href="#" class="link footer-link">How it works</a>
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
                <a href="../../public/index.php" class="link" id="footer-logo">VOY</a>
            </div>
            <p class="website-rights">&copy; Voice of Youth <script>document.write(new Date().getFullYear())</script>. All rights reserved</p>
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

    <script src="../../public/js/main.js"></script>
    <script src="../../public/js/auth.js"></script>
</body>
</html>