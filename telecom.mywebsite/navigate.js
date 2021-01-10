'use strict';
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function navigate() {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById("bottomNav");
    if(x.className === "topnav") {
      x.className += " responsive";
      y.className += " socialmove";
    }
    else {
      x.className = "topnav";
      y.className = "footer-social-icons";
    }
  }
