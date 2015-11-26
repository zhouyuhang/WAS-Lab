<?php
session_start();
include 'DbClass.php';
$db = new Db();
$username= $_POST['user_name'];
$password= $_POST['password'];

$results = $db -> query("INSERT INTO user_test (name, password, privilege) VALUES('$username','$password',1)");
$rows = $db -> select("SELECT * from user_test");
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