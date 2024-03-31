<?php
include 'partials/header.php';

?>


</style>
      <section class="background firstsection">
        <div class="box-main"> 
          <div class="firstHalf">
            <p class="text-big">About US</p>
            
            <p class="text-small">


COOPASS: Our motto is to help passengers by providing them the coolies, who can carry there loads and save time..            </p>
            <br>
            <p class="center"><a href="#Order"
            style="text-decoration:none;color:white;">
                Below are the people who
                works in our company</a>
            </p>
          </div>
        </div>
      </section>
      <section class="service">
        <h1 class="h-primary center" style="margin-top:30px;text-align:center;">
          Our Team
        </h1> 
          
            <div class="CMS-item">
                <img src="/image/g1.png" alt="c01" height="60PX">
                <h3>Name : Chiranjiv D Adsul </h3>  
                <p>
                   INTRO: Pursuing BE IN COMPUTER ENGINEERING.
                   <h5> currently studying second year of computer engineering from Vasantdada Patil Pratishthan's College of Engineering and Visual Arts.</h5><br>
                    POST: Hi,there ! <br>
                    CONTACT NUMBER :7568224196 <br>
                    WORKING HOURS : 9AM TO 6PM <br>
                    EMAIL:chiranjiv@gmail.com.
                </p>
              
            </div>
            <div class="CMS-item">
                <img src="/image/g2.png" height="60PX">
                <h3>Name : SANDESH PAWAR </h3>  
                <p>
                INTRO: Pursuing BE IN COMPUTER ENGINEERING.
                   <h5> currently studying second year of computer engineering from Vasantdada Patil Pratishthan's College of Engineering and Visual Arts.</h5><br>
                    POST: Welcome ! <br>
                    CONTACT NUMBER :7741524634 <br>
                    WORKING HOURS : 9AM TO 6PM <br>
                    EMAIL:sandesh@gmail.com.
                </p>
                
            </div>
            <div class="CMS-item">
                <img src="/image/g3.jpg" height="60PX">
                <h3>Name : OMKAR J MASAYE</h3>  
                <p>
                INTRO: Pursuing BE IN COMPUTER ENGINEERING.
                   <h5> currently studying second year of computer engineering from Vasantdada Patil Pratishthan's College of Engineering and Visual Arts.</h5><br>
                    POST: Available. <br>
                    CONTACT NUMBER :9824562492<br>
                    WORKING HOURS : 9AM TO 6PM <br>
                    EMAIL:omkar@gmail.com.
                </p>
                
            </div>
            <div class="CMS-item">
                <img src="/image/g4.png" height="60PX">
                <h3>Name : RONAK PARMAR</h3>  
                <p>
                INTRO: Pursuing BE IN COMPUTER ENGINEERING.
                   <h5> currently studying second year of computer engineering from Vasantdada Patil Pratishthan's College of Engineering and Visual Arts.</h5><br>
                    POST: Any queries ? <br>
                    CONTACT NUMBER :8749245342 <br>
                    WORKING HOURS : 9AM TO 6PM <br>
                    EMAIL:RONAK PARMAR@gmail.com.
                </p>
                
            </div>
  
    <h1 class="title">FAQ's</h1>

    <div class="questions-container">
        <div class="question">
            <button>
                <span> Where I can find available coolie?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Ans:Here you have to do login first then u can redirect to available coolie page.</p>
        </div>

        <div class="question">
            <button>
                <span>Is it affordable ?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Ans:Yes! here you can get affordable coolie ..(depends on your luggage).</p>
        </div>

        <div class="question">
            <button>
                <span>How much time will take for coolie to come ?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Ans: Minimum time: will be 20 minutes. </p>
        </div>

        <div class="question">
            <button>
                <span>Is it legal ?</span>
                <i class="fas fa-chevron-down d-arrow"></i>
            </button>
            <p>Yes offcourse! Our webisite is certified from ---.</p>
        </div>
    </div>

<script>
  const buttons = document.querySelectorAll('button');

buttons.forEach( button =>{
    button.addEventListener('click',()=>{
        const faq = button.nextElementSibling;
        const icon = button.children[1];

        faq.classList.toggle('show');
        icon.classList.toggle('rotate');
    })
} )
</script>

