function playPause() { 
  var video = document.getElementById("myVideo");
  if (video.paused) 
      video.play(); 
  else 
      video.pause(); 
}

function reload() { 
  var video = document.getElementById("myVideo");
  video.load(); 
}

function fullScreenEnter() {
  var video = document.getElementById("myVideo");
  // Mozilla
  video.mozRequestFullScreen();
  // Webkit for video elements only
  video.webkitEnterFullScreen();
}

function fullScreenExit() {
  var video = document.getElementById("myVideo");
  // Mozilla
  video.mozCancelFullScreen();
  // Webkit
  video.webkitCancelFullScreen();
}


/*
function makeLarge() { 
  var video = document.getElementById("myVideo");
  video.width = 1000; 
}

function makeSmall() { 
  var video = document.getElementById("myVideo");
  video.width = 250; 
} 

function makeNormal() { 
  var video = document.getElementById("myVideo");
  video.width = 500; 
} 
*/