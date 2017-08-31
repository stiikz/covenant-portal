<div id="main-content">

    <div class="container-fluid pic-profile">
        <img src="images/profile.png" style="">
    </div>
    <div id="demac">
        <img src="images/line-1.png">
    </div>
    <div id="details">
        <?php
          session_start();
          #store needed student details in session
          if ($_SESSION['logged In']==true){              
              $usermatric =  $_SESSION['u_matric'];
              $firstname = $_SESSION['f_name'];
              $lastname = $_SESSION['l_name'];
              $boolean = $_SESSION['sex'];
              $dateofbirth = $_SESSION['date_of_birth'];
              $yearofcollege = $_SESSION['year_of_college'];
              $courseofstudy = $_SESSION['course'];
              $hallofresidence = $_SESSION['hall'];
              
              
              $pdetails =  "<h4 id='fullname'>Full name:</h4>
                            <h4 id='fullname-value'>".$lastname." ".$firstname."</h4>
                            <h4 id='sex'>Sex:</h4>
                            <h4 id='sex-value'>".$boolean."</h4>
                            <h4 id='matricnumber'>Matric number:</h4>
                            <h4 id='matricnumber-value'>".$usermatric."</h4>
                            <h4 id='DOB'>Date of birth:</h4>
                            <h4 id='DOB-value'>".$dateofbirth."</h4>
                            <h4 id='year'>Year of college:</h4>
                            <h4 id='year-value'>".$yearofcollege."</h4>
                            <h4 id='course'>Course of study:</h4>
                            <h4 id='course-value'>".$courseofstudy."</h4>
                            <h4 id='hall'>Hall of residence:</h4>
                            <h4 id='hall-value'>".$hallofresidence."</h4>";
              echo $pdetails;
          }elseif($_SESSION['logged In'==false]) {
              echo 'header ("Location: ../index.php?login=error")';
          }
               
        ?>

    </div>
    <div id="print-button">
        <input type="submit" name="submit" value="Print" class="print-clearance">
    </div>


</div>