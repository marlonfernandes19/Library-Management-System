<?php
  include "connection.php";
  $id = $_GET["Id"];
  $bid = $_GET["Bid"];
  $d = date("d-m-Y");
  $res=mysqli_query($link,"select Book_id from issue_books where Issue_id = $id;");
  $query = "update issue_books set Return_date = '$d' where Issue_id =$id;";
  mysqli_query($link,$query);
  $res=mysqli_query($link,"select Book_id from issue_books where Issue_id = $id;");
  mysqli_query($link,"update book_details set Available_quantity = Available_quantity + 1 where Book_id = '$bid';");
 ?>

 <script type="text/javascript">
    window.location="book_returns.php";
 </script>
