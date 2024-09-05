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

    if(isset($_POST['clickhere'])){
        $q = "update `order_medicines` set patientemail='$_POST[patientemail]',patientname='$_POST[patientname]',patientaddress='$_POST[patientaddress]',prescription='$_POST[prescription]',ordered_or_not=0 where shopName='$_POST[shopName]' ";
        if(mysqli_query($conn,$q)){
            mysqli_query($conn,$q);
            echo "Successful";
            header('location: success_medicine_ordered.html');
        }else{
            echo "Error";
        }
    }
?>