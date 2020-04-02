<?php
require'conn.php';
@$item1=trim($_POST['item1']);
@$item2=trim($_POST['item2']);
@$item3=trim($_POST['item3']);
@$item4=trim($_POST['item4']);
@$item5=trim($_POST['item5']);
@$item6=trim($_POST['item6']);
@$item7=trim($_POST['item7']);
@$item8=trim($_POST['item8']);
@$item9=trim($_POST['item9']);
@$item10=trim($_POST['item10']);
@$nic=trim($_POST['city']);
@$name=trim($_POST['name']);
@$mobile=trim($_POST['mobile']);
@$total=trim($_POST['tot']);
@$status=0;




$query2 ="INSERT INTO orders(name,nic,mobile,item1,item2,item3,item4,item5,item6,item7,item8,item9,item10,total,statuss) values('$name','$nic','$mobile','$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$total','resived') ";

if ($conn->query($query2) === TRUE) {
    @$status=1;

      }
        else{
              echo("Error description: " . mysqli_error($conn));
           
       
       
        }


		
		$query_AccountDetails= "SELECT * FROM orders
WHERE id = ( SELECT MAX(id) FROM orders)";
	$res_AccountDetails= $conn->query($query_AccountDetails);//($query_AccountDetails);
	$num_rows = mysqli_num_rows($res_AccountDetails);
	
	if($num_rows=0){

	}else{
		while( $row_AccountDetails=mysqli_fetch_array($res_AccountDetails)){	
		
		
		@$id=$row_AccountDetails['id'];
$id="BAL".$id;
	}
	}	
			




echo @$status."^%#+^";

echo @$id."^%#+^";

echo @$name."^%#+^";

echo @$mobile."^%#+^";

?>