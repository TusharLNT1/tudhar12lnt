<?php include 'con3.php';

if($_POST){
    if($_POST['operation'] == 'Logout'){

        session_unset();
        session_destroy();
        $location="login.php";
        header("Location:$location");

    }
}




?>
