<html>
  <head>
    <style type="text/css">
      table, th, td {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
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
  echo "Table detail==>";
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
