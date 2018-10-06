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
                                  <thead>
                                    <tr>
                                      <th scope="col">Book Name</th>
                                      <th scope="col">Book Image</th>
                                      <th scope="col">Author Name</th>
                                      <th scope="col">publication Name</th>
                                      <th scope="col">purchese Date</th>
                                      <th scope="col">Book Price</th>
                                      <th scope="col">Books Quantityr</th>
                                      <th scope="col">Avaiable Quantity</th>
                                      <th scope="col">Add By</th>
                                      <th scope="col">Delete Books</th>

                                    </tr>
                                  </thead>
                                    <?php
                                    if(isset($_POST['submit'])){
                                      
                                     $sql = "SELECT * FROM addbook WHERE books_name LIKE('$_POST[search]%')";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {

                                    ?>
                                     
                                    

                                   <tbody>
                                    <tr>
                                      <td><?php echo $row['books_name']?>
                                        <br>
                                        <a href="recodstudent.php?books_name=<?php echo $row['books_name']?>" class="text-success">Student Record who issu</a>
                                      </td> 
                                      <td><img src="<?php echo $row['books_image']; ?>" height="70px" 
                                          width="70px"/></td>
                                      <td><?php echo $row['books_author_name']?></td>
                                      <td><?php echo $row['books_publication_name']?></td>
                                      <td><?php echo $row['books_purchese_date']?></td>
                                      <td><?php echo $row['books_price']?></td> 
                                      <td><?php echo $row['books_qty']?></td>
                                      <td><?php echo $row['avaiable_qty']?></td>
                                      <td><?php echo $row['librarian_username']?></td>
                                      <td><a href="deletebooks.php?id=<?php echo $row['id'];?>">Delete</td>
                                      
                                    </tr>
                                    </tbody>
                                    
                                    <?php } } } else{?>

    


                                <table class="table table-bordered">
                                  
                                  </thead>
                                  <tbody>
                                    <?php
                                     $sql = "SELECT * FROM addbook";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {

                                    ?>
                                    <tr>
                                      <td><?php echo $row['books_name']?><br>
                                        <a href="recodstudent.php?books_name=<?php echo $row['books_name']?>" class="text-success">Student Record who issu</a>
                                        
                                      </td> 
                                      <td><img src="<?php echo $row['books_image']; ?>" height="70px" 
                                          width="70px"/></td>
                                      <td><?php echo $row['books_author_name']?></td>
                                      <td><?php echo $row['books_publication_name']?></td>
                                      <td><?php echo $row['books_purchese_date']?></td>
                                      <td><?php echo $row['books_price']?></td> 
                                      <td><?php echo $row['books_qty']?></td>
                                      <td><?php echo $row['avaiable_qty']?></td>
                                      <td><?php echo $row['librarian_username']?></td>
                                      <td><a href="deletebooks.php?id=<?php echo $row['id'];?>">Delete</td>
                                      
                                    </tr>
                                    <?php } } }?>
                                   
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