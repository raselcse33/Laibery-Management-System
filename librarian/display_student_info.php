    <?php include "header.php";?>
    <?php include "connection.php";?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
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
                                <h2>Student Information</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                               <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col">First Name</th>
                                      <th scope="col">Last Name</th>
                                      <th scope="col">User Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Contact</th>
                                      <th scope="col">Sem</th>
                                      <th scope="col">Enrollment No</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Approve</th>
                                      <th scope="col">Not Approve</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $sql= "SELECT * FROM student_registation";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                      while($row = mysqli_fetch_assoc($result)) {

                                    ?>
                                    <tr>
                                      <td><?php echo $row['firstName']?></td>
                                      <td><?php echo $row['lastName']?></td>
                                      <td><?php echo $row['userName']?></td>
                                      <td><?php echo $row['email']?></td>
                                      <td><?php echo $row['contact']?></td>
                                      <td><?php echo $row['sem']?></td>
                                      <td><?php echo $row['enrollmentNo']?></td>
                                      <td><?php echo $row['status']?></td>
                                      <td><a href="approve.php?id=<?php echo $row['id']?>">Approve</td>
                                       <td><a href="notapprove.php?id=<?php echo $row['id']?>">NotApprove</td>  

                                    </tr>

                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                  </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


       <?php include "footer.php";?>