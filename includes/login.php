<?php

session_start();



if(isset($_POST['submit'])){
    include 'db.php';
    $matric = mysqli_real_escape_string($conn, $_POST['matric']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    //Error handlers
    //check if inputs are empty
    if(empty($matric) || empty($pwd)){
        header ("Location: ../index.php?login=empty");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_matric='$matric'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){
            header ("Location: ../index.php?login=error");
            exit();
            
        }else{
            if ($row = mysqli_fetch_assoc($result)){
                #echo $row['user_matric'];
                //De-hashing the password
                $hashedPwdCheck = password_verify($pwd, $row['user_password']);
                if ($hashedPwdCheck == false){
                    $_SESSION['logged In'] = false;
                    header ("Location: ../index.php?login=error");
                    exit();
                }elseif ($hashedPwdCheck == true){
                    //Go-ahead and Login the user
                    $_SESSION['logged In'] = true;
                    $_SESSION['u_matric'] = $row['user_matric'];
                    $_SESSION['u_pass'] = $row['user_password'];
                    $_SESSION['f_name'] = $row['first_name'];
                    $_SESSION['l_name'] = $row['last_name'];
                    $_SESSION['sex'] = $row['sex'];
                    $_SESSION['date_of_birth'] = $row['date_of_birth'];
                    $_SESSION['year_of_college'] = $row['year_of_college'];
                    $_SESSION['course'] = $row['course'];
                    $_SESSION['hall'] = $row['hall'];
                    header ("Location: ../profile_page.php?login=success");
                    exit();
                }
            }
        }
    }
    
    }else{
        
        header ("Location: ../index.php?login=error");
        exit();
    }
    
     
    
