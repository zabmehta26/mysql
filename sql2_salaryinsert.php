<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      emp_id:<input type="text" name="id"><br>
      emp_salary:<input type="text" name="salary"><br>
      emp_code:<input type="text" name="code"><br>
      <input type="submit" name="submit" value="Insert">
    </form>
    <?php
      if(isset($_POST['submit']))
      {
        include('db.php');
        mysqli_select_db($conn, "sql2");
        $code = $_POST['code'];
        $salary = $_POST['salary'];
        $id = $_POST['id'];
        $cmd = "INSERT into emp_salary_table VALUES('$id','$salary','$code')";
        if ($result = mysqli_query($conn, $cmd)) {
          echo "Row added";
        }
      }
    ?>
  </body>
</html>
