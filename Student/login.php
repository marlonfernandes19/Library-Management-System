<?php
  session_start();
  include 'connection.php';
  include 'materialize.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <!--<h1 style="font-family:Lucida Console">Library Management System</h1>-->
</div>

<br>

<body class="login">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1>Student Sign In</h1>

<div class="card-panel grey lighten-5">
            <div>
                <input type="text" name="usn" class="form-control" placeholder=" USN" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder=" Password" required=""/>
            </div>
            <div>

              <div><center>
              <button class="btn waves-effect waves-light " type="submit" name="submit1">Sign in

              <i class="material-icons right">send</i>
              </button>
              </center><div>

                <!--<input class="btn btn-default submit" type="submit" name="submit1" value="Login">
                <a class="reset_pass" href="#">Lost your password?</a>-->
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <a class="reset_pass" href="student_registration.php">Create Account</a>
                <a class="reset_pass" href="\LMS\WelcomePage\index.php">Back to Home Page</a>

                <div class="clearfix"></div>
                <br/>
            </div>
          </div>
        </form>
    </section>
</div>

<?php

  if(isset($_POST["submit1"]))
  {
    $usn = $_POST[usn];
    $usn1 = strtoupper($usn);
    $_SESSION["susn"] = $usn1;
    $password = $_POST[password];
    $Account_status = "Active";

    //require ""

    $sql_query = "select * from student_details where USN = '$usn1' && Password = '$password' && Account_status = '$Account_status'; ";
    $result = mysqli_query($link,$sql_query);

    $count = 0;
    $count = mysqli_num_rows($result);

    if($count == 0)
    {
      ?>
      <script>
        Materialize.toast("Invalid Username or Password", 4000 ,'rounded' );
      </script>
      <?php
    }
    else
    {$res=mysqli_query($link,"select * from student_details where USN = '$usn1';");
      while ($row = mysqli_fetch_array($res)) {
        // code...
        $_SESSION['username'] = $row['First_Name'].' '.$row['Last_Name'];
      }
      ?>
      <script type="text/javascript">
        window.location = "my_issued_books.php";
      </script>
      <?php
    }

  }
 ?>





</body>
</html>
