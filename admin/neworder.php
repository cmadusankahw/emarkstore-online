<?php
require'model/conn.php';

@$orderid=$_POST['accNo'];

@$statuss="awaa";






        $query_AccountDetails= "SELECT * FROM orders  WHERE id ='".$orderid."'";
        $res_AccountDetails= $conn->query($query_AccountDetails);//($query_AccountDetails);
        $num_rows = mysqli_num_rows($res_AccountDetails);
        
        if($num_rows=0){
            $newarray="";
        }else{
            while( $row_AccountDetails=mysqli_fetch_array($res_AccountDetails)){	
            
                @$name=$row_AccountDetails['name'];
            @$nic=$row_AccountDetails['nic'];
            @$mobile=$row_AccountDetails['mobile'];
            @$item1f=$row_AccountDetails['item1'];
           
            @$item2=$row_AccountDetails['item2'];
            @$item3=$row_AccountDetails['item3'];
            @$item4=$row_AccountDetails['item4'];
            @$item5=$row_AccountDetails['item5'];
            @$item6=$row_AccountDetails['item6'];
            @$item7=$row_AccountDetails['item7'];
            @$item8=$row_AccountDetails['item8'];
            @$item9=$row_AccountDetails['item9'];
            @$item10=$row_AccountDetails['item10'];
             @$total=$row_AccountDetails['total'];
            
            @$status=$row_AccountDetails['statuss'];
        }
        }
    

        $myArray1 = explode(',',$item1f);
        $item1=$myArray1[0];
        $qt1=$myArray1[1];
			
			



        echo @$statuss."^%#+^";
echo @$name."^%#+^";
echo @$mobile."^%#+^";
echo @$item1."^%#+^";
echo @$qt1."^%#+^";

?>