<?php
require'conn.php';

@$orderid=$_POST['accNo'];

@$statuss="awaa";






        $query_AccountDetails= "SELECT * FROM product  WHERE id = '".$orderid."'";
        $res_AccountDetails= $conn->query($query_AccountDetails);//($query_AccountDetails);
        $num_rows = mysqli_num_rows($res_AccountDetails);
        
        if($num_rows=0){
            $newarray="";
        }else{
            while( $row_AccountDetails=mysqli_fetch_array($res_AccountDetails)){	
            
                @$name=$row_AccountDetails['name'];
            @$id=$row_AccountDetails['id'];
            @$price=$row_AccountDetails['price'];
            @$cate=$row_AccountDetails['cate'];
           @$img=$row_AccountDetails['img'];
            @$qunit=$row_AccountDetails['qtunit'];
          
        }
        }
    




        echo @$id."^%#+^";
echo @$name."^%#+^";
echo @$price."^%#+^";
echo @$cate."^%#+^";
echo @$img."^%#+^";

echo @$qunit."^%#+^";


?>