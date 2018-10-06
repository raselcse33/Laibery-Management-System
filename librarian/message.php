    <?php 
    include "header.php";
    ?>
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
                                <h2>Message</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                               <form action="" method="POST">
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Give the title">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlSelect1">To</label>
                                    <select class="form-control" name="student_name">
                                        <?php
                                        $sql = "SELECT * FROM student_registation";
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                      <option value="<?php echo $row['userName'];?>"><?php echo $row['userName']."-(".$row['enrollmentNo'].")";?></option>
                                      <?php }?>
                                    </select>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Text Message</label>
                                    <textarea class="form-control" placeholder="start............" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                                  </div>
                                  <input type="submit" class="btn btn-primary" name="submit" value="submit">
                                </form>


                                <?php
                                if(isset($_POST['submit'])){
                                    $title        = $_POST['title'];
                                    $student_name = $_POST['student_name'];
                                    $msg          = $_POST['msg'];

                                    $sql = "INSERT INTO message(user_name,student_name,title,msg,read_msg)VALUES('$_SESSION[librarian]','$student_name','$title','$msg','n')";
                                    $result = mysqli_query($conn,$sql);
                                    if($result){
                                        echo "ok";
                                    }




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