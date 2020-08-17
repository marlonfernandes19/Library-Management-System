<?php
include "connection.php";
include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Add Books</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">

                            <div class="x_content">

                                <form name="add_books" class="col-lg-12" action="" method="post">

                                  <table class="table table-bordered">
                                    <tr>
                                        <td> <input type="text"class="form-control" placeholder="Book ID" name="BookId" required="" ></td>
                                    </tr>
                                    <tr>
                                        <td> <input type="text"class="form-control" placeholder="Book name" name="BookName" required="" ></td>
                                    </tr>
                                   <tr>
                                      <td> <input type="text"class="form-control" placeholder="Author Name" name="AuthorName" required="" ></td>
                                   </tr>
                                   <tr>
                                      <td> <input type="text"class="form-control" placeholder="Publication" name="Publication" required="" ></td>
                                   </tr>
                                   <tr>
                                  
                                    <td>
                                       <select class="form-control selectpicker" name="SDept" id=dept>
                                       <option value="">Select Department</option>

                                         <option value="CS">CS</option>
                                         <option value="Mech">Mech</option>
                                         <option value="BT">BT</option>
                                         <option value="Civil">Civil</option>
                                       </select>
                                    </td>
                                   </tr>
                                   <tr>
                                      <td> <input type="text"class="form-control" placeholder="Purchase Date (DD/MM/YYYY)" name="PurchaseDate" required="" ></td>
                                   </tr>
                                   <tr>
                                      <td> <input type="text"class="form-control" placeholder="Book Price" name="BookPrice" required="" ></td>
                                   </tr>
                                   <tr>
                                      <td> <input type="text"class="form-control" placeholder="Book Quantity" name="P_BookQty" required="" ></td>
                                   </tr>
                                   <tr>
                                      <td> <center>
                                        <button type="submit1" name="submit1" class="btn btn-success">Add Book Details</button>
                                         </center>
                                      </td>
                                   </tr>
                                  </table>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <?php
          if(isset($_POST["submit1"]))
          {
            $id = $_POST[BookId];
            $dept = $_POST['SDept'];
            $result = mysqli_query($link,"insert into book_details (Book_id,Book_name,Author_name,Publisher_name,Price,Purchase_date,Quantity,Available_quantity,Department) values ('$_POST[BookId]', '$_POST[BookName]', '$_POST[AuthorName]', '$_POST[Publication]',$_POST[BookPrice], '$_POST[PurchaseDate]', $_POST[P_BookQty],$_POST[P_BookQty],'$dept');");
            if($result == 0)
            {

              ?>
              <script type="text/javascript">
              alert("Insertion Failed, Contact Administrator");
              </script>
              <?php
            }
            else {


            for ($i = 1; $i <= $_POST[P_BookQty]; $i++)
            {
              $isbn = ((string)$_POST[BookId]).((string)$i);
              $query = "insert into ISBN (Book_id,Isbn,Availability) values ('$id','$isbn','True');";
              mysqli_query($link,$query);
            }
              ?>
              <script type="text/javascript">
              alert("Book added successful");
              </script>
              <?php
            }
          }
         ?>
<?php
include "footer.php"
?>
