<?php
// ini_set('display_errors', 1);
// error_reporting(E_ALL);
include "/home/voodoo/Desktop/GET_PHP/connected/connected.php";

if (isset($_POST['Send'])) {
    $name = $_POST['name'];
    $stories = $_POST['stories'];
    $la_date = $_POST['la_date'];

    $check_film = $database->prepare("SELECT COUNT(*) FROM film WHERE name=:name AND stories=:stories AND la_date=:la_date");
    $check_film->bindValue(":name", $name);
    $check_film->bindValue(":stories", $stories);
    $check_film->bindValue(":la_date", $la_date);
    $check_film->execute();
    $checked = $check_film->fetchColumn();

    if ($checked > 0) {
        $error = "existing";
    } else {
        $film = $database->prepare("INSERT INTO film(name, stories, la_date) VALUES (:name, :stories, :la_date)");
        $film->bindParam(":name", $name);
        $film->bindParam(":stories", $stories);
        $film->bindParam(":la_date", $la_date);
        $film->execute();
        header("Location: controller/home.php");
        
    }
}


include "/home/voodoo/Desktop/GET_PHP/view/index.html";
?>
