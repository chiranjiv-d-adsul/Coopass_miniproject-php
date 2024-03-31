<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/card/card.css">
    <link rel="stylesheet" href="/main.css">
    <link rel="stylesheet" href="/utilities.css">
   
    <title></title>
</head>
<body>


    <div class = "holder">
        <!-- navbar -->
        <nav class = "navbar bg-brown flex">
            <div class = "container flex">
                

                <!-- main navigation list -->
                <div class = "navbar-collapse flex">
                    <!-- nav list -->
                    <ul class = "navbar-nav text-uppercase">
                        <li class = "nav-item">
                            <a href = "#home" class = "nav-link active-link">
                                <span class = "nav-link-text">home</span>
                                <span class = "dropdown-icon">
                                    <i class = "fas fa-chevron-down"></i>
                                </span>
                            </a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#about" class = "nav-link">
                                <span class = "nav-link-text">about</span>
                           </a>
                        </li>

                        <li class = "nav-item">
                            <a href = "/card/main card.html" class = "nav-link">
                                <span class = "nav-link-text">Learn</span>
                                
                            </a>
                        </li>
                        
                        <li class = "nav-item">
                            <a href = "/HELP/help.html" class = "nav-link">
                                <span class = "nav-link-text">contact</span>
                               
                            </a>
                        </li>
                    </ul>
                    <!-- end of nav list -->

                    <!-- account icons -->
                    <div class = "account-info">
                        <a href="/login&register.html">Login/Register</a>      
                    </div>
                    <!-- end of account icons -->
                     <div id="hamburger-icon" onclick="toggleMobileMenu(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                        <ul class="mobile-menu">
                          <li><a href="/home">Home</a></li>
                          <li><a href="/about">About</a></li>
                          <li><a href="/card/main card.html">Learn</a></li>
                          <li><a href="/about">Contact</a></li>

                          <li id="login"><a href="/login" >Login</a></li>
                          <li id="signup"><a href="/signup">Signup</a></li>
                        </ul>
                      </div> 
                </div>
                <!-- end of main navigation list -->
            </div>
        </nav>
        <!-- end of navbar -->
    <div class="training-section">

        <h1 class="heading"> Crop Types </h1>
        <div class="containerf">
            <div class="CMS-item">
                <img src="/card/image/food-crops.jpg" class ="fd"alt="c01" height="250PX"  >
                <h3>FOOD CROPS</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                </p>


              <button type="button" name="view more" id="bt1"><a href="/card/ty crops/foodcrops/foodcrops.html" class="underline">view more</a></button>

            </div>
            <div class="CMS-item">

                <img src="/card/image/feed_crops.jpg"class ="fd" alt="" height="250px">
                <h3>FEED CROPS</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                </p>

                <button type="button" name="view more" id="bt1"><a href="/card/ty crops/feedcrops/feedcrops.html" class="underline">view more</a></button>

            </div>
            <div class="CMS-item">
                <img src="/card/image/fiber_crops.jpg"class ="fd" height="250PX" >
                <h3>FIBER CROPS</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                </p>

                <button type="button" name="view more"  id="bt1"><a href="/card/ty crops/fibercrops/fibercrops.html" class="underline">view more</a></button>

            </div>
            <div class="CMS-item">
               
                <img src="/card/image/industrail_crops.jpg" class ="fd" height="250PX" >
                <h3>INDUSTRIAL CROPS</h3>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                </p>

                <button type="button" name="view more"  id="bt1"><a href="/card/ty crops/industrialcrops/industrialcrops.html" class="underline">view more</a></button>

            </div>


                <!-- <button> Read More</button> -->
            </div>

            </div>
        </div>

    </div>


 <!-- footer -->

      
 <footer class = "footer bg-light-brown" id = "footer">
    <div class = "container">
        <div class = "footer-content py grid text-center">
            <div class = "footer-item">
                <h3>Agrigrow.com</h3>
                <p class = "text">We;are here to help farmers in their farming by providing them learning facility of how to grow , what are the steps ?.. , their climatic condition, 
                                seeds which are suitable for particular crops and they can buy Best quality of seeds also with our help.
                                 Here we also give related news to Government schemes and many more and many more..</p>
             
            </div>
            
            <div class = "footer-item">
                <h3>Contact Us</h3>
             
            <ol><a href="#">Instagram  </a>
                <a href="#">Facebook</a>
                <a href="#">Twitter </a>
                <a href="#">Help </a><br><br><br><br>
                <p class = "text">MUMBAI-400072</p>
            </ol>
            </div>

           

            
        </div>
    </div>

    <div class = "footer-end bg-dark">
        <div class = "container grid">
            <p class = "text text-white text-center">&copy; Copyright 2022. All Right Reserved. Designed and Developed by adsul</p>
     
        </div>
    </div>
</footer>
<!-- end of footer -->
</div>




<!-- custom js -->
<script src = "/script.js"></script>
</body>

</html>


