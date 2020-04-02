<?php
require'conn.php';

@$orderid=$_POST['accNo'];

@$statuss="awaa";






        $query_AccountDetails= "SELECT * FROM orders  WHERE id = '".$orderid."'";
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
           
            @$item2f=$row_AccountDetails['item2'];
            @$item3f=$row_AccountDetails['item3'];
            @$item4f=$row_AccountDetails['item4'];
            @$item5f=$row_AccountDetails['item5'];
            @$item6f=$row_AccountDetails['item6'];
            @$item7f=$row_AccountDetails['item7'];
            @$item8f=$row_AccountDetails['item8'];
            @$item9f=$row_AccountDetails['item9'];
            @$item10f=$row_AccountDetails['item10'];
             @$total=$row_AccountDetails['total'];
            @$status=$row_AccountDetails['statuss'];
        }
        }
    

        $myArray1 = explode(',',$item1f);
        $item1=$myArray1[0];
        $qt1=$myArray1[1];

        $myArray1 = explode(',',$item2f);
        $item2=$myArray1[0];
        $qt2=$myArray1[1];

        $myArray1 = explode(',',$item3f);
        $item3=$myArray1[0];
        $qt3=$myArray1[1];

        $myArray1 = explode(',',$item4f);
        $item4=$myArray1[0];
        $qt4=$myArray1[1];

        $myArray1 = explode(',',$item5f);
        $item5=$myArray1[0];
        $qt5=$myArray1[1];

        $myArray1 = explode(',',$item6f);
        $item6=$myArray1[0];
        $qt6=$myArray1[1];

        $myArray1 = explode(',',$item7f);
        $item7=$myArray1[0];
        $qt7=$myArray1[1];

        $myArray1 = explode(',',$item8f);
        $item8=$myArray1[0];
        $qt8=$myArray1[1];

        $myArray1 = explode(',',$item9f);
        $item9=$myArray1[0];
        $qt9=$myArray1[1];

        $myArray1 = explode(',',$item10f);
        $item10=$myArray1[0];
        $qt10=$myArray1[1];

			
			



        echo @$statuss."^%#+^";
echo @$name."^%#+^";
echo @$mobile."^%#+^";
echo @$item1."^%#+^";
echo @$qt1."^%#+^";

echo @$item2."^%#+^";
echo @$qt2."^%#+^";

echo @$item3."^%#+^";
echo @$qt3."^%#+^";

echo @$item4."^%#+^";
echo @$qt4."^%#+^";

echo @$item5."^%#+^";
echo @$qt5."^%#+^";

echo @$item6."^%#+^";
echo @$qt6."^%#+^";

echo @$item7."^%#+^";
echo @$qt7."^%#+^";

echo @$item8."^%#+^";
echo @$qt8."^%#+^";

echo @$item9."^%#+^";
echo @$qt9."^%#+^";

echo @$item10."^%#+^";
echo @$qt10."^%#+^";

echo @$total."^%#+^";
?>