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
    <title>View / Download Prescription</title>
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
    <?php 
                    $sql = "SELECT * FROM `patient` where mail='$_POST[mailn]'";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){ 
    ?>
    <form>
        <div class="container">
            <div class="my-2 card text-center">
                <div class="card-header">
                    <h2>Prescription</h2> 
                </div>
                <div class="card-body">
                    <h5 class="card-title">Here is a details about the Patient</h5>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">1. </span>
                            <span class="input-group-text" id="basic-addon1">Name </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['name']; ?>">
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">2. </span>
                            <span class="input-group-text" id="basic-addon1">Email </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['mail']; ?>">
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">3. </span>
                            <span class="input-group-text" id="basic-addon1">Phone </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['phone']; ?>">
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">4. </span>
                            <span class="input-group-text" id="basic-addon1">Age </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['age']; ?>">
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">5. </span>
                            <span class="input-group-text" id="basic-addon1">Symptoms </span>
                        </div>
                        <input style="height: 120px" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['symptoms']; ?>">
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">6. </span>
                            <span class="input-group-text" id="basic-addon1">Prediction </span>
                        </div>
                        <input style="height: 120px" type="text" class="form-control" placeholder="Will give the prediction of disease soon" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['prediction']; ?>">
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">7. </span>
                            <span class="input-group-text" id="basic-addon1">Description </span>
                        </div>
                        <input style="height: 120px" type="text" class="form-control" placeholder="Will give the description of the disease soon" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['description']; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">8. </span>
                            <span class="input-group-text" id="basic-addon1">Precautions </span>
                        </div>
                        <input style="height: 120px" type="text" class="form-control" placeholder="Precautions will be shared soon" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['precautions']; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">9. </span>
                            <span class="input-group-text" id="basic-addon1">Medicines </span>
                        </div>
                        <input style="height: 120px" type="text" class="form-control" placeholder="Medicines will be prescribed soon" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $row['medicines']; ?>">
                    </div>

                    <a onclick="window.print()" id="download_btn" href="dashboard2.html" type="submit" class="btn btn-md btn-block btn-info my-3">Print / Download Prescription</a>
                </div>
                <div class="my-2 card-footer text-muted">
                    
                        <div class="card-header">
                        Quote
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>It is the responsibility of every individual to help - A patient in need.</p>
                                <footer class="blockquote-footer"><cite title="Source Title">Radhakrishna Institute of Technology and Engineering</cite> - RITE </footer>
                            </blockquote>
                        </div>
                    
                </div>
            </div>
            <!-- <button type="submit" class="btn btn-secondary opacity-25 btn-block d-grid my-2" name="clickhere">Download Prescription</button> -->
        </div>
    </form>
    <?php 
                  }                   
    ?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>