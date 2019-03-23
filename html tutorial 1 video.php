<?php   
session_start(); 
?>;

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>AI EDUTECH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>

  <title>Video.js | HTML5 Video Player</title>
    <link href="http://vjs.zencdn.net/5.19/video-js.css" rel="stylesheet">
    <script src="http://vjs.zencdn.net/ie8/1.1/videojs-ie8.min.js"></script>
    <script src="http://vjs.zencdn.net/5.19/video.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">AI EDUTECH</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="html.html">BACK</a></a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="jumbotron text-center">
  <h1>AI EDUTECH</h1> 
  <p>THE ULTIMATE LEARNING PACKAGE</p> 
  
  
  
    <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264" poster="http://vjs.zencdn.net/v/oceans.png" data-setup="{}">
    <source src="C:\xampp\htdocs\Ai_Edutech_trial_project\video js\video-js-6.4.0\examples\simple-embed\HTML Tutorial for Beginners - 00 - Introduction to HTML.mp4" type="video/mp4">

   <track kind="captions" src="C:\xampp\htdocs\Ai_Edutech_trial_project\video js\video-js-6.4.0\examples\simple-embed\HTML Tutorial for Beginners - 00 - Introduction to HTML [English].vtt" srclang="en" label="English" default>
    <!-- Tracks need an ending tag thanks to IE9 -->
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
  </video>
<script type="text/javascript">


  function ajax_post_one(count,duration,tot_time,arr){
    // Create our XMLHttpRequest object 
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "my_parse_file_one.php";
    //var fn = document.getElementById("first_name").value;
 
    var num_pause = count;
    var tt = tot_time;
    var time_arr=arr;
    var dur = duration;
    
    //alert(time_arr);
    // the variable names can be changed and will be fixed later only in the php 
    var vars = "count="+num_pause+"&tot_time="+tt+"&arr="+time_arr+"&duration="+dur;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}

/////// /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
function ajax_post_two(pause_t,arr){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "my_parse_file_two.php";
    //var fn = document.getElementById("first_name").value;
    var t = pause_t;
    var time_arr=arr;
    var vars  = "pause_t="+t+"&time_arr="+time_arr;
    hr.open("POST", url, true);
    
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function ajax_post_three(duration){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "my_parse_file_three.php";
    //var fn = document.getElementById("first_name").value;
    var dur = duration;
    var vars = "duration="+dur;
    hr.open("POST", url, true);
    
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
        if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    document.getElementById("status").innerHTML = "processing...";
}
*/
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
  $(document).ready(function(){
    var player = videojs('example_video_1');
    var pause_t=0;
    var tot_time=0;
        var duration=0;
        var count=0;
        var minutes = 0;   
      var seconds = 0;
      var x = 0;
      var y = 0;
        //var arr = new Array();
        var arr=[];
    player.ready(function() {
        //alert("Working");
    });

    player.on("pause",function(){
       //var time = player.currentTime();
      //////////////////////////////////pause_t = parseInt(player.currentTime());
       pause_t = parseInt(player.currentTime());
       //alert(pause_t)
             minutes = Math.floor(pause_t / 60);   
         seconds = Math.floor(pause_t - minutes * 60)
           x = minutes < 10 ? "0" + minutes : minutes;
         y = seconds < 10 ? "0" + seconds : seconds;
          
       tot_time=tot_time + pause_t;
            //alert(pause_t);
             arr.push( x + ":" + y) ;
             //arr= arr.push(pause_t);
             //alert(arr);  

           //ajax_post_two(pause_t,arr);
    });
    

        player.on("play",function(){
      //alert("Running");
    });

        player.on("play",function(){
           count=count+1;
            //alert(count); 
        });
    //This tells the total duration of the video... 
    player.one('loadedmetadata', function() {
    //var duration = player.duration();
        duration = player.duration();
           // ajax_post_three(duration);
    });

     var video = videojs('example_video_1').ready(function(){
       var player = this;
    player.on('ended', function() {
            //alert(count);
            //alert(duration);
            
            //calling session id of user from php directly in js...
            ajax_post_one(count,duration,tot_time,arr);
     });
    });


        

  });
</script>
<p> Status down here</p>
<div id="status"></div>

  
  
  
  
  
  <!--testbutton-->
<div id="about" class="container-fluid">

   <button id="myBtn" class="btn btn-default btn-lg">TEST</button>
  <script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = 'phpquiz1.php';
    });
  </script>
  
</div>  
  

<?php
echo $_SESSION['sess_id']; 
?>

    </body>
  </html>