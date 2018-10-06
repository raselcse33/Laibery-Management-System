    <?php include "header.php";?>
    <?php include "connection.php";
    $sql1 = "UPDATE message
             SET read_msg ='y'
             WHERE user_name = '$_SESSION[username]'";

             $result = mysqli_query($conn,$sql1);

    ?>

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
                                <h2>Message List</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="" method="POST">
                                  <table class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th scope="col">Title</th>
                                      <th scope="col">Message</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <?php 
                                        $sql = "SELECT * FROM message WHERE user_name ='$_SESSION[username]'ORDER BY id DESC";
                                        $result = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_assoc($result))
                                        {

                                        ?>
                                      <th scope="row"><?php echo $row['title']?></th>
                                      <td><?php echo $row['msg'];?></td>
                                      <?php }?>
                                      
                                    </tr>
                                  </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


       <?php include "footer.php";?>