function change(argument, argument1) {
      var vid = document.getElementById("myVideo");
      var cid = document.getElementById("myCaption");
      isSupp = vid.canPlayType("video/mp4");
      if (isSupp == "") {
        vid.src = "videos/" + argument;
        cid.innerHTML = argument1;
      } else {
        vid.src = "videos/" + argument;
        cid.innerHTML = argument1;
      }
    }