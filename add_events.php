<?php
// Values received via ajax
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

// connection to the database
try {
    require_once('../config/connect_DB.php');
    $dsn='mysql:host='.$host.';dbname='.$dbname;


    $bdd = new PDO($dsn,$user,$password);;
} catch (Exception $e) {
    exit($e);
}

// insert the records
$sql = "INSERT INTO events (title, start, end) VALUES (:title, :start, :end )";
$q = $bdd->prepare($sql);
$q->execute(array(':title' => $title, ':start' => $start, ':end' => $end));
?>