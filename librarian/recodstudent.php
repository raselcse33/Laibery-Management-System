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
                                <h2>Student List</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th scope="col">Student name</th>
                                      <th scope="col">Student Enrollment</th>
                                      <th scope="col">Books Name</th>
                                      <th scope="col">Student Email</th>
                                      <th scope="col">Student Contuct</th>
                                      <th scope="col">Student issu Date</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    if(isset($_GET['books_name'])){
                                        $booksname = $_GET['books_name'];
                                        $sql = "SELECT * FROM issubooks WHERE books_name ='$booksname' AND books_return_date =''";
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($result)){

                                        
                                    ?>
                                    <tr>
                                      <td><?php echo $row['student_name']?></td>
                                      <td><?php echo $row['student_enrollment'];?></td>
                                      <td><?php echo $row['books_name'];?></td>
                                      <td><?php echo $row['student_email'];?></td>
                                      <td><?php echo $row['student_contuct'];?></td>
                                      <td><?php echo $row['books_issu_date'];?></td>
                                     </tr>
                                     <?php } } ?>
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