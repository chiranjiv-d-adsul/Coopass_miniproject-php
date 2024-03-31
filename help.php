
<?php
include 'partials/header.php';

?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@900&display=swap');
    </style>
      

   
    <body>


        <section>
            <div class="container1">

                <div class="contactInfo">
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="image/location.png"></span>
                                <span>vasantdada patil college<br>
                                    sion, mumbai<br>
                                    400022</span>
                                </span>
                            </li>

                            <li>
                                <span><img src="image/mail.png"></span>
                                <!-- <span>nassosanagn@gmail.com</span> -->
                                <span><a href = "mailto: adsulchiranjiv958@gmail.com">adsulchiranjiv958@gmail.com</a></span>
                            </li>
                            <li>
                                <span><img src="image/call.png"></span>
                                <span>9574688237</span>
                            </li>

                        </ul>
                    </div>
                    <form action="mailto:vu1f2122074@pvppcoe.ac.in" enctype="text/plain" method ="post" >
                    <ul class="sci">
                        <li><a href=""><img src="image/1.png"></a></li>
                        <li><a href="https://www.instagram.com/chiranjiv_adsul/"><img class="insta" src="image/3.png"></a></li>
                        <li><a href=""><img src="image/2.png"></a></li>
                        <li><a href="https://www.linkedin.com/in/"><img src="image/5.png"></a></li>

                    </ul>
                </div>
                    <div class="contactForm">
                        <h2>Send a Message</h2>
                        <div class="formBox">
                        <div class="inputBox w50">
                          <label>First Name</label>
                          <input type="text" name="First Name" required>

                      </div>
                        <div class="inputBox w50">
                            <label>Last Name<label>
                            <input type="text" name="Last Name" required>

                        </div>
                        <div class="inputBox w50">
                            <label>Email Address</label>
                            <input type="email" name="Your Mail"required>

                        </div>
                        <div class="inputBox w50">
                            <label>Mobile Number</label>
                            <input type="text" name="Your mobile number"required>

                        </div>
                        <div class="inputBox w100">
                          <label>Write your message here...</label>
                            <textarea name="Your Message"required ></textarea>

                        </div>
                        <div class="inputBox w100">
                            <input type="submit"  >
                        </div>
                    </div>
                </div>
                      </form>


        </section>
    </body>
 <style>
    
    @import url('http://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap'); 

*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}


section
{
  display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;

background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover; 



}


.container1
{
    position: relative;
    min-width: 1100px;
    min-height: 550px;
    display: flex;
    z-index: 1000;
    /* border-radius: 22px; */
    /* background-color: #fff; */

}
.insta:hover{
  color: #e11d74;
}


.container1 .contactInfo
{
    position: absolute;
    top: 40px;
    width: 350px;
    height: calc(100% - 80px);
    background:maroon;
    z-index: 1;
    padding: 40px;
    display: flex;
    justify-content: center;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 20px 25px rgba(0,0,0,0.15);
    border-radius: 22px;
}

.container1 .contactInfo h2
{
    color: #fff;
    font-size:24px;
    font-weight: 500;
}

.container1 .contactInfo ul.info
{
   position: absolute;
   margin: 20px 0;
}

.container1 .contactInfo ul.info li
{
   position: relative;
   list-style: none;
   display: flex;
   margin: 20px 0;
   cursor: pointer;
   align-items: flex-start;
}

.container1 .contactInfo ul.info li span:nth-child(1)
{
    width: 30px;
    min-width: 30px;
}

/* for gmail */
.container1 .contactInfo ul.info li span a
{
    color: #fff;
    text-decoration: none;
    width: 30px;
    min-width: 30px;

}

.container1 .contactInfo ul.info li span:nth-child(1) img
{
    max-width: 100%;
    filter: invert(1);
}

.container1 .contactInfo ul.info li span:nth-child(2)
{
    color: #fff;
    margin-left: 10px;
    font-weight: 300;
}

.container1 .contactInfo ul.sci
{
    position: relative;
    display: flex;
}

.container1 .contactInfo ul.sci li
{
   list-style: none;
   margin-right: 15px;
}

