<?php
  require("dbconnect.php");  
  $nameErr = $emailErr = $mobileErr = $passwordErr = "";
  $username = $email = $mobile = $pass ="";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["username"])) {
      $nameErr = "UserName is required";
    }else{
      $username=$_POST["username"];
    }
    if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
      $emailErr = "Inavlid Email Address";
    } else {
      $email=$_POST["email"];
    }
    if (empty($_POST["mobile"])) {
      $mobileErr = "Mobile No. is required";
    }
     else {
      $mobile=$_POST["mobile"];
    }
    if (empty($_POST["password"])) {
      $passwordErr = "Password is required";
    } else {
      $pass=$_POST["password"];
    }
  }
    if(isset($username) && $username != "" && isset($email) && $email != "" && isset($mobile) && $mobile != "" && isset($pass) && $pass != ""){
    $query="insert into users (username, email, mobile, password,user_type) values('{$username}','{$email}',{$mobile},{$pass},2)";
    if(mysqli_query($conn,$query)==1){
      $username="";
      $email="";
      $mobile="";
      $pass="";
      header("location:user_login.php");
    }
  }
?>

<html>
  <head>
  <link rel="stylesheet" href="my.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <center>
      <h2>
        Registration
      </h2>
    </center>
  </head>
  <body>
    <center>
    <form action="Register.php" method="POST" id="register">
      <table>
        <tr>
          <td>
            UserName:
          </td>
          <td>
            <input type="text" name="username" value="<?php echo isset($username) ? $username : '';?>" required>
            <span style="color:red" class="error">* <?php echo $nameErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Email:
          </td>
          <td>
            <input type="text" name="email" value="<?php echo $email;?>" required>
            <span style="color:red" class="error">* <?php echo $emailErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Mobile:
          </td>
          <td>
            <input type="number" name="mobile" maxlength="10" minlength="10" value="<?php echo $mobile;?>" required>
            <span style="color:red" class="error">* <?php echo $mobileErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Password:
          </td>
          <td>
            <input type="password" name="password" id="password" required>
            <span style="color:red" class="error">* <?php echo $passwordErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Confirm Password:
          </td>
          <td>
            <input type="password" name="co_pass" id="co_pass" required>
            <span style="color:red" class="error">*</span>
          </td>
        </tr>
          <tr>
            <td>
              <input type="submit" value="Register" name="submit">
            </td>
          </tr>
        <tr>
            <td>
              Already a user?
            </td>
            <td>
              <a href="user_login.php">click Here</a>
            </td>
        </tr>
      </table>
    </form>
  </center>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#register').validate({
        rules: {
        password: {
            minlength: 8,
        },
        co_pass: {
            minlength: 8,
            equalTo: "#password"
        }
    },
    messages:{
      username:"Username is required",
      mobile:"Mobile no. should be 10 characters",
      email:"Email is required",
      password:"Password must be 8 characters",
      co_pass:{
        required:"Confirm password is required",
        equalTo:"Confirm password should be same as password",
      }
    }
      })
    });
  </script>
  </body>
</html>

 <!-- <?php
  $query="select * from users";
  $result=mysqli_query($conn,$query);
  echo "<center>";
  echo "<table border='1'>";
  echo "<tr><td>User ID</td><td>UserName</td><td>Email</td><td>Mobile</td><td>Pass</td></tr>";
  while($r=mysqli_fetch_array($result)){
    echo "<tr><td>".$r["id"]."</td><td>".$r["username"]."</td><td>".$r["email"]."</td><td>".$r["mobile"]."</td><td>".$r["password"]."</td></tr>";
  }
  echo "</center>";
?> -->