<?php
session_start();
include 'DbClass.php';
$db = new Db();
$product_name= $_POST['product_name'];

$rows = $db -> select("select * from store where product_name='$product_name' and product_number > 0 ");
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