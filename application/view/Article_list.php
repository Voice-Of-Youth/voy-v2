<?php
require_once('../controller/connection.inc.php');
$query = "SELECT * FROM blog ORDER BY BlogID DESC;";
$execute = mysqli_query($conn, $query);
$postData = mysqli_num_rows($execute);
?>
<html>

<head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/styles/article_list.css'>
    <title>Articles to be validated</title>
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
                if (isset($_SESSION["userid"])) {
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
        <?php
        if ($postData > 0) {
            while ($row = mysqli_fetch_array($execute)) {
                $timeStamp = $row['createdAt'];
                $date = date('dS M Y', strtotime($timeStamp));
                $time = date('h:i A', strtotime($timeStamp));
        ?>
                <div class="articleList">
                    <ul>
                        <li>
                            <a href="Article_details.php?id=<?php echo $row['BlogID']; ?> "><?php echo $row['blogName']; ?></a>
                        </li>
                    </ul>
                </div>

        <?php
            }
        }
        ?>
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