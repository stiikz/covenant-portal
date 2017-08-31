<div id="main-content">
 <div id="receipt-text_header">Payment History</div>
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
    <div class="table-responsive" id="t-r">          
  <table class="table table-hover table-bordered">
    <thead id="thead">
      <tr>
        <th>S/N</th>
        <th>Purpose</th>
        <th>Transaction Number</th>
        <th>Amount</th>
        <th>Date Paid</th>
      </tr>
    </thead>
    <tbody id="thead">
      <tr>
        <td>1</td>
        <td>School Fees</td>
        <td>14876589076546</td>
        <td>₦ 500.00</td>
        <td>2016-11-9</td>
      </tr>
       <tr>
        <td>2</td>
        <td>School Fees</td>
        <td>148765890768909</td>
        <td>₦ 1,000.00</td>
        <td>2016-11-9</td>
      </tr>
    </tbody>
  </table>
        <div id="total">Total:</div>
         <div id="amount">₦ 1,500.00</div>
  </div>
</div>


