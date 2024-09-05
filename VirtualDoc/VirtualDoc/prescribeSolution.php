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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Doctor - Disease prediction </title>
  </head>
  <body>
    <!-- <script>
    var r = window.location.search;
    alert(r);</script> -->
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
                    // $mail=$_POST['mailn'];
                    $sql = "SELECT * FROM `patient` where mail='$_POST[mailn]'";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){ 
    ?>
    <div class="container">
        <div class="card my-2 border-secondary mb-3">
            <div class="card-header">Patient Details</div>
            <div class="card-body text-secondary">
              <h5 class="card-title">See Patient Symptoms Here</h5>
              <p class="card-text">Here is a detailed description of the patient.</p>
              <!-- <textarea id="textarea" class="btn-block d-grid" rows="3"> -->
                Symptoms: <td><?php echo $row['symptoms']; ?></td><br>
                Mail Id: <td name="mail"><?php echo $row['mail']; ?></td><br> 
                Name: <td><?php echo $row['name']; ?></td><br> 
                PhoneNumber: <td><?php echo $row['phone']; ?></td><br> 
                Age: <td><?php echo $row['age']; ?></td>
              <!-- </textarea> -->
            </div>
        </div>
    </div>
    <form action="PredictDiseaseByDoctor.php" method="post">
    <div class="container">
        <div class="card my-2">
          <div class="card-header">
              Enter patients emailid here.
          </div>
          <div class="card-body">
              <input type="email" name="mail2" id="mail2" placeholder="Enter patient's Email..." class="btn-block d-grid"/>
          </div>
        </div>
        <div class="card my-2">
          <div class="card-header">
              Predict Disease
          </div>
          <div class="card-body">
            <h5 class="card-title">Predict the disease of the patient.</h5>
            <textarea id="textarea" class="btn-block d-grid" rows="3" placeholder="Enter your prediction here..." name="prediction"></textarea>
            <!-- <p class="card-text">Predict the disease  from the symptoms of the patient table.</p> -->
            <!-- <a href="#" class="btn btn-secondary opacity-25 btn-block d-grid">Go somewhere</a> -->
          </div>
        </div>
        <div class="card my-2">
            <div class="card-header">
                Disease Description
            </div>
            <div class="card-body">
              <h5 class="card-title">Describe the disease of the disease.</h5>
              <textarea id="textarea" class="btn-block d-grid" rows="3" placeholder="Enter disease description here..." name="description"></textarea>
              <!-- <p class="card-text">Predict the disease  from the symptoms of the patient table.</p> -->
              <!-- <a href="#" class="btn btn-secondary opacity-25 btn-block d-grid">Go somewhere</a> -->
            </div>
        </div>
        <div class="card my-2">
            <div class="card-header">
              Precautions To be Taken
            </div>
            <div class="card-body">
              <h5 class="card-title">Tell patients what must they follow. </h5>
              <textarea id="textarea" class="btn-block d-grid" rows="3" placeholder="Enter required precautions here..." name="precautions"></textarea>
              <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
              <!-- <a href="#" class="btn btn-secondary opacity-25 btn-block d-grid">Go somewhere</a> -->
            </div>
        </div>
        <div class="card my-2">
            <div class="card-header">
              Medicines Required
            </div>
            <div class="card-body">
              <h5 class="card-title">Prescribe medicines for your patient.</h5>
              <textarea id="textarea" class="btn-block d-grid" rows="3" placeholder="Prescribe medicines here..." name="medicines"></textarea>
              <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
              <!-- <a href="#" class="btn btn-secondary opacity-25 btn-block d-grid">Go somewhere</a> -->
            </div>
        </div>
        <button type="submit" class="btn btn-secondary opacity-25 btn-block d-grid my-2" name="clickhere">Click here to Prescribe </button>
        
        <div class="card">
            <div class="card-header">
              Quote
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
          </div>
    </div>
    </form>
        <?php 
                  }                   
        ?>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>