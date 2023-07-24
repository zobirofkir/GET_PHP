<?php
include "/home/voodoo/Desktop/GET_PHP/connected/connected.php";

$get_user = $database->prepare("SELECT * FROM film");
$get_user->execute();
$films = $get_user->fetchAll(PDO::FETCH_ASSOC);

include "/home/voodoo/Desktop/GET_PHP/view/home.html";
?>