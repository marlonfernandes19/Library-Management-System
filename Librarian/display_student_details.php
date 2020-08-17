<?php
include "header.php";
include "connection.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Student Details</h3>
                    </div>

                    <form name="add_books" class="col-lg-12" action="" method="post">
                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text"class="form-control" placeholder="USN" name="usn" required="" >
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit1" name="Go">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

                <div class="clearfix"></div>

                <?php
                if(isset($_POST["Go"]))
                {
                  $usn=$_POST["usn"];
                  $usn1 = strtoupper($usn);
                ?>
                  <div class="row" style="min-height:500px">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                              <div class="x_content">
                                  <?php
                                  $query = "SELECT * from student_details where usn like ('$usn1%');";
                                  $result = mysqli_query($link,$query);
                                  echo "<table class='table table-bordered'>";
                                  echo "<tr>";
                                  echo "<th>"; echo "USN"; echo "</th>";
                                  echo "<th>"; echo "First Name"; echo "</th>";
                                  echo "<th>"; echo "Last Name"; echo "</th>";
                                  echo "<th>"; echo "Semester"; echo "</th>";
                                  echo "<th>"; echo "Email"; echo "</th>";
                                  echo "<th>"; echo "Contact"; echo "</th>";
                                  echo "<th>"; echo "Account Status"; echo "</th>";
                                  echo "<th>"; echo "Authorise Access"; echo "</th>";
                                  echo "</tr>";

                                  while($row = mysqli_fetch_array($result))
                                  {
                                    echo "<tr>";
                                    echo "<td>"; echo $row["USN"]; echo "</td>";
                                    echo "<td>"; echo $row["First_Name"]; echo "</td>";
                                    echo "<td>"; echo $row["Last_Name"]; echo "</td>";
                                    echo "<td>"; echo $row["Semester"]; echo "</td>";
                                    echo "<td>"; echo $row["Email"]; echo "</td>";
                                    echo "<td>"; echo $row["Contact"]; echo "</td>";
                                    echo "<td>"; echo $row["Account_status"]; echo "</td>";
                                    echo "<td>"; ?> <a href="grant.php?usn=<?php echo $row["USN"]; ?>">Grant</a><?php echo " /"; ?> <a href="revoke.php?usn=<?php echo $row["USN"]; ?>">Revoke</a><?php echo "</td>";
                                    echo "</tr>";
                                  }
                                  echo "</table>";
                                   ?>
                              </div>
                          </div>
                      </div>
                  </div>
                <?php
                }
                else
                {?>
                  <div class="row" style="min-height:500px">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                              <div class="x_content">
                                  <?php
                                  $query = "select * from student_details;";
                                  $result = mysqli_query($link,$query);
                                  echo "<table class='table table-bordered'>";
                                  echo "<tr>";
                                  echo "<th>"; echo "USN"; echo "</th>";
                                  echo "<th>"; echo "First Name"; echo "</th>";
                                  echo "<th>"; echo "Last Name"; echo "</th>";
                                  echo "<th>"; echo "Semester"; echo "</th>";
                                  echo "<th>"; echo "Email"; echo "</th>";
                                  echo "<th>"; echo "Contact"; echo "</th>";
                                  echo "<th>"; echo "Account Status"; echo "</th>";
                                  echo "<th>"; echo "Authorise Access"; echo "</th>";
                                  echo "</tr>";

                                  while($row = mysqli_fetch_array($result))
                                  {
                                    echo "<tr>";
                                    echo "<td>"; echo $row["USN"]; echo "</td>";
                                    echo "<td>"; echo $row["First_Name"]; echo "</td>";
                                    echo "<td>"; echo $row["Last_Name"]; echo "</td>";
                                    echo "<td>"; echo $row["Semester"]; echo "</td>";
                                    echo "<td>"; echo $row["Email"]; echo "</td>";
                                    echo "<td>"; echo $row["Contact"]; echo "</td>";
                                    echo "<td>"; echo $row["Account_status"]; echo "</td>";
                                    echo "<td>"; ?> <a href="grant.php?usn=<?php echo $row["USN"]; ?>">Grant</a><?php echo " /"; ?> <a href="revoke.php?usn=<?php echo $row["USN"]; ?>">Revoke</a><?php echo "</td>";
                                    echo "</tr>";
                                  }
                                  echo "</table>";
                                   ?>
                              </div>
                          </div>
                      </div>
                  </div>
                <?php
                } ?>



            </div>
        </div>
        <!-- /page content -->
<?php
include "footer.php"
?>
