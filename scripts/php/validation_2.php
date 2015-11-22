<?php
session_start();
include 'DbClass.php';
$db = new Db();
$name=$db -> quote($_POST['user_name']);
$pass=$db -> quote($_POST['password']);
$email=$db -> quote($_POST['email']);
//'' mark on $pass because $pass is string, same to $name
$rows = $db -> select("select name from user where name=" . $name . " and password=" . $pass . "  and email=" . $email . " ");
if($rows)
{
   echo json_encode($rows);
}
else
{
   echo json_encode("0");
}

?>