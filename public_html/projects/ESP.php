<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ESP Sensor Project</title>
  <style>
    body {
      font-family: Monospace;
    }
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }
  
    th,
    td {
      text-align: left;
      padding: 16px;
    }
  
    tr:nth-child(even) {
      background-color: #f2f2f2
    }
    div {
      text-size: 25px; 
      width: 100%;
      /* text-align: justify;  */
      text-transform: uppercase;
      text-align: center;

    }
  </style>
</head>
<body>
<?php
$user = "forresth_sensor";
$pass = "f33dthesensor";
$host = "localhost";
$db = "forresth_ESPsensor";


$conn= new mysqli($host,$user,$pass, $db); //server,username,pass,databse

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

//pull data from table
$result =mysqli_query($conn, "SELECT * FROM ESPtable");//table select

echo "<div> <b> ESP8266 Moisture Sensor Project</b> </div";
echo "<br>";
//draw a table using PHP
echo "<table border='3'>
<tr>
<th>Device ID</th>
<th>Moisture Sensor Data (above 120 is wet)</th>
<th>Last Measurement</th>
</tr>";

//loop through the table and print out the data into the table
while($row = mysqli_fetch_array($result)){
  echo "<tr>";
  $unit_id = $row['id'];
  echo "<td>" . $row['id'] . "</td>"; //display module ID
  echo "<td>" . $row['SENSOR'] . "</td>"; // display sensor data
  echo "<td>" . $row['time'] . "</td>"; 


}//while

echo "</table>"; 
?>
  
</body>
</html>