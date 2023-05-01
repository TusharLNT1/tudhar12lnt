<?php include 'con3.php'?>
<?php 
session_start();


if($_POST){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $exists = false;
   

    $sql = "SELECT * from naan where username='".$username."'and password = '".$password."'";
    $res = mysqli_query($conn, $sql);
    $rel = mysqli_fetch_assoc($res);
    if($rel){
       ?>
       <script>
        alert("login Sucessful" );
      //  onclick =" return confirm('visite our login page')";
       </script>
       
       <?php
       session_start();  
       header("location:https://www.brainwareuniversity.ac.in/studentselfservice/index.php?action=logout");
    }
    else{
        ?>
       <script>
        alert("login unSucessful .. Please Signup!")
       </script>
       <?php
    }

    
}


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style1.css">
</head>
<body>


<form action="" method="POST">
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <h2 style="text-align:center">Login</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="https://www.facebook.com/" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="https://mail.google.com/mail/u/0/" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
        <input type="text" name="username" placeholder="Enter Your Id" required>
        <input type="password" name="password" placeholder="Enter password" required>
        <button type="submit" name="submit" class="btn btn-primary" >Login</button>
      </div>
      
    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="signup.php" style="color:white" class="btn">signup</a>
    </div>
    <div class="col">
      <a href="logout.php" style="color:white" class="btn">Logout</a>
    </div>
  </div>
</div>
</form>
</body>
</html>
