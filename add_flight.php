<?php
  require("dbconnect.php");  

  $dept_city = $arr_city = $dept_date =$time = "";
  date_default_timezone_set('Asia/Kolkata'); 
  // $time=date('H:i');
  $dept_cityErr = $arr_cityErr = $dept_dateErr = $timeErr="";
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
    if (empty($_POST["dept_date"])) {
      $dept_dateErr = "Depature Date is required";
    }
     else {
      $dept_date=$_POST["dept_date"];
    }
    if (empty($_POST["time"])) {
      $timeErr = "Passanger is required";
    } else {
      $time=$_POST["time"];
    }
  }
    if(isset($dept_city) && $dept_city != "" && isset($arr_city) && $arr_city != "" && isset($dept_date) && $dept_date != "" && isset($time)){
    $query="insert into flights (from_city,to_city,date_dep,time) values('{$dept_city}','{$arr_city}','{$dept_date}','{$time}')";
    if(mysqli_query($conn,$query)==1){
      $dept_city="";
      $arr_city="";
      $dept_date="";
      $time="";
    }
  }
?>

<html>
  <head>
  <link rel="stylesheet" href="my.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
    <center>
    Add Flights
    </center>
  </head>
  <body>
    <center>
    <form action="add_flight.php" method="POST" id="home">
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
            Depart Date:
          </td>
          <td>
            <input type="date" name="dept_date" value="<?php echo $dept_date;?>" required>
            <span style="color:red" class="error">* <?php echo $dept_dateErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Time:
          </td>
          <td>
            <input type="time" name="time" id="time" value="<?php echo date('H:i');?>" required>
            <span style="color:red" class="error">* <?php echo $timeErr;?></span>
          </td>
        </tr>
            <td>
              <input type="submit" value="Add Flights" name="submit">
            </td>
        </tr>
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
      time:"Time is required",
    }
      })
    });
  </script>
  </body>
</html>