<?php

if(isset($_POST['estimateBtn'])) {

    require 'dbh.inc.php';

    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNum = $_POST['phoneNum'];
    $whenToCall = $_POST['whenToCall'];
   

    // error handlers
    // check for empty fields
    if(empty($email) || empty($first) || empty($last)) {
        header("Location: index.php?error=emptyfields&uid=".$first."&mail=".$email);
        exit(); 
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $first)) {
        header("Location: index.php?error=invalidmail&uid=");
        exit();

    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=invalidmail&uid=".$first."&mail=".$email);
        exit();

    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $phoneNum)) {
        header("Location: index.php?error=invalidphonenum&mail=".$email);
        exit();

    }
    // else if ($pwd !== $pwdRpt) {
    //     header("Location: ../signup.php?error=passwordmatchfailed&uid=".$username."&mail=".$email);
    //     exit(); 

    // }
    else{
        $sql = "SELECT S_FIRST_NAME FROM estimateform WHERE S_FIRST_NAME=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: index.php?error=sqlerror&uid=".$first."&mail=".$email);
        exit(); 

        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $first);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0) {
                header("Location: index.php?error=usernametaken&mail=".$email);
        exit();

            }
            else{
                $sql = "INSERT INTO estimateform (S_FIRST_NAME, S_LAST_NAME, S_EMAIL, N_PHONE, S_PREF_TOD) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: index.php?error=sqlerror&uid=".$first."&mail=".$email);
                exit(); 
            }
            else{
                // $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $phoneNum, $whenToCall);
                mysqli_stmt_execute($stmt);
                header("Location: index.php?signup=success");
                exit(); 

            }
        }
    }
        

}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
    header("Location: index.php");
    exit();
}