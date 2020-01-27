<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      emp_id:<input type="text" name="id"><br>
      emp_first_name:<input type="text" name="first"><br>
      emp_last_name:<input type="text" name="last"><br>
      graduation_percentile:<input type="text" name="percent"><br>
      <input type="submit" name="submit" value="Insert">
    </form>
    <?php
      if(isset($_POST['submit']))
      {
        include('db.php');
        mysqli_select_db($conn, "sql2");
        $percent = $_POST['percent'];
        $first = $_POST['first'];
        $last = $_POST['last'];
        $id = $_POST['id'];
        $cmd = "INSERT into emp_details_table VALUES('$id','$first','$last','$percent')";
        if ($result = mysqli_query($conn, $cmd)) {
          echo "Row added";
        }
      }
    ?>
  </body>
</html>
