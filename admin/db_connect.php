<?php 


$server="sql312.epizy.com";
$username="epiz_31425175";
$password="jrtQFf95tKz4Yx";
$dbname="epiz_31425175_allevent";


$conn=mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}