<style>
  .text-big{
    margin-top: 80PX;
    text-align: CENTER;
  }
  .logo {
  width: 20%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.logo img {
  width: 33%;
  border: 2px solid yellow;
  border-radius: 50px;
}



.background {
  background:wheat;
  background-blend-mode: darken;
  background-size: cover;
  background-image: url(/images/about.jpg);

}

.firstsection {
  height: 50vh;
}

.box-main {
  display: flex;
  justify-content: center;
  align-items: center;
  color: rgb(232, 26, 26);
  max-width: 80%;
  margin: auto;
  height: 80%;
}

.firstHalf {
  width: 50%;
  display: flex;
  flex-direction:column;
  justify-content: center
}

.firstHalf img {
  display: flex;
  border-radius: 9050px;
}

.text-big {
  font-family: 'Piazzolla', serif;
  font-weight: bold;
  font-size: 41px;
  text-align: center;
}

.text-small {
  font-family: 'Sansita Swashed', cursive;
  font-size: 18px;
  text-align: center;
}

#service {
  margin: 34px;
  display:flex;
}

#service .box {
  padding: 100px;
  margin: 3px 6px;
  border-radius: 8px;
}

#service .box img {
  margin-top: 10px;
  height: 150px;
  margin: auto;
  display: block;
  border-radius: 200px;
}

#service .box p {

  font-family: sans-serif;
  text-align: center;
}

.services {
  margin: 34px;
  display: flex;
}

.services .box {

  padding: 100px;
  margin: 3px 6px;
  border-radius: 28px;
}

.services .box img {
  margin-top: 10px;
  height: 150px;
  margin: auto;
  display: block;
  border-radius: 100px;
}

.services .box p {

  font-family: sans-serif;
  text-align: center;
}

.btn {
  padding: 8px 20px;
  margin: 7px 0;
  border: 2px solid white(226, 16, 16);
  border-radius: 8px;
  background: none;
  color: white;
  cursor: pointer;
}

.btn-sm {
  padding: 6px 10px;
  vertical-align: middle;
}

.center { 
  text-align:center;
}

.text-footer {
  text-align: center;
  padding: 10px 0;
  font-family: 'Ubuntu', sans-serif;
  display: flex;
  justify-content: center;
}



.CMS-item{
  flex-basis: 34%;
  flex-wrap: wrap;
  margin: 10px 0px;
  text-align: center;
  padding: 20px 0px;
  background: white;
  box-shadow: 0px 0px 10px 3px lightgray ;
  
}
.CMS-item h3{
  padding: 10px 0px ;

}
.CMS-item p{
  font-size: 14px;
  padding: 10px;
}

.CMS-item:hover{
  background-color: lightblue;

}
.CMS-item:hover h3, .CMS-item:hover p{
  color: white;

}



.text-secondary {
  color: #3d5d6f;
}

.h4,
h4 {
  font-size: 1.2rem;
}

h2 {
color: #fff;
}

.fa,
.fas {
  font-family: 'FontAwesome';
  font-weight: 200;
  font-size: 20px;
  font-style: normal;
}

.right-0 {
  right: 0;
}

.top-0 {
  top: 0;
}

.h-100 {
  height: 100%;
}

a.text-secondary:focus,
a.text-secondary:hover {
  text-decoration: none;
  color: #22343e;
}

#accordion .fa-plus {
  transition: -webkit-transform 0.25s ease-in-out;
  transition: transform 0.25s ease-in-out;
  transition: transform 0.25s ease-in-out, -webkit-transform 0.25s ease-in-out;
}

#accordion a[aria-expanded=true] .fa-plus {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}



.title{
    font-size: 50px;
    text-align: center;
    margin-top: 80px;
    margin-bottom: 40px;
    text-decoration: underline 4px;
}


.questions-container{
    max-width: 800px;
    margin: 0 auto;
    padding-bottom: 60px;
}

.question{
    border-bottom: 1px solid #fff;
}
.question button{
    width: 100%;
    background-color: #000;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 15px;
    border:none;
    outline: none;
    font-size: 22px;
    color: #fff;
    font-weight: 700;
    cursor: pointer;
}
.question p{
    font-size: 18px;
    max-height: 0;
    opacity: 0;
    line-height: 1.5;
    overflow: hidden;
    transition: all 0.6s ease;
}
.d-arrow{
    transition: transform 0.5s ease-in ;
    color: #fff;
}

/*add this class when click*/
.question p.show{
    max-height: 100px; 
    opacity: 1;
    padding:0px 15px 30px 15px;
}
.question button .d-arrow.rotate{
    transform: rotate(180deg);
}




@media screen and (max-width: 650px) {
.column {
width: 100%;
display: block;
}
}
 </style>  



<?php
      include  'partials/footer.php';
 ?>