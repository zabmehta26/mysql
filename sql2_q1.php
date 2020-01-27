<?php
  include('db.php');
  mysqli_select_db($conn, "sql2");
  //$cmd = "SELECT emp_first_name FROM emp_details_table,emp_salary_table WHERE emp_salary_table.emp_salary>=50000 and emp_details_table.emp_id=emp_salary_table.emp_id";
$cmd="DELETE * from emp_details_table where emp_id='ru122'";
  if (
    $result = mysqli_query($conn, $cmd)

  ) {
    // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "first name:".$row["emp_first_name"]."<br>";
     }
  }
  else {
     echo "0 results";
  }
?>
