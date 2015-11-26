<?php
session_start();
include 'DbClass.php';
$db = new Db();
$username= $_POST['user_name'];
$password= $_POST['password'];
$password1= $_POST['password1'];

$results = $db -> query("UPDATE user_test SET password='$password1' WHERE name = '$username' and password= '$password' ");
$rows = $db -> select("SELECT name,password from user where name='admin' ");
if($results)
{
    $db -> close();
    echo json_encode($rows); 
}
else
{
    $db -> close();
    echo json_encode("0");
}

?>