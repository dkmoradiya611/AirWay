<?php
  require("dbconnect.php");  
  $dept_city = $arr_city = $dept_date =$passanger = $class="";
  $dept_cityErr = $arr_cityErr = $dept_dateErr = $passangerErr =$classErr="";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["dept_city"])) {
      $dept_cityErr = "Departure city is required";
    }else{
      $dept_city=$_POST["dept_city"];
    }
    if (empty($_POST["arr_city"])) {
        $arr_cityErr = "Arrival city is required";
      }else{
        $arr_city=$_POST["arr_city"];
    }
    // if(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
    //   $emailErr = "Inavlid Email Address";
    // } else {
    //   $email=$_POST["email"];
    // }
      // if (empty($_POST["email"]) || !filter_var($email,FILTER_VALIDATE_EMAIL)) {
      // $emailErr = "Email should be in proper fromat and no empty";
      // $email=$_POST["email"];
      // }
      // elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
      //   $emailErr="Inavlid Email Format";
      // } 
      // else {
        
      // }
    if (empty($_POST["dept_date"])) {
      $dept_dateErr = "Depature Date is required";
    }
     else {
      $dept_date=$_POST["dept_date"];
    }
    if (empty($_POST["passanger"])) {
      $passangerErr = "Passanger is required";
    } else {
      $passanger=$_POST["passanger"];
    }
    if (empty($_POST["class"])) {
        $classErr = "Class is required";
      } else {
        $class=$_POST["class"];
      }
  }
    // $mobile=$_POST["mobile"];
    // $pass=$_POST["password"];
    if(isset($dept_city) && $dept_city != "" && isset($arr_city) && $arr_city != "" && isset($dept_date) && $dept_date != "" && isset($passanger) && $passanger != ""  && isset($class) && $class != ""){
    $query="insert into booking (dept_city, arr_city, dept_date, passanger,class) values('{$dept_city}','{$arr_city}','{$dept_date}'    ,{$passanger},'{$class}')";
    if(mysqli_query($conn,$query)==1){
      $dept_city="";
      $arr_city="";
      $dept_date="";
      $passanger="";
      $class="";
      header("location:show_flight.php");
    }
  }
?>

<html>
  <head>
  <link rel="stylesheet" href="my.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <center>
    Registration Form
    </center>
  </head>
  <body>
    <center>
    <form action="user_home.php" method="POST" id="home">
      <table>
        <tr>
          <td>
             From:
          </td>
          <td>
            <input type="text" role="combobox" name="dept_city" value="<?php echo isset($dept_city) ? $dept_city : '';?>" required>
            <span style="color:red" class="error">* <?php echo $dept_cityErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            To:
          </td>
          <td>
            <input type="text" name="arr_city" value="<?php echo $arr_city;?>" required>
            <span style="color:red" class="error">* <?php echo $arr_cityErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Depart:
          </td>
          <td>
            <input type="date" name="dept_date" value="<?php echo $dept_date;?>" required>
            <span style="color:red" class="error">* <?php echo $dept_dateErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Passanger:
          </td>
          <td>
            <input type="number" name="passanger" id="passanger" required>
            <span style="color:red" class="error">* <?php echo $passangerErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Confirm Password:
          </td>
          <td>
            <select name="class" id="class">
                <option value="economy">Economy</option>
                <option value="business">Business</option>
                <option value="first">First</option>
            </select>
            <!-- <input type="password" name="co_pass" id="co_pass" required>
            <span style="color:red" class="error">*</span> -->
          </td>
        </tr>
          <tr>
            <td>
              <input type="submit" value="Show Flights" name="submit">
            </td>
          </tr>
        <!-- <tr>
            <td>
              Already a user?
            </td>
            <td>
              <a href="user_login.php">click Here</a>
            </td>
        </tr> -->
      </table>
    </form>
  </center>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#home').validate({
    messages:{
      dept_city:"Departure City is required",
      arr_city:"Arrival City is required",
      dept_date:"Departuere date is required",
      passanger:"Passanger is required",
      class:"Class is required"
    }
      })
    });
  </script>
  </body>
</html>