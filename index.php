<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/users.css">
    <title>Basic Banking System</title>
  </head>
  <body>

      <?php include 'includes/navbar.php' ?>

    <div class="container-fluid">
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>Bank of Sparks</h1>
                  <p>The Spark Foundation Team</p>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" class="img-fluid pt-2">
              </div>
            </div>

            <div class="row activity text-center">
              <div class="col-md act">
                <img src="img/user.jpg" class="img-fluid">
                <br>
                <a href="users.php"><button type="button" class="btn btn-outline-primary">Create Users</button></a>
              </div>
              <div class="col-md act">
                <img src="img/transfer.png" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button type="button" class="btn btn-outline-primary">Make Transaction</button></a>
              </div>
              <div class="col-md act">
                <img src="img/history.png" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button type="button" class="btn btn-outline-primary">Transaction History</button></a>
              </div>
        </div>

        <footer class="text-center mt-5 py-2 container-fluid">
          <p>&copy 2021. Made by <b>Shubham Kumar</b> | The Sparks Foundation</p>
        </footer>

        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>



