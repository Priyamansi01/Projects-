<?php 
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
    <title>Place Order</title>
  </head>
  <body>
    <nav class="container navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand " href="#">VirtualDoc</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" d-grid gap-2 d-md-flex justify-content-md-end mx-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Profile.html">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index_chatbot.html">ContactUs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="AboutUs.html">AboutUs</a>
              </li>
            </ul>
          </div>
          <form class="d-flex">
            <a class="btn btn-outline-info" type="submit">LogOut</a>
          </form>
        </div>
    </nav>
    <div class="container my-5">
        <center><h1 class="container my-5">Place your order here!!!</h1></center>
        <!--?php 
                    $sql = "SELECT * FROM `order_medicines` where shopName='$_POST[shop]' ";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){ 
        ?-->
            <form action="order2database.php" method="post" >
                <!-- <center><h2>Shop Name: <!?php echo $_POST['shop'];?></h2></center> -->
                <div class="form-group">
                  <label for="shopName">Shop Name</label>
                  <input type="text" class="form-control" id="shopName" placeholder="Enter the Shop Name you have selected..." name="shopName">
                </div>
                <div class="form-group">
                  <label for="patientemail">Email Id</label>
                  <input type="email" class="form-control" id="patientemail" placeholder="example123@gmail.com" name="patientemail">
                </div>
                <div class="form-group">
                  <label for="patientname">Full Name</label>
                  <input type="text" class="form-control" id="patientname" placeholder="Enter your Full Name..." name="patientname">
                </div>
                <div class="form-group">
                    <label for="patientaddress">Address</label>
                    <input type="text" class="form-control" id="patientaddress" placeholder="Write the address, where woud you like to recieve your order..." name="patientaddress">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01">Upload The Prescription</span>
                    </div>
                    <div class="custom-file bg-light">
                        <input type="file" class="form-control-file mx-5" id="prescription" aria-describedby="inputGroupFileAddon01" name="prescription">
                        <!-- <label class="custom-file-label" for="prescription">Choose file</label> -->
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="inputGroupFileAddon02">Browse</span>
                    </div>
                </div>
                <p>Select the prescription downloaded from view / download prescription page.</p>
                <button name="clickhere" type="submit" class="btn btn-primary btn-md btn-block d-grid">Place Order</a>
            </form>
            <!--?php 
                  }                   
            ?-->
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