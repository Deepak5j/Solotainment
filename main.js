function change(argument, argument1, argument2) {
  var vscr = document.getElementById("myVideo"); //for video source
  var cid = document.getElementById("myCaption"); //for setting video title
  //var u  = "images/"+ argument2;
  /*document.getElementById("video_poster").style.backgroundImage="url("+u+")";*/
  //vid.poster = "images/"+ argument2;
  vscr.src = argument;
  cid.innerHTML = argument1;
  
}
