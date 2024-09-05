<?php
    $sel = $_POST['sel'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $emailId = $_POST['emailId'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    
    //Connection to database
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        if($cpassword===$password and $sel!=="- - - Select - - -"){
            $stmt = $conn->prepare("insert into profile(sel,username, fullname, email, password) values(?,?,?,?,?)");
            $stmt->bind_param("sssss",$sel,$username, $fullname, $emailId, $password);
            $stmt->execute();
            // echo "";
                
            // $mailto = $emailId;
            // // $from = "ajiteshm329@gmail.com";
            // $subject = "Confirmation for Registration";
            // $message = "Your Username: ". $username."\n\n Your Password: ". $password. "\n\n You are registered successfully to the VirtualDoc Consultancy.";
            // $headers = "From: noreply@gmail.com";// . "\r\n" . "CC: someoneElse@example.com";
            
            // mail($mailto, $subject, $message, $headers);
            
            echo "
                <head>
                    <!-- Required meta tags -->
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>

                    <!-- Bootstrap CSS -->
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

                    <title>Confirmation</title>
                </head>
                
                <center><h2 class='my-2'>Data Saved...</h2><br><h4>You have successfully Registerd.</h4><br><a href='SignIn.html' class='btn btn-primary'  type='submit' >Sign In</a></center>
                
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js''+
                ' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
                    ";
            $stmt->close();
            $conn->close();
        }else{
            echo "Data Not Saved...   <br>Your Password is not confirmed.";
        }
    }


?>