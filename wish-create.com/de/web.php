<?php
// echo "hi";

 session_start();
 $_SESSION['test'] =htmlspecialchars($_POST["n"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the name input is filled
    if (!empty($_POST["n"])) {
        // Sanitize the input to prevent potential security issues
        $name = htmlspecialchars($_POST["n"]);
        
        // Redirect to the desired URL . urlencode($name)
        header("Location: wish.php"  );
        exit();
    }
}

// echo"
//     <html>
//     <head></head>
//     <style>
//       body{
//         background: #fff;
//       }
//       .mainContainer {
//         background: url(images/.html);
//         max-width: 450px;
//         min-height: 200px;
//         margin: 0 auto;
//         text-align: center;
//         padding: 15px;
//         color: #999;
//         padding-bottom: 60px;

//         box-shadow: 0 0 10px 1px rgba(0,0,0,.14), 0 1px 14px 2px rgba(0,0,0,.12), 0 0 5px -3px rgba(0,0,0,.3);
//         background-size: 100%;
//       }
// #username {
//      color: black;  /* Fallback: assume this color ON TOP of image */
//    background: url(img/sname.gif);
//    -webkit-background-clip: text;
//    -webkit-text-fill-color: transparent;
//           animation: swing 4s infinite;
//             text-transform: uppercase;
//           margin-bottom: 5px;
//           font-size: 35px;
//           padding: 0 10px; 
//     font-family: 'SF Espresso Shack', cursive;
// } 

// #usernameb { color: black;  /* Fallback: assume this color ON TOP of image */
//    background: url(img/sname.gif);
//    -webkit-background-clip: text;
//    -webkit-text-fill-color: transparent;
//           animation: swing 4s infinite;
//             text-transform: uppercase;
//           margin-bottom: 5px;
//           font-size: 25px;
//           padding: 0 10px;
//     font-family: 'SF Espresso Shack', cursive;
// }
     
//       .wishMessage {
//         color: #fff;
//         width: 90%;
//         font-size: 22px;
//         font-weight: bold;
//         margin-top: 20px;
//         text-shadow: 0px 0px 10px #afafaf;
//       }
//       .wishMessage p{
//         margin: 0.3em 0;
//       }@keyframes bounceIn{0%,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:scale3d(.3,.3,.3);transform:scale3d(.3,.3,.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1); color:#FF9933;}40%{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03); color: #fff;}80%{-webkit-transform:scale3d(.97,.97,.97);transform:scale3d(.97,.97,.97);}to{opacity:1;-webkit-transform:scaleX(1);transform:scaleX(1)}}    
      
// .demo {
//         font-size: 11; font-weight: none;color: #98201f;
//         animation: flash 0s infinite;
//       }
//       </style>

// <style>
//       *{
//         margin:0;
//         padding:0;
//       }
//       body {
//         text-align: center;
        
//       }
//       img{
//       border: none;
//     }
// .rope{
//       position: absolute;
//       top: 30px;
//       left:0%;
//       z-index: 4;
//     } 
// .centered {
//     position: absolute;
//     top: 75%;
//     left: 50%;
//     transform: translate(-50%, -50%);
// }
// a.rope
// {
//     text-decoration:none;
// }
// .enter-name input[type=name] {
// 	background-color: #F2F919;
// 	color: black;
//    	border-radius: 10px;
//     	box-sizing: border-box;
//     	border-color: blue;
//     	padding: 15px;
//     	position: fixed;
//     	left: 10px;
//     	bottom: 5px;
//     	height: 50px;
//     	width: 70%;
//     	text-align: center;
//     	font-size: 22px;
//     	display: inline-block;
// }
// </style>
//     <body>

//     </body>
//     </html>
// "
?>