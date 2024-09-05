<?php
    $doctorName = $_POST['doctorName'];
    $doctorAddress = $_POST['doctorAddress'];
    $speciality = $_POST['speciality'];
    
    //Connection to database
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
            $stmt = $conn->prepare("insert into order_medicines (shopName, place, address) values(?,?,?)");
            $stmt->bind_param("sss", $doctorName, $doctorAddress, $speciality);
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
                
                <center><h2 class='my-2'>Data Saved...</h2><br><h4>You have successfully Added a shop into the database.</h4><br><a href='AdminAddShop.php' class='btn btn-primary'  type='submit' >Go Back</a></center>
                
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js''+
                ' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
                    ";
            $stmt->close();
            $conn->close();
        
    }


?>