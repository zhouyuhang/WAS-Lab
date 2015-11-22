<?php
session_start();
include 'DbClass.php';
$db = new Db();
$name=$db -> quote($_POST['user_name']);
$password=$db -> quote($_POST['password']);

$rows = $db -> select("select name,password from user where name=" . $name . " and password=" . $password . " ");
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