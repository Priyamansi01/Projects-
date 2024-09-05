<?php
$name = $_POST['formGroupExampleInput2'];
$mail = $_POST['formGroupExampleInput'];
$gender=$_POST['gender'];
$phone=$_POST['phno'];
$age=$_POST['ag'];
$st1 = $_POST['symptom1'];
$st2 = $_POST['symptom2'];
$st3 = $_POST['symptom3'];
$st4 = $_POST['symptom4'];
$st5 = $_POST['symptom5'];

// Create a connection
$conn = new mysqli('localhost','root','','test');

// Die if connection was not successful
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}else{
      $stmt = $conn->prepare("insert into patient( symptom1,symptom2,symptom3,symptom4,symptom5,mail,name,gender,phone,age ) values(?,?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("ssssssssss",$st1,$st2,$st3,$st4,$st5, $mail, $name, $gender, $phone, $age);
      $stmt->execute();
      echo "
                <head>
                    <!-- Required meta tags -->
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>

                    <!-- Bootstrap CSS -->
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

                    <title>Confirmation</title>
                </head>
                
                <center><h2 class='my-2'>Data Saved...</h2><br><h4>You have successfully Booked.</h4><br><a href='AppointForm.php' class='btn btn-primary'  type='submit' >Go To Home</a></center>
                
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js''+
                ' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
                    ";
      $stmt->close();
      $conn->close();
}

$query = "SELECT * FROM `registration`";
?>