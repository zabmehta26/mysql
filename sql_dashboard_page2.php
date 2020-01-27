<html>
  <head>
    <style type="text/css">
      table, th, td {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>

          <a href="sql_dashboard_page1.php"><button style="margin-left:49%;margin-right:10px;">1</button></a>
          <a href="sql_dashboard_page2.php"><button style="background-color:blue;">2</button></a>
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

  mysqli_select_db($conn, "sql1");
  echo "Table detail from database sql1==>";
  $cmd = "SELECT venue,date,team_1,team_2,toss_favours,match_favours FROM detail";
  if ($result = mysqli_query($conn, $cmd)) {
    // output data of each row
    echo "<table>";
    echo "<th>Venue</th>";
    echo "<th>Date</th>";
    echo "<th>Team_1</th>";
    echo "<th>Team_2</th>";
    echo "<th>Toss_favours</th>";
    echo "<th>Match_favours</th>";
     while($row = mysqli_fetch_assoc($result)) {
       echo "<tr>";
       echo "<td>".$row["venue"]."</td>";
       echo "<td>".$row["date"]."</td>";
       echo "<td>".$row["team_1"]."</td>";
       echo "<td>".$row["team_2"]."</td>";
       echo "<td>".$row["toss_favours"]."</td>";
       echo "<td>".$row["match_favours"]."</td>";
       echo "</tr>";
     }
     //echo "/table";
  }
  else {
     echo "0 results";
  }
?>
<br>
<br>
</body>
</html>
