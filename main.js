function change(argument, argument1, argument2) {
      var vid = document.getElementById("myVideo");
      var cid = document.getElementById("myCaption");
      vid.poster = "images/"+ argument2;
      isSupp = vid.canPlayType("video/mp4");
      if (isSupp == "") {
        vid.src = argument;
        cid.innerHTML = argument1;
      } else {
        vid.src = argument;
        cid.innerHTML = argument1;
      }
    }
