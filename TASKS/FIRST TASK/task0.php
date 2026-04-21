<!-- <?php

 /* this file is a pra tice exericise
  for handing different php data
  */
 
  
    // user data
$myName="yousef elsayed mohamed";
$isStudent= true; 
$age=21;
$height=1.91;
$jobTitle ;


 $greeting="hello my name is :".$myName;
 $quoteTest='my name is : $myName'


?>

<!DOCTYPE html>
<html>
    
    <body>

     <h1> <?php echo $greeting ?> <h1>

         <p> my age is : <?= $age ?> </p>
        
         <div>

          <?php echo $quoteTest ?>
         </div>


         <?php var_dump($isStudent) ?>

         
             <br>

    </body>


</html>

   <?php echo " words : " ,"  backend" ,"  development"."  rocks"?>
  -->