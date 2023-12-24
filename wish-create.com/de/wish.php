<?php
session_start();
?>
<html><head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="noindex">
    <meta name="google" content="notranslate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta property="og:site_name" content="Create Wish">
    <meta property="og:image" content="img/msg.png">
<title> 🎄 Merry Christmas 🎄 </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
       <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-280712271-1&amp;l=dataLayer&amp;cx=c"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-280712271-3&amp;l=dataLayer&amp;cx=c"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
      body{
        background: #fff;
      }
      .mainContainer {
        background: url(images/.gif) /* linear-gradient(to bottom, #ffffff 0%, #fbe5cd 100%); */;
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
          font-size: 40px;
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
.fromMessage{
        color: #fff;
        animation: swing 4s infinite;
        font-size: 20px;
        padding: 0 10px;
      }
.wishMessage {
        color: #fff;
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
.m1{position:fixed;left:1%; width:auto;height:100%;top:1%;color:#000;}
.m2{position:fixed;right:1%; width:auto;height:100%;top:1%;color:#000;}  
@keyframes bounceIn{0%,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1); color:#FF9933;}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03); color: #fff;}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97);}to{opacity:1;-webkit-transform:scaleX(1);transform:scaleX(1)}}
a{text-decoration:none;color:inherit}
.shareBtn {
  position: fixed;
  right: calc(50% - 145px);
  bottom: 5px;
  width: 300px;
  height: 60px;
  background-color: #007f00;
  border-radius: 100px;
  color: white;
  line-height: 60px;
  text-align: center;
  letter-spacing: 1px;
  overflow: hidden;
  animation: footer infinite linear 1s;
  transition: all .3s cubic-bezier(.67,.13,.1,.81), transform .15s cubic-bezier(.67,.13,.1,.81);
}
.shareShow {
  position: fixed;
  right: calc(50% - 45px);
  bottom: 5px;
  width: 100px;
  height: 60px;
  background-color: brown;
  border-radius: 100px;
  color: white;
  line-height: 60px;
  text-align: center;
  letter-spacing: 1px;
  overflow: hidden;
  transition: all .3s cubic-bezier(.67,.13,.1,.81), transform .15s cubic-bezier(.67,.13,.1,.81);
}
.platforms {
  position: fixed;
  right: calc(50% - 145px);
  height: 100px;
  width: 300px;
  bottom: 65px;
  border-radius: 5px;
  visibility: hidden;
  transform: scale(.9);
  overflow: hidden;
}
.platforms:target {
  visibility: visible;
  transform: scale(1);
  opacity: 1;
}
.platforms a {
  position: absolute;
  width: 90px;
  height: 90px;
  border-radius: 5px;
  color: #3F8EFC;
  text-transform: uppercase;
}
.platforms a:nth-child(1) {
  background-color: #1A5276;
  left: 60px;
}
.platforms a:nth-child(2) {
  background-color: #1A5276;
  left: 155px;
}
.platforms:target a {
  top: 5px;
}
.platforms a:hover {
  background: #E5F4FF;
  box-shadow: 0 0 0 1px #A5CFFF;
}
.platforms a:before {
  content: attr(data-os);
  position: absolute;
  color:white;
  bottom: 5px;
  left: 0px;
  width: 100%;
  font-size: 12px;
  text-align: center;
}
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

<meta http-equiv="origin-trial" content="As0hBNJ8h++fNYlkq8cTye2qDLyom8NddByiVytXGGD0YVE+2CEuTCpqXMDxdhOMILKoaiaYifwEvCRlJ/9GcQ8AAAB8eyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3MTk1MzI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="AgRYsXo24ypxC89CJanC+JgEmraCCBebKl8ZmG7Tj5oJNx0cmH0NtNRZs3NB5ubhpbX/bIt7l2zJOSyO64NGmwMAAACCeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiV2ViVmlld1hSZXF1ZXN0ZWRXaXRoRGVwcmVjYXRpb24iLCJleHBpcnkiOjE3MTk1MzI3OTksImlzU3ViZG9tYWluIjp0cnVlfQ=="><meta http-equiv="origin-trial" content="A/ERL66fN363FkXxgDc6F1+ucRUkAhjEca9W3la6xaLnD2Y1lABsqmdaJmPNaUKPKVBRpyMKEhXYl7rSvrQw+AkAAACNeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MTkzNTk5OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><meta http-equiv="origin-trial" content="A6OdGH3fVf4eKRDbXb4thXA4InNqDJDRhZ8U533U/roYjp4Yau0T3YSuc63vmAs/8ga1cD0E3A7LEq6AXk1uXgsAAACTeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiRmxlZGdlQmlkZGluZ0FuZEF1Y3Rpb25TZXJ2ZXIiLCJleHBpcnkiOjE3MTkzNTk5OTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9"><script src="https://securepubads.g.doubleclick.net/pagead/managed/js/gpt/m202312060101/pubads_impl.js" async=""></script></head>
<body>

<marquee class="m1" behavior="scroll" direction="up" scrolldelay="0"> <br>
<img src="img/mt1.png" height="25px" width="25px"><br><br>
<img src="img/mt2.png" height="25px" width="25px"><br><br>
<img src="img/mt3.png" height="25px" width="25px"><br><br>
<img src="img/mt4.png" height="25px" width="25px"><br><br>
<img src="img/mt5.png" height="25px" width="25px"><br><br>
<img src="img/mt6.png" height="25px" width="25px"><br><br>
<img src="img/mt7.png" height="25px" width="25px"><br><br>
<img src="img/mt8.png" height="25px" width="25px"><br><br>
<img src="img/mt1.png" height="25px" width="25px"><br><br>
<img src="img/mt2.png" height="25px" width="25px"><br><br>
<img src="img/mt3.png" height="25px" width="25px"><br><br>
<img src="img/mt4.png" height="25px" width="25px"><br><br>
<img src="img/mt5.png" height="25px" width="25px"><br><br>
<img src="img/mt6.png" height="25px" width="25px"><br><br>
<img src="img/mt7.png" height="25px" width="25px"><br><br>
<img src="img/mt8.png" height="25px" width="25px"><br><br>
<img src="img/mt1.png" height="25px" width="25px"><br><br>
<img src="img/mt2.png" height="25px" width="25px"><br><br>
<img src="img/mt3.png" height="25px" width="25px"><br><br>
<img src="img/mt4.png" height="25px" width="25px"><br><br>
<img src="img/mt5.png" height="25px" width="25px"><br><br>
<img src="img/mt6.png" height="25px" width="25px"><br><br>
<img src="img/mt7.png" height="25px" width="25px"><br><br>
<img src="img/mt8.png" height="25px" width="25px"><br><br>
</marquee>

<marquee class="m2" behavior="scroll" direction="down" scrolldelay="0"> <br>
<img src="img/mt1.png" height="25px" width="25px"><br><br>
<img src="img/mt2.png" height="25px" width="25px"><br><br>
<img src="img/mt3.png" height="25px" width="25px"><br><br>
<img src="img/mt4.png" height="25px" width="25px"><br><br>
<img src="img/mt5.png" height="25px" width="25px"><br><br>
<img src="img/mt6.png" height="25px" width="25px"><br><br>
<img src="img/mt7.png" height="25px" width="25px"><br><br>
<img src="img/mt8.png" height="25px" width="25px"><br><br>
<img src="img/mt1.png" height="25px" width="25px"><br><br>
<img src="img/mt2.png" height="25px" width="25px"><br><br>
<img src="img/mt3.png" height="25px" width="25px"><br><br>
<img src="img/mt4.png" height="25px" width="25px"><br><br>
<img src="img/mt5.png" height="25px" width="25px"><br><br>
<img src="img/mt6.png" height="25px" width="25px"><br><br>
<img src="img/mt7.png" height="25px" width="25px"><br><br>
<img src="img/mt8.png" height="25px" width="25px"><br><br>
<img src="img/mt1.png" height="25px" width="25px"><br><br>
<img src="img/mt2.png" height="25px" width="25px"><br><br>
<img src="img/mt3.png" height="25px" width="25px"><br><br>
<img src="img/mt4.png" height="25px" width="25px"><br><br>
<img src="img/mt5.png" height="25px" width="25px"><br><br>
<img src="img/mt6.png" height="25px" width="25px"><br><br>
<img src="img/mt7.png" height="25px" width="25px"><br><br>
<img src="img/mt8.png" height="25px" width="25px"><br><br>
</marquee>
<div class="mainContainer" id="mainContainer">
<center>
<script async="" src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/22983154292/ca-pub-5582422846661551-tag/ad1', [320, 50], 'div-gpt-ad-1693310397764-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /22983154292/ca-pub-5582422846661551-tag/ad1 -->
<div id="div-gpt-ad-1693310397764-0" style="min-width: 320px; min-height: 50px;" data-google-query-id="CN21vfTQpYMDFQ1P9ggdB2kJQQ">
  
<div id="google_ads_iframe_/22983154292/ca-pub-5582422846661551-tag/ad1_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22983154292/ca-pub-5582422846661551-tag/ad1_0" name="google_ads_iframe_/22983154292/ca-pub-5582422846661551-tag/ad1_0" title="3rd party ad content" width="320" height="50" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" style="border: 0px; vertical-align: bottom;" data-load-complete="true" data-google-container-id="1"></iframe></div></div>
</center>      
<br>
<h1 id="username" style="font-family:SF Espresso Shack;"><?php
  echo $_SESSION['test'];
?></h1>
        <h3 class="fromMessage" id="fromMessage"></h3>

<img src="img/wishing1.png" width="50%" height="auto" style="animation: tada 4s infinite;"><br><br>
<div style="font-size: 18px; font-weight: 800; color:black;">
<p id="demo">1<font color="red"> Day,</font> 9<font color="red">  Hrs,</font> 47<font color="red"> Min,<br></font> 34<font color="red"> Sec, </font> Before </p>
</div>
<img src="img/christmas_main_4.png" width="80%" height="auto%" style="animation: pulse 1.5s infinite;">
<img src="img/Xmas-under3-min.gif" height="210px" width="150px"><img src="img/santa11.gif" height="220px" width="150px">
<br>
<div class="wishMessage" style="text-shadow: 1px 1px 3px white, 1px 1px 3px white, -1px -1px 3px white, -1px -1px 3px white;">
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:orange">May the Christmas</p>
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:Lime">Season bring only</p>
<p style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:SkyBlue">happiness and joy to</p>
<span style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:Violet">you and your family.<p></p><br>
<span style="text-shadow: 1px 1px 3px black, 1px 1px 3px black, -1px -1px 3px black, -1px -1px 3px black;color:red">¡Merry Christmas!<p></p>
<br>
</span></span></div>
<center>
<center>
<script async="" src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/22983154292/ca-pub-5582422846661551-tag/ad3', [320, 100], 'div-gpt-ad-1693310611970-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!-- /22983154292/ca-pub-5582422846661551-tag/ad3 -->
<div id="div-gpt-ad-1693310611970-0" style="min-width: 320px; min-height: 100px;" data-google-query-id="CI_T8fTQpYMDFfND9ggd3WgBdA">
  
  <div id="google_ads_iframe_/22983154292/ca-pub-5582422846661551-tag/ad3_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22983154292/ca-pub-5582422846661551-tag/ad3_0" name="google_ads_iframe_/22983154292/ca-pub-5582422846661551-tag/ad3_0" title="3rd party ad content" width="320" height="100" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" role="region" aria-label="Advertisement" tabindex="0" allow="attribution-reporting" style="border: 0px; vertical-align: bottom;" data-load-complete="true" data-google-container-id="2"></iframe></div></div>
</center>

😀<span id="show-name" style="color: red;"><?php echo $_SESSION['test'];?></span>😘
<br>

<a class="shareBtn" id="div1" href="#platforms">👉Share with friends👈</a>
<a class="shareShow" id="div2" href="#close" style="display: none;">close</a>

<div class="platforms" id="platforms">
<center>
<a href="whatsapp://send?text=😳Have you seen this?? %0A ** %0A send you a Surprise message 😍
%0A 💁 *Open this once*  👇👇 %0A wish-create.com/de/?n=%26t=w %0A" data-os="Whatsapp"><img src="img/whatsappicon.jpg" style="animation: tada 2s infinite;margin-top:5px;height: 50px;width:50px;"></a>

<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwish-create.com/de/?n=%26t=fa" target="_blank" data-os="Facebook"><img src="img/facebookicon.jpg" style="animation: tada 2s infinite;margin-top:5px;height: 50px;width:50px;"></a>
</center>
</div>
<script>
// Click to show and hide share buttons
$(document).ready(function(){
$(".shareBtn").click(function(){
$(".shareBtn").hide();
$(".shareShow").show();
});
$(".shareShow").click(function(){
$(".shareShow").hide();
$(".shareBtn").show();
});
});
</script>
<audio controls="" autoplay="" loop="" style="display:none!important">
<source src="img/Jingle-Bells.mp3" type="audio/ogg">
<source src="img/Jingle-Bells.mp3" type="audio/mpeg">
</audio>

<script> 
// Set the date we're counting down to
var countDownDate = new Date("Dec 25, 2023 00:00:00").getTime();

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

<!-- Google tag (gtag.js) -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XR6XDZHYGX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-280712271-1');
</script><iframe src="https://ec4a10acc064f1a6ebf476eb39a2a13e.safeframe.googlesyndication.com/safeframe/1-0-40/html/container.html" style="visibility: hidden; display: none;"></iframe>


</center></div><iframe src="https://www.google.com/recaptcha/api2/aframe" width="0" height="0" style="display: none;"></iframe></body><iframe name="goog_topics_frame" src="https://securepubads.g.doubleclick.net/static/topics/topics_frame.html" style="display: none;"></iframe></html>