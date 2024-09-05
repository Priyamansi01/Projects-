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
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <title>Add Shops</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="">VirtualDoc</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="AdminDashboard.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Profile.html">Profile</a>
          </li>
        </ul>
      </div>
    </nav>

    

    <div class="container my-4">
      <h1 class="text-center">Admin Page - Add shops here!!!</h1>
      <form class="container my-2" action="AddShop.php" method="post">
        <div class="form-group">
            <label for="exampleInput1">Shop Name</label>
            <input type="text" class="form-control" id="exampleInput1" placeholder="Shop's Name" name="doctorName" required>
        </div>
        <div class="form-group">
            <label for="exampleInput1">Place</label>
            <input type="text" class="form-control" id="exampleInput2" placeholder="Shop's Place" name="doctorAddress" required>
        </div>
        <div class="form-group">
            <label for="exampleInput1">Address</label>
            <input type="text" class="form-control" id="exampleInput3" placeholder="Address" name="speciality" required>
        </div>
        <button type="submit" class="btn btn-block btn-info">Submit</button>
      </form>
      <h2 class="my-4 text-center">Shops List</h2>
      <div class="table-responsive my-4">
        <table class="table" id="myTable">
            <thead>
                <tr class="text-center">
                  <th scope="col">Sl.No.</th>
                  <th scope="col">Shop Name</th>
                  <th scope="col">Place</th>
                  <th scope="col">Address</th>
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
                  <td><?php echo $row['shopName']; ?></td>
                  <td><?php echo $row['place']; ?></td>
                  <td><?php echo $row['address'];?></td>
                <?php 
                  } 
                ?>
              </tbody>
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