<?php
  include('db.php');
  mysqli_select_db($conn, "sql2");
  echo "Table emp_code==>";
  $cmd = "SELECT emp_code,emp_code_name,emp_domain FROM emp_code_table";
  if ($result = mysqli_query($conn, $cmd)) {
    // output data of each row
    echo "<table>";
    echo "<th>emp_code</th>";
    echo "<th>emp_code_name</th>";
    echo "<th>emp_domain</th>";
     while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>".$row["emp_code"]."</td>";
       echo "<td>".$row["emp_code_name"]."</td>";
       echo "<td>".$row["emp_domain"]."</td>";
       echo "</tr>";
     }
     //echo "/table";
  }
  else {
     echo "0 results";
  }
?>
