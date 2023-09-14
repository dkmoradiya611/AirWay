<?php
    require("dbconnect.php");
    $query="select * from users";
    $result=mysqli_query($conn,$query);
?>

<html>
    <head>
        <link rel="stylesheet" href="my.css">
    </head>
    <center>
        <h2>USERS</h2>
    </center>
    <body>
        <center>
            <form action="users.php" method="POST" id="user">
            <table align = "center" border = "3" cellpadding = "3" cellspacing = "2">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>EMAIL</th>
                <th>Mobile No.</th>
                <th>Password</th>
                <th>User_type</th>
                <th>Delete</th>
             </tr>
            <?php
            while ($row = $result->fetch_assoc()) 
            {
                $id=$row["id"];
            ?> 
            <tr>
                <td><?php echo $row["id"]; ?> </td>
                <td><?php echo $row["username"]; ?> </td>
                <td><?php echo $row["email"]; ?> </td>
                <td><?php echo $row["mobile"]; ?> </td>
                <td><?php echo $row["password"]; ?> </td>
                <td><?php echo $row["user_type"]; ?> </td>
                <td><a href='deletemodule.php?DID=<?php echo $id; ?>'>DELETE</a></td>
            </tr>
            <?php } ?>
            </form>
        </center>
    </body>
</html>