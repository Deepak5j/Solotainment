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

function toggleControls() { 
  var video = document.getElementById("myVideo");
  if (video.hasAttribute("controls")) {
    video.removeAttribute("controls");
  } else {
    video.setAttribute("controls","controls")
  }
}


/*
function makeLarge() { 
  var video = document.getElementById("myVideo");
  video.width = 1200;
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