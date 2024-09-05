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
        $q = "update `profile` set username='$_POST[username]', fullname='$_POST[fullname]', password='$_POST[password]',address='$_POST[address]',address2='$_POST[address2]',city='$_POST[city]',state='$_POST[state]',zip='$_POST[zip]' where email='$_POST[mail]' ";
        if(mysqli_query($conn,$q)){
            mysqli_query($conn,$q);
            echo "<br><center><h2>Successful</h2><a href='SignIn.html' class='btn btn-secondary my-2'>Back</a></center>";
            // header('location: dashboard2.php');
        }else{
            echo "Error";
        }
        
    }
    

?>