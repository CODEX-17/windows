<?php
    session_start(); //If you want to access a session variable
                    // you need to start a session
    
    if( !isset($_SESSION['currentUser']) ){
        //body
        header("Location: ./login.php?error=pleaselogin");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="image/logo.png" type="image/icon type">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,400,0,0" />
    <title>homepage</title>
</head>
<body>
    <div class="container">
        <div class="icons" id="icons">
            <div class="icon-one">
                <button onclick="mypro()" title="Profile of Rumar Pamparo"><img src="image/cmd1.png" alt=""></button>
                <p>My Profile</p>
            </div>
            <div class="icon-one">
                <button onclick="exitValo()" title="Under Construction"><img src="image/valo.jpg" alt=""></button>
                <p>Valorant</p>
            </div>
            
        </div>
            
        <div class="panel" id="pop">
            <div class="header">
                <div class="left-side">
                    <img src="image/cmd.png" alt="logo">
                    <h1>Personal Information</h1>
                </div>
                <div class="right-side">
                    <span class="material-symbols-outlined" onclick="hide()">remove</span>
                    <span class="material-symbols-outlined" onclick="fullscreen()">check_box_outline_blank</span>
                    <span id="exit" class="material-symbols-outlined" onclick="hide()">close</span>
                </div>
            </div>
            
            <div class="box">
                <div class="command">
                    <h1>c:/myProfile></h1><h1 id="typeText">I am Rumar Pamparo a 3rd year College student and currently taking..</h1>
                </div>
                <div class="command">
                    <h1 id="title-type">c:/myProfile/course></h1><h1 id="typeTexts">Bachelor of Science in Information Technology at CSU-Carig Campus.</h1>
                </div>
                
            </div>
        </div>

        <div class="valo" id="valo">
                <audio id="sound-effect">
                    <source src="sound/valo-sound.mp3" type="audio/mp3">
                </audio>
            <div class="valo-content">
                <div class="left-valo">
                    <img src="image/rumar.png" alt="">
                </div>
                <div class="right-valo">
                    <img src="image/valo-logo1.png" alt="">
                    <h1>RUMAR PAMPARO</h1>
                    <p>WEB DEVELOPER</p>
                    <div class="btn-list">
                        <button onclick="exitValo()">Exit</button>
                        <button id="playsound" onclick="playValo()">Play</button>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="logout-box" id="logout-box">
            <div class="logout-box-head">
                <h1>Log out - notification?</h1>
            </div>
            <div class="logout-box-body">
                <img src="image/error-icon.png" alt="error">
                <h1>Are you sure you want to logout?</h1>
            </div>
            <div class="logout-box-foot">
                <button onclick="logoutBox('yes')">Yes</button>
                <button onclick="logoutBox('no')">No</button>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="logg">
                <span id="log" onclick="logoutAdmin()" class="material-symbols-outlined" title="Logout Account">power_settings_new</span>
            </div>
            
        </div>

        <div class="footer">
            <button onclick="showPanel()"><img src="image/logo1.png" alt="windows"></button>
            <input type="text" placeholder="Type here to search">
        </div>
    </div>
    <script>
        

        function mypro() {
            document.getElementById("pop").style.display="block";
            document.getElementById("icons").style.display="block";
            document.getElementById("pop").style.width="50%";
            document.getElementById("pop").style.height="50%";
            document.getElementById("valo").style.display="none";
        }
        function hide() {
            document.getElementById("pop").style.display="none";
            document.getElementById("icons").style.display="block";
            document.getElementById("pop").style.width="50%";
            document.getElementById("pop").style.height="50%";
            document.getElementById("valo").style.display="none";
        }
        function fullscreen() {
            var side = document.getElementById("pop");
            if (side.style.width === "100%") {
                document.getElementById("pop").style.width="50%";
                document.getElementById("pop").style.height="50%";
                document.getElementById("icons").style.display="block";
            }else {
                document.getElementById("pop").style.width="100%";
                document.getElementById("pop").style.height="100%";
                document.getElementById("icons").style.display="none";
            }
            
        }
        function showPanel() {
            var side = document.getElementById("sidebar");
            if (side.style.display === "flex") {
                document.getElementById("sidebar").style.display="none";
            }else {
                document.getElementById("sidebar").style.display="flex";
            }
           
        }

        function playValo() {
            var audio = document.getElementById("sound-effect");
            var btn = document.getElementById('playsound')

            if (btn.innerHTML == "STOP") {
                btn.innerHTML="PLAY";
                audio.pause();
            }else {
                btn.innerHTML="STOP";
                audio.play();
            }
            
        };

        function exitValo() {
            var audio = document.getElementById("sound-effect");
            var side = document.getElementById("valo");
            if (side.style.display === "flex") {
                document.getElementById("valo").style.display="none";
                document.getElementById("panel").style.display="none";
                audio.pause();
            }else {
                document.getElementById("valo").style.display="flex";
                
            }
            document.getElementById("panel").style.display="none";
            
        }

        function logoutAdmin() {
            var logoutBox = document.getElementById("logout-box");
            
            if (logoutBox.style.display === "none") {
                document.getElementById("logout-box").style.display="inline";
            }else {
                document.getElementById("logout-box").style.display="none";
            }
        }

        function logoutBox(ans){
            if(ans == "yes"){
                window.location.href="logout.php";
            }else {
                window.location.href="homepage.php";
            }
        }
        

        
    </script> 

    
</body>
</html>