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
    <title>Book Appointment</title>
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
    <div class="container my-4">
      <h1 class="my-5">Book Appointment - We are Here to Cure you!!!</h1>

      <h2>Doctor Schedule List</h2>
      <div class="table-responsive my-4">
        <table class="table" id="myTable">
            <thead>
                <tr class="text-center">
                  <th scope="col">Sl.No.</th>
                  <th scope="col">Doctor's Name</th>
                  <th scope="col">Doctor's Address</th>
                  <th scope="col">Speciality</th>
                  <th scope="col">Education</th>
                  <th scope="col">PhoneNumber</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <?php 
                    $sql = "SELECT * FROM `doctor_appointment`";
                    $result = mysqli_query($conn, $sql);
                    $sno = 0;
                    while($row = mysqli_fetch_assoc($result)){
                      $sno = $sno + 1;
              ?>
              <tbody>
                <tr class="text-center">
                  <th scope="row"><?php echo $sno; ?></th>
                  <td><?php echo $row['doctorName']; ?></td>
                  <td><?php echo $row['doctorAddress']; ?></td>
                  <td><?php echo $row['speciality'];?></td>
                  <td><?php echo $row['education']; ?></td>
                  <td><?php echo $row['phoneNumber']; ?></td>
                  <td><?php 
                          if($row['status']==1){
                            echo '<p><a href="status.php?sno='.$row['sno'].'&status=0" class="btn btn-sm btn-block btn-primary">Active</a></p>';
                          }else{
                            echo '<p><a href="status.php?sno='.$row['sno'].'&status=1" class="btn btn-sm btn-block btn-warning">Inactive</a></p>';
                          }
                        ?></td>
                  <td><?php 
                          if($row['booked_or_not']==0){
                            echo '<p><a href="status2.php?sno='.$row['sno'].'&booked_or_not=1" class="btn btn-sm btn-block btn-success">BookAppointment</a></p>';
                          }else{
                            echo '<p><a href="status3.php?sno='.$row['sno'].'&booked_or_not=0" class="btn btn-sm btn-block btn-danger">CancelAppointment</a></p>';
                          }
                      ?></td>
                  <!--td>
                    <a href="" class="btn btn-sm btn-block btn-primary" id="active">Active</a>
                    <a href="" class="btn btn-sm btn-block btn-warning" id="inactive" style="display:none;">Inactive</a>
                  </td>
                  <td>
                    <a href="" class="btn btn-sm btn-block btn-success" data-toggle="modal" data-target="#exampleModalLong">Book Appointment</a>
                    <a href="" class="btn btn-block btn-sm btn-danger" style="display:none;">Cancel Appointment</a>
                  </td-->
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