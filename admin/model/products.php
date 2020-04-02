<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy More - All Delivered Orders</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    
    <!--titlebar-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="#">Buy More</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../orders.php">All Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../ready.php">Ready Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="upload.php">Add Product</a>
              </li>
              <li class="nav-item">
              <a class="nav-link " href="products.php">Manage Product</a>
            </li>
         
              
            <li class="nav-item">
              <a class="nav-link disabled" href="contact.php">Contact Developer</a>
            </li>
           
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
  

        <!--deliverd orders-->
        <div class="text-center" style="padding-top:70px;">
            <h2>Delivered Orders</h2>
        </div>
        <hr>
    
        <div class="row" >
            <div class="col"></div>
            <div class="col-md-6 text-center justify-content-center">
                <table class="table table-hover table-responsive">
                    <thead>
                      <tr class="table-info">
                        <th scope="col">Product ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">type</th>
                        <th><input type="hidden" id="clik"> </th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php  
               
               require'conn.php';
               $query_AccountDetails= "select * from product ";
	$res_AccountDetails= $conn->query($query_AccountDetails);//($query_AccountDetails);
	$num_rows = mysqli_num_rows($res_AccountDetails);
	
	if($num_rows=0){
		$newarray="";
	}else{
		while( $row_AccountDetails=mysqli_fetch_array($res_AccountDetails)){	
    echo'  <tr>
      <td>'.$row_AccountDetails['id'].'</td>
      <td>'.$row_AccountDetails['name'].'</td>
      
      <td>'.$row_AccountDetails['price'].'</td>
      <td>'.$row_AccountDetails['cate'].'</td>
           <td>'.$row_AccountDetails['qtunit'].'</td>
      
      <td> <button type="button" class="btn btn-primary" id='.$row_AccountDetails['id'].'  onclick="getid1(this.id)">View Product</button></td>
      <td><td><a class="btn btn-primary btn-md" id="modelbtn" data-toggle="modal" data-target="#detailsModal" hidden> VIEW ORDER</a></td></td>
     
    </tr>';
    
		
		
	
	
	}
	}?>
                  
                  </tbody>
                  </table>
            </div>
            <div class="col"></div>
        </div>

        <!--more details-->
   <!-- Modal -->
   <div class="modal fade" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" onload="getid();">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Product Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">

            <!--modal body-->
            <form action="updateproducts.php" method="POST" enctype="multipart/form-data">
             <div class="row" style="padding:15px;">
                <div class="col" style="font-weight:bold; color:darkslateblue; text-align:right;">
                   Product ID :
                </div>
                <div class="col">
                    <input type="text" id="pid" name="pid" readonly>
                </div>
            </div>
            <div class="row"  style="padding:15px;">
                <div class="col" style="font-weight:bold; color:darkslateblue; text-align:right;">
                    Product Name :
                </div>
                <div class="col">
                     <input type="text" id="pname" name="pname">
                </div>
            </div>
            <div class="row"  style="padding:15px;">
                <div class="col" style="font-weight:bold; color:darkslateblue; text-align:right;">
                  Price :
                </div>
                <div class="col">
                    <input type="text" id="pprice" name="pprice">
                </div>
            </div>
            
             <div class="row"  style="padding:15px;">
                <div class="col" style="font-weight:bold; color:darkslateblue; text-align:right;">
                Category
                </div>
                <div class="col">
                    <input type="text" id="ptype" name="ptype">
                </div>
            </div>
            <div class="row"  style="padding:15px;">
                <div class="col" style="font-weight:bold; color:darkslateblue; text-align:right;">
                Type
                </div>
                <div class="col">
                    <input type="text" id="ptpe" name="ptpe">
                </div>
            </div>
            
            <hr>

            <!-- order table-->
            <div class="row">
              <div>
                  
                    <div class="row"  style="padding:15px;">
                <div class="col" style="font-weight:bold; color:darkslateblue; text-align:right;">
                     <label>Image</labe>
                </div>
                <div class="col">
             
                  <img src="#" alt="Image"id="fimg" width="100" height="100">
                 
                </div>
                
                
                 <div class="col">
             
                <input type="file"   name="file"  required>
                </div>
                </div>
                 <div class="col">
                 <button type="Submit" class="btn btn-success" align="center">Update</button>    
                
                </div>
            </div>
                  </div>
                 
         
               </form>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-danger" onclick="remov();">Delete</button>      
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>      
            </div>
            
        </div>
        </div>
    </div>
      <!--footer-->
      <footer class="container text-center" style="padding-top:40px;">
        <hr>
        <p>Developd By &copy; Accseedd 2020</p>  
        
      </footer>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>      
</body>
</html>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
function getid1(id) {
  
  document.getElementById("clik").value =id;
 getids1(id);
  

}






function call1() {
  
 
  
  document.getElementById("modelbtn").click();
}



function getids1(loid){
  var idn=loid;
 // alert(idn);
  document.getElementById('clik').value=loid;
  setTimeout(function(){
	//alert('');
  var accNo=$('#clik').val();
//alert(accNo);
	var param = "event=Load&accNo="+accNo;
						$.ajax
						(
						  {
							type: "POST",
							url: "productveiw.php",
							data : param,
							dataType: "text",
							success: function(xml)
							{
				//	alert(xml);
								if(xml !="")
								{
                  var field = xml.split('^%#+^');
                  document.getElementById('pid').value=field[0];
                    document.getElementById('pname').value=field[1];
                       document.getElementById('pprice').value=field[2];
                            document.getElementById('ptype').value=field[3];
                             document.getElementById('ptpe').value=field[5];
                  
                  document.getElementById("fimg").src = "../../grocery/img/products/"+field[4];;
                  call1();
                 
									//document.getElementById('tryid').value=field[0];
								//location.reload(); 
									}        	
								else
								{
									//document.getElementById('accountNumber').value="";
								//	document.getElementById('acctypee').value="";
									//document.getElementById('balancee').value="";
                   //location.reload(true);
								}
							}
						  }
						  );
						  
}, 500);
  }




  function remov(){

  setTimeout(function(){

  var accNo=$('#clik').val();

	var param = "event=Load&accNo="+accNo;
						$.ajax
						(
						  {
							type: "POST",
							url: "productremov.php",
							data : param,
							dataType: "text",
							success: function(xml)
							{
				
								if(xml !="")
								{
                  var field = xml.split('^%#+^');

                  var status=field[0];
                  if(status==1)
                  location.reload(); 

                  
               


                  
                  
                 
								
									}        	
								else
								{
							
								}
							}
						  }
						  );
						  
}, 500);
  }

</script>