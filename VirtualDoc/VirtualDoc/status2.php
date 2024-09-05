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
    
    $sno=$_GET['sno'];
    $booked_or_not=$_GET['booked_or_not'];
    $q = "update doctor_appointment set booked_or_not=$booked_or_not where sno=$sno";
    mysqli_query($conn,$q);
    echo "booked_or_not updated";
    header('location: AppointFormNew.php');

?>