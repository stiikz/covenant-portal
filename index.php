<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome to Covenant university portal</title>
    <?php 
include 'css/header.html'; 
?>
</head>
<body>

    <div class="container-fluid lg_top_badge">

    </div>

    <div class="container-fluid login_bg">


        <div class="container-fluid logo_bg">

            <img src="images/logo.png" alt="cu-logo">

        </div>


        <div class="text-header">

            <p class="Sign_into__CU_portal">Sign into CU portal</p>

        </div>

        <div class="content">
            <form action="includes/login.php" method="post" class="form-horizontal">

                <div class="input-group">
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    </div>

                    <input type="text" name="matric" placeholder="Matric Number" class="form-control" required />

                </div>

                <div class="form-group in">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
                        </div>

                        <input type="password" name="pwd" placeholder="Password" class="form-control" required />
                    </div>
                </div>
                <div class="checkbox">
                    <input type="checkbox" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Remember Me</span>
                </div>
                <div class="form-group in">
                    <input type="submit" name="submit" value="log in" class="submit-button">
                </div>


                <div class="form-group in">
                    <a href="forgotten.php" class="btn btn-link">Forgotten password?</a>
                </div>
                 
                
            </form>


            <div class="clear"></div>
        </div>
        <div class="footer">
            <p>&copy 2017 Cu Portal <a href="http://covenantuniversity.edu.ng/"><i>Covenant University Portal.</i></a></p>
        </div>
</body>
</html>