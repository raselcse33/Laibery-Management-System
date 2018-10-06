<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2>Student Registration Form</h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstName" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastName" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="userName" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="email" name="email" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="contact" name="contact" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="SEM" name="sem" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Enrollment No" name="enrollmentNo" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit" value="Register">
                    </div>

                </form>
            </section>


            <?php

            if(isset($_POST['submit']))
            {
                $firstName    = $_POST['firstName'];
                $lastName     = $_POST['lastName'];
                $userName     = $_POST['userName'];
                $password1     = $_POST['password'];
                $email        = $_POST['email'];
                $contact      = $_POST['contact'];
                $sem          = $_POST['sem'];
                $enrollmentNo = $_POST['enrollmentNo'];
                
                 $sql = "SELECT * FROM student_registation WHERE userName = '$userName' or password = '$password1'";
                $result = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($result);

                if($count){
                    ?>
                       <div class="alert alert-danger col-lg-6 col-lg-push-3">
                       <strong style="color:white">Invalid</strong> username  Already Exit.
                       </div>
                   <?php 
                }
                else{

                     $sql = "INSERT INTO student_registation (firstName,lastName,userName,password,email,contact,sem,enrollmentNo,status)
                   VALUES ('$firstName','$lastName','$userName','$password1','$email','$contact','$sem','$enrollmentNo','no')";

                if (mysqli_query($conn, $sql)) {
                    ?>

                     <div class="alert alert-success col-lg-6 col-lg-push-3">
                     Registration successfully, You will get email when your account is approved
                    </div>

             <?php
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                mysqli_close($conn);

                            }
                    
                }


            ?>

           
    </div>

   


</body>
</html>
