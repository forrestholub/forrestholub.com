<?php
$user = "forresth_sensor";
$pass = "f33dthesensor";
$host = "localhost";
$db = "forresth_ESPsensor";


foreach($_REQUEST as $key =>$value){
  if ($key=='unit'){
    $unit = $value;
  }
  if ($key=='sensor'){
    $sensor = $value;
  }
}// for each

$conn=mysqli_connect($host,$user,$pass,$db); //server,username,pass,databse

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

//lets get the time from the internet
date_default_timezone_set("America/Los_Angeles");
$t1 =date("h:i:sa"); 

mysqli_query($conn,"UPDATE ESPtable SET SENSOR = $sensor WHERE id=$unit"); 
mysqli_query($conn,"UPDATE ESPtable SET time = CURRENT_TIMESTAMP WHERE id=$unit"); 

//pull data from table
$result =mysqli_query($conn, "SELECT * FROM ESPtable");//table select

//loop through the table and pick out the id and sensor label to read back to ESP (if you want to)
while($row = mysqli_fetch_array($result)){
  if($row['id']==$unit){
    $d1 = $row['SENSOR'];
    
    echo "_t1$t1##_d1$d1##";
  }
}

if ($sensor < 100){//set alarm as text if sensor reading is too low (needs watering)
  mail("9729993926@vtext.com", "ALARM", "Sensor=$sensor","Unit=$unit"); // address,subject,body,from signature
}
?>
