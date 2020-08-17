<?php
include "connection.php";
include "header.php";
?>
<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Issue Books</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">
                       <form class="form1" action="" method="post">
                         <table>
                           <tr>
                             <td>
                               <select class="form-control selectpicker" name="susn">
                                 <option value="">Select USN</option>
                                  <?php
                                  $query = "select USN from student_details;";
                                  $result = mysqli_query($link,$query);
                                  while($row=mysqli_fetch_array($result))
                                  {?>
                                    <option ><?php echo $row["USN"]; ?></option>
                                  <?php
                                  }
                                   ?>
                               </select>
                             </td>
                             <td>|</td>
                             <td>
                               <input type="submit" name="submit1" value="Search" class="form-control btn btn-default" style="margin-top: 5px;">
                             </td>
                           </tr>
                         </table>

                         <?php
                         if (isset($_POST["submit1"])) {
                           $ssusn = $_POST["susn"];
                           $result1 = mysqli_query($link,"select * from student_details where USN = '$ssusn';");
                           while($row1=mysqli_fetch_array($result1))
                           {
                             $fname = $row1["First_Name"];
                             $lname = $row1["Last_Name"];
                             $sem = $row1["Semester"];
                           }
                             ?>
                           <table class="table table-bordered">
                             <tr>
                               <td>
                                 <input type="text" class="form-control" placeholder="USN" name="usn" value="<?php echo $_POST["susn"]; ?>" readonly="readonly">
                               </td>
                             </tr>
                             <tr>
                               <td>
                                 <input type="text" class="form-control" placeholder="First Name" name="name" value="<?php echo $fname.' '.$lname; ?>" disabled>
                               </td>
                             </tr>
                             <tr>
                               <td>
                                 <input type="text" class="form-control" placeholder="Semester" name="sem" value="<?php echo $sem ?>" disabled>
                               </td>
                             </tr>
                             <tr>
                               <td>
                                 <select name="sbook" class="form-control selectpicker">
                                   <option value="">Select Book</option>
                                    <?php
                                    $query = "select Book_name from book_details;";
                                    $result = mysqli_query($link,$query);
                                    while($row=mysqli_fetch_array($result))
                                    {?>
                                      <option><?php echo $row["Book_name"]; ?></option>
                                    <?php
                                    }
                                     ?>
                                 </select>
                               </td>
                             </tr>
                             <tr>
                               <td>
                                 <input type="text" class="form-control" placeholder="ISBN" name="isbn" required="">
                               </td>
                             </tr>
                             <tr>
                              <td>
                                <input type="text" class="form-control" placeholder="Book Issue Date" value="<?php echo date("d-m-Y"); ?>"name="bisd" disabled>
                              </td>
                           </tr>
                           <tr>
                              <td> <center>
                                <button type="submit1" name="submit2" class="btn btn-success">Issue Book</button>
                                 </center>
                              </td>
                           </tr>
                           </table>
                         <?php
                         }
                          ?>
                       </form>

                       <?php
                       if (isset($_POST["submit2"])) {
                         // code...
                         $bookname = $_POST["sbook"];
                         $result2 = mysqli_query($link,"select Book_id from book_details where Book_name ='$bookname';");
                         while($row2=mysqli_fetch_array($result2))
                         {
                           $bookid = $row2["Book_id"];
                         }
                         $isbn = $_POST["isbn"];

                         $ab = mysqli_query("Select Available_quantity from book_details where Book_id = '$bookid';");
                         if($ab = 0)
                         {
                           ?>
                           <script type="text/javascript">
                             alert("Sorry,Availability Quantityof the selected book is 0");
                           </script>
                           <?php
                         }
                         else {
                           $d = date("d-m-y");
                           $query1 = "insert into issue_books(USN,Book_id,Issue_date,ISBN) values ('$_POST[usn]','$bookid','$d','$isbn');";
                           $res3 = mysqli_query($link,$query1);
                           if($res3 == 0)
                           {
                             ?>
                             <script type="text/javascript">
                               alert("Please enter valid ISBN");
                             </script>
                             <?php
                           }
                           else {
                             // code...
                             mysqli_query($link,"update book_details set Available_quantity = Available_quantity - 1 where Book_id = '$bookid';");
                             ?>
                             <script type="text/javascript">
                               alert("Book Issued successfuly");
                             </script>
                             <?php
                           }


                         }
                        ?>




                        <?php
                       }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<?php
include "footer.php";
?>
