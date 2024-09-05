<?php
session_start();
$con = mysqli_connect("localhost","root","","test");

if(isset($_POST['save_multicheckbox']))
{
    $brandlist = $_POST['brandslist'];
    foreach($brandlist as $branditems)
    {
        // echo $branditems."<br>";
        $query = "INSERT INTO demo (name) VALUES ('$branditems')";
        $query_run = mysqli_query($con, $query);
    }

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: AppointFormX.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: AppointFormX.php");
    }
}
?>