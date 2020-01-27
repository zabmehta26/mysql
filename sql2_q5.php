<?php
  include('db.php');
  mysqli_select_db($conn, "sql2");
  $cmd = "SELECT emp_domain,sum(emp_salary) as total_sal FROM emp_code_table,emp_salary_table WHERE emp_code_table.emp_code=emp_salary_table.emp_code group by emp_domain;";
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
