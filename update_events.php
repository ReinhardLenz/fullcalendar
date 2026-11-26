<?php

/* Values received via ajax */
$id = $_POST['id'];
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
// update the records
$sql = "UPDATE events SET title=?, start=?, end=? WHERE id=?";
$q = $bdd->prepare($sql);
$q->execute(array($title, $start, $end, $id));
?>