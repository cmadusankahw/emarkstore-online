<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery Shopping</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-primary">
        <a class="navbar-brand" href="#">Grocery Shopping</a>
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
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">සොයන්න</button>
          </form>
        </div>
      </nav>

      <div class="container-fluid text-center" style="padding-top:30px; width:80%">

        <div class="text-center" style="padding-top:15px;">
            <h3><b>Upload</h3>
           </div>
           <hr>

        <form id="shopSel" action="uploadmodel.php" method="POST" enctype="multipart/form-data">
        <div class="form-group" style="padding-top:45px;">
           
          <input type="text"id="name" class="form-control" name="name" placeholder="Name" required>
          
          </div>
          <div class="form-group" style="padding-top:30px;">
            <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
           
          </div>
          
           <div class="form-group" style="padding-top:30px;">
             <input type="file"   name="file"  required>
           <label color: '#555';> IMAGE NAME WITHOUT SPACE OR LONG NAME</label>
          </div>
          
           <div class="form-group" style="padding-top:30px;">
           <select class="form-control" id="cat" name="cat">
                <option value="අත්‍යවශ්‍යය භාණ්ඩ">අත්‍යවශ්‍යය භාණ්ඩ</option>
                <option value="කිරිපිටි වර්ග">කිරි පිටි වර්ග</option>
                <option value="සහල් වර්ග">සහල් වර්ග</option>
                <option value="ක්ෂණික ආහාර">ක්ශණික ආහර</option>
              </select>
           
          </div>
          
          <div class="form-group" style="padding-top:30px;">
           <select class="form-control" id="type" name="type">
                <option value="1">Quntity(1,1.5,2,2.5)</option>
                <option value="o">Unit(1,2,3,)</option>

              </select>
           
          </div>
          
          
          <div style="padding-top:25px;">
            <p><button class="btn btn-primary btn-lg" type="submit"  >Submit</button></p>
           </div>   
        </form>

        

    </div>

    <footer class="container text-center">
       <hr>
      <p>Developd By &copy; Accseedd 2020</p> 
      </footer>
  



      
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </body>
    </html>
    