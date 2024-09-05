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
    $ordered_or_not=$_GET['ordered_or_not'];
    $q = "update order_medicines set ordered_or_not=$ordered_or_not where sno=$sno";
    mysqli_query($conn,$q);
    echo "Status updated";
    header('location: order.php');

?>