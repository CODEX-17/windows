<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="image/logo.png" type="image/icon type">
</head>
<body>
    <div class="container">
        <div class="message-box">
            <audio id="sound-effect" autoplay>
                <source src="sound/notif.mp3" type="audio/mp3">
              </audio>
            <p>Login</p>
            <div class="header">
                <button id="exit" onclick="exit()">X</button>
            </div>
           <div class="box">
                <div class="header-box">
                    <img src="image/info.png" alt="info">
                    <p id="text-content">Please Login</p>
                </div>
                <div class="footer-box">
                    <button id="btn" onclick="login()">LOGIN</button>
                </div>
           </div>
        </div>
    </div>
</body>
<script>
    window.onload = function() {
      var audio = document.getElementById("sound-effect");
      audio.play();
    };
    function exit (){
        window.location.href="index.html"; 
    }
    function login() {
        window.location.href="login.php";
    }
  </script>
</html>