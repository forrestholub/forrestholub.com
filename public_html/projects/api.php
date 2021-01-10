<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>API Fun</title>
  <link rel="stylesheet" type="text/css" href="C:\Users\Forrest Holub\documents\javascript\public_html\navigate.css">
  </head>
  
  <body>
    <script src="C:\Users\Forrest Holub\documents\javascript\public_html\navigate.js"></script>
  
    <div class="topnav" id="myTopnav">
      <a href="index.html">Home</a>
      <a href="gallery.html">Gallery</a>
  
      <div class="dropdown" >
        <button class="dropbtn">Projects</button>
        <div class="dropdown-content" >
          <a href="projects/ESP.php">Soil Moisture Control</a>
          <a href="projects/api.php" class="active">API Fun</a>
        </div>
      </div>
      <a href="about.html" > About</a>
      <a href="resume.html">Resume </a>
      <a href="contact.php">Contact</a>
      <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="navigate()">&#9875;</a>
    </div>

<?php 
        // create curl resource
        // $authorization = "BQC7Va-TdK9FB3Hi-PQZrKw3KHhcTLNSrDRjBhpFznA5_Pf9otoEa-qxGPDeJz2h5ol0MpVUEuO5NrTpRZXvjTLcEX_KmznScqX4R0HRixsYaVevwGmY9MCsw9Ae7N3a3yrktEGqycK37XUzceKfehTuDtJ2S6D2rKdlmNXuE_pB2ugXqBqQA0NNbBkhju8C8ZZPllvPZrccRCYvkHOIbLIT-xhXnxbOSq005UDyoWKFX3uGX6bWcsgEsmfcg8RjxU4FEA_Lt8M7tXs";
        // $base_URL=  "https://api.spotify.com/v1";
        // $id= "Drake";
        // $artistsEndpoint ="/artists/{$id}"; // = http://api.spotify.com/v1/artists/Drake
        // $full_URL = $base_URL . $artistsEndpoint; // that's how you add two strings together with '.'
        // echo "<br>";
        // echo "$full_URL"; 
        // echo "<br>"; 

//Endpoint	https://api.spotify.com/v1/me/player/recently-played
//HTTP Method	GET
//access token must have the 'user-read-recently-played'
?>

</body>
</html>