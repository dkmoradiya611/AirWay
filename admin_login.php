<?php
    session_start();
    require("dbconnect.php");
    if(isset($_POST["email"]) && isset($_POST["password"])){
        $email=$_POST["email"];
        $password=$_POST["password"];
        $query="select id from users where email='{$email}'and password='{$password}' and user_type=1";
        $result=mysqli_query($conn,$query);
        $r=mysqli_fetch_array($result);
        $num=mysqli_num_rows($result);
        if($num==1)
        {
            $_SESSION["email"]=$r["email"];
                header("location:admin_home.php");
        }else{
            echo "user not found";
        }
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="my.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    </head>
    <center>
        <h2>
            Admin Login
        </h2>
    </center>
    <body>
        <center>
            <form action="admin_login.php" method="POST" id="login">
                <table>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="text" name="email" id="email" required>
                            <span style="color:red" class="error">*</span>
                        </td>
                    </tr> 
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name="password" id="password" required>
                            <span style="color:red" class="error">*</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="submit" name="submit" >
                        </td>
                    </tr>
                </table>
            </form>
        </center>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#login').validate({
                    messages:{
                        email:"Email is required",
                        password:"Password is required"
                    }
                })
            });
        </script>
    </body>
</html>