.container1 .contactInfo ul.sci
{
 position: relative;
       display: flex;
       justify-content: center;
       align-items: center;
}

.container1 .contactInfo ul.sci li a img
{
   filter: invert(1);
}

.container1 .contactForm
{
    position: absolute;
    padding: 70px 50px;
    padding-left: 250px;
    margin-left: 150px;
    width: calc(100% - 150px);
    height: 100%;
    background: #fff;
    box-shadow: 0 50px 50px rgba(0,0,0,0.25);
    border-radius: 22px;
}

.container1 .contactForm h2
{
    color: #0f3959;
    font-size: 24px;
    font-weight: 500;
}

.container1 .contactForm .formBox
{
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding-top: 30px;
}

.container1 .contactForm .formBox .inputBox
{
    position: relative;
    margin-bottom: 38px;
}

.container1 .contactForm .formBox .inputBox.w50
{
    width: 47%;
}

.container1 .contactForm .formBox .inputBox.w100
{
    width: 100%;
}

.container1 .contactForm .formBox .inputBox input,
.container1 .contactForm .formBox .inputBox textarea
{
    width: 100%;
    resize: none;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 300;
    color: #333;
    border: none;
    outline: none;
    border-bottom: 1px solid #777;
}

.container1 .contactForm .formBox .inputBox textarea
{
    height: 120px;
}

.container1 .contactForm .formBox .inputBox span
{
    position: absolute;
    left: 0;
    padding: 5px 0;
    pointer-events: none;
    font-size: 18px;
    font-weight: 300;
    transition: 0.3s;
}

.container1 .contactForm .formBox .inputBox input:focus ~ span,
.container1 .contactForm .formBox .inputBox input:valid ~ span,
.container1 .contactForm .formBox .inputBox textarea:focus ~ span,
.container1 .contactForm .formBox .inputBox textarea:valid ~ span
{
    transform: translateY(-20px);
    font-size:  12px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #095a55;
    font-weight: 500;
}

/* Css for the submit button */
.container1 .contactForm .formBox .inputBox input[type="submit"]
{
    position: relative;
    cursor: pointer;
    background: maroon;
    border-radius: 20px;
    color: #fff;
    border: none;
    max-width: 150px;
    padding: 12px;

}

.container1 .contactForm .formBox .inputBox input[type="submit"]:hover{
    background: #FFAE6D;
}

/* make the form responsive */
@media (max-width: 1200px)
{
    .container1
    {
        width: 90%;
        min-width: auto;
        margin: 20px;
        box-shadow: 0 20px 50px rgba(0,0,0,0.2);
    }

    .container1 .contactInfo
    {
        top: 0;
        height: 550px;
        position: relative;
        box-shadow: none;
        border-radius: 0px;
    }

    .container1 .contactForm
    {
        position: relative;
        width: calc(100% - 350px);
        padding-left: 0;
        margin-left: 0;
        padding: 40px;
        height: 550px;
        box-shadow: none;
        border-radius: 0px;
    }
}

@media (max-width: 991px)
{
    section
    {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #fff38e;
    }

    section::before
    {
        display: none;
    }

    .container1
    {
        display: flex;
        flex-direction: column-reverse;
    }

    .container1 .contactForm
    {
        width: 100%;
        height: auto;
        border-radius: 0px;
    }

    .container1 .contactInfo
    {
        width: 100%;
        height: auto;
        flex-direction: row;
        border-radius: 0px;
    }
    .container1 .contactInfo ul.sci
    {
       position: relative;
       display: flex;
       justify-content: center;
       align-items: center;
    }
}

@media (max-width: 600px)
{
    .container1 .contactForm
    {
        padding: 25px;
    }

    .container1 .contactInfo{
        padding: 25px;
        flex-direction: column;
        align-items: flex-start;
    }

    .container1 .contactInfo ul.sci
    {
        margin-top: 40px;
    }

    .container1 .contactForm .formBox .inputBox.w50
    {
        width: 100%;
    }
}

 </style>

   
    


    <?php
      include  'partials/footer.php';
 ?>