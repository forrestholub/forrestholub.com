<?php
require 'vendor/autoload.php';
$user = "forresth_sensor";
$pass = "f33dthesensor";
$host = "localhost";
$db = "forresth_spotify";

$session = new SpotifyWebAPI\Session(
    'CLIENT_ID',
    'CLIENT_SECRET',
    'REDIRECT_URI'
);

// Request a access token using the code from Spotify
$session->requestAccessToken($_GET['code']);

$accessToken = $session->getAccessToken();
$refreshToken = $session->getRefreshToken();

// Store the access and refresh tokens somewhere. In a database for example.
$conn=mysqli_connect($host,$user,$pass,$db); //server,username,pass,databse
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
mysqli_query($conn,"UPDATE spotify_table SET current_state = $accessToken WHERE id=1"); 
mysqli_query($conn,"UPDATE spotify_table SET next_state = $refreshToken WHERE id=1"); 
// Send the user along and fetch some data!
header('Location: app.php');
die();

?>