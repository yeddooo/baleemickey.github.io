
<?php

    $servename = "localhost";
    $username = "root";
    $password = "";
    $dbname = "balee";
 // create connection
    $conn = mysqli_connect($servename,$username,$password,$dbname);
// check connection 
if (!$conn){
    die("conection failed". mysqli_connect_error());
}
?>