<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Contact Patient</title>
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
              <a class="nav-link" href="index_chatbot.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Profile.html">Profile</a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="container">
        <div class="card my-2">
            <div class="card-header">
                Contact Patient
            </div>
            <div class="card-body">
              <h5 class="card-title">Contact Patient By Email</h5>
              <p class="card-text">Send your details and price of the medicines details to the patient here.</p>
              <hr>
              <form action="javascript:sendmail()" method="post">
                <div class="form-group">
                  <label for="useremail">Email address</label>
                  <input type="email" class="form-control" id="useremail" name="useremail" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="shopkeepermessage">Your Message Here</label>
                  <textarea class="form-control" id="shopkeepermessage" rows="3" name="shopkeepermessage"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary btn-block d-grid opacity-50" id="submit" name="submit">Submit</button>
              </form>  

            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>

      function sendmail(){
        var btn = document.getElementById("submit");
        var useremail = document.getElementById("useremail").value;
        var shopkeepermessage = document.getElementById("shopkeepermessage").value;
        Email.send({
            Host : "smtp.elasticemail.com",
            Username : "ajiteshm329@gmail.com",
            Password : "E0ADCC1B24E516606E34066B7C442279A945",//password from elastic email site 
            To : useremail,
            From : "ajiteshm329@gmail.com",
            Subject : "You are contacted by the shopkeeper",
            Body : shopkeepermessage
        }).then(
          message => alert(message),
          window.open("Shopkeeper.php", "_top") //"https://www.geeksforgeeks.org", "_blank")
        );
      }
    </script>
  </body>
  
</html>