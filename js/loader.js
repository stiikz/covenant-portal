           $(document).ready(function () {
               $("#cu_profile").click(function () {
                   $("#content").load('http://localhost/covenant-university/personal_details.php');
                   $("#page1").load('http://localhost/covenant-university/dashboard.php');
               });
           });



           $(document).ready(function () {
               $("#cu_class").click(function () {
                   $("#content").load('http://localhost/covenant-university/class_admin.php');
               });
           });


           $(document).ready(function () {
               $("#cu_finance").click(function () {
                   $("#content").load('http://localhost/covenant-university/finance.php');
               });
           });


           $(document).ready(function () {
               $("#cu_grading").click(function () {
                   $("#content").load('http://localhost/covenant-university/grading.php');
               });
           });


           $(document).ready(function () {
               $("#cu_register").click(function () {
                   $("#content").load('http://localhost/covenant-university/registration.php');
               });
           });


           $(document).ready(function () {
               $("#cu_result").click(function () {
                   $("#content").load('http://localhost/covenant-university/result.php');
               });
           });


           $(document).ready(function () {
               $("#cu_resumption").click(function () {
                   $("#content").load('http://localhost/covenant-university/resumption.php');
               });
           });