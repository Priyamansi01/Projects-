<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Main Page</title>
  </head>
  <body>
    <nav class="container navbar navbar-expand-lg navbar-light bg-light "><!--sticky-sm-top"     // was inside nav class for keeping the navbar constant at the top. -->
        <div class="container">
          <a class="navbar-brand" href="">VirtualDoc</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="vr"></div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active disabled" aria-current="page" href="">Home</a>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">ContactUs</a> -->
                <a class="nav-link" href="#contact_us">ContactUs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#newabout_us">AboutUs</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> -->
                  <!--This line already commented-------------=== li><a class="dropdown-item" href="#about_us">About Us</a></li-->
                  <!-- <li><a class="dropdown-item" href="AboutUs.html">About Us</a></li> -->
                  <!--This line already commented-------------=== li><a class="dropdown-item" href="#">Donate Us</a></li-->
                  <!-- <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#sign_up">Connect Wih Us</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#sign_in">Learn More Or Start Now</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Chat With Your VirtualDoc</a>
              </li> -->
            </ul>
            <form class="d-flex" action="" method="post" target="_blank">
              <input class="form-control me-2" type="text" name="keywords" placeholder=" Search . . ." aria-label="Search" required/>
              <button class="btn btn-outline-warning" name="keys_submit">Search</button>
              <a href="SignIn.html" class="btn btn-outline-info mx-2" type="submit">SignIn</a>
            </form>
            <?php 
              $base="";
              $search_URL="http://www.google.com/search?q=";
              if(isset($_POST['keys_submit'])){
                $keywords=$_POST['keywords'];
                header("location: ".$search_URL.$keywords.' '.$base);

              } 
            ?>
          </div>
        </div>
      </nav>
    <!-- Vertically centered scrollable modal -->
    <!--div class="container">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Contact Us
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sign_in">
          Sign In
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sign_up">
          Sign Up
        </button>
    </div-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Sender Email:</label>
                    <input type="text" class="form-control" id="recipient_name" required>
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message_text" required></textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
              </div>
            </div>
          </div>
        </div>
    <div class="modal fade" id="sign_in" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Log In </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Enter your Email:</label>
                    <input type="text" class="form-control" id="recipient_email" placeholder="example@gmail.com" required>
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Enter your Password:</label>
                    <input type="text" class="form-control" id="recipient_password" required>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="index_chatbot.html" type="button" class="btn btn-primary">SignIn</a>
              </div>
            </div>
          </div>
    </div>
        <div class="modal fade" id="sign_up" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register As</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Enter Email:</label>
                    <input type="text" class="form-control" id="register_mail" required>
                  </div>
                  <label for="message-text" class="col-form-label text-centered">Select, how do you want to use this application...</label>
                  <textarea class="form-control" id="message_text">If you are a doctor select 'Doctor' , otherwise select 'Normal User/ Patient'. If you are an administrator, then select 'Admin'. </textarea>
                  <hr>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label bg-gray">You want to register as :</label>
                    <br>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                      <label class="form-check-label" for="inlineRadio1">Admin</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                      <label class="form-check-label" for="inlineRadio2">Doctor</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                      <label class="form-check-label" for="inlineRadio3">Normal User/ Patient</label>
                    </div>
                    
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="Register.html" type="button" class="btn btn-primary">Continue</a>
              </div>
            </div>
          </div>
        </div>
    <div id="introduction" class="container" style="padding-top: 30px; padding-bottom: 20px;">
      <div class="clearfix">
        <img src="img/online_doctor.jpeg" class="col-sm-5 float-sm-end mb-3 ms-sm-3 my-5" alt="VirtualDoctor">
          <!-- <div class="container overflow hidden my-5 w-50 col-sm-6 float-sm-end mb-3 ms-sm-3">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                  <img src="img/Patient.jpeg" class="d-block w-100" alt="Patient Care">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Patient Care</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                  <img src="img/Support.jpeg" class="d-block w-100" alt="Virtual Support">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Virtual Support</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/RealDoctor.jpeg" class="d-block w-100" alt="Take online consultancy from Real doctors.">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Take online consultancy from Real doctors.</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div> -->
          <div class="col-sm-7">
            <h1>VirtualDoc Consultancy</h1>
            <p class="my-3">
              As modern medicine allows people to live longer, the demand for doctor is expected to rise. However thanks to technology, there are ways for us to reach doctor without visiting the clinic. With an online consultation from the doctor, you can get the health care you require.
            </p>
            <p>
              Virtual Doc is a web based application which will work as patient’s helper to find appropriate doctor if patients feel sick and it will do all the things a patient need when they try to go to doctor and get treatment. It is a system some statistical data, PHP, JavaScript and Bootstrap and gives a patient the facility to book appointments with doctor, get prescription by the symptoms from a doctor and order medicines from a shop as per their choice near their house.
            </p>
            <p>
              With the application, doctors will be able to view the patient’s symptoms and details and predict the disease, as well as prescribe medicines with proper precautions. There is also a facility of administration, which will be helping both doctors and shopkeepers to deal with each user (patient). Admins can add shop, doctors to the system by getting a mail from the contact us page of the web application.
            </p>
            <a href="SignIn.html" class ="btn btn-dark btn-md my-3">Start Now</a>
			      <a href="Register.html" class ="btn btn-outline-success btn-md  my-3">Sign Up</a>
          </div>
        
      </div>
    </div>

    <div id="WhatWeDo" class="container border border-5 rounded-3 bg-success p-2 text-white bg-opacity-25 p-3 mb-2 bg-dark my-5 overflow-hidden" style="padding-top: 60px;">
      <div class="divinner">
          <div class="moduletable whoweare">
              <center>  <h1>What We Do!</h1>  </center>
          </div>
      </div>
      <div class="row my-4">
        <div class="col order-first mx-3 my-2 ">
          <a href="#" class="thumbnail">
          <img src="img/Patient.jpeg" 
          class="col-md-10 mb-3 ms-md-3" alt="Patient's Care">
          <div class="caption"><center>
              <h2 class="fst-italic">We Care Our Patient's</h2>
              <!-- <h4 class="fs-6">Third in DOM, ordered last!</h4></center> -->
          </div>
          </a>
        </div>
        <div class="col mx-3 my-2">
          <a href="#" class="thumbnail">
          <img src="img/RealDoctor.jpeg" 
          class="col-md-10 mb-3 ms-md-3" alt="Consult Real Doctors">
          <div class="caption"><center>
              <h2 class="fst-italic">Consult Real Doctors</h2>
              <!-- <h4 class="fs-6">Second in DOM, ordered last!</h4></center> -->
          </div>
          </a>
        </div>
        <div class="col order-last mx-3 my-2">
          <a href="#" class="thumbnail">
          <img src="img/images.jpeg" 
          class="col-md-10 mb-3 ms-md-3" alt="Chat with VirtualDoc">
          <div class="caption"><center>
              <h2 class="fst-italic">Chat with VirtualDoc</h2>
              <!-- <h4 class="fs-6">First in DOM, ordered last!</h4></center> -->
          </div>
          </a>
        </div>
      </div>
    </div>

    <!-- <div class="container overflow hidden my-5 w-50">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="2000">
            <img src="img/Patient.jpeg" class="d-block w-100" alt="Patient Care">
            <div class="carousel-caption d-none d-md-block">
              <h5>Patient Care</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="img/Support.jpeg" class="d-block w-100" alt="Virtual Support">
            <div class="carousel-caption d-none d-md-block">
              <h5>Virtual Support</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/RealDoctor.jpeg" class="d-block w-100" alt="Take online consultancy from Real doctors.">
            <div class="carousel-caption d-none d-md-block">
              <h5>Take online consultancy from Real doctors.</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
     -->
    <div id="contact_us" class="container overflow-hidden" style="padding-top: 40px;">
        <center><h1>Contact Us</h1>
        <h2>What's your problem - Let's solve!!!</h2></center>
        <form  action="javascript:sendmail()" method="post">
          <div class="mb-3"  style="padding-top: 20px;">
            <label for="exampleFormControlInput1" class="form-label">Enter your Email address</label>
            <input type="email" class="form-control" id="useremail" name="useremail" placeholder="name@example.com" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Enter your Query or Information</label>
            <textarea class="form-control" id="shopkeepermessage" rows="3" name="shopkeepermessage" placeholder="Text Here !!" required></textarea>
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-secondary" type="submit">Send</button>
          </div>
        </form>
    </div>
    <!--hr class="dropdown-divider"-->

    <div class="container overflow-hidden my-5">
          <div class="card text-center">
            <div class="card-header">
                <h3>We can We will</h3>
            </div>
            <div class="card-body">
              <h5 class="card-title">VirtualDoc Consultancy</h5>
              <p class="card-text">
                With the upgrading of this world into digitalization, it helped the people a lot. Digitalization made things go easy. This digitalization made every possible thing to become online and that’s the concept which we used to build this application. We are here to help more than 1000’s of people for their shop, medicine store and for the patients to get a priority treatment for the suspected disease and get prescribed medicines from the shop/store.
              </p>
            </div>
          </div>
    </div>

    <!-- <div id="Video_div" class="container overflow-hidden w-50">
      <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
      </div>
    </div> -->

    <div id="newabout_us" class="container overflow-hidden" style="padding-top: 10px; padding-bottom: 20px;">
      <div class="container">
          <div class="moduletable whoweare">
              <center>    <h1>About us</h1>
              <div class="container">
              <h5>
              VirtualDoc is a web application developed by the final year students (2018-22 batch) for their major project. On getting a problem statement of having issues for the patients facing issues for travelling or visit any Doctor, also for the shopkeepers to sell medicines, we a team of 9 members thought of making a web application where a shopkeeper, patient, Doctor and admin can login and use as per their online requirement.
              </h5>
              </div>  </center>
          </div>
      </div>
      <div class="mx-3 container row" style="padding-top: 10px;">
          <div class="card mx-2" style="width: 18rem; padding-top: 20px;">
              <img src="DevelopersImages/AjiteshMahapatra.jpg" class="card-img-top" alt=" Photo" style="height: 20rem;">
              <div class="card-body text-center">
              <h5 class="card-title">Ajitesh Mahapatra</h5>
              <p>Full Stack Developer</p>
              <!-- <p class="card-text" style="height: 8rem;">Writing clean, functional codes on the front and back-end, testing and finding bugs and familiar with frameworks and all third party libraries.</p> -->
              <!-- <div class="d-grid gap-2"><a href="#" class="btn btn-secondary opacity-50">Contact Me</a></div> -->
              </div>
          </div>

          <div class="card mx-2" style="width: 18rem; padding-top: 20px;">
              <img src="DevelopersImages/Rahul.jpg" class="card-img-top" alt=" Photo" style="height: 20rem;">
              <div class="card-body text-center">
              <h5 class="card-title">Rahul Rout</h5>
              <p>Graphics Designer</p>
              <!-- <p class="card-text" style="height: 8rem;">Creating all required logos, posters, quotations, background images and suggesting layouts for the frontend.</p> -->
              <!-- <div class="d-grid gap-2"><a href="#" class="btn btn-secondary opacity-50">Contact Me</a></div> -->
              </div>
          </div>

          <div class="card mx-2" style="width: 18rem; padding-top: 20px;">
              <img src="DevelopersImages/Lingraj.jpg" class="card-img-top" alt=" Photo" style="height: 20rem;">
              <div class="card-body text-center">
              <h5 class="card-title">Lingraj Padhy</h5>
              <p>Chatbot Backend Developer</p>
              <!-- <p class="card-text" style="height: 8rem;">Building the Chatbot interface such that one can make use of the Chatbot to link it for the required fields.</p> -->
              <!-- <div class="d-grid gap-2"><a href="#" class="btn btn-secondary opacity-50">Contact Me</a></div> -->
              </div>
          </div>

          <div class="card mx-2" style="width: 18rem; padding-top: 20px;">
              <img src="DevelopersImages/AshishDharua.jpg" class="card-img-top" alt=" Photo" style="height: 20rem;">
              <div class="card-body text-center">
              <h5 class="card-title">Ashish Dharua</h5>
              <p>Database Manager</p>
              <!-- <p class="card-text" style="height: 8rem;">The database is being managed, created, updated, deleted and as required by backend, queries are being asked to the database manager.</p> -->
              <!-- <div class="d-grid gap-2"><a href="#" class="btn btn-secondary opacity-50">Contact Me</a></div> -->
              </div>
          </div>
      </div>
      
    <div class="container my-2">
      <a href="AboutUs.html" type="button" class="btn btn-dark d-grid btn-md btn-block my-2 secondy-7 opacity-75">Learn More</a>
    </div>
        </div>
    
    <footer class="container overflow-hidden" style="padding-top: 20px;">
        <div class="card text-center">
            <!-- <div class="card-header">
                <h3>Progressive People. Powerful transformation.</h3>
            </div>
            <div class="card-body">
              <h5 class="card-title">VirtualDoc Consultancy</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
              <!--Already Commented ------====a href="#" class="btn btn-primary mx-2">Home</a-->
              <!-- <a href="AboutUs.html" class="btn btn-outline-info  mx-2 my-3">About Us</a>
              <a href="#contact_us" class="btn btn-outline-info mx-2 my-3">Contact Us</a> -->
              <!--Already Commented ------====a href="#" class="btn btn-primary mx-2 my-3">Donate Us</a-->
              <!-- <a href="Register.html" class="btn btn-outline-info mx-2 my-3">Connect Us</a>
            </div> -->
            <div class="container overflow-hiddenbg-success p-2 text-dark bg-opacity-25 p-3 mb-2 bg-dark" style="padding-top: 10px; padding-bottom: 40px;">
                <center>Copyright © VirtualDoc Consultancy. All Rights Reserved ​| Contact Us: +91 8763587595</center>
            </div>
          </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
            Subject : "Contact Us",
            Body : shopkeepermessage
        }).then(
          message => alert(message),
          window.open("successfullyContacted.php", "_top") //"https://www.geeksforgeeks.org", "_blank")
        );
      }
    </script>
  </body>
</html>