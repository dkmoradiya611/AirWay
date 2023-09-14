<?php
    require("dbconnect.php");

  

?>


<html>
<body style="background-color:#F379F2;">
        </body>
</html>


<?php
      $query="select * from users";
      $result=mysqli_query($conn,$query);
      
        echo"<center><fieldset><legend>User Detail</legend><table border='1'>";
        echo"<tr><td>id</td><td>UserName</td><td>Gmail</td><td>Mobile</td><td>Password</td><td colspan=2>Action</td></tr>";
        while ($r=mysqli_fetch_array($result)) {
        echo "<tr><td>".$r["id"]."</td><td>".$r["username"]."</td><td>".$r["email"]."</td><td>".$r["mobile"]."</td><td>".$r["password"]."</td><td><a href='editmodule.php'>edit</a></td></tr>";
        
      }
      echo"</table></fieldset></center>";

?>