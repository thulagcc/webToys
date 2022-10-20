<?php
// $conn = mysqli_connect('localhost:81', 'root', '', 'asm2_200109')
// or die("Can not connect database".mysqli_connect_error());

// $server = "localhost";
// $username = "root";
// $password = "";
// $db = "asm2_200109";

// $conn = mysqli_connect($server,$username,$password,$db);
// if($conn->connect_error){
//     die("Failed ".$conn->connect_error);
// }
// $connect = pg_connect("postgres://kpxccmyoqzkujz:cdc818481992e58d6b88fa62b490c7c92257f6fde993c7f7670362fb1b51fa21@ec2-3-93-206-109.compute-1.amazonaws.com:5432/d2uuuugm90ocgr");
$conn = pg_connect("postgres://kpxccmyoqzkujz:cdc818481992e58d6b88fa62b490c7c92257f6fde993c7f7670362fb1b51fa21@ec2-3-93-206-109.compute-1.amazonaws.com:5432/d2uuuugm90ocgr");
 if(!$conn){
    die("Connection failded");
 }
// if(!$connect){
//     die("Connect failed");
// }
?>