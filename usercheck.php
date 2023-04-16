<?php
    // START A SESSION
    session_start();
    require_once 'dbcon.php'; //Check sa memory kung meron dbcon.php
    //SQL INJECTION PREVENTION
    //1. Mysqli_escape_string()
    //it will not process the data if the data contains special characters
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // GLOBAL VARIABLE
    // SESSION

    $sql = "SELECT * FROM users WHERE username=? and password=?";
    //STEP 1: create a prepared statement
    $stmt = mysqli_stmt_init($conn);
    //STEP 2: prepare the prepared statement
    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "PREPARATION FAILED!";
    }
    else{ //success ang preparation
        //STEP 3: bind the parameters in the statement
        //1. statement
        //2. ss (s - string, i - integer)
        //3. $user, $pass
        mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
        //STEP 4: execute the statement
        mysqli_stmt_execute($stmt);
        //STEP 5: get the result
        $result = mysqli_stmt_get_result($stmt);
    }

    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
        // username is valid
        $_SESSION['currentUser'] = $user;
        header("Location: homepage.php");
    }
    else{
        //GO BACK TO LOGIN
        // username is not valid
        header("Location:login.php?error=noUser");
    }
?>