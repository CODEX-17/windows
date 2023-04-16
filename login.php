<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="image/logo.png" type="image/icon type">
</head>
<body>
    <!-- <audio id="sound-effect" autoplay>
        <source src="sound/notif.mp3" type="audio/mp3">
      </audio> -->
    <div class="container">
        <div class="content">
            <div class="profile">
                <img src="image/pic.png" alt="">
                <p id="title">Rumar Pamparo</p>
            </div>
            <div class="info">
                <form action="usercheck.php" method="POST">
                <div class="usernameInfo">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="passwordInfo">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit"><img src="image/btn.png" alt=""></button>
                </div>

                <?php
                    if( !empty($_GET['error']) ){
                        
                        $errorMessage = $_GET['error'];

                        if($errorMessage == "noUser"){
                            echo "<p>WRONG USERNAME OR PASSWORD!</p>";
                        }

                        else if($errorMessage == "pleaselogin"){
                            echo "<p>YOU ARE NOT LOG IN. PLEASE PROVIDE YOUR CREDENTIALS!</p>";
                        } 
                    }
                ?>
                
                </form>
            </div>
            <div class="footer">
                <img src="image/footer.png" alt="">
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
  </script>
</html>