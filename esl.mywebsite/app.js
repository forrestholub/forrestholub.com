'use stric';

var firstB = document.getElementById('firstBox');
var secondB = document.getElementById('secondBox');
var thirdB = document.getElementById('thirdBox');

var firstAudio = document.getElementById('audio1');
var secondAudio = document.getElementById('audio2');
var thirdAudio = document.getElementById('audio3');

var audio = document.getElementsByClassName('audio');
console.log(typeof(audio));
console.log(audio); 

firstAudio.play();

// function allAudio(){
// for (var i in audio.length){
// audio[i].preload = "auto"; 
// alert("Something went wrong during audio playback. Error: " + audio[i].error.code); 
// }
// }

// allAudio();

function handleFirst(event){

}
// function handleSecond(event) {
// secondAudio.play();
// }
// function handleThird(event) {
//   thirdAudio.play();
// }

firstB.addEventListener('click', handleFirst);
// secondB.addEventListener('click', handleSecond);
// thirdB.addEventListener('click', handleThird);

