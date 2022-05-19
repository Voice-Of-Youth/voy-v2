<?php 
include 'connection.inc.php';
?> 

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../public/styles/searchresult.css">
  <title>Search page</title>

</head>

<body>
  <nav>
    <p>VOY</p>
    <ul>
      <li>
        <form>
          <input type="text" placeholder="Search...">
          <button type="submit" name="submit-search">
            Search
          </button>
        </form>
      </li>
      <li><a href="#">Sort By </a>
        <ul>
          <li><a href="#">writer name</a></li>
          <li><a href="#">Article Title</a></li>
        </ul>
      </li>
      <li><a href="#">Filter</a></li>

    </ul>
  </nav>

</body>

<h1> welcome to the Search page</h1>
<h2>Searched Blogs </h2>
<div class="blog-container">
  <!-- <?php
if(isset($_POST['submit-search'])){
  $search=mysqli_real_escape_string($conn,$_POST['search']);
 
  $sql="SELECT*FROM blog WHERE blogName lIKE '%$search%' OR Content lIKE '%$search%' OR createdAt lIKE '%$search%' ";
$result=mysqli_query($conn, $sql);
$queryResult=mysqli_num_rows($result);

 if($queryResult>0){
while($row=mysqli_fetch_assoc($result)){
  echo "<a href='../view/articles/article.php?title=".$row['blogName']."&date=".$row['createdAt']."'>
    <div class='blog-box'>
  <h3>".$row['blogName']."</h3>
  <p>".$row['Content']."</p>
  <p>".$row['createdAt']."</p>
  </div></a>";

}
 }else{
   echo "There are no results matching your search! ";
 }


}

?> -->
</div>



</html>