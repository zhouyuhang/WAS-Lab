<?php
include 'DbClass.php';
$db = new Db();

$rows = $db -> select("select * from user");
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