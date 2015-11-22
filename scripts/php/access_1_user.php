<?php
session_start();
include 'DbClass.php';
$name = $_SESSION['userName'];
$db = new Db();

$rows = $db -> select("select * from user where name='$name' ");
if($rows)
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