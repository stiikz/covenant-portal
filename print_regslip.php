<div id="main-content">
    <div id="receipt-text_header">Print Course Registration</div>
    <div id="receipt-details">
        <?php
      session_start();    
       #store needed student details in session
         if ($_SESSION['logged In']==true){     
              $usermatric =  $_SESSION['u_matric'];
              $firstname = $_SESSION['f_name'];
              $lastname = $_SESSION['l_name'];
              $yearofcollege = $_SESSION['year_of_college'];
              $courseofstudy = $_SESSION['course'];
             
             $receiptdetails = "<h4 id='name'>".$lastname." ".$firstname."</h4>
                               <h4 id='number'>".$usermatric."</h4>
                               <h4 id='cos'>".$courseofstudy."</h4>
                               <h4 id='level'>".$yearofcollege."</h4>";
             
                 echo $receiptdetails;
                               
         }else if ($_SESSION['logged In']==false){
               echo 'header ("Location: ../index.php?login=error")';
         }
?>
    </div>
    <div id="print-button">
        <input type="submit" name="submit" value="Print" class="print">
    </div>
    <div id="alpha-text2">Alpha Semester</div>
    <div class="table-responsive" id="t-r8">
        <table class="table table-bordered">
            <thead id="thead">
                <tr>
                    <th>
                        S/N</th>
                    <th>Course Code</th>
                    <th>Course Description</th>
                    <th>Number of Units</th>
                </tr>
            </thead>
            <tbody id="thead">
                <tr>
                    <td>1</td>
                    <td>CSC111</td>
                    <td>Introduction to CSC111</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>CSC112</td>
                    <td>Explanation of CSC112</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="omega-text2">Omega Semester</div>
    <div class="table-responsive" id="t-r9">
        <table class="table table-bordered">
            <thead id="thead">
                <tr>
                    <th>
                        S/N</th>
                    <th>Course Code</th>
                    <th>Course Description</th>
                    <th>Number of Units</th>
                </tr>
            </thead>
            <tbody id="thead">
                <tr>
                    <td>1</td>
                    <td>CSC121</td>
                    <td>Introduction to CSC121</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>CSC122</td>
                    <td>Explanation of CSC122</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </div>
    </div