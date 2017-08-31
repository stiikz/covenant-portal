<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Student Profile Page</title>

    <?php 
    include 'css/header.html'; 
    ?>

</head>

<body class="profile">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>                        
    </button>
                <a class="navbar-brand" href="http://localhost/covenant-university/profile_page.php" id="Rectangle_6"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="myactive"><a href="#" id="cu_profile">Profile</a></li>
                    <li><a href="#" id="cu_class">Class Administration</a></li>
                    <li><a href="#" id="cu_finance">Finance</a></li>
                    <li><a href="#" id="cu_grading">Grading</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" id="cu_register">Registration</a></li>
                    <li><a href="#" id="cu_result">Result</a></li>
                    <li><a href="#" id="cu_resumption">Resumption</a></li>

                </ul>

            </div>

        </div>



    </nav>



    <div class="container-fluid Rectangle_4">
        <img src="images/logo.png" class="conatiner-fluid r4-logo">
        <h1 class="Covenant"><span>Covenant</span></h1>
        <h2 class="University"><span>University</span></h2>

        <?php

    include ('personal_details.php');


    ?>

            <div class="container-fluid polygon"><img src="images/badge.png"> </div>


    </div>

    <div class=" container-fluid Rectangle_5">



        <?php
    include('dashboard.php');
    ?>



    </div>


    <div class="profile-footer">
        <p>&copy 2017 Cu Portal. <a href="http://covenantuniversity.edu.ng/"><i>Covenant University Portal.</i></a></p>
    </div>
    <script type="text/javascript" src="js/loader.js"></script>
    <script type="text/javascript" src="js/getData.js"></script>



</body>

</html>