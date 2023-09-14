<?php
  require("dbconnect.php");  

  $dept_city = $arr_city = $dept_date =$passanger=$class="";
  //date_default_timezone_set('Asia/Kolkata'); 
  // $time=date('H:i');
  $dept_cityErr = $arr_cityErr = $dept_dateErr = $passangerErr=$classErr="";
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
    if (empty($_POST["passanger"])) {
      $passangerErr = "Passanger is required";
    } else {
      $passanger=$_POST["passanger"];
    }
    if (empty($_POST["class"])) {
        $classErr = "Class is required";
      }else{
        $class=$_POST["class"];
      }
  }
    if(isset($dept_city) && $dept_city != "" && isset($arr_city) && $arr_city != "" && isset($dept_date) && $dept_date != "" && isset($passanger) && $passanger != "" && isset($class) && $class  != ""){
        $que="select * from flights where from_city=$dept_city AND to_city=$arr_city AND date_dep=$dept_date";
        $result=mysqli_query($conn,$que);
        $rows=mysqli_fetch_row($result);
        if($rows>0){
            $query="insert into booking (dept_city,arr_city,dept_date,passanger,class) values('{$dept_city}','{$arr_city}','{$dept_date}','{$passanger}','{$class}')";
            if(mysqli_query($conn,$query)==1){
                $dept_city="";  
                $arr_city="";
                $dept_date="";
                $passanger="";
                $class="";
            }else{
              echo "Error inserting into booking table: " . mysqli_error($conn);
            }
        }else{
          echo "No flights found for the specified criteria.";
        }
    }
?>

<html>
  <head>
  <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
  <link rel="stylesheet" href="my.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" > </script>
    <center>
    <h2>Book Flights</h2>
    </center>
  </head>
  <body>
    <center>
    <form action="booking.php" method="POST" id="booking">
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
            <input type="text" name="dept_date" id="dept_date" autocomplete="off" value="<?php echo $dept_date;?>" required>
            <span style="color:red" class="error">* <?php echo $dept_dateErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Passanger:
          </td>
          <td>
            <input type="number" name="passanger" id="passanger" value="<?php echo $passanger;?>" required>
            <span style="color:red" class="error">* <?php echo $passangerErr;?></span>
          </td>
        </tr>
        <tr>
          <td>
            Class:
          </td>
          <td>
            <select name="class" id="class" value="<?php echo $class?>" required>
                <option value="economy" <?php if ($class == 'economy') echo 'selected'; ?>>Economy</option>
                <option value="business" <?php if ($class == 'business') echo 'selected'; ?>>Business</option>
                <option value="first" <?php if ($class == 'first') echo 'selected'; ?>>First</option>
                <!-- <option value="economy">Economy</option>
                <option value="business">Business</option>
                <option value="first">First</option> -->
            </select>
            <span style="color:red" class="error">* <?php echo $classErr;?></span>
          </td>
        </tr>
            <td>
              <input type="submit" value="Book Flight" name="submit">
            </td>
        </tr>
      </table>
    </form>
  </center>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#booking').validate({
    messages:{
      dept_city:"Departure City is required",
      arr_city:"Arrival City is required",
      dept_date:"Departuere date is required",
      passanger:"Passanger is required"
    }
      });
      $( "#dept_date" ).datepicker({ 
        dateFormat: 'yy-mm-dd',
        minDate:0 
      });
    });
  </script>
  </body>
</html>