    <?php include "header.php";?>
    <?php include "connection.php";?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="" method="POST">
                                    <table>
                                    <tr>
                                        <td>
                                          <select class="custom-select" name="enrollmentNo">
                                          <?php
                                          $sql1 = "SELECT enrollmentNo FROM student_registation";
                                          $result = mysqli_query($conn, $sql1);
                                         while($row = mysqli_fetch_assoc($result)){
                                            echo "<option>";
                                             echo $row['enrollmentNo'];
                                            echo "</option>";
                                         }

                                          ?>
                                          
                                        </select>
                                      </td>
                                      <td>
                                          <button class="btn btn-primary" type="submit" name="submit">search</button>
                                      </td>
                                    </tr>
                                    </table>
                                    <?php
                                if(isset($_POST['submit']))
                                { 
                                    $sql2 = "SELECT * FROM student_registation Where enrollmentNo = $_POST[enrollmentNo]";
                                          $result = mysqli_query($conn, $sql2);
                                         while($row = mysqli_fetch_assoc($result)){

                                            $firstName    = $row['firstName'];
                                            $lastName     = $row['lastName'];
                                            $userName     = $row['userName'];
                                            $email        = $row['email'];
                                            $contact      = $row['contact'];
                                            $sem          = $row['sem'];
                                            $enrollmentNo = $row['enrollmentNo'];
                                         }
                                            

                                    ?>

                                    <table class="table table-bordered">
                                        <tr>
                                            <td><input type="text" class="form-control" name="enrollmentNo" placeholder="enrollmentNo" aria-label="Username" aria-describedby="basic-addon1"  value="<?php echo $enrollmentNo;?>"></td>
                                        </tr>

                                         <tr>
                                            <td><input type="text" class="form-control" name="student_name" placeholder="student Name" value="<?php echo $firstName.' '.$lastName;?>" aria-label="student Name" aria-describedby="basic-addon1"></td>
                                        </tr>

                                         <tr>
                                            <td><input type="text" class="form-control" name="student_sem" placeholder="student Sem" value="<?php echo $sem;?>" aria-label="Username" aria-describedby="basic-addon1"></td>
                                        </tr>

                                         <tr>
                                            <td><input type="text" class="form-control" name="student_contuct" placeholder="studentcontuct" value="<?php echo $contact;?>" aria-label="Username" aria-describedby="basic-addon1"></td>
                                        </tr>

                                        <tr>
                                            <td><input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $email;?>" aria-label="Username" aria-describedby="basic-addon1"></td>
                                        </tr>

                                         <tr>
                                             <td>
                                              <select class="custom-select" name="books_name">
                                              <?php
                                              $sql3 = "SELECT books_name FROM addbook Where avaiable_qty>0";
                                              $result = mysqli_query($conn, $sql3);
                                             while($row = mysqli_fetch_assoc($result)){
                                                echo "<option>";
                                                 echo $row['books_name'];
                                                echo "</option>";
                                                 }

                                              ?>
                                          
                                            </select>
                                          </td>
                                        </tr>

                                         <tr>
                                            <td><input type="text" class="form-control" name="books_issu_date" placeholder="booksissudate" value="<?php echo date("d-M-Y")?>" aria-label="Username" aria-describedby="basic-addon1"></td>
                                        </tr>

                                         <tr>
                                            <td><input type="text" class="form-control" name="student_username" value="<?php echo $userName;?>" placeholder="student username" aria-label="Username" aria-describedby="basic-addon1" ></td>
                                        </tr>

                                        <td>
                                          <button class="btn btn-primary" type="submit" name="submit1">submit</button>
                                      </td>

                                    </table>

                                    <?php
                                }


                                ?>
                                </form>

                                <?php
                                if(isset($_POST['submit1'])){

                                    $student_enrollment  = $_POST['enrollmentNo'];
                                    $student_name        = $_POST['student_name'];
                                    $student_sem         = $_POST['student_sem'];
                                    $student_contuct     = $_POST['student_contuct'];
                                    $student_email       = $_POST['email'];
                                    $books_name          = $_POST['books_name'];
                                    $books_issu_date     = $_POST['books_issu_date'];
                                    $student_username    = $_POST['student_username'];

                                    $sql4 = "INSERT INTO issubooks(student_enrollment,student_name,student_sem,student_contuct,student_email,books_name,books_issu_date,student_username)VALUES('$student_enrollment','$student_name','$student_sem','$student_contuct','$student_email',' $books_name','$books_issu_date','$student_username')";

                                     $sql5 = "UPDATE addbook SET avaiable_qty =avaiable_qty-1 WHERE books_name = '$books_name'";
                                $result = mysqli_query($conn, $sql5);



                                   if (mysqli_query($conn, $sql4)) {
                                            ?>

                                             <div class="alert alert-success col-lg-6 col-lg-push-3">
                                             Issu successfully, Thanks you
                                            </div>

                                     <?php
                                        } else {
                                            echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
                                        }

                                        mysqli_close($conn);

                                }




                                ?>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


       <?php include "footer.php";?>