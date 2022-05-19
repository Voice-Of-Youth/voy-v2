<?php
include 'connection.inc.php';
?>



<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../../public/styles/articles/style.css">
	  <link rel="stylesheet" type="text/css" href="../../../public/styles/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Why sexual education is important | articles - VOY</title>
  </head>
  <body>
    <nav class="navbar">
        <div class="navbar-container">
        <a href="../../../public/index.php" class="link" id="navbar-logo">VOY</a>
        
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
                echo "<a href='../../view/login.php'>bookmarks</a>";
                // echo "<a href= \"../../../application/view/login.php\" class=\"navbar-link link\">";
                echo "<i class=\"fa-solid fa-bookmark\"></i>";
                echo "<span>Favorites</span>";
                echo "</a>";
                echo "</li>";
                echo "<li id=\"nav-button-dynamic\" class=\"navbar-menu-item navbar-btn\">"; 
                echo "<a href='../../view/profile.php'>Signin</a>";
                // echo "<a href=\"../../../application/view/profile.php\" class=\"btn-link link\">Profile</a>"; 
                echo "</li>";
                echo "<li id=\"nav-button-dynamic\" class=\"navbar-menu-item navbar-btn\">"; 
                echo "<a href='../../utils/logout.utils.php'>Logout</a>";
                // echo "<a href=\"../../../application/utils/logout.utils.php\" class=\"btn-link link\">Log out</a>"; 
                echo "</li>";
            } else {
                echo "<li id=\"nav-button-dynamic\" class=\"navbar-menu-item navbar-btn\">"; 
                echo "<a href='../../view/signup.php'>Sign Up</a>";
                // echo "<a href=\"../../../application/view/login.php\" class=\"btn-link link>Sign In</a>"; 
                echo "</li>";
            }
            ?>    
        </ul>
        </div>
    </nav>

    <div class="articles-container">
      <h1 class="article-header">Why sexual education is important</h1>
      <div class="article-content">
        <div class="leftcolumn">
          <div class="card">
            <!-- <?php
            $title=mysqli_real_escape_string($conn,$_GET['title']);
            $date=mysqli_real_escape_string($conn,$_GET['date']);
            
            $sql="SELECT*FROM blog WHERE blogName='$title'AND createdAt= '$date'";
            $result=mysqli_query($conn, $sql);
            $queryResult=mysqli_num_rows($result);
            
             if($queryResult>0){
            while($row=mysqli_fetch_assoc($result)){
              echo "<div class='blog-box'>
              <h3>".$row['blogName']."</h3>
              <p>".$row['Content']."</p>
              <p>".$row['createdAt']."</p>
              </div>";
            
            }
          }
            ?> -->
            <p>
              Adolescents in our country are growing up in a world where circumstances are quite different now ,concerning the benefits and risks in life, from those of their parents or grandparents. They need proper support not only to navigate the biological, social and cognitive transitions of their life but also to prevent cases of sexual harassment and abuse which are now increasing at an alarming rate.
              Sex education is an essential tool to help them learn about a broad range of topics related to biological, psychological and sociocultural perspectives of individual beings as well as a key intervention to prevent and reduce sexual harassment, assault and abuse. It just needs to be delivered in an age-appropriate and engaging way based on science and facts.
              However, this important subject is still taboo in our conservative society due to some misconceptions or lack of appropriate knowledge about sex ed. Here are some misconceptions that need to be addressed.
            </p>
            <!--  <div class="fakeimg" style="height:200px;">Image</div> -->
            <img src="sexed.jpeg">
            <h3>It encourages sex</h3>
            <p>Critics suggest sex ed will encourage children to have sex, yet research suggests the opposite is true. A study by the Guttmacher Institute found that "there is now clear evidence that sexuality education programmes can help young people to delay sexual activity."  A UNESCO report found children who are taught CSE tend to have less sex, fewer sexual partners and reduced sexual risk-taking.</p>
            <h3>It normalizes teenage sex</h3>
            <p>Societies in some countries take the opposite strategy. They talk about sex as a normal and healthy act, opening the door to frank education so children dont need to find things out themselves the hard way. It is these countries that typically have the lowest teenage pregnancy rates. Switzerland, for instance, has just 3 teen births per thousand.</p>
            <h3>It imposes foreign culture</h3>
            <p>In conversations about Sex ed, some critics have raised fears that it will lead to behaviours that they deem to be foreign and unwelcome in societies. Putting aside the value of that argument, one of the principles of sex ed is that it is culturally appropriate. For instance, Ethiopia could rebranded Sex ed. as "family life education" to make it more acceptable.</p>
            <p>Making sex ed culturally appropriate is also not just about leaving some things out, but also about making sure certain topics are included. In Ethiopia, topics like early marriage, FGM and male shame around sexual abuse needs to be included.</p>
            <h3>It is not meant for childrens ear</h3>
            <p>Studies suggest that parents who are most hesitant to let their children hear the truth about sex, have children who are the most at risk of becoming victims of abuse, or unintentionally causing, or having, an unwanted pregnancy. Sex ed. sensitises kids to their body parts and teaches them what is appropriate and not. It prepares them to recognise potential abuse by adults.</p>
            <p>Besides, sex education is not just about sex. A five-year-old may be wondering, "Why does he have a penis and I dont?" A 12-year-old: "Why am I bleeding and she is not?" A 15-year-old: "Why do I get butterflies in my stomach when I see so-and-so? sex ed. is tailored to their different concerns at different ages.</p>
            <h3>It goes aganist religious values</h3>
            <p>Some people argue that sex before marriage is a sin, so the only thing children should be taught about sex is abstinence. Studies in some countries, however, suggest that abstinence-only programmes do not reduce teenage pregnancies. Moreover, they leave children uninformed about the risks of sex and sexually transmitted infections.<br>
            Sex ed. does, in fact, teach abstinence. But it also covers the "what if". It recognises that premarital sex happens. In Ethiopia, for instance, a good amount of teenagers are sexually active before turning 18, the local age of consent. Rather than seeing sex ed. as inherently anti-religious, conservative voices can be brought into the planning process.</p>

            <h2>Advantages of sex ed.</h2>
            <h3>In early years</h3>
            <li>Body positive</li>
            <li>Healthy gender identity</li>
            <li>Diversity friendly</li>
            <li>Better parent/child communication</li>
            <li>Recognise boundaries</li>
            <li>Accepting of physical change</li>
            <li>Recognise and discloses sexual abuse</li>
            <h3>In teenage years</h3>
            <li>Make smart sexual decisions</li>
            <li>Delay sexual activity </li>
            <li>No unwanted pregnancy</li>
            <li>No STD/STIs</li>
            </p>
          </div>
        </div>
        <div class="rightcolumn">
          <div class="card">"When a child reaches puberty, parents become so curious about their sex lives and whereabouts, put them behind bars to their own detriment. When such a child breaks free, don't be surprised to see him/her in porn movies.<br>
          -Michael Bassey Johnson
          </div>
          <div class="card">
            <h2>About Me</h2>
            <div class="fakeimg" style="height:100px;">Image</div>
            <p>Some text about the author will be inserted here</p>
          </div>
          <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg">Image</div><br> <!-- the image will be clickable and it will direct you to another article -->
            <div class="fakeimg">Image</div><br> 
            <div class="fakeimg">Image</div>
          </div>
          <div class="card">
            <h3>Follow Me</h3>
            <p>social media links can be inserted here</p>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-container">
          <div class="footer-links">
              <div class="footer-link-wrapper">
                  <div class="footer-link-items">
                      <h2 class="footer-title">Help</h2>
                      <a href="../FAQ.html" class="link footer-link">FAQ's</a>
                      <a href="../report.html" class="link footer-link">Report</a>
                  </div>
                  <div class="footer-link-items">
                      <h2 class="footer-title">About us</h2>
                      <a href="#" class="link footer-link">Blogs</a>
                      <a href="#" class="link footer-link">Testimonials</a>
                      <a href="../aboutus.html" class="link footer-link">About Us</a>
                      
                  </div>
              </div>
              <div class="footer-link-wrapper">
                  <div class="footer-link-items">
                      <h2 class="footer-title">Careers</h2>
                      <a href="../writers.html" class="link footer-link">Writers</a>
                      <a href="#" class="link footer-link">How it works</a>
                      <a href="../contactus.html" class="link footer-link">Contact Us</a>
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
                      <a href="../../../index.html" class="link" id="footer-logo">VOY</a>
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

    <script src="../../../public/js/main.js"></script>
  </body>
</html>

