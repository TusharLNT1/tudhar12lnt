<?php include 'con3.php'?>
<?php 
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

 
    
    $existSql = "SELECT * FROM `naan` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_fetch_array($result);
    if($numExistRows > 0){
        ?>
        <script>
         alert("Already Username Exist .. please Enter another name!")
        </script>
        <?php
    }
    else{


    if($password == $cpassword){

    $sql = "INSERT INTO `naan`(`name`,`phone`,`username`, `password`) VALUES ('$name','$phone','$username','$password')";

    $res = mysqli_query($conn, $sql);
    if($res){
        ?>
        <script>
         alert("Sucessful..signup Please Login!");
    
        </script>
        <?php
        header("location: login.php");
        
    
    }
    else if($password != $cpassword){
        ?>
        <script>
         alert("unSucessful .. Please Signup again!")
        </script>
        <?php
    }

}
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
      <h2 style="text-align:center">Signup</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
        <input type="text" name="name" placeholder="Enter Your Name" required>
        <input type="text" name="phone" placeholder="Enter Your phone NO" required>
        <input type="text" name="username" placeholder="Enter Your email" required>
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="password" name="cpassword" placeholder="Enter confirm password" required>
        <button type="submit" name="submit" class="btn btn-primary" >signup</button>
        <button type="submit" name="submit" class="btn btn-primary" ><a href="login.php">Login</a></button>
      </div>
      
    </div>
  </form>
</div>


  </div>
</div>
</form>
</body>
</html>
