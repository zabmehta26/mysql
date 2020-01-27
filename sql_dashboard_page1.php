<html>
  <head>
    <style type="text/css">
      table, th, td {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>

          <a href="sql_dashboard_page1.php"><button style="background-color:blue;margin-left:49%;margin-right:10px;">1</button></a>
          <a href="sql_dashboard_page2.php"><button>2</button></a>
          <br>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
if ($conn) {
  echo "Connection created successfully<br>";
}
else{
  echo "Error". mysqli_connect_error();
}

  mysqli_select_db($conn, "myDB");
  echo "Table detail from database myDB==>";
  $cmd = "SELECT firstname,lastname,phone_no,email,img_url FROM detail";
  if ($result = mysqli_query($conn, $cmd)) {
    // output data of each row
    echo "<table>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Phone N0.</th>";
    echo "<th>Email</th>";
    echo "<th>Img URL</th>";
     while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>".$row["firstname"]."</td>";
       echo "<td>".$row["lastname"]."</td>";
       echo "<td>".$row["phone_no"]."</td>";
       echo "<td>".$row["email"]."</td>";
       echo "<td><a href=".$row['img_url'].">".$row["img_url"]."</a></td>";
       echo "</tr>";
     }
     //echo "/table";
  }
  else {
     echo "0 results";
  }
?>
</body>
</html>
