<?php 
    // Connect to the Database 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    // $mail2=$_POST['mail2'];
    // $prediction=$_POST['prediction'];
    // $description=$_POST['description'];
    // $precautions=$_POST['precautions'];
    // $medicines=$_POST['medicines'];
    
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
        
    if(isset($_POST['clickhere'])){
        $q = "update `patient` set prediction='$_POST[prediction]',description='$_POST[description]',precautions='$_POST[precautions]',medicines='$_POST[medicines]' where mail='$_POST[mail2]' ";
        if(mysqli_query($conn,$q)){
            mysqli_query($conn,$q);
            header('location: doctorViewAppointment.php');
        }else{
            echo "Error";
        }
    }
    

?>