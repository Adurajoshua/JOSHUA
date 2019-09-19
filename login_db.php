<?php
//$romdb=mysql_connect('localhost','root','');
//$dam=mysql_select_db('stud_profile',$romdb);

$database_host = 'localhost';
$database_user = 'root';
$database_pass = '';
$database_name = 'stud_profile';

$con = mysqli_connect ($database_host, $database_user, $database_pass, $database_name);
if (mysqli_connect_errno()){
die('failed to coonect MySQL:' .mysqli_connect_errno());

}

?>