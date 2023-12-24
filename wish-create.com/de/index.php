<?php
session_start();
?>
<html>

<!-- Mirrored from wish-create.com/de/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Dec 2023 18:46:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex" />
    <meta name="google" content="notranslate" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta property="og:site_name" content="Create Wish" />
    <meta property="og:image" content="img/msg.png" /> 
<title>[Your Name] send you a Surprise Message 💌. Open This Once</title>
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<style>
      body{
        background: #fff;
      }
      .mainContainer {
        background: url(images/.html);
        max-width: 450px;
        min-height: 200px;
        margin: 0 auto;
        text-align: center;
        padding: 15px;
        color: #999;
        padding-bottom: 60px;

        box-shadow: 0 0 10px 1px rgba(0,0,0,.14), 0 1px 14px 2px rgba(0,0,0,.12), 0 0 5px -3px rgba(0,0,0,.3);
        background-size: 100%;
      }
#username {
     color: black;  /* Fallback: assume this color ON TOP of image */
   background: url(img/sname.gif);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
          animation: swing 4s infinite;
            text-transform: uppercase;
          margin-bottom: 5px;
          font-size: 35px;
          padding: 0 10px; 
    font-family: 'SF Espresso Shack', cursive;
} 

#usernameb { color: black;  /* Fallback: assume this color ON TOP of image */
   background: url(img/sname.gif);
   -webkit-background-clip: text;
   -webkit-text-fill-color: transparent;
          animation: swing 4s infinite;
            text-transform: uppercase;
          margin-bottom: 5px;
          font-size: 25px;
          padding: 0 10px;
    font-family: 'SF Espresso Shack', cursive;
}
     
      .wishMessage {
        color: #fff;
        width: 90%;
        font-size: 22px;
        font-weight: bold;
        margin-top: 20px;
        text-shadow: 0px 0px 10px #afafaf;
      }
      .wishMessage p{
        margin: 0.3em 0;
      }@keyframes bounceIn{0%,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1); color:#FF9933;}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03); color: #fff;}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97);}to{opacity:1;-webkit-transform:scaleX(1);transform:scaleX(1)}}    
      
.demo {
        font-size: 11; font-weight: none;color: #98201f;
        animation: flash 0s infinite;
      }
      </style>
<script src="../../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="slide.js" type="text/javascript"></script>  
<script type="text/javascript">
$(document).ready(function() { $curtainopen = false; $(".rope").click(function(){ $(this).blur(); if ($curtainopen == false){ $(this).stop().animate({top: '-171%' }, {queue:false, duration:350, easing:'easeOutBounce'}); $(".leftcurtain").stop().animate({width:'1px'}, 2000 ); $(".rightcurtain").stop().animate({width:'1px'},2000 ); $curtainopen = true; }else{ $(this).stop().animate({top: '-40px' }, {queue:false, duration:350, easing:'easeOutBounce'}); document.write(''); $(".leftcurtain").stop().animate({width:'50%'}, 2000 ); $(".rightcurtain").stop().animate({width:'51%'}, 2000 ); $curtainopen = false; } return false; }); });
</script>
<style type="text/css">
      *{
        margin:0;
        padding:0;
      }
      body {
        text-align: center;
        
      }
      img{
      border: none;
    }
.leftcurtain{
      width: 100%;
      height: 105%;
      top: 0px;
      left: 0px;
      position: absolute;
      z-index: 2;
    }
     .rightcurtain{
      width: 100%;
      height: 105%;
      right: 0px;
      top: 0px;
      position: absolute;
      z-index: 3;
    }
    .rightcurtain img, .leftcurtain img{
      width: 100%;
      height: 100%;
    }
    .logo{
      margin: 0px auto;
      margin-top: 150px;
    }
.rope{
      position: absolute;
      top: 30px;
      left:0%;
      z-index: 4;
    } 
.centered {
    position: absolute;
    top: 75%;
    left: 50%;
    transform: translate(-50%, -50%);
}
a.rope
{
    text-decoration:none;
}
.enter-name input[type=name] {
	background-color: #F2F919;
	color: black;
   	border-radius: 10px;
    	box-sizing: border-box;
    	border-color: blue;
    	padding: 15px;
    	position: fixed;
    	left: 10px;
    	bottom: 5px;
    	height: 50px;
    	width: 70%;
    	text-align: center;
    	font-size: 22px;
    	display: inline-block;
}

.enter-name .btn {
	border-radius: 10px;
    	font-size: 21px;
    	padding: 4px;
    	position: fixed;
    	right: 2px;
    	bottom: 5px;
    	height: 50px;
    	width: 23%;
    	display: inline-block;
    	color: black;
    	background-color: #10E43A;
    	border-color: black;
    	letter-spacing: .5px;
    	transition: .2s ease-out;
    	cursor: pointer;
    	line-height: 36px;
    	outline: 0;
    	text-transform: uppercase;
    	vertical-align: middle;
    	text-decoration: none;
    	animation-duration: 4s !important;
}

