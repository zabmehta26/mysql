<?php
  include('db.php');
  mysqli_select_db($conn, "sql2");
  $cmd = "SELECT emp_id FROM emp_salary_table left join emp_code_table on emp_code_table.emp_code=emp_salary_table.emp_code and emp_code=null";
  if (
    $result = mysqli_query($conn, $cmd)

  ) {
    // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "Domain:".$row["emp_domain"]." || "."Total Salary:".$row["total_sal"]."<br>";
     }
  }
  else {
     echo "0 results";
  }
?>
