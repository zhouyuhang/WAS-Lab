<?php
session_start();
include 'DbClass.php';
$db = new Db();
$username= $_POST['user_name'];
$password= $_POST['password'];

$rows = $db -> select("select name,password from user where name='$username' and password='$password' ");
if($rows)
{
    $_SESSION['userName']=$rows[0]['name'];
    $db -> close();
    echo json_encode($rows);
}
else
{
    $db -> close();
    echo json_encode("0");
}

?>