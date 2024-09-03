<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ict5";
$con = mysqli_connect($servername,$username,$password,$dbname);
if($con){
    echo "";
}
else{
    echo "connection is not done";
}



?>