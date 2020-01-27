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

//create database
$sql = "CREATE DATABASE sql1";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
}
else {
  echo "Error creating database: " . $conn->error;
}

// sql to create table
mysqli_select_db($conn, "sql1");
$sql = "CREATE TABLE match_detail (
Venue INT(20),
Date_of_match DATE,
Team_1_name VARCHAR(20),
Team_2_name VARCHAR(20),
Toss_won VARCHAR(20),
Match_won VARCHAR(20),
)";

if (mysqli_query($conn, $sql)) {
    echo "Table match_detail created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create table
mysqli_select_db($conn, "sql1");
$sql = "CREATE TABLE team_detail (
Team_1_name VARCHAR(20),
Team_2_name VARCHAR(20),
Captain_1_name VARCHAR(20),
Captain_2_name VARCHAR(20),
)";

if (mysqli_query($conn, $sql)) {
    echo "Table team_detail created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
