<?php
session_start();
require 'config/constants.php';
// get back form data
$NAME = $_SESSION['signup-data']['name'] ?? null;
$EMAIL = $_SESSION['signup-data']['email'] ?? null;
$PASSWORD = $_SESSION['signup-data']['password'] ?? null;
$CPASSWORD = $_SESSION['signup-data']['cpassword'] ?? null;
unset($_SESSION['signup-data']);
$username_email = $_SESSION['sigin-data']['username_email'] ?? null;
$password =$_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);

?>

    <!-- custom js -->


  <div class="background-image">
      <div class="form-container">
        <div class="form-toggle">
          <button id="login-toggle-btn" class="active">Log in</button>
          <button id="register-toggle-btn" >Register</button>
        </div>
        <div id="login-form" class="active">
          <h2>Log in</h2>
          <br>
          <?php if(isset($_SESSION['signup-sucess'])) : ?>
            <div class="alert_message sucess">
              <p>
                <?= $_SESSION['signup-sucess'];
                unset($_SESSION['signup-sucess']);
                ?>
              </p>
            </div>
            <?php elseif (isset($_SESSION['signin'])): ?>
            <div class="alert_message sucess">
              <p>
                <?= $_SESSION['signin'];
                unset($_SESSION['signin']);
                ?>
              </p>
            </div>
            <?php endif ?>
          <form action="<?= ROOT_URL ?>signin-logic.php" method="POST" enctype="multipart/form-data">
          <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="username or email" required=""  >

            <input type="password" name="password" value="<?= $password ?>" placeholder="Password" id="password" required="" >
            <span>
              <!-- <i class="fa fa-eye"
                        aria-hidden="true" id="eye"
                        onclick="toggle()"></i>
            </span> -->
            <button type="submit" name="submit">Log in</button>
          </form>
        </div>

      <!-- register  -->
        <div id="register-form" style="display:none;">
          <h2>Register</h2>
          <br>
          <?php if(isset($_SESSION['signup'])): ?>
              <div class="alert__message error">
                <p>
                  <?=$_SESSION['signup'];
                  unset($_SESSION['signup']);
                  ?>
                </p>

              </div>
            <?php endif ?>

          <form action=  '<?= ROOT_URL ?>signuplogic.php' method="POST">
           <input type="text" name="name" value="<?= $NAME?>" placeholder="username">
            <input type="email" name="email" value="<?=$EMAIL?>"  placeholder="Email">

            <input type="password" name="password" value="<?=$PASSWORD?>" placeholder="Create Password" required="">
            <input type="password"  name="cpassword" value="<?=$CPASSWORD?>" placeholder="Confirm Password">
            <!-- <span>
              <i class="fa fa-eye"
                        aria-hidden="true" id="eye"
                        onclick="toggle()"></i>
            </span> -->
            <button type="submit" name="submit">Register</button>
            <small>Already have account? <a href="loginregister.php">Login</a></small>
          </form>
        </div>
      </div>

  </div>
      <!-- custom js -->


      <style>
/* form */

  /* login and registraion */
  .background-image {
    background-image: url('image/loginf.jpg');
    background-size: 100%;
    background-position: center;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    backface-visibility: inherit;
    background-image: cover;
  }



  .form-container {
    background-color:  rgb(200, 195, 195);
    padding: 40px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    height: auto;
    font-size: 20px;
    display: auto;
    background-image: url("image/login.jpg");



  }

  .form-toggle {
    display: flex;
    justify-content:center;
    margin-bottom: 15px;

  }

  .form-toggle button {
    border: none;
    background-color: transparent;
    color: #777;
    font-weight: bold;
    font-size: 30px;
    padding: 10px 20px;
    cursor: pointer;
    transition: all 0.3s;
  }

  .form-toggle button.active {
    color: #000;
    border-bottom: 2px solid #000;
  }

  form input,
  form button {
    display: block;
    width: 90%;
    margin-bottom: 10px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  form button {
    background-color: #000;
    color: white;
    border: none;
    border-radius: 20px;
    padding: 10px 20px;
    cursor: pointer;
    transition: all 0.3s;
    width: 100%;

  }

  form button:hover {
    background-color: #333;
  }
  @media only screen and (min-width: 200px) and (max-width:1200px){
    .form-container{
        width: 80%;
        flex-direction: column;
    }}
</style>

 <script>
      const loginToggleBtn = document.getElementById('login-toggle-btn');
const registerToggleBtn = document.getElementById('register-toggle-btn');
const loginForm = document.getElementById('login-form');
const registerForm = document.getElementById('register-form');

loginToggleBtn.addEventListener('click', function() {
loginForm.style.display = 'block';
registerForm.style.display = 'none';
loginToggleBtn.classList.add('active');
registerToggleBtn.classList.remove('active');
});

registerToggleBtn.addEventListener('click', function() {
loginForm.style.display = 'none';
registerForm.style.display = 'block';
loginToggleBtn.classList.remove('active');
registerToggleBtn.classList.add('active');
});

// const loginFormElement = document.getElementById('login-form');

// loginFormElement.addEventListener('submit', function(event) {
//   event.preventDefault();

//   // Do some validation on the form fields here, and show an error message if needed

//   // If the form fields are valid, redirect to the homepage
//   window.location.href = 'learn.php';
// });

// // This code handles the form submission for the registration form
// const registerFormElement = document.getElementById('register-form');

// registerFormElement.addEventListener('submit', function(event) {
//   event.preventDefaultI();
//   // Do some validation on the form fields here, and show an error message if needed

//   // If the form fields are valid, redirect to the homepage
//   window.location.href = 'learn.php';
// });

// function toggleMobileMenu(menu) {
//   menu.classList.toggle('open');
// }

</script>