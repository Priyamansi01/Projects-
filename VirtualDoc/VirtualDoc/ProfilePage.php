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


?><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Your Profile</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand " href="#">VirtualDoc</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Profile.html">Profile</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="profileDocsUpload.html">Settings</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="index_chatbot.html">ContactUs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AboutUs.html">AboutUs</a>
            </li>
          </ul>
          <form class="d-flex">
          <a class="btn btn-outline-info" type="submit">LogOut</a>
          </form>
        </div>
        
      </div>
    </nav>
    <?php 
                    // $mail=$_POST['mailn'];
                    $sql = "SELECT * FROM `profile` where email='$_POST[email]'";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){ 
    ?>
    <div class="container">
        <center><h1 class="my-2">Profile</h1></center>
    <form class="my-2" action="profile.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="mail" value="<?php echo $row['email']; ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" value="<?php echo $row['password']; ?>">
          </div>
        </div>
        <div class="row g-2">
        <div class="col-md my-1">
          <label for="exampleInputEmail1" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" required/>
        </div>

        <div class="col-md my-1">
          <label for="exampleInputEmail1" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullname" name="fullname" required/>
        </div>
      </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" placeholder="" value="<?php echo $row['address']; ?>">
        </div>
        <div class="form-group">
          <label for="address2">Address 2</label>
          <input type="text" class="form-control" name="address2" placeholder="" value="<?php echo $row['address2']; ?>">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>">
          </div>
          <div class="form-group col-md-4">
            <label for="state">State</label>
            <input type="text" class="form-control" name="state" value="<?php echo $row['state']; ?>">
            <!-- <select name="state" class="form-control" value="">
              <option selected>Choose...</option>
              <option>...</option>
            </select> -->
          </div>
          <div class="form-group col-md-2">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" name="zip" value="<?php echo $row['zip']; ?>">
          </div>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-secondary btn-md btn-block opacity-25" type="submit" name="clickhere">Update Profile</button>
        </div>
      </form>
      <?php 
                  }                   
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>