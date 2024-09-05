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
        <form class="my-3" action="AppointFormNew2.php" method="post">
            <div class="form-group my-2">
              <label for="formGroupExampleInput">Email Id</label>
              <input type="email" class="form-control" name="formGroupExampleInput" placeholder="example1@gmail.com" required>
            </div>
            <div class="form-group my-2">
              <label for="formGroupExampleInput2">Full Name</label>
              <input type="text" class="form-control" name="formGroupExampleInput2" placeholder="Full Name" required>
            </div>
            <div class="form-group my-2">
              <label for="phno">Phone Number</label>
              <input type="text" class="form-control" name="phno" placeholder="Phone Number" required>
            </div>
            <div class="form-group my-2">
              <label for="ag">Age</label>
              <input type="text" class="form-control" name="ag" placeholder="Put Your Age" required>
            </div>
            <h5 class="my-2">Select Your Symptoms</h5>
            <?php
                            $con = mysqli_connect("localhost","root","","test");

                            $brand_query = "SELECT * FROM symptoms";
                            $query_run = mysqli_query($con, $brand_query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $brand)
                                {
                                    ?>
                                    <input type="checkbox" name="brandslist[]" value="<?= $brand['name']; ?>" /> <?= $brand['name']; ?> <br/>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "No Record Found";
                            }
            ?>
            <div class="form-group mt-3">
                <button name="save_multicheckbox" class="btn btn-secondary opacity-50 btn-block d-grid">Send Details</button>
            </div>
            </form>
        
    </div>            
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>