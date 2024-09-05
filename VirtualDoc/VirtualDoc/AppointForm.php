<?php 

// Create a connection
$conn = new mysqli('localhost','root','','test');

// Die if connection was not successful
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}
  
$query = "SELECT * FROM `registration`";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Appointment Form</title>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center my-3">Here, You will get the Doctor's Appointment. Please fill up the form !!!</h2>
        <form class="my-3" action="AppointForm2.php" method="post">
          <center><h5>Select Your Symptoms</h5></center>
          <div id="symptoms" class="dropdown my-2">

              <div class="container">
                <label for="symptom1">Symptom 1: </label>
                <button class="btn btn-sm btn-info-outline btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select here
                </button>
                <div name="symptom1" id="symptom1" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item">---Select Symptom---</a>
                  <?php $result = mysqli_query($conn,$query); while($row=mysqli_fetch_array($result)){ ?>
                  <a class="dropdown-item" onclick="document.getElementById('dropdownMenuButton').innerHTML = '<?php echo $row[3]; ?>'"><?php echo $row[3]; ?></a>
                  <?php } mysqli_free_result($result);  ?>
                  </div>
              </div>

              <div class="container">
                <label for="symptom2">Symptom 2: </label>
                <button class="btn btn-sm btn-info-outline btn-block dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select here
                </button>
                <div name="symptom2" id="symptom2" class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                  <a class="dropdown-item">---Select Symptom---</a>
                  <?php $result = mysqli_query($conn,$query);  while($row=mysqli_fetch_array($result)){ ?>
                  <a class="dropdown-item" onclick="document.getElementById('dropdownMenuButton2').innerHTML = '<?php echo $row[2]; ?>'"><?php echo $row[2]; ?></a>
                  <?php } mysqli_free_result($result);  ?>
                  </div>
              </div>
              <div class="container">
                <label for="symptom3">Symptom 3: </label>
                <button class="btn btn-sm btn-info-outline btn-block dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select here
                </button>
                <div name="symptom3" id="symptom3" class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                  <a class="dropdown-item">---Select Symptom---</a>
                  <?php $result = mysqli_query($conn,$query);  while($row=mysqli_fetch_array($result)){ ?>
                  <a class="dropdown-item" onclick="document.getElementById('dropdownMenuButton3').innerHTML = '<?php echo $row[2]; ?>'"><?php echo $row[2]; ?></a>
                  <?php } mysqli_free_result($result);  ?>
                  </div>
              </div>
              <div class="container">
                <label for="symptom4">Symptom 4: </label>
                <button class="btn btn-sm btn-info-outline btn-block dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select here
                </button>
                <div name="symptom4" id="symptom4" class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
                  <a class="dropdown-item">---Select Symptom---</a>
                  <?php $result = mysqli_query($conn,$query);  while($row=mysqli_fetch_array($result)){ ?>
                  <a class="dropdown-item" onclick="document.getElementById('dropdownMenuButton4').innerHTML = '<?php echo $row[2]; ?>'"><?php echo $row[2]; ?></a>
                  <?php } mysqli_free_result($result);  ?>
                  </div>
              </div>
              <div class="container">
                <label for="symptom5">Symptom 5: </label>
                <button class="btn btn-sm btn-info-outline btn-block dropdown-toggle" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Select here
                </button>
                <div name="symptom5" id="symptom5" class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                  <a class="dropdown-item">---Select Symptom---</a>
                  <?php $result = mysqli_query($conn,$query);  while($row=mysqli_fetch_array($result)){ ?>
                  <a class="dropdown-item" onclick="document.getElementById('dropdownMenuButton5').innerHTML = '<?php echo $row[2]; ?>'"><?php echo $row[2]; ?></a>
                  <?php } mysqli_free_result($result);  ?>
                  </div>
              </div>
          </div>
        

          <div class="row g-2">
            <div class="form-group col-md my-1">
              <label for="formGroupExampleInput">Email Id</label>
              <input type="email" class="form-control" id="formGroupExampleInput" placeholder="example1@gmail.com" required>
            </div>
            <div class="form-group col-md my-1">
              <label for="formGroupExampleInput2">Full Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Full Name" required>
            </div>
          </div>
          
          <label for="gender" class=" my-2">Gender</label>
          <div id="gender" class="form-group form-inline">
                    <div class="form-check mx-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check mx-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Female
                        </label>
                    </div>
                    <div class="form-check mx-2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Others
                        </label>
                    </div>
          </div>
          <div class="row">
            <div class="form-group col-md my-2">
              <label for="phno">Phone Number</label>
              <input type="text" class="form-control" id="phno" placeholder="Phone Number" required>
            </div>
            <div class="form-group col-md my-2">
              <label for="ag">Age</label>
              <input type="text" class="form-control" id="ag" placeholder="Put Your Age" required>
            </div>
          </div>
          
          <script>
            function myFunction() {
              document.getElementById("book_appointment_btn").style.display = "none";
              document.getElementById("download_btn").style.display = "block";
              alert("Now you can download your Appointment details !!!");
            }
          </script>
          <div class="form-group">
            <a onclick="window.print()" id="download_btn" href="dashboard2.html" type="submit" class="btn btn-md btn-block btn-info my-3" style="display: none;">Print/Download this Appointment Form</a>
          
            <a onclick="myFunction()" id="book_appointment_btn" type="submit" class="btn btn-md btn-block btn-success my-3">Click Here to Book Appointment</a>
          </div>
        </form>
        
    </div>            
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>