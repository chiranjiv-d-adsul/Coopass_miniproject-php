<!-- ><?php  
  //   $marks=69;      
  //   if ($marks<33){    
  //       echo "fail";    
  //   }    
  //   else if ($marks>=34 && $marks<50) {    
  //       echo "D grade";    
  //   }    
  //   else if ($marks>=50 && $marks<65) {    
  //      echo "C grade";   
  //   }    
  //   else if ($marks>=65 && $marks<80) {    
  //       echo "B grade";   
  //   }    
  //   else if ($marks>=80 && $marks<90) {    
  //       echo "A grade";    
  //   }  
  //   else if ($marks>=90 && $marks<100) {    
  //       echo "A+ grade";   
  //   }  
  //  else {    
  //       echo "Invalid input";    
    // }    
?>   -->

<?php
if(isset($_POST['search'])){
    $station = filter_var($_POST['station'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $platform = filter_var($_POST['platform'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   
}
if ($station =="andheri" && $platform =="platform1"){
   
  header("location: card.php");
  die();   
}  
elseif ($station =="andheri" && $platform =="platform2"){
  header("location: card.php");
  die();   
} 
elseif ($station =="andheri" && $platform =="platform3"){
  header("location: card.php");
  die();   
} 
elseif ($station =="kurla" && $platform =="platform1"){
  header("location: card2.php");
  die();   
} 
elseif ($station =="kurla" && $platform =="platform2"){
  header("location: card2.php");
  die();   
} 
elseif ($station =="kurla" && $platform =="platform3"){
  header("location: card2.php");
  die();   
} 
elseif ($station =="ghatkopar" && $platform =="platform1"){
  header("location: card3.php");
  die();   
}
 elseif ($station =="ghatkopar" && $platform =="platform2"){
  header("location: card3.php");
  die();   
} 
elseif ($station =="ghatkopar" && $platform =="platform3"){
  header("location: card3.php");
  die();   
} 
  else {    
        echo "Invalid input";    
     }  



?>