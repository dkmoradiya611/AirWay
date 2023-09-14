<?php
    require("dbconnect.php");
    if(isset($_GET["DID"]))
    {
        $id=$_GET["DID"];
        $query="delete from users where id={$id}";
        mysqli_query($conn,$query);
        header("location:https://localhost/AirWay/users.php");
    }
?>