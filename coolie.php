<?php
include 'partials/header.php';


?>
<div class="quote">
  WELCOME !
</div>
<div class="q">

  Select your station and platform from here:
</div>

<div class="container2">
        
<form action='cardlogic.php' method="POST">
 
    <label for="station-select" id="ll">Select Station:</label>
    <select id="station-select" name="station" value="<?= $station?>"  >
      <option value="andheri" name="andheri" class="optionvalue">Andheri</option>
      <option value="kurla"  name="kurla" class="optionvalue">Kurla</option>
      <option value="ghatkopar" name="ghatkopar" class="optionvalue">Ghatkopar</option>
    </select>
    <br>
    <br>

    <label for="platform-select" id="ll">Select Platform Number:</label>
    <select id="platform-select" name="platform" value="<?= $platform?>" >
      <option  value="platform1" name="platform1" class="optionvalue">Platform 1</option>
      <option value="platform2" name="platform2" class="optionvalue">Platform 2</option>
      <option value="platform3" name="platform3" class="optionvalue">Platform 3</option>
    </select>

    <button class="sr" name="search"  type="search">Search

    </button>


  </form>


</div>

<style>
  /* option selection */
  .container2 {

    background-image: url('/hk/image/image.jpg');
    background-size: cover;
    /* height: fit-content; */
    display: flex;
    justify-content: top;
    align-items: top;
    padding-bottom: 120PX;
    padding-top: 60PX;
  }

  .optionvalue {
    background-color: wheat;
    margin: 20px 20px 20px 20px;
    padding: 20px 20px 20px 20px;
    color: #fff;

  }

  .quote {
    font-size: 40px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: bold;
    text-align: center;
    color: maroon;
    margin-top: 20px;
    padding: 10px 10px 10px 10px;

  }


  select {
    display: inline-block;
    margin: 10px;
    font-size: 25px;
    padding: 10px;
    border-radius: 5px;
    border: none;
    font-family: 'Courier New', Courier, monospace;
    font-weight: bold;
    background-color: #e15c57;
    color: #fff;
    border-radius: 40px;
    text-align: center;
    border-style: double;


  }

  #ll {
    display: inline-block;
    margin: 10px;
    font-size: 25px;
    padding: 10px;
    border-radius: 5px;
    border: none;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    color: rgb(246, 241, 241);
    text-decoration-line: underline;
  }

  .sr {
    width: 100px;
    height: 40px;
    font-size: 18px;
    border-radius: 16px;
    box-shadow: #212329;


  }

  .sr:hover {
    color: rgb(255, 251, 249);
    background-color: #212329;
  }



  .q {
    color: maroon;
    font-family: 'Courier New', Courier, monospace;
    font-size: 35px;
    font-weight: bold;
    text-align: center;
    margin-top: 20px;
    padding-top: 10px;
    padding-bottom: 10px;


  }
</style>





<?php
include  'partials/footer.php';
?>