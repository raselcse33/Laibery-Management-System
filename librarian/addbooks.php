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
                                <h2>Add Book</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form action="" method="POST" enctype="multipart/form-data">
                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Books name</label>
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Books name" name="books_name">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Books Author Name</label>
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Emooks Ayuthor name" name="books_author_name">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Books Publication Name</label>
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Books Publication Name" name="books_publication_name">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Books purchese Date</label>
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Books purchese Date" name="books_purchese_date">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Books Price</label>
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Books Price" name="books_price">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Books Qty</label>
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Books Qty" name="books_qty">
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-6">
                                          <label for="inputEmail4">Books avaiable Qty</label>
                                          <input type="text" class="form-control" id="inputEmail4" placeholder="Books avaiable Qty" name="avaiable_qty">
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label for="exampleFormControlFile1">Image upload</label>
                                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                        </div>
                                      </div>

                                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </form>


                                <?php
                                if ($_SERVER["REQUEST_METHOD"] == "POST")
                                    {
                                        $books_name = $_POST['books_name'];
                                        $books_author_name = $_POST['books_author_name'];
                                        $books_publication_name = $_POST['books_publication_name'];
                                        $books_purchese_date = $_POST['books_purchese_date'];
                                        $books_price =$_POST['books_price'];
                                        $books_qty = $_POST['books_qty'];
                                        $avaiable_qty = $_POST['avaiable_qty'];


                                        $permited  = array('jpg', 'jpeg', 'png', 'gif');
                                        $file_name = $_FILES['image']['name'];
                                        $file_size = $_FILES['image']['size'];
                                        $file_temp = $_FILES['image']['tmp_name'];

                                        $div = explode('.', $file_name);
                                        $file_ext = strtolower(end($div));
                                        $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                                        $uploaded_image = "booksimage/".$unique_image;
                                        move_uploaded_file($file_temp, $uploaded_image);



                                        $sql="INSERT INTO addbook(books_name,books_image,books_author_name,books_publication_name,books_purchese_date,books_price,books_qty,avaiable_qty,librarian_username)VALUES('$books_name','$uploaded_image','$books_author_name','$books_publication_name','$books_purchese_date','$books_price','$books_qty','$avaiable_qty','$_SESSION[librarian]')";


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

                                ?>














                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


       <?php include "footer.php";?>