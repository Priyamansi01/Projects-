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
    $status=$_GET['status'];
    $q = "update doctor_appointment set status=$status where sno=$sno";
    mysqli_query($conn,$q);
    echo "Status updated";
    header('location: Appointment.php');

?>