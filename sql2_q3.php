<?php
  include('db.php');
  mysqli_select_db($conn, "sql2");
  $cmd = "SELECT emp_code_name FROM emp_details_table,emp_code_table,emp_salary_table WHERE emp_details_table.graduation_percentile<70 and emp_code_table.emp_code=emp_salary_table.emp_code and emp_salary_table.emp_id=emp_details_table.emp_id";
  if (
    $result = mysqli_query($conn, $cmd)

  ) {
    // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "Code name:".$row["emp_code_name"]."<br>";
     }
  }
  else {
     echo "0 results";
  }
?>
