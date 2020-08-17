<?php
  include "connection.php";
  $usn = $_GET["usn"];
  $query = "update student_details set Account_status = 'Active' where USN ='$usn';";
  mysqli_query($link,$query);
 ?>

 <script type="text/javascript">
    window.location="display_student_details.php";
 </script>
