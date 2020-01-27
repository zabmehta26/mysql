<?php
  include('db.php');
  mysqli_select_db($conn, "sql2");
  echo "Table emp_details==>";
  $cmd = "SELECT emp_id,emp_first_name,emp_last_name,graduation_percentile FROM emp_details_table";
  if ($result = mysqli_query($conn, $cmd)) {
    // output data of each row
    echo "<table>";
    echo "<th>emp_id</th>";
    echo "<th>emp_first_name</th>";
    echo "<th>emp_last_name</th>";
    echo "<th>graduation_percentile</th>";
     while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>".$row["emp_id"]."</td>";
       echo "<td>".$row["emp_first_name"]."</td>";
       echo "<td>".$row["emp_last_name"]."</td>";
       echo "<td>".$row["graduation_percentile"]."</td>";
       echo "</tr>";
     }
     //echo "/table";
  }
  else {
     echo "0 results";
  }
?>
