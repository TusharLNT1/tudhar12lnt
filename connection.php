<?php
 $server = 'localhost';
$username = "root";
$password = "";
$database = 'laal';

$conn = mysqli_connect($server,$username,$password,$database);
if($conn){
    echo " ";
}
else{
    ?>
    <script>
        alert("Unsucessful!! try again --");
    </script>
    <?php
}
?>
