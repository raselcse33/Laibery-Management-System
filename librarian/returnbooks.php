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
                                <h2>Return Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form action="" method="POST">
                                    <div class="form-group">
                                     <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="enrollmentNo">

                                     <?php
                                        $sql = "SELECT * FROM issubooks WHERE books_return_date = ''";
                                        $result = mysqli_query($conn, $sql);
                                        if($result){
                                            while($row = mysqli_fetch_assoc($result)){

                                      ?>

                                        <option><?php echo $row['student_enrollment'];?></option>

                                      <?php } } ?>
                                      
                                    </select>
                                  </div>
                                 
                                  <button class="btn btn-primary" type="submit" name="submit">search</button>
                                </form>

                                 <?php
                                if(isset($_POST['submit'])){
                                    ?>

                                   <table class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th scope="col">Student Enrollment</th>
                                          <th scope="col">Student name</th>
                                          <th scope="col">Student Sem</th>
                                          <th scope="col">Student Contuct</th>
                                          <th scope="col">Student Email</th>
                                          <th scope="col">Books Name</th>
                                          <th scope="col">Books Issu Date</th>
                                          <th scope="col">Return Date</th>
                                          <th scope="col">confurm </th>
                                        </tr>
                                      </thead>
                                      <tbody>

                                        <?php
                                        $sql1 = "SELECT * FROM issubooks WHERE student_enrollment = '$_POST[enrollmentNo]'AND books_return_date = ''";
                                        $result = mysqli_query($conn, $sql1);
                                        if($result){
                                            while($row = mysqli_fetch_assoc($result)){

                                      ?>

                                        <tr>
                                          <th><?php echo $row['student_enrollment'];?></th>
                                          <td><?php echo $row['student_name'];?></td>
                                          <td><?php echo $row['student_sem'];?></td>
                                          <td><?php echo $row['student_contuct'];?></td>
                                          <td><?php echo $row['student_email'];?></td>
                                          <td><?php echo $row['books_name'];?></td>
                                          <td><?php echo $row['books_issu_date'];?></td>
                                          <td><a href="confurmreturn.php?id=<?php echo $row['id'];?>">return</td>
                                            
                                           <td><a href="confurm.php?books_name=<?php echo $row['books_name'];?>">OK</td>
                                        </tr>
                                        <?php } }?>
                                        
                                      </tbody>
                                    </table>

                                  <?php }?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


       <?php include "footer.php";?>