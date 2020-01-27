<?php
  include('db.php');
  mysqli_select_db($conn, "sql2");
  echo "Table emp_salary==>";
  $cmd = "SELECT emp_id,emp_salary,emp_code FROM emp_salary_table";
  if ($result = mysqli_query($conn, $cmd)) {
    // output data of each row
    echo "<table>";
    echo "<th>emp_id</th>";
    echo "<th>emp_salary</th>";
    echo "<th>emp_code</th>";
     while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>".$row["emp_id"]."</td>";
       echo "<td>".$row["emp_salary"]."</td>";
       echo "<td>".$row["emp_code"]."</td>";
       echo "</tr>";
     }
     //echo "/table";
  }
  else {
     echo "0 results";
  }
?>
