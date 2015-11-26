<?php
include 'DbClass.php';
$db = new Db();

$rows = $db -> select("SELECT name,password from user_test where name='admin' ");
if($db->error() != '')
{
    $error = $db->error();
    $db -> close();
    echo json_encode($error);
}
else
{
     $db -> close();
    echo json_encode($rows);
}

?>