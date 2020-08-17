<!DOCTYPE html>
<html lang="en">
<head>

      <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>


<div class="col-lg-12 text-center">

    <!--<h1 style="font-family:Lucida Console">Library Management System</h1>-->


</div>

<body class="login" style="margin-top: -20px;">

    <div class="login_wrapper">

            <section class="login_content">
              <form name="form1" action="" method="post">
                <h1>Sign Up</h1>


<div class="card-panel grey lighten-5">

                    <div>
                        <input type="text" class="form-control" placeholder=" First Name" name="firstname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder=" Last Name" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder=" USN" name="usn" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder=" Semester" name="sem" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder=" Email" name="email" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder=" Contact" name="contact" required=""/>
                    </div>

                    <div>
                        <input type="password" class="form-control" placeholder=" Password" name="password" required=""/>
                    </div>

                    <div>
                        <input type="password" class="form-control" placeholder=" Confirm Password" name="password1" required=""/>
                    </div>

                    <div><center>
                    <button class="btn waves-effect waves-light " type="submit" name="submit1">Submit

                    <i class="material-icons right">send</i>
                    </button>
                  </center></div>
 
                  <div class="separator">
                      <a class="reset_pass" href="login.php">Already registered? Sign in</a>



                      <div class="clearfix"></div>
                      <br/>


                  </div>

                </div>
              </div>

            </form>
            </section>



            <?php
              if (isset($_POST["submit1"]))
              {
                require 'connection.php';

                $firstname= $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $password = $_POST["password"];
                $password1 = $_POST["password1"];
                $usn = $_POST["usn"];
                $usn = strtoupper($usn);
                $email = $_POST["email"];
                $contact = $_POST["contact"];
                $semester = $_POST['sem'];
                $Account_status = "Inactive";

                $sql_query = "select * from student_details where USN = '$usn';";
                $selection_result = mysqli_query($link,$sql_query);

                if($password == $password1)
                {
                  if(mysqli_num_rows($selection_result) > 0)
                  {
                    ?>
                    <script type="text/javascript">
                    alert("You have already registered");
                    </script>
                    <?php
                  }
                  else
                  {
                    $sql_query = "insert into student_details (First_Name,Last_Name,Password,Email,Contact,Semester,USN,Account_status) values ('$firstname','$lastname','$password','$email','$contact','$semester','$usn','$Account_status');";
                    $insertion_result = mysqli_query($link,$sql_query);

                    if(!$insertion_result)
                      {
                        echo "Insertion Failed";
                      }
                      ?>
                      <script type="text/javascript">
                      alert("Registration successful, Wait for approval");
                      </script>


                    <?php
                    }
                  }
                  else
                  {
                    ?>
                    <script type="text/javascript">
                    alert("Passwords do not match, Please re-enter");
                    </script>
                    <?php
                  }
                }
                ?>

                </div>
                <script type="text/javascript" src="js/materialize.min.js"></script>
      </body> 
</html>
