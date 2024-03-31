<?php
require_once 'config/database.php';
session_start();


//get register info if clicked,bounce back to register page

if(isset($_POST['submit'])){
    $NAME = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $EMAIL = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    $PASSWORD = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $CPASSWORD = filter_var($_POST['cpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

// valid inputs
if(!$NAME){
    $_SESSION['signup'] = 'Please enter your first name';
} elseif (!$EMAIL) {
    $_SESSION['signup'] = 'Please enter your a valid email';
}elseif  (strlen($PASSWORD) < 8 || strlen
    ($CPASSWORD) < 8){
    $_SESSION['signup'] = 'Password should be 8+ character';
    }
    else {
        // check if password  dontmatch
        if($PASSWORD  !== $CPASSWORD) {
            $_SESSION['signup'] = "Password do not match";
        } else {
            $hashed_password = password_hash($PASSWORD,PASSWORD_DEFAULT);

          //check if username or email already exists in database
          $user_check_query = "SELECT * FROM users WHERE
          name='$NAME' OR email ='$EMAIL'";
          $user_check_result = mysqli_query($connection,$user_check_query);
          if(mysqli_num_rows($user_check_result)>0){
            $_SESSION['signup'] = "username or email already exists";

          }else {

          }
        }


    }

    // REDIRECT
    if(isset($_SESSION['signup'])){
        $_SESSION['signup-data'] = $_POST;
        header('location' . ROOT_URL . 'loginregister.php');
        die();
    } else{
        //insert new user
        $insert_user_query = "INSERT INTO users SET  name='$NAME',email='$EMAIL',
        password='$hashed_password',admin=0";

        $insert_user_query = mysqli_query($connection,$insert_user_query);

        if(!mysqli_error($connection)) {
            //redirect to login page with successful message
            $_SESSION['signup-sucess'] = "registration successful";
            header('location: ' . ROOT_URL . 'loginregister.php');
            die();
        }
    }
} else {
    // if button wasn't clicked
    header('location:' . ROOT_URL . 'loginregister.php');
}

?>