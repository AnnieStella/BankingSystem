<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    
  </head>

  <body >
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" >
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color :white;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h1>We Serve You Better</h1>
                </div>
              </div>
              
            </div>

      <!-- Activity section -->
            <div class="row activity text-center" >
                  <div class="col-md act" id="card" style="height:300px; max-width: 250px; margin:40px; padding:0px; border:2px solid #380036; border-radius:20px; box-shadow:2px 2px 2px #380036;" >
                    <img src="img/customer.png" class="img-fluid" style="width:210px;" >
                    <br>
                    <a href="customerdetails.php"><button style="background-color : #380036;">View Customers</button></a>
                  </div>
                  <div class="col-md act" style="height:300px; max-width: 250px; margin:40px; padding:0px; border:2px solid #380036; border-radius:20px; box-shadow:2px 2px 2px  #380036;">
                    <img src="img/imageedit_5_6039903887.png" class="img-fluid" style="width:210px;">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #380036;">Transfer Money</button></a>
                  </div>
                  <div class="col-md act" style="height:300px; max-width: 250px; margin:40px; padding:0px; border:2px solid #380036; border-radius:20px; box-shadow:3px 3px 5px  #380036;">
                    <img src="img/images.png" class="img-fluid" style="width:140px;">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #380036;">Transaction History</button></a>
                  </div>
            </div>
      </div>
      
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>