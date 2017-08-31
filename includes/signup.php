<?php
  
if (isset($_POST['submit'])){
    include_once 'db.php';
    
    $matric = mysqli_real_escape_string($conn, $_POST['matric']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);            
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $sex = mysqli_real_escape_string($conn, $_POST['gender']);
    $dob = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
    $yoc = mysqli_real_escape_string($conn, $_POST['year_of_college']);
    $cos = mysqli_real_escape_string($conn, $_POST['course']);
    $residence = mysqli_real_escape_string($conn, $_POST['hall']);
                                                      
    //error handlers
    //check for empty fields
    if (empty($matric) || empty($fname) || empty($lname) || empty($email) || empty($pwd)|| empty($sex) || empty($dob) || empty($yoc) || empty($cos) || empty($residence)){
         header("Location: ../admin.php?signup=empty");
         exit();
    }  else {
        //check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)){
           header("Location: ../admin.php?signup=invalid");
           exit(); 
            
        }else {
            //check if email is valid
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../admin.php?signup=invalid-email");
            exit();    
        }else{
            $sql = "SELECT * FROM users WHERE user_matric='$matric'";
            $result = mysqli_query($con, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if ($resultCheck > 0){
                header("Location: ../admin.php?signup=user-taken");
                exit(); 
            
            }
            else {
                //Hashing the Password
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                //INSERT USER INTO THE DATABASE
                $sql = "INSERT INTO users (user_matric, first_name, last_name, email, user_password, sex, date_of_birth, year_of_college, course, hall) VALUES('$matric', '$fname', '$lname', '$email', '$hashedPwd', '$sex', '$dob', '$yoc', '$cos', '$residence');";
                
                mysqli_query($conn, $sql);
                header("Location: ../index.php?signup=success");
                exit(); 
            }
            }
        }
    }                                             
                                    
}else{
    header("Location: ../admin.php");
    exit();
}