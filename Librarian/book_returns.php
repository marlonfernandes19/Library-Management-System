<?php
include "header.php";
include "connection.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Book Returns</h3>
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
                            

                                <div class="clearfix"></div>

                            <div class="x_content">
                              <form class="form1" action="" method="post">
                                <table>
                                  <tr>
                                    <td>
                                      <select class="form-control selectpicker" name="susn">
                                        <option value="">Select USN</option>
                                         <?php
                                         $query = "select USN from issue_books where ISNULL(Return_date);";
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
                                  // code...

                                  $usn = $_POST["susn"];
                                  $query = "SELECT * from return_books where USN like ('$usn%') and ISNULL(Return_date);";
                                  $result = mysqli_query($link,$query);
                                  echo "<table class='table table-bordered'>";
                                  echo "<tr>";
                                  echo "<th>"; echo "USN"; echo "</th>";
                                  echo "<th>"; echo "Name"; echo "</th>";
                                  echo "<th>"; echo "Book ID"; echo "</th>";
                                  echo "<th>"; echo "Book Name"; echo "</th>";
                                  echo "<th>"; echo "Book ISBN"; echo "</th>";
                                  echo "<th>"; echo "Book Issue Date"; echo "</th>";
                                  echo "<th>"; echo "Return Book"; echo "</th>";
                                  echo "</tr>";

                                  while($row = mysqli_fetch_array($result))
                                  {
                                    echo "<tr>";
                                    echo "<td>"; echo $row["USN"]; echo "</td>";
                                    echo "<td>"; echo $row["First_Name"].' '.$row["Last_Name"]; echo "</td>";
                                    echo "<td>"; echo $row["Book_id"]; echo "</td>";
                                    echo "<td>"; echo $row["Book_name"]; echo "</td>";
                                    echo "<td>"; echo $row["ISBN"]; echo "</td>";
                                    echo "<td>"; echo $row["Issue_date"]; echo "</td>";
                                    echo "<td>"; ?> <a href="accept_return.php?Id=<?php echo $row["Issue_id"] ?>& Bid=<?php echo $row["Book_id"]; ?>">Accept Return</a><?php echo "</td>";
                                    echo "</tr>";
                                  }
                                  echo "</table>";

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
include "footer.php"
?>
