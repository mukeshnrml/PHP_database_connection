<?php
// $a = 'localhost';
// $b = 'root';
// $c = '';
// $d = mysqli_connect($a, $b, $c);

// $e = 'Create database NSTI';
// $c = mysqli_query($d,$e);
// echo 'Successfully';


$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'nsti';


$conn = mysqli_connect($servername, $username, $password, $database);
$table = "create table `record` (`reg` INT(6) NOT NULL primary key, 
`name` varchar(20) NOT NULL,
`Location` varchar(20) not null,
`ID` varchar(20) not null
)";
mysqli_query($conn,$table);
echo 'Done';
// $db = 'create database dehradun';
//$delete = 'drop database dehradun';
//mysqli_query($conn, $delete);


?>