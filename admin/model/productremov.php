<?php 
require'conn.php';

@$pid=$_POST['accNo'];

@$statuss=0;




$query1 ="DELETE FROM product  WHERE   id='$pid'";

if ($conn->query($query1) === TRUE) {
    
  

    @$statuss=1;
      






 



}else{
              echo("Error description: " . mysqli_error($conn));
           
       
       
        }




echo @$statuss."^%#+^";



?>