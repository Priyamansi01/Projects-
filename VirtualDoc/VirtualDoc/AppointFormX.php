<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php  
                if(isset($_SESSION['status']))
                {
                    echo "<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
                ?>
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>How to Get Multiple Values from DB in Checkbox in php</h4>
                    </div>
                    <div class="card-body">

                        <form action="AppointFormX2.php" method="POST">
                        <?php
                            $con = mysqli_connect("localhost","root","","test");

                            $brand_query = "SELECT * FROM a_brands";
                            $query_run = mysqli_query($con, $brand_query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $brand)
                                {
                                    ?>
                                    <input type="checkbox" name="brandslist[]" value="<?= $brand['name']; ?>" /> <?= $brand['name']; ?> <br/>
                                    <?php
                                }
                            }
                            else
                            {
                                echo "No Record Found";
                            }
                        ?>
                            <div class="form-group mt-3">
                                <button name="save_multicheckbox" class="btn btn-primary">Save Multiple Checkbox</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>