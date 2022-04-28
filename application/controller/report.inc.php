<?php

 if(isset($_POST["filterdate"])) {

    $startDate =$_POST['startdate'];
    $endDate =$_POST['enddate'];

    require('connection.inc.php');
    require('../utils/report.utils.php');
    
    $result = generateReport($conn, $startDate, $endDate);

    echo "<table border='1'><tr><th>Blog Name</th><th>Content</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['blogName'] . "</td>"; // Here the row should have the exact name of the column
        echo "<td>" . $row['Content'] . "</td>";   // here also
        // echo "<td>" . $row['createdAt'] . "</td>";
        echo "</tr>";
    }

    mysqli_free_result($result);

    echo "</table>";


    mysqli_close($conn);
}
