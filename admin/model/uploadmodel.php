<?php
include 'conn.php';



$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['cat'];
$type=$_POST['type'];

$file=$_FILES['file'];
$file_name=$file['name'];
$file_tmp=$file['tmp_name'];
//print_r($file_name);
//echo $file_name;
$target='../../grocery/img/products/';
$file_dest='../../grocery/img/products/'.$file_name;

move_uploaded_file($file_tmp,$file_dest);

  $sql = "INSERT INTO product(name, price,cate, img,qtunit)
        VALUES ('$name', '$price','$category','$file_name','$type')";

    if ($conn->query($sql) === TRUE) {
       
        echo "<script>alert('New record created successfully');
       
        </script>";
       // header('refresh:5;Location:../../add_event.php');
        // header('Location: ../add_event.php');
 header('refresh:1; upload.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }   
 






?>