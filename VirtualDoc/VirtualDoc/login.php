<?php
    $floatingSelect = $_POST['floatingSelect'];
    $emailId = $_POST['emailId'];
    $password = $_POST['password'];
    // $rememberMe = $_POST['rememberMe'];
    
    //Connection to database
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("select * from profile where email = ?");
        $stmt->bind_param("s", $emailId);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password){
                // echo "<h2>Loggged In Successful...</h2>";
                if($data['sel']===$floatingSelect){
                    // header("location: dashboard2.html");
                    if($floatingSelect===''){
                        header("location: SignIn.html");
                    }
                    if($floatingSelect==='1'){
                        header("location: AdminDashboard.html");
                    }if($floatingSelect==='2'){
                        header("location: newDashboard.html");
                    }if($floatingSelect==='3'){
                        header("location: dashboard2.html");
                    }if($floatingSelect==='4'){
                        header("location: Shopkeeper.php");
                    }
                }
                else{
                    echo "
                <head>
                    <!-- Required meta tags -->
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>

                    <!-- Bootstrap CSS -->
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

                    <title>Sign In</title>
                </head>

                <center><h4 class='my-4'>Your selected dropdown is wrong.</h4><br><a href='SignIn.html' class='btn btn-primary'  type='submit' >Try Again</a></center>
                
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js''+
                ' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
                    ";
                }
                // header("location: dashboard2.html");
            }else{
                echo "
                <head>
                    <!-- Required meta tags -->
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>

                    <!-- Bootstrap CSS -->
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

                    <title>Sign In</title>
                </head>

                <center><h4>Your Password is Incorrect.</h4><br><a href='SignIn.html' class='btn btn-primary'  type='submit' >Try Again</a></center>
                
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js''+
                ' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
                    ";
                //header("location: SignIn.html");
            }
        }else{
            echo "
            <head>
                <!-- Required meta tags -->
                <meta charset='utf-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>

                <!-- Bootstrap CSS -->
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

                <title>Sign In</title>
            </head>

            <center><h2>Data Not Retrieved... <br></h2><h5>Your Email is Incorrect.</h5><br><a href='SignIn.html' class='btn btn-primary'  type='submit' >Try Again</a></center>
            
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js''+
            ' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
                ";
            // header("location: SignIn.html");
        }
        $stmt->close();
        $conn->close();

    // Ctrl+/ -- comments a line or multiple selected lines to comments.
    }
?>