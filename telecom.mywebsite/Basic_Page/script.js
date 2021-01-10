'use strict';
 let counter = 1;
 let delay = 5;
 console.log(delay);
 console.log(counter);
 
 setInterval(() => {
   document.querySelector('h1').innerText = counter;
   counter++;
   if (counter > delay) location.reload();
 }, 1000);

// function start_fresh(delay) {
// let counter=1;
// let sec=5;
    // setInterval(() => {
        // document.querySelector('h1').innerText = counter;
        // counter++;
        // if (counter > sec ) location.reload();
    // }, 1000);
// }
// 