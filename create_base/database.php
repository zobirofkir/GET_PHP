<?php
include "/connected/connected.php";

$create = $database->prepare("CREATE TABLE film(id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, name VARCHAR(120) NOT NULL, stories VARCHAR(120) NOT NULL, la_date DATE NOT NULL)");
$create->execute();
?>