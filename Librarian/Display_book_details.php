<?php
include "connection.php";
include "header.php";
?>
<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Book Details</h3>
            </div>

            <form name="add_books" class="col-lg-12" action="" method="post">
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text"class="form-control" placeholder="Book Name" name="BookName" required="" >
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
          ?>
          <div class="row" style="">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                      <div class="x_title">
                          <h2>Search result</h2>

                          <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                          <?php
                          $query = "select * from book_details where Book_name like ('$_POST[BookName]%');";
                          $result = mysqli_query($link,$query);
                          echo "<table class='table table-bordered'>";
                          echo "<tr>";
                          echo "<th>"; echo "Book ID"; echo "</th>";
                          echo "<th>"; echo "Book Name"; echo "</th>";
                          echo "<th>"; echo "Author Name"; echo "</th>";
                          echo "<th>"; echo "Publisher Name"; echo "</th>";
                          echo "<th>"; echo "Price"; echo "</th>";
                          echo "<th>"; echo "Purchase Date"; echo "</th>";
                          echo "<th>"; echo "Initial Quantity"; echo "</th>";
                          echo "<th>"; echo "Available Quantity"; echo "</th>";
                          echo "</tr>";

                          while($row = mysqli_fetch_array($result))
                          {
                            echo "<tr>";
                            echo "<td>"; echo $row["Book_id"]; echo "</td>";
                            echo "<td>"; echo $row["Book_name"]; echo "</td>";
                            echo "<td>"; echo $row["Author_name"]; echo "</td>";
                            echo "<td>"; echo $row["Publisher_name"]; echo "</td>";
                            echo "<td>"; echo $row["Price"]; echo "</td>";
                            echo "<td>"; echo $row["Purchase_date"]; echo "</td>";
                            echo "<td>"; echo $row["Quantity"]; echo "</td>";
                            echo "<td>"; echo $row["Available_quantity"]; echo "</td>";
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
        else {
        ?>
        <div class="row" style="">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Computer Science/Information Science</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php
                        $query = "select * from book_details where Department = 'CS';";
                        $result = mysqli_query($link,$query);
                        echo "<table class='table table-bordered'>";
                        echo "<tr>";
                        echo "<th>"; echo "Book ID"; echo "</th>";
                        echo "<th>"; echo "Book Name"; echo "</th>";
                        echo "<th>"; echo "Author Name"; echo "</th>";
                        echo "<th>"; echo "Publisher Name"; echo "</th>";
                        echo "<th>"; echo "Price"; echo "</th>";
                        echo "<th>"; echo "Purchase Date"; echo "</th>";
                        echo "<th>"; echo "Initial Quantity"; echo "</th>";
                        echo "<th>"; echo "Available Quantity"; echo "</th>";
                        echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                        {
                          echo "<tr>";
                          echo "<td>"; echo $row["Book_id"]; echo "</td>";
                          echo "<td>"; echo $row["Book_name"]; echo "</td>";
                          echo "<td>"; echo $row["Author_name"]; echo "</td>";
                          echo "<td>"; echo $row["Publisher_name"]; echo "</td>";
                          echo "<td>"; echo $row["Price"]; echo "</td>";
                          echo "<td>"; echo $row["Purchase_date"]; echo "</td>";
                          echo "<td>"; echo $row["Quantity"]; echo "</td>";
                          echo "<td>"; echo $row["Available_quantity"]; echo "</td>";
                          echo "</tr>";
                        }
                        echo "</table>";
                         ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="">
            <div class="col-md-12 col-sm-12 colxs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Mechanical</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php
                        $query = "select * from book_details where Department = 'Mech';";
                        $result = mysqli_query($link,$query);
                        echo "<table class='table table-bordered'>";
                        echo "<tr>";
                        echo "<th>"; echo "Book ID"; echo "</th>";
                        echo "<th>"; echo "Book Name"; echo "</th>";
                        echo "<th>"; echo "Author Name"; echo "</th>";
                        echo "<th>"; echo "Publisher Name"; echo "</th>";
                        echo "<th>"; echo "Price"; echo "</th>";
                        echo "<th>"; echo "Purchase Date"; echo "</th>";
                        echo "<th>"; echo "Initial Quantity"; echo "</th>";
                        echo "<th>"; echo "Available Quantity"; echo "</th>";
                        echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                        {
                          echo "<tr>";
                          echo "<td>"; echo $row["Book_id"]; echo "</td>";
                          echo "<td>"; echo $row["Book_name"]; echo "</td>";
                          echo "<td>"; echo $row["Author_name"]; echo "</td>";
                          echo "<td>"; echo $row["Publisher_name"]; echo "</td>";
                          echo "<td>"; echo $row["Price"]; echo "</td>";
                          echo "<td>"; echo $row["Purchase_date"]; echo "</td>";
                          echo "<td>"; echo $row["Quantity"]; echo "</td>";
                          echo "<td>"; echo $row["Available_quantity"]; echo "</td>";
                          echo "</tr>";
                        }
                        echo "</table>";
                         ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Bio Tech</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php
                        $query = "select * from book_details where Department = 'BT';";
                        $result = mysqli_query($link,$query);
                        echo "<table class='table table-bordered'>";
                        echo "<tr>";
                        echo "<th>"; echo "Book ID"; echo "</th>";
                        echo "<th>"; echo "Book Name"; echo "</th>";
                        echo "<th>"; echo "Author Name"; echo "</th>";
                        echo "<th>"; echo "Publisher Name"; echo "</th>";
                        echo "<th>"; echo "Price"; echo "</th>";
                        echo "<th>"; echo "Purchase Date"; echo "</th>";
                        echo "<th>"; echo "Initial Quantity"; echo "</th>";
                        echo "<th>"; echo "Available Quantity"; echo "</th>";
                        echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                        {
                          echo "<tr>";
                          echo "<td>"; echo $row["Book_id"]; echo "</td>";
                          echo "<td>"; echo $row["Book_name"]; echo "</td>";
                          echo "<td>"; echo $row["Author_name"]; echo "</td>";
                          echo "<td>"; echo $row["Publisher_name"]; echo "</td>";
                          echo "<td>"; echo $row["Price"]; echo "</td>";
                          echo "<td>"; echo $row["Purchase_date"]; echo "</td>";
                          echo "<td>"; echo $row["Quantity"]; echo "</td>";
                          echo "<td>"; echo $row["Available_quantity"]; echo "</td>";
                          echo "</tr>";
                        }
                        echo "</table>";
                         ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Civil</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php
                        $query = "select * from book_details where Department = 'Civil';";
                        $result = mysqli_query($link,$query);
                        echo "<table class='table table-bordered'>";
                        echo "<tr>";
                        echo "<th>"; echo "Book ID"; echo "</th>";
                        echo "<th>"; echo "Book Name"; echo "</th>";
                        echo "<th>"; echo "Author Name"; echo "</th>";
                        echo "<th>"; echo "Publisher Name"; echo "</th>";
                        echo "<th>"; echo "Price"; echo "</th>";
                        echo "<th>"; echo "Purchase Date"; echo "</th>";
                        echo "<th>"; echo "Initial Quantity"; echo "</th>";
                        echo "<th>"; echo "Available Quantity"; echo "</th>";
                        echo "</tr>";

                        while($row = mysqli_fetch_array($result))
                        {
                          echo "<tr>";
                          echo "<td>"; echo $row["Book_id"]; echo "</td>";
                          echo "<td>"; echo $row["Book_name"]; echo "</td>";
                          echo "<td>"; echo $row["Author_name"]; echo "</td>";
                          echo "<td>"; echo $row["Publisher_name"]; echo "</td>";
                          echo "<td>"; echo $row["Price"]; echo "</td>";
                          echo "<td>"; echo $row["Purchase_date"]; echo "</td>";
                          echo "<td>"; echo $row["Quantity"]; echo "</td>";
                          echo "<td>"; echo $row["Available_quantity"]; echo "</td>";
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
?>



    </div>
</div>
<!-- /page content -->
<?php
include "footer.php";
?>
