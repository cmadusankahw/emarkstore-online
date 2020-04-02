<?php
include 'conn.php';



$id = $_POST['pid'];
$name = $_POST['pname'];
$price = $_POST['pprice'];
$cate = $_POST['ptype'];
$type = $_POST['ptpe'];







$file=$_FILES['file'];
$file_name=$file['name'];
$file_tmp=$file['tmp_name'];
print_r($file);
echo $file_name;
$target='../../grocery/img/products/';
$file_dest='../../grocery/img/products/'.$file_name;

move_uploaded_file($file_tmp,$file_dest);



$query1 ="UPDATE product SET id='$id',name='$name',price='$price',cate='$cate',img='$file_name',qtunit='$type' WHERE   id='$id'";

if ($conn->query($query1) === TRUE) {
     
        echo "<script>alert('New record Update successfully');
       
        </script>";
      
 header('refresh:1; products.php');}
        else{
              echo("Error description: " . mysqli_error($conn));
           
       
       
        }








 






?>