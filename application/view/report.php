<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/styles/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../public/styles/report.css'>
    <script src='main.js'></script>
</head>
<body>
    <ul id="repBar">
        <li>
            <a href="">Date of Publication</a>
            <ul>
                <form method="POST" action='../controller/report.inc.php'>
                    <li>
                        StartDate: <input type="date" name="startdate">
                    </li>
                    <li>
                        EndDate: <input type="date" name="enddate">
                    </li>
                    <li>
                        <button type="submit" name="filterdate">Show Results </button>
                    </li>
                </form>
            </ul>
        </li>
        <!-- <li>
            <a href="">Rating</a>
            <ul>
                <li><a href="">1 out of 5</a></li>
                <li><a href="">2 out of 5</a></li>
                <li><a href="">3 out of 5</a></li>
                <li><a href="">4 out of 5</a></li>
                <li><a href="">5 out of 5</a></li>
            </ul>
        </li> -->
    </ul>
</body>
</html>