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
        <form name= search_form method="POST"action="searchResult.php">
          <input type="text" name="filter" placeholder="filter by...">
          <button type="submit" name="submit-filter">
           Filter
          </button>
        </form>
      </li>
      <li>Sort By 
        <ul>
          <li><button>content</button></li>
          <li><button>article title</button></li>
        </ul>
      </li>
    </ul>
  </nav>



<h1> welcome to the Search page</h1>
<h2>Searched Blogs </h2>
<div class="blog-container">
  <?php
if(isset($_POST['submit-search'])){
  $search=mysqli_real_escape_string($conn,$_POST['search']);
 
  $sql="SELECT*FROM blog WHERE (blogName lIKE '%$search%' OR Content lIKE '%$search%')";
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

?>
</div>

<!-- <h1 id="filter">Filterd Result </h1>
<?php 
include 'connection.inc.php';    
                                                                                                                                
if (isset($_POST['submit-filter'])){
  $filter_term=mysql_real_escape_string($_POST['filter']);
  $query="SELECT*FROM blog WHERE (content LIKE'%$filter_term%' OR blogName LIKE '%$filter_term%')";
 $resultQuery=mysqli_query($conn,$query);
 $queryRes=mysqli_num_rows($resultQuery);
}
?>
 
<?php 
$sortBlogName=mysqli_query($conn,"SELECT*FROM blog WHERE (content LIKE'%$filter_term%' OR blogName LIKE '%$filter_term%' ORDER BY blogName)");
$sortcontent=mysqli_query($conn,"SELECT*FROM blog WHERE (content LIKE'%$filter_term%' OR blogName LIKE '%$filter_term%' ORDER BY content)");
?>

<table id="sort" width="90%" cellpadding="7" cellspace="7">
  <tr>
    <td><strong>blogName</strong></td>
    <td><strong>content</strong></td>
    <td><strong>createdAt</strong></td>
</tr>
<?php 
while($row=mqsqli_fetch_array($resultQuery))
{?>
  <tr>
    <td><?php echo $row['blogName']?></td>
    <td><?php echo $row['content']?></td>
    <td><?php echo $row['createdAt']?></td>
</tr>
<?php }?> -->

</table> 
 
</body>

</html>