.enter-name input[type=name]::-webkit-input-placeholder { 
	color: black;
  	font-size: 18px;	
}

.enter-name input[type=name]::-moz-placeholder { 
	color: #eee;
  	font-size: 18px;
}

.enter-name input[type=name]:focus::-webkit-input-placeholder {
    color: #c0392b;
}

.enter-name input[type=name]:focus::-moz-placeholder { 
	color: #c0392b;
  	font-size: 18px;
}
#loading {
		-webkit-animation: rotation-star 15s infinite linear;
		animation: rotation-star 1.5s infinite linear;
}
@-webkit-keyframes rotation-star {
		from {
				-webkit-transform: rotate(0deg);
				 transform: rotate(0deg);
		}
		to {
				-webkit-transform: rotate(359deg);
				 transform: rotate(359deg);
		}
}

@-keyframes rotation-star{
    from {
         -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
    }
    to {
         -webkit-transform: rotate(359deg);
          transform: rotate(359deg);
    }
}
.m1{position:fixed;left:1%; width:auto;height:100%;top:1%;color:#000;}
.m2{position:fixed;right:1%; width:auto;height:100%;top:1%;color:#000;}  
#show-name {
  font-size: 25px;
  display: inline-block;
  margin-bottom: 5px;
  animation: swing 1s infinite, glow 20s infinite; }

@keyframes glow {
  0%, 100% {
    text-shadow: 0 0 30px red; }
  25% {
    text-shadow: 0 0 30px orange; }
  50% {
    text-shadow: 0 0 30px forestgreen; }
  75% {
    text-shadow: 0 0 30px cyan; } }
</style>

</head>
<body>
<div class="leftcurtain"><img src="img/prchr.png" /></div>
<div class="rightcurtain"><img src="img/prchr.png" /></div>
<a class="rope" href="#" onclick="PlaySound()">
<div style="font-size: 30px;text-shadow: 1px 1px 3px white, 1px 1px 3px white, -1px -1px 3px white, -1px -1px 3px white;color: red;font-weight: bold;"><br><b>Touch This<br></b></div> <img src="img/arrow1.gif" height="auto" width="70px" style="animation: tada 0s infinite"><br>
<img src="img/touch.png" width="35%" height="auto" style="animation: tada 4s infinite;"/>
</div>
</a>
<marquee class="m1" behavior="scroll" direction="up" scrolldelay="0"> <br>
<img src="img/mt1.png" height="25px" width="25px"/><br><br>
<img src="img/mt2.png" height="25px" width="25px"/><br><br>
<img src="img/mt3.png" height="25px" width="25px"/><br><br>
<img src="img/mt4.png" height="25px" width="25px"/><br><br>
<img src="img/mt5.png" height="25px" width="25px"/><br><br>
<img src="img/mt6.png" height="25px" width="25px"/><br><br>
<img src="img/mt7.png" height="25px" width="25px"/><br><br>
<img src="img/mt8.png" height="25px" width="25px"/><br><br>
<img src="img/mt1.png" height="25px" width="25px"/><br><br>
<img src="img/mt2.png" height="25px" width="25px"/><br><br>
<img src="img/mt3.png" height="25px" width="25px"/><br><br>
<img src="img/mt4.png" height="25px" width="25px"/><br><br>
<img src="img/mt5.png" height="25px" width="25px"/><br><br>
<img src="img/mt6.png" height="25px" width="25px"/><br><br>
<img src="img/mt7.png" height="25px" width="25px"/><br><br>
<img src="img/mt8.png" height="25px" width="25px"/><br><br>
<img src="img/mt1.png" height="25px" width="25px"/><br><br>
<img src="img/mt2.png" height="25px" width="25px"/><br><br>
<img src="img/mt3.png" height="25px" width="25px"/><br><br>
<img src="img/mt4.png" height="25px" width="25px"/><br><br>
<img src="img/mt5.png" height="25px" width="25px"/><br><br>
<img src="img/mt6.png" height="25px" width="25px"/><br><br>
<img src="img/mt7.png" height="25px" width="25px"/><br><br>
<img src="img/mt8.png" height="25px" width="25px"/><br><br>
</marquee>
<marquee class="m2" behavior="scroll" direction="down" scrolldelay="0"> <br>
<img src="img/mt1.png" height="25px" width="25px"/><br><br>
<img src="img/mt2.png" height="25px" width="25px"/><br><br>
<img src="img/mt3.png" height="25px" width="25px"/><br><br>
<img src="img/mt4.png" height="25px" width="25px"/><br><br>
<img src="img/mt5.png" height="25px" width="25px"/><br><br>
<img src="img/mt6.png" height="25px" width="25px"/><br><br>
<img src="img/mt7.png" height="25px" width="25px"/><br><br>
<img src="img/mt8.png" height="25px" width="25px"/><br><br>
<img src="img/mt1.png" height="25px" width="25px"/><br><br>
<img src="img/mt2.png" height="25px" width="25px"/><br><br>
<img src="img/mt3.png" height="25px" width="25px"/><br><br>
<img src="img/mt4.png" height="25px" width="25px"/><br><br>
<img src="img/mt5.png" height="25px" width="25px"/><br><br>
<img src="img/mt6.png" height="25px" width="25px"/><br><br>
<img src="img/mt7.png" height="25px" width="25px"/><br><br>
<img src="img/mt8.png" height="25px" width="25px"/><br><br>
<img src="img/mt1.png" height="25px" width="25px"/><br><br>
<img src="img/mt2.png" height="25px" width="25px"/><br><br>
<img src="img/mt3.png" height="25px" width="25px"/><br><br>
<img src="img/mt4.png" height="25px" width="25px"/><br><br>
<img src="img/mt5.png" height="25px" width="25px"/><br><br>
<img src="img/mt6.png" height="25px" width="25px"/><br><br>
<img src="img/mt7.png" height="25px" width="25px"/><br><br>
<img src="img/mt8.png" height="25px" width="25px"/><br><br>
</marquee>
<div class="mainContainer" id="mainContainer">
<center>
<script async src="../../securepubads.g.doubleclick.net/tag/js/f.txt"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/22983154292/ca-pub-5582422846661551-tag/ad1', [320, 50], 'div-gpt-ad-1693310397764-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /22983154292/ca-pub-5582422846661551-tag/ad1 -->
<div id='div-gpt-ad-1693310397764-0' style='min-width: 320px; min-height: 50px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1693310397764-0'); });
  </script>
