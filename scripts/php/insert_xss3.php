<?php
session_start();
include 'DbClass.php';
$db = new Db();
$comment= $_POST['comment'];

$results = $db -> query("INSERT INTO comment (comment) VALUES('$comment')");
$rows = $db -> select("SELECT * from comment");
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