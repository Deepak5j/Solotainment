<!DOCTYPE html>
<html lang="en">
<head>
  <title>Solotainment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="main.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script--> 
  <!-- Activity Feed -->
    <!--combine -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--motion -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--motion -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <!--1. Top Header-->
  <div class="jumbotron text-center" id="header">
    <img src="images/solotainment-logo.png" width="10%" height="10%">
    <h1 style="color:   #26B7AC">SOLOTAINMENT</h1>
    <p style="color: #26a7AC">The Home of Entertainment for Sololearner</p> 
  </div>

  <!--2. navigation bar-->
  <nav class="navbar-inverse" >
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a href="https://www.sololearn.com/Profile/4687793" target="_blank">
          <img class="img-circle" align="left" src="images/skull.jpg" width="10%" height="11%" style="margin:2%;">
        </a>  
      </div>
      <div class="collapse navbar-collapse" id="myNavbar" >
        <ul class="nav navbar-nav" >
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="https://github.com/Deepak5j/" target="_blank">Projects</a></li>
          <li><a href="#cont">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!--main body-->
  <div class="container-fluid text-center" id="bbody">
    <br>
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <div class="well bbtn">
              <a href="index.html" class="btn-block btn btn-default"> Home</a>
              <button class="btn-block btn btn-info">Iron Man</button>              
              <button class="btn-block btn btn-success ">Iron Man 2</button>
              <button class="btn-block btn btn-warning">Iron Man 3</button>
            </div>          
        </div>
        <div class="col-sm-8 text-left"> 
            <div class="well well-lg text-justify">
                <h1 class="text-center">ACTIVITY FEED</h1>
                <div class="well">
                <!-- most main start-->
                   <video width="100%" height="100%" controls>
                      <source src="videos/mov_bbb.mp4" type="video/mp4">
                  </video>
                <!-- most main end-->
                </div>
            </div>
            <hr>
        </div>
    
    
    
        <!-- Ad section-->
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>ADS 1</p>
            </div>
            <div class="well">
                <p>ADS 2</p>
            </div>
            <div class="well">
                <p>ADS 3</p>
            </div>
        </div>
    
    </div>
</div>


<footer class="container-fluid bg-4 text-center" id="cont">
    <div id="glyphicon">
      <a href="mailto:gautamxdeepak@gmail.com"><span class="glyphicon glyphicon-envelope"></span></a>
    </div>
</footer>

</body>
</html>
