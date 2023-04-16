<?php
    session_start();
    session_destroy(); //destroy the current session
    header("Location: index.php"); //go back to login
?>