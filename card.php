



<?php
include 'partials/header.php';

?>

   <link rel="stylesheet" href="/miniproject.css">
<body>


<form action="book.php" method="POST">
    <div class="training-section"  >
    <h1>Available coolies. </h1>
    <div class="container">

       <?php require 'config/database.php';

       $query = "SELECT * FROM andheri   ";
       $query_run =mysqli_query($connection,$query);
       $check_andheri = mysqli_num_rows($query_run) > 0;

       if($check_andheri)
       {
        while($row = mysqli_fetch_assoc($query_run))
        {





       ?>



            <div class="CMS-item">


                <img src="data:image/png;base64,<?php echo base64_encode($row['image']);?>" class="food"alt="c01" height="100PX"  >

                <h3>NAME : <?php echo $row['name']; ?></h3>

                    AGE : <?php echo $row['age'];?> <br>
                    BATCH NUMBER : <?php echo $row['batchno'];?><br>
                    CONTACT NUMBER :<?php echo $row['contactno'];?> <br>
                    WORKING HOURS : <?php echo $row['workinghour'];?> <br>




                    Contact us:
                    <a class="tel" href="tel:<?php echo $row['calls'];?>">call</a> <br>

                        <button class="sr" name="book"  type="book">Book</button>
                    <p><?php echo $row['brief'];?><br></p>


            </div>
            </form>
                        <style>

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
                        </style>
        <?php
        }
    }
    else
    {
        echo 'no data found';

    }

    ?>
       </div>
</div>

    <?php
      include  'partials/footer.php';
 ?>