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
        $q = "update `profile` set aadharcard='$_POST[aadharcard]',pancard='$_POST[pancard]',photoid='$_POST[photoid]',docs='$_POST[docs]' where email='$_POST[email]' ";
        if(mysqli_query($conn,$q)){
            mysqli_query($conn,$q);
            echo "Successful";
            echo "<br><a href='profileDocsUpload.html' ></a>";
            // header('location: dashboard2.php');
        }
        echo "Error";
    }
    

?>