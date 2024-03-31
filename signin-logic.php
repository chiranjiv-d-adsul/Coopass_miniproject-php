<?php
require 'config/database.php';




if(isset($_POST['submit'])) {
    //get form data
    $username_email = filter_var($_POST['username_email'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'],FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if(!$email){
        $_SESSION['signin'] = "USERNAME/EMAIL REQUIRED";
    }elseif (!$password) {
        $_SESSION['signin'] = "PASSWORD REQUIRED";
    }else {
       // fetch user
       $fetch_user_query = "SELECT * FROM users WHERE username='$username_email' OR email='$username_email'";
       $fetch_user_result = mysqli_query($connection, $fetch_user_query);

       if(mysqli_num_rows($fetch_user_result) == 1) {
// convert  into assco array
            $user_record = mysqli_fetch_assoc($fetch_user_result);
            $db_password = $user_record['password'];
            //compare
            if(password_verify($password,$db_password)){
               // for ascces control
               $_SESSION['user_id'] = $user_record['id'];
               // check user is admin
               if($user_record['admin'] == 1){
                $_SESSION['user_admin'] = true;
               }
               header('location: ' . ROOT_URL . 'coolie.php' );
            }else {
                $_SESSION['signin'] = "please check your input";
            }
       }else {
        $_SESSION['signin'] = "User not found";
       }
    }
    // problem,redirect to signin page
    if(isset($_SESSION['signin'])) {
        $_SESSION['signin-data'] = $_POST;
        header('location: ' . ROOT_URL . 'coolie.php');
        die();
    }

}else{
    header('location: ' . ROOT_URL . 'login&register.php');
    die();
}
?>