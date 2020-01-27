<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      emp_code:<input type="text" name="code"><br>
      emp_code_name:<input type="text" name="name"><br>
      emp_domain:<input type="text" name="domain"><br>
      <input type="submit" name="submit" value="Insert">
    </form>
    <?php
      if(isset($_POST['submit']))
      {
        include('db.php');
        mysqli_select_db($conn, "sql2");
        $code = $_POST['code'];
        $name = $_POST['name'];
        $domain = $_POST['domain'];
        $cmd = "INSERT into emp_code_table VALUES('$code','$name','$domain')";
        if ($result = mysqli_query($conn, $cmd)) {
          echo "Row added";
        }
      }
    ?>
  </body>
</html>
