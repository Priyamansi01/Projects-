<?php
session_start();
$name = $_POST['formGroupExampleInput2'];
$mail = $_POST['formGroupExampleInput'];
$phone=$_POST['phno'];
$age=$_POST['ag'];
$brandlist = $_POST['brandslist'];
$brandlist = implode(", ",$brandlist);
$conn = mysqli_connect("localhost","root","","test");

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        // if(isset($_POST['save_multicheckbox']))
        // {
            // $q = "insert into patient( symptoms,mail,name,phone,age ) values($brandlist, $mail, $name, $phone, $age)";
            // mysqli_query($conn,$q);
            $stmt = $conn->prepare("insert into patient( symptoms,mail,name,phone,age ) values(?,?,?,?,?)");
            $stmt->bind_param("sssss",$brandlist, $mail, $name, $phone, $age);
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
                    
                    <center><h2 class='my-2'>Data Saved...</h2><br><h4>You have successfully Sent details .</h4><br><a href='Appointment.php' class='btn btn-primary'  type='submit' >Go Back</a></center>
                    
                    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js''+
                    ' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
                        ";
            $stmt->close();
            $conn->close();
        // }
    }
