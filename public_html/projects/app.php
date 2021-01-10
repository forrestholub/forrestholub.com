
<?php
require 'vendor/autoload.php';
$user = "forresth_sensor";
$pass = "f33dthesensor";
$host = "localhost";
$db = "forresth_spotify";

$api = new SpotifyWebAPI\SpotifyWebAPI();

// Fetch the saved access token from somewhere. A database for example.
$result =mysqli_query($conn, "SELECT * FROM spotify_table");//table select

//loop through the table and pick out the id and sensor label to read back to ESP (if you want to)
while($row = mysqli_fetch_array($result)){
  if($row['id']=='1'){
    $accessToken = $row['current_state'];
    $refreshToken = $row['next_state'];
    
    // echo "$accessToken";
    // echo "$refreshToken";
  }
}
$api->setAccessToken($accessToken);

// It's now possible to request data about the currently authenticated user
print_r(
    $api->me()
);

// Getting Spotify catalog data is of course also possible
print_r(
    $api->getTrack('7EjyzZcbLxW7PaaLua9Ksb')
);

?>