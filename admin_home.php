<?php
    require("dbconnect.php");
    $query="select * from users";
    $result=mysqli_query($conn,$query);
?>
<html>
    <head>
        <link rel="stylesheet" href="my.css">
    </head>
    <body>
        <center>
        <tr>
            <td>
                <a href="add_flight.php">Add Flight</a>
            </td>
            <td>
                <a href="users.php">Users</a>
            </td>
        </tr>
        </center>
    </body>
</html>