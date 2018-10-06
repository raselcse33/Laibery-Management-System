    <?php 
    include "header.php";
    include "connection.php";

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
                                <h2>All Books List</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form action="" method="POST">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Search</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="search" placeholder="search">
                                  </div>
                                  <button type="submit" class="btn btn-primary" name="submit">search</button>
                              </form>

                             
                                <table class="table table-bordered">
                                  
                                  
                                   
                                    <tr>
                                         <?php
                                    if(isset($_POST['submit'])){

                                     $sql = "SELECT * FROM addbook WHERE books_name LIKE('$_POST[search]%')";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {

                                    ?>
                                      
                                      <td><img src="../librarian/<?php echo $row['books_image']; ?>" height="70px" 
                                          width="70px"/><br>
                                          <?php echo $row['books_name']?> 
                                         <p>Avaiable Book:<?php echo $row['avaiable_qty']?></p>
                                      </td>
                                      <?php } } } else{?>
                                     
                                      
                                    </tr>
                                </table>
                                    

    


                                <table class="table table-bordered">
                                    
                                    <tr>
                                        <?php
                                     $sql = "SELECT * FROM addbook";
                                        $result = mysqli_query($conn, $sql);
                                        $i = 0;

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {
                                              $i++;

                                    ?>
                                     <td>
                                        <img src="../librarian/<?php echo $row['books_image']; ?>" height="70px" 
                                          width="70px"/><br>
                                          <?php echo $row['books_name']?> 
                                         <p>Avaiable Book:<?php echo $row['avaiable_qty']?></p>
                                     </td>

                                         <?php 
                                         if($i==4){
                                          echo "<tr>";
                                          echo "</tr>";
                                          $i=0;

                                         }
                                       } } }?>
                                         
                                      
                                    </tr>
                                    
                                   
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