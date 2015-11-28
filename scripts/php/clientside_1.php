<?php
include 'DbClass.php';
$db = new Db();
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$result = $db -> query("UPDATE store SET product_number=product_number-$quantity where product_name='iphone6s'");
if($db->error() != '')
{
    $error = $db->error();
    $db -> close();
    echo json_encode($error);
}
else
{
     $db -> close();
    echo json_encode($result);
}
?>