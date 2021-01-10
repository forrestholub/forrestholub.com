'use strict';

var Spotify = require('spotify-web-api-js');
var s = new Spotify();
//s.searchTracks()...

var spotifyApi = new SpotifyWebApi();

spotifyApi.setAccessToken('<here_your_access_token>');

spotifyApi.setPromiseImplementation(Q);

// using Promises through Promise, Q or when - get Elvis' albums in range [20...29]
spotifyApi.getArtistAlbums('43ZHCT0cAZBISjO8DG9PnE', { limit: 10, offset: 20 })
  .then(function (data) {
    console.log('Album information', data);
  }, function (err) {
    console.error(err);
  });