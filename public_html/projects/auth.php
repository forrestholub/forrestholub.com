<?php
  require 'vendor/autoload.php';

$session = new SpotifyWebAPI\Session(
    'b0fd2e0f07ce4bd4a6dfedb6a9bcfb50',
    '8d71d2d5b2734354843b1b3151c27b14',
    'REDIRECT_URI'
); // (client id, client secret, redirect uri)

$options = [
    'scope' => [
        'playlist-read-private',
        'user-read-private',
        'user-read-recently-played',
    ],
];

header('Location: ' . $session->getAuthorizeUrl($options));
die();

?>