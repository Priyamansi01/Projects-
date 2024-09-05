<?php 
$insert = false;
$update = false;
$delete = false;

// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
} ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Place Your Order</title>
  </head>
  <body>
    <nav class=" container navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="">VirtualDoc</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="dashboard2.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Profile.html">Profile</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Email Id</label>
                  <input type="email" class="form-control" id="formGroupExampleInput" placeholder="example123@gmail.com ">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Full Name</label>
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Address</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Write the address, where woud you like to recieve your order...">
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
              <a href="order.php" type="button" class="btn btn-primary">Place Order</a>
            </div>
          </div>
        </div>
      </div>
    <div class="container my-4">
      <h1 class="my-5">Order Medicines - We are Here to Serve you!!!</h1>
      <h2>Pharmaceutical Store List</h2>
      <div class="table-responsive my-4">
        <table class="table" id="myTable">
            <thead>
                <tr>
                  <th scope="col">Sl.No.</th>
                  <th scope="col">Shop Name</th>
                  <th scope="col">Place</th>
                  <th scope="col">Address</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <?php 
                    $sql = "SELECT * FROM `order_medicines`";
                    $result = mysqli_query($conn, $sql);
                    $sno = 0;
                    while($row = mysqli_fetch_assoc($result)){
                      $sno = $sno + 1;
              ?>
              <tbody>
                <tr class="text-center">
                  <th scope="row"><?php echo $sno; ?></th>
                  <!-- <form action="order2.php" method="post"> -->
                    <td><?php echo $row['shopName'];?></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php 
                            if($row['ordered_or_not']==1){
                              echo '<p><a href="order2.php" class="btn btn-sm btn-block btn-success">Order Here</a></p>';
                            }else{
                              echo '<p><a href="orderStatusAdmin.php?sno='.$row['sno'].'&ordered_or_not=1" class="btn btn-sm btn-block btn-danger">Cancel Order</a></p>';
                            }
                          ?></td>
                  <!-- </form> -->
                  
                <?php 
                  } 
                ?>
              </tbody>
              <!-- <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Sai Medical Store</td>
                  <td>Bhubaneshwar</td>
                  <td>S-107, Lane No. 4, Saheed Nagar</td>
                  <td>
                      <a href="" class="btn btn-sm btn-primary"  data-toggle="modal" data-target="#exampleModalLong">Order Here</a>
                      <a href="" class="btn btn-sm btn-secondary mx-2">Cancel Order</a>
                    </td>
                </tr>
              </tbody> -->
        </table>
      </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>