</div>
</center>
<br>

<h1 id="username" style="font-family:SF Espresso Shack;">
  [Your Name]
</h1>
        <h3 class="fromMessage" id="fromMessage"></h3><br>

<img src="img/wishing1.png" width="50%" height="auto" style="animation: tada 4s infinite;"/><br><br>
<div style="font-size: 18px; font-weight: 800; color:black;">
<p id="demo"></p>
</div>
<img src="img/christmas_main_4.png" width="80%" height="auto%" style="animation: pulse 1.5s infinite;"/>

<center><div class="w3-content w3-section" style="max-width:500px">
<img class="mySlides" src="img/chsl.png" style="width:80%; height:auto;">
<img class="mySlides" src="img/chsl1.png" style="width:80%; height:auto;">
<img class="mySlides" src="img/ch_sl3.png" style="width:80%; height:auto;">
</div></center>
<center>
<div class="wishMessage" style="text-shadow: 1px 1px 3px white, 1px 1px 3px white, -1px -1px 3px white, -1px -1px 3px white;">
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:orange">
Sending you my warm wishes 🌲
</p>
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:Lime">
from home to home and 🧑🎄
</p>
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:SkyBlue">
from heart to heart🌟
</p>
<span style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:Violet">
Have a very very 🌻
</p>
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:Lime">
blessed Marry Christmas.🎁
</p>
<br>
</div>
</center>

<center>
<script async src="../../securepubads.g.doubleclick.net/tag/js/f.txt"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/22983154292/ca-pub-5582422846661551-tag/ad3', [320, 100], 'div-gpt-ad-1693310611970-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /22983154292/ca-pub-5582422846661551-tag/ad3 -->
<div id='div-gpt-ad-1693310611970-0' style='min-width: 320px; min-height: 100px;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1693310611970-0'); });
  </script>
  </div>
</center>
<br>

  
😀<span id="show-name" style="color: red;">[Your Name]></span>😘



<!-- <form method="POST" action="https://wish-create.com/de/wish.php"> -->
<form method="POST" action="http://localhost/web/wish-create.com/de/web.php">
	<div class="enter-name">
		<input class="animated pulse infinite" type="name" required="" maxlength="50" name="n" placeholder="👉 Enter Your Name Here...">
		<button class="btn animated shake infinite" type="submit"><span>👉</span> Go </button>
</div></form>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script> 
<script> 
// Set the date we're counting down to
var countDownDate = new Date("dec 25, 2023 00:00:00").getTime();

// Update the count down every 02 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

 // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "<font color='red'> Day,</font> " + hours + "<font color='red'>  Hrs,</font> "
  + minutes + "<font color='red'> Min,<br></font> " + seconds + "<font color='red'> Sec, </font> Before ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "";
  }
}, 1000);
</script>
<audio id="audiocracker" src="img/Jingle-Bells.mp3" autostart="false"></audio>
<script>
    function PlaySound() {
          var sound = document.getElementById("audiocracker");
          sound.play()
      }
    </script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XR6XDZHYGX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-280712271-1');
</script>


</body>

<!-- Mirrored from wish-create.com/de/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Dec 2023 18:46:52 GMT -->
</html>