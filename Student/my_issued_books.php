<?php session_start();
include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Current Issued Books</h3>
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
                                <?php
                                $query = "SELECT * from my_issued_books where USN='$_SESSION[susn]' and ISNULL(Return_date);";
                                $result = mysqli_query($link,$query);
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo "USN"; echo "</th>";
                                echo "<th>"; echo "Book ID"; echo "</th>";
                                echo "<th>"; echo "Book Name"; echo "</th>";
                                echo "<th>"; echo "Book Issue Date"; echo "</th>";
                                echo "</tr>";

                                while($row = mysqli_fetch_array($result))
                                {
                                  echo "<tr>";
                                  echo "<td>"; echo $row["USN"]; echo "</td>";
                                  echo "<td>"; echo $row["Book_id"]; echo "</td>";
                                  echo "<td>"; echo $row["Book_name"]; echo "</td>";
                                  echo "<td>"; echo $row["Issue_date"]; echo "</td>";
                                  echo "</tr>";
                                }
                                echo "</table>";
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
