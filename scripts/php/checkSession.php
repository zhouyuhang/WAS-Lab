<?php
session_start();
if(isset($_SESSION['userName'])) //variable created in validation.php
{
   echo json_encode("session exist");
}
else
{
   echo json_encode("session not exist");
}

?>