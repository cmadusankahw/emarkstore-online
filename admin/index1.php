<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy More</title>
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
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="orders.php">All Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ready.php">Ready Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="model/upload.php">Add Product</a>
              </li>
              <li class="nav-item">
              <a class="nav-link " href="model/products.php">Manage Product</a>
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
  
      <main role="main">
  
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron jumbotron-info">
          <div class="container" style="padding-top:30px;">
            <h1 class="display-3">Hello, shopname</h1>
            <div class="pd-t" style="padding-top:30px;">
                <p>Welcome to Buy More Interactive System. This system is designed to handle online orders for your business.</p>
                <p><a class="btn btn-primary btn-lg" href="contact.html" role="button">Learn more &raquo;</a></p>
            </div>
          </div>
        </div>
  
        <div class="container">
          <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-4">
              <h2>Orders</h2>
              <p> View Available Orders for the shop. All new and waiting orders will be listed here.</p>
              <p><a class="btn btn-secondary btn-info" href="orders.php" role="button">View Orders &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Ready Orders</h2>
              <p>View  ready to Delivey orders. Customers will be automatically notified once an order is <b> Ready</b> </p>
              <p><a class="btn btn-secondary btn-info" href="ready.php" role="button">View Orders &raquo;</a></p>
            </div>
            <div class="col-md-4">
              <h2>Delivered Ordrs</h2>
              <p>View and Update all the delivered orders. Once Delivered orders are no more valid for collection.</p>
              <p><a class="btn btn-secondary btn-info" href="delivered.php" role="button">View Orders &raquo;</a></p>
            </div>
          </div>
  
          <hr>
  
        </div> <!-- /container -->
  
      </main>
  
      <footer class="container text-center">
        <p>Developd By &copy; Accseedd 2020</p> 
      </footer>
  





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>