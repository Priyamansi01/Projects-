<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>View Details</title>
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
    <center><h3 class="my-2">Enter email id To proceed !!</h3></center>
    <form action="ProfilePage.php" method="post">
        <div class="container my-2 input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">E-mail: </span>
            </div>
            <input name="email" type="text" class="form-control" placeholder="Mail Id" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="container">
            <button type="submit" value="submit" class="btn btn-secondary btn-sm btn-block">Next</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>