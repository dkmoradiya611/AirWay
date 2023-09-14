<?php 
    require("dbconnect.php");

    // $uname="";
    // $email="";
    // $mobile"";
    // $password"";
    if(isset($_POST["submit"]))
    {
        $id=$_POST["id"];
        $uname=$_POST["username"];
        $email=$_POST["email"];
        $mobile=$_POST["mobile"];
        $password=$_POST["password"];

        $query="update users set id={$id},username='{$uname}',email='{$email}',{$mobile},'{$password}'";
        $result=mysqli_query($conn,$query);
    }
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
        $query="select * from users order by id={$id}";
        $result=mysqli_query($conn,$query);
        $r=mysqli_fetch_array($result);
    }

?>

<html>
    <center>
        <h3>
            Edit Student Data
        </h3>
        <body style="background-color:#82BCEF;">
        </body>
        <form action="" method="POST">
            <table border='1'>
                <tr>
                    <td>
                        id
                    </td>
                    <td>
                        <input type="text" name="id" value="<?php if(isset($r["id"])){echo $r["id"];}?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        UserName
                    </td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email
                    </td>
                    <td>
                        <input type="text" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        Mobile
                    </td>
                    <td>
                        <input type="text" name="mobile">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="text" name="password">
                    </td>
                </tr>
                <!-- <tr>
                    <td>
                        <input type="submit" value="edit" >
                    </td>
                </tr> -->
            </table>
        </form>
    </center>
</html>

