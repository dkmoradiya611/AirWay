  <?php
  require("dbconnect.php");  

  $dept_city = $arr_city = $dept_date ="";
  $dept_cityErr = $arr_cityErr = $dept_dateErr ="";
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["dept_city"])) {
      $dept_cityErr = "Departure city is required";
    }else{
      $dept_city=$_POST["dept_city"];
    }
    if (empty($_POST["arr_city"])) {
        $arr_cityErr = "Arrival city is required";
    }
      else{
        $arr_city=$_POST["arr_city"];
    }
    if (empty($_POST["dept_date"])) {
      $dept_dateErr = "Depature Date is required";
    }
     else {
      $dept_date=$_POST["dept_date"];
    }
    if($dept_cityErr == "" && $arr_cityErr=="" && $dept_dateErr==""){
      if (isset($_POST["dept_city"]) && $_POST["dept_city"] != '') {
        $dept_city = mysqli_real_escape_string($conn, $_POST["dept_city"]);
        $search_from = " AND from_city LIKE '%$dept_city%'";
      }
      if (isset($_POST["arr_city"]) && $_POST["arr_city"] != '') {
          $arr_city = mysqli_real_escape_string($conn, $_POST["arr_city"]);
          $search_to = " AND to_city LIKE '%$arr_city%'";
      }
      if (isset($_POST["dept_date"]) && $_POST["dept_date"] != '') {
          $dept_date = mysqli_real_escape_string($conn, $_POST["dept_date"]);
          $search_date = " AND date_dep LIKE '%$dept_date%'";
      }

      $sql = "SELECT * FROM flights WHERE id > 0" . $search_from . $search_to . $search_date;
      $result = mysqli_query($conn, $sql);
    }
  } else{
    $query="select * from flights";
    $result=mysqli_query($conn,$query);
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
      <h2>Search Fight</h2>
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
            <input type="text" name="dept_date" id="dept_date" autocomplete="off" value="<?php echo $dept_date;?>" required>
            <span style="color:red" class="error">* <?php echo $dept_dateErr;?></span>
          </td>
        </tr>
          <tr>
            <td>
              <input type="submit" value="Search Flights" name="submit">
            </td>
          </tr>
      </table>
    </form>

    <h1>Flights List</h1>
    <a href="booking.php" class="btn-link">Book Now</a>
        <table align = "center" border = "3" cellpadding = "3" cellspacing = "2">
            <tr>
                <th>Departure City</th>
                <th>Arrival City</th>
                <th>Departure Date</th>
                <th>Departure Time</th>
             </tr>
            <?php
            while ($row = $result->fetch_assoc()) 
            {
            ?> 
            <tr>
                <td><?php echo $row["from_city"]; ?> </td>
                <td><?php echo $row["to_city"]; ?> </td>
                <td><?php echo $row["date_dep"]; ?> </td>
                <td><?php echo $row["time"]; ?> </td>
            </tr>
            <?php } ?>
        </table>
  </center>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#home').validate({
        messages:{
          dept_city:"Departure City is required",
          arr_city:"Arrival City is required",
          dept_date:"Departuere date is required",
        }
      });
      $( "#dept_date" ).datepicker({ 
        dateFormat: 'yy-mm-dd',
        minDate:-0 
      });
    });
  </script>
  </body>
</html>
