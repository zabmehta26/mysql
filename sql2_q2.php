<?php
  include('db.php');
  mysqli_select_db($conn, "sql2");
  $cmd = "SELECT emp_last_name FROM emp_details_table WHERE emp_details_table.graduation_percentile>70";
  if (
    $result = mysqli_query($conn, $cmd)

  ) {
    // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "last name:".$row["emp_last_name"]."<br>";
     }
  }
  else {
     echo "0 results";
  }
?